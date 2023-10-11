@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/archieve.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Museum')
@section('content')

    <div class="container-fluid bg-color">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center header">The Museum</h1>
                </div>
            </div>
            <div class="border-top-row">

            </div>
            <div class="row">
                <p class="justify-text">Trinity College Archives contains an impressive display of Trinity memorabilia
                    which gives great pleasure to old boys and well wishes of the College. </p>
                <p class="justify-text">
                    <img src="{{ asset('assets/images/museum1.png') }}" style="float: right; margin-left: 20px" class="image1">
                    The idea of an Archive was implemented by the former
                    Librarian Late Mrs. Sriyangani Jayasekera as a proposal to Late. Hon. Lakshaman Kadirgamar in 1993 with
                    the co-operation of the Principal Col. L.M. De Alwis and the Secretary Mr. Franklin Jacob, the plans
                    were drawn and the project was named
                    Library Archives and Museum Project, simply known as LAMP.
                    The generous financial assistance was given by Mrs. Renee De Silva (Wife of late.J.A.De Silva),
                    Sister-in-law of the first Sri Lankan Principal of TCK., Mr. C.E. Simithraaratchy; the TCK Maldivian
                    O.B.A and Mr. N.P.A. Samad. It was ceremonially opened by Hon. Lakshman Kadirgamar on 17th June 1995.
                </p>
            </div>

            <div class="col-md-12 padding-top">
                <p>Since then, with the support of many old boys, it has grown into a place, rich with College history,
                    which has been documented systematically. The school has
                    priceless archival material dating from the late 1800s. </p>
            </div>

            <img src="{{ asset('assets/images/museum2.png') }}" style="width: 100%;"
                    class="img-size">
        </div>
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <button type="btn" class="btn text-white rounded-0 ps-5 pe-5">Arrange a visit to College
                    Archives</button>
            </div>
        </div>
    </div>

    <div class="container-fluid container-color pb-4 pt-4">
        <div class="container">
                <h2 class="h2-digi">Digital Archive</h2>
                <h5 class="mb-3">A picture is a thousand words!</h5>
                <p>THE TRINITY STORY is embellished by a Photo Gallery - of the college Campus and of the surrounding
                    landscape, of places and people - of
                    Principals and Teachers, of Support Staff, of sport teams, of groups and
                    associations , of historical and other notable events.</p>
                <a href="{{ route('gallery.index') }}">
                    <button type="btn" class="btn text-white rounded-0 ps-5 pe-5">BROWSE THE DIGITAL ARCHIVE</button>
                </a>
        </div>
    </div>
@endsection
