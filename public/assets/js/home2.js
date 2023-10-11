
$('.the-slider-part-start').slick({

    autoplay: false,
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
          autoplay: false,

        }
      },
      {
        breakpoint: 768,
        settings: {
          dots: true,
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: true,

        }
      }
    ]
  });


  $('.milestone-slider').slick({
    dots: true,
    autoplay: false,
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
          autoplay: false,
        }
      },
      {
        breakpoint: 576,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,

        }
      }
    ]
  });

