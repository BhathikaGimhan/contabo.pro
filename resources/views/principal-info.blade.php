@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/principals.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'Principal-Information')
@section('content')
    <section class="learn-what">

        <div class="inner-roll-call container mt-5 ">
            <div class="row mb-5">

                <div class="learn-what-to">
                    <h1>{{$principal_data->data()['name']}}</h1>
                </div>

                <div class="col-md-8 for-border">



                    <div class="learn-what">

                        <div class="learn-what-img"  >
                            <img style="height: 700px;width:502px;object-fit: cover" src="{{ $principal_data->data()['image'] }}" alt="">

                        </div>

                        <div class="learn-what-img-des">
                            <h1>{{$principal_data->data()['year']}}</h1>
                        </div>

                        <div class="learn-what-big-des">
                            <p>{!! $principal_data->data()['description'] !!}</p>
                        </div>

                    </div>



                </div>


                <div class="col-md-4 for-padding-learn">

                    <div class="right-also-see">
                        <h1>LEARN WHAT
                            HAPPENED
                            DURING HIS
                            YEARS</h1>

                        <div class="also-see-card mb-5">

                            <div class="also-see-title">
                                <h6>VICE PRONCIPALS</h6>
                            </div>
                            <div class="also-see-img">
                                <img src="" alt="">
                            </div>
                            <div class="also-see-lower-des">
                                <a href="">Lorem ipsum dolor sit.</a>
                                <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet
                                    dolore</p>
                            </div>

                        </div>

                        <div class="also-see-card mb-5">

                            <div class="also-see-title">
                                <h6>HEAD PREFECTS</h6>
                            </div>
                            <div class="also-see-img">
                                <img src="" alt="">
                            </div>
                            <div class="also-see-lower-des">
                                <a href="">Lorem ipsum dolor sit.</a>
                                <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet
                                    dolore</p>
                            </div>

                        </div>

                        <div class="also-see-card mb-5">

                            <div class="also-see-title">
                                <h6>HEAD PREFECTS</h6>
                            </div>
                            <div class="also-see-img">
                                <img src="" alt="">
                            </div>
                            <div class="also-see-lower-des">
                                <a href="">Lorem ipsum dolor sit.</a>
                                <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet
                                    dolore</p>
                            </div>

                        </div>

                        <div class="also-see-card mb-5">

                            <div class="also-see-title mb-5">
                                <h6>FROM THE GALLERY</h6>
                            </div>

                            <div class="for-gallery-img">

                                <div class="from-gallery">
                                    <img src="" alt="">
                                </div>
                                <div class="from-gallery">
                                    <img src="" alt="">
                                </div>
                                <div class="from-gallery">
                                    <img src="" alt="">
                                </div>
                                <div class="from-gallery">
                                    <img src="" alt="">
                                </div>
                                <div class="from-gallery">
                                    <img src="" alt="">
                                </div>
                                <div class="from-gallery">
                                    <img src="" alt="">
                                </div>
                                <div class="from-gallery">
                                    <img src="" alt="">
                                </div>
                                <div class="from-gallery">
                                    <img src="" alt="">
                                </div>
                                <div class="from-gallery">
                                    <img src="" alt="">
                                </div>



                            </div>


                        </div>

                    </div>



                </div>
            </div>
            <hr style="opacity: 1;">
        </div>

    </section>

@section('assets-js')
    <script src="{{ asset('assets/js/principles.js') }}"></script>
@endsection
@endsection
