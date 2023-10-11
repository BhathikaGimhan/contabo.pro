@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/album_view.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Gallery')
@section('content')

    <div class="container bg-dark ">
        <div class="row nav-normal">
            <div class="col-md-3">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control p-0 search-bar-margin" placeholder="Type query"
                           aria-label="Search"/>
                </div>
            </div>
            <div class="col-md-5"></div>
            <div class="col-md-1 ">
                <button type="button" class="btn text-white">PEOPLE</button>

            </div>
            <div class="col-md-1">
                <button type="button" class="btn text-white">PLACES</button>

            </div>
            <div class="col-md-1">
                <button type="button" class="btn text-white">EVENTS</button>

            </div>
            <div class="col-md-1">
                <button type="button" class="btn text-white">ALL</button>
            </div>
        </div>
        <div class="row nav-mobile text-center">
            <div class="col-12">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control p-0 search-bar-margin" placeholder="Type query"
                           aria-label="Search"/>
                </div>
            </div>
            <div class="col-3 text-center">
                <button type="button" class="btn text-white text-center">PEOPLE</button>

            </div>
            <div class="col-3">
                <button type="button" class="btn text-white text-center">PLACES</button>

            </div>
            <div class="col-3">
                <button type="button" class="btn text-white text-center">EVENTS</button>

            </div>
            <div class="col-3">
                <button type="button" class="btn text-white text-center">ALL</button>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row pt-3 title-section">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <a href="{{ route('gallery.index') }}" class="go-back">GO BACK</a>
                    <h1 class="main-title text-center">{{ $album->data()['album_name'] }}</h1>
                    <span class="photo-count">{{ count($gallery_items) }} PHOTOS</span>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-8 text-center blue-text">
                @if (!empty($album->data()['description']))
                    <p>{!! $album->data()['description'] !!}</p>
                @endif
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-12">
                <div class="d-flex justify-content-center album-btns">
                    <i class="fa fa-share icon pointer" id="share"></i>
                    <i class="fa fa-bookmark icon pointer" id="collection"></i>
                </div>
            </div>
        </div>

        <div class="row pt-3 pb-4">
            <div class="col-md-12 grid">
                <div class="container">
                    @foreach ($gallery_items as $gallery)
                        @if ($gallery->data()['input'] != '')
                            <figure class="album-item pointer" id="{{$gallery->id()}}" data-id="{{$album->id()}}">
                                {{--                                <a href="{{ route('album.image.view', $gallery->id()) }}"></a>--}}
                                <img src="{{ $gallery->data()['input'] }}" alt="album image"/>


                                @if (!empty($gallery->data()['title']))
                                    <figcaption>{{ $gallery->data()['title'] }}</figcaption>
                                @endif
                            </figure>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-12 text-center pt-3 d-flex justify-content-center">
            {{ $gallery_items->links() }}
        </div>

        <!-- Share Modal -->
        <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="close-button" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="text-center">
                            <h5>SHARE THIS ALBUM TO</h5>
                        </div>
                        <div class="d-flex justify-content-center pt-4">
                            <div class="share-icon"><img src="https://cdn-icons-png.flaticon.com/512/145/145802.png"
                                                         width="48" alt=""></div>
                            <div class="share-icon"><img src="https://cdn-icons-png.flaticon.com/512/145/145812.png"
                                                         width="48" alt=""></div>
                            <div class="share-icon"><img
                                    src="https://cdn-icons-png.flaticon.com/512/3178/3178158.png"
                                    width="48" alt=""></div>
                        </div>
                        <div class="d-flex justify-content-center pt-4 pb-4 copy-input">
                            <input id="share-url" class="custom-search-input" type="readonly" readonly value placeholder="Search">
                            <span class="custom-search-botton" id="copy-link">
                                <i class="fa fa-copy"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Collection Modal -->
        <div class="modal fade" id="collectionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="d-flex justify-content-end">
                            <button type="button" class="close-button" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="text-center">
                            <h5 class="pb-3">THE ALBUM</h5>
                            <h1 class="main-title text-center text-uppercase pb-3"
                                style="color: #8d6d3f">{{ $album->data()['album_name'] }}</h1>
                            <h5 class="pb-3">WAS ADDED TO YOUR COLLECTIONS</h5>
                            <a href="#" style="color: black" class="underline-text"><h5>VIEW MY COLLECTIONS</h5></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Image View Modal -->
        <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl wide-modal" role="document">
                <div class="modal-content image-view-background" id="view-modal-content">

                </div>
            </div>
        </div>

        @section('assets-js')
            <script src="{{ asset('assets/js/album_view.js') }}"></script>
            <script>
                $(document).ready(function () {
                    $('#share').click(function () {
                        let url = window.location.href;
                        $('#share-url').val(url);
                        $('#shareModal').modal('show');
                    })
                    $('#collection').click(function () {
                        $('#collectionModal').modal('show');
                    })

                    $('.close-button').click(() => {
                        $('#collectionModal').modal('hide');
                        $('#shareModal').modal('hide');
                    })

                    $('.album-item').click(function () {
                        const id = this.id
                        const album_id = $(this).data('id');
                        console.log(this.id);
                        $('#view-modal-content').load('/album/image/modal/' + id +'/'+ album_id, (responseTxt, statusTxt, xhr) => {
                            console.log(statusTxt)
                            if (statusTxt == 'success') {
                                $('#viewModal').modal('show');
                            }
                        });
                    });
                })

                $('#copy-link').click(() => {
                    var textBox = document.getElementById("share-url");
                    textBox.select();
                    document.execCommand("copy");
                })

            </script>
@endsection
@endsection
