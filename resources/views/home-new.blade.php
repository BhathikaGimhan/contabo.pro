@section('assets-css')
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/final-home.css') }}">

@endsection

@extends('layouts/master')
@section('title', 'Home')
@section('content')
<style>
    .swap-header{
        color: #D5C7A2;
        text-align: center;
        font-family: Caslon Bd BT;
        font-size: 30px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
    #change-head{
        color: #A22829;
        font-family: Gauthier Next FY;
        font-size: 60px;
        font-style: normal;
        font-weight: 700;
    }
    #change-para{
        color: #103355;
        font-family: Gauthier Next FY;
        font-size: 25px;
        font-style: normal;
        font-weight: 700;
        line-height: 136%; /* 34px */
        position: relative;
    }
#change-h3{
color: #8D7237;
text-align: center;
font-family: Gauthier Next FY;
font-size: 30px;
font-style: normal;
font-weight: 700;
line-height: normal;
}

#left-arrow{
rotate: -90deg;
}
#right-arrow{
rotate: -90deg;
}
.storySwiper, .timelineSwiper {
    background-image: url('{{ asset('assets/images/change/oldPaper.jpeg') }}');
        background-size: cover; /* Adjust as needed */
        background-repeat: no-repeat;
        background-position: center center;
        border:none;
        box-shadow: 10px 10px 10px gray;
}
#bg-change{
    background: #293038;
    color: #D5C7A2;
    pointer-events: none;
    gap: 20px;

}
#bg-change h1{
    color: #F2ECE0;
text-align: center;
font-family: Gauthier Next FY;
font-size: 60px;
font-style: normal;
font-weight: 700;
position: relative;
line-height: 0%; /* 0px */
}
#bg-change p{
    color: #F2ECE0;
    padding-top: 20px;

text-align: center;
font-family: Gauthier Next FY;
font-size: 20px;
font-style: normal;
font-weight: 700;
line-height: 136%; /* 27.2px */
}
#change-row h1{
    color: #FFE6B0;
text-align: center;
font-family: Gauthier Next FY;
font-size: 40px;
font-style: normal;
font-weight: 700;
line-height: normal;
padding-top: 40px
}
#padding{
    padding-bottom: 40px;
    color: #F2ECE0;
text-align: center;
font-family: Gauthier Next FY;
font-size: 60px;
font-style: normal;
font-weight: 700;
line-height: 0%; /* 0px */
}
.collection-sec-item{
    padding: 20px;
}

.slider-text p{
    align-items: center;
    text-align: center;
    justify-content: center;
}
.slider-read-more span{
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    position: relative;
}
#start-section img{
    margin-left:-50px;
    position: relative;

}
#homep{
    margin-right:-100px;
    position: relative;
}

#start-section{
    background-image: url('{{ asset('assets/images/homepage-sections/background/Section_Background 01-min.png') }}');
}
#broun{
    color: #8D7237;
    text-align: center;
    font-family: Gauthier Next FY;
    font-size: 25px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.trinity-story{
    background-image: url('{{ asset('assets/images/homepage-sections/background/Section_Background 02-min.png') }}');
}
.digital-archive-sec,.trinity-3d{
    background-image: url('{{ asset('assets/images/homepage-sections/background/Section_Background 01-min.png') }}');
}
.digital-footprint-sec{
    background-image: url('{{ asset('assets/images/homepage-sections/background/Section_Background 02-min.png') }}');
}
.companion-vol-section{
    background-image: url('{{ asset('assets/images/homepage-sections/background/Section_Background 02-min.png') }}');
}

.slideshow-container {
            position: relative;
            width: 446px;
            height: 150px;
            overflow: hidden;
            background-image: url('{{ asset('assets/images/change/oldPaper.jpeg') }}');
            background-size: cover;
            /* Adjust as needed */
            background-repeat: no-repeat;
            background-position: center center;
            border: none;
            box-shadow: 5px 5px 10px gray;
            margin: auto;
        }

        .slider {
            position: relative;
            width: 556px;
            height: 160px;
            overflow: hidden;
            margin: 50px auto;
        }

        .slide {
            display: none;
            width: 100%;
            height: 100%;
            text-align: center;
        }

        .slide p {
            margin-top: 30px;
        }

        .nav-arrow {
            position: absolute;
            top: 50%;
            cursor: pointer;
            font-size: 30px;
            color: #333;
            user-select: none;
            transform: translateY(-50%);
        }

        #left-arrow {
            left: 20px;
            color: #103355;
        }

        #right-arrow {
            right: -20px;
            color: #103355;
        }

        .current-slide {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .indicators {
            text-align: center;
            margin-top: -30px;
        }

        .indicator {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 0 2px;
            background: rgba(16, 51, 85, 0.45);
            cursor: pointer;
        }

        .indicator.active {
            background: #103355;
        }

        #slide a {
            text-decoration: none;
        }

        #slide h1 {
            color: #103355;
            text-align: center;
            font-family: Gauthier Next FY;
            font-size: 25px;
            font-style: normal;
            font-weight: 700;
            top: 40px;
            position: relative;
        }

        #slide h3 {
            color: #8D7237;
            text-align: center;
            font-family: Gauthier Next FY;
            font-size: 25px;
            font-style: normal;
            font-weight: 700;
            top: 40px;
            position: relative;
        }


        .slideNew {
            display: none;
            width: 100%;
            height: 100%;
            text-align: center;
        }

        .slideNew p {
            margin-top: 30px;
        }

        .nav-arrow {
            position: absolute;
            top: 50%;
            cursor: pointer;
            font-size: 30px;
            color: #333;
            user-select: none;
            transform: translateY(-50%);
        }

        #left-arrowNew {
            left: 20px;
            color: #103355;
        }

        #right-arrowNew {
            right: 20px;
            z-index: 9999;
            color: #103355;
        }

        .current-slideNew {
            position: absolute;
            bottom: 10px;
            left: 50%;
            transform: translateX(-50%);
        }

        .indicators {
            text-align: center;
            margin-top: -30px;

        }

        .indicatorNew {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin: 0 2px;
            background: rgba(16, 51, 85, 0.45);
            cursor: pointer;
            display: none;
        }

        .indicatorNew.active {
            background: #103355;
        }

        #slideNew a {
            text-decoration: none;
        }

        #slideNew h1 {
            color: #103355;
            text-align: center;
            font-family: Gauthier Next FY;
            top: 40px;
            position: relative;
            font-size: 1.5em  !important;
        }

        #slideNew h3 {
            color: #8D7237;
            text-align: center;
            font-family: Gauthier Next FY;
            font-size: 25px;
            font-style: normal;
            font-weight: 700;
            top: 40px;
            position: relative;
        }
        #changebtn a {
            width: 300px;
            background: #103355;
        }

</style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 ">
                <!-- Swiper -->
                <div class="swiper main-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/01.png') }}" alt="">
                                <div class="slider-text text-center">
                                    <h3 class="swap-header">Welcome to the Trinity History website</h3>
                                    <p>
                                        We are excited to present a complete digital archive of Trinity’s rich
                                        historical records. Here, you will be able to explore various publications,
                                        readings related to various stories, people and events of Trinity’s History
                                        combined with collections of records, albums, 3D tours and many more...
                                    </p>
                                    <a href="#start-section">
                                        <p>&#11167;</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/02.png') }}" alt="">
                                <div class="slider-text text-left row align-items-end">
                                    <div>
                                        <h3 class="swap-header">THE TRINITY STORY</h3>
                                        <p>
                                            The Trinity Story 1872 -2022 provides a narrative of the abundant life and
                                            times of Trinity as
                                            envisioned by the founding fathers and then richly nurtured by Teachers and
                                            Students and Staff in building the Trinity Home. Of how it was built on the
                                            foundations and traditions and handing them down through generations to what
                                            still may justifiably be called the Best School of All
                                        </p>
                                        <a class="slider-read-more" href="{{ route('trinity-story') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/03.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div>
                                        <h3 class="swap-header">THE COMPANION VOLUME</h3>
                                        <p>
                                            The Trinity History Companion Volume covering the last 50 years ( 1972-2022)
                                            provides a
                                            chronology to record and rekindle events for the recent generations. It
                                            provides a continuurn to key statistics and references supplementing the 100
                                            year publication.
                                        </p>
                                        <a class="slider-read-more" href="{{ route('companion-volume') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/04.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div>
                                        <h3 class="swap-header">Honour Boards</h3>
                                        <p>
                                            Browse the names of individuals who has brought glory and honour to Trinity
                                            through their achievements in and outside the classroom.
                                        </p>
                                        <a class="slider-read-more" href="{{ route('honour-boards.index') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/05.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div>
                                        <h3 class="swap-header">The Chapel</h3>
                                        <p>
                                            Built in the lines of Sri Lankan and Kandyan architecture and dedicated to
                                            the service of God in 1935, the Trinity College Chapel stands in a serene
                                            environment in the School. The Chapel is known to be one of the greatest
                                            architectural undertakings in contemporary Sri Lanka.
                                        </p>
                                        <a class="slider-read-more" href="{{ route('chapel') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/06.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div>
                                        <h3 class="swap-header">Principals’ Gallery</h3>
                                        <p>
                                            Get to know the custodians of this great institution, their contributions to
                                            the Trinity community and how they uplifted the overall educational and
                                            extracurricular aspects of Trinity.
                                        </p>
                                        <a class="slider-read-more" href="{{ route('principal.index') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/07.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div>
                                        <h3 class="swap-header">Staff Gallery</h3>
                                        <p>
                                            Get to know the Staff members of Trinity who immensly contributed to the
                                            overall education and upbringing of Trinitians.
                                        </p>
                                        <a class="slider-read-more" href="{{ route('staff.index') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/08.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div>
                                        <h3 class="swap-header">Historical References</h3>
                                        <p>
                                            Browse through a collection of publications and reading materials that has
                                            been dedicated to the history of Trinity College, its people, places and
                                            events.
                                        </p>
                                        <a class="slider-read-more" href="{{ route('publications') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/09.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div>
                                        <h3 class="swap-header">Footprints</h3>
                                        <p>
                                            The footprints of Trinity are traced in sands of its 150 year time horizon.
                                            Using cutting edge
                                            technology enables drill down capability to key features that complements
                                            the Trinity Story 1872-2022.
                                        </p>
                                        <a class="slider-read-more" href="{{ route('publications') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/10.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div class="col-md-10">
                                        <h3 class="swap-header">Digital</h3>
                                        <p>
                                            THE TRINITY STORY is embellished by a Photo Gallery —of the college Campus
                                            and of the
                                            surrounding landscape, of places and people ---of Principals and Teachers,
                                            of Support Staff, of sport teams, of groups and associations , of historical
                                            and other notable events.
                                        </p>
                                        <a class="slider-read-more" href="{{ route('gallery.index') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/11.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div>
                                        <h3 class="swap-header">VIRTUAL</h3>
                                        <p>
                                            Walkthrough the hallowed grounds of Trinity within our 3D Tours of Buildings
                                            and around the College Premises
                                        </p>
                                        <a class="slider-read-more" href="{{ route('tours') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slider-box">
                                <img src="{{ asset('assets/images/home-slider-images/12.png') }}" alt="">
                                <div class="slider-text text-left row align-items-start container">
                                    <div>
                                        <h3 class="swap-header">Miscellanea</h3>
                                        <p>
                                            Read the stories, anecdotes and articles contributed by the Old Boys putting
                                            pen to paper their memories of Trinity...
                                        </p>
                                        <a class="slider-read-more" href="{{ route('tours') }}">
                                            <div class=""><span>Read More &#10148</span></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="light-bg-cream" id="start-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 home-section"> <!-- Make it take up half of the width -->
                    <div class="content-section section-01">
                        <div class="section-01-header">
                            <img class="thp-section-02-logo"
                                src="{{ asset('assets/images/homepage-sections/1-min.png') }}" alt="Trintiy Logo">
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 home-section" id="homep"> <!-- Make it take up half of the width -->
                    <div class="content-section">
                        <div class="section-01-header">
                            <h1 id="change-head">Where River, Lake and Mountain Meet</h1>

                        </div>
                        <p id="change-para">
                            True to the principles of its Anglican founders, Trinity College has always endeavoured to
                            instill
                            and nurture qualities such as respect, compassion, self-discipline, fairness, honesty and
                            integrity. As an Anglican school, but with children from many religions, we believe
                            that
                            these virtues are valued not only by Christians, but by members of all faiths.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 home-section section-02-image"
                style="background-image:url('{{ asset('assets/images/homepage-sections/2-min.jpg') }}');">
                <div class="section-02 text-center">
                    <h1>Timeless and Evergreen!</h1>
                    <h3 id="broun">THE STORY OF THE TRINITY HISTORY PROJECT</h3>
                    <p>
                        The Trinity Story is Timeless and Evergreen. Ensconced ‘where river lake and mountain meet our
                        boyhood home surrounding’ is brought to life through a narrative of Spirit, Place and People
                        spanning one hundred and fifty vibrant years that made men into gentlemen and good citizens out
                        of boys. The threads of history are woven on the cavass that is The Trinity Story, supported by
                        a more detailed Companion Volume; and an exciting interactive Digital Timeline, an expansive
                        Photo Gallery and a fremescent Storyboard for alumni to chalk on.
                    </p>
                    <a class="read-more read-more-hover" href="{{ route('about') }}">Read More</a>
                </div>
            </div>

            <div class="col-md-12 home-section light-bg-blue section-03 trinity-story" style="padding: 11rem 10rem">
                <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 the-story text-center">
                        <h1 class="justify-content-center">The Trinity Story</h1>
                        <div class=" justify-content-center story-content">
                            <div class="text">
                                <h3 id="broun">The Abundant Life at Trinity</h3>
                                <p class="text-center">
                                    The Trinity Story 1872 -2022 provides a
                                    narrative of the abundant life and times of Trinity as envisioned by the founding
                                    fathers and then richly nurtured by
                                    Teachers and Students and Staff in
                                    building the Trinity Home. Of how it was built on the foundations and traditions and
                                    handing them down through
                                    generations to what still may justifiably be called the Best School of All.
                                </p>
                            </div>
                        </div>
                        <div class="slider">
                            <div class="slideshow-container">
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch01') }}">
                                        <h1 >THE TRINITY SPIRIT</h1>
                                        <h3 >Chapter 01</h3>
                                    </a>
                                </div>
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch02') }}">
                                        <h1 >THE FIRST 100 YEARS 1872-1972</h1>
                                        <h3 >Chapter 02</h3>
                                    </a>
                                </div>
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch03') }}">
                                        <h1 >THE LAST FIFTY YEARS</h1>
                                        <h3 >Chapter 03</h3>
                                    </a>
                                </div>
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch04') }}">
                                        <h1 >CHAPTER NAME GOES HERE</h1>
                                        <h3 >Chapter 04</h3>
                                    </a>
                                </div>
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch05') }}">
                                        <h1 >CHAPTER NAME GOES HERE</h1>
                                        <h3 >Chapter 05</h3>
                                    </a>
                                </div>
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch06') }}">
                                        <h1 >CHAPTER NAME GOES HERE</h1>
                                        <h3 >Chapter 06</h3>
                                    </a>
                                </div>
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch07') }}">
                                        <h1 >CHAPTER NAME GOES HERE</h1>
                                        <h3 >Chapter 07</h3>
                                    </a>
                                </div>
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch08') }}">
                                        <h1 >CHAPTER NAME GOES HERE</h1>
                                        <h3 >Chapter 08</h3>
                                    </a>
                                </div>
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch09') }}">
                                        <h1 >CHAPTER NAME GOES HERE</h1>
                                        <h3 >Chapter 09</h3>
                                    </a>
                                </div>
                                <div class="slide" id="slide">
                                    <a href="{{ route('trinity-story-ch10') }}">
                                        <h1 >CHAPTER NAME GOES HERE</h1>
                                        <h3 >Chapter 10</h3>
                                    </a>
                                </div>
                            </div>

                            <span id="left-arrow" class="snake-peak-nav nav-arrow">&#11165;</span>
                            <span id="right-arrow" class="snake-peak-nav nav-arrow">&#11167;</span>
                        </div>
                        <div class="indicators">
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                            <span class="indicator"></span>
                        </div>
                        <script>
                            let currentSlide = 0;
                const slides = document.querySelectorAll('.slide');
                const indicators = document.querySelectorAll('.indicator');
                const currentSlideNumber = document.getElementById('current-slide-number');

                function showSlidef(n) {
                    slides[currentSlide].style.display = 'none';
                    indicators[currentSlide].classList.remove('active');
                    currentSlide = (n + slides.length) % slides.length;
                    slides[currentSlide].style.display = 'block';
                    indicators[currentSlide].classList.add('active');
                    currentSlideNumber.textContent = currentSlide + 1;
                }

                document.getElementById('left-arrow').addEventListener('click', () => showSlidef(currentSlide - 1));
                document.getElementById('right-arrow').addEventListener('click', () => showSlidef(currentSlide + 1));

                indicators.forEach((indicator, indexf) => {
                    indicator.addEventListener('click', () => showSlidef(indexf));
                });

                showSlidef(currentSlide);
                        </script>
                        <a class="read-the-story-book read-more-hover" href="{{ route('about') }}">Read the story
                            book</a>
                    </div>
                    {{-- <div class="col-lg-4 col-md-12 pt-md-5 pt-lg-0 sneak-peak">
                        <div class="no-background">
                            <div class="">
                                <div class="up-arrow text-center snake-btn" id="story-up-btn">
                                    <span id="left-arrow"  class="snake-peak-nav nav-arrow">&#11165;</span>
                                </div>
                                <div class="colored">
                                    <div id="storySwiper" class="storySwiper">
                                        <div class="story-item active" data-index="0">
                                            <a href="{{ route('trinity-story-ch01') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">THE TRINITY SPIRIT</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 01</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="story-item" data-index="1">
                                            <a href="{{ route('trinity-story-ch02') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">THE FIRST 100 YEARS 1872-1972</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 02</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="story-item" data-index="2">
                                            <a href="{{ route('trinity-story-ch03') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">THE LAST FIFTY YEARS</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 03</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="story-item" data-index="3">
                                            <a href="{{ route('trinity-story-ch04') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">CHAPTER NAME GOES HERE</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 04</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="story-item" data-index="4">
                                            <a href="{{ route('trinity-story-ch05') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">CHAPTER NAME GOES HERE</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 05</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="story-item" data-index="5">
                                            <a href="{{ route('trinity-story-ch06') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">CHAPTER NAME GOES HERE</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 06</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="story-item" data-index="6">
                                            <a href="{{ route('trinity-story-ch07') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">CHAPTER NAME GOES HERE</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 07</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="story-item" data-index="7">
                                            <a href="{{ route('trinity-story-ch08') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">CHAPTER NAME GOES HERE</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 08</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="story-item" data-index="8">
                                            <a href="{{ route('trinity-story-ch09') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">CHAPTER NAME GOES HERE</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 09</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="story-item" data-index="9">
                                            <a href="{{ route('trinity-story-ch10') }}">
                                                <div class="snake-peak-item">
                                                    <h1 class="change-text-color">CHAPTER NAME GOES HERE</h1>
                                                    <div class="d-flex justify-content-between">
                                                        <h3 class="change-text-color">Chapter 10</h3>
                                                        <p class="timeline-readmore text-left">READ MORE</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="up-arrow text-center snake-btn" id="story-down-btn">
                                    <span id="right-arrow"  class="snake-peak-nav-down nav-arrow">&#11167;</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            </div>

            <div class="col-md-12 home-section section-02-image"
                style="background-image:url('{{ asset('assets/images/homepage-sections/3-min.jpg') }}');">
                <div class="section-02 text-center" style="padding-top: 35rem !important;">
                    <h1 id="change-head">Our Boyhood’s Home Surrounding</h1>
                    <p id="change-para">
                        True to the principles of its Anglican founders, Trinity College has always endeavoured to
                        instill and nurture qualities such as respect, compassion, self-discipline, fairness, honesty
                        and integrity. As an Anglican school, but with children from many different religions, we
                        believe that these virtues are valued not only by Christians, but by members of all faiths.
                    </p>
                </div>
            </div>

            <div class="col-md-12 home-section section-03 light-bg-blue companion-vol-section">
                <div class="container justify-content-center text-center"> <!-- Add text-center class here -->
                    <div class="row">
                        <div class="companion-vol">
                            <h1>The Sesquicentennial Number</h1>
                            <div class="d-flex justify-content-center companion-vol-content"> <!-- Add justify-content-center class here -->
                                <div class="text text-center"> <!-- Add text-center class here -->
                                    <h3 id="change-h3">1972-2022 Companion to The Trinity Story</h3>
                                    <p class="pl-0">
                                        The Trinity History Companion Volume covering the last 50 years (1972-2022) provides a chronology
                                        to record and rekindle events for the recent generations. It provides a continuum to key statistics and
                                        references supplementing the 100 year publication. It sets out the changing face of Trinity, and
                                        adaptations in the classrooms, in House Associations, in the religious movements, in the
                                        aesthetics and landscape. It details various adaptations to the times ranging from the Chapel, the
                                        Farm, the cadet corps; social services, use of information technology and to developments of the
                                        Archives and libraries.
                                    </p>
                                </div>
                            </div>
                            <a class="read-the-story-book read-more-hover" href="{{ route('companion-volume') }}">READ THE
                                COMPANION
                                VOLUME</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-12 home-section section-03 light-bg-cream his-ref-section historical-references-section" style="background-image:url('{{ asset('assets/images/homepage-sections/08.jpg') }}');">
                <div class="row justify-content-end align-items-center"> <!-- Added classes to center content vertically and horizontally -->
                    <div class="col-lg-4 col-md-12 historical-ref text-center"> <!-- Added text-center class to center content -->
                        <h1>Historical References</h1>
                        <div>
                            <h3 id="change-h3">Explore Trinity’s </h3>
                            <h3 id="change-h3">History online</h3>
                            <p>Immerse yourself in Trinity's rich history through our collection of PDF booklets. Explore official publications, college magazines, and recommended reading materials, all dedicated to the captivating story of Trinity.</p>
                        </div>
                        <a class="read-the-story-book read-more-hover" href="{{ route('publications') }}">VIEW OUR HISTORICAL REFERENCES</a>
                    </div>
                </div>
            </div>


            <div class="col-md-12 home-section section-03 light-bg-blue digital-footprint-sec" style="padding: 8em 10em;">
                <div class="row">
                    <div class="col-lg-12 col-md-12 the-story text-center">
                        <h1 class="justify-content-center">Digital Footprints</h1>
                        <div class=" justify-content-center story-content">
                            <div class="text">
                                <h3 id="broun">Milestones of Trinity’s important moments</h3>
                                <p class="text-center">
                                    The Trinity Story 1872 -2022 provides a
                                    narrative of the abundant life and times of Trinity as envisioned by the founding
                                    fathers and then richly nurtured by Teachers and
                                    Students and Staff in building the Trinity Home. Of how it was built on the
                                    foundations and traditions and handing them down through generations to what still
                                    may
                                    justifiably be called the Best School of All.
                                </p>
                            </div>
                        </div>
                        <div class="slider">
                            <div class="slideshow-container">

                                    @foreach ($timeline_array as $key => $item)
                                    <div id="slideNew" class="slideNew">
                                    <h1 >{{ $item['title'] }}</h1>
                                    <h3>{{ $item['year'] }}</h3>
                                    </div>
                                    @endforeach


                            </div>
                            <span id="left-arrowNew" class="snake-peak-nav nav-arrow">&#11164;</span>
                            <span id="right-arrowNew" class="snake-peak-nav nav-arrow">&#11166;</span>
                        </div>
                        <div class="indicators">
                            @foreach ($timeline_array as $key)
                            <span class="indicatorNew"></span>
                            @endforeach
                        </div>
                        <script>
                            let currentSlideNew = 0;
                            const slidesNew = document.querySelectorAll('.slideNew');
                            const indicatorsNew = document.querySelectorAll('.indicatorNew');
                            const currentSlideNumberNew = document.getElementById('current-slideNew-number');

                            function showSlide(n) {
                                slidesNew[currentSlideNew].style.display = 'none';
                                indicatorsNew[currentSlideNew].classList.remove('active');
                                currentSlideNew = (n + slidesNew.length) % slidesNew.length;
                                slidesNew[currentSlideNew].style.display = 'block';
                                indicatorsNew[currentSlideNew].classList.add('active');
                                currentSlideNumberNew.textContent = currentSlideNew + 1;
                            }

                            document.getElementById('left-arrowNew').addEventListener('click', () => showSlide(currentSlideNew - 1));
                            document.getElementById('right-arrowNew').addEventListener('click', () => showSlide(currentSlideNew + 1));

                            indicatorsNew.forEach((indicatorNew, index) => {
                                indicatorNew.addEventListener('click', () => showSlide(index));
                            });

                            showSlide(currentSlideNew);
                        </script>

                        <a class="read-the-story-book read-more-hover" href="{{ route('timeline.index') }}">VISIT THE
                            TIMELINE</a>


                    </div>
                    {{-- <div class="col-lg-5 col-md-12 pt-md-5 pt-lg-0">
                        <div class="">
                            <div class="">
                                <div class="up-arrow text-center snake-btn" id="timeline-up-btn">
                                    <span class="snake-peak-nav nav-arrow">&#11165;</span>
                                </div>
                                <div class="timelineSwiper colored">
                                    @foreach ($timeline_array as $key => $item)
                                        <div class="timeline-item @if ($key < 1) active @endif"
                                            data-tindex="{{ $key }}">
                                            <a href="">
                                                <div class="snake-peak-item">
                                                    <div class="d-flex justify-content-between row">
                                                        <div class="col">
                                                            <h1 class="limited-width-text change-text-color"
                                                                style="font-size: 1.5em  !important;">{{ $item['title'] }}
                                                            </h1>
                                                            <a class="timeline-readmore">READ MORE</a>
                                                        </div>
                                                        <div class="year-section col">
                                                            <h3>{{ $item['year'] }}</h3>
                                                            <div class="small-line"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="up-arrow text-center snake-btn" id="timeline-down-btn">
                                    <span class="snake-peak-nav-down nav-arrow">&#11167;</span>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>

            <div class="col-lg-6 col-md-12 home-section section-03 light-bg-cream sub-section-padding"
                style="background-image:url('{{ asset('assets/images/homepage-sections/05-min.png') }}');">
                <div class="row">

                </div>
            </div>
            <div class="col-lg-6 col-md-12 home-section section-03 light-bg-cream digital-archive-sec">
                <div class="row" style="padding-top: 10em;">
                    <div class="col-md-12 text-center">
                        <h1>Digital Archive</h1>
                        <div class="row">
                            <h3 id="change-h3">A picture is a thousand words!</h3>
                            <p class="text-center">
                                THE TRINITY STORY is embellished by a Photo Gallery - of the college Campus and of the
                                surrounding landscape, of places and people -of Principals and Teachers, of Support
                                Staff, of sport teams, of groups and associations , of historical and other notable
                                events.
                            </p>
                        </div>
                        <a class="read-the-story-book read-more-hover" href="{{ route('gallery.index') }}">BROWSE THE
                            DIGITAL
                            ARCHIVE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 home-section section-02-image section-03 path-behold"
                style="background-image:url('{{ asset('assets/images/homepage-sections/4-min.jpg') }}'); padding-top: 5em">
                <div class="section-02 text-center" style="padding-bottom: 30rem !important; padding-top: 0!important;">
                    <h1 id="change-head" style="font-size: 3rem;">A path behold for youthful feet</h1>
                    <p id="change-para">
                        Trinity College aims to produce the next generation of leaders in Sri Lanka. As such, boys
                        should leave the school confident, articulate, well-balanced and able to think for themselves.
                        They should be comfortable both in English and in their mother tongue. They should be
                        ambitious and determined, yet sensitive to the needs of others. And they should be critical and
                        creative thinkers, who are ready to make a positive difference to their country and to the
                        world.
                    </p>
                </div>
            </div>

<div id="bg-change" class="col-md-12  home-section section-03 collection-main" style="padding: 9rem 10rem">
    <div class="row">
        <div id="changebtn" class="col-md-12">
            <div class="d-flex justify-content-center align-items-center collection-header">
                <h1 id="padding">Collections</h1>
            </div>
            <div  class="row justify-content-center align-items-center pt-5 collection-section">
                <div class="col-md-4 collection-sec-item">
                    <div class="text-center collection-box">
                        <h1>Honour Boards</h1>
                        <p>Visit our page dedicated to Honour Boards! Here, we celebrate the remarkable individuals who have made significant contributions to Trinity and the wider world through academics and sports</p>
                        <a class="read-the-story-book read-more-hover"
                            href="{{ route('honour-boards.index') }}">VIEW MORE</a>
                    </div>
                </div>
                <div class="col-md-4 collection-sec-item">
                    <div class="text-center collection-box">
                        <h1>Principals’ Gallery</h1>
                        <p>Step into the Principal's Gallery and discover captivating images and write-ups showcasing Trinity's Principals and their transformative eras. Uncover the stories of influential leaders in just one click!</p>
                        <a class="read-the-story-book read-more-hover"
                            href="{{ route('principal.index') }}">VIEW MORE</a>
                    </div>
                </div>
            </div>
                <div id="change-row" class="row justify-content-center align-items-center">
                <div class="col-md-4 collection-sec-item">
                    <div class="text-center collection-box">
                        <h1 class="change-htext">Staff Gallery</h1>
                        <p>Explore the Staff Gallery, a captivating collection of images and write-ups highlighting the exceptional teachers and masters of Trinity. Celebrate their invaluable contributions in just a few clicks!</p>
                        <a class="read-the-story-book read-more-hover" href="{{ route('staff.index') }}">VIEW
                            MORE</a>
                    </div>
                </div>
                <div class="col-md-4 collection-sec-item">
                    <div class="text-center collection-box">
                        <h1 class="change-htext">Prize Lists</h1>
                        <p>Discover Trinity's Prize Lists, a prestigious collection of names honoring academic and sport excellence. Explore the triumphs of our esteemed prize winners, celebrating their remarkable achievements in one place!</p>
                        <a class="read-the-story-book read-more-hover" href="#">VIEW
                            MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

            <div class="col-md-12 home-section section-02-image section-03 light-bg-blue chapel-section"
                style="background-image: url({{ asset('assets/images/homepage-sections/chapel-section.jpg') }}) !important;">
                <div class="row">
                    <div class="col-lg-6">

                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="text-center chapel-text">
                            <h1>THE CHAPEL OF TRINITY COLLEGE</h1>
                            <p class="text-center">
                                Built in the lines of Sri Lankan and Kandyan
                                architecture and dedicated to the service of God in 1935, the Trinity College Chapel
                                stands in a serene
                                environment in the School.
                            </p>
                            <a class="read-the-story-book read-more-hover" href="{{ route('chapel') }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 home-section section-02-image section-03 light-bg-cream trinity-3d"
                style="padding: 10rem">

                <div class="row">
                    <div class="col-lg-4 col-md-12 text-3d">
                        <h1>TRINITY IN 3D</h1>
                        <p>
                            Take a walk in the ‘School on the Hill’!
                        </p>
                        <p>
                            Embrace the hallways, landscapes, and buildings of Trinity, now on your own screen
                        </p>
                        <a class="read-the-story-book read-more-hover" href="{{ route('tours') }}">VIEW ALL TOURS</a>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row d-flex justify-content-end image-grid">
                            <style>
                                .vtour-item.first:hover {
                                    background-image: linear-gradient(to top, rgba(120, 44, 44, 0.1), rgba(120, 44, 44, 0.9)), url({{ asset('assets/images/homepage-sections/vtour/vtour-01.png') }}) !important;
                                    transition: 0.3s;
                                }

                                .vtour-item.second:hover {
                                    background-image: linear-gradient(to top, rgba(120, 44, 44, 0.1), rgba(120, 44, 44, 0.9)), url({{ asset('assets/images/homepage-sections/vtour/vtour-02.png') }}) !important;
                                    transition: 0.3s;
                                }

                                .vtour-item.third:hover {
                                    background-image: linear-gradient(to top, rgba(120, 44, 44, 0.1), rgba(120, 44, 44, 0.9)), url({{ asset('assets/images/homepage-sections/vtour/vtour-03.png') }}) !important;
                                    transition: 0.3s;
                                }

                                .vtour-item.forth:hover {
                                    background-image: linear-gradient(to top, rgba(120, 44, 44, 0.1), rgba(120, 44, 44, 0.9)), url({{ asset('assets/images/homepage-sections/vtour/04.png') }}) !important;
                                    transition: 0.3s;
                                }
                            </style>

                            <div class="col-md-5 vtour-item first"
                                style="background-image: linear-gradient(to top, rgba(41, 48, 56, 0.1), rgba(41, 48, 56, 0.9)), url({{ asset('assets/images/homepage-sections/vtour/vtour-01.png') }})">
                                <div class="link-area">
                                    <h3>VIRTUAL TRINITY</h3>
                                    <a href="">VIEW &#11166;</a>
                                </div>
                            </div>
                            <div class="col-md-5 vtour-item second"
                                style="background-image: linear-gradient(to top, rgba(41, 48, 56, 0.1), rgba(41, 48, 56, 0.9)), url({{ asset('assets/images/homepage-sections/vtour/vtour-02.png') }})">
                                <div class="link-area">
                                    <h3>360 PANAROMIC TOURS</h3>
                                    <a href="">VIEW &#11166;</a>
                                </div>
                            </div>
                            <div class="col-md-5 vtour-item third"
                                style="background-image: linear-gradient(to top, rgba(41, 48, 56, 0.1), rgba(41, 48, 56, 0.9)), url({{ asset('assets/images/homepage-sections/vtour/vtour-03.png') }})">
                                <div class="link-area">
                                    <h3>TRINITY FROM ABOVE</h3>
                                    <a href="">VIEW &#11166;</a>
                                </div>
                            </div>
                            <div class="col-md-5 vtour-item forth"
                                style="background-image: linear-gradient(to top, rgba(41, 48, 56, 0.1), rgba(41, 48, 56, 0.9)), url({{ asset('assets/images/homepage-sections/vtour/04.png') }})">
                                <div class="link-area">
                                    <h3>FROM THE COLLEGE ARCHIVES</h3>
                                    <a href="">VIEW &#11166;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 home-section section-02-image section-03 micellenia-section"
                style="background-image:url('{{ asset('assets/images/homepage-sections/7-min.jpg') }}');">
                <div class="section-02 text-center micellenia-content" style="padding-bottom: 30rem !important; padding-top: 0!important;">
                    <div class="justify-content-center align-items-center micellenia-header">
                        <h1>Miscellenia</h1>
                        <h3></h3>
                        <p class="text-center">Embark on a captivating journey through a collection of diverse and intriguing stories from Trinitians. Discover a tapestry of miscellaneous narratives that embody the essence of our institution. From inspiring anecdotes to extraordinary tales, immerse yourself in the rich tapestry of Trinity's history and community. Each story is a testament to the unique experiences that make Trinity truly exceptional.</p>
                   <br><br><br> </div>
                    <div class="row mi-row d-flex align-items-center micellenia-items">
                        <div class="col-lg-3  mi-row">
                            <h3 id="broun">STORIES</h3>
                            <a class="read-the-story-book read-more-hover mi-btn" href="{{ route('tours') }}">READ
                                MORE</a>
                        </div>
                        <div class="col-lg-6  mi-row">
                            <h3 id="broun">ANECDOTES</h3>
                            <a class="read-the-story-book read-more-hover mi-btn" href="{{ route('tours') }}">READ
                                MORE</a>
                        </div>
                        <div class="col-lg-3 mi-row">
                            <h3 id="broun">ARTICLES</h3>
                            <a class="read-the-story-book read-more-hover mi-btn" href="{{ route('tours') }}">READ
                                MORE</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 home-section section-02-image section-03 path-life-section"
                style="background-image:url('{{ asset('assets/images/homepage-sections/09min.jpg') }}'); padding-top: 5em;">
                <div class="section-02 text-center path-life" style="padding-bottom: 30rem !important; padding-top: 0!important;">
                    <h1 id="change-head" style="font-size: 3rem;">The path of life abounding</h1>
                    <p id="change-para">
                        Trinity College aims to produce the next generation of leaders in Sri Lanka. As such, boys
                        should leave the school confident, articulate, well-balanced and able to think for themselves.
                        They should be comfortable both in English and in their mother tongue. They should be ambitious
                        and determined, yet sensitive to the needs of others. And they should be critical and creative
                        thinkers, who are ready to make a positive difference to their country and to the world.
                    </p>
                </div>
            </div>

        </div>
    </div>

@section('assets-js')
    <!-- Initialize Swiper -->
    <script>
        var swiper_main = new Swiper(".main-slider", {
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop: true,
        });
    </script>

    <script>
        var swiper = new Swiper(".mySwiper-tours", {
            slidesPerView: 0,
            spaceBetween: 30,
            navigation: {
                nextEl: ".swiper-button-next-icon",
                prevEl: ".swiper-button-prev-icon",
            },
        });
    </script>

    <script>
        let snake_last_showing = 0;
        let snake_first_showing = 0;

        let elArray = $(`[data-index]`).toArray();

        let maxId = Math.max.apply(null, elArray.map(value => {
            return $(value).attr('data-index');
        }));

        console.log('max' + maxId)

        $(document).on('click', '#story-down-btn', function() {

            if (snake_last_showing != maxId) {
                $('[data-index=' + snake_first_showing + ']').removeClass('active');
                snake_first_showing++;
                snake_last_showing++;
                $('[data-index=' + snake_last_showing + ']').addClass('active');
            }

        })

        $(document).on('click', '#story-up-btn', function() {

            if (snake_first_showing != 0) {
                console.log(snake_last_showing)
                $('[data-index=' + snake_last_showing + ']').removeClass('active');
                snake_first_showing--;
                $('[data-index=' + snake_first_showing + ']').addClass('active');
                snake_last_showing--;
                $('[data-index=' + snake_last_showing + ']').addClass('active');
            }

        })
    </script>

    <script>
        let timeline_snake_last_showing = 0;
        let timeline_snake_first_showing = 0;

        let telArray = $(`[data-tindex]`).toArray();

        let tmaxId = Math.max.apply(null, telArray.map(value => {
            return $(value).attr('data-tindex');
        }));

        console.log('max' + maxId)

        $(document).on('click', '#timeline-down-btn', function() {

            if (timeline_snake_last_showing != tmaxId) {
                $('[data-tindex=' + timeline_snake_first_showing + ']').removeClass('active');
                timeline_snake_first_showing++;
                timeline_snake_last_showing++;
                $('[data-tindex=' + timeline_snake_last_showing + ']').addClass('active');
            }

        })

        $(document).on('click', '#timeline-up-btn', function() {

            if (timeline_snake_first_showing != 0) {
                console.log(timeline_snake_last_showing)
                $('[data-tindex=' + timeline_snake_last_showing + ']').removeClass('active');
                timeline_snake_first_showing--;
                $('[data-tindex=' + timeline_snake_first_showing + ']').addClass('active');
                timeline_snake_last_showing--;
                $('[data-tindex=' + timeline_snake_last_showing + ']').addClass('active');
            }

        })
    </script>

@endsection
@endsection
