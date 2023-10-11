@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/timeline.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/timeline_navbar.css') }}"> --}}

@endsection
@extends('layouts/master')
@section('title', 'Timeline')
@section('content')


    <div class="back-button-container">

        <div class="last-section-on-timeline container">


            <div class="showing-with-date-bar container">

                <div class="date-section d-flex">


                    <div class="from d-flex">
                        <img src="{{ asset('assets/images/button-front.png') }}" alt="" />
                        <div class="date-1">
                            <p>01</p>
                        </div>
                        <div class="date-1">
                            <p>01</p>
                        </div>
                        <div class="date-1">
                            <p>{{$first_year}}</p>
                        </div>
                    </div>

                    <div class="different">
                        <p>to</p>
                    </div>





                    <div class="to d-flex">
                        <div class="date-1">
                            <p>30</p>
                        </div>
                        <div class="date-1">
                            <p>01</p>
                        </div>
                        <div class="date-1">
                            <p>{{$last_year}}</p>
                        </div>
                    </div>
                </div>


                <div class="menu-bar-on-timeline">
                    <a href="{{ route('timeline.info','People') }}">PEOPLE</a>
                    <a href="{{ route('timeline.info','Places') }}">PLACES</a>
                    <a href="{{ route('timeline.info','Events') }}">EVENTS</a>
                    <a href="{{ route('timeline.info','All') }}">ALL</a>

                    <a href="">
                        <i class="fas fa-info-circle"></i>
                    </a>
                </div>


            </div>

            <div class="upper-gray-section-slider">

                @foreach ($timeline as $item)
                <div class="last-section-slider">

                    <div class="last-slider-active">
                        @if (!empty($item->data()['image_1']))
                        <div class="inner-last-section-slider">
                            <img src="{{asset($item->data()['image_1'])}}" alt="">
                            <h4>{{ $item->data()['year'] }}
                                @if (!empty($item->data()['month']))
                                    /{{ $item->data()['month'] }}
                                @endif
                                @if (!empty($item->data()['day']))
                                    /{{ $item->data()['day'] }}
                                @endif</h4>
                            <h6>{{ $item->data()['title'] }}
                               </h6>
                        </div>
                        @endif
                        @if (!empty($item->data()['image_2']))
                        <div class="inner-last-section-slider">
                            <img src="{{asset($item->data()['image_2'])}}" alt="">
                            <h4>{{ $item->data()['year'] }}
                                @if (!empty($item->data()['month']))
                                    /{{ $item->data()['month'] }}
                                @endif
                                @if (!empty($item->data()['day']))
                                    /{{ $item->data()['day'] }}
                                @endif</h4>
                            <h6>{{ $item->data()['title'] }}
                               </h6>
                        </div>
                        @endif
                        @if (!empty($item->data()['image_3']))
                        <div class="inner-last-section-slider">
                            <img src="{{asset($item->data()['image_3'])}}" alt="">
                            <h4>{{ $item->data()['year'] }}
                                @if (!empty($item->data()['month']))
                                    /{{ $item->data()['month'] }}
                                @endif
                                @if (!empty($item->data()['day']))
                                    /{{ $item->data()['day'] }}
                                @endif</h4>
                            <h6>{{ $item->data()['title'] }}
                               </h6>
                        </div>
                        @endif
                        @if (!empty($item->data()['image_4']))
                        <div class="inner-last-section-slider">
                            <img src="{{asset($item->data()['image_4'])}}" alt="">
                            <h4>{{ $item->data()['year'] }}
                                @if (!empty($item->data()['month']))
                                    /{{ $item->data()['month'] }}
                                @endif
                                @if (!empty($item->data()['day']))
                                    /{{ $item->data()['day'] }}
                                @endif</h4>
                            <h6>{{ $item->data()['title'] }}
                               </h6>
                        </div>
                        @endif
                        @if (!empty($item->data()['image_5']))
                        <div class="inner-last-section-slider">
                            <img src="{{asset($item->data()['image_5'])}}" alt="">
                            <h4>{{ $item->data()['year'] }}
                                @if (!empty($item->data()['month']))
                                    /{{ $item->data()['month'] }}
                                @endif
                                @if (!empty($item->data()['day']))
                                    /{{ $item->data()['day'] }}
                                @endif</h4>
                            <h6>{{ $item->data()['title'] }}
                               </h6>
                        </div>
                        @endif
                    </div>


                    <div class="under-last-slider-details mb-4">
                        <p>{!! $item->data()['writeup'] !!}</p>
                        <br>
                        <p>
                           
                            {!! $item->data()['additional_material'] !!}
                        </p>
                    </div>

                </div>
                @endforeach
            </div>



            <div class="back-to-page text-center">

                <a href="{{ route('timeline.explore') }}">
                    <img src="{{ asset('assets/images/button-back.png') }}" alt="" />
                </a>

                <a href="{{ route('timeline.explore') }}"><p>Back to</p></a>
            </div>


            <div class="back-to-top text-center">
                <img src="{{ asset('assets/images/back-to-top.png') }}" alt="" />
                <p>Back to top</p>
            </div>

        </div>



    </div>



    <div class="like-plagination last-pagination ">

        <div class="top-section top-section-for-slider container">

            <div class="year-showing">
                <h6>{{$first_year}}-{{$last_year}}</h6>
            </div>

        </div>




        <div class="numbering-last mt-4 container">
            <div class="page-num">
                <a href="{{ route('timeline.filter-by-year',$first_year+1) }}"><p>1</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+2) }}"><p>2</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+3) }}"><p>3</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+4) }}"><p>4</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+5) }}"><p>5</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+6) }}"><p>6</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+7) }}"><p>7</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+8) }}"><p>8</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+9) }}"><p>9</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+10) }}"><p>10</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+11) }}"><p>11</p></a>
            </div>
            <div class="page-num">
                 <a href="{{ route('timeline.filter-by-year',$first_year+12) }}"><p>12</p></a>
            </div>

        </div>


        <div class="search-icon mt-4">
            {{-- <a href="{{ route('timeline.explore') }}">
                <img src="{{ asset('assets/images/zoom-in.png') }}" alt="" />
            </a> --}}
            <a href="{{ route('timeline.explore') }}">
                <img src="{{ asset('assets/images/zoom-out.png') }}" alt="" />
            </a>

        </div>


    </div>

@section('assets-js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js">
    </script>
    <script src="{{ asset('assets/js/timeline.js') }}"></script>
    <script src="{{ asset('assets/js/timeline_navbar.js') }}"></script>
@endsection

@endsection
