@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/support-us.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Support Us')
@section('content')


    <section id="sec-1" class="sec-1 container-fluid">
        <div class="overlay h-100 d-flex align-items-center">
            <div class="sec-1-content container">
                <div class="col-md-4">
                    <h1>Support Us</h1>
                    <h3>
                        Help us preserve the History and Culture of Trinity Collage, Kandy.
                        <br><br>
                        Your Donations will be used to improve and preserve the Collage Archives and its Content.
                    </h3>
                </div>
                <div class="col-md-8">
                </div>
            </div>
        </div>
    </section>

    <section id="sec-2" class="sec-2 container-fluid back-1">
        <div class="sec-2-content container">
            <div class="row">
                <div class="col-7 col d-flex flex-column align-items-center justify-content-center">
                    <div>
                        <h1>The Trinity Story</h1>
                        <p class="justify-text">
                            The Trinity Story 1872-2022 provides the narrative of the abundant life and time of Trinity as
                            envisioned by the founding fathers and then richly nurtured by Teachers and Students and Staff
                            in building the Trinity Home. Of how if was build on the foundations and traditions and handling
                            them down through generations to what still may justifiably be called the Best School of All.
                        </p>
                        <button class="buy-book-btn btn">BUY THE BOOK</button>
                    </div>
                </div>
                <div class="col-5 col d-flex justify-content-center align-items-center">
                    <div class="image-container text-center d-flex justify-content-center align-items-center">
                        <div class="inside-container"> IMAGE <br> CONTAINER</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-3" class="sec-3 container-fluid back-2">
        <div class="sec-3-content container">
            <div class="row">
                <div class="col-7 col border-right">
                    <h1>MAKE DONATION</h1>
                    <div class="input-item">
                        <div class="item-text">
                            <label for="email">FULL NAME</label>
                        </div>
                        <input type="text" name="fullName" id="fullName" class="w-100">
                    </div>
                    <div class="input-item">
                        <div class="item-text">
                            <label for="email">EMAIL ADDRESS</label>
                        </div>
                        <input type="email" name="email" id="email" class="w-100">
                    </div>

                    <div class="input-item">
                        <div class="item-text">
                            <label>CURRENCY</label>
                        </div>
                        <div class="form-check currency-radio">
                            <input class="form-check-input" type="radio" id="lkr" value="option1" name="currency">
                            <input class="form-check-input" type="radio" id="usd" value="option2" name="currency">
                            <input class="form-check-input" type="radio" id="eur" value="option2" name="currency">
                            <input class="form-check-input" type="radio" id="gbp" value="option2" name="currency">
                            <label class="form-check-label" for="lkr">LKR</label>
                            <label class="form-check-label" for="usd">USD</label>
                            <label class="form-check-label" for="eur">EUR</label>
                            <label class="form-check-label" for="gbp">GBP</label>
                        </div>
                    </div>


                    <div class="input-item">
                        <div class="item-text">
                            <label>SELECT AN AMOUNT</label>
                        </div>
                        <div class="form-check form-check-inline amount-radio">
                            <input class="form-check-input" type="radio" id="amount1" value="option1" name="amount">
                            <label class="form-check-label" for="amount1">LKR 1000</label>
                        </div>
                        <div class="form-check form-check-inline amount-radio">
                            <input class="form-check-input" type="radio" id="amount2" value="option2" name="amount">
                            <label class="form-check-label" for="amount2">LKR 3000</label>
                        </div>
                        <div class="form-check form-check-inline amount-radio">
                            <input class="form-check-input" type="radio" id="amount3" value="option2" name="amount">
                            <label class="form-check-label" for="amount3">LKR 5000</label>
                        </div>
                    </div>

                    <div class="input-item">
                        <div class="item-text">
                            <label for="amount">OR TYPE AN AMOUNT</label>
                        </div>
                        <input type="text" name="amount" id="amount" class="w-100">
                    </div>

                    <div class="input-item">
                        <div class="item-text">
                            <label for="">OR <a href="">DONATE FOR A CAUSE</a></label>
                        </div>
                    </div>

                    <div class="input-item">
                        <h5>
                            DISCLAIMER
                        </h5>
                        <p class="justify-text disclaim text-uppercase">Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliqui</p>
                    </div>
                    <div class="form-check form-check-inline input-item">
                        <input class="form-check-input anonymouse" type="checkbox" id="anonymouse" value="option2"
                            name="amount">
                        <label class="form-check-label" for="anonymouse">MAKE MY DONATION ANONYMOUS</label>
                    </div>
                    <br>
                    <button class="buy-book-btn btn pt-2">SUBMIT</button>
                </div>


                <div class="col-5 col">
                    <h1 class="text-center">BENEFACTORS</h1>
                    <div class="text-center benefactor">
                        <p class="font-weight-bold">Firstname Surname</p>
                        <p class="font-weight-bold">Firstname Surname</p>
                        <p class="font-weight-bold">Firstname Surname</p>
                        <p class="font-weight-bold">Firstname Surname</p>
                        <p class="font-weight-bold">Firstname Surname</p>
                        <p class="font-weight-bold">Firstname Surname</p>
                        <p class="font-weight-bold">Firstname Surname</p>
                        <p class="font-weight-bold">Firstname Surname</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="sec-4" class="sec-4 container-fluid back-1">
        <div class="sec-4-content container">
            <h1 class="header-padding">DONATE FOR A CAUSE</h1>

            <div class="slide-container swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p class="bold-text justify-text">A week ago a friend invited a couple of other couples over for dinner.
                            Eventually, the food (but not the wine) was cleared off the table for
                            what turned out to be some fierce Scrabbling. </p>

                        <p class="simple-text justify-text">
                            a Japanese Buddhist festival, and not, as I had originally asserted
                        while laying the tiles on the board, one half of a chocolate-covered
                        cherry treat. Anyway, the strategy worked. My team only lost by 53
                        points instead of 58.<br><br>
                        Just the day before, our host had written of the challenges of writing short.
                        In journalism–my friend’s chosen trade, and mostly my own, too–Mark Twain’s
                        observation undoubtedly applies: “I didn’t have time to write a short letter,
                        so I wrote a long one instead.” The principle holds across genres, in letters,
                        reporting, and other writing. It’s harder to be concise than to blather.
                        </p>
                        <br>
                        <button class="buy-book-btn btn pt-2">DONATE</button>
                    </div>
                    <div class="swiper-slide">
                        <p class="bold-text justify-text">A week ago a friend invited a couple of other couples over for dinner.
                            Eventually, the food (but not the wine) was cleared off the table for
                            what turned out to be some fierce Scrabbling. </p>

                        <p class="simple-text justify-text">
                            a Japanese Buddhist festival, and not, as I had originally asserted
                        while laying the tiles on the board, one half of a chocolate-covered
                        cherry treat. Anyway, the strategy worked. My team only lost by 53
                        points instead of 58.<br><br>
                        Just the day before, our host had written of the challenges of writing short.
                        In journalism–my friend’s chosen trade, and mostly my own, too–Mark Twain’s
                        observation undoubtedly applies: “I didn’t have time to write a short letter,
                        so I wrote a long one instead.” The principle holds across genres, in letters,
                        reporting, and other writing. It’s harder to be concise than to blather.
                        </p>
                        <br>
                        <button class="buy-book-btn btn pt-2">DONATE</button>
                    </div>
                    <div class="swiper-slide">
                        <p class="bold-text justify-text">A week ago a friend invited a couple of other couples over for dinner.
                            Eventually, the food (but not the wine) was cleared off the table for
                            what turned out to be some fierce Scrabbling. </p>

                        <p class="simple-text justify-text">
                            a Japanese Buddhist festival, and not, as I had originally asserted
                        while laying the tiles on the board, one half of a chocolate-covered
                        cherry treat. Anyway, the strategy worked. My team only lost by 53
                        points instead of 58.<br><br>
                        Just the day before, our host had written of the challenges of writing short.
                        In journalism–my friend’s chosen trade, and mostly my own, too–Mark Twain’s
                        observation undoubtedly applies: “I didn’t have time to write a short letter,
                        so I wrote a long one instead.” The principle holds across genres, in letters,
                        reporting, and other writing. It’s harder to be concise than to blather.
                        </p>
                        <br>
                        <button class="buy-book-btn btn pt-2">DONATE</button>
                    </div>
                </div>
                <div class="button-next slide-btn">
                    <i class="fa-solid fa-caret-right slider-icon"></i>
                </div>
                <div class="button-prev slide-btn">
                    <i class="fa-solid fa-caret-left slider-icon"></i>
                </div>
            </div>
        </div>
    </section>
@section('assets-js')
    <script src="{{ asset('assets/js/support-us.js') }}"></script>
@endsection

@endsection
