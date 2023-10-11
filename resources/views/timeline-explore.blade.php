@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/timeline_30.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/explore_30.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Timeline')
@section('content')

    <!-- history showing section -->

    <section class="back container-fluid">
        <div class="sec-content container">
            <div class="sec-header text-center">
                <div class="line-1"></div>
                <div class="line-2"></div>
                <h1>DIGITAL FOOTPRINTS</h1>
                <h2>Milestones of Trinity’s important moments</h2>
                <p class="justify-text">The Trinity Story 1872 -2022 provides a narrative of the abundant life and times of
                    Trinity as envisioned
                    by the founding fathers and then richly nurtured by Teachers and Students and Staff in building the
                    Trinity Home. Of how it was built on the foundations and traditions and handing them down through
                    generations to what still may justifiably be called the Best School of All.</p>
                <div class="line-2 header-end"></div>
            </div>
            <div class="overlay">
                <div class="loading container"></div>
                <div class="row nav-head bg-red">
                    <div
                        class="col-lg-4 col-md-12 color_w text-center d-flex align-items-center justify-content-start year-range">
                        <label class="year-select">{{ $first_year }}</label> &nbsp &nbsp<span>to</span>
                        &nbsp &nbsp<label class="year-select">{{ $last_year }}</label>

                    </div>
                    @php

                        $name = \Illuminate\Support\Facades\Route::current();
                        if (!empty($name->parameters['year'])) {
                            $path = $name->parameters['year'];
                        } elseif (!empty($name->parameters['type'])) {
                            $path = $name->parameters['type'];
                        } else {
                            $path = 'All';
                        }

                    @endphp
                    <div class="col-lg-4 col-md-12 color_w d-flex align-items-center justify-content-center"
                        style="text-align: center;">
                        <a href="">
                            <i class="fa-solid fa-circle-plus zoom-icons"></i>
                        </a>
                        <a href="{{ route('timeline.index') }}">
                            <i class="fa-solid fa-circle-minus zoom-icons"></i>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-12 color_w d-flex align-items-center justify-content-end">
                        <div class="text-center d-flex">
                            <div class="filter-item milestone-item">
                                <div id="People" class="@if ($path == 'People') active @endif">PEOPLE</div>
                            </div>
                            <div class="filter-item milestone-item">
                                <div id="Places" class="@if ($path == 'Places') active @endif">PLACES</div>
                            </div>
                            <div class="filter-item milestone-item">
                                <div id="Events" class="@if ($path == 'Events') active @endif">EVENTS</div>
                            </div>
                            <div class="filter-item milestone-item">
                                <div id="All" class="@if ($path == 'All') active @endif">ALL</div>
                            </div>
                            <i class="fa-solid fa-info-circle info-icons"></i>
                        </div>
                    </div>

                </div>

                <div style="margin-top: 1px;">
                    <div class="row text-center border-1">
                        <div class="col-md-1 bg-black year-section-black button-prev top-slide-btn">
                            <i class="fas fa-chevron-left color_w p-1 timeline-year-icon"></i>
                        </div>
                        <div class="col slide-container time-swiper-1 swiper">
                            <div class="swiper-wrapper">
                                @foreach ($display_data as $item)
                                    <div class="year-section-black swiper-slide">
                                        <div style="color: white !important">
                                            <h5 class="timeline-year">{{ $item->data()['year'] }}
                                                @if (!empty($item->data()['month']))
                                                    / {{ $item->data()['month'] }}
                                                @endif
                                                @if (!empty($item->data()['day']))
                                                    / {{ $item->data()['day'] }}
                                                @endif
                                            </h5>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-1 bg-black year-section-black button-next top-slide-btn">
                            <i class="fas fa-chevron-right color_w p-2 timeline-year-icon"></i>
                        </div>
                    </div>
                    <div class="row timeline-data-container milestone-container">
                        <div class="col-md-1 px-0 bottom-empty-space"></div>
                        <div class="col slide-container time-cont-swiper-1 swiper">
                            <div class="swiper-wrapper">
                                @foreach ($display_data as $item)
                                    <div
                                        class="history-column swiper-slide milestone @if ($item->id() == $id) slide-custom @endif">
                                        <div class="under-date-img">
                                            @if (!empty($item->data()['image_1']))
                                                <img src="{{ $item->data()['image_1'] }}" alt="">
                                            @endif

                                        </div>
                                        <h2 class="h2text_w text-center">{!! $item->data()['title'] !!}</h2>
                                        <div class="description text-center">{!! $item->data()['writeup'] !!}</div>
                                        <div class="resource text-center">
                                            {!! $item->data()['additional_material'] !!}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-next swiper-navBtn button-next">
                            <i class="fa-solid fa-caret-right slider-icon"></i>
                        </div>
                        <div class="swiper-button-prev swiper-navBtn button-prev">
                            <i class="fa-solid fa-caret-left slider-icon"></i>
                        </div>
                        <div class="col-md-1 history-column bottom-empty-space"></div>
                    </div>
                    <div class="row bg-red content-footer d-flex align-items-center px-4">
                        <div class="go-top text-right">BACK TO TOP &nbsp &#9650;</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('assets-js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="{{ asset('assets/js/timeline.js') }}"></script>
    <script src="{{ asset('assets/js/timeline_navbar.js') }}"></script>
@endsection

@endsection
