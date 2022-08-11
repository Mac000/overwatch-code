<!-- Slider main container -->
<div id="product-main-slider" class="swiper w-full">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Ensure in code that maximum 3 or 5 images are used here regardless of how many images product has -->
{{--        @forelse($product->images as $image)--}}
{{--            <div class="swiper-slide">--}}
{{--                <img class="" src="{{$image->src}}">--}}
{{--            </div>--}}
{{--        @empty--}}
            <!-- Slide with Placeholder image -->
            <div class="swiper-slide">
                <img class="" src="/images/products/placeholder-1.jpg">
            </div>
            <div class="swiper-slide">
                <img class="" src="/images/products/placeholder-2.jpg">
            </div>

            <!-- Pagination based navigation -->
            <div class="swiper-pagination"></div>
{{--        @endforelse--}}
    </div>

    <!-- Pagination based navigation -->
    <div class="swiper-pagination"></div>
</div>

<script>
    const swiper = new Swiper('#product-main-slider', {
        speed: 1000, // Duration of transition between slides (in ms)
        autoplay: {
            delay: 8000, // Delay slide change by 8s. Basically show each slide for 8s
        },
        // autoHeight: true, // Auto adjust height to current active slide [Conflicts with pagination style]
        direction: 'horizontal', // Slide horizontally
        loop: true, // Enable looping
        effect: 'slide', // the transition effect during sliding
        preloadImages: true, // Force Preload images

        // Pagination based navigation
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>
