@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/gallery.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/res.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Digital Archive')
@section('content')

    <div class="container bg-dark ">
        <div class="row nav-normal">
            <div class="col-md-3">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control p-0 search-bar-margin" placeholder="Type query"
                           aria-label="Search"/>
                </div>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-1 ">
                <button type="button" class="btn text-white">PEOPLE</button>

            </div>
            <div class="col-md-1">
                <button type="button" class="btn text-white">PLACES</button>

            </div>
            <div class="col-md-1">
                <button type="button" class="btn text-white">EVENTS</button>

            </div>
            <div class="col-md-1">
                <button type="button" class="btn text-white">ALL</button>
            </div>
        </div>
        <div class="row nav-mobile">
            <div class="col-12">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control p-0 search-bar-margin" placeholder="Type query"
                           aria-label="Search"/>
                </div>
            </div>
            <div class="col-3 ">
                <button type="button" class="btn text-white">PEOPLE</button>

            </div>
            <div class="col-3">
                <button type="button" class="btn text-white">PLACES</button>

            </div>
            <div class="col-3">
                <button type="button" class="btn text-white">EVENTS</button>

            </div>
            <div class="col-3">
                <button type="button" class="btn text-white">ALL</button>
            </div>
        </div>

    </div>
    <div class="container mt-2 mb-2">
        <div>
            <div class="row ">
                @php
                    $array_length = count($albums);
                    $count = ceil($array_length / 4);

                    if ($count < 1) {
                        $count = 1;
                    }
                @endphp
                @foreach ($albums->chunk($count) as $data)
                    @foreach ($data as $item)
                        @php
                            $gallery_img = \App\Http\Controllers\GalleryController::getImage($item->id());
                        @endphp

                        <div class="col-md-3 pt-3">
                            <a href="{{ route('album.info', $item->id()) }}">
                                <div class='square-box shadow'>
                                    <div class='square-content' style="background-image: url({{ $gallery_img }})">
                                        <div class="fade"></div>
                                        <div class="fade-blue"></div>
                                        <div class="bottom-left">
                                            <span class="album-title">{{ $item->data()['album_name'] }}</span>
                                            <span
                                                class="album-count">{{ \App\Http\Controllers\GalleryController::albumCount($item->id()) }}
                                            Photos</span>
                                            <span class="view-text">
                                            View This Album
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach

                <div class="col-md-12 text-center pt-3 d-flex justify-content-center">
                    {{ $albums->links() }}
                </div>

            </div>
        </div>
    </div>
    @section('assets-js')
        <script src="{{ asset('assets/js/gallery.js') }}"></script>

    @endsection
@endsection
