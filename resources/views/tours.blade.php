@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/archive_tour.css') }}">
    <style>
        #myTab{
            width: 100%;
            justify-content: center; /* Step 2: Center items along the main axis */
          align-items: center;
          color:#103355;
        }
        .nav-tabs .nav-link{
            color:#103355;
        }
        #myTab .active:focus {
    background-color: #103355;
    color:#F2ECE0D6;
  }
  .nav-tabs .nav-link.active {
    background-color: #103355;
    color:#F2ECE0D6;
  }
  
  #tour-3d h2{
      color: #103355;
    text-align: center;
    font-family: Gauthier Next FY;
    font-size: 53.655px;
    font-style: normal;
    font-weight: 700;
    line-height: 94.5%; /* 50.704px */
  }
  #tour-3d a{
      color: #8D7237;
text-align: center;
font-family: Gauthier Next FY;
font-size: 33.018px;
font-style: normal;
font-weight: 700;
line-height: 94.5%; /* 31.202px */
text-transform: uppercase;
  }
  #tour-3d img{
      width: 350.821px;
height: 234.079px;
flex-shrink: 0;
  }
  #tour-3d{
      width:150vh;
      /*display: flex;*/
  justify-content: center; /* Step 2: Center items along the main axis */
  align-items: center;
  margin:auto;
  }
  .torbody{
      position:fixed;
      height:100vh;
      z-index:-999999;
      top:-10px;
      width:100%;
      background-image: url('{{ asset('assets/images/homepage-sections/background/Section_Background 01-min.png') }}');
  }
  #tour-360{
      position:relative;
      margin-top:-2000px;
      width:100%;
  }
  #tour-360 h1{
      color: #103355;
    text-align: center;
    font-family: Gauthier Next FY;
    font-size: 65px;
    font-style: normal;
    font-weight: 700;
    line-height: 94.5%; /* 61.425px */
  }
  #tour-360 a{
      color: #8D7237;
text-align: center;
font-family: Gauthier Next FY;
font-size: 40px;
font-style: normal;
font-weight: 700;
line-height: 94.5%; /* 37.8px */
text-transform: uppercase;
  }
    </style>

@endsection
@extends('layouts/master')
@section('title', 'Virtual Tours')
@section('content')
<div class="torbody"></div>
    <div class="container-fluid" style="width:50%; height:50vh; display: flex;
  justify-content: center; /* Step 2: Center items along the main axis */
  align-items: center;"
        <div class="container">
            <div class="row header-texts justify-item-center">
                <div class="col text-center">
                    <h1 class="center" style="color: #103355;
                    text-align: center;
                    font-family: Gauthier Next FY;
                    font-size: 60px;
                    width: 100%;
                    font-style: normal;
                    font-weight: 700;
                    line-height: 94.5%; /* 56.7px */">
                        VIRTUAL TRINITY</h1>
                    <p class="blue-text" style="color: #103355;
                    text-align: center;
                    font-family: Gauthier Next FY;
                    font-size: 20px;
                    font-style: normal;
                    font-weight: 400;
                    line-height: 136%; /* 27.2px */">
                        Welcome to our Virtual Trinity page, where you can now immerse yourself in the captivating world of Trinity College Kandy. Embark on a virtual exploration as we proudly present a collection of mesmerizing 3D walkthrough tours showcasing the magnificent hallways, picturesque landscapes, and iconic buildings of Trinity.</p>
                </div>
            </div>
        </div>
    <div style="color: rgba(242, 236, 224, 0.84);
    text-align: center;
    font-family: Gauthier Next FY;
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: 94.5%; /* 28.35px */
    text-transform: uppercase;">
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
                    <div class=" fade show active" id="tour-3d" role="tabpanel" aria-labelledby="home-tab">
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
                    <div class="tab-pane fade" id="tour-360" style="background: rgba(17, 44, 63, 0.89);" role="tabpanel" aria-labelledby="profile-tab">
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
