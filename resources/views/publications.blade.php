@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/publication.css') }}">
@endsection

@extends('layouts/master')
@section('title', 'HISTORICAL LIBRARY')
@section('content')
<style>
    #center-items{
        text-align: center;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;

    }
.container-bg {
    background-image: url('https://test.contabo.pro/public/assets/images/homepage-sections/background/Section_Background 01-min.png');
   
}
h1.font-bold.text-center.yellow-text {
    font-family: 'Gauthier Next FY', sans-serif;
    font-size: 40px;
    font-weight: 700;
    line-height: 48px;
    letter-spacing: 0;
    text-align: center;
    color: #A22829;
    margin-bottom: 20px;
}

button.read-button {
    width: 220px;
    height: 50px;
    background-color: #103355;
    color: #FFFFFF;
    border : none;
}
.border-top-row {
    border-top: black solid 2px !important;
    display: none;
    width: 36%;
}
.swiper-slide.img1.swiper-slide-active {
    width: 100% !important;
}
.swiper-button-prev-icon, .swiper-button-next-icon, .swiper1-button-next, .swiper1-button-prev {
    color: #103355;
    text-align: center;
    text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
    font-family: Gauthier Next FY;
    font-size: 50px;
    font-style: normal;
    font-weight: 400;
    line-height: 136%;
}
.publica {
    color: #103355;
    text-align: center !important;
    font-family: 'Gauthier Next FY', sans-serif;
    font-size: 20px !important;
    font-style: normal;
    margin-left: 10px !important;
    font-weight: 700;
    line-height: 28px;
}
/* Left Arrow */
.fa-solid.fa-caret-left.slider-icon,
.fa-solid.fa-caret-right.slider-icon {
    color: #103355;
    text-align: center;
    font-size: 50px;
    line-height: 136%; /* 68px */
}
span.right-arrow-1 {
    position: relative;
    margin-right: 300px;
    top: 185px !important;
}
span.left-arrow-1 {
    position: relative;
    margin-left: 300px;
    bottom: 300px !important;
}

span.right-arrow-2 {
    position: relative;
    bottom: 100px;
    margin-right: 300px;
    top: 200px !important;
}
span.left-arrow-2 {
    position: relative;
    margin-left: 205px;
    bottom: 300px !important;
}
.slider-image {
    height: 300px !important;
    margin-top: 0;
    width: 200px;
    overflow: visible;
    box-shadow: 5px 7px 5px 0px rgba(0, 0, 0, 0.30);
}


#header-title{
    font-weight : 700;
    font-family : 'Gauthier Next FY', sans-serif;
    text-align : center;
    letter-spacing : 2px;
}
#header-title .font-bold{
    font-size : 60px;
    color : #103355;
}
#header-title .sub-title{
    font-size : 30px;
    color : #8D7237;
}
#blue-text{
    color : #103355;
    font-size : 20px;
    font-weight : 400;
}
#sub-heading{
    color : #A22829;
    font-size : 40px;
    font-weight : 700;
    letter-spacing : 1px;
}
#icon-container{
    position : relative;
    width : 60px;
}

#icon-container .icon-left{
    position : absolute;
    cursor : pointer;
    font-size : 50px;
    top : 26%;
    right : 40px;
    color : #103355;
    text-shadow : 0px 3px 3px rgba(0, 0, 0, 0.25);
}
#icon-container .icon-right{
    position : absolute;
    cursor : pointer;
    font-size : 50px;
    top : 26%;
    left: 40px;
    color : #103355;
    text-shadow : 0px 3px 3px rgba(0, 0, 0, 0.25);
}



</style>
<div class="container-bg">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left" id="header-title">
                    <br><br><br>
                    <h1 class="font-bold">Historical References</h1>
                    <p class="mt-4 sub-title">Explore Trinity’s History online</p>
                </div>
            </div>
            <div class="row mt-2 container">
                <div class="col">
                    <p class="text-center" id="blue-text">Immerse yourself in Trinity's rich history through our collection of PDF booklets. 
                    Explore official publications, college magazines, and recommended reading materials, all dedicated to the captivating story of Trinity.
                    </p>
                    <br><br><br>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pb-5">
            <div class="col-md-6 col-sm-12">
                <h1 class="text-center" id="sub-heading">Official Publications</h1>
                <div class="row pb-5">
                    @foreach ($publications as $publication)
                        @if ($publication->data()['publication_category'] == 'z51J5TNK2MKXpqTH0Mv9')
                            <div class="col d-flex justify-content-center flex-row mt-5 imgslide d-none">
                                <div id="icon-container">
                                    <span class="icon-left" onclick="minSlide(-1)">⮜</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center flex-column">
                                    <img src="{{ $publication->data()['cover_image'] }}" class="slider-image">
                                    <div>
                                        <h6 class="publica mt-2 pl-1 pb-3 text-center">{!! $publication->data()['title'] !!}</h6>
                                        <a id="pdf_view_publication" href="javascript:void(0)"
                                            data-href="{{ $publication->data()['pdf_url'] }}"
                                            data-title="{!! $publication->data()['title'] !!}">
                                            <button class="read-button">READ THE BOOK</button>
                                        </a>
                                    </div>
                                </div>
                                <div id="icon-container">
                                    <span class="icon-right" onclick="plusSlide(1)">⮞</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    
                    <!--div class="col-md-12 d-flex align-items-center justify-content-center btn-pev">
                        <div class="up-arrow text-center swiper-button-prev-icon left">
                            <span class="right-arrow-1">⮜</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- Swiper for Official Publications -->
                        <!--div class="swiper mySwiper">
                            <div id="digital-swiper" class="swiper-wrapper">
                                @foreach ($publications as $publication)
                                    @if ($publication->data()['publication_category'] == 'z51J5TNK2MKXpqTH0Mv9')
                                        <div class="swiper-slide img1">
                                            <div class="row">
                                                <a id="pdf_view_publication" href="javascript:void(0)"
                                                   data-href="{{ $publication->data()['pdf_url'] }}"
                                                   data-title="{!! $publication->data()['title'] !!}">
                                                    <div class="col-12">
                                                        <img src="{{ $publication->data()['cover_image'] }}"
                                                             style="width: 200px;"
                                                             class="slider-image">
                                                        <p class="publica">{!! $publication->data()['title'] !!}</p>
                                                    </div>
                                                     <button class="read-button">READ THE BOOK</button>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                       <div class="col-md-12 d-flex align-items-center justify-content-center btn-next">
                        <div class="up-arrow text-center swiper-button-next-icon">
                            <span class="left-arrow-1">⮞</span>
                        </div>
                    </div-->
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <h1 class="text-center" id="sub-heading">Recommended Reading</h1>
                <div class="row pb-5" id="pdfcontent">
                    @foreach ($publications as $publication)
                        @if ($publication->data()['publication_category'] == '5Fgs3oOPF1mn6MngrA1r')
                            <div class="col d-flex justify-content-center flex-row mt-5 imgslide2 d-none">
                                <div id="icon-container">
                                    <span class="icon-left" onclick="minSlide2(-1)">⮜</span>
                                </div>
                                <div class="d-flex justify-content-center align-items-center flex-column">
                                    <img src="{{ $publication->data()['cover_image'] }}" class="slider-image">
                                    <div>
                                        <h6 class="publica mt-2 pb-3 pl-1 text-center">{!! $publication->data()['title'] !!}</h6>
                                        <a id="pdf_view_publication" href="javascript:void(0)"
                                            data-href="{{ $publication->data()['pdf_url'] }}"
                                            data-title="{!! $publication->data()['title'] !!}">
                                                <button class="read-button">READ THE BOOK</button>
                                        </a>
                                    </div>
                                </div>
                                <div id="icon-container">
                                    <span class="icon-right" onclick="plusSlide2(1)">⮞</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!--div class="col-md-12 d-flex align-items-center justify-content-center btn-pev">
                       <div class="up-arrow text-center swiper-button-prev-icon">
                             <span class="right-arrow-1">⮜</span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <!-- Swiper for Recommended Reading -->
                        <!--div class="swiper mySwiper1">
                            <div class="swiper-wrapper">
                                @foreach ($publications as $publication)
                                    @if ($publication->data()['publication_category'] == '5Fgs3oOPF1mn6MngrA1r')
                                        <div class="swiper-slide img1">
                                            <div class="row">
                                                <a id="pdf_view_publication" href="javascript:void(0)"
                                                   data-href="{{ $publication->data()['pdf_url'] }}"
                                                   data-title="{!! $publication->data()['title'] !!}">
                                                    <div class="col-12">
                                                        <img src="{{ $publication->data()['cover_image'] }}"
                                                             style="width: 200px;"
                                                             class="slider-image">
                                                        <p class="publica">{!! $publication->data()['title'] !!}</p>
                                                    </div>
                                                     <button class="read-button">READ THE BOOK</button>
                                                                                                 
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center justify-content-center btn-next">
                       <div class="up-arrow text-center swiper-button-next-icon">
                            <span class="left-arrow-1">⮞</span>
                        </div>
                    </div-->
                </div>
            </div>
        </div>
    </div>


        <div id="pdf_div" style="display:none">
            <div id="example1" style="height: 15cm">
            </div>
        </div>



    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" id="close-btn" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id='viewer' style="height: 15cm"></div>
                </div>
            </div>
        </div>
    </div>

    @section('assets-js')
        <script src="{{ asset('assets/js/publication.js') }}"></script>
        <script src="{{ asset('assets/js/pdfobject.js') }}"></script>

        <script>
            let slideIndex = 1;
            let slideIndex2 = 1;
            showSlides(slideIndex);
            showSlides2(slideIndex2);
            
            function plusSlide(val){
                showSlides(slideIndex += val);
            }
        
            function plusSlide2(val){
                showSlides2(slideIndex2 += val);
            }
        
            function minSlide(val){
                showSlides(slideIndex += val);
            }
            
            function minSlide2(val){
                showSlides2(slideIndex2 += val);
            }
        
            $(document).on('click', '#pdf_view_publication', function () {
                // alert('working')
                url = $(this).data('href');
                title = $(this).data('title');
                $('#exampleModalLongTitle').html(title);
                if (url != '') {
                    console.log(url);
                    PDFObject.embed(url, "#viewer");
                    $('#exampleModalCenter').modal('show');
                }
            });

            $(document).on('click', '#close-btn', () => {
                $('#exampleModalCenter').modal('hide');
            });
            
            function showSlides(n){
                let i;
                const slides = document.getElementsByClassName('imgslide');
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                
                for (i = 0; i < slides.length; i++) {
                    $(slides[i]).addClass('d-none'); 
                }
                $(slides[slideIndex-1]).removeClass('d-none');
            }
            
            function showSlides2(n){
                let i;
                const slides = document.getElementsByClassName('imgslide2');
                if (n > slides.length) {slideIndex2 = 1}    
                if (n < 1) {slideIndex2 = slides.length}
                
                for (i = 0; i < slides.length; i++) {
                    $(slides[i]).addClass('d-none');
                }
                $(slides[slideIndex2-1]).removeClass('d-none');
            }
        </script>
    @endsection
@endsection