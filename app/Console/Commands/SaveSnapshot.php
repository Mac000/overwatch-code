<?php

namespace App\Console\Commands;

use App\Traits\WaybackCommand;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Traits\AcquireCommandArgument;

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
        $urls = $this->getArgument();
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

        /* Perhaps for each saved snapshot, we should send request soon after to "Get Snapshot" api endpoint
         * so that we can correctly save the latest snapshot (returned by api) into our DB.
         * This way, we can also build record of snapshots taken by us.
         * NOTE: After hours of investigation it turns out that You can not send Get snapshot request soon after,
         * You have to schedule it. Till now, it has been observed that it takes 5-30 mins for a snapshot to
         * appear in Get snapshot endpoint. So your flow should be:
         * 1. Validate links and make sure they are accessible (do not return 4xx or 5xx errors).
         * 2. Take a Snapshot.
         * 3. Wait for some time, probably 30 mins, then get the closet snapshot via get snapshot url to get the latest
         * snapshot (potentially saved by our CRON). The key here is that the changes in site content are less likely.
         * Maybe prices are updated after every 3-4 months and specs are rarely updated. So it's a very rare chance that
         * we miss an update between our last saved snapshot and latest saved snapshot. Therefore, wait time of 30-60mins
         * should not be an issue. Another important point is that Wayback only allows saving a snapshot every 45mins for a url.
         * That means if our CRON save a snapshot then we are gurranteed that there won't be a new snapshot for 45 mins.
         * We can hit Get closet endpoint before 45 mins and get our saved snapshot link. Perhaps you should save the time
         * of your app & wayback timestamp while saving a snapshot for future use reasons.
         *
         * Note: ANother idea is to send a second save requets after a short delay like 30-120 secs. This will show
         * text like:
         * "The same snapshot had been made 3 minutes ago. You can make new capture of this URL after 45 minutes."
         * "A snapshot was captured. Visit page: /web/20220410220409/https://www.yamaha-motor.com.pk/comfort-ybr125/"
         * Using regular expressions or Laravels string helpers, presence of keywords can be tested to be sure that save
         * was successful and also get the ;atest snapshot url.
         */

        return Command::SUCCESS;
    }

    protected function saveSnapshot($url) {
        // Wrapping the Http call in try catch block is needed to catch the thrown exception so remaining code can execute
        try {
            $timestamp = Carbon::now();
            $timestamp = $timestamp->format('YmdHis'); // convert to 14 digit Unix timestamp as used by Wayback Machine
            Log::channel('saveSnapshot')->info("Unix TimeStamp : {$timestamp}");

            $keys = config('app.pages_keys');
            $product = null;
            foreach ($keys as $key) {
                if ($product === null) {
                    $product = \App\Models\Product::where("data->pages->{$key}", $url)->first();
                    if ($product !== null) break;
                }
            }
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

            session()->put('save_first_response', $response);

            if ($response->successful()) {
                // update product data attributes
                $data = json_decode($product->data);
                $data->recent_snapshot_attempt = "successful";
                $data->recent_snapshot_at = $timestamp;

                $product->data = json_encode($data);
                $product->save();
                Log::channel('saveSnapshot')->info("Updated Product Dump");
                Log::channel('saveSnapshot')->info($product);

                Log::channel('saveSnapshot')->info("Snapshot Saved. Returned Status: {$response->status()}");
                Log::channel('saveSnapshot')->info("Response Body");
                Log::channel('saveSnapshot')->info($response->body());
                return Command::SUCCESS;
            }
        } catch (RequestException $exception) {
            $logMessages = collect(["Error Occurred during verification of {$url}", "HTTP Status: {$exception->response->status()}"]);
            $this->onFailure($exception, $url, "saveSnapshot", $logMessages);
        }
    }
}
