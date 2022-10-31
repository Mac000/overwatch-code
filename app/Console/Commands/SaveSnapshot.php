<?php

namespace App\Console\Commands;

use App\Models\FailedSnapshotUrl;
use App\Traits\WaybackCommand;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Traits\AcquireCommandArgument;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SaveSnapshot extends Command
{
    use AcquireCommandArgument, WaybackCommand;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snapshot:save {urls*}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save a website snapshot in Wayback machine';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /* Currently, the snapshot is saved successfully but I am not able to store it in my archive.
         * Next target is to store it in "My Archive".
         */

        // get Argument
        $urls = $this->getArgument('urls');
        $this->logArgument(collect(["URL Argument", $urls]), "saveSnapshot");

        // convert to string to allow for String Operations
        $urls = $this->toString($urls);
        $this->logStringArgument(collect(["Stringyfied Argument:", $urls, "Type of Argument:", gettype($urls)]), "saveSnapshot");

        // split the array at "," and convert into sub arrays using laravel explode
        $urls = $this->toArray($urls);
        $this->logArrayArgument(collect(["Json Decoded Array after Exploding String:", $urls]), "saveSnapshot");

        // Remove "[", "]", & '"' from the array using laravel replaceArray
        $urls = $this->sanitizeArgument($urls);
        $urls = $this->removeEscapeSlashes($urls);
        $this->logSanitizedArgument(collect(["Final View of Array after all the formatting", $urls]), "saveSnapshot");

        $urlsLoopIndex = 0;
        $urlsArrayLength = count($urls);
        foreach ($urls as $url) {
            $timestamp = Carbon::now("GMT");
            $timestamp = $this->toWaybackMachineCompatibleTimestamp($timestamp);
            Log::channel('saveSnapshot')->info("Wayback Machine Compatible Timestamp : {$timestamp}");

            $product = $this->getProductByAnyPageUrl($url);
            Log::channel('saveSnapshot')->info("Fetched Product via Url");
            Log::channel('saveSnapshot')->info($product);

            Log::channel('saveSnapshot')->info("Save URL Snapshot: {$url}");
            $response = $this->saveSnapshot($url, $timestamp, $product);

            // An exception occurred, Grab Request status from exception object
            if ($response instanceof RequestException) {
                $status = $response->response->status();
                Log::channel('dev')->info("An exception occurred. Continuing to next loop iteration");
//                continue;
            }
            else {
                $status = $response->status();
            }

            // TODO: This part must run regardless of successful response or exception
            // Write report information to a json file
            if ($urlsLoopIndex  === 0) { // for first ever url
                $reportFile = $this->generateSaveSnapshotJsonReport($url, $status, $product, true, false, $urlsLoopIndex);
            }
            elseif ($urlsArrayLength - $urlsLoopIndex == 1) { // for last url
                $reportFile = $this->generateSaveSnapshotJsonReport($url, $status, $product,false, true, $urlsLoopIndex);
            }
            else {
                $reportFile = $this->generateSaveSnapshotJsonReport($url, $status, $product, false, false, $urlsLoopIndex);
            }
            $urlsLoopIndex++;
        }

        // TODO: Make sure that your email template blade file is set up as per passed Data.
        // Send Report via Email
//        $mailData = config('app.reports.verify_url_status');
//        $this->sendReportViaEmail($mailData, $reportFile, config('mail.site_emails.administration'));

        return Command::SUCCESS;
    }

    protected function saveSnapshot($url, $timestamp, $product) {
        // Wrapping the Http call in try catch block is needed to catch the thrown exception so remaining code can execute
        try {
            $now = Carbon::now()->toDateTimeString();

            // Adding a delay of 60 seconds between each request has proven to prevent 429 errors.
            // Perhaps it would prevent 429 errors with 30 or 45 seconds delay as well.
            $response = Http::withOptions([
                'delay' => 50000, // 50 seconds
            ])->retry(1, 30)->asForm()->post('https://web.archive.org/save', [
                // DO not Send any Param if you don't need it as "on"
                'url' => $url,
//                'capture_outlinks' => 'on',
//                'capture_all' => 'on',
                'capture_screenshot' => 'on',
//                'wm-save-mywebarchive' => 'on',
//                'email_result' => 'on',
                ])->throw();

            $logMessages = collect([
                "Updated Product Dump", $product, "Snapshot Saved. Returned Status: {$response->status()}",
                "Response Body", $response->body()
                ]);
            return $this->onSuccess($response, $url, "saveSnapshot", $logMessages, $product, $timestamp);
        }
        catch (RequestException $exception) {
            $this->addToFailedSnapshotUrls($url, $exception, $product->id);
            $logMessages = collect(["Error Occurred while taking snapshot of {$url}", "HTTP Status: {$exception->response->status()}"]);

            $this->onFailure($exception, $url, "saveSnapshot", $logMessages);
            return $exception;
        }
    }

    /**
     * Handle Save Snapshot request success & Perform some post SnapshotTaken Operations (update product page key data)
     * @param $response
     * @param $url
     * @param $logChannel
     * @param $logMessages
     * @param $product
     * @param $timestamp
     * @return null
     */
    protected function onSuccess($response, $url, $logChannel, $logMessages, $product, $timestamp) {
        /*
         * 1. Get Product Page using Url
         * 2. Update Product Page and save the product
         */
        if ($response->successful()) {
            if ($this->isSnapshotAlreadySaved($response->body(), "saveSnapshot")) {
                return $response; // return $response so as the remaining code expects to have a $response instance
            }

            $productPage = $this->getProductPageByUrl($url);
            $productPageKey = $productPage["page_key"];
            $variantKey = $productPage["variant_key"];
            $productPage = $productPage["page"];

            $this->updateProductPageAfterTakingSnapshot($product, $productPage, $variantKey, $productPageKey, $timestamp);
            foreach ($logMessages as $message) {
                Log::channel($logChannel)->info($message);
            }

            return $response;
        }
        // perhaps you should return $reponse here as the code in this command mostly needs $response or $exception
        return null;
    }

    /**
     * Check if Snapshot was already saved in last 45min. This is dependent on a string in response body.
     * In case string is changed by Wayback, we have to update te string as well.
     * @param $htmlBody
     * @param $channel
     * @return bool
     */
    protected function isSnapshotAlreadySaved($htmlBody, $channel) {
        $alreadySavedText = Str::of(config('app.snapshot_already_taken_string'));
        if (Str::contains($htmlBody, $alreadySavedText)) {
            Log::channel($channel)->notice("Snapshot was saved some time ago, Please wait for 45 minutes");
            return true;
        }
        return false;
    }

    /**
     * Update the Product Page Key [$product->data->pages->{key/pageName}] after making a save snapshot request
     * @param $product
     * @param $productPage
     * @param $productPageKey
     * @param $timestamp
     * @return mixed
     */
    protected function updateProductPageAfterTakingSnapshot($product, $productPage, $variantKey, $productPageKey, $timestamp) {
        // Create an entry in snapshots as well and link snapshots to products and vice versa va eloquent relations
        // update product data attributes
        $productPage['recent_snapshot_attempted_at'] = $timestamp;
        $productPage['recent_snapshot_attempt'] = config('app.snapshot_attempt_statuses.successful');
        $productPage = $productPage;

        // Use forceFill otherwise you have to define every json key as fillable OR update entire json column.
        $product->forceFill(["data->variants->{$variantKey}->pages->{$productPageKey}" => $productPage]);
        $product->save();
        return $product;
    }

    /**
     * Add URLs to FailedSnapshotUrls Table when an exception occurs
     * @param $url
     * @param $exception
     * @param $productId
     * @return mixed
     */
    protected function addToFailedSnapshotUrls($url, $exception, $productId) {
        $failedSnapshotUrl = FailedSnapshotUrl::create([
           'url' => $url,
           'product_id' => $productId,
           'data' => json_encode([
               'status' => $exception->response->status(),
               'exception' => $exception,
           ]),
        ]);
        return $failedSnapshotUrl;
    }
}
