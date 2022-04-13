@include('components/base')
@include('components/success')

<body class="antialiased">
<section class="w-full h-screen text-white" style="background-color: #292929">

    <h1 class="w-full text-28 text-center pt-16 font-bold">Contact US</h1>

    <div class="w-full md:w-2/4 mx-auto p-2 md:p-0">
        @include('components/errors')
        <form class="" action="{{route('post_contact')}}" method="post">
            @csrf
            <div class="font-normal text-18 text-theme-gray w-full  mb-4">
                <label class="inline-block mb-2" for="name">
                    Name <span class="text-red-400">*</span>
                </label>
                <input id="name" class="w-full text-black border border-black p-2" name="name" type="text"
                       placeholder="Your Name" value="{{old('name') ?? ''}}" required>
            </div>
            <div class="font-normal text-18 text-theme-gray w-full  mb-4">
                <label class="inline-block mb-2" for="subject">
                    Subject <span class="text-red-400">*</span>
                </label>
                <input id="subject" class="w-full text-black border border-black p-2" name="subject" type="text"
                       placeholder="Subject" value="{{old('subject') ?? ''}}" required>
            </div>

            <div class="font-normal text-18 text-theme-gray w-full  mb-4">
                <label class="inline-block mb-2" for="message">
                    Message <span class="text-red-400">*</span>
                </label>
                <textarea id="message" class="w-full text-black border border-black p-2" name="message" type="text"
                       placeholder="Your Message for us" value="{{old('message') ?? ''}}" required>
                </textarea>
            </div>

            <button class="pt-2 pb-2 pr-4 pl-4 bg-black text-white border border-orange-500" type="submit">
                Send Message
            </button>
        </form>
    </div>
</section>

@include('components/footer')
</body>
</html>
