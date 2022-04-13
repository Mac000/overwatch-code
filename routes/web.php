<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
//    $url = "https://www.yamaha-motor.com.pk/360-ybr-125/";
    $url = "https://www.yamaha-motor.com.pk/design-ybr125/";
    $keys = config('app.pages_keys');
//    dd($keys);
//    ->whereJsonContains('to', [['emailAddress' => ['address' => 'test@example.com']]])
//    $product = \App\Models\Product::where('data', [['pages' => ['main' => $url]]])->toSql();

    $product = null;
    foreach ($keys as $key) {
        if ($product === null) {
            $product = \App\Models\Product::where("data->pages->{$key}", $url)->first();
            if ($product !== null) break;
        }
    }

    $data = json_decode($product->data);
    $data->recent_snapshot_attempt = "lomraaaaa";

    $product->data = json_encode($data);
    $product->save();
    dd($product);

//    return view('welcome');
});
Route::get('contact-messages', [ContactController::class, 'showAllMessages'])->name('show_messages');
Route::get('contact-us', [ContactController::class, 'index'])->name('contact');
Route::post('contact-us', [ContactController::class, 'store'])->name('post_contact');

Route::post('/save-image', [MediaController::class, 'storeImage'])->name('save_image');
Route::post('/save-video', [MediaController::class, 'storeVideo'])->name('save_video');

Route::get('/uploaded-media', [MediaController::class, 'index'])->name('uploaded_media');
