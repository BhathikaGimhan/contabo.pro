 @section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/honour-boards.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'Honour Boards')
@section('content')
    <div class="container-fluid sub-nav">
        <div class="container d-flex justify-content-between row mx-auto">
            <div class="col-lg-6 col-md-12">
                <h6>COLLECTIONS &#10148 HONOUR BOARDS</h6>
            </div>
            <div class="col-lg-6 col-md-12 d-flex justify-content-end">
                <input type="text" placeholder="SEARCH FOR A NAME">
            </div>
        </div>
    </div>
    <div class="container-fluid image-bg"
         style="background-image: url({{ asset('assets/backgrounds/old-paper.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-4">
                    <h1 class="font-bold text-center">Honour Boards</h1>
                    <p class="text-center">Individuals recognised for their great contributions towards Trinity and the
                        world at large</p>
                </div>
            </div>
            <div class="hr-bold"></div>
            <div class="row pt-5 pb-5">
                @foreach ($roll_call_categories as $key => $category)
                    <div class="col-md-4 board-item mb-4" data-doc="{{ $category->id() }}"
                         data-name="{{ $category->data()['type'] }}">
                        <img src="{{ asset('assets/backgrounds/empty-board.jpg') }}" class="img-fluid frame" alt=""
                             id="{{ $category->id() }}">
                        <div class="centered" data-id="{{ $category->id() }}">
                            @if (!empty($category->data()['type']))
                                {{ $category->data()['type'] }}
                            @endif
                        </div>
                    </div>
                @endforeach
                <div class="col-md-12 text-center pt-3 d-flex justify-content-center">
                    {{ $roll_call_categories->links() }}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="display-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-right close-button">
                        <i class="fa fa-circle-xmark"></i>
                    </div>
                    <div class="d-flex justify-content-center" id="modal_loader">
`
                    </div>
                </div>
            </div>
        </div>
    </div>


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
