@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/story.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Story')
@section('content')

    <div class="history-page">
        <div class="container-fluid blue">
            <div class="container">
                <div class="bold-top-border"></div>
                <div class="row">
                    <div class="col-md-9 right-border">
                        <h1>THE TRINITY HISTORY</h1>
                        <h5>The Abundant Life at Trinity</h5>
                        <p class="left-padding-text">
                            The Trinity Story 1872 -2022 provides a narrative of the abundant life and times of Trinity as
                            envisioned by the founding fathers and then richly nurtured by Teachers and Students and Staff
                            in building the Trinity Home. Of how it was built on the foundations and traditions and handing
                            them down through generations to what still may justifiably be called the Best School of All.
                        </p>
                        <p class="left-padding-text">

                            The Trinity Story attempts to illuminate that ‘indefinable something’ –the DNA -- that is called
                            the Trinity Spirit. It recalls the visionary and missionary zeal of the larger than life
                            Principal Rev Fraser and the tone he set for Principals who followed his footsteps ; the Story
                            recaps the path-breaking influence brought to bear on the educational systems of the country ;
                            of the early Chieftains in Kandy who cleared the path for the school’s progress; of the bravery
                            of Trinitians who gave their lives to a greater cause; of how the challenges and upheavals in
                            the nation were faced squarely ; of those who were the key influencers in shaping the lives of
                            students to give their charges a home away from home ; of those who from the portals of Trinity
                            entered larger life and made a lasting mark; of how religion, culture, caste and creed still
                            blends to make an all-inclusive school tradition undergirded by an enlightened Christian
                            tradition; of how sports, the arts, societal interactions and extra-curricular activities
                            fashioned the rounded education that gives Trinitians a distinctive character.
                        </p>
                        <p class="left-padding-text">
                            The Story will be printed on a limited-edition collector’s item basis. It will also made
                            available digitally
                        </p>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-12 no-padding-col text-center">
                                <img src="{{ asset('assets/images/demo.jpg') }}" class="main-book-image" alt="">
                            </div>
                            <div class="col-md-12 no-padding-col d-flex justify-content-center">
                                <p class="small text-center">
                                    The Trinity Story – Edited by Arjuna Ranawana & M.V. Muhsin Published by The Principal
                                    Trinity Collage Kandy
                                </p>
                            </div>
                            <div class="col-md-12 no-padding-col d-flex justify-content-center">
                                <button class="box">
                                    Read The Book
                                </button>
                            </div>
                            <div class="col-md-12 no-padding-col d-flex justify-content-center">
                                <button class="box">
                                    Buy The Book
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid light">
            <div class="container">
                <div class="bold-top-border"></div>
                <div class="row story-content">
                    <div class="col-md-6 right-border padding-left story-item">
                        <h1 class="narrow-text">
                            THE CENTENARY NUMBER
                        </h1>
                        <h5 class="sub-h5">
                            1872 - 1972 History of Trinity College Kandy
                        </h5>
                        <div class="pt-5 image-box">
                            <img src="{{ asset('assets/images/demo.jpg') }}" class="book-image" alt="">
                            <p class="small text-center extra-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                eiusmod tempor incididunt ut </p>
                        </div>
                        <div class="text-box">
                            <p class="justify-text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque cum delectus
                                deserunt
                                eligendi inventore iure laborum minima nam odit omnis possimus quia quisquam rerum sed,
                                similique ut vitae voluptate?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque cum delectus
                                deserunt
                                eligendi inventore iure laborum minima nam odit omnis possimus quia quisquam rerum sed,
                                similique ut vitae voluptate?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur atque cum delectus
                                deserunt
                                eligendi inventore iure laborum minima nam odit omnis possimus quia quisquam rerum sed,
                                similique ut vitae voluptate?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <button class="box">
                            Read The Book
                        </button>
                    </div>
                    <div class="col-md-6 padding-left story-item">
                        <h1 class="narrow-text">
                            THE
                            COMPANION
                            VOLUME
                        </h1>
                        <h5 class="sub-h5">
                            1972-2022 Companion to The Trinity Story
                        </h5>
                        <div class="pt-5 image-box">
                            <img src="https://picsum.photos/id/1002/200/300" class="book-image" alt="">
                            <p class="small text-center extra-small">The Companion Volume, 1972-2022
                                -Edited by Imani Bakmeedeniya & M.V.
                                Muhsin</p>
                        </div>
                        <div class="text-box">
                            <p class="justify-text">
                                The Trinity History Companion Volume covering thelast 50 years ( 1972-2022 provides a
                                chronology
                                to record and rekindle events for the recent generations. It provides a continuum to key
                                statistics and references supplementing the 100 year publication. It sets out the changing
                                face
                                of Trinity, and adaptations in the classrooms, in House Associations, in the religious
                                movements
                                , in the aesthetics and landscape. It details various adaptations to the times ranging from
                                the
                                Chapel, the Farm, the cadet corps; social services, use of information technology and to
                                developments of the Archives and libraries.

                            </p>
                            <p class="justify-text">
                                The Companion Volume will be available in print on a limited-edition basis and also
                                digitally to
                                facilitate updating as years go by.
                            </p>
                        </div>
                        <button class="box">
                            Read The Book
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid cream">
            <div class="container text-center">
                <h1 class="blue">Collections</h1>
                <div class="pt-5 row w-100 m-0">
                    <div class="col-lg-3 col-md-12">
                        <button class="box special">
                            Historical References
                        </button>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <button class="box special">
                            Principals’ Gallery
                        </button>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <button class="box special">
                            Staff Gallery
                        </button>
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <button class="box special">
                            Honour Rolls
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @section('assets-js')
        <script src="{{ asset('assets/js/story.js') }}"></script>
    @endsection
@endsection
