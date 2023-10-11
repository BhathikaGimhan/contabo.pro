@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/explore.css') }}">


@endsection
@extends('layouts/master')
@section('title', 'Timeline')
@section('content')



    <div class="head-showing-with-date-bar ">


        <div class="container " style=" margin-top: 2px;">

            <div class="row " style="    flex-flow: nowrap;">


                <div class="col-md-1" style="background-color: black;">
                    <a style="color: white !important"
                                href="{{ route('timeline.info-1-year', 'All') }}">
                                <i class="fas fa-chevron-left color_w p-2">
                    </i>
                    </a>
                </div>

                <div class="col-md-10" style="background-color: black;">
                    <h2 class="c1995-1998">TIMELINE</h2>
                </div>

                <div class="col-md-1" style="background-color: black;">

                </div>

            </div>
        </div>

        <div class="container">
            <div class="row bg-light m-5
                ">
                <div class="col-md-1"></div>
                <div class="col-md-10 bg-dark mt-5 ">
                    <h4 class="color_w">
                        @if (!empty($timeline_details->data()['day']))
                            {{ $timeline_details->data()['day'] }}
                        @endif
                        @if (!empty($timeline_details->data()['month']))
                            /{{ $timeline_details->data()['month'] }}
                        @endif
                        /{{ $timeline_details->data()['year'] }}
                    </h4>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-10 border border-dark pb-3 ">
                    <img width="800" height="500" style="object-fit: contain" src="{{ $timeline_details->data()['image_1'] }}">
                </div>
                <div class="col-md-1"></div>

                <div class="col-md-1"></div>
                <div class="col-md-10  mb-5">
                    <div class="container">

                        <div class="row">
                            <div class="col-md-4  mt-5 ">
                                <h2 class="pb-3">{{ $timeline_details->data()['title'] }}</h2>
                               @foreach ($timeline_categories as $category)

                               <a href="#">{{ $category->data()['timeline_category'] }} &nbsp;</a>
                               @endforeach
                            </div>
                            <div class="col-md-8 mt-5">
                                <p class="font-weight-bold">{!! $timeline_details->data()['writeup'] !!}</p>
                                <p></p>
                            </div>

                        </div>
                        <hr color=black>
                        {{-- <h6>Lorem Ipsum :</h6> --}}
                        <p class="text-left">{!! $timeline_details->data()['additional_material'] !!}</p>
                    </div>

                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
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
