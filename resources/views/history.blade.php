@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/history.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'History')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 pt-4">
                <h1 class="font-bold text-center">Trinity History</h1>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-12">
                <p class=" text-center">Browse our official publications and recommended reading materials including honour
                    rolls,
                    Principals Gallery and the Chapel.</p>
            </div>
        </div>
        <hr class="hr-bold p-0">
        <div class="row">
            <div class="col-md-6  text-center ">
                <div class="card text-center  p-5 m-5 bgcolor-text-blocks rounded-0 ">

                    <h2 class="font-bold text-dark">The Trinity Story</h2>
                    <p>The Story of Trinity, Honour
                        Boards, The Chapel, Principals
                        Gallery</p>
                    <a href="{{ route('trinity-story-main') }}" class="a-link">
                        <p class="text-dark">Read More..</p>
                    </a>

                </div>
            </div>
            <div class="col-md-6  text-center ">
                <div class="card text-center  p-5 m-5 bgcolor-text-blocks rounded-0 ">

                    <h2 class="font-bold text-dark">Historical Library</h2>
                    <p>Official Publications and
                        Recommended Reading</p>
                    <a href="{{ route('publications') }}" class="a-link">
                        <p class="text-dark">Read More..</p>
                    </a>

                </div>


            </div>
        </div>

    </div>



@endsection
