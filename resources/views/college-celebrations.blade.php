@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/college-celebrations.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'College Celebrations')
@section('content')
    <section id="sec-1" class="sec-1 back-2 container-fluid text-center">
        <div class="sec-1-content">
            <img src="{{ asset('assets/images/celebration/LOGO.png') }}">
            <h1 class="sec-1-header">
                THE SESQUICENTENNIAL ANNIVERSARY
            </h1>
            <h2 class="sec-1-subheader">
                Celebrating 150 years
            </h2>
        </div>
    </section>
    <section id="sec-2" class="sec-2 back-1 container-fluid">
        <div class="sec-2-content container">
            <h2 class="sec-2-header text-center">
                “Duc In Altum – Exploring Vistas of Excellence"
            </h2>
            <h3 class="sec-2-subheader text-center">
                Four Pillars of the T150 College Celebrations
            </h3>
            <div class="pillars">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col right-padding">
                        <div class="pillar-content">
                            <h4>Celebrate the Past</h4>
                            <p>We remember the past joyfully, to be inspired by it.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col left-padding">
                        <div class="pillar-content">
                            <h4>Map the Future</h4>
                            <p>We will look for stability of processes by defining our path.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col right-padding">
                        <div class="pillar-content">
                            <h4>Service to Humanity</h4>
                            <p>We will foster a spirit of service to elevate others.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col left-padding">
                        <div class="pillar-content">
                            <h4>Care for our Common Home</h4>
                            <p>We will commit to protect nature and conserve it.</p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text justify-text">
                Trinity College Kandy is a multicultural community of learning, animated from its origins by the Christian
                vision of education and the dynamic values of the national cultures. As a primary and secondary seat of
                learning, Trinity in its totality is dedicated to the pursuit and sharing of excellence, remaining within
                the traditions set forth by her pioneers and a specific and time-tested set of core values. One of the
                distinctive features of Trinity, inter alia is to create and sustain an ethos of diversity and quality of
                purpose. All aspects of life at Trinity strive to provide a holistic and integral education, i.e. a series
                of formative experiences that illumine the human, social, emotional, spiritual, and professional aptitudes
                of the child. The historical trajectories of Trinity over one and a half centuries, at times against
                formidable counter trends, portray an authentic commitment to a model of education that inspires and
                empowers the Trinitian to blossom in to a ‘Christ-like character’ by his authentic and wholesome pursuit of
                wisdom and virtue.
                <br><br>
                A Jubilee, within the Christian ethos as enumerated in the Bible is a moment of renewal. For the Trinity
                Family, such a renewal can only be a reinterpretation of the Respice Finem in the milieu of contemporary
                society. It is a duc in altum [venturing into the depths] in exploring the vistas of human excellence
                [hence, the T150 Tag Line]. Respice Finem is a dynamic phrase, which means to look back, look at, look
                ahead, and look around: a 360-degree vision of the present while preserving the focus on the end. It is a
                caution against the tendency to be impulsive and abrupt that dilutes our potential to flourish. It is also a
                call to enhance our capacity to articulate the ‘big story’ or the ‘greater scheme of life’ against the
                pitfalls of domestic petti narratives. Amidst the cacophony of mediocrity, a culture of superficiality and
                sensationalism, Respice Finem beckons us to retain the divinely inspired value mix as the potent motif of
                our being in a niche within a socio-cultural ethos that is on its merry way to perdition.
                <br><br>
                T150 Sesquicentennial Anniversary Celebration, thus, is an opportune moment for the Trinity Family to recall
                and renew the pioneering vision of those erudite men and women, who ventured into new horizons, exploring
                new vistas of excellence of education in Sri Lanka.
            </p>
        </div>
    </section>
    <section id="sec-3" class="sec-3 back-2 container-fluid">
        <div class="sec-3-content container">
            <h1 class="sec-3-header">
                THE SESQUICENTENNIAL <br>
                ANNIVERSARY EVENTS
            </h1>
            <div class="row">
                <div class="col-lg-6 col-md-12 col">
                        <img src="{{ asset('assets/images/celebration/EventImage01.png') }}">
                    <div class="event">
                        <h3 class="event-head">
                            Sesquicentennial Anniversary Thanksgiving Service
                        </h3>
                        <div class="btn-1 button">
                            <a href="https://trinitycollege.lk/2022/02/10/sesquicentennial-anniversary-thanksgiving-service-reviewed/" class="rounded-0">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col">
                        <img src="{{ asset('assets/images/celebration/EventImage02.png') }}">
                    <div class="event">
                        <h3 class="event-head">
                            Rev AG Fraser Memorial Oration 2022
                        </h3>
                        <div class="btn-2 button">
                            <a href="https://trinitycollege.lk/2022/02/10/t150-fraser-memorial-oration-2022-reviewed/" class="rounded-0">READ MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
