<style>
    .image-view-background .go-back:hover {
        color: #dac79d !important;
        text-decoration: underline !important;
        transition: 0.3s;
    }

    .image-view {
        width: 100%;
        height: 330px;
        object-fit: cover;
        border: white solid;
    }


    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }


    h1 {
        color: #dac79d;
        font-weight: 600;
        margin-bottom: 0;
        padding-top: 16px;
    }

    h1.member-name {
        font-size: 25px;
    }

    h2.member-year {
        font-size: 20px;
    }

    h2 {
        color: white;
        font-weight: 600;
    }

    .fa-nav-btn:hover {
        color: #a12729;
        transition: 0.2s;
    }

    .slide-container {
        position: relative;
    }

    .slide-btn {
        position: absolute;
        top: 50%;
        transform: translate(0, -50%);
        font-size: 50px;
        z-index: 100;
        color: #dac79d;
        transition: color 0.3s ease;
    }

    .slide-btn:hover {
        color: #a12729;
    }

    .button-next {
        right: 6px;
    }

    .button-prev {
        left: 6px;
    }

    .swiper-slide>.row {
        padding-top: 35px;
        padding-inline: 80px;
    }

    .justify-text {
        text-align: justify;
        text-justify: inter-word;
    }

    .album-text {
        padding-left: 20px;
        padding-right: 20px;
        color: #f2ece0;
        height: 460px;
        overflow: auto;
    }

    .album-text span {
        font-size: 1em;
        color: #f8f9fa !important;
    }

    .album-text::-webkit-scrollbar {
        width: 6px;
    }

    .album-text::-webkit-scrollbar-track {
        background: #ffffff00;
    }

    .album-text::-webkit-scrollbar-thumb {
        background: #dac79d;
    }

    .album-text::-webkit-scrollbar-thumb:hover {
        background: #a12729;
    }

    .swiper-wrapper {
        height: fit-content;
    }

    .swiper-slide>.row {
            height: 500px !important;
    }

    @media (max-width: 992px) {

        .modal-dialog {
            max-width: 700px !important;
        }

        .image-head {
            width: 100%;
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            text-align: center;
        }

        .image-view {
            width: 250px !important;
            align-self: center !important;
            height: auto !important;
        }

        .album-text {
            overflow: hidden;
            height: auto !important;
        }

        .swiper-slide>.row {
            overflow: auto !important;
        }
    }
</style>
<script>
    $(document).ready(function() {


        $('.close-modal').click(() => {
            $('#viewModal').modal('hide');
        });

    })


    var swiper = new Swiper(".swiper", {

        slidesPerView: 1,
        spaceBetween: 0,
        loop: false,
        centerSlide: true,
        centerInsufficientSlides: true,
        centeredSlidesBounds: true,
        fade: 'true',
        grabCursor: 'true',
        slideActiveClass: 'slide-active',
        navigation: {
            nextEl: ".button-next",
            prevEl: ".button-prev",
        }
    });

    swiper.slideTo(getSlideIndexByClass('slide-custom'));

    function getSlideIndexByClass(className) {
        var index = 0;
        $.each($('.swiper-wrapper').children(), function(i, item) {
            if ($(item).hasClass(className)) {
                index = i;
                return false;
            }
        });
        return index;
    }
</script>
<div class="modal-body">
    <div class="single-view">
        <div class="d-flex justify-content-between">
            <a class="text-light go-back close-modal">&#11164; GO BACK</a>
            <a class="text-light go-back" id="share">SHARE <i class="fa fa-share"></i></a>
        </div>
        <div class="slide-container swiper">
            <div class="swiper-wrapper">
                @foreach ($members as $member)
                    <div class="swiper-slide h-100 @if ($member->id() == $id) slide-custom @endif"
                        data-id="{{ $member->id() }}" data-name="{{ $member->data()['name'] }}">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-4 col-md-12 image-head">
                                @if (!empty($member->data()['image']))
                                    <img src="{{ $member->data()['image'] }}"
                                        class="img-fluid single-image rounded image-view" alt="Thp image"
                                        id="image">
                                @else
                                    <img src="{{ asset('assets/images/demo1.jpg') }}"
                                        class="img-fluid single-image rounded image-view" alt="Thp image"
                                        id="image">
                                @endif
                                <h1 class="text-break member-name">{{ $member->data()['name'] }}</h1>
                                <h2 class="member-year">{{ $member->data()['year'] }}</h2>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="d-flex flex-column album-text justify-text">
                                    {!! $member->data()['description'] !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="button-next slide-btn">
                <span>&#11166;</span>
            </div>
            <div class="button-prev slide-btn">
                <span>&#11164;</span>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-end pb-2">
            <a class="text-light go-back" id="information"><i class="fa fa-circle-info"></i> I HAVE MORE INFORMATION</a>
            <a class="text-light go-back" id="collection"> ADD THIS TO MY COLLECTION <i class="fa fa-bookmark"></i></a>
        </div>
    </div>
</div>
