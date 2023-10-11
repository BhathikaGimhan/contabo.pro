@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/miscellanea.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Miscellanea')
@section('content')

    <div class="container-fluid yellow header-2nd-nav">
        <div class="container">
            <div class="row d-flex">
                <div class="col-lg-4 col-md-12 input-area">
                    <input type="text" class="mis-search-input" placeholder="SEARCH FOR A POST">
                </div>
                <div class="col-lg-8 col-md-12 sub-nav-area d-flex justify-content-end">
                    <div class="d-flex mis-sub-nav">
                        <a href="{{ route('miscellanea_filter', 'Stories') }}"
                            class="{{ request()->is('miscellanea/Stories') ? 'active-sub-menu ' : '' }}">STORIES</a>
                        <a href="{{ route('miscellanea_filter', 'Anecdotes') }}"
                            class="{{ request()->is('miscellanea/Anecdotes') ? 'active-sub-menu ' : '' }}">ANECDOTES</a>
                        <a href="{{ route('miscellanea_filter', 'Articles') }}"
                            class="{{ request()->is('miscellanea/Articles') ? 'active-sub-menu ' : '' }}">ARTICLES</a>
                        <a href="{{ route('miscellanea_filter', 'all') }}"
                            class="{{ request()->is('miscellanea/all') ? 'active-sub-menu ' : '' }}">ALL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-4 header">
                    <h1 class="">Miscellanea</h1>
                    <p class="text-center">A Space dedicated to Stories, Anecdotes and Articles from the Trinity
                        Community</p>
                    <div class="hr-bold">
                    </div>
                </div>
            </div>
            <div class="row pt-5 pb-4 blogs">
                @foreach ($miscellania_news as $key => $miscellania)
                    <div class="col-md-12 post">
                        <div class="d-flex justify-content-start row">
                            @if (!empty($miscellania->data()['featured_image']))
                                <div class="featured-image col-lg-4 col-md-12">
                                    <img src="{{ $miscellania->data()['featured_image'] }}" class="blog-img right-margin" />
                                </div>
                            @endif
                            <div class="blog-data @if (!empty($miscellania->data()['featured_image'])) col-lg-8 col-md-12 @endif">
                                <a href="{{ route('miscellanea_view', [$miscellania->id()]) }}">
                                    <h1>{{ $miscellania->data()['title'] }}</h1>
                                </a>
                                <p class="meta">Published:
                                    {{ date('d M Y', strtotime($miscellania->data()['createdAt'])) }} &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp; Category: <a href="">Stories</a>,
                                    <a href="">Articles</a>
                                </p>
                                @php
                                    $news_data = substr($miscellania->data()['short_description'], 0, 500);
                                @endphp
                                <div class="blog-body">
                                    {{ $news_data }}
                                </div>
                                <a href="{{ route('miscellanea_view', [$miscellania->id()]) }}" class="read-more">READ
                                    MORE</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-12 text-center pt-3 d-flex justify-content-center">
                {{ $miscellania_news->links() }}
            </div>
        </div>
    </div>

@section('assets-js')
    <script src="{{ asset('assets/js/miscellanea.js') }}"></script>
@endsection
@endsection
