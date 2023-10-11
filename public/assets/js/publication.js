var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    loop: false,
    centerSlide: true,
    centerInsufficientSlides: true,
    centeredSlidesBounds: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1024: {
            slidesPerView: 1,
            spaceBetween: 40,
        },
        768: {
            slidesPerView: 1,
        },
    },
    navigation: {
        nextEl: ".swiper1-button-next",
        prevEl: ".swiper1-button-prev",
    },
});
var swiper = new Swiper(".mySwiper1", {
    spaceBetween: 30,
    loop: false,
    centerSlide: true,
    centerInsufficientSlides: true,
    centeredSlidesBounds: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        768: {
            slidesPerView: 1,
        },
    },

    navigation: {
        nextEl: ".swiper-button-next-icon",
        prevEl: ".swiper-button-prev-icon",
    },
});

var swiper = new Swiper(".mySwiper3", {
    // slidesPerView: 3,
    spaceBetween: 30,
    slidesPerGroup: 3,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        1024: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
        640: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
    },

    navigation: {
        nextEl: "#button-next3",
        prevEl: "#button-prev3",
    },
});
