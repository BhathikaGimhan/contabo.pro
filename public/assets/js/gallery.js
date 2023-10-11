
$('.responsive').slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 300,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    centerMode: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          autoplay: true,
        }
      },

      {
        breakpoint: 633,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        }
      }
    ]
  });



  $('.active-slider').slick({
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
    speed: 300,
    dots: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    centerMode: false,
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
          dots: false,
          autoplay: true,
        }
      },
      {
        breakpoint: 633,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        }
      },

    ]
  });


  var galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 10,
    observer: true,
    observeParents: true,
    loop: true,
    loopedSlides: 4,
    navigation: {
        nextEl: '.swiper-button-next-unique',
         prevEl: '.swiper-button-prev-unique'
       }
  });

  var galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 10,
    centeredSlides: true,
    slidesPerView: 'auto',
    touchRatio: 0.2,
    slideToClickedSlide: true,
    loop: true,
    loopedSlides: 4,
    navigation: {
      nextEl: '.swiper-button-next-unique',
       prevEl: '.swiper-button-prev-unique'
     },

  });


  galleryTop.controller.control = galleryThumbs;
  galleryThumbs.controller.control = galleryTop;



  $(document).ready(() => {
    const hamburgerMenu = document.querySelector(".hamburger__menu");
    const bodyTag = document.querySelector("body");
    mobileNav = document.querySelector(".bottom__header");
    closeNav = document.querySelector(".close__navbar");
    bgOverlay = document.querySelector(".bg__overlay");

    hamburgerMenu.addEventListener("click", () => {
        mobileNav.classList.add("active__mobileHeader");
        bodyTag.style.overflow = "hidden";
        bgOverlay.style.display = "inherit";
    });

    closeNav.addEventListener("click", () => {
        mobileNav.classList.remove("active__mobileHeader");
        bodyTag.style.overflow = "visible";
        bgOverlay.style.display = "none";
    });
  });
