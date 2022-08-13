@include('components.common.base')
@include('components.common.header')

<body class="antialiased">
@include('components/page_specific/single_product.slider')

<section class="my-6">
    <h1 class="text-center text-28">{{json_decode($product->data)->manufacturer}} {{$product->formatted_name}}</h1>
</section>

<section id="" class="w-full md:w-3/5 mx-auto">
    <div class="">
        @forelse($product->snapshots as $snapshot)
            @include('components.generic.vertical-timeline')
        @empty
            <p>No snapshots exist yet!</p>
        @endforelse
    </div>
</section>

</body>

