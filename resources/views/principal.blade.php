@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/principals.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'Principal')
@section('content')
    <style>
        .container-bg {
            background-image: url('https://test.contabo.pro/public/assets/images/homepage-sections/background/Section_Background 01-min.png');
        }
        #header-title{
            font-weight : 700;
            text-align : center;
            letter-spacing : 2px;
        }
        #header-title .heading-text{
            font-size: 60px !important; 
            color : #103355;
            font-weight : 700;
        }
        
        #header-title .sub-title{
            color : #8D7237;
            font-size : 30px !important;
            font-weight : 700;
        }
        #blue-text{
            font-size : 20px !important;
            color : #103355;
            font-weight : 400;
        } 
        
        #slider{
            background-image : url('https://test.contabo.pro/public/assets/images/bg2.png');
        }
        .next-icon{
            color: #103355;
            font-size : 60px;
            cursor : pointer;
            text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
        }
        .principal-img{
            width : 210px;
            height : 275px;
            object-fit : cover;
            box-shadow: 3.05366px 1.52683px 3.05366px 1.52683px rgba(0, 0, 0, 0.56);
        }
        .description{
            text-align: justify;
            color : #103355;
            font-size : 15px;
            font-weight : 400;
        }
        .vertic-line{
            width : 12px;
            height : 130px;
            background-color : #8D7237;
        }
        .principal-name{
            font-size : 18px;
            font-weight : 700;
            color: #103355;
        }
        #slider-bottom-link{
            color: #103355;
            text-transform : uppercase;
            text-decoration: underline !important;
            font-size: 15px;
            font-weight : 700;
            margin-left: 40px;
            cursor : pointer;
        }
        #slider-bottom-link:nth-child(1){
            margin-left : 0;
        }
        
        .img-principal{
            width : 90px;
            height : 116px;
            opacity : 0.6;
            cursor : pointer;
        }
        .active{
            border : 0.763px solid #F00;
            opacity : 1;
        }
        
        
    </style>
    <div class="container-fluid container-bg position-relative pb-4">
        <div class="container">
            <div class="row pb-3">
                <div class="col-md-12">
                    <div class="text-center" id="header-title">
                        <br><br><br>
                        <h1 class="font-bold heading-text">Principals’ Gallery</h1>
                        <p class="mt-4 sub-title">Journey through Trinity's past, inspiring leaders</p>
                    </div>
                </div>
                <div class="row mt-2 container">
                    <div class="col">
                        <p class="text-center" id="blue-text">Welcome to the Principal's Gallery, an immersive experience where you can delve into the rich history of Trinity College and explore the remarkable 
                        individuals who have led the institution throughout the years. Through captivating images and insightful write-ups, 
                        we invite you to uncover the legacies and transformative eras of Trinity's esteemed Principals. With just a simple click, you can embark on a journey that unveils the stories of these influential leaders.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="slider">
            <div class="p-4 pt-5 pb-5">
                <div>
                    <div class="row">
                        <div class="col-md-1 d-flex align-items-center justify-content-start">
                            <span class="next-icon">⮜</span>
                        </div>
                        <div class="col-md-3 d-flex justify-content-center">
                            <div>
                                <div>
                                    <img class="principal-img" src="https://test.contabo.pro/public/assets/images/principles/principle1.png" >
                                </div>
                                <div class="pt-2">
                                    <p class="principal-name">Rev. J. Ireland Jones</p>
                                    <p class="principal-name">1857 - 1860</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="description">This institution came into existence in answer to an appeal for a school of higher education in Kandy. It functioned for about six years; but Mr. Jones had already resigned before it finally closed down. It was this school that was re-opened in 1872, the year from which Trinity dates its existence. Evidently the School was in a flourishing condition in Mr. Jones’ time; but in 1860, anxious to devote himself to evangelistic work, he retired from the College and his place was taken by the Rev. R. B. Tonge. </p>
                            <br>
                            <p class="description">The best available account of Mr.Jones is that of an Old Boy of Trinity, the Hon. T. B. L. Moonemalle, who knew Mr. Jones later very intimately, “He is an ardent and ideal missionary he will ever be remembered in Ceylon. I have met many men-some of whom attained greatness- who gratefully acknowledge the magnetic influence of his personality in shaping their lives, and implanting within them those qualities which tend towards the betterment of the community. As a preacher Mr. Jones was unexcelled in those times. His sermons were always impressive and caused conviction. An earnest delivery, a natural eloquence, profound scholarship, careful study, combined with mental powers of a rare order, produced a preacher who attracted crowds and left a lasting impression behind.</p>
                        </div>
                        <div class="col-md-1">
                            <div class="vertic-line"></div>
                        </div>
                        <div class="col-md-1 d-flex align-items-center justify-content-end position-relative">
                            <span class="next-icon">⮞</span>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="d-flex justify-content-center">
                            <h6 id="slider-bottom-link" onclick="moreInfo()">I Have More Information</h6>
                            <h6 id="slider-bottom-link" onclick="add()">Add This To My Collection</h6>
                            <h6 id="slider-bottom-link" onclick="shareTeacher()">share</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-2 pb-5">
            <div class="row pb-5">
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle1.png" class="img-principal  active" >
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle2.png" class="img-principal" >
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle3.png" class="img-principal" >
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle4.png" class="img-principal" >        
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle5.png" class="img-principal" >        
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle1.png" class="img-principal" >        
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle2.png" class="img-principal" >
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle3.png" class="img-principal" >        
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle4.png" class="img-principal" >        
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle5.png" class="img-principal" >
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle1.png" class="img-principal" >
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle2.png" class="img-principal" >        
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle3.png" class="img-principal" >
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle4.png" class="img-principal" >
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle5.png" class="img-principal" >        
                    </div>
                </div>
                <div class="col-md-1 d-flex justify-content-center mt-4">
                    <div class="img-principal">
                        <img src="https://test.contabo.pro/public/assets/images/principles/principle1.png" class="img-principal" >
                    </div>
                </div>
            </div>
        </div>
        <!--div class="container principal-data-container pb-5">
            {{-- principals list --}}
        </div-->
    </div>

    <!-- Image View Modal -->
    <div class="modal fade img-view-modal" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl wide-modal" role="document">
            <div class="modal-content image-view-background" id="view-modal-content">
{{--                @include('modals.principle-view')--}}
            </div>
        </div>
    </div>

    @include('modals.share-modal')
    @include('modals.collection-modal')
    @include('modals.info-modal')


@section('assets-js')
    <!--script src="{{ asset('assets/js/principles.js') }}"></script-->
    
    <script>
        function shareTeacher(){
            let url = window.location.href;
            $("#share-url").val(url);
            $("#shareModal").modal("show");
        }
        
        function add(){
            $("#collectionModal").modal("show");
        }
        
        function moreInfo(){
            var id = $('.slide-active').data('id');
            $('#photo_id').html(id);
            $("#informationModal").modal("show");
        }
    </script>
        
@endsection
@endsection
