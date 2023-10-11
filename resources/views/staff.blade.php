@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/staff.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Staff')
@section('content')
    <div class="container-fluid sub-nav">
        <div class="container d-flex justify-content-between row mx-auto">
            <div class="col-lg-6 col-md-12">
                <h6>COLLECTIONS &#10148 STAFF GALLERY</h6>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-end">
                <input type="text" placeholder="SEARCH FOR A NAME">
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background-image: url({{ 'assets/backgrounds/background.png' }})">
        <div class="header-image">
            <img src="{{ asset('assets/backgrounds/staff-header.png') }}" class="img-fluid" alt="">
            <div class="centered">
                <h1 class="text-center">STAFF GALLERY</h1>
                <p class="text-center">Featuring Trinity’s Staff Members</p>
            </div>
        </div>
        <div class="container staff-data-container">
            {{-- staff list  --}}
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



@endsection
@section('assets-js')
    <script src="{{ asset('assets/js/staff.js') }}"></script>
@endsection
