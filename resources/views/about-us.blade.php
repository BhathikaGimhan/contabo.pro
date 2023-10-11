@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/about-us.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'About Us')
@section('content')

    <section id="cover_img" class="cover-img container-fluid">
        <img src="{{ asset('assets/images/about-us/cover.jpg') }}" class="w-100">
    </section>
    <section id="timeless" class="timeless container-fluid">
        <div class="section-content container pb-4">
            <h1 class="sec-content-header pt-5">
                Timeless and Evergreen!
            </h1>
            <p class="sec-content-text pt-2 justify-text">
                The Trinity Story is Timeless and Evergreen. Ensconced ‘where river lake and mountain meet our boyhood home
                surrounding’ is brought to life through a narrative of Spirit, Place and People spanning one hundred and
                fifty vibrant years that made men into gentlemen and good citizens out of boys.
                <br><br>
                The threads of history are woven on the cavass that is The Trinity Story, supported by a more detailed
                Companion Volume; and an exciting interactive Digital Timeline, an expansive Photo Gallery and a fremescent
                Storyboard for alumni to chalk on.

            </p>
        </div>
    </section>
    <section id="sec3" class="sec3 container-fluid">
        <div class="sec3-images row">
            <img class="col-lg-4 col-md-12" src="{{ asset('assets/images/about-us/GalleryImage01.jpg') }}" style="height: 386px; width:502px;">
            <img class="col-lg-4 col-md-12" src="{{ asset('assets/images/about-us/GalleryImage02.jpg') }}" style="height: 386px; width:502px;">
            <img class="col-lg-4 col-md-12" src="{{ asset('assets/images/about-us/GalleryImage03.jpg') }}" style="height: 386px; width:502px;">
        </div>
    </section>
    <section id="story" class="story container-fluid">
        <div class="section-content container pb-5">
            <h1 class="sec-content-header pt-5 pb-2">
                The Story of the Trinity History Project
            </h1>
            <div class="header-line"></div>
            <p class="story-content-text pt-4 justify-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nemo ad, quia dolores temporibus, nesciunt veniam voluptatibus commodi dignissimos laboriosam praesentium, ut architecto eum! Exercitationem quae maxime reiciendis sed ipsum, eaque quod similique voluptatibus cupiditate aliquam delectus tenetur culpa molestias quas fuga quia voluptas odio at! Tenetur praesentium cumque modi porro ipsa, consectetur ut recusandae non quisquam, ab molestias nulla dolore illum alias et iusto earum sunt hic sed natus. Soluta nulla nisi consequuntur repellat eaque quia aut, vero ut incidunt nostrum reiciendis facilis voluptatem dolorum blanditiis.
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi magnam, voluptatem quae amet sit eaque iste suscipit voluptatum similique nam accusamus ipsam nihil ad fuga illo, cum cupiditate quos id ipsa! Accusamus exercitationem dicta sapiente enim placeat ducimus esse repellat tempore dolorum, cumque soluta nihil deserunt expedita voluptatum consectetur quos.
                <br><br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit possimus quibusdam voluptatibus eos atque impedit quia laudantium, deserunt illum libero aperiam rem fugiat labore ex.

            </p>
        </div>
    </section>
    <section class="sec5" id="sec5 container-fluid">
        <img src="{{ asset('assets/images/about-us/sec5img.jpg') }}" class="w-100">
    </section>
    <section id="story-cont" class="story container-fluid">
        <div class="section-content container pb-5">
            <p class="story-content-text pt-5 pb-5 justify-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nemo ad, quia dolores temporibus, nesciunt veniam voluptatibus commodi dignissimos laboriosam praesentium, ut architecto eum! Exercitationem quae maxime reiciendis sed ipsum, eaque quod similique voluptatibus cupiditate aliquam delectus tenetur culpa molestias quas fuga quia voluptas odio at! Tenetur praesentium cumque modi porro ipsa, consectetur ut recusandae non quisquam, ab molestias nulla dolore illum alias et iusto earum sunt hic sed natus. Soluta nulla nisi consequuntur repellat eaque quia aut, vero ut incidunt nostrum reiciendis facilis voluptatem dolorum blanditiis.
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi magnam, voluptatem quae amet sit eaque iste suscipit voluptatum similique nam accusamus ipsam nihil ad fuga illo, cum cupiditate quos id ipsa! Accusamus exercitationem dicta sapiente enim placeat ducimus esse repellat tempore dolorum, cumque soluta nihil deserunt expedita voluptatum consectetur quos.
                <br><br>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit possimus quibusdam voluptatibus eos atque impedit quia laudantium, deserunt illum libero aperiam rem fugiat labore ex.
            </p>
            <div class="read-more text-center pb-5">
                <h2 class="full-story pt-5 mb-1">
                    Read the full story in the Companion Volume
                </h2>
                <button class="btn rounded-0 mt-5 mb-5 read-more-btn">READ MORE</button>
            </div>
        </div>
    </section>
    <section id="sec7" class="sec7 container-fluid">
        <img src="{{ asset('assets/images/about-us/sec7img.jpg') }}" class="w-100">
    </section>
    <section id="research-team" class="research-team container-fluid">
        <div class="research-team-content container pt-5 pb-5">
            <h1 class="team-header text-center pt-3 pb-5">
                The Research Team
            </h1>
            <div class="research-team-body pb-3">
                <div class="row">
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mrs.ThiliniSumanasekera.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mrs.Thilini Sumanasekera
                            </p>
                            <p class="team-role">
                                College Archivist
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/MissImaniBakmeedeniya.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Miss Imani Bakmeedeniya
                            </p>
                            <p class="team-role">
                                Writer
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.BhanukaWarnasooriya.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Bhanuka Warnasooriya
                            </p>
                            <p class="team-role">
                                Student Team Leader
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.SheshanAbeysekara.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Sheshan Abeysekara
                            </p>
                            <p class="team-role">
                                IT Coordinator
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.AbidhJameel.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Abidh Jameel
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.AdithyaDissanayake.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.AdithyaDissanayake
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.AkmalFareekdeen.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Akmal Fareekdeen
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.DilminBandaranayake.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Dilmin Bandaranayake
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.DinilJayasuriya.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Dinil Jayasuriya
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.DulinaHerath.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Dulina Herath
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.GesithEpa.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Gesith Epa
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.JaniduJayasekera.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Janidu Jayasekera
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.JayageethBasnayake.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Jayageeth Basnayake
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.JeffreyArumugam.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Jeffrey Arumugam
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.KesarindraEgodawele.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Kesarindra Egodawele
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <div class="empty-img" style="width: 229px; height: 315px;"></div>
                            <p class="team-name">
                                Mr.Matthew Francis
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.MuhammedZaffrulla.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Muhammed Zaffrulla
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.PavaraRambukwella.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Pavara Rambukwella
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/MrRahulJayasinghe.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Rahul Jayasinghe
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.RumaizRizan.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Rumaiz Rizan
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.ShaahidKhaleel.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Shaahid Khaleel
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.SheranMarasinghe.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Sheran Marasinghe
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.ThusaraGallage.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Thusara Gallage
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.ThushyanthaBandara.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Thushyantha Bandara
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <div class="empty-img" style="width: 229px; height: 315px;"></div>
                            <p class="team-name">
                                Mrs.Uthsara Dissanayake
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <div class="empty-img" style="width: 229px; height: 315px;"></div>
                            <p class="team-name">
                                Mr.Yadesh Mohandas
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.AqibRumaiz.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Aqib Rumaiz
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.HarinduSenanayake.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Harindu Senanayake
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.KevinTennekoon.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Kevin Tennekoon
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.LolonyoRahulan.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Lolonyo Rahulan
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <div class="empty-img" style="width: 229px; height: 315px;"></div>
                            <p class="team-name">
                                Mr.Parinda Ratnayake
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.SachikaBoyagoda.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Sachika Boyagoda
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.SherwainWavita.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Sherwain Wavita
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.ShevindraHerath.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Shevindra Herath
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.ThithiraJayakody.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Thithira Jayakody
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                    <div class="team-item pb-5 col-lg-3 col-md-6 col-sm-12">
                        <div class="content">
                            <img src="{{ asset('assets/images/about-us/research-team-individuals/Mr.YukiRanathilake.jpg') }}" style="width: 229px; height: 315px;">
                            <p class="team-name">
                                Mr.Yuki Ranathilake
                            </p>
                            <p class="team-role">
                                Research Team Member
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec9" id="sec9 container-fluid">
        <img src="{{ asset('assets/images/about-us/sec9img.jpg') }}" class="w-100">
    </section>
    <section id="steering-team" class="steering-team container-fluid">
        <div class="steering-team-content container pt-5 pb-5 px-4">
            <h1 class="team-header text-center pt-2 pb-5">
                The Steering Committee
            </h1>
            <div class="steering-team-body pb-5 px-5">
                <div class="row">
                    <div class="team-item col-lg-4 col-md-12">
                        <div class="content">
                            <div>
                                <p class="team-name">
                                    Mr. M.V. Muhsin
                                </p>
                                <p class="team-role">
                                    Executive Chair & Editor
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team-item col-lg-4 col-md-12">
                        <div class="content">
                            <div>
                                <p class="team-name">
                                    Mr. Himendra Ranaweera
                                </p>
                                <p class="team-role">
                                    Executive Program Coordinator
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team-item col-lg-4 col-md-12">
                        <div class="content">
                            <div>
                                <p class="team-name">
                                    Mr. Ananda Marasinghe
                                </p>
                                <p class="team-role">
                                    Co-Vice Principal
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="team-item col-lg-4 col-md-12">
                        <div class="content">
                            <div>
                                <p class="team-name">
                                    Mr. Jayantha Jayawardena
                                </p>
                                <p class="team-role">
                                    Project Director
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team-item col-lg-4 col-md-12">
                        <div class="content">
                            <div>
                                <p class="team-name">
                                    Dr Nalin Wickramanayake
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="team-item col-lg-4 col-md-12">
                        <div class="content">
                            <div>
                                <p class="team-name">
                                    Dr Romesh Ranawana
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="team-item col-lg-4 col-md-12">
                        <div class="content">
                            <div>
                                <p class="team-name">
                                    Dr Jayantha Dhanapala
                                </p>
                                <p class="team-role">
                                    Counsellor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
