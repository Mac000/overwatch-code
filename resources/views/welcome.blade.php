@include('components/base')
@include('components/success')

<body class="antialiased">
<section class="w-full flex h-screen">
    <div class="w-full h-screen fixed">
        <img class="w-full h-full" src="/images/pexels-stein-egil-liland-1933239.jpg">
    </div>

    <a class="pl-4 pr-4 pt-2 pb-2 text-orange-500 border border-orange-500 fixed z-[99]" href="{{route('contact')}}"
       style="background-color: #292929; top: 20px; right: 20px;">
        Contact us
    </a>

    <div class="w-full z-[99] fixed mx-auto" style="top: 50px;">
        @include('components/errors')
    </div>

    <div class="w-full md:w-10/12 flex justify-center items-center text-orange-500 z-50 mt-12 p-4 mx-auto">
        <div class="flex justify-center w-2/4">
            <form class="" action="{{route('save_image')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input class="w-full block" type="file" name="image" accept="image/png, image/jpeg">
                <button class="mt-2 pl-4 pr-4 pt-2 pb-2 border border-orange-500" type="submit" style="background-color: #292929">
                    Upload Image
                </button>
            </form>
        </div>

        <div class="flex justify-center w-2/4 ml-2">
            <form class="" action="{{route('save_video')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input class="w-full block" type="file" name="video" accept="mp4, mkv">
                <button class="mt-2 pl-4 pr-4 pt-2 pb-2 border border-orange-500" type="submit" style="background-color: #292929">
                    Upload Video
                </button>
            </form>
        </div>
    </div>
</section>

@include('components/footer')
</body>
</html>
