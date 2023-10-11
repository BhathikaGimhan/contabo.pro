@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/roll-call.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Roll Call')
@section('content')



    <section id="archive" class="">

        <p class="mini-title text-center">ROLL CALL</p>

        <div class="main-archive">

            <div class="title_des ">
                <h1>ROLL CALL</h1>
            </div>

            <div class="upper-des container">
                <div class="row">
                    <hr style="opacity: 1;">
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
                    <hr style="opacity: 1;">


                </div>

            </div>
        </div>



        <div class="inner-roll-call container mt-5 ">
            <div class="row mb-5">
                <div class="col-md-9">

                    <div class="left-roll-call">

                        <div class="roll-call-img">
                            <h1>LATEST</h1>
                        </div>

                        <div class="roll-img-des">
                            <h1>“LOREM IPSUM
                                DOLOR SIT VAMET,
                                CONSECTETUER</h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                                nonummy nibh euismod tincidunt ut
                                laoreet dolore magna aliquam erat
                                volutpat. Ut wisi enim ad minim
                                veniam, quis nostrud exerci tation
                                ullamcorper suscipit lobortis nisl ut
                                aliquip ex ea commodo consequat.
                                Duis autem vel eum iriure dolor in
                                hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu
                                feugiat nulla facilisis at vero eros et
                                accumsan et iusto odio dignissim qui
                                blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla
                                facilisi.</p>
                        </div>

                    </div>

                    <div class="lower-img-des">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                            nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                            enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                            nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in
                            hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat
                            nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
                            luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                            laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                            quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
                            commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate
                            velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero
                            eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril </p>
                    </div>

                </div>


                <div class="col-md-3">

                    <div class="right-also-see">
                        <h1>ALSO SEE</h1>

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

                        <div class="also-see-card">

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

                    </div>



                </div>
            </div>
            <hr style="opacity: 1;">

        </div>


        <div class="roll-call-clider">
            <div class=" container">
                <div class="inner-roll-slider">

                    @foreach ($roll_call_categories as $category)
                    <div class="only-slider">
                        <img src="" alt="">
                        <a href="{{ route('roll-call.info',$category->id()) }}">
                            <h3 style="color: black;text-transform: uppercase">{{ $category->data()['type'] }}</h3>
                        </a>
                        </div>
                    @endforeach


                </div>
            </div>




        </div>

    </section>
@section('assets-js')
    <script src="{{ asset('assets/js/roll_calls.js') }}"></script>
@endsection

@endsection
