@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/infrastructure.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'T150 Infrastructure Initiative Page')
@section('content')
    <section id="sec-1" class="sec-1 container-fluid">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                    aria-label="Slide 5"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/images/infrastructure/slider/Header01.jpg') }}"
                        style="width: 100%; max-height: 660px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/infrastructure/slider/Header02.jpg') }}"
                        style="width: 100%; max-height: 660px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/infrastructure/slider/Header03.jpg') }}"
                        style="width: 100%; max-height: 660px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/infrastructure/slider/Header04.jpg') }}"
                        style="width: 100%; max-height: 660px;">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/images/infrastructure/slider/Header05.jpg') }}"
                        style="width: 100%; max-height: 660px;">
                </div>
            </div>
        </div>
    </section>
    <section id="sec-2" class="sec-2 back-2 container-fluid">
        <div class="sec-2-content container">
            <h1 class="sec-2-header">
                T150 Infrastructure Initiative
            </h1>
            <p class="head-text text justify-text">
                An extensive rolling programme of decoration, maintenance, restoration, and new building and infrastructure
                projects which will ensure that the school remains a leading Institution
            </p>
            <div class="line"></div>
            <p class="text justify-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa accusantium cum corporis nihil tempore
                doloremque consequuntur, harum officia libero quasi fuga animi itaque dolores error! Esse unde labore
                placeat mollitia. Natus, architecto. Ab reiciendis repellendus optio accusantium nemo, esse, non explicabo
                quae odit illum neque, quaerat debitis blanditiis atque? Porro qui magni provident, reiciendis quas repellat
                corporis dolores cumque adipisci culpa accusamus voluptatum. Cupiditate earum harum molestiae aliquid enim,
                nostrum facilis dolor nam suscipit soluta iste reprehenderit nesciunt officia ratione ab illo possimus magni
                non inventore obcaecati qui? Consequuntur animi facere ratione ullam optio ab, quia fuga, ducimus nihil,
                accusamus vel. Nam, culpa adipisci! Provident ut repudiandae repellendus eaque harum itaque neque ullam
                possimus error accusamus aut veritatis illum vitae quos ex doloremque quam impedit, maiores dolores illo id
                ad numquam enim eum. At, fugiat sapiente unde atque architecto recusandae soluta saepe? Autem at consectetur
                labore accusantium nobis obcaecati sequi repellat itaque necessitatibus! Quo ut, doloremque officia
                laudantium ex, alias est earum accusantium cupiditate vero, quas maxime eligendi minima quisquam enim
                necessitatibus non magnam expedita. Quos fugit, error porro earum quia nam sequi laborum sapiente. Natus
                quod illo dolore, omnis perferendis quo porro facilis odio laudantium architecto veniam vero accusamus.
                <br><br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti cupiditate vitae, iste alias excepturi
                nostrum deserunt totam ad accusantium cum est asperiores. Officia asperiores sequi tempore quaerat autem
                quia corrupti odio itaque ipsum accusamus quidem facere iusto dolores rerum, veniam temporibus magni
                voluptate illum error nobis consequuntur? Asperiores voluptates vitae ipsam culpa ex itaque possimus aperiam
                nihil. Porro dignissimos officiis vitae corporis magni? Veniam soluta vitae est harum quod perspiciatis
                porro repudiandae architecto magni! Corrupti cumque neque illo odio iusto quos sed harum, quibusdam
                similique iure nisi quaerat temporibus quia. Vero odio ex debitis aliquam id deleniti laudantium error sed
                facere est dignissimos unde minus libero a voluptatibus, architecto velit, ab mollitia quod enim eligendi at
                saepe doloribus. Id est, dolorem quasi eius incidunt adipisci culpa fugit dolore, dolores ea maxime
                dignissimos quo blanditiis laudantium cum sint nulla numquam beatae. Ea tenetur adipisci, sapiente libero
                delectus rerum ducimus esse sint.
            </p>
        </div>
    </section>
    <section id="sec-3" class="sec-3 back-1 container-fluid">
        <div class="sec-3-content container">
            <h1 class="sec-3-header">
                Completed Infrastructure Projects
            </h1>
            <div class="sec-3-items">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="item-border">
                            <h3 class="item-header">ALISON HOUSE RENOVATION</h3>
                            <img src="{{ asset('assets/images/infrastructure/AlisonHouse/Alison01.jpg') }}">
                            <button id="alisonBtn" data-bs-toggle="modal" data-bs-target="#alisonModal">READ MORE</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="item-border">
                            <h3 class="item-header">ABEYRATNE - JEYARAJ BLOCK</h3>
                            <img src="{{ asset('assets/images/infrastructure/Abeyratne-JeyarajBlock/AJ01.jpg') }}">
                            <button id="aberatneBtn" data-bs-toggle="modal" data-bs-target="#aberatneModal">READ
                                MORE</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="item-border">
                            <h3 class="item-header">Restoration of the Quadrangle and Napier House</h3>
                            <img src="{{ asset('assets/images/infrastructure/Quadrangle/Quad01.jpg') }}">
                            <button id="quadrangleBtn" data-bs-toggle="modal" data-bs-target="#quadrangleModal">READ
                                MORE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="alisonModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content modal-container back-2">
                <div class="close" data-bs-dismiss="modal"><span class="fa-stack fa-2x">
                        <i class="far fa-circle fa-stack-2x"></i>
                        <i class="fa fa-close fa-stack-1x"></i>
                    </span></div>
                <h1 class="modal-header">
                    ALISON HOUSE RENOVATION
                </h1>
                <div class="row grid w-100">
                    <img class="img-size" src="{{ asset('assets/images/infrastructure/AlisonHouse/Alison01.jpg') }}">
                    <img class="img-size" src="{{ asset('assets/images/infrastructure/AlisonHouse/Alison02.jpg') }}">
                    <img class="img-size" src="{{ asset('assets/images/infrastructure/AlisonHouse/Alison03.jpg') }}">
                </div>
                <p class="text justify-text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero dolorem alias, fuga dignissimos
                    pariatur repellendus quasi. Soluta cum veritatis nulla est deleniti, fugit perferendis eligendi
                    molestiae voluptates enim facilis ab maxime quibusdam possimus corrupti impedit vel iusto fuga doloribus
                    modi atque at harum? Autem, asperiores velit fuga dignissimos esse voluptate quia quisquam quae tempore
                    veritatis dolores sed deleniti beatae perferendis assumenda! Repellendus cum id optio quod praesentium
                    nemo maiores explicabo inventore porro vero voluptate provident culpa, adipisci eum ab architecto a
                    soluta ipsam ducimus placeat! Molestiae praesentium consectetur quam! Voluptatibus, perferendis
                    praesentium, quis soluta ipsum voluptas error enim fugit vitae delectus amet neque nobis tempora aliquid
                    minima laboriosam molestiae. Tempore, natus. Impedit nemo officia recusandae mollitia, tempore quisquam
                    velit quam, debitis libero perspiciatis consectetur sit, ad minus! Aspernatur autem tempora quibusdam
                    ducimus eos vel ipsa saepe, suscipit culpa voluptates aliquid necessitatibus rem perspiciatis nobis,
                    recusandae amet eaque ex reprehenderit corrupti numquam tenetur dolore provident ullam. Molestias
                    voluptas fuga suscipit dolores iusto repudiandae dolorem numquam eligendi, a tempora pariatur error,
                    odio perferendis nisi itaque accusamus? Repellendus vero commodi, numquam in dolorem non maxime eaque
                    blanditiis voluptatibus aliquid omnis distinctio delectus dignissimos nobis deleniti ut exercitationem
                    nihil illum neque. Molestias rem velit quia nisi tempora porro ipsum harum quidem suscipit iste quas, ea
                    ab sapiente natus illo delectus corporis architecto assumenda dolorem mollitia explicabo dolorum alias?
                    Eligendi, voluptas labore praesentium et omnis eos debitis aspernatur reprehenderit sint voluptatem
                    veniam unde assumenda, quam minima. Reprehenderit error alias sit nostrum et numquam ea laboriosam!
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque veritatis sed reiciendis voluptate dolor
                    maxime ullam aliquam architecto fugit alias aspernatur minus quia in obcaecati culpa, fuga, accusantium
                    repudiandae eveniet itaque vel, tempore velit minima qui est? Eos, aliquam sint, sapiente in deserunt id
                    consectetur laudantium repudiandae amet veniam aliquid itaque commodi, adipisci obcaecati qui minus
                    nemo. Qui similique incidunt delectus consequuntur obcaecati magnam ut maiores! Unde obcaecati soluta
                    qui molestiae doloribus? Quidem, animi reprehenderit quisquam culpa eos magnam reiciendis dolorem
                    doloribus accusamus minus ratione corrupti suscipit natus, accusantium eligendi. Animi corporis sapiente
                    cupiditate consequatur mollitia excepturi id dolores aspernatur magni enim unde voluptatum possimus,
                    nobis voluptas quam nesciunt nisi doloremque odit! Beatae commodi autem similique quaerat quibusdam
                    quasi est necessitatibus at doloribus et nemo mollitia modi quam vel provident, doloremque, odio
                    voluptates? Vero est, aspernatur saepe minus eaque impedit inventore quis esse, illum placeat
                    repudiandae. Sint, fuga? Quaerat, sapiente!
                </p>
                <img class="img-size" src="{{ asset('assets/images/infrastructure/AlisonHouse/Alison04.jpg') }}"
                    style="width: 100%;">
            </div>
        </div>
    </div>


    <div id="aberatneModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content modal-container back-2">
                <div class="close" data-bs-dismiss="modal"><span class="fa-stack fa-2x">
                        <i class="far fa-circle fa-stack-2x"></i>
                        <i class="fa fa-close fa-stack-1x"></i>
                    </span></div>
                <h1 class="modal-header">
                    ABEYRATNE - JEYARAJ BLOCK
                </h1>
                <div class="row grid w-100">
                    <img class="img-size" src="{{ asset('assets/images/infrastructure/Abeyratne-JeyarajBlock/AJ01.jpg') }}">
                    <img class="img-size" src="{{ asset('assets/images/infrastructure/Abeyratne-JeyarajBlock/AJ02.jpg') }}">
                    <img class="img-size" src="{{ asset('assets/images/infrastructure/Abeyratne-JeyarajBlock/AJ03.jpg') }}">
                </div>
                <p class="text justify-text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero dolorem alias, fuga dignissimos
                    pariatur repellendus quasi. Soluta cum veritatis nulla est deleniti, fugit perferendis eligendi
                    molestiae voluptates enim facilis ab maxime quibusdam possimus corrupti impedit vel iusto fuga doloribus
                    modi atque at harum? Autem, asperiores velit fuga dignissimos esse voluptate quia quisquam quae tempore
                    veritatis dolores sed deleniti beatae perferendis assumenda! Repellendus cum id optio quod praesentium
                    nemo maiores explicabo inventore porro vero voluptate provident culpa, adipisci eum ab architecto a
                    soluta ipsam ducimus placeat! Molestiae praesentium consectetur quam! Voluptatibus, perferendis
                    praesentium, quis soluta ipsum voluptas error enim fugit vitae delectus amet neque nobis tempora aliquid
                    minima laboriosam molestiae. Tempore, natus. Impedit nemo officia recusandae mollitia, tempore quisquam
                    velit quam, debitis libero perspiciatis consectetur sit, ad minus! Aspernatur autem tempora quibusdam
                    ducimus eos vel ipsa saepe, suscipit culpa voluptates aliquid necessitatibus rem perspiciatis nobis,
                    recusandae amet eaque ex reprehenderit corrupti numquam tenetur dolore provident ullam. Molestias
                    voluptas fuga suscipit dolores iusto repudiandae dolorem numquam eligendi, a tempora pariatur error,
                    odio perferendis nisi itaque accusamus? Repellendus vero commodi, numquam in dolorem non maxime eaque
                    blanditiis voluptatibus aliquid omnis distinctio delectus dignissimos nobis deleniti ut exercitationem
                    nihil illum neque. Molestias rem velit quia nisi tempora porro ipsum harum quidem suscipit iste quas, ea
                    ab sapiente natus illo delectus corporis architecto assumenda dolorem mollitia explicabo dolorum alias?
                    Eligendi, voluptas labore praesentium et omnis eos debitis aspernatur reprehenderit sint voluptatem
                    veniam unde assumenda, quam minima. Reprehenderit error alias sit nostrum et numquam ea laboriosam!
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque veritatis sed reiciendis voluptate dolor
                    maxime ullam aliquam architecto fugit alias aspernatur minus quia in obcaecati culpa, fuga, accusantium
                    repudiandae eveniet itaque vel, tempore velit minima qui est? Eos, aliquam sint, sapiente in deserunt id
                    consectetur laudantium repudiandae amet veniam aliquid itaque commodi, adipisci obcaecati qui minus
                    nemo. Qui similique incidunt delectus consequuntur obcaecati magnam ut maiores! Unde obcaecati soluta
                    qui molestiae doloribus? Quidem, animi reprehenderit quisquam culpa eos magnam reiciendis dolorem
                    doloribus accusamus minus ratione corrupti suscipit natus, accusantium eligendi. Animi corporis sapiente
                    cupiditate consequatur mollitia excepturi id dolores aspernatur magni enim unde voluptatum possimus,
                    nobis voluptas quam nesciunt nisi doloremque odit! Beatae commodi autem similique quaerat quibusdam
                    quasi est necessitatibus at doloribus et nemo mollitia modi quam vel provident, doloremque, odio
                    voluptates? Vero est, aspernatur saepe minus eaque impedit inventore quis esse, illum placeat
                    repudiandae. Sint, fuga? Quaerat, sapiente!
                </p>
                <img class="img-size" src="{{ asset('assets/images/infrastructure/Abeyratne-JeyarajBlock/AJ04.jpg') }}"
                    style="width: 100%;">
            </div>
        </div>
    </div>


    <div id="quadrangleModal" class="modal fade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content modal-container back-2">
                <div class="close" data-bs-dismiss="modal"><span class="fa-stack fa-2x">
                        <i class="far fa-circle fa-stack-2x"></i>
                        <i class="fa fa-close fa-stack-1x"></i>
                    </span></div>
                <h1 class="modal-header">
                    Restoration of the Quadrangle and Napier House
                </h1>
                <div class="row grid w-100">
                    <img class="img-size" src="{{ asset('assets/images/infrastructure/Quadrangle/Quad01.jpg') }}">
                    <img class="img-size" src="{{ asset('assets/images/infrastructure/Quadrangle/Quad02.jpg') }}">
                    <img class="img-size" src="{{ asset('assets/images/infrastructure/Quadrangle/Quad03.jpg') }}">
                </div>
                <p class="text justify-text">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Libero dolorem alias, fuga dignissimos
                    pariatur repellendus quasi. Soluta cum veritatis nulla est deleniti, fugit perferendis eligendi
                    molestiae voluptates enim facilis ab maxime quibusdam possimus corrupti impedit vel iusto fuga doloribus
                    modi atque at harum? Autem, asperiores velit fuga dignissimos esse voluptate quia quisquam quae tempore
                    veritatis dolores sed deleniti beatae perferendis assumenda! Repellendus cum id optio quod praesentium
                    nemo maiores explicabo inventore porro vero voluptate provident culpa, adipisci eum ab architecto a
                    soluta ipsam ducimus placeat! Molestiae praesentium consectetur quam! Voluptatibus, perferendis
                    praesentium, quis soluta ipsum voluptas error enim fugit vitae delectus amet neque nobis tempora aliquid
                    minima laboriosam molestiae. Tempore, natus. Impedit nemo officia recusandae mollitia, tempore quisquam
                    velit quam, debitis libero perspiciatis consectetur sit, ad minus! Aspernatur autem tempora quibusdam
                    ducimus eos vel ipsa saepe, suscipit culpa voluptates aliquid necessitatibus rem perspiciatis nobis,
                    recusandae amet eaque ex reprehenderit corrupti numquam tenetur dolore provident ullam. Molestias
                    voluptas fuga suscipit dolores iusto repudiandae dolorem numquam eligendi, a tempora pariatur error,
                    odio perferendis nisi itaque accusamus? Repellendus vero commodi, numquam in dolorem non maxime eaque
                    blanditiis voluptatibus aliquid omnis distinctio delectus dignissimos nobis deleniti ut exercitationem
                    nihil illum neque. Molestias rem velit quia nisi tempora porro ipsum harum quidem suscipit iste quas, ea
                    ab sapiente natus illo delectus corporis architecto assumenda dolorem mollitia explicabo dolorum alias?
                    Eligendi, voluptas labore praesentium et omnis eos debitis aspernatur reprehenderit sint voluptatem
                    veniam unde assumenda, quam minima. Reprehenderit error alias sit nostrum et numquam ea laboriosam!
                    <br><br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque veritatis sed reiciendis voluptate dolor
                    maxime ullam aliquam architecto fugit alias aspernatur minus quia in obcaecati culpa, fuga, accusantium
                    repudiandae eveniet itaque vel, tempore velit minima qui est? Eos, aliquam sint, sapiente in deserunt id
                    consectetur laudantium repudiandae amet veniam aliquid itaque commodi, adipisci obcaecati qui minus
                    nemo. Qui similique incidunt delectus consequuntur obcaecati magnam ut maiores! Unde obcaecati soluta
                    qui molestiae doloribus? Quidem, animi reprehenderit quisquam culpa eos magnam reiciendis dolorem
                    doloribus accusamus minus ratione corrupti suscipit natus, accusantium eligendi. Animi corporis sapiente
                    cupiditate consequatur mollitia excepturi id dolores aspernatur magni enim unde voluptatum possimus,
                    nobis voluptas quam nesciunt nisi doloremque odit! Beatae commodi autem similique quaerat quibusdam
                    quasi est necessitatibus at doloribus et nemo mollitia modi quam vel provident, doloremque, odio
                    voluptates? Vero est, aspernatur saepe minus eaque impedit inventore quis esse, illum placeat
                    repudiandae. Sint, fuga? Quaerat, sapiente!
                </p>
                <img class="img-size" src="{{ asset('assets/images/infrastructure/Quadrangle/Quad04.jpg') }}"
                    style="width: 100%;">
            </div>
        </div>

    </div>

@section('assets-js')
    <script src="{{ asset('assets/js/infrastructure.js') }}"></script>
@endsection
@endsection
