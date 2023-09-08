<!-- Swiper Slider JS -->
<script src="assets/js/swiper-bundle.min.js"></script>
<!-- Counter Js -->
<script src="assets/js/vanilla-counter.js"></script>
<!-- AOS Animation JS -->
<script src="assets/js/aos.js"></script>
<!-- Custom Js -->
<script src="assets/js/custom.js"></script>

<script>
    // Service Page - Partner Slider
    var partnerSwiper = new Swiper('.industry-slider', {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 100,
        speed: 2500,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
                slidesPerView: 1.7,
            },
            600: {
                slidesPerView: 3,
            },
            1000: {
                slidesPerView: 5,
            },
            1600: {
                slidesPerView: 8,
            },
        },
    });

    // together Slider
    var togetherSwiper = new Swiper('.together-slider', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        speed: 4000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        breakpoints: {
            450: {
                slidesPerView: 1.2,
            },
            700: {
                slidesPerView: 1.6,
            },
            1000: {
                slidesPerView: 2,
            },
            1600: {
                slidesPerView: 3.5,
            },
        },
    });

    // client Page - client Slider
    var clientSwiper = new Swiper('.client-slider', {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 20,
        speed: 1000,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            600: {
                slidesPerView: 2,
            },
        },
        navigation: {
            nextEl: '.client-swiper-button-next',
            prevEl: '.client-swiper-button-prev',
        },
    });

    // Counter Js
    VanillaCounter();
</script>