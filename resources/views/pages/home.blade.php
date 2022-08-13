@include('components.common.base')
@include('components.common.header')

<body class="antialiased">
<section class="pt-18">
    @include('components.page_specific.home.homepage-slider')
</section>

<!-- Recent Snapshots -->
@include('components.page_specific.home.recent-snapshots')

<!-- Products -->
{{--<div id="products-container" class="">--}}
{{--    @forelse($products as $product)--}}
{{--        <div class="product w-full flex-wrap md:w-1/3 md:flex-nowrap my-2">--}}
{{--            <div>--}}
{{--                <h6 class="inline-block">{{json_decode($product->data)->manufacturer}}</h6>--}}
{{--                <h6 class="inline-block">{{$product->formatted_name}}</h6>--}}
{{--            </div>--}}
{{--            <div>--}}
{{--                <h6 class="inline-block">{{json_decode($product->data)->currency}}</h6>--}}
{{--                <h6 class="inline-block">{{json_decode($product->data)->base_price}}</h6>--}}
{{--            </div>--}}
{{--            <a class="block px-2 py-3 bg-black text-white w-40 text-center"--}}
{{--               href="{{route('single-product_page', [$product->name])}}">--}}
{{--                View Snapshots--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    @empty--}}
{{--        <p>No products exist yet!</p>--}}
{{--    @endforelse--}}
{{--</div>--}}

@include('components/common/footer')
</body>
