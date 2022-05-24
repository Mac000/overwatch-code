<?php

namespace App\Console\Commands;

use App\Traits\WaybackCommand;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Traits\AcquireCommandArgument;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

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
        /* Currently the snapshot is saved successfully but I am not able to store it in my archive.
         * Next target is to store it in "My Archive".
         * Another Next Enhancement is to allow the command to accept array of arguments (urls) and save snapshot of
         * each url in the array while properly logging it and alerting the admin in case a snapshot attempt has failed.
         */

        // Save response in session after first request in key "first_ever_response" for development reasons for now
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

        foreach ($urls as $url) {
            Log::channel('saveSnapshot')->info("Save URL Snapshot: {$url}");
            $this->saveSnapshot($url);
        }
        return Command::SUCCESS;
    }

    protected function saveSnapshot($url) {
        // Wrapping the Http call in try catch block is needed to catch the thrown exception so remaining code can execute
        try {

            $timestamp = Carbon::now("GMT");
            $timestamp = $this->toWaybackMachineCompatibleTimestamp($timestamp);
            Log::channel('saveSnapshot')->info("Wayback Machine Compatible Timestamp : {$timestamp}");

            $product = $this->getProductByAnyPageUrl($url);
            Log::channel('saveSnapshot')->info("Fetched Product via Url");
            Log::channel('saveSnapshot')->info($product);

            $response = Http::retry(3, 30)->asForm()->post('https://web.archive.org/save', [
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
            $this->onSuccess($response, $url, "saveSnapshot", $logMessages, $product, $timestamp);
            return Command::SUCCESS;
        } catch (RequestException $exception) {
            $logMessages = collect(["Error Occurred during verification of {$url}", "HTTP Status: {$exception->response->status()}"]);
            $this->onFailure($exception, $url, "saveSnapshot", $logMessages);
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
            if ($this->isSnapshotAlreadySaved($response->body(), "saveSnapshot")) return;

            $productPage = $this->getProductPageByUrl($url);
            $productPageKey = $productPage["key"];
            $productPage = $productPage["page"];
            $this->updateProductPageAfterTakingSnapshot($product, $productPage, $productPageKey, $timestamp);

            foreach ($logMessages as $message) {
                Log::channel($logChannel)->info($message);
            }
            return $response;
        }
        return null;
    }

    /**
     * Check if Snapshot was already saved in last 45min. This is dependent on a string in response body.
     * In case string is changed by Wayback, we have to update te string as well.
     * TODO: Maybe create a command that attempts to save a snapshot twice within 45 mins, if the response contains
     * TODO: --> string, all is okay; otherwise send an email so appropriate update can be made.
     * @param $htmlBody
     * @param $channel
     * @return bool
     */
    protected function isSnapshotAlreadySaved($htmlBody, $channel) {
        $alreadySavedText = Str::of(config('app.snapshot_already_taken_string'));
        Log::channel($channel)->notice("Snapshot was saved some time ago, Please wait for 45 minutes");
        return Str::contains($htmlBody, $alreadySavedText);
    }

    /**
     * Update the Product Page Key [$product->data->pages->{key/pageName}] after making a save snapshot request
     * @param $product
     * @param $productPage
     * @param $productPageKey
     * @param $timestamp
     * @return mixed
     */
    protected function updateProductPageAfterTakingSnapshot($product, $productPage, $productPageKey, $timestamp) {
        // Create an entry in snapshots as well and link snapshots to products and vice versa va eloquent relations
        // update product data attributes
        $productPage['recent_snapshot_attempted_at'] = $timestamp;
        $productPage['recent_snapshot_attempt'] = config('app.snapshot_attempt_statuses.successful');
        $productPage = $productPage;

        // Use forceFill otherwise you have to define every json key as fillable OR update entire json column.
        $product->forceFill(["data->pages->{$productPageKey}" => $productPage]);
        $product->save();
        return $product;
    }
}
