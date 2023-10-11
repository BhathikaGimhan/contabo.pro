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
</style>

    <div class="container-fluid">
        <div class="container" id="center-items">
            <div class="row">
                <div class="col-md-12 text-left">
                    <br><br><br>
                    <h1 class="font-bold ">HISTORICAL REFERENCES</h1>
                    <p class="sub-title">FROM OFFICIAL PUBLICATIONS TO RECOMMENDED READING MATERIALS</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="mt-4 blue-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                        voluptate
                        velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p><br><br><br>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 pb-5">
                    <h1 class="font-bold  text-center yellow-text">Official Publications</h1>
                    <div class="d-flex justify-content-center">
                        <div class="border-top-row">

                        </div>
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center justify-content-center btn-pev">
                    <div class="up-arrow text-center swiper1-button-prev">
                        <i class="fa-solid fa-caret-left slider-icon"></i>
                    </div>
                </div>
                <div class="col-md-10 ">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <div id="digital-swiper" class="swiper-wrapper ">
                            @foreach ($publications as $publication)
                                @if($publication->data()['publication_category'] == 'z51J5TNK2MKXpqTH0Mv9')
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
                                        </a>
                                    </div>
                                </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center justify-content-center btn-next">
                    <div class="up-arrow text-center swiper1-button-next">
                        <i class="fa-solid fa-caret-right slider-icon"></i>
                    </div>
                </div>
            

        <div id="pdf_div" style="display:none">
            <div id="example1" style="height: 15cm">
            </div>
        </div>

                <div class="col-md-12 pb-5">
                    <h1 class="font-bold  text-center yellow-text">Recommended Reading</h1>
                    <div class="d-flex justify-content-center">
                        <div class="border-top-row">

                        </div>
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center justify-content-center btn-pev">
                    <div class="up-arrow text-center swiper-button-prev-icon">
                        <i class="fa-solid fa-caret-left slider-icon"></i>
                    </div>
                </div>
                <div class="col-md-10 ">
                    <!-- Swiper -->
                    <div class="swiper mySwiper1">
                        <div class="swiper-wrapper ">
                            @foreach ($publications as $publication)
                                @if($publication->data()['publication_category'] == '5Fgs3oOPF1mn6MngrA1r')
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
                                        </a>
                                    </div>
                                </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="col-md-1 d-flex align-items-center justify-content-center btn-next">
                    <div class="up-arrow text-center swiper-button-next-icon">
                        <i class="fa-solid fa-caret-right slider-icon"></i>
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
            })

            $(document).on('click', '#close-btn', () => {
                $('#exampleModalCenter').modal('hide');
            })
        </script>
    @endsection
@endsection
