@include('components/base')
@include('components/success')

<body class="antialiased">
<section class="w-full pt-16" style="background-color: #292929; min-height: 100vh; height: auto;">
    <h1 class="text-center text-28 text-white mt-6 mb-6 font-bold"> Uploaded Images & Videos</h1>

    <div class="w-full md:w-11/12 mx-auto pb-8 flex flex-wrap">
        @forelse($files as $file)
            <div class="w-full md:w-2/4 border border-orange-500" style="max-height: 500px;">
                @if($file->type == "mp4" || $file->type == "mkv")
                    <video controls style="width: 100%; height: auto; max-height: 500px;">
                        <source src="{{$file->path}}" type="video/{{$file->type}}">
                        Your browser does not support the video tag.
                    </video>
                @else
                    <img class="w-full h-full" src="{{$file->path}}" type="{{$file->type}}">
                @endif
            </div>
        @empty
            <p class="text-center text-white mx-auto">No Media found. Please upload some images/videos first</p>
        @endforelse
    </div>
</section>

@include('components/footer')
</body>
</html>
