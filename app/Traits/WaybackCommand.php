<?php
namespace App\Traits;

use App\Models\Product;
use App\Notifications\SnapshotReport;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
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
     * Handle Failure response of a Wayback Machine request [HTTP errors (code >= 400)]
     * @param $exception
     * @param $url
     * @param $logChannel
     * @param $logMessages
     * @return int
     */
    protected function onFailure($exception, $url, $logChannel, $logMessages) {
        // Perhaps you should send out an email to administration email address? Or Create something like Notices/Issues
        // in Nova and admins can check up notices/issues of all types when they log into Nova

        Log::channel($logChannel)->emergency("An Exception occurred. Exception message is printed below. Relevant Log messages will be printed after exception");
        Log::channel($logChannel)->emergency($exception);
        foreach ($logMessages as $message) {
            Log::channel($logChannel)->error($message);
        }
        return $exception;
//        return Command::FAILURE;
    }

    /**
     * Handle Snapshot URL Unavailability
     * @param $exception
     * @param $url
     * @return int
     */
    protected function onSnapshotUnavailability($url, $channel) {
        Log::channel($channel)->notice("Closest Snapshot of {$url} IS NOT AVAILABLE :(");
        return "unavailable"; // receiver will check for this and run some code as seemed fit!
    }

    /**
     * Get Product by any of its page url
     * @param $url
     * @return null
     */
    // TODO: Perhaps this can be shifted to the Product model.
    protected function getProductByAnyPageUrl($url) {
        $pagesKeys = config('app.pages_keys');
        $pageKey = null;
        $product = null;
        $variantKeys = Product::VariantsKeys();
        $variantKey = null;

        foreach ($variantKeys as $variant) {
            foreach ($pagesKeys as $page) {
                if ($product == null) {
                    $product = Product::where("data->variants->{$variant}->pages->{$page}->url", $url)->first();
                    if ($product != null) {
                        $variantKey = $variant;
                        $pageKey = $page;
                        break;
                    }
                }
            }
        }
        return $product ?? null;
    }

    /**
     * Get the product page array via url of page.
     * @param $url
     * @return \Illuminate\Support\Collection|null
     */
    // TODO: Perhaps this can be shifted to the Product Model
    protected function getProductPageByUrl($url) {
        $variantKeys = Product::VariantsKeys();
        $pagesKeys = config('app.pages_keys');
        $pageKey = null;
        $variantKey = null;
        $product = null;
        $data = null;

        foreach ($variantKeys as $variant) {
            foreach ($pagesKeys as $page) {
                if ($product == null) {
                    $product = Product::where("data->variants->{$variant}->pages->{$page}->url", $url)->first();
                    if ($product != null) {
                        $variantKey = $variant;
                        $pageKey = $page;
                        break;
                    }
                }
            }
        }

        $data = json_decode($product->data, true);
        $page = $data['variants'][$variantKey]['pages'][$pageKey];

        return collect(["variant_key" => $variantKey, "page_key" => $pageKey, "page" => $page]) ?? null;
    }

    /**
     * Convert a given Carbon timestamp to Wayback Machine compatible Timestamp
     * @param Carbon $timestamp
     * @return mixed
     */
    // TODO: convert this into a helper function to make it accessible across entire system
    protected function toWaybackMachineCompatibleTimestamp($timestamp) {
        $timestamp = $timestamp->format('YmdHis'); // convert to 14 digit Unix timestamp as used by Wayback Machine
        return $timestamp;
    }

    /**
     * Convert a Wayback Timestamp to Laravel timestamp column format
     * @param $waybackTimestamp
     * @return string
     */
    protected function toTimestamp($waybackTimestamp) {
        $timestamp = Carbon::parse($waybackTimestamp)->format('Y-m-d H:i:s'); // convert to 14 digit Unix timestamp as used by Wayback Machine
        return $timestamp;
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
    }"; // } = product, } = products, } = closing
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

    protected function generateSaveSnapshotJsonReport ($url, $status, $product,
                                                       $first = false, $last = false, $index = 0,
                                                       $disk = "waybackReports", $file = "saveSnapshot.json")
    {
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
                \"url_status\": \"{$status}\"
            }
        }
    }"; // } = product, } = products, } = closing
            Storage::disk($disk)->append($file, $reportData);
        } else {
            $reportData = "\"{$index}\": {
                \"name\": \"{$product->name}\",
                \"manufacturer\": \"{$manufacturer}\",
                \"url\": \"{$url}\",
                \"url_status\": \"{$status}\"
            },";
            Storage::disk($disk)->append($file, $reportData);
        }
        $index++;
        $file = Storage::disk($disk)->get($file);
        return $file;
    }

    /**
     * Send Report over Email
     */
    protected function sendReportViaEmail($reportFile, $mailData, $receiverEmail) {
        $mailData = config('app.reports.verify_url_status');

        // json_decode $reportJson to convert it into php array and pass on to report notification class
        Notification::route('mail', config('mail.site_emails.administration'))
            ->notify(new SnapshotReport($mailData, json_decode($reportFile, true)));
    }

    // TODO: Test this function and see if it can work as a true one stop function to get any data property.
    protected function getProductAnyDataPropertyByValue($value, $dataProperty) {
        $data = Product::where("data->{$dataProperty}", $value)->pluck("data")->first();
//        $data = json_decode($data, true);

        Log::channel('dev')->info("Data:");
        Log::channel('dev')->info($data);

        $data = json_decode($data, true);
        $data = json_encode($data);
        $data = json_decode($data); // Now you can finally access the fucking data as an object

        $property = $data->{$dataProperty};
        Log::channel('dev')->info("Property:");
        Log::channel('dev')->info($property);

        return $property ?? null;
    }
}
