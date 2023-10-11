@section('assets-css')
<link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

@extends('layouts/master')
@section('title', 'Home')
@section('content')


    <!-- Home page scene section starts -->
    <div class="home mt-3">
        <!-- Home slider section starts -->
        <div class="swiper home__slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="home__image">
                <img src="assets/images/pexels-adrien-olichon-2823459.jpg"  alt="" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="home__image">
                <img src="assets/images/demo.jpg" alt="" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="home__image">
                <img src="assets/images/house.png" alt="" />
              </div>
            </div>
            <div class="swiper-slide">
              <div class="home__image">
                <img src="assets/images/pexels-daniel-nettesheim-1162361.jpg" alt="" />
              </div>
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
        </div>
        <!-- Home slider section ends -->

        <div class="home__content">
          <!-- Home first content section starts -->
          <div class="home__blockQuote">
            <blockquote class="text-uppercase text-white fw-bold">
              genet, sin vele ctatem vitatem d
            </blockquote>
          </div>
          <div id="home__firstContentTrigger">
            <div>
              <div class="home__firstImage">
                <img src="assets/images/first.jpeg" alt="" />
              </div>

              <div class="home__secondContent">
                <div
                  id="second__navbar"
                  class="border-top border-bottom border-dark"
                >
                  <ul>
                    <li>
                      <a href="#">
                        <img
                          src="assets/images/pexels-adrien-olichon-2823459.jpg"
                          alt=""
                        />
                        <p class="ms-2">The Trinity Story</p>
                      </a>
                    </li>
                    <li>
                      <a href="#">Home</a>
                    </li>
                    <li>
                      <a href="#">About</a>
                    </li>
                    <li>
                      <a href="#">Story</a>
                    </li>
                    <li>
                      <a href="#">Companion Volume</a>
                    </li>
                    <li>
                      <a href="#">Timeline</a>
                    </li>
                    <li>
                      <a href="#">Gallery</a>
                    </li>
                    <li>
                      <a href="#">Archieves</a>
                    </li>
                    <li>
                      <a href="#">Collections</a>
                    </li>
                    <li>
                      <a href="#">Support Us</a>
                    </li>
                  </ul>
                </div>
                <div id="second__elementOverview" class="p-5 text-white">
                  <h4 class="fw-bold text-uppercase">
                    <span class="overview__text">
                      <span>O</span><span>vervie</span><span>w</span>
                    </span>
                  </h4>
                  <p class="text-muted mb-4">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Voluptatibus nihil, ut modi quam id eligendi eaque ratione
                    facere reiciendis inventore?Lorem ipsum, dolor sit amet
                    consectetur adipisicing elit.
                  </p>
                  <a href="#" class="learn__moreBtn">
                    <button class="text-white bg-dark fs-4">MORE</button>
                  </a>
                </div>
                <div class="home__secondImage w-100">
                  <img src="assets/images/house.png" alt="" />
                </div>
              </div>
            </div>
            <div class="hidden__elementFirst"></div>
            <div id="show__overview"></div>
          </div>
          <!-- Home first content section ends -->

          <!-- Mobile overview section starts -->
          <div
            id="mobile__overviewSection"
            class="flex-column justify-content-center align-items-center"
          >
            <div id="second__elementOverview" class="p-5 text-white">
              <h4 class="fw-bold text-uppercase">
                <span class="overview__text">
                  <span>O</span><span>vervie</span><span>w</span>
                </span>
              </h4>
              <p class="text-muted mb-4 mt-5">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Voluptatibus nihil, ut modi quam id eligendi eaque ratione facere
                reiciendis inventore?Lorem ipsum, dolor sit amet consectetur
                adipisicing elit.
              </p>
              <a href="#" class="learn__moreBtn">
                <button class="text-white bg-dark fs-4">MORE</button>
              </a>
            </div>
          </div>
          <!-- Mobile overview section ends -->

          <div id="delete__blockQuote"></div>

          <div class="genit__movement px-5">
            <div class="first__genit genit__text">
              <p class="text-uppercase fw-bold">
                Genit Sin, vele ctatem vitatem D...
              </p>
            </div>
            <div class="second__genit genit__text d-flex justify-content-end">
              <p class="text-uppercase fw-bold">
                Genit Sin, vele ctatem vitatem D...
              </p>
            </div>
            <div class="third__genit genit__text">
              <p class="text-uppercase fw-bold">
                Genit Sin, vele ctatem vitatem D...
              </p>
            </div>
          </div>

          <!-- For mobile version trinity section starts -->
          <div
            id="mobile__trinitySection"
            class="flex-column justify-content-center align-content-center"
          >
            <div class="mobilehome__secondRightContent text-dark px-5">
              <span class="border-top border-bottom border-2 border-dark">
                <h1 class="fw-bold text-uppercase mobilefirst__title">The</h1>
                <h1 class="fw-bold text-uppercase mobilesecond__title">
                  Trinity
                </h1>
                <h1 class="fw-bold text-uppercase mobilethird__title">Story</h1>
              </span>
            </div>
            <p class="fw-bold lorem__ipsumDummy px-5">Lorem ipsum color</p>

            <div class="mobilehome__secondRightContentDetails mt-5 px-5">
              <p class="mb-4">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores
                deserunt eligendi dolor, necessitatibus reprehenderit consequuntur
                rerum
              </p>

              <a href="#" class="learn__moreBtn">
                <button class="text-white fs-4 bg-dark">READ</button>
              </a>
            </div>
          </div>
          <!-- For mobile version trinity section ends -->

          <!-- Home second content section starts -->
          <div class="home__secondContentTrigger">
            <div id="home__trinityContent">
              <div class="home__trinityBanner">
                <img
                  id="home__trinityFirstSliderImg"
                  src="assets/images/pexels-adrien-olichon-2823459.jpg"
                  alt=""
                />
                <img
                  id="home__trinitySecondSliderImg"
                  src="assets/images/pexels-adrien-olichon-2823459.jpg"
                  alt=""
                />
              </div>

              <div class="trinity__header">
                <div
                  class="
                    home__secondScrollContent
                    border-start border-end border-2 border-dark
                  "
                >
                  <div
                    class="
                      bg-white
                      home__secondScrollSneakContent
                      d-flex
                      justify-content-center
                      align-items-center
                      border-top border-bottom border-dark border-2
                    "
                  >
                    <p class="fw-bold">Sneak Peak</p>
                  </div>
                  <div
                    class="
                      home__secondScrollFirstContent
                      home__secondScrollContextSection
                    "
                  >
                    <div
                      class="
                        border-bottom border-2 border-dark
                        py-5
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        scroll__first
                      "
                    >
                      <div>
                        <p>Lorem ipsum dolor sit amet, nonumm</p>
                        <p>Chapter 1</p>
                      </div>
                    </div>
                    <div
                      class="
                        border-bottom border-2 border-dark
                        py-5
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        scroll__first
                      "
                    >
                      <div>
                        <p>Lorem ipsum dolor sit amet, nonumm</p>
                        <p>Chapter 1</p>
                      </div>
                    </div>
                    <div
                      class="
                        border-bottom border-2 border-dark
                        py-5
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        scroll__second
                      "
                    >
                      <div>
                        <p>Lorem ipsum dolor sit amet, nonumm</p>
                        <p>Chapter 1</p>
                      </div>
                    </div>

                    <div
                      class="
                        border-bottom border-2 border-dark
                        py-5
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        scroll__third
                      "
                    >
                      <div>
                        <p>Lorem ipsum dolor sit amet, nonumm</p>
                        <p>Chapter 1</p>
                      </div>
                    </div>

                    <div
                      class="
                        border-bottom border-2 border-dark
                        py-5
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        scroll__fourth
                      "
                    >
                      <div>
                        <p>Lorem ipsum dolor sit amet, nonumm</p>
                        <p>Chapter 1</p>
                      </div>
                    </div>

                    <div
                      class="
                        border-bottom border-2 border-dark
                        py-5
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        scroll__fifth
                      "
                    >
                      <div>
                        <p>Lorem ipsum dolor sit amet, nonumm</p>
                        <p>Chapter 1</p>
                      </div>
                    </div>

                    <div
                      class="
                        border-bottom border-2 border-dark
                        py-5
                        d-flex
                        flex-column
                        justify-content-center
                        align-items-center
                        scroll__sixth
                      "
                    >
                      <div>
                        <p>Lorem ipsum dolor sit amet, nonumm</p>
                        <p>Chapter 1</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="home__secondLeftContent px-5">
                  <div id="home__secondLeftContentImg"></div>
                </div>

                <div class="px-5 home__secondRightContentContext">
                  <div id="show__firstTitle"></div>
                  <div id="show__secondTitle"></div>
                  <div id="show__thirdTitle"></div>
                  <div class="home__secondRightContent text-white mt-5">
                    <span class="border-top border-bottom border-2 border-dark">
                      <h1 class="fw-bold text-uppercase first__title">The</h1>
                      <h1 class="fw-bold text-uppercase second__title">
                        Trinity
                      </h1>
                      <h1 class="fw-bold text-uppercase third__title">Story</h1>
                    </span>
                  </div>
                  <p class="fw-bold lorem__ipsumDummy">Lorem ipsum color</p>

                  <div class="home__secondRightContentDetails mt-5">
                    <p class="mb-4">
                      Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                      Maiores deserunt eligendi dolor, necessitatibus
                      reprehenderit consequuntur rerum
                    </p>

                    <a href="#" class="learn__moreBtn">
                      <button class="text-white fs-4 bg-dark">READ</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div id="open__sliderImg"></div>
            <div id="active__homeSecondLeftContentImg"></div>
            <div id="home__secondScrollLeftSideContent"></div>
            <div id="home__secondScrollLeftSecondSlideContent"></div>
            <div id="home__secondScrollLeftThirdSlideContent"></div>
            <div id="home__secondScrollLeftFourthSlideContent"></div>
            <div id="home__secondScrollLeftFifthSlideContent"></div>
            <div id="home__secondScrollLeftSixthSlideContent"></div>
          </div>
          <!-- Home second content section ends -->

          <!-- Mobile timeline section starts -->
          <div
            id="mobile__timelineSection"
            class="
              flex-column
              justify-content-center
              align-items-center
              border-top border-dark
            "
          >
            <div id="mobiletime__lineContext" class="px-5 mt-5 text-dark">
              <h1 class="fw-bold text-uppercase">
                <span>T</span><span>imelin</span><span>e</span>
              </h1>
              <p class="fw-bold lorem__ipsumDummy text-dark">Lorem ipsum color</p>
              <p class="text-dark mb-4 mt-5">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maiores
                deserunt eligendi dolor, necessitatibus reprehenderit consequuntur
                rerum repudiandae quasi aliquid ducimus quos tenetur libero
                quibusdam quod aut placeat exercitationem ipsam dolorum?
              </p>
              <a href="#" class="learn__moreBtn">
                <button class="text-white fs-4">MORE</button>
              </a>
            </div>
          </div>
          <!-- Mobile timeline section ends -->

          <!-- Home third content trigger section starts -->
          <div class="home__thirdContentTrigger">
            <div id="home__timeLineContent">
              <div class="home__timeLineDetails">
                <div id="time__lineContext" class="px-5 mt-5 text-white">
                  <h1 class="fw-bold text-uppercase">
                    <span>T</span><span>imelin</span><span>e</span>
                  </h1>
                  <p class="fw-bold lorem__ipsumDummy text-white">
                    Lorem ipsum color
                  </p>
                  <p class="text-white mb-4 mt-5">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Maiores deserunt eligendi dolor, necessitatibus reprehenderit
                    consequuntur rerum repudiandae quasi aliquid ducimus quos
                    tenetur libero quibusdam quod aut placeat exercitationem ipsam
                    dolorum?
                  </p>
                  <a href="#" class="learn__moreBtn">
                    <button class="text-white fs-4">MORE</button>
                  </a>
                </div>
                <div class="home__timeLineRightContext">
                  <div class="border-start border-end border-white border-2 py-4">
                    <div class="first__timeLine time__lineDetails">
                      <div class="px-4 timeline__firstImage">
                        <h2 class="fw-bold mb-4">1872/01</h2>
                        <p class="fw-bold time__lineSecondSubTitle">
                          Lorem Ipsum
                        </p>
                        <img src="assets/images/person1.jpeg" alt="" />
                        <h5 class="mt-4 text-white fw-bold">
                          Appointment of new Principle
                        </h5>
                      </div>

                      <div class="px-4 timeline__secondImage">
                        <h2 class="fw-bold mb-4">1872/02</h2>
                        <p class="fw-bold time__lineSecondSubTitle">
                          Lorem Ipsum
                        </p>
                        <img src="assets/images/person1.jpeg" alt="" />
                        <h5 class="mt-4 text-white fw-bold">
                          Appointment of new Principle
                        </h5>
                      </div>

                      <div class="px-4 timeline__thirdImage">
                        <h2 class="fw-bold mb-4">1872/03</h2>
                        <p class="fw-bold time__lineSecondSubTitle">
                          Lorem Ipsum
                        </p>
                        <img src="assets/images/person1.jpeg" alt="" />
                        <h5 class="mt-4 text-white fw-bold">
                          Appointment of new Principle
                        </h5>
                      </div>
                    </div>

                    <div class="second__timeLine time__lineDetails">
                      <div class="px-4 timeline__firstImage">
                        <h2 class="fw-bold mb-4">1872/01</h2>
                        <p class="fw-bold time__lineSecondSubTitle">
                          Lorem Ipsum
                        </p>
                        <img src="assets/images/person1.jpeg" alt="" />
                        <h5 class="mt-4 text-white fw-bold">
                          Appointment of new Principle
                        </h5>
                      </div>

                      <div class="px-4 timeline__secondImage">
                        <h2 class="fw-bold mb-4">1872/02</h2>
                        <p class="fw-bold time__lineSecondSubTitle">
                          Lorem Ipsum
                        </p>
                        <img src="assets/images/person1.jpeg" alt="" />
                        <h5 class="mt-4 text-white fw-bold">
                          Appointment of new Principle
                        </h5>
                      </div>

                      <div class="px-4 timeline__thirdImage">
                        <h2 class="fw-bold mb-4">1872/03</h2>
                        <p class="fw-bold time__lineSecondSubTitle">
                          Lorem Ipsum
                        </p>
                        <img src="assets/images/person1.jpeg" alt="" />
                        <h5 class="mt-4 text-white fw-bold">
                          Appointment of new Principle
                        </h5>
                      </div>
                    </div>

                    <div class="third__timeLine time__lineDetails">
                      <div class="px-4 timeline__firstImage">
                        <h2 class="fw-bold mb-4">1872/01</h2>
                        <p class="fw-bold time__lineSecondSubTitle">
                          Lorem Ipsum
                        </p>
                        <img src="assets/images/person1.jpeg" alt="" />
                        <h5 class="mt-4 text-white fw-bold">
                          Appointment of new Principle
                        </h5>
                      </div>

                      <div class="px-4 timeline__secondImage">
                        <h2 class="fw-bold mb-4">1872/02</h2>
                        <p class="fw-bold time__lineSecondSubTitle">
                          Lorem Ipsum
                        </p>
                        <img src="assets/images/person1.jpeg" alt="" />
                        <h5 class="mt-4 text-white fw-bold">
                          Appointment of new Principle
                        </h5>
                      </div>

                      <div class="px-4 timeline__thirdImage">
                        <h2 class="fw-bold mb-4">1872/03</h2>
                        <p class="fw-bold time__lineSecondSubTitle">
                          Lorem Ipsum
                        </p>
                        <img src="assets/images/person1.jpeg" alt="" />
                        <h5 class="mt-4 text-white fw-bold">
                          Appointment of new Principle
                        </h5>
                      </div>
                    </div>
                  </div>
                  <div class="third__contentTime">
                    <div>
                      <h2 class="fw-bold text-white text-center">1870-1890</h2>
                      <div class="border__line bg-white d-block mx-auto"></div>
                    </div>
                    <div>
                      <h2 class="fw-bold text-white text-center">1891-2000</h2>
                      <div class="border__line bg-white d-block mx-auto"></div>
                    </div>
                    <div>
                      <h2 class="fw-bold text-white text-center">2001-2010</h2>
                      <div class="border__line bg-white d-block mx-auto"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- My scroll action -->
            <div id="hide__firstContentfirstImage"></div>
            <div id="show__thirdImage"></div>
            <div id="show__secondTimeLineContent"></div>
            <div id="hide__secondContentFirstImage"></div>
            <div id="show__secondContentThirdImage"></div>
            <div id="show__thirdTimeLineContent"></div>
            <div id="show__thirdTimeLineContentSecondImage"></div>
            <div id="show__thirdTimeLineContentThirdImage"></div>
          </div>
          <!-- Home third content trigger section ends -->

          <!-- Mobile gallery section starts -->
          <div
            id="mobile__gallerySection"
            class="flex-column justify-content-center align-items-center px-5"
          >
            <div
              class="w-100 px-5 mobile__homeGalleryContext"
              id="home__galleryContext"
            >
              <h1 class="fw-bold text-uppercase">
                <span class="gallery__text">
                  <span>G</span><span>aller</span><span>y</span>
                </span>
              </h1>
              <p class="fw-bold lorem__ipsumDummy">Lorem ipsum color</p>
              <p class="my-4 mobile__galleryText">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Repudiandae, sequi eum ut aperiam voluptates
              </p>
              <a href="#" class="learn__moreBtn">
                <button class="text-white bg-dark fs-4">MORE</button>
              </a>
            </div>
          </div>
          <!-- Mobile gallery section ends -->

          <!-- Home gallery section starts -->
          <div class="home__gallery">
            <div class="home__galleryContent">
              <div class="home__galleryImageContent">
                <div class="home__galleryFirstImageContent">
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-adrien-olichon-2823459.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-adrien-olichon-2823459.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="home__gallerySecondImageContent">
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-adrien-olichon-2823459.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-adrien-olichon-2823459.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                </div>
                <div class="home__galleryThirdImageContent">
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-adrien-olichon-2823459.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-adrien-olichon-2823459.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                  <div class="home__galleryImage">
                    <img
                      src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <div class="w-100 px-5" id="home__galleryContext">
                <h1 class="fw-bold text-uppercase">
                  <span class="gallery__text">
                    <span>G</span><span>aller</span><span>y</span>
                  </span>
                </h1>
                <p class="fw-bold lorem__ipsumDummy">Lorem ipsum color</p>
                <p class="my-4">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Repudiandae, sequi eum ut aperiam voluptates
                </p>
                <a href="#" class="learn__moreBtn">
                  <button class="text-white bg-dark fs-4">MORE</button>
                </a>
              </div>
            </div>
            <div id="show__galleryImage"></div>
            <div id="move__galleryimageFirstTime"></div>
            <div id="move__galleryimageSecondTime"></div>
            <div id="move__galleryimageThirdTime"></div>
          </div>
          <!-- Home gallery section ends -->

          <!-- Home collection section starts -->
          <div class="home__collection">
            <div>
              <div>
                <div class="home__collectionContent">
                  <h1 class="fw-bold text-uppercase">
                    <span class="collection__text">
                      <span>C</span><span>ollection</span><span>s</span>
                    </span>
                  </h1>
                  <p class="fw-bold lorem__ipsumDummy">Lorem ipsum color</p>
                  <p class="my-4">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Maiores deserunt eligendi dolor, necessitatibus reprehenderit
                    consequuntur rerum
                  </p>
                  <a href="#" class="learn__moreBtn">
                    <button class="text-white bg-dark fs-4">MORE</button>
                  </a>
                </div>
              </div>
            </div>
            <div id="show__homeCollection"></div>
          </div>
          <!-- Home collection section ends -->

          <!-- Home article title section starts -->
          <div class="home__article">
            <div>
              <a href="#">
                <div class="home__articleImg">
                  <h3 class="fw-bold text-uppercase text-center px-2">
                    Principlas
                  </h3>
                  <!-- <img src="assets/images/pexels-adrien-olichon-2823459.jpg" alt="" /> -->
                </div>
              </a>
              <a href="#">
                <div class="home__articleImg">
                  <h3 class="fw-bold text-uppercase text-center px-2">
                    Roll Call
                  </h3>
                  <!-- <img
                    src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                    alt=""
                  /> -->
                </div>
              </a>
              <a href="#">
                <div class="home__articleImg">
                  <h3 class="fw-bold text-uppercase text-center text-center px-2">
                    Article
                  </h3>
                  <!-- <img src="assets/images/pexels-adrien-olichon-2823459.jpg" alt="" /> -->
                </div>
              </a>
              <a href="#">
                <div class="home__articleImg">
                  <h3 class="fw-bold text-uppercase text-center px-2">
                    Story board
                  </h3>
                  <!-- <img
                    src="assets/images/pexels-daniel-nettesheim-1162361.jpg"
                    alt=""
                  /> -->
                </div>
              </a>
              <a href="#">
                <div class="home__articleImg">
                  <h3 class="fw-bold text-uppercase text-center px-2">Chapel</h3>
                  <!-- <img src="assets/images/pexels-adrien-olichon-2823459.jpg" alt="" /> -->
                </div>
              </a>
              <a href="#">
                <div class="home__articleImg">
                  <h3 class="fw-bold text-uppercase text-center px-2">Staff</h3>
                  <!-- <img src="assets/images/pexels-daniel-nettesheim-1162361.jpg" alt="" /> -->
                </div>
              </a>
            </div>
          </div>
          <!-- Home article title section ends -->
          @section('assets-js')
          <script src="{{asset('assets/js/home.js')}}"></script>
          <script src="{{asset('assets/js/slick_slider.js')}}"></script>
          @endsection
@endsection
