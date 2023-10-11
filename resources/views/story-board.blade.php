@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/story-board.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Story Board')
@section('content')

    <section id="archive" class="">

        <p class="mini-title text-center">STORY BOARD</p>

        <div class="main-archive container">

            <div class="title_des ">
                <h1>THE STORY BOARD</h1>


                <p>
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
                    ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                </p>
            </div>

        </div>


        <hr style="opacity: 1;">
        <div class="inner-roll-call container mt-5 ">
            <div class="row ">
                <!-- left banner -->
                <div class="col-md-3 left">
                    @foreach ($random_order as $random)
                    <div class="story-left mb-5">
                        <div class="inner-left-img">
                            @if (!empty($random->data()['featured_image']))
                            <a href="{{ route('story-board.info',$random->id()) }}">
                                   <img style="height: 345px;width:288px;object-fit: cover" src="{{ $random->data()['featured_image'] }}" alt="">
                            </a>
                            @endif

                        </div>
                        <div class="story-img-des">
                            <h2>{{ $random->data()['title'] }}</h2>
                            <p>{!! $random->data()['body'] !!}</p>
                        </div>

                        <div class="des-link">
                            <a href=""></a>
                            <a href="{{ route('story-board.info',$random->id()) }}"><i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach




                    <hr style="opacity: 1;">

                </div>
                <!-- middle banner -->
                <div class="col-md-6 for-border">
                    @foreach ($story_boards as $story_board)
                        <div class="middle-story-banner">
                            @if (!empty($story_board->data()['featured_image']))
                            <a href="{{ route('story-board.info',$story_board->id()) }}">
                                   <img style="height: 400px;width:598px;object-fit: cover" src="{{ $story_board->data()['featured_image'] }}" alt="">
                            </a>
                            @endif
                            {{-- <h1>{{ $story_board->data()['title'] }}</h1> --}}
                        </div>

                        <div class="img-des-on-story">
                            <h1>{{ $story_board->data()['title'] }}</h1>
                            <p>{!! $story_board->data()['body'] !!}
                            </p>
                            <a href="{{ $story_board->data()['link'] }}">{{ $story_board->data()['link'] }}</a>
                        </div>
                        <div class="link-for-details mb-3">
                            <a href="{{ route('story-board.info',$story_board->id()) }}"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <hr style="opacity: 1;">
                    @endforeach


                    {{ $story_boards->appends(request()->all())->links() }}
                </div>

                <!-- right side  -->
                <div class="col-md-3">

                    <div class="right-also-see">
                        <h1>THE TRINITY STORY</h1>

                        <div class="also-see-card mb-5">


                            <div class="also-see-img">
                                <img src="" alt="">

                            </div>
                            <div class="also-see-lower-des">
                                <a href="">Lorem ipsum dolor sit.</a>
                                <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet
                                    dolore</p>
                            </div>
                            <hr style="opacity: 1;">

                        </div>



                    </div>


                    <div class="right-also-see">
                        <h1>RECOMMENDED READING</h1>

                        <div class="also-see-card mb-5">


                            <div class="also-see-img">
                                <img src="" alt="">
                            </div>
                            <div class="also-see-lower-des">
                                <a href="">Lorem ipsum dolor sit.</a>
                                <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet
                                    dolore</p>
                            </div>
                            <hr style="opacity: 1;">

                        </div>


                        <div class="right-also-see">
                            <h1>MILESTONES</h1>

                            <div class="also-see-card mb-5">


                                <div class="also-see-img">
                                    <img src="" alt="">
                                </div>
                                <div class="also-see-lower-des">
                                    <a href="">Lorem ipsum dolor sit.</a>
                                    <p>orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut laoreet
                                        dolore</p>
                                </div>
                                <hr style="opacity: 1;">

                            </div>



                        </div>


                        <div class="right-also-see">
                            <h1>FROM THE GALLERY</h1>

                            <div class="also-see-card mb-5">

                                <div class="for-displaying">

                                    <div class="inner-from-gallery">
                                        <img src="" alt="">
                                    </div>

                                    <div class="inner-from-gallery">
                                        <img src="" alt="">
                                    </div>

                                    <div class="inner-from-gallery">
                                        <img src="" alt="">
                                    </div>

                                    <div class="for-displaying">

                                        <div class="inner-from-gallery">
                                            <img src="" alt="">
                                        </div>

                                        <div class="inner-from-gallery">
                                            <img src="" alt="">
                                        </div>

                                        <div class="inner-from-gallery">
                                            <img src="" alt="">
                                        </div>

                                        <div class="for-displaying">

                                            <div class="inner-from-gallery">
                                                <img src="" alt="">
                                            </div>

                                            <div class="inner-from-gallery">
                                                <img src="" alt="">
                                            </div>

                                            <div class="inner-from-gallery">
                                                <img src="" alt="">
                                            </div>
                                        </div>
                                        <hr style="opacity: 1;">

                                    </div>



                                </div>



                            </div>
                        </div>


                        <hr style="opacity: 1;">



                    </div>
                </div>


    </section>


@section('assets-js')
    <script src="{{ asset('assets/js/story-board.js') }}"></script>
@endsection
@endsection
