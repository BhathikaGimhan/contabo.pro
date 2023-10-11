
    <!-- Main header section starts -->
    <header class="main__header container">
        <!-- Top header section starts -->
        <div class="top__header border-bottom border-dark">
            <div class="container pt-1">
                <!-- Top header left section starts -->
                <div class="top__headerLeft">
                    <a href="#">
                        <span class="iconify" data-icon="fontisto:facebook"></span>
                    </a>
                    <a href="#">
                        <span class="iconify" data-icon="akar-icons:twitter-fill"></span>
                    </a>
                    <a href="#">
                        <span class="iconify" data-icon="brandico:linkedin"></span>
                    </a>
                    <div>
                        <p>Call: +94 81 223 4297</p>
                    </div>
                </div>
                <!-- Top header left section ends -->

                <!-- Top header right section starts -->
                <div class="top__headerRight">
                    <a href="#">Sign In</a>
                </div>
                <!-- Top header right section ends -->
            </div>
        </div>
        <!-- Top header section ends -->

        <!-- Middle heder section starts -->
        <div class="middle__header">
            <!-- Middle header left section starts -->
            <div class="middle__headerLeft">
                <div class="logo__img">
                    <img src="{{asset("assets/images/new_home_page/new_logo.png")}}"
                    />
                </div>
            </div>
            <!-- Middle header left section ends -->

            <!-- Middle header right section starts -->
            <div class="middle__headerRight">
                <!-- Middle header top right section starts -->
                <div class="middle__headerTopRight">
                    <ul class="text-uppercase">
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="#">About Trinity</a>
                        </li>
                        <li>
                            <a href="#">Sections</a>
                        </li>
                        <li>
                            <a href="#">News &amp; Events</a>
                        </li>
                        <li>
                            <a href="#">Trinity 150</a>
                        </li>
                        <li class="search-input">
                            <form method="GET">
                                <input type="search" placeholder="Search..." />

                            </form>
                        </li>
                    </ul>
                </div>
                <!-- Middle header top right section ends -->

                <!-- Middle header bottom right section starts -->
                <div class="middle__headerBottomRight">
                    <h1>The Trinity History</h1>
                </div>
                <!-- Middle header bottom right section ends -->
            </div>
            <!-- Middle header right section ends -->
        </div>
        <!-- Middle heder section ends -->

        <!-- Bottom header section starts -->
        <div class="bottom__header border-top border-bottom border-dark">
            <div class="container">
                <ul class="text-uppercase py-2">
                    <li class="w-100">
                        <div class="mobile__logoImg">
                            <img src="img/logo.jpg" />
                            <div class="close__navbar">
                                <span class="iconify text-white" data-icon="carbon:close-outline"></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="{{route('home')}}">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="{{route('trinity-story')}}">Story</a>
                    </li>
                    <li>
                        <a href="#">Companion Volume</a>
                    </li>
                    <li>
                        <a href="{{route('timeline.index')}}">Timeline</a>
                    </li>
                    <li>
                        <a href="{{route('gallery.index')}}">Gallery</a>
                    </li>
                    <li>
                        <a href="{{route('archives')}}">Archives</a>
                    </li>
                    <li>
                        <a href="#">Collection</a>
                    </li>
                    <li>
                        <a href="{{route('support-us')}}">Support us</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Bottom header section ends -->

        <!-- Mobile header section starts -->
        <div id="mobile__header" class="border-bottom border-dark">
            <div class="bg__overlay"></div>
            <ul class="py-2 container">
                <li class="hamburger__menu">
                    <span class="iconify" data-icon="icon-park:hamburger-button"></span>
                </li>
                <li>
                    <form method="GET">
                        <input type="search" placeholder="Search..." />
                        <button>
                            <span class="iconify" data-icon="ant-design:search-outlined"></span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Mobile header section ends -->
    </header>
    <!-- Main header section ends -->
