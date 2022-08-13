<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    /**
     * Show all blog posts on Archive page
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(Request $request) {
        $posts = BlogPost::where('featured', false)->latest()->get();
//        $posts = BlogPost::where('featured', false)->simplePaginate(9);
        $featuredPost = BlogPost::where('featured', true)->first();

        $rtl = setUrLocale($request, 'ur_blog');

        return view('pages/blog')->with([
            'posts' => $posts, 'featuredPost' => $featuredPost, 'rtl' => $rtl,
        ]);
    }

    /**
     * Show a specific Blog Post
     *
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Request $request, $slug) {
        $post = BlogPost::where('slug', $slug)->firstOrFail(); // Show 404 if Slug is incorrect
        $countryByIp = "Pakistan";
        $rtl = setUrLocale($request, 'ur_show_post', 'slug', $slug);

        return view('pages/single-post')->with([
            'post' => $post, 'countryByIp' => $countryByIp, 'rtl' => $rtl,
        ]);
    }
}
