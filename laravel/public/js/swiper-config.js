const mainVisualSwiper = new Swiper('.main-visual .swiper', {
    slidesPerView: 1,
    spaceBetween: 0,
    grabCursor: true,
    loop: true,
    loopAdditionalSlides: 1,
    speed: 1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.main-visual .swiper-pagination',
        clickable: true,
    },
});
const iconListSwiper = new Swiper('.icon-list .swiper', {
    slidesPerView: 1,
    spaceBetween: 24,
    grabCursor: true,
    loop: true,
    loopAdditionalSlides: 1,
    speed: 1000,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        460: {
            slidesPerView: 3,
        },
        860: {
            slidesPerView: 4,
        },
        1260: {
            slidesPerView: 5,
            spaceBetween: 32,
        }
    },
});
