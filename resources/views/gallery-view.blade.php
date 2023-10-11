@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/gallery.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Gallery')
@section('content')

    <div class="debate-banner">
        @if (!empty($gallery_details->data()['title']))
        <h6>{{ $gallery_details->data()['title'] }}</h6>
    @endif
    </div>

    <div class="d-flex justify-content-between">
        <a href="">GO BACK</a>
        <a>150 PHOTOS</a>
    </div>



    <section class="on-view-gallery container">
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
                @foreach ($gallery_collection as $key => $slide)

                    {{-- @if ($slide->id() == $gallery_details->id())
                    <div>{{$key}}</div>
                @else

                @endif --}}
                    <div class="swiper-slide @if ($slide->id() == $gallery_details->id()) active @endif">
                    {{-- <div class="swiper-slide {{$key == 1 ? 'active':''}}"> --}}
                        <div class="swiper-slide-container">
                            <div class="slider-inner-img">
                                <div class="slider-img-for-gallery">

                                    @if (!empty($slide->data()['input']))
                                        <img src="{{ $slide->data()['input'] }}" alt="" />
                                    @endif
                                </div>
                                @if (!empty($slide->data()['description']))
                                    <p>
                                        {!! $slide->data()['description'] !!}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="swiper-button-prev-unique">
            <img src="assets/images/button-back.png" alt="" />
        </div>
        <div class="swiper-button-next-unique">
            <img src="assets/images/button-front.png" alt="" />
        </div>
    </section>

    <div class="back-to-main w-100 text-end d-flex justify-content-end">
        <div class="w-25 text-center">
            <a href="{{ route('gallery.index') }}">
                <img src="{{asset("assets/images/button-back.png")}}" alt="" />
                <h6 class="text-dark fw-bold">BACK TO MAIN</h6>
            </a>
        </div>
    </div>

    <section class="for-background">
        <div class="container shaping-the-button">
            <div class="swiper-container gallery-thumbs container">
                <div class="swiper-wrapper">
                    @foreach ($gallery_collection as $key => $slide)
                        <div class="swiper-slide">
                            <div class="swiper-slide-container">
                                <div class="thumb-img-for-one">
                                    @if (!empty($slide->data()['input']))
                                    <img src="{{ $slide->data()['input'] }}" alt="" />
                                @endif
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <div class="swiper-button-prev-unique">
                <img src="{{asset("assets/images/button-back.png")}}" alt="" />
            </div>
            <div class="swiper-button-next-unique">
                <img src="{{asset("assets/images/button-front.png")}}" alt="" />

            </div>
        </div>
    </section>


@section('assets-js')
    <script src="{{ asset('assets/js/gallery.js') }}"></script>

@endsection
@endsection
