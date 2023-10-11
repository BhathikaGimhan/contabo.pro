@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'Profile')
@section('content')

    <section id="sec-1" class="sec-1 container-fluid">
        <div class="sec-1-content container">
            <p class="sec-1-text">
                Hello, @auth
                    {{ auth()->user()->first_name }} {{ auth()->user()->last_name }}
                @endauth
                <br>
                Welcome to your Trinity History Website User Profile. <br>
                In this page you can edit/customise all your account details and view saved collections.
            </p>
        </div>
    </section>
    <section id="sec-2" class="sec-2 back container-fluid">
        <div class="sec-2-content container">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                        type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">MY PROFILE</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                        type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">MY
                        COLLECTIONS</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                    tabindex="0">
                    <form id="profile-form" method="POST" action="{{ route('change-profile') }}" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12 profile-image-container">
                                <div class="image-container">
                                    <div class="profile-image text-center">
                                        @if ($user->avatar)
                                            <img src="{{ asset('assets/images/profile/' . $user->avatar) }}" alt="">
                                        @else
                                            <div class="d-flex justify-content-center align-items-center text-center text-white"
                                                style="width: 190px; height: 190px; background-color:black; border-radius: 50%;">
                                                <p class="text-white">No <br>
                                                    Image</p>
                                            </div>
                                        @endif

                                    </div>
                                    <button type="button" class="remove-btn image-btn">REMOVE IMAGE</button>
                                    <button type="button" class="change-btn image-btn">CHANGE PROFILE IMAGE</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 d-flex flex-column justify-content-between main-form">
                                <div class="input-item">
                                    <div class="item-text">
                                        <label for="email">Email Address:</label>
                                        @if ($user->google_id === null && $user->microsoft_id === null)
                                            <a href="" id="btn-change-email">Change Email Address</a>
                                        @endif
                                    </div>
                                    <input type="email" name="email" id="email"
                                        class="w-100 @error('email') is-invalid @enderror"
                                        value="{{ old('email', $user->email) }}" readonly>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-item">
                                    <div class="item-text">
                                        <label for="email">Password:</label>
                                        <a id="btn-change-pass">Change Password</a>
                                    </div>
                                    <input type="password" name="password" id="password" value="******"
                                        class="w-100 @error('password') is-invalid @enderror" disabled>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row-border"></div>

                        <div class="row forms">
                            <div class="col-md-6 col-sm-12">
                                <h3 class="col-header">
                                    Personal Details
                                </h3>
                                <div class="input-item item-left">
                                    <div class="item-text">
                                        <label for="title">Title:</label>
                                        <div class="require">*Required</div>
                                    </div>
                                    <select class="form-select w-100" id="title" name="title">
                                        <option value="mr" {{ $user->title === 'mr' ? 'selected' : '' }}>MR</option>
                                        <option value="miss" {{ $user->title === 'miss' ? 'selected' : '' }}>MISS</option>
                                        <option value="mrs" {{ $user->title === 'mrs' ? 'selected' : '' }}>MRS</option>
                                    </select>
                                </div>
                                <div class="input-item item-left">
                                    <div class="item-text">
                                        <label for="fist_name">First Name:</label>
                                        <div class="require">*Required</div>
                                    </div>
                                    <input type="text" name="first_name" id="first_name"
                                        class="w-100 @error('first_name') is-invalid @enderror"
                                        value="{{ old('first_name', $user->first_name) }}">
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-item item-left">
                                    <div class="item-text">
                                        <label for="last_name">Last Name:</label>
                                        <div class="require">*Required</div>
                                    </div>
                                    <input type="text" name="last_name" id="last_name"
                                        class="w-100 @error('last_name') is-invalid @enderror"
                                        value="{{ old('last_name', $user->last_name) }}">
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-item item-left">
                                    <div class="item-text">
                                        <label for="phone">Phone Number:</label>
                                    </div>
                                    <input type="text" name="phone" id="phone"
                                        class="w-100 @error('phone') is-invalid @enderror"
                                        value="{{ old('phone', $user->phone) }}">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-item item-left text">
                                    I am &nbsp;
                                    <div class="form-check form-check-inline pl-0">
                                        <input class="form-check-input" type="radio" id="oldBoy" value="oldBoy"
                                            name="user_type" {{ $user->user_type === 'oldBoy' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineCheckbox1">an Old Boy</label>
                                    </div>
                                    <div class="form-check form-check-inline pl-0">
                                        <input class="form-check-input" type="radio" id="guest" value="guest"
                                            name="user_type" {{ $user->user_type === 'guest' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="inlineCheckbox2">a Guest</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <h3 class="col-header">
                                    Address
                                </h3>
                                <div class="input-item">
                                    <div class="item-text">
                                        <label for="address1">Line 1:</label>
                                    </div>
                                    <input type="text" name="address1" id="address1"
                                        class="w-100 @error('address1') is-invalid @enderror"
                                        value="{{ old('address1', $user->address1) }}">
                                    @error('address1')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-item">
                                    <div class="item-text">
                                        <label for="address2">Line 2:</label>
                                    </div>
                                    <input type="text" name="address2" id="address2" class="w-100"
                                        value="{{ old('address2', $user->address2) }}">
                                </div>
                                <div class="input-item">
                                    <div class="item-text">
                                        <label for="city">City:</label>
                                    </div>
                                    <input type="text" name="city" id="city"
                                        class="w-100 @error('city') is-invalid @enderror"
                                        value="{{ old('city', $user->city) }}">
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-item">
                                    <div class="item-text">
                                        <label for="country">Country:</label>
                                    </div>
                                    <input type="text" name="country" id="country"
                                        class="w-100 @error('country') is-invalid @enderror"
                                        value="{{ old('country', $user->country) }}">
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="input-item">
                                    <div class="item-text">
                                        <label for="postal_code">Postal Code:</label>
                                    </div>
                                    <input type="text" name="postal_code" id="postal_code"
                                        class="w-100 @error('postal_code') is-invalid @enderror"
                                        value="{{ old('postal_code', $user->postal_code) }}">
                                    @error('postal_code')
                                        <span class="invalid-feedback" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row text-center justify-content-center">
                            <button id="updateButton" class="updateButton">UPDATE DETAILS</button>
                            <p class="terms-link">View our <a href="">Terms of Use</a> and <a
                                    href="">Privacy
                                    Policy</a>.</p>
                        </div>

                    </form>

                    <form id="avatar-form" method="POST" action="{{ route('profile.store') }}" role="form"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="avatar" id='avatar' onchange="this.form.submit()" hidden>
                    </form>
                </div>








                <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                    tabindex="1">
                    <div class="row collection-row digital">
                        <div class="row-head d-flex justify-content-between">
                            <h1 class="collection-header">
                                FROM DIGITAL
                            </h1>
                            <div class="d-flex digital-nav align-self-center">
                                <li>ALBUMS</li>
                                <li>SINGLE PHOTO</li>
                                <li>SINGLE VIDEO</li>
                                <li>ALL</li>
                            </div>
                        </div>
                        <div class="slide-container swiper3 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>
                                        <div class="digital-image"></div>
                                        <div class="digital-text">
                                            <p>Album: Lorem ipsum dolor sit amet, consectetur ad </p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="digital-image"></div>
                                        <div class="digital-text">
                                            <p>Album: Lorem ipsum dolor sit amet, consectetur ad </p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="digital-image"></div>
                                        <div class="digital-text">
                                            <p>Album: Lorem ipsum dolor sit amet, consectetur ad </p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="digital-image"></div>
                                        <div class="digital-text">
                                            <p>Album: Lorem ipsum dolor sit amet, consectetur ad </p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-next swiper-navBtn">
                                <i class="fa-solid fa-caret-right slider-icon"></i>
                            </div>
                            <div class="swiper-button-prev swiper-navBtn">
                                <i class="fa-solid fa-caret-left slider-icon"></i>
                            </div>
                        </div>
                        <div class="row-foot">
                            <h3 class="collection-foot text-center">
                                VISIT DIGITAL ON THE WEBSITE
                            </h3>
                        </div>
                    </div>


                    <div class="row collection-row footprint">
                        <div class="row-head d-flex justify-content-between">
                            <h1 class="collection-header">
                                FROM FOOTPRINTS
                            </h1>
                        </div>
                        <div class="slide-container swiper3 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>
                                        <div class="footprint-image">
                                            <div class="footprint-text">
                                                <p>FOOTPRINT:
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                                                <div class="remove">
                                                    REMOVE
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="footprint-image">
                                            <div class="footprint-text">
                                                <p>FOOTPRINT:
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                                                <div class="remove">
                                                    REMOVE
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="footprint-image">
                                            <div class="footprint-text">
                                                <p>FOOTPRINT:
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                                                <div class="remove">
                                                    REMOVE
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="footprint-image">
                                            <div class="footprint-text">
                                                <p>FOOTPRINT:
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed</p>
                                                <div class="remove">
                                                    REMOVE
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-next swiper-navBtn">
                                <i class="fa-solid fa-caret-right slider-icon"></i>
                            </div>
                            <div class="swiper-button-prev swiper-navBtn">
                                <i class="fa-solid fa-caret-left slider-icon"></i>
                            </div>
                        </div>
                        <div class="row-foot">
                            <h3 class="collection-foot text-center">
                                VISIT FOOTPRINTS ON THE WEBSITE
                            </h3>
                        </div>
                    </div>


                    <div class="row collection-row honour">
                        <div class="row-head d-flex justify-content-between">
                            <h1 class="collection-header">
                                FROM HONOUR BOARDS
                            </h1>
                        </div>
                        <div class="slide-container swiper4 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>
                                        <div class="col-md-4 board-item">
                                            <img src="{{ asset('assets/backgrounds/empty-board.jpg') }}"
                                                class="img-fluid frame" alt="">
                                            <div class="centered">
                                                best all-round boy
                                            </div>
                                        </div>
                                        <div class="digital-text">
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="col-md-4 board-item">
                                            <img src="{{ asset('assets/backgrounds/empty-board.jpg') }}"
                                                class="img-fluid frame" alt="">
                                            <div class="centered">
                                                best all-round boy
                                            </div>
                                        </div>
                                        <div class="digital-text">
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="col-md-4 board-item">
                                            <img src="{{ asset('assets/backgrounds/empty-board.jpg') }}"
                                                class="img-fluid frame" alt="">
                                            <div class="centered">
                                                best all-round boy
                                            </div>
                                        </div>
                                        <div class="digital-text">
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="col-md-4 board-item">
                                            <img src="{{ asset('assets/backgrounds/empty-board.jpg') }}"
                                                class="img-fluid frame" alt="">
                                            <div class="centered">
                                                best all-round boy
                                            </div>
                                        </div>
                                        <div class="digital-text">
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="col-md-4 board-item">
                                            <img src="{{ asset('assets/backgrounds/empty-board.jpg') }}"
                                                class="img-fluid frame" alt="">
                                            <div class="centered">
                                                best all-round boy
                                            </div>
                                        </div>
                                        <div class="digital-text">
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-next swiper-navBtn">
                                <i class="fa-solid fa-caret-right slider-icon"></i>
                            </div>
                            <div class="swiper-button-prev swiper-navBtn">
                                <i class="fa-solid fa-caret-left slider-icon"></i>
                            </div>
                        </div>
                        <div class="row-foot">
                            <h3 class="collection-foot text-center">
                                VISIT FOOTPRINTS ON THE WEBSITE
                            </h3>
                        </div>
                    </div>


                    <div class="row collection-row principal">
                        <div class="row-head d-flex justify-content-between">
                            <h1 class="collection-header">
                                FROM PRINCIPALS’ GALLERY
                            </h1>
                        </div>
                        <div class="slide-container swiper4 swiper">
                            <div class="swiper-wrapper">
                                @foreach ($album as $data)
                                    @if (array_key_exists('principle', $data))
                                        @php
                                            $principle = $data['principle'];
                                        @endphp


                                        <div class="swiper-slide">
                                            <div>
                                                <div class="principal-image">
                                                    <img src="{{ $name = $principle->data()['image'] }}">
                                                </div>
                                                <div class="principal-text">
                                                    <p>
                                                        {{ $name = $principle->data()['name'] }}</p>
                                                    <div class="remove" data-id="{{ $principle->id() }}">
                                                        REMOVE
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                    @endif
                                @endforeach
                            </div>

                            <div class="swiper-button-next swiper-navBtn">
                                <i class="fa-solid fa-caret-right slider-icon"></i>
                            </div>
                            <div class="swiper-button-prev swiper-navBtn">
                                <i class="fa-solid fa-caret-left slider-icon"></i>
                            </div>
                        </div>
                        <div class="row-foot">
                            <h3 class="collection-foot text-center">
                                VISIT PRINCPAL’S GALLERY PAGE ON THE WEBSITE
                            </h3>
                        </div>
                    </div>


                    <div class="row collection-row principal">
                        <div class="row-head d-flex justify-content-between">
                            <h1 class="collection-header">
                                FROM STAFF GALLERY
                            </h1>
                        </div>
                        <div class="slide-container swiper4 swiper">
                            <div class="swiper-wrapper">
                                @foreach ($album as $data)
                                    @if (array_key_exists('staff', $data))
                                        @php
                                            $staff = $data['staff'];
                                        @endphp
                                        <div class="swiper-slide">
                                            <div>
                                                <div class="principal-image">
                                                    <img src="{{ $name = $staff->data()['image'] }}">
                                                </div>
                                                <div class="principal-text">
                                                    <p>
                                                        {{ $name = $staff->data()['name'] }}</p>
                                                    <div class="remove" data-id="{{ $staff->id() }}">
                                                        REMOVE
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="swiper-button-next swiper-navBtn">
                                <i class="fa-solid fa-caret-right slider-icon"></i>
                            </div>
                            <div class="swiper-button-prev swiper-navBtn">
                                <i class="fa-solid fa-caret-left slider-icon"></i>
                            </div>
                        </div>
                        <div class="row-foot">
                            <h3 class="collection-foot text-center">
                                VISIT STAFF GALLERY PAGE ON THE WEBSITE
                            </h3>
                        </div>
                    </div>

                    <div class="row collection-row principal">
                        <div class="row-head d-flex justify-content-between">
                            <h1 class="collection-header">
                                FROM HISTORICAL REFERENCES
                            </h1>
                        </div>
                        <div class="slide-container swiper3 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>
                                        <div class="principal-image">
                                            <img src="{{ asset('assets/images/book.jpg') }}">
                                        </div>
                                        <div class="principal-text">
                                            <p>A History of TCK by Valesca Reimann</p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="principal-image">
                                            <img src="{{ asset('assets/images/book.jpg') }}">
                                        </div>
                                        <div class="principal-text">
                                            <p>A History of TCK by Valesca Reimann</p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="principal-image">
                                            <img src="{{ asset('assets/images/book.jpg') }}">
                                        </div>
                                        <div class="principal-text">
                                            <p>A History of TCK by Valesca Reimann</p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="principal-image">
                                            <img src="{{ asset('assets/images/book.jpg') }}">
                                        </div>
                                        <div class="principal-text">
                                            <p>A History of TCK by Valesca Reimann</p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-next swiper-navBtn">
                                <i class="fa-solid fa-caret-right slider-icon"></i>
                            </div>
                            <div class="swiper-button-prev swiper-navBtn">
                                <i class="fa-solid fa-caret-left slider-icon"></i>
                            </div>
                        </div>
                        <div class="row-foot">
                            <h3 class="collection-foot text-center">
                                VISIT HISTORICAL REFERENCES PAGE ON THE WEBSITE
                            </h3>
                        </div>
                    </div>

                    <div class="row collection-row virtual">
                        <div class="row-head d-flex justify-content-between">
                            <h1 class="collection-header">
                                FROM VIRTUAL
                            </h1>
                        </div>
                        <div class="slide-container swiper1 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="virtual-image col d-flex justify-content-end">
                                            <img src="{{ asset('assets/images/virtual.jpg') }}">
                                        </div>
                                        <div class="virtual-text col d-flex flex-column justify-content-between">
                                            <p>The Chapel of <br> Trinity College <br> Kandy</p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="virtual-image col d-flex justify-content-end">
                                            <img src="{{ asset('assets/images/virtual.jpg') }}">
                                        </div>
                                        <div class="virtual-text col d-flex flex-column justify-content-between">
                                            <p>The Chapel of <br> Trinity College <br> Kandy</p>
                                            <div class="remove">
                                                REMOVE
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-next swiper-navBtn">
                                <i class="fa-solid fa-caret-right slider-icon"></i>
                            </div>
                            <div class="swiper-button-prev swiper-navBtn">
                                <i class="fa-solid fa-caret-left slider-icon"></i>
                            </div>
                        </div>
                        <div class="row-foot">
                            <h3 class="collection-foot text-center">
                                VISIT VIRTUAL PAGE ON THE WEBSITE
                            </h3>
                        </div>
                    </div>


                    <div class="row collection-row footprint">
                        <div class="row-head d-flex justify-content-between">
                            <h1 class="collection-header">
                                FROM MISCELLANIA
                            </h1>
                        </div>
                        <div class="slide-container swiper3 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div>
                                        <div class="footprint-image">
                                            <div class="footprint-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore</p>
                                                <div class="remove">
                                                    REMOVE
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="footprint-image">
                                            <div class="footprint-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore</p>
                                                <div class="remove">
                                                    REMOVE
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="footprint-image">
                                            <div class="footprint-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore</p>
                                                <div class="remove">
                                                    REMOVE
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div>
                                        <div class="footprint-image">
                                            <div class="footprint-text">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore</p>
                                                <div class="remove">
                                                    REMOVE
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-button-next swiper-navBtn">
                                <i class="fa-solid fa-caret-right slider-icon"></i>
                            </div>
                            <div class="swiper-button-prev swiper-navBtn">
                                <i class="fa-solid fa-caret-left slider-icon"></i>
                            </div>
                        </div>
                        <div class="row-foot">
                            <h3 class="collection-foot text-center">
                                VISIT MISCELLANIA ON THE WEBSITE
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@section('assets-js')
    <script src="{{ asset('assets/js/profile.js') }}"></script>
@endsection
@endsection
