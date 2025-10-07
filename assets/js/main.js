const sliderSettings = {
    loop: true,
    autoplay: { delay: 4000, disableOnInteraction: false, pauseOnMouseEnter:true },
    speed: 1000,
    pagination: { el: '.swiper-pagination', clickable: true },
    navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
};

const swiper = new Swiper('.swiper', sliderSettings);