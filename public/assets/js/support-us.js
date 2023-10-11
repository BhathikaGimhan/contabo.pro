var swiper = new Swiper(".swiper", {
    slidesPerView: 2,
    spaceBetween: 0,
    loop: false,
    centerSlide: true,
    centerInsufficientSlides: true,
    centeredSlidesBounds: true,
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },

    breakpoints:{
        0: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 2,
        },
    },
  });
