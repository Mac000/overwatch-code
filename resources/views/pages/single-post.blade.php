@include('components/common/base', [
    'title' => "Blog Post | By Mina Al Sheikhly",
    'meta_title' => "Blog Post | By Mina Al Sheikhly",
    'meta_description' => $post->short_description,
])
<link href="{{ asset('css/blog.css') }}" rel="stylesheet">

<body class="{{ $rtl ?? 'text-initial' }}">
@include('components/common/header')

<div class="w-full post-banner-image-wrapper pt-26 mb-4">
    <!--<img class="w-full object-cover post-banner-image" style="height: 60vh;"-->
    <img class="post-banner-image"
         src="{{Storage::disk('blog_posts')->url($post->banner_image)}}">
</div>

<section class="w-11/12 md:w-8/12 mx-auto mb-12">
    <div class="trix-content-wrapper mt-2 mb-2">
        <hr>
        <h1 class="text-24 md:text-36 font-bold mt-4 mb-4">
            {{App::currentLocale() == 'ur' ? $post->ur_title : $post->title}}
        </h1>
        <hr>

        <div class="flex flex-wrap justify-between py-2 border-b border-gray">
            <h6 class="mb-px text-theme-gray font-bold">{{$post->written_at}}</h6>
            @if(\Illuminate\Support\Facades\App::currentLocale() === 'en')
                <a class="underline" href="{{route('ur_show_post', ['slug' => $post->slug])}}">Read in Urdu</a>
            @else
                <a class="underline" href="{{route('show_post', ['slug' => $post->slug])}}">Read in English</a>
            @endif
        </div>
        <hr>

        <div class="trix-content mt-2 mb-2">
            {!!App::currentLocale() == 'ur' ? $post->ur_content : $post->content!!}
        </div>
    </div>
</section>

@include('components/common/footer')
</body>
