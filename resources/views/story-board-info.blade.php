@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/story-board.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Story Board Information')
@section('content')
    <section class="lower-part mt-5">

        <div class="row">
            <div class="col-md-3">
                <div class="right-also-see">
                    @if (!empty($story_board_info->data()['image_1']))
                        <div class="also-see-card mb-3">

                            <div class="also-see-img">

                                <img src="{{ $story_board_info->data()['image_1'] }}" alt="">
                            </div>

                            <hr style="opacity: 1;">
                        </div>
                    @endif
                    @if (!empty($story_board_info->data()['image_2']))
                        <div class="also-see-card mb-3">

                            <div class="also-see-img">


                                <img src="{{ $story_board_info->data()['image_2'] }}" alt="">

                                {{-- <h1>RELATED</h1> --}}
                            </div>


                            <hr style="opacity: 1;">
                        </div>
                    @endif
                    @if (!empty($story_board_info->data()['image_3']))
                        <div class="also-see-card mb-3">

                            <div class="also-see-img">

                                <img src="{{ $story_board_info->data()['image_3'] }}" alt="">
                            </div>

                            <hr style="opacity: 1;">
                        </div>
                    @endif
                    @if (!empty($story_board_info->data()['image_4']))
                        <div class="also-see-card mb-3">

                            <div class="also-see-img">

                                <img src="{{ $story_board_info->data()['image_4'] }}" alt="">
                            </div>

                            <hr style="opacity: 1;">
                        </div>
                    @endif
                    @if (!empty($story_board_info->data()['image_5']))
                        <div class="also-see-card mb-3">

                            <div class="also-see-img">

                                <img src="{{ $story_board_info->data()['image_5'] }}" alt="">
                            </div>

                            <hr style="opacity: 1;">
                        </div>
                    @endif


                </div>
            </div>
            <div class="col-md-8 for-border" >
                <div class="lower-story-banner">
                    @if (!empty($story_board_info->data()['featured_image']))
                    <img style="height: 450px;width:935px;object-fit: cover" src="{{ $story_board_info->data()['featured_image'] }}" alt="">
                    @endif
                </div>

                <div class="img-des-on-story">
                    <h1>{{ $story_board_info->data()['title'] }}</h1>
                    <p> <a href="{{ $story_board_info->data()['link'] }}">{{ $story_board_info->data()['link'] }}</a>
                    </p>

                </div>

                <div class="indetails-story">

                    <p>{!! $story_board_info->data()['body'] !!}</p>
                </div>
            </div>
        </div>


    </section>

@section('assets-js')
    <script src="{{ asset('assets/js/story-board.js') }}"></script>
@endsection
@endsection
