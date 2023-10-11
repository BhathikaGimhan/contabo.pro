@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/principals.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'Principal')
@section('content')
    <div class="container-fluid sub-nav">
        <div class="container d-flex justify-content-between row mx-auto">
            <div class="col-lg-6 col-md-12">
                <h6>COLLECTIONS &#10148 PRINCIPALS</h6>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-end">
                <input type="text" id="search-principal" placeholder="SEARCH FOR A NAME">
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-image: url({{ 'assets/backgrounds/background.png' }})">
        <div class="header-image">
            <img src="{{ asset('assets/backgrounds/principle-gallery-min.png') }}" class="img-fluid" alt="">
            <div class="centered">
                <h1 class="text-center">PRINCIPALS’ GALLERY</h1>
                <p class="text-center">Featuring Trinity’s custodians since 1857</p>
            </div>
        </div>
        <div class="container principal-data-container">
            {{-- principals list --}}
        </div>
    </div>

    <!-- Image View Modal -->
    <div class="modal fade img-view-modal" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl wide-modal" role="document">
            <div class="modal-content image-view-background" id="view-modal-content">
{{--                @include('modals.principle-view')--}}
            </div>
        </div>
    </div>

    @include('modals.share-modal')
    @include('modals.collection-modal')
    @include('modals.info-modal')


@section('assets-js')
    <script src="{{ asset('assets/js/principles.js') }}"></script>
@endsection
@endsection
