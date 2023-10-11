 @section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/honour-boards.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'Honour Boards')
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
        }
        
        #header-title .sub-title{
            color : #8D7237;
            font-size : 30px !important;
        }
        #blue-text{
            font-size : 20px !important;
            color : #103355;
            font-weight : 400;
        }
        
        .centered{
            font-size : 24px;
            font-weight : 500;
        }
        
        #display-modal{
            background-color : rgba(0, 0, 0, 0.80);
        }
        
        #close-icon{
            color : #fff; 
            font-size : 30px; 
            padding-left : 15px; 
            cursor : pointer;
        }
        
        
    </style>
    <div class="container-fluid container-bg position-relative">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center" id="header-title">
                        <br><br><br>
                        <h1 class="font-bold heading-text">Honour Boards</h1>
                        <p class="mt-4 sub-title">Celebrating greatness: Trinity's honored contributors</p>
                    </div>
                </div>
                <div class="row mt-2 container">
                    <div class="col">
                        <p class="text-center" id="blue-text">Welcome to the Honour Boards page! Here, we celebrate extraordinary individuals who have made significant contributions to Trinity and the wider world.
                            Discover a distinguished collection of names honored for their remarkable achievements, showcasing their invaluable impact on our community and society as a whole.
                            Join us in honoring these exceptional individuals and their remarkable legacies.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row pb-1">
                @foreach ($roll_call_categories as $key => $category)
                    <div class="col-md-4 col-lg-3 col-sm-12 pb-3">
                        <div data-doc="{{ $category->id() }}" class="board-item mb-5" data-name="{{ $category->data()['type'] }}">
                            <img src="{{ asset('assets/backgrounds/empty-board.jpg') }}" width="250" class="img-fluid frame" alt="" id="{{ $category->id() }}">
                            <div class="centered" data-id="{{ $category->id() }}">
                                @if (!empty($category->data()['type']))
                                    {{ $category->data()['type'] }}
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="pt-4">
                    <div class="col-md-12 text-center pb-5 d-flex justify-content-center">
                        {{ $roll_call_categories->links() }}
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="modal fade" id="display-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content pt-3">
                    <div class="modal-body pt-5 d-flex justify-content-center">
                        <div class="d-flex justify-content-center mt-3 pt-1" id="modal_loader">
    `
                        </div>
                        <div class="close-button">
                            <i class="fa fa-times" id="close-icon" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    
    <!-- Modal -->


@endsection
@section('assets-js')
<script>
    let swiper_popup;
    $(document).ready(function () {
        $(document).on('click', '.board-item', function () {
            let doc_id = $(this).data('doc');
            let name = $(this).data('name');
            let url = `{{ url('honour-boards/show/') }}/${doc_id}/${encodeURI(name)}`;
            console.log(url);
            $("#modal_loader").load(url, function () {
                $('#display-modal').on('shown.bs.modal', function (e) {
                    console.log('when open model')
                    // $('.cv-carousel').carouselVertical({
                    //     items: 4,
                    //     margin: 1,
                    //     nav: false
                    // });
                });

                $('#display-modal').modal('show');
            });
        })
    });

    $(document).on('click', '.close-button', function () {
        $('#display-modal').modal('hide');
    })

    $(document).on('mouseover', '.centered', function () {
        let id = $(this).data('id');
        $('#' + id).addClass('box-shadow');
    })

    $(document).on('mouseout', '.centered', function () {
        let id = $(this).data('id');
        $('#' + id).removeClass('box-shadow');
    })

</script>
@endsection
