<?php

use App\Models\FailedSnapshotUrl;
use App\Models\Product;
use App\Notifications\VerifyUrlReport;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Traits\WaybackCommand;
use \App\Http\Controllers\BlogPostController;
use \App\Http\Controllers\RoutingController;
use \App\Http\Controllers\ProductsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RoutingController::class, 'home'])->name('home_page');
Route::get('/products/{name}', [ProductsController::class, 'show'])->name('product_page');
Route::get('/products/category/{category}', [ProductsController::class, 'index'])->name('products_page');
Route::get('/products/manufacturer/{manufacturer}', [ProductsController::class, 'productsByManufacturer'])
    ->name('manufacturer_page');

Route::get('blog', [BlogPostController::class, 'index'])->name('blog');
Route::get('blog/posts/{slug}', [BlogPostController ::class, 'show'])->name('show_post');

Route::view('/timeline', 'components/generic/vertical-timeline');

/* URDU Routes */
Route::prefix('ur/')->group(function () {
    Route::get('blog', [BlogPostController::class, 'index'])->name('ur_blog');
    Route::get('blog/posts/{slug}', [BlogPostController::class, 'show'])->name('ur_show_post');
});

/*
 * Dirty prototypal code below, it should be wiped off soon.
 */
Route::get('/take-snapshots', function () {
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

            foreach ($keys as $key) {
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

    \Illuminate\Support\Facades\Artisan::queue("snapshot:save {$urls}");
    return response("Got you", 200);
});

Route::get('/test', function () {
   // prototype file download with HTTP Client
    // https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/revo_2021/Hilux-Double-Cabin-Spec-Sheet.pdf
    $response = Http::withHeaders([
        'accept' => 'application/pdf',
    ])->get('https://www.toyota-indus.com/wp-content/themes/toyotaindus/page-templates/revo_2021/Hilux-Double-Cabin-Spec-Sheet.pdf');
    // $response->body() contains the contents of pdf file which can be written to a file and saved on disk.
    \Illuminate\Support\Facades\Storage::disk('uploads')->put('/meh.pdf', $response->body()); // save file with given name and extension
});

Route::get('/products', function () {
    $products = Product::all();
    $products->shift();

    $keys = config('app.pages_keys');
    $urls = collect();
    $timestamps = collect();

    foreach ($products as $product) {
        $data = json_decode($product->data, true);
        foreach ($keys as $key) {
            // Push each product page url & recent_snapshot_attempted_at value to urls & timestamps collection
            $urls->push($data['pages'][$key]['url']);
            $timestamps->push($data['pages'][$key]['recent_snapshot_attempted_at']);
        }
    }
//    \Illuminate\Support\Facades\Artisan::call("snapshot:add", [
//        'timestamp' => $timestamps,
//        'urls' => $urls
//    ]);

    $snaps = \App\Models\SnapShot::all();
    dd($snaps);

    dd($urls);
    dd($timestamps);
});

Route::get('/mail', function () {
    $file = Storage::disk('waybackReports')->get('/verifyUrlStatus.json');
    $report = json_decode($file, true);
    $mailData = config('app.reports.verify_url_status');

    //send email
//    $receiverEmail = $receiverEmail ?? config('mail.site_emails.administration');
//    $mailData = $mailData ?? config('app.reports.verify_url_status');
//    $reportFile = Storage::disk('waybackReports')->get('/verifyUrlStatus.json');
//
//    // json_decode $reportJson to convert it into php array and pass on to report notification class
//    Notification::route('mail', $receiverEmail)
//        ->notify(new VerifyUrlReport($mailData, json_decode($reportFile, true)));

    return (new \App\Notifications\SnapshotReport($mailData, $report))->toMail(config('mail.site_emails.administration'));
});

Route::get('/honda', function () {
//    $products = Product::all();
    $products = Product::where('id', 1)->get();
//    dd($products);
    $keys = config('app.pages_keys');
    $files = collect();
    $urls = collect();

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
//        dd($variantsExist);

        // Get all the variants of product
        $variants = $data['variants'];
//        dd($variants);

        // If All variants of product have same urls, then add urls of first variant only
        if ($data['has_same_urls'] === true) {
            $first = Arr::first($variants, function ($value, $key) {return true;});

            foreach ($keys as $key) {
                $pages = $first['pages'];
                // verify that a given page exists AND is NOT empty. You must do that as a mistake in seeding has the
                // potential to blow up code if key of page is not checked for existence.
                if (\Illuminate\Support\Arr::exists($pages, $key) and !empty($pages[$key])) {
                    $urls->push($pages[$key]['url']);
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
                    }
                }
            }
        }
//        dd($urls);
    }
    dd($urls);
});
