<?php
namespace App\Traits;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

trait WaybackCommand {

    /**
     * Handle successful response of a Wayback Machine request
     * @param $response
     * @param $logChannel
     * @param $logMessages
     * @return mixed|null
     */
    protected function onSuccess($response, $logChannel, $logMessages) {
        if ($response->successful()) {
            foreach ($logMessages as $message) {
                Log::channel($logChannel)->info($message);
            }
            return $response;
        }
        return null;
    }

    /**
     * Handle Failure response of a Wayback Machine request
     * @param $exception
     * @param $url
     * @param $logChannel
     * @param $logMessages
     * @return int
     */
    protected function onFailure($exception, $url, $logChannel, $logMessages) {
        // Perhaps you should send out an email to administration email address? Or Create something like Notices/Issues
        // in Nova and admins can check up notices/issues of all types when they log into Nova

        foreach ($logMessages as $message) {
            Log::channel($logChannel)->error($message);
        }
        return Command::FAILURE;
    }

    /**
     * Get Product by any of its page url
     * @param $url
     * @return null
     */
    protected function getProductByAnyPageUrl($url) {
        $keys = config('app.pages_keys');
        $product = null;
        foreach ($keys as $key) {
            if ($product === null) {
                $product = \App\Models\Product::where("data->pages->{$key}", $url)->first();
                if ($product !== null) break;
            }
        }
        return $product ?? null;
    }

    /**
     * Generate Report of Url Verification and write data to a json file
     * @param $url
     * @param $response
     * @param $product
     * @param $first
     * @param $last
     * @param $index
     * @return string
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    protected function generateVerifyUrlJsonReport($url, $response, $product,
                                                   $first = false, $last = false, $index = 0,
                                                   $disk = "waybackReports", $file = "verifyUrlStatus.json") {
        $manufacturer = json_decode($product->data)->manufacturer;

        // Opening "{" of json file
        if ($first === true) {
            Storage::disk($disk)->put($file, "{   \"products\": {");
        }

        if ($last === true) {
            $reportData = "\"{$index}\": {
                \"name\": \"{$product->name}\",
                \"manufacturer\": \"{$manufacturer}\",
                \"url\": \"{$url}\",
                \"url_status\": \"{$response->status()}\"
            }
        }
    }"; // { = product, { = products, { = closing
            Storage::disk($disk)->append($file, $reportData);
        }
        else {
            $reportData = "\"{$index}\": {
                \"name\": \"{$product->name}\",
                \"manufacturer\": \"{$manufacturer}\",
                \"url\": \"{$url}\",
                \"url_status\": \"{$response->status()}\"
            },";
            Storage::disk($disk)->append($file, $reportData);
        }
        $index++;
        $file = Storage::disk($disk)->get($file);
        return $file;
    }

    protected function generateSaveSnapshotJsonReport () {

    }
}
