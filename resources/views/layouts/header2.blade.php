<header class="main__header">
    <!-- Top header section starts -->

    <!-- Top header section ends -->

    <!-- Middle heder section starts -->

    <div class="middle__header py-4 container">
        <!-- Middle header left section starts test comment-->
        <div class="middle__headerLeft">
            <div class="logo__img">
                <img src="{{ asset('assets/images/new_home_page/main-logo.png') }}" />
            </div>
        </div>
        <!-- Middle header left section ends -->

        <!-- Middle header right section starts -->
        <div class="middle__headerRight">
            <!-- Middle header top right section starts -->
            <div class="middle__headerTopRight">
                <ul class="text-uppercase">
                    <li>
                        <a href="https://trinitycollege.lk" class="default-blue-text" target="_blank">VISIT THE TRINITY COLLEGE OFFICIAL
                            WEBSITE</a>
                    </li>
                    <li class="for-search">
                        <form method="GET">
                            <input type="search" placeholder="Search" class="search-input" />

                        </form>
                    </li>
                    <li>
                        <a href="#">Sign up</a>
                    </li>
                </ul>
            </div>
            <!-- Middle header top right section ends -->

            <!-- Middle header bottom right section starts -->
            <div class="middle__headerBottomRight2">
                <h1 class="default-blue-text">TRINITY HISTORY</h1>
            </div>
            <!-- Middle header bottom right section ends -->
        </div>
        <!-- Middle header right section ends -->
    </div>
    <!-- Middle heder section ends -->

    <!-- Bottom header section starts -->
{{--    <div class="bottom__header border-top border-bottom border-dark">--}}
{{--        <div class="">--}}
{{--            <ul class="text-uppercase main-mini-menu">--}}
{{--                <li class="w-100">--}}
{{--                    <div class="mobile__logoImg">--}}
{{--                        <img src="img/main-logo.png">--}}
{{--                        <div class="close__navbar">--}}
{{--                            <span class="iconify text-white" data-icon="carbon:close-outline"></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">About</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">Story</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">Companion Volume</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    --}}{{-- <a href="{{route('timeline.index')}}">Timeline</a> --}}
{{--                    <a href="{{ route('trinity-history') }}">Timeline</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">Gallery</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">Archieves</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">Collections</a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a href="#">Support us</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Bottom header section ends -->

    <div class="container p-0">
        <div class="for-history-on-nav">
            <div class="first-nav-for">
                <nav id="primary_nav_wrap1" class="container default-blue-text">
                    <ul>
                        <li><a href="{{ route('home')}}" class="home-icon"><i class="fa fa-home"></i></a>
                        </li>
                        <li id="main-li-item-1"><a href="{{ route('trinity-story-main') }}" class="main-item-1 main-item">The Trinity Story</a>
                            <ul id="sub-item-1">
                                <li><a href="{{ route('trinity-story') }}" class="sub-menu">The Story Book</a></li>
                                <li><a href="{{ route('companion-volume') }}" class="sub-menu">Companion Volume</a></li>
                                <li><a href="{{ route('publications') }}" class="sub-menu">Historical References</a></li>
                                <li><a href="{{ route('honour-boards.index') }}" class="sub-menu">Honour Boards</a></li>
                                <li><a href="{{ route('chapel') }}" class="sub-menu">Chapel</a></li>
                                <li><a href="{{ route('principal.index') }}" class="sub-menu">Principals' Gallery</a></li>
                                <li><a href="{{ route('staff.index') }}" class="sub-menu">Staff Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('timeline.index')}}" class="main-item">Footprints</a></li>
                        <li><a href="{{route('gallery.index')}}" class="main-item">DIGITAL</a></li>
                        <li><a href="{{route('tours')}}" class="main-item">Virtual</a></li>
                        <li><a href="{{route('archives')}}" class="main-item">Museum</a></li>
                        <li><a href="{{ route('miscellanea_filter', 'all') }}" class="main-item">Miscellania</a>
                        </li>
                        <li id="main-li-item-2"><a href="#" class="main-item main-item-2">Trinity 150</a>
                            <ul id="sub-item-2">
                                <li class="dir"><a href="https://trinitycollege.lk/about-us" class="sub-menu">Trinity History
                                        Project</a></li>
                                <li class="dir"><a href="https://trinitycollege.lk/trinity150/" class="sub-menu">T150
                                        Infrastructure Initiative</a></li>
                                <li><a href="https://trinitycollege.lk/150-celebrations/" class="sub-menu">T150 College Celebrations</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{route('support-us')}}" style="color: #8c7237">Support Us</a></li>
                    </ul>


                </nav>
            </div>

            {{-- <div class="history">

            <a href="{{route('trinity-history')}}"><h2 style="color: red">HISTORY</h2></a>
        </div> --}}

        </div>
    </div>


    <!-- Mobile header section starts -->
    <div id="mobile__header" class="border-bottom border-dark">
        <div class="bg__overlay"></div>
        <ul class="py-2 container">
            <li class="hamburger__menu">
                <span class="iconify" data-icon="icon-park:hamburger-button"></span>
            </li>
            <li>
                <form method="GET">
                    <input type="search" class="search-input" placeholder="Search" />
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

<!--main header end -->
