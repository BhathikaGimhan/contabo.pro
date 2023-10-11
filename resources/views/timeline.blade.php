@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/timeline.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/timeline_navbar.css') }}"> --}}

@endsection
@extends('layouts/master')
@section('title', 'Timeline')
@section('content')

    <section id="archive" class="">
        <p class="mini-title text-center">TIMELINE</p>
        <div class="main-archive">

            <div class="title_des ">
                <h1>TIMELINE</h1>

            </div>

            <hr class="container" style="opacity: 1;">



            <div class="upper-des container mt-4">

                <div class="row for-border">

                    <div class="col-md-6 inner-title-des for-border-right">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam erat volutpat. Ut wisi
                            enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hen</p>
                    </div>
                    <div class="col-md-6 inner-title-des">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing
                            elit, sed diam nonummy nibh euismod tincidunt ut
                            laoreet dolore magna aliquam erat volutpat. Ut wisi
                            enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                            aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hen</p>
                    </div>
                </div>

            </div>






            <!-- archieve humidifiers start -->

            <div class="for-bg">
                <div class="container responsive">
                    @if (!empty($timeline_latest))
                        <div class="row">
                            <div class="col-md-8">

                                <div class="have-the-slider">

                                    @if (!empty($timeline_latest->data()['image_1']))
                                        <div class="inner-slider">

                                            <div class="slider-img">
                                                <img src="{{ $timeline_latest->data()['image_1'] }}" alt="">
                                            </div>

                                        </div>

                                    @endif
                                    @if (!empty($timeline_latest->data()['image_2']))
                                        <div class="inner-slider">
                                            <div class="slider-img">
                                                <img src="{{ $timeline_latest->data()['image_2'] }}" alt="">
                                            </div>
                                        </div>

                                    @endif

                                    @if (!empty($timeline_latest->data()['image_3']))
                                        <div class="inner-slider">
                                            <div class="slider-img">
                                                <img src="{{ $timeline_latest->data()['image_3'] }}" alt="">
                                            </div>
                                        </div>

                                    @endif
                                    @if (!empty($timeline_latest->data()['image_4']))
                                        <div class="inner-slider">

                                            <div class="slider-img">
                                                <img src="{{ $timeline_latest->data()['image_4'] }}" alt="">
                                            </div>
                                        </div>

                                    @endif
                                    @if (!empty($timeline_latest->data()['image_5']))
                                        <div class="inner-slider">

                                            <div class="slider-img">
                                                <img src="{{ $timeline_latest->data()['image_5'] }}" alt="">
                                            </div>

                                        </div>
                                    @endif

                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="official">

                                    <h1 class=" ">
                                        {{ $timeline_latest->data()['year'] }}/{{ $timeline_latest->data()['month'] }}/{{ $timeline_latest->data()['day'] }}
                                    </h1>
                                    <p>{{ $timeline_latest->data()['title'] }}</p>
                                    <p class="year-des">{!! $timeline_latest->data()['writeup'] !!}</p>

                                </div>

                            </div>
                        </div>
                    @endif

                </div>

            </div>

        </div>

        <!-- archieve humidifiers end -->



        <!-- three category part start -->

        <section class="three-cat container">
            <div class="three-cat-title">
                <h1>CATEGORIES</h1>
            </div>

            <div class="row container" style="margin: 0px !important;">

                <div class="col-md-4 for-responsive-view">
                    <div class="inner-cat-three for-padding-fixed">
                        <h4>CATEGORY 1</h4>
                        <p class="cat-des">Lorem ipsum dolor sit
                            amet, consectetuer
                            adipiscing elit, sed
                            diam nonummy nibh
                            euismod tincidunt ut
                            laoreet dolore magna
                            aliquam erat volutpat.
                            Ut wisi enim ad minim
                            veniam, quis nostrud
                            exerci tation ullamcor</p>
                    </div>
                </div>

                <div class="col-md-4 for-responsive-view middle-border">
                    <div class="inner-cat-three">
                        <h4>CATEGORY 2</h4>
                        <p class="cat-des">Lorem ipsum dolor sit
                            amet, consectetuer
                            adipiscing elit, sed
                            diam nonummy nibh
                            euismod tincidunt ut
                            laoreet dolore magna
                            aliquam erat volutpat.
                            Ut wisi enim ad minim
                            veniam, quis nostrud
                            exerci tation ullamcor</p>
                    </div>
                </div>
                <div class="col-md-4 for-responsive-view for-padding-fixed">
                    <div class="inner-cat-three last-of-three">
                        <h4>CATEGORY 3</h4>
                        <p class="cat-des">Lorem ipsum dolor sit
                            amet, consectetuer
                            adipiscing elit, sed
                            diam nonummy nibh
                            euismod tincidunt ut
                            laoreet dolore magna
                            aliquam erat volutpat.
                            Ut wisi enim ad minim
                            veniam, quis nostrud
                            exerci tation ullamcor</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- three category part end -->


        <section class="milestones  mt-5 ">
            <div class="milestones-title">
                <h1>MILESTONES</h1>
                @if (!empty($timeline_latest))
                    
                    <a href="{{ route('timeline.timeline_30_years') }}"> <span>EXPLORE</span></a>
                @endif
            </div>

            <div class="for-mil-bg">

                <div class="milestone-slider container">

                    @foreach ($collection as $item)


                        <div class="inner-mil-slider">
                            <div class="slider-performance">
                                <div class="inner-slider-title">
                                    <h1>{{ $item->data()['year'] }}
                                        @if (!empty($item->data()['month']))
                                            /{{ $item->data()['month'] }}
                                        @endif
                                        @if (!empty($item->data()['day']))
                                            /{{ $item->data()['day'] }}
                                        @endif
                                    </h1>

                                    @foreach ($item->data()['timeline_category'] as $cat)
                                        @php
                                            $timeline_category = \App\Http\Controllers\TimelineController::getCategory($cat);
                                        @endphp
                                        <h6>{{ $timeline_category->data()['timeline_category'] }}</h6>
                                    @endforeach
                                </div>
                                <div class="top-section-inner-slider">


                                    @if (!empty($item->data()['image_1']))

                                        <img style="height: 140px;width:200px;object-fit: cover;margin-right: 20px;"
                                            src="{{ $item->data()['image_1'] }}" alt="">


                                    @endif
                                    @if (!empty($item->data()['image_2']))

                                        <img style="height: 140px;width:200px;object-fit: cover;margin-right: 20px;"
                                            src="{{ $item->data()['image_2'] }}" alt="">

                                    @endif

                                    @if (!empty($item->data()['image_3']))

                                        <img style="height: 140px;width:200px;object-fit: cover;margin-right: 20px;"
                                            src="{{ $item->data()['image_3'] }}" alt="">

                                    @endif
                                    @if (!empty($item->data()['image_4']))

                                        <img style="height: 140px;width:200px;object-fit: cover;margin-right: 20px;"
                                            src="{{ $item->data()['image_4'] }}" alt="">

                                    @endif
                                    @if (!empty($item->data()['image_5']))

                                        <img style="height: 140px;width:200px;object-fit: cover;margin-right: 20px;"
                                            src="{{ $item->data()['image_5'] }}" alt="">

                                    @endif


                                </div>
                                <div class="inner-slider-title">
                                    <p>{!! $item->data()['writeup'] !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

            </div>
        </section>



    @section('assets-js')
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
                crossorigin="anonymous"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
        </script>
        <script src="{{ asset('assets/js/timeline.js') }}"></script>
        <script src="{{ asset('assets/js/timeline_navbar.js') }}"></script>
    @endsection

@endsection
