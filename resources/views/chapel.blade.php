@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/chapel.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Chapel')
@section('content')

    <section id="sec-1" class="sec-1 container-fluid text-center bg-red">
        <h1>THE CHAPEL OF TRINITY COLLEGE KANDY</h1>
    </section>

    <section id="sec-2" class="sec-2 container-fluid">
        <div class="sec-2-content">
            <div class="video-frame d-flex justify-content-center align-items-center text-center">
                <div
                    id="youtube-player"
                    data-video="v7nizsHwF94"
                    data-startseconds="00"
                    data-endseconds="120"
                    data-height="600"
                    data-width="1920">
                </div>
            </div>

            <a class="pause">
                <div class="icon-wrapper"><i class="fa fa-pause custom-icon"><span class="fix-editor">&nbsp;</span></i>
                </div><span class="text-pause">PAUSE THE VIDEO</span>
            </a>
            <a class="play-youtube">
                <span class="text-youtube">VIEW ON YOUTUBE</span>
                <div class="icon-wrapper"><i class="fa-brands fa-youtube custom-icon"><span
                            class="fix-editor">&nbsp;</span></i></div>
            </a>
        </div>
    </section>

    <section id="sec-3" class="sec-3 container-fluid bg-1">
        <div class="sec-3-content container">
            <div class="row">
                <div class="col p-0">
                    <h1 class="text-uppercase">take a virtual tour in the chapel</h1>

                    <a class="direct-link" href=""><span>ENTER THE TOUR</span> &#x25B6;</a>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-3 d-flex align-items-center justify-content-center text-center p-0">
                    <p>Enjoy a 3D virtual tour of the Chapel - and embrace its glorious spiritual and architectural view!
                    </p>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/images/chapel/01.png') }}" class="w-100">
    </section>

    <section id="sec-4" class="sec-4 container-fluid bg-1">
        <div class="sec-4-content container">
            <div class="row d-flex flex-column justify-content-center align-items-center text-center">
                <div class="h-line"></div>
                <div class="quote">
                    <h2>
                        <span>&#8220;</span>
                        With solemn word and sign will we dedicate this house of prayer, in token that hereafter no man
                        should enter therein except he be on worship bent, intent to seek God's presence, to meditate upon
                        His Holy Word, or partake of His Holy Sacrament

                        <span>&#8221;</span>
                    </h2>
                    <p>From the booket of Dedication Service of the Trinity College Chapel. 1935</p>
                </div>
                <div class="h-line"></div>
            </div>

            <div class="text-content">
                <h4>The Chapel of Trinity College, Kandy, Sri Lanka</h4>

                <p class="justify-text">
                    Built in the lines of Sri Lankan and Kandyan architecture and dedicated to the service of God in 1935,
                    the Trinity College Chapel stands in a serene environment in the School. The Chapel is known to be one
                    of the greatest architectural undertakings in contemporary Sri Lanka. Often referred to as a ‘Chapel
                    without walls’, the Trinity Chapel is built upon elite composition of granite pillars, a high held roof
                    along with magnificent wooden and rock carvings. <br><br>

                    The Chapel is best known for its mural paintings done by David Paynter (an Old Boy himself). There are
                    three distinctive murals behind the main altar, pulpit and lectern (depicting biblical stories in a Sri
                    Lankan setting) to indicate the building's Christian ethic. The Chapel also consists of a ‘Side Chapel’
                    towards the North entrance. The Side Chapel is mostly used for services with less congregation and
                    currently there are services held on Wednesday mornings for the hostelers at Trinity. The Side Chapel is
                    always open for private prayer. <br><br>

                    Located at the Southern entrance to the Chapel is a small ‘vestry’ currently being used to keep
                    vestments and other liturgical objects and is also occasionally used as an office for the Chaplain.
                    <br><br>

                    The Chapel forms the central part of life at Trinity. Except on school holidays it is regularly used for
                    Christian worship with short services on Tuesdays and Thursdays and regular Sunday Services. There are
                    special services to mark the main events in the Christian calendar. <br><br>

                    Trinity College Kandy has always catered towards producing boys with ‘Christ-like’ characters towards
                    the society - who are able to serve each other with good spirit, love and compassion, who will
                    annihilate ‘sins’ and show redemption to ‘sinners’, who will choose prevention before punishment and who
                    will first learn to respect authority and later use it with good sense and restraint. The Trinity
                    College Chapel is something inspiring for generations of Trinitians yet to be born. It will stand as
                    testimony to their vision, their labour of love, their skill, and their dedication, for a millennium to
                    come.
                </p>
            </div>
        </div>
    </section>

    <section id="sec-5" class="sec sec-5 container-fluid">
        <div class="sec-content container">
            <div class="row">
                <div class="col-md-7 p-0">
                    <h1 class="text-uppercase">THE CONSTRUCTION</h1>
                    <p>When, in the early part of the 20th century the then Principal Rev. A.G. Fraser wanted to have a
                        Chapel for the School, a site which the boys at that time used as a cricket field was selected as
                        the most appropriate. It turned out to be the most beautiful building site in the College.
                    </p>
                    <a class="direct-link" href="{{ route('chapel-construction') }}"><span>READ MORE</span> &#x25B6;</a>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
        <img src="{{ asset('assets/images/chapel/02.png') }}" class="w-100">
    </section>


    <section id="sec-6" class="sec sec-6 container-fluid">
        <div class="sec-content container">
            <div class="row">
                <div class="col-md-7 p-0">
                    <h1 class="text-uppercase">THE ARCHITECTURE</h1>
                    <p>At the time when most Europeans were content to build churches in their own Gothic style, Gaster
                        deliberately sought inspiration from the local Sinhalese architecture.
                    </p>
                    <a class="direct-link" href=""><span>READ MORE</span> &#x25B6;</a>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
        <img src="{{ asset('assets/images/chapel/03.png') }}" class="w-100">
    </section>


    <section id="sec-7" class="sec sec-7 container-fluid">
        <div class="sec-content container">
            <div class="row">
                <div class="col-md-7 p-0">
                    <h1 class="text-uppercase">THE MURALS</h1>
                    <p>The four murals were the work of the Sri Lankan artist David Paynter, once a member of the staff.
                        Like the chapel itself, they were revolutionary when conceived, in that they portrayed biblical
                        stories a Sri Lankan setting.
                    </p>
                    <a class="direct-link" href=""><span>READ MORE</span> &#x25B6;</a>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
        <img src="{{ asset('assets/images/chapel/04.png') }}" class="w-100">
    </section>


    <section id="sec-8" class="sec sec-8 container-fluid">
        <div class="sec-content container">
            <div class="row">
                <div class="col-md-7 p-0">
                    <h1 class="text-uppercase">THE bell tower</h1>
                    <p>Construction of the Bell Tower commenced in 1965, with the donation of ten slabs by Barney Raymond,
                        an Old Boy. During the years the tower continued its slow growth and it continually added to the
                        beauty of the Chapel, it was the last construction to be completed.
                    </p>
                    <a class="direct-link" href=""><span>READ MORE</span> &#x25B6;</a>
                </div>
                <div class="col-md-5"></div>
            </div>
        </div>
        <img src="{{ asset('assets/images/chapel/05.png') }}" class="w-100">
    </section>

    <section id="sec-9" class="sec-9 container-fluid bg-red  d-flex align-items-center">
        <div class="container d-flex justify-content-end p-0">
            <div class="go-top">BACK TO TOP &nbsp &#9650;</div>
        </div>
    </section>

    <script src="https://www.youtube.com/iframe_api"></script>

@section('assets-js')
    <script src="{{ asset('assets/js/chapel.js') }}"></script>
@endsection
@endsection
