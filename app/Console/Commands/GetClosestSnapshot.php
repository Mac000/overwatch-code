<?php

namespace App\Console\Commands;

use App\Traits\WaybackCommand;
use Illuminate\Console\Command;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use App\Traits\AcquireCommandArgument;

class getClosestSnapshot extends Command
{
    use AcquireCommandArgument, WaybackCommand;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "snapshot:closet {timestamps} {urls* : The url for which closet snapshot should be retrieved}";

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
        $timestamps = $this->getArgument('timestamps');
        $urls = $this->getArgument('urls');
        $this->logArgument(collect(["URL Argument", $urls, "Timestamp", $timestamps]), 'getClosestSnapshot');

        // convert to string to allow for String Operations
        $urls = $this->toString($urls);
        $this->logStringArgument(collect(["Stringyfied Argument:", $urls, "Type of Argument", gettype($urls)]), 'getClosestSnapshot');

        // split the array at "," and convert into sub arrays using laravel explode
        $urls = $this->toArray($urls);
        $this->logArrayArgument(collect(["Json Decoded Array after Exploding String:", $urls]), 'getClosestSnapshot');

        // Remove "[", "]", & '"' from the array using laravel replaceArray
        $urls = $this->sanitizeArgument($urls);
        $urls = $this->removeEscapeSlashes($urls);
        $this->logSanitizedArgument(collect(["Final View of Array after all the formatting", $urls]), 'getClosestSnapshot');

        $index = 0;
        foreach ($urls as $url) {
            Log::channel('getClosestSnapshot')->info("Get Snapshot URL: {$url}");
            $this->makeHttpRequest($url, $timestamps[$index]);
            $index++;
            $exitCode = Command::SUCCESS;
        }
        return $exitCode;
    }

    /**
     * Send HTTP Request to get closest Snapshot
     * @param $url
     * @param $timestamp
     * @return int|void
     */
    protected function makeHttpRequest($url, $timestamp = '') {
        try {
            $product = $this->getProductByAnyPageUrl($url);
            Log::channel('getClosestSnapshot')->info("Fetched Product via Url");
            Log::channel('getClosestSnapshot')->info($product);

            $response = Http::retry(3, 30)->get(config('app.closet_snapshot_endpoint'), [
                'url' => $url,
                'timestamp' => $timestamp,
            ])->throw();
            return $this->onSuccess($response, $url);
        } catch (RequestException $exception) {
            $logMessages = collect([
                "Error Occurred during verification of {$url}", "HTTP Status: {$exception->response->status()}",
                "HTTP Response Body dump ⬇:", $exception->response->body()
            ]);
            return $this->onFailure($exception, $url, 'getClosestSnapshot', $logMessages);
        }
    }

    /**
     * Handle Success of Http Request
     */
    protected function onSuccess($response, $url) {
        if ($response->successful()) {
            Log::channel('getClosestSnapshot')->info("Response Dump ⬇:");
            Log::channel('getClosestSnapshot')->info($response->json());

            // if closest screenshot is not available in response
            $archived_snapshots = $response->json()['archived_snapshots'];
            if (empty($archived_snapshots)) {
                return $this->onSnapshotUnavailability($url, 'getClosestSnapshot');
            }

            $closestUrl = $response->json()['archived_snapshots']['closest']['url'];
            Log::channel('getClosestSnapshot')->info("Closet Screenshot URL: {$closestUrl}");

            return $response->json(); // send the full response, leave the data manipulation on receiver function/code
        }
    }

    /**
     * Update Product Data column
     * @param $product
     * @param $attribute
     * @param $value
     * @return mixed
     */
    /*
     * TODO: Obsolete, this is here only for my reference on updating json columns. I have to test this method on how it
     * works because while updating a specific key of json column in saveSnapshot, it caused a lot of pain.
     */
    protected function updateProductData($product, $attribute, $value) {
        $data = json_decode($product->data);
        $data->{$attribute} = $value;

        $product->data = json_encode($data);
        $product->save();
        return $product;
    }
}
