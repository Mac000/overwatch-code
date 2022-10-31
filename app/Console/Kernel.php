<?php

namespace App\Console;

use App\Models\Product;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use Laravel\Nova\Trix\PruneStaleAttachments;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // New approach starts below
//        $products = Product::all();
//        $products->shift();
//
//        $keys = config('app.pages_keys');
//        $urls = collect();
//        $timestamps = collect();
//
//        foreach ($products as $product) {
//            $data = json_decode($product->data, true);
//            foreach ($keys as $key) {
//                // Push each product page url & recent_snapshot_attempted_at value to urls & timestamps collection
//                $urls->push($data['pages'][$key]['url']);
//                $timestamps->push($data['pages'][$key]['recent_snapshot_attempted_at']);
//            }
//        }

        // New approach after adding variants
        $products = Product::all();
//        $products = Product::where('data->manufacturer', 'Suzuki')->get();
//        $products = Product::where('id', 1)->get();
        $keys = config('app.pages_keys');
        $urls = collect();
        $timestamps = collect();

        foreach ($products as $product) {
            /*
             * 1. Get Products
             * Get Product Variants.
             * for each variant, get it's pages urls (if they are different on variant basis).
             */
            $data = $product->data;
            $data = json_decode($data, true);

            // Variants can be checked for existence by checking "variants" key in data
            $variantsExist = \Illuminate\Support\Arr::exists($data, 'variants');

            // Get all the variants of product
            $variants = $data['variants'];

            // If All variants of product have same urls, then add urls of first variant only
            if ($data['has_same_urls'] === true) {
                $first = Arr::first($variants, function ($value, $key) {return true;});
                Log::info("First Variant:");
                Log::info($first);

                foreach ($keys as $key) {
                    Log::debug($first['pages']);
                    $pages = $first['pages'];
                    // verify that a given page exists AND is NOT empty. You must do that as a mistake in seeding has the
                    // potential to blow up code if key of page is not checked for existence.
                    if (\Illuminate\Support\Arr::exists($pages, $key) and !empty($pages[$key])) {
                        $urls->push($pages[$key]['url']);
                        $timestamps->push($pages[$key]['recent_snapshot_attempted_at']);
                    }
                }
            }
            // If all variants of Product do not have same urls, add url of each variant to the $urls collection
            elseif ($data['has_same_urls'] === false) {
                foreach ($variants as $variant) {
                    foreach ($keys as $key) {
                        $pages = $variant['pages'];

                        // verify that a given page exists AND is NOT empty. You must do that as a mistake in seeding has the
                        // potential to blow up code if key of page is not checked for existence.
                        if (\Illuminate\Support\Arr::exists($pages, $key) and !empty($pages[$key])) {
                            $urls->push($pages[$key]['url']);
                            $timestamps->push($pages[$key]['recent_snapshot_attempted_at']);
                        }
                    }
                }
            }
        }

        Log::channel('dev')->info("URLS of products in Kernel");
        Log::channel('dev')->info($urls);

        $schedule->command("snapshot:save {$urls}")->everyTwoMinutes();
        $schedule->command("snapshot:add {$timestamps} {$urls}")->everyThreeMinutes();
        $schedule->command('snapshot:reattempt')->everyFiveMinutes();
        $schedule->command("snapshot:verifyUrl {$urls}")->everyFiveMinutes();
        $schedule->command("snapshot:add {$timestamps} {$urls}")->hourlyAt(27);

        // Clean up Trix Attachments daily
        $schedule->call(new PruneStaleAttachments)->daily();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
