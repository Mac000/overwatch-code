@include('components.common.base')
@include('components.common.header')

<body class="antialiased">
<section class="pt-18">
    <h1 class="text-28 text-center my-6">{{Str::ucfirst($category) ."s"}}</h1>

    <div class="w-full md:w-10/12 mx-auto flex flex-wrap">
        @forelse($products as $product)
            <div class="w-full md:w-4/12 my-2 px-2">
                <!-- To Add later -->
                <!-- <img src=""> -->
                <h6 class="text-18">
                    {{json_decode($product->data)->manufacturer}} {{$product->formatted_name}}
                </h6>
                <h6 class="text-16">
                    <span class="font-bold">Base Price</span>
                    {{json_decode($product->data)->currency}} {{json_decode($product->data)->base_price}}
                </h6>
                <a class="inline-flex items-center py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                   target="_blank" href="{{route('product_page', ['name' => $product->name])}}">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path></svg>
                    View Snapshots
                </a>
            </div>
        @empty
            <p>No products exist yet!</p>
        @endforelse
    </div>
</section>
</body>
