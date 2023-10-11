@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/archive_tour.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Virtual Tours')
@section('content')
    <div class="container-fluid header-section"
         style="background-image: url({{ asset('assets/images/tours/header-01.png') }})">
        <div class="container">
            <div class="row header-texts">
                <div class="col-md-5">
                    <h1>VIRTUAL TRINITY</h1>
                </div>
                <div class="col-md-6">
                    <p class="yellow-text pt-1">Embrace the hallways, landscapes, buildings of Trinity now on your
                        screen!</p>
                    <p class="blue-text">In this section, we have displayed
                        various 3D walkthrough tours of
                        T</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container tour-container">
        <div class="row pt-5 pb-5">
            <div class="col-md-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tour-3d"
                                type="button" role="tab" aria-controls="home" aria-selected="true">3D Walkthrough Tours
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tour-360"
                                type="button" role="tab" aria-controls="profile" aria-selected="false">360 Tours
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tour-above"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">Trinity from
                            Above
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#archive"
                                type="button" role="tab" aria-controls="contact" aria-selected="false">3D Archive Items
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="tour-3d" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row pt-5 toure-area first-item">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/tours/Chapel-min.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-7">
                                <h2 class="tour-title">
                                    The Chapel of
                                    Trinity
                                    College
                                    Kandy
                                </h2>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>
                            <div class="col-md-12 hr"></div>

                        </div>
                        <div class="row toure-area">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/tours/main-hall.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-7 tour-data">
                                <h2 class="tour-title">
                                    The Trinity
                                    College
                                    Main Hall
                                </h2>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>
                            <div class="col-md-12 hr"></div>
                        </div>
                        <div class="row toure-area">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/tours/Librray-and-Archives-min.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-7 tour-data">
                                <h2 class="tour-title">
                                    The College
                                    Library &
                                    Archives
                                </h2>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>
                            <div class="col-md-12 hr"></div>
                        </div>
                        <div class="row toure-area">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/tours/Junior-School-min.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-7 tour-data">
                                <h2 class="tour-title">
                                    The
                                    Junior
                                    School
                                </h2>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>
                            <div class="col-md-12 hr"></div>
                        </div>
                        <div class="row toure-area">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/tours/Old-Pavillion-min.jpg') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-7 tour-data">
                                <h2 class="tour-title">
                                    Old Pavillion at the Asgiriya Stadium
                                </h2>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tour-360" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6 item360 tour-data has-border-360">
                                <img src="{{ asset('assets/images/tours/Old-Pavillion-min.jpg') }}" alt="" class="img-fluid">
                                <h1 class="tour-title">The College Entrance</h1>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>

                            <div class="col-md-6 item360 tour-data has-border-360-bottom">
                                <img src="{{ asset('assets/images/tours/Old-Pavillion-min.jpg') }}" alt="" class="img-fluid">
                                <h1 class="tour-title">Car Park and College Hall</h1>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>
                            <div class="col-md-6 item360 tour-data has-border-360">
                                <img src="{{ asset('assets/images/tours/Old-Pavillion-min.jpg') }}" alt="" class="img-fluid">
                                <h1 class="tour-title">Fraser Block</h1>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>

                            <div class="col-md-6 item360 tour-data has-border-360-bottom">
                                <img src="{{ asset('assets/images/tours/Old-Pavillion-min.jpg') }}" alt="" class="img-fluid">
                                <h1 class="tour-title">Gaster Block</h1>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>
                            <div class="col-md-6 item360 tour-data has-border-360-no-bottom">
                                <img src="{{ asset('assets/images/tours/Old-Pavillion-min.jpg') }}" alt="" class="img-fluid">
                                <h1 class="tour-title">Lorem ipsum dolor sit a</h1>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>

                            <div class="col-md-6 item360 tour-data">
                                <img src="{{ asset('assets/images/tours/Old-Pavillion-min.jpg') }}" alt="" class="img-fluid">
                                <h1 class="tour-title">Lorem ipsum dolor sit a</h1>
                                <a href="" class="tour-link">Enter The Tour</a>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tour-above" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row tour-above">
                            <div class="col-md-12 img-container">
                                <img class="img-fluid" src="{{ asset('assets/images/tours/Trinity-From-Above-Image-min.jpg') }}" alt="">
                                <div class="centered">
                                    <h1>Trinity Collage From Above</h1>
                                    <a class="read-more-hover mi-btn" href="{{ route('tours') }}">ENTER THE TOUR</a>
                                </div>
                            </div>
                            <div class="col-md-12 mt-5 img-container">
                                <img class="img-fluid" src="{{ asset('assets/images/tours/Kandy-Town-Terrain-Preview-Image-min.jpg') }}" alt="">
                                <div class="centered">
                                    <h1>KANDY TOWN TERRAIN</h1>
                                    <a class="read-more-hover mi-btn" href="{{ route('tours') }}">ENTER THE TOUR</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="archive" role="tabpanel" aria-labelledby="contact-tab">
                        @foreach ($tours as $tour)
                        <div class="row pt-5 toure-area first-item">
                            <div class="col-md-5">
                                <img src="{{ asset('assets/images/tours/Chapel-min.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-7">
                                <h2 class="tour-title" style="font-size: 3em">
                                    {{ $tour->data()['name'] }}
                                </h2>
                                <p>{{ $tour->data()['description'] }}</p>
                                <a href="" class="tour-link">VIEW THE MODEL</a>
                            </div>
                            <div class="col-md-12 hr"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
