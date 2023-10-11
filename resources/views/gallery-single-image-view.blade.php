@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/single_image.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'Gallery')
@section('content')
    <div class="container">
        <div class="row background pt-2 pb-2">
            <div class="d-flex justify-content-between pt-2">
                <a href="{{ route('gallery.index') }}" class="go-back close-modal">GO BACK</a>
                <span class="fullscreen">VIEW IN FULLSCREEN <i class="fa fa-maximize"></i></span>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center pt-5 pb-3">
                        <img src="{{ $gallery->data()['input'] }}" class="img-fluid single-image rounded "
                            alt="Thp image">
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex flex-column">
                            @if (!empty($gallery->data()['year']))
                                <div>
                                    <h4 class="text-light">{{ $gallery->data()['year'] }}</h4>
                                </div>
                            @endif
                            @if (!empty($gallery->data()['title']))
                                <div>
                                    <h2 class="text-light">{{ $gallery->data()['title'] }}</h2>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        @if (!empty($gallery->data()['description']))
                            <p class="text-light">{!! $gallery->data()['description'] !!}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>

@section('assets-js')
    <script src="{{ asset('assets/js/album_view.js') }}"></script>
@endsection
@endsection
