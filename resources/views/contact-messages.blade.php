@include('components/base')
@include('components/success')

<body class="antialiased">
<section class="w-full h-screen text-18" style="background-color: #292929">
    <h1 class="w-full text-28 text-center text-white pt-16 font-bold">Contact Messages</h1>

    <section class="mt-8 mb-8">
        @forelse($messages as $message)
            <div class="w-full md:w-2/4 mx-auto bg-white p-4 rounded-md mb-4">
                <h3 class="mb-1">
                    <span class="text-20 font-bold">Name: </span>
                    {{$message->name}}
                </h3>
                <h4 class="mb-1">
                    <span class="text-20 font-bold">Subject: </span>
                    {{$message->subject}}
                </h4>
                <p class="mb-1">
                    <span class="text-20 font-bold">Message: </span>
                    {{$message->message}}
                </p>
            </div>
        @empty
            <p class="text-center text-white">No message found. Please send some messages first.</p>
        @endforelse
    </section>
</section>

@include('components/footer')
</body>
</html>
