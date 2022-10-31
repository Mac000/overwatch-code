<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SnapShot;
use Illuminate\Http\Request;

class RoutingController extends Controller
{
    // A control to deal all the routes concerned with returning pages

    public function home()
    {
        $products = Product::all();
        $recentSnapshots = SnapShot::with('product')->orderBy('created_at','desc')->take(10)->get();

        return view('pages.home')->with([
            'products' => $products,
            'recentSnapshots' => $recentSnapshots
        ]);
    }
}
