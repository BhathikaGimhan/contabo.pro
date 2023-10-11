@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/trinity_story_ch.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Trinity Story')
@section('content')

    <div class="container-fluid  nav-mobile">
        <div class="dark">
            <div class="row">
                <div class="col">
                    <div class="darkheading">THE TRINITY STORY</div>
                    <div class="darkdescription">Written by Arjuna Ranavana</div>
                </div>
                <div class="darkright col text-right text-white mt-4">
                    <a href="{{ route('trinity-story-chapter01')}}" id="frombeginning">
                        START FROM THE BEGINNING
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="story container-fluid">
        <div class="pt-5">
            <a href="{{ route('trinity-story-chapter01')}}">
                <div class="headinglanding col-4"><span class="headingid"> 1. </span>THE TRINITY SPIRIT</div>
            </a>
            <div class="subheadingland container"><span class="subheadingid"> 1.1. </span>The vision
                <div class="sub2">
                    <a href="{{ route('trinity-story-chapter01')}}">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="subheadingland container"><span class="subheadingid"> 1.2. </span>Three Pillers of the Trinity Ethos
                <div class="sub2">
                    <a href="{{ route('trinity-story-chapter01')}}">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <hr>
        </div>

        <div>
            <a href="{{ route('trinity-story-chapter02')}}">
                <div class="headinglanding col-4"><span class="headingid"> 2. </span>THE FIRST HUNDRED YEARS</div>
            </a>
            <div class="subheadingland container"><span class="subheadingid"> 2.1. </span>Missionaries and the Colonial Era
                <div class="sub2">
                    <a href="{{ route('trinity-story-chapter02')}}">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <hr>
        </div>

        <div>
            <a href="{{ route('trinity-story-chapter03')}}">
                <div class="headinglanding col-4"><span class="headingid"> 3. </span>THE LAST FIFTY YEARS</div>
            </a>
            <div class="subheadingland container"><span class="subheadingid"> 3.1. </span>The Last 50 Years - Part 1
                <div class="sub2">
                    <a href="{{ route('trinity-story-chapter03')}}">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="subheadingland container"><span class="subheadingid"> 3.2. </span>The Last 50 Years - Part 2
                <div class="sub2">
                    <a href="{{ route('trinity-story-chapter03')}}">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <hr>
        </div>


        <div>
            <div class="headinglanding col-4"><span class="headingid"> 4. </span>THE PEOPLE WHO MADE TRINITY</div>
            <div class="subheadingland container"><span class="subheadingid"> 4.1. </span>The Influencers
                <div class="sub2">
                    <a href="">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="subheadingland container"><span class="subheadingid"> 4.2. </span>The Masters and Teachers
                <div class="sub2">
                    <a href="">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <hr>
        </div>

        <div>
            <div class="headinglanding col-5"><span class="headingid"> 5. </span>BUILDINGS AND ARCHITECTURE</div>
            <div class="sub2 building_sub2">
                <a href="">START READING
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                        <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                    </svg>
                </a>
            </div>
            <hr>
        </div>

        <div>
            <div class="headinglanding col-4"><span class="headingid"> 6. </span>SPORTS</div>
            <div class="subheadingland container"><span class="subheadingid"> 6.1. </span>Cricket
                <div class="sub2">
                    <a href="">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="subheadingland container"><span class="subheadingid"> 6.2. </span>Rugby
                <div class="sub2">
                    <a href="">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="subheadingland container"><span class="subheadingid"> 6.3. </span>Atheletics and other sports
                <div class="sub2">
                    <a href="">START READING
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <hr>
        </div>

    </div>

    <div class="bottom container-fluid nav-mobile">
        <div class="container row">
            <div class="col text-white">THE TRINITY STORY BY ARJUNA RANAVANA</div>
            <div class="col text-right">
                <a href="#top">
                    GO TO TOP
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                        <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>





@section('assets-js')
 <script src="{{ asset('assets/js/trinity_story_ch.js') }}"></script>
@endsection

@endsection
