<!-- Slider main container -->
<div id="homepage-main-slider" class="swiper w-full">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide">
            <img class="" src="/images/products/placeholder-2.jpg">
        </div>
        <div class="swiper-slide">
            <img class="" src="/memes/pkr-depreciation-meme.jpg">
        </div>
    </div>

    <!-- Pagination based navigation -->
    <div class="swiper-pagination"></div>
</div>

<script>
    const swiper = new Swiper('#homepage-main-slider', {
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
