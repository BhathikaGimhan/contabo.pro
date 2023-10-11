@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/miscellanea.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Miscellanea')
@section('content')

    <div class="container-fluid yellow header-2nd-nav">
        <div class="container  post-nav d-flex align-items-center">
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </div>
    <div class="container-fluid bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="bg-white post-view-area">
                        @if (!empty($post['featured_image']))
                            <img class="featured-image-post img-fluid"
                                 src="{{ $post['featured_image'] }}"
                                 alt="">
                        @endif

                        <div class="d-flex justify-content-start pt-2 meta-area">
                            <p>Published: {{  date("d M Y", strtotime($post['createdAt'])) }}</p>
                            <p class="pl-5">Category: <a href="">Stories</a>, <a href="">Articles</a></p>
                        </div>
                        <h1>{{ $post['title'] }}</h1>
                        <div class="post-page-body">
                            <p>{!! $post['body'] !!}</p>

                            <span>Read More: <a href="{{ $post['link'] }}">{{ $post['link'] }}</a></span>
                        </div>
                        {{--                        <div class="post-page-footer">--}}
                        {{--                            <p>Article by David Paynter</p>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class=" bg-baige side-bar">
                        <h1>What you can read next</h1>

                        @foreach($post_array as $key => $item)
                            @if($key < 4)
                                <div class="side-bar-post">
                                    @if(!empty($item->data()['featured_image']))
                                        <img class="side-bar-image-post img-fluid"
                                             src="{{ $item->data()['featured_image'] }}"
                                             alt="">
                                    @endif
                                    <h1>{{ $item->data()['title'] }}</h1>
                                    <p>{{ $item->data()['short_description'] }}</p>
                                    <a href="{{ route('miscellanea_view', [$item->id()]) }}">READ MORE</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-red">
        <div class="container blog-footer pt-5">
            <h1>MORE FROM TRINITY HISTORY</h1>
            <div class="row d-flex align-items-center mt-5">
                <div class="col-md-3 text-center"><a href="{{ route('trinity-story') }}" class="more-link">The Trinity
                        Story</a></div>
                <div class="col-md-3 text-center"><a href="{{ route('publications') }}" class="more-link">Historical
                        References</a></div>
                <div class="col-md-3 text-center"><a href="{{ route('honour-boards.index') }}" class="more-link">Honour
                        Boards</a></div>
                <div class="col-md-3 text-center"><a href="{{ route("gallery.index") }}" class="more-link">Digital</a>
                </div>
            </div>
            <div class="row d-flex align-items-center pb-5 mt-5">
                <div class="col-md-3 text-center"><a href="{{ route('principal.index') }}" class="more-link">Principals’
                        Gallery</a></div>
                <div class="col-md-3 text-center"><a href="{{ route('timeline.index') }}"
                                                     class="more-link">Footprints</a></div>
                <div class="col-md-3 text-center"><a href="{{ route('tours') }}" class="more-link">Virtual</a></div>
                <div class="col-md-3 text-center"><a href="{{ route("staff.index") }}" class="more-link">Staff
                        Gallery</a></div>
            </div>
        </div>
    </div>
    @section('assets-js')
        <script src="{{ asset('assets/js/miscellanea.js') }}"></script>
    @endsection
@endsection
