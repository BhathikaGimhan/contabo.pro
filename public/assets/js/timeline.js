var swiper1 = new Swiper(".time-swiper", {
    spaceBetween: 0,
    loop: false,
    centerSlide: true,
    centerInsufficientSlides: true,
    centeredSlidesBounds: true,
    fade: "true",
    grabCursor: false,
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },

    breakpoints: {
        520: {
            slidesPerView: 1,
        },
        950: {
            slidesPerView: 4,
        },
    },
});

  var swiper2 = new Swiper(".time-cont-swiper", {
    spaceBetween: 0,
    loop: false,
    centerSlide: true,
    centerInsufficientSlides: true,
    centeredSlidesBounds: true,
    fade: "true",
    grabCursor: false,
    navigation: {
        nextEl: ".button-next",
        prevEl: ".button-prev",
    },

    breakpoints: {
        520: {
            slidesPerView: 1,
        },
        950: {
            slidesPerView: 4,
        },
    },
  });

  var swiper3 = new Swiper(".time-swiper-1", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,
    centerSlide: true,
    centerInsufficientSlides: true,
    centeredSlidesBounds: true,
    fade: 'true',
    grabCursor: false,
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  });

  var swiper4 = new Swiper(".time-cont-swiper-1", {
    slidesPerView: 1,
    spaceBetween: 0,
    loop: false,
    centerSlide: true,
    centerInsufficientSlides: true,
    centeredSlidesBounds: true,
    fade: true,
    grabCursor: false,
    slideActiveClass: 'slide-active',
    navigation: {
      nextEl: ".button-next",
      prevEl: ".button-prev",
    },
  });


  $(document).ready(function() {
    $(".history-column .scroll-down").click(function(event){
        $(this).parent().animate({scrollTop: '+=250px'}, 500);
    });

    $(".history-column .scroll-up").click(function(event){
        $(this).parent().animate({scrollTop: '-=250px'}, 500);
    });

    $(".go-top").click(function (event) {
        $(window).scrollTop(0);
    });
});


$(document).on('click', '.filter-item div', function () {
    $(".loading").css("display", "block");
    var type = $(this).attr('id');
    let url = "/timeline/filter-by-type-30-years/" + type;
    $("body").load(url, function () {
        $(".loading").css("display", "none");
    });
})


$(document).on('click', '.filter-item.milestone-item div', function () {
    $(".loading").css("display", "block");
    var type = $(this).attr('id');
    let url = "/timeline/filter-by-type/" + type;
    $("body").load(url, function () {
        $(".loading").css("display", "none");
    });
})


$(document).on('click', '.history-item.30-year', function () {
    let doc_id = $(this).data('doc');
    console.log(doc_id);
    let url = "/timeline/explore/" + doc_id;
    location.href = url;
})


swiper3.slideTo(getSlideIndexByClass('slide-custom'));
swiper4.slideTo(getSlideIndexByClass('slide-custom'));

function getSlideIndexByClass(className) {
    var index = 0;
    $.each($('.time-cont-swiper-1 .swiper-wrapper').children(), function(i, item) {
        if ($(item).hasClass(className)) {
            index = i;
            return false;
        }
    });
    return index;
}


