@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/chapel-construction.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Chapel-Construction')
@section('content')

    <section id="sec-1" class="sec-1 container-fluid bg-red">
        <div class="container p-0">
            <h1>THE CHAPEL &nbsp <span class="arrow-right">&#x25B6;</span> &nbsp <span class="page-name">CONSTRUCTION</span>
            </h1>
        </div>
    </section>

    <section id="sec-2" class="sec-2 container-fluid">
        <div class="sec-2-content">
            <div class="video-frame d-flex justify-content-center align-items-center text-center">
                <span class="video-text text-white">
                    VIDEO CONTAINER <br> MUST FIT THE SCREEN SIZE
                </span>
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
            <h1>THE <br> CONSTRUCTION OF <br> THE CHAPEL</h1>
            <h2 class="topic-red">Inspiration, planning and designing</h2>
            <p class="sec-3-text justify-text">
                Rev Gaster and Rev Fraser were nothing if not pioneers. At a time when most Europeans were content to build
                churches in their own Gothic style, Gaster and Fraser were more inspired by the local Sinhalese
                architecture. Prototypes for this Chapel can be found in the audience halls of at Embekke and Temple of the
                Sacred Tooth Relic. The difference is that the pillars of these buildings are of wood. At Trinity, inspired
                by ancient buildings in Anuradhapura, Fraser and Gaster built for Eternity.
            </p>
            <div class="row d-flex justify-content-center image-padding img-row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/01.png') }}" alt="">
                    <p class="small-text">“From the seed of an inspiration to a monument built for eternity”</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/02.png') }}" alt="">
                    <p class="small-text">Polonnaruwa: The inspiration from circa 1100 AD</p>
                </div>
                <div class="col-md-1"></div>
            </div>

            <h2 class="topic-red">Putting pen to paper: the inspiration germinates into a plan</h2>
            <p class="sec-3-text justify-text">
                Inspired by Sri Lanka’s exquisite architecture of stone buildings, blue prints were arranged to construct a
                Chapel of stone pillars.
            </p>
            <div class="row d-flex justify-content-center image-padding img-row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/03.png') }}" alt="">
                    <p class="small-text">The floor Plan</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/04.png') }}" alt="">
                    <p class="small-text">South Elevation of the Chapel</p>
                </div>
                <div class="col-md-1"></div>
            </div>

            <h2 class="topic-red">The plan develops into general perspectives</h2>
            <p class="sec-3-text justify-text">
                Gaster’s drawings allowed for a flat ceiling, like that to be seen in the chancel, and galleries for Choir
                and organ. Financial and engineering considerations made it difficult for this work to be carried out. Some
                indeed like the soaring Kandyan roof as it is!
            </p>
            <div class="row d-flex justify-content-center image-padding img-row pb-3">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/05.png') }}" alt="">
                    <p class="small-text">Sketch by Rev Gaster</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/06.png') }}" alt="">
                    <p class="small-text">A sketch with a tall bell tower</p>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row d-flex justify-content-center image-padding img-row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/07.png') }}" alt="">
                    <p class="small-text">Detailed renderings of the interior as envisaged by Rev. Gaster</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/08.png') }}" alt="">
                    <p class="small-text">From two dimensions to three: Rev. L. J. Gaster’s Model</p>
                </div>
                <div class="col-md-1"></div>
            </div>

            <h2 class="topic-red">Craftsmanship, transporting and construction</h2>
            <div class="quote craft-quote text-center">
                <h2>
                    <span>“</span>
                    The rock face had to be split with human muscle power aided by steel wedges, sledgehammers, and
                    crowbars, as blasting would have merely shattered the rock into pieces.

                    <span>”</span>
                </h2>
            </div>
            <p class="sec-3-text justify-text">
                The fifty four pillars are made of granite quarried in Aruppola, 4 kilometres (2.5 mi) away. Some, in the
                chancel, are built in sections, but most have been hewn out of single blocks (5.5 metres (18 ft) long and
                0.9 metres (3.0 ft) square), each of which weighing about 3 metric tons (3.0 t) before carving. The blocks
                were then hauled up to the college on a trolley by a pair of elephants. The first pillars to be erected,
                those by the pulpit and the south entrance, were fully carved at the quarry before being transported. The
                remainder were carved at the site of the chapel.
            </p>
            <div class="row d-flex justify-content-between image-padding img-row-3 pb-3">
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/09.png') }}" alt="">
                    <p class="small-text">Detailed renderings of the interior as envisaged by Rev. Gaster</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/10.png') }}" alt="">
                    <p class="small-text">From two dimensions to three: Rev. L. J. Gaster’s Model</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/11.png') }}" alt="">
                    <p class="small-text">From two dimensions to three: Rev. L. J. Gaster’s Model</p>
                </div>
            </div>

            <div class="row d-flex justify-content-between image-padding pb-3">
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <p class="small-text text-center">The monolithic pillar blocks had to be eighteen feet long and three
                        feet square with no cracks or major blemishes. Each weighed about three tons</p>
                </div>
                <div class="col-5">
                    <img src="{{ asset('assets/images/chapel/construction/12.png') }}" width="500px">
                </div>
                <div class="col-5 d-flex justify-content-center align-items-center">
                    <div class="quote red-quote text-center">
                        <h2>
                            <span>“</span>
                            The blocks were hauled by two elephants, one pulling and one pushing, for a distance of three
                            miles to the school premises; and then another three hundred feet up the slope of the hill to
                            the Chapel site

                            <span>”</span>
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-between image-padding pb-3">
                <div class="col-5">
                    <img src="{{ asset('assets/images/chapel/construction/13.png') }}" width="500px">
                </div>
                <div class="col-5">
                    <img src="{{ asset('assets/images/chapel/construction/14.png') }}" width="500px">
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <p class="small-text text-center">Pillars on its way to College</p>
                </div>
            </div>

            <div class="row d-flex justify-content-between image-padding pb-3">
                <div class="col-5">
                    <img src="{{ asset('assets/images/chapel/construction/15.png') }}" width="500px">
                </div>
                <div class="col-5">
                    <img src="{{ asset('assets/images/chapel/construction/16.png') }}" width="500px">
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <p class="small-text text-center">Up the slope to the School on the Hill</p>
                </div>
            </div>

            <div class="row d-flex justify-content-between image-padding pb-3">
                <div class="col-5">
                    <img src="{{ asset('assets/images/chapel/construction/17.png') }}" width="500px">
                </div>
                <div class="col-5">
                    <img src="{{ asset('assets/images/chapel/construction/18.png') }}" width="500px">
                </div>
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <p class="small-text text-center">Granite blocks being pulled and pushed by elephants</p>
                </div>
            </div>

            <div class="row d-flex justify-content-center image-padding img-row pb-3">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/19.png') }}" alt="">
                    <p class="small-text">A stone block being unloaded at the construction site of the Chapel</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/20.png') }}" alt="">
                    <p class="small-text">Hard metal wheels and a tree trunk grab pole for the lead elephant</p>
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row d-flex justify-content-center image-padding img-row">
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/21.png') }}" alt="">
                    <p class="small-text">The granite block tied to a wheel cart</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ asset('assets/images/chapel/construction/22.png') }}" alt="">
                    <p class="small-text">A block being pulled up to a wheel cart</p>
                </div>
                <div class="col-md-1"></div>
            </div>

            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-1"></div>
                <div class="col-10 quote red-quote text-center">
                    <h2>
                        <span>“</span>
                        Actual constructions commenced in 1923 and according to the plans drawn up, the building had to be
                        constructed in granite stone of grey colour from ground level to the top level of the pillars and
                        walls.” Above the pillars that were carved by local and South Indian craftsmen are the pillar heads.
                        The sawn timber had to be turned into shape by skilful carpenters and wood carvers who did the
                        exquisite carvings of the Pekadas, Pekada beams, doors and window frames in the chapel.
                        <span>”</span>
                    </h2>
                </div>
                <div class="col-1"></div>
            </div>

            <div class="row d-flex justify-content-between image-padding img-row-3 pb-3">
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/23.png') }}" alt="">
                    <p class="small-text">The Chapel floor being built</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/24.png') }}" alt="">
                    <p class="small-text">Carvings on granite stone...</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/25.png') }}" alt="">
                    <p class="small-text">...carved by local and South Indian craftsmen</p>
                </div>
            </div>

            <div class="row d-flex justify-content-between image-padding pb-3">
                <div class="col-3">
                    <img src="{{ asset('assets/images/chapel/construction/26.png') }}" alt="" width="300px">
                </div>
                <div class="col-3">
                    <img src="{{ asset('assets/images/chapel/construction/27.png') }}" alt="" width="300px">
                </div>
                <div class="col-3">
                    <img src="{{ asset('assets/images/chapel/construction/28.png') }}" alt="" width="300px">
                </div>
                <div class="col-3">
                    <img src="{{ asset('assets/images/chapel/construction/29.png') }}" alt="" width="300px">
                </div>
                <p class="small-text text-center">Stone Masons at Work</p>
            </div>

            <div class="row d-flex justify-content-between image-padding pb-3">
                <div class="col-3">
                    <img src="{{ asset('assets/images/chapel/construction/30.png') }}" alt="" width="300px">
                </div>
                <div class="col-3">
                    <img src="{{ asset('assets/images/chapel/construction/31.png') }}" alt="" width="300px">
                </div>
                <div class="col-6">
                    <img src="{{ asset('assets/images/chapel/construction/32.png') }}" alt="" height="435.3px">
                </div>
                <p class="small-text text-center">Pillars being pulled up</p>
            </div>

            <div class="row d-flex justify-content-center image-padding pb-3">
                <div class="col-md-3"></div>
                <div class="col-md-3 d-flex justify-content-center">
                    <img src="{{ asset('assets/images/chapel/construction/33.png') }}" alt="" width="300px">
                </div>
                <div class="col-md-3 d-flex justify-content-center">
                    <img src="{{ asset('assets/images/chapel/construction/34.png') }}" alt="" width="300px">
                </div>
                <div class="col-md-3"></div>
                <p class="small-text text-center">Pillars after being erected</p>
            </div>

            <div class="row d-flex justify-content-between image-padding img-row-3 pb-3">
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/35.png') }}" alt="">
                    <p class="small-text">The Chapel before the roof was put</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/36.png') }}" alt="">
                    <p class="small-text">A visit from the Planters Association</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/37.png') }}" alt="">
                    <p class="small-text">From behind the Chapel</p>
                </div>
            </div>

            <div class="row d-flex justify-content-between image-padding img-row-3 pb-3">
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/38.png') }}" alt="">
                    <p class="small-text">Two craftsmen standing next to a wooden carving</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/39.png') }}" alt="">
                    <p class="small-text">The West Entrance</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/40.png') }}" alt="">
                    <p class="small-text">The wood carvings</p>
                </div>
            </div>

            <div class="row d-flex justify-content-between image-padding img-row-3">
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/41.png') }}" alt="">
                    <p class="small-text">The ‘Pekadas’ wood carvings</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/42.png') }}" alt="">
                    <p class="small-text">Inside the Side Chapel</p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <img src="{{ asset('assets/images/chapel/construction/43.png') }}" alt="">
                    <p class="small-text">First pillar to be erected - one near the Side Chapel</p>
                </div>
            </div>

            <h2 class="topic-red">The Chapel today</h2>
            <p class="sec-3-text justify-text">
                The skill and labour involved in raising such a structure with intricate artistic designs, lovingly and
                laboriously carved by hand on solid granite and hardwood, was so difficult that it eventually consumed the
                efforts of hundreds of individuals and spanned the lives of two and a half generations of Trinitians and
                craftsmen.

                <br><br>

                Since that time, no one in Sri Lanka has even dared to attempt such a mammoth task, even with the help of
                modern machinery.
            </p>

            <div class="row d-flex justify-content-center align-items-center pb-4">
                <div class="col-1"></div>
                <div class="col-10 quote text-center">
                    <h2>
                        <span>“</span>
                        But upon a hill in Kandy, amidst a school named Trinity, men of vision did it the Trinity way, and
                        translated their dreams into reality with the help of generations of dedicated craftsmen and
                        artists. They laboured for over fifty years to erect and decorate a hallowed building, lavishing
                        upon it all their resources of art and architecture as in ancient times, reviving skills not
                        practiced on such a scale for a thousand years. Thus did they leave something inspiring for
                        generations of Trinitians yet to be born. It will stand as testimony to their vision, their labour
                        of love, their skill, and their dedication, for a millennium to come.
                        <span>”</span>
                    </h2>
                </div>
                <div class="col-1"></div>
            </div>

            <div class="row">
                <div class="col-4 d-flex justify-content-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>
                <div class="col-4 d-flex justify-content-center align-items-center p-2"><div class=" black-img"></div></div>

                <a class="full-album" href="">VIEW FULL ALBUM</a>
            </div>
        </div>

        <div class="read-more bg-red d-flex justify-content-center align-items-center">
            <h1 class="text-center">READ MORE</h1>
        </div>
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



@section('assets-js')
    <script src="{{ asset('assets/js/chapel-construction.js') }}"></script>
@endsection
@endsection
