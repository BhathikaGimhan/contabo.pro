@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/timeline.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/explore.css') }}">


@endsection
@extends('layouts/master')
@section('title', 'Timeline')
@section('content')



    <div class="head-showing-with-date-bar ">
        <div class="container " style="background-color: black;">
            <div class="row">
                <div class="col-md-8 color_w p-3">
                </div>
                <div class="col-md-4 color_w p-2">
                    <div class="row">
                        <div class="col-md-3"><a style="color: white !important"
                                href="{{ route('timeline.info-1-year', 'People') }}">PEOPLE</a></div>
                        <div class="col-md-3"><a style="color: white !important"
                                href="{{ route('timeline.info-1-year', 'Places') }}">PLACES</a></div>
                        <div class="col-md-3"><a style="color: white !important"
                                href="{{ route('timeline.info-1-year', 'Events') }}">EVENTS</a></div>
                        <div class="col-md-3"><a style="color: white !important"
                                href="{{ route('timeline.info-1-year', 'All') }}">ALL</a></div>

                    </div>
                </div>

            </div>
        </div>

        <div class="container " style=" margin-top: 2px;">

            <div class="row " style="    flex-flow: nowrap;">

             @php
                $previous_one = $first_year - 1;
                $previous_two = $last_year - 1;

                $previous_year_range = "$previous_one-$previous_two";
            @endphp
                <div class="col-md-1" style="background-color: black;">


                    <a href="{{ route('timeline.info-1-year', $previous_year_range) }}">
                        <i class="fas fa-chevron-left color_w p-2">
                        </i>
                    </a>

                </div>

                <div class="col-md-10" style="background-color: black;">
                    <h2 class="c1995-1998">{{ $first_year }}</h2>
                </div>
                @php
                $next_one = $first_year + 1;
                $next_two = $last_year + 1;
                $next_year_range = "$next_one-$next_two";
            @endphp
                <div class="col-md-1" style="background-color: black;">
                    <a href="{{ route('timeline.info-1-year', $next_year_range) }}">
                        <i class="fas fa-chevron-right color_w p-2"></i>
                    </a>
                </div>

            </div>
        </div>
        <div class="container border border-dark" style="">
            @foreach ($timeline as $item)
            <div class="row">
                <div class="col-md-6">

                    @if (!empty($item->data()['image_1']))
                    <img src="{{ $item->data()['image_1'] }}" alt="" width="500" height="400" style="object-fit: contain">
                     @else
                     <img src="" alt="" />
                    @endif
                </div>

                <div class="col-md-6">
                    @if (!empty($item->data()['title']))
                    <h2><b>{!! $item->data()['title'] !!}</b>
                    @else
                        <p class="pt-3"><b>No Title..</b></p>
                    @endif

                    </h2>
                    <h4 >
                        @if (!empty($item->data()['day']))
                            {{ $item->data()['day'] }}
                        @endif
                        @if (!empty($item->data()['month']))
                            /{{ $item->data()['month'] }}
                        @endif
                        /{{ $item->data()['year'] }}
                    </h4>
                    @if (!empty($item->data()['writeup']))
                        @php
                        $post_data = substr($item->data()['writeup'], 0, 1000);
                        @endphp
                    <p class="pt-3"><b>{!! $post_data !!}<br></b></p>
                    @else
                    <p class="pt-3"><b>No Description..</b></p>
                    @endif

                    <div style="margin-top: 2px">
                    <a href="{{ route('timeline.details', $item->id()) }}" >Read More</a>
                    </div>

                </div>

            </div>
            <hr><br>
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
