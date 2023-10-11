<style>
    #search-input{
        height : 24px;
        padding-left : 10px;
        background: #D9D9D9;
        width: 254px;
        outline : none;
        font-size: 13px;
        color : rgba(0, 0, 0, 0.43);
        letter-spacing : 0.3px;
    }
    #search-input::placeholder{
        text-transform : uppercase;
    }
    
    #icon{
        font-size : 13px;
        color : #0D0D0D;
        position : absolute;
        top : -1px;
        left : 225px;
    }
    
    #supportus{
        color : #103355 !important;
    }
    #supportus:hover{
        color : #fff !important;
    }

</style>


<header class="main__header @if(Route::currentRouteName() != 'home') drop_shadow @endif">
    <div class="container header-top">
        <div class="row pt-1 pb-1 top-border">
            <div class="col-md-2 d-flex align-items-center justify-content-center logo-conteiner">
                <div class="logo__img">
                    <img src="{{ asset('assets/images/new_home_page/main-logo.png') }}" />
                </div>
            </div>
            <div class="col-md-10">
                <div class="d-flex justify-content-between">
                    <a href="https://trinitycollege.lk" class="default-blue-text thp-link visit-web" target="_blank">VISIT
                        THE
                        TRINITY
                        COLLEGE OFFICIAL
                        WEBSITE</a>
                    <div class="search-sec position-relative">
                        <input type="text" placeholder="Search..." class="search-input" id="search-input" />
                        <i class="fa fa-search" id="icon" aria-hidden="true"></i>
                        @guest
                            @if (Route::has('login'))
                                <a class="thp-link" href="{{ route('login') }}">{{ __('Log In') }}</a>
                            @endif

                            @if (Route::has('register.start'))
                                <a class="thp-link" href="{{ route('register.start') }}">{{ __('Sign up') }}</a>
                            @endif
                        @endguest

                        @auth
                            <a class="thp-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                            <a href="{{ route('profile') }}" class="thp-link profile" style="color : #112C3F;">{{ __('My Account') }}</a>
                        @endauth
                    </div>
                </div>
                <h1 class="default-blue-text header-main-text">TRINITY HISTORY</h1>
            </div>
        </div>
    </div>

    <!-- Bottom header section starts -->
{{--    <div class="bottom__header border-top border-bottom border-dark">--}}
{{--        <div class="container">--}}
{{--            <nav class="navbar fixed-top">--}}
{{--                <div class="container-fluid">--}}
{{--                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"--}}
{{--                        data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">--}}
{{--                        <i class="fa fa-bars" aria-hidden="true"></i>--}}
{{--                    </button>--}}
{{--                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"--}}
{{--                        aria-labelledby="offcanvasNavbarLabel">--}}
{{--                        <div class="offcanvas-header">--}}
{{--                            <div class="search-sec position-relative">--}}
{{--                                <input type="text" placeholder="Search..." class="search-input" id="search-input" />--}}
{{--                                    <i class="fa fa-search" id="icon" aria-hidden="true"></i> --}}
{{--                                @guest--}}
{{--                                    @if (Route::has('login'))--}}
{{--                                        <a class="thp-link" href="{{ route('login') }}">{{ __('Log In') }}</a>--}}
{{--                                    @endif--}}

{{--                                    @if (Route::has('register.start'))--}}
{{--                                        <a class="thp-link" href="{{ route('register.start') }}">{{ __('Sign up') }}</a>--}}
{{--                                    @endif--}}
{{--                                @endguest--}}

{{--                                @auth--}}
{{--                                    <a class="thp-link" href="{{ route('logout') }}"--}}
{{--                                        onclick="event.preventDefault();--}}
{{--                                              document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}
{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                    <a href="{{ route('profile') }}" class="thp-link profile">{{ __('My Account') }}</a>--}}
{{--                                @endauth--}}
{{--                            </div>--}}
{{--                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"--}}
{{--                                aria-label="Close"></button>--}}
{{--                        </div>--}}
{{--                        <div class="offcanvas-body">--}}
{{--                            <ul class="navbar-nav justify-content-end flex-grow-1 pt-3 pe-3 text-uppercase">--}}
{{--                                <li class="{{ request()->is('home') ? 'active-menu ' : '' }} nav-item"><a--}}
{{--                                        href="{{ route('home') }}" class="home-icon">Home</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a class="p-0 nav-link dropdown-toggle {{ request()->is('the-trinity-story') ||--}}
{{--                                    request()->is('trinity-story') ||--}}
{{--                                    request()->is('companion-volume') ||--}}
{{--                                    request()->is('history-library') ||--}}
{{--                                    request()->is('honour-boards') ||--}}
{{--                                    request()->is('chapel') ||--}}
{{--                                    request()->is('principals') ||--}}
{{--                                    request()->is('staff')--}}
{{--                                        ? 'active-menu '--}}
{{--                                        : '' }}"--}}
{{--                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                        The--}}
{{--                                        Trinity Story--}}
{{--                                    </a>--}}
{{--                                    <ul class="dropdown-menu">--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('trinity-story-main') }}">The Trinity Story</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('trinity-story') }}">The Story--}}
{{--                                                Book</a></li>--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('companion-volume') }}">Companion--}}
{{--                                                Volume</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('publications') }}">Historical--}}
{{--                                                References</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('honour-boards.index') }}">Honour--}}
{{--                                                Boards</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('chapel') }}">Chapel</a></li>--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('principal.index') }}">Principals'--}}
{{--                                                Gallery</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('staff.index') }}">Staff--}}
{{--                                                Gallery</a></li>--}}
{{--                                        <li><a class="dropdown-item" href="#">PRIZE LIST--}}
{{--                                                Gallery</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item {{ request()->is('timeline') ? 'active-menu ' : '' }}"><a--}}
{{--                                        href="{{ route('timeline.index') }}">Footprints</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item {{ request()->is('digital-archive') ? 'active-menu ' : '' }}"><a--}}
{{--                                        href="{{ route('gallery.index') }}">DIGITAL</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item {{ request()->is('virtual-tours') ? 'active-menu ' : '' }}"><a--}}
{{--                                        href="{{ route('tours') }}">Virtual</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item {{ request()->is('museum') ? 'active-menu ' : '' }}"><a--}}
{{--                                        href="{{ route('archives') }}">Museum</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item {{ request()->is('miscellanea/all') ? 'active-menu ' : '' }}"><a--}}
{{--                                        href="{{ route('miscellanea_filter', 'all') }}">Miscellania</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item dropdown">--}}
{{--                                    <a class="p-0 nav-link dropdown-toggle {{ request()->is('about-us') ||--}}
{{--                                        request()->is('t150-infrastructure') ||--}}
{{--                                        request()->is('t150-college-celebrations')--}}
{{--                                            ? 'active-menu '--}}
{{--                                            : '' }}"--}}
{{--                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                        Trinity 150--}}
{{--                                    </a>--}}
{{--                                    <ul class="dropdown-menu">--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('about-us') }}">Trinity--}}
{{--                                            History--}}
{{--                                            Project</a>--}}
{{--                                        </li>--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('t150-infrastructure') }}">T150--}}
{{--                                            Infrastructure Initiative</a></li>--}}
{{--                                        <li><a class="dropdown-item" href="{{ route('t150-college-celebrations') }}">T150 College--}}
{{--                                            Celebrations</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item {{ request()->is('support-us') ? 'active-menu ' : '' }}"><a href="{{ route('support-us') }}" id="supportus">Suppor tUs</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Bottom header section ends -->

    <div class="container p-0">
        <div class="for-history-on-nav">
            <div class="first-nav-for">
                <nav id="primary_nav_wrap1" class="container default-blue-text">
                    <ul>
                        <li class="{{ request()->is('home') ? 'active-menu ' : '' }}"><a href="{{ route('home') }}"
                                class="home-icon"><i class="fa fa-home"></i></a>
                        </li>
                        <li id="main-li-item-1"><a href="{{ route('trinity-story-main') }}"
                                class="main-item-1 main-item {{ request()->is('the-trinity-story') ||
                                request()->is('trinity-story') ||
                                request()->is('companion-volume') ||
                                request()->is('history-library') ||
                                request()->is('honour-boards') ||
                                request()->is('chapel') ||
                                request()->is('principals') ||
                                request()->is('staff')
                                    ? 'active-menu '
                                    : '' }}">The Trinity Story</a>
                            <ul id="sub-item-1">
                                <li><a href="{{ route('trinity-story') }}" class="sub-menu">The Story Book</a></li>
                                <li><a href="{{ route('companion-volume') }}" class="sub-menu">Companion Volume</a>
                                </li>
                                <li><a href="{{ route('publications') }}" class="sub-menu">Historical References</a>
                                </li>
                                <li><a href="{{ route('honour-boards.index') }}" class="sub-menu">Honour Boards</a>
                                </li>
                                <li><a href="{{ route('chapel') }}" class="sub-menu">Chapel</a></li>
                                <li><a href="{{ route('principal.index') }}" class="sub-menu">Principals' Gallery</a>
                                </li>
                                <li><a href="{{ route('staff.index') }}" class="sub-menu">Staff Gallery</a></li>
                                <li><a class="dropdown-item" href="#">PRIZE LIST
                                        Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('timeline.index') }}"
                                class="main-item {{ request()->is('timeline') ? 'active-menu ' : '' }}">Footprints</a>
                        </li>
                        <li><a href="{{ route('gallery.index') }}"
                                class="main-item {{ request()->is('digital-archive') ? 'active-menu ' : '' }}">DIGITAL</a>
                        </li>
                        <li><a href="{{ route('tours') }}"
                                class="main-item {{ request()->is('virtual-tours') ? 'active-menu ' : '' }}">Virtual</a>
                        </li>
                        <li><a href="{{ route('archives') }}"
                                class="main-item {{ request()->is('museum') ? 'active-menu ' : '' }}">Museum</a></li>
                        <li><a href="{{ route('miscellanea_filter', 'all') }}"
                                class="main-item {{ request()->is('miscellanea/all') ? 'active-menu ' : '' }}">Miscellania</a>
                        </li>
                        <li id="main-li-item-2"><a href="#" class="main-item main-item-2 {{ request()->is('about-us') ||
                            request()->is('t150-infrastructure') ||
                            request()->is('t150-college-celebrations')
                                ? 'active-menu '
                                : '' }}">Trinity 150</a>
                            <ul id="sub-item-2">
                                <li class="dir"><a href="{{ route('about-us') }}" class="sub-menu">Trinity
                                        History
                                        Project</a></li>
                                <li class="dir"><a href="{{ route('t150-infrastructure') }}"
                                        class="sub-menu">T150
                                        Infrastructure Initiative</a></li>
                                <li><a href="{{ route('t150-college-celebrations') }}" class="sub-menu">T150 College
                                        Celebrations</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="{{ route('support-us') }}" 
                                class="main-item {{ request()->is('support-us') ? 'active-menu ' : '' }}" id="supportus">Support
                                Us</a></li>
                    </ul>


                </nav>
            </div>

        </div>
    </div>
</header>
