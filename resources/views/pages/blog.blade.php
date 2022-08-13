@include('components/common/base', [
    'title' => "Blog|how to look prettier|makeup natural looks  ",
    'meta_title' => "Blog|how to look prettier|makeup natural looks  ",
    'meta_description' => "Read about the tips to choose the best Mascara for you because finding the right mascara has never been easy.  ",
])

<body class="{{ $rtl ?? 'text-initial' }}">
@include('components/common/header')

<section class="w-11/12 md:w-4/5 mx-auto mb-12 pt-28">
    {{--    <a class="w-full flex flex-wrap md:flex-nowrap md:items-center mt-8 mb-8 p-4" style="outline: 1px solid gray"--}}
    <a class="w-full flex flex-wrap md:flex-nowrap md:items-center mt-8 mb-8 p-4"
       style="box-shadow: rgb(0 0 0 / 20%) 0px 20px 30px; margin-bottom: 45px;"
       href="{{App::currentLocale() == 'ur' ? route('ur_show_post', [$featuredPost->slug]) : route('show_post', [$featuredPost->slug])}}">
        <div class="w-full md:w-2/4 md:px-4">
            <!-- Title For Mobile View ONLY -->
            <h2 class="text-20 md:text-24 font-bold mb-2 md:hidden">
                {{App::currentLocale() == 'ur' ? $featuredPost->ur_title : $featuredPost->title}}
            </h2>
            <!-- Image For Mobile View ONLY -->
            <div class="w-full md:w-2/4 md:hidden mb-2 md:mb-0">
                <img class="" src="{{Storage::disk('blog_posts')->url($featuredPost->featured_image)}}">
            </div>

            <h6 class="text-ltr text-theme-gray text-12 md:text-14">
                {{$featuredPost->written_at}}
                <span class="bg-gray-100 text-gray-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                    Featured
                </span>
            </h6>
            <!-- Title for Desktop ONLY -->
            <h2 class="text-20 md:text-24 font-bold mt-2 mb-2 hidden md:block">
                {{App::currentLocale() == 'ur' ? $featuredPost->ur_title : $featuredPost->title}}
            </h2>
            <h5 class="mb-2">
                {{App::currentLocale() == 'ur' ? $featuredPost->ur_short_description : $featuredPost->short_description}}
            </h5>
            <button class="no-underline text-12 md:text-14 font-bold">
                READ MORE
            </button>
        </div>

        <!-- Image for Desktop View Only -->
        <div class="w-full md:w-2/4 hidden md:block">
            <img class="" src="{{Storage::disk('blog_posts')->url($featuredPost->featured_image)}}">
        </div>
    </a>

    <!-- Other Blog Posts -->
    <hr class="ml-4 mr-4">
    <section class="flex flex-wrap md:flex-nowrap w-full mb-px">
        <div class="w-full flex flex-wrap">
            @forelse($posts as $post)
                <a class="w-full flex flex-col md:w-2/4 lg:w-4/12 p-4"
                   href="{{App::currentLocale() == 'ur' ? route('ur_show_post', [$post->slug]) : route('show_post', [$post->slug])}}">
                    <div class="w-full mb-2" style="height: 400px;">
                        <img class="w-full h-full object-cover" src="{{Storage::disk('blog_posts')->url($post->featured_image)}}">
                    </div>
                    <h6 class="text-12 md:text-14 text-theme-gray mb-2">
                        {{$post->written_at}}
                    </h6>
                    <h3 class="text-18 font-bold mb-2">
                        {{App::currentLocale() == 'ur' ? $post->ur_title : $post->title}}
                    </h3>
                    <h5 class="">
                        {{App::currentLocale() == 'ur' ? $post->ur_short_description : $post->short_description}}
                    </h5>
                </a>
            @empty
                <p class="invisible">No blog posts found :(</p>
            @endforelse
        </div>
    </section>
{{--    <div class="pagination-container mb-2 px-4">--}}
{{--        --}}{{--        {{$posts->links()}}--}}
{{--    </div>--}}

    <hr class="ml-4 mr-4 mb-px">
    <hr class="ml-4 mr-4">
</section>

@include('components/common/footer')
</body>
