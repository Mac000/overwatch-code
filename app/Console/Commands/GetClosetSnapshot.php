<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Traits\AcquireCommandArgument;

class GetClosetSnapshot extends Command
{
    use AcquireCommandArgument;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'snapshot:closet {urls* : The url for which closet snapshot should be retrieved}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Gets the closet snapshot of a url using Wayback Machine API';

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
        $exitCode = Command::FAILURE;

        // get Argument
        $urls = $this->getArgument();

        Log::channel('getClosetSnapshot')->info("URL Argument:");
        Log::channel('getClosetSnapshot')->info($urls);

        // convert to string to allow for String Operations
        $urls = $this->toString($urls);

        Log::channel('getClosetSnapshot')->info("Stringyfied Argument:");
        Log::channel('getClosetSnapshot')->info($urls);
        Log::channel('getClosetSnapshot')->info("Type of Argument:");
        Log::channel('getClosetSnapshot')->info(gettype($urls));

        // split the array at "," and convert into sub arrays using laravel explode
        $urls = $this->toArray($urls);

        Log::channel('getClosetSnapshot')->info("Json Decoded array After Exploding String");
        Log::channel('getClosetSnapshot')->info($urls);

        // Remove "[", "]", & '"' from the array using laravel replaceArray
        $urls = $this->sanitizeArgument($urls);
        $urls = $this->removeEscapeSlashes($urls);

        Log::channel('getClosetSnapshot')->debug("Final View of Array after all the formatting");
        Log::channel('getClosetSnapshot')->debug($urls);

        foreach ($urls as $url) {
            Log::channel('getClosetSnapshot')->info("Get Snapshot URL: {$url}");
             $exitCode = $this->makeHttpRequest($url);
        }
        return $exitCode;
    }

    protected function makeHttpRequest($url) {
        try {
            $product = $this->getProductByPageUrl($url);
            Log::channel('getClosetSnapshot')->info("Fetched Product via Url");
            Log::channel('getClosetSnapshot')->info($product);

            $response = Http::retry(3, 30)->get(config('app.closet_snapshot_endpoint'), [
                'url' => $url,
            ])->throw();
            if ($response->successful()) {
                $closestUrl = $this->onSuccess($response, $url);

                // update product data attributes
                $product = $this->updateProductData($product, 'recent_snapshot_url', $closestUrl);
                Log::channel('getClosetSnapshot')->info("Updated Product Dump");
                Log::channel('getClosetSnapshot')->info($product);
                return Command::SUCCESS;
            }
        } catch (RequestException $exception) {
            return $this->onFailure($exception, $url);
        }
    }

    /**
     * Find Product by url of any Page
     * @param $url
     * @return |null
     */
    protected function getProductByPageUrl($url) {
        // search the product via given url
        $keys = config('app.pages_keys');
        $product = null;
        foreach ($keys as $key) {
            if ($product === null) {
                $product = \App\Models\Product::where("data->pages->{$key}", $url)->first();
                if ($product !== null) break;
            }
        }
        return $product;
    }

    /**
     * Update Product Data column
     * @param $product
     * @param $attribute
     * @param $value
     * @return mixed
     */
    protected function updateProductData($product, $attribute, $value) {
        $data = json_decode($product->data);
        $data->{$attribute} = $value;

        $product->data = json_encode($data);
        $product->save();
        return $product;
    }

    /**
     * Handle Success of Http Request
     */
    protected function onSuccess($response, $url) {
        Log::channel('getClosetSnapshot')->info("Response Dump ⬇:");
        Log::channel('getClosetSnapshot')->info($response->json()['archived_snapshots']);

        // if closest screenshot is not available in response
        $archived_snapshots = $response->json()['archived_snapshots'];
        if (isset($archived_snapshots['closest'])) {
            $this->onSnapshotUnavailability($url);
        }

        $closestUrl = $response->json()['archived_snapshots']['closest']['url'];
        Log::channel('getClosetSnapshot')->info("Closet Screenshot URL: {$closestUrl}");
        return $closestUrl;
    }

    /**
     * Handle HTTP errors (code >= 400)
     * @param $exception
     * @param $url
     * @return int
     */
    protected function onFailure($exception, $url) {
        // Perhaps you should send out an email to administration email address? Or Create something like Notices/Issues
        // in Nova and admins can check up notices/issues of all types when they log into Nova
        Log::channel('getClosetSnapshot')->error("Error Occurred during verification of {$url}");
        Log::channel('getClosetSnapshot')->alert("HTTP Status: {$exception->response->status()}");
        Log::channel('getClosetSnapshot')->info("HTTP Response Body dump ⬇:");
        Log::channel('getClosetSnapshot')->info($exception->response->body());

        return Command::FAILURE;
    }

    /**
     * Handle Snapshot URL Unavailability
     * @param $exception
     * @param $url
     * @return int
     */
    protected function onSnapshotUnavailability($url) {
        Log::channel('getClosetSnapshot')->notice("Closest Snapshot of {$url} IS NOT AVAILABLE :(");
        return Command::INVALID;
    }
}
