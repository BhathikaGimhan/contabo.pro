<style>
    .image-view-background .go-back:hover {
        text-decoration: underline !important;
    }

    .text-title {
        text-transform: capitalize;
    }

    .image-view {
        width: 100%;
        height: 600px;
        object-fit: cover;
    }

    .text-right {
        text-align: right !important;
    }

    .thumb-images {
        /*width: 2000px;*/
    }

    .thumb-images img {
        width: 50px;
        height: 30px;
        object-fit: cover;
        /*float: left;*/
    }

    h1, h2, h3, h4, h5, h6, p, a, figcaption, span {
        font-family: GauthierNextFY, serif !important;
    }

    .album-text {
        padding-left: 30px;
        padding-right: 50px;
    }

    .album-text span {
        font-size: 1em;
        color: #f8f9fa !important;
    }

    .full-screen-view {
        display: none;
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
    }

    /* The Close Button */
    .close-button {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-weight: bold;
        transition: 0.3s;
    }

    .close-button:hover,
    .close-button:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* Add Animation */
    .full-image {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
    }

    @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
    }

    /* Modal Content (image) */
    .image-holder {
        margin: auto;
        display: block;
        width: 80%;
        /*max-width: 700px;*/
    }

    .full-image-view {
        width: 100%;
        height: 600px;
        object-fit: contain;
    }

</style>
<script>
    $(document).ready(function () {

        $('.full-screen-view').hide();

        $('.close-modal').click(() => {
            console.log('Clicked')
            $('#viewModal').modal('hide');
        });

        $('#share').click(function () {
            let url = window.location.href;
            $('#share-url').val(url);
            $('#shareModal').modal('show');
        })

        $('#collection').click(function () {
            $('#collectionModal').modal('show');
        })

        $('.fullscreen').click(function () {
            console.log('clicked');
            $('.single-view').hide();
            $('.full-screen-view').show();
        })

        $('.close-button').click(function () {
            console.log('clicked');
            $('.full-screen-view').hide();
            $('.single-view').show();
        })

    })
</script>
<div class="modal-body">
    <div class="full-screen-view">
        <div class="d-flex justify-content-end">
            <button type="button" class="close-button" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="row pt-2">
            <div class="col-md-12 image-holder">
                <img src="{{ $gallery->data()['input'] }}" class="img-fluid single-image rounded full-image-view full-image"
                     alt="Thp image">
            </div>
        </div>
    </div>
    <div class="single-view">
        <div class="d-flex justify-content-between">
            <a class="text-light go-back close-modal">< BACK TO THE ALBUM</a>
            <a class="text-light go-back fullscreen">VIEW IN FULL SCREEN <i class="fa fa-expand"></i></a>
        </div>
        <div class="row pt-5">
            <div class="col-md-1 d-flex align-items-center justify-content-end">
                <div>
                    <img src="{{asset('assets/images/2.png')}}" alt="" class="gallery-buttons">
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ $gallery->data()['input'] }}" class="img-fluid single-image rounded image-view"
                     alt="Thp image" id="image">
            </div>
            <div class="col-md-4">
                <div class="d-flex flex-column album-text">
                    @if (!empty($gallery->data()['title']))
                        <div>
                            <h2 class="text-light text-title">{{ $gallery->data()['title'] }}</h2>
                        </div>
                    @endif
                    @if (!empty($gallery->data()['year']))
                        <div>
                            <h4 class="text-light">{{ $gallery->data()['year'] }}</h4>
                        </div>
                    @endif
                    @if (!empty($gallery->data()['description']))
                        <p class="text-light">{!! $gallery->data()['description'] !!}</p>
                    @endif
                </div>
            </div>
            <div class="col-md-1 d-flex align-items-center">
                <div>
                    <img src="{{asset('assets/images/1.png')}}" alt="" class="gallery-buttons">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-end pb-2">
            <a class="text-light go-back"><i class="fa fa-circle-info"></i> I HAVE MORE INFORMATION</a>
            <div class="thumb-images">
                @foreach($gallery_items as $gallery)
                    <img src="{{ $gallery['input'] }}"/>
                @endforeach
            </div>
            <div class="text-right">
                <a class="text-light go-back" id="collection"> ADD THIS TO MY COLLECTION <i class="fa fa-bookmark"></i></a>
                <br>
                <a class="text-light go-back" id="share">SHARE THIS PHOTO <i class="fa fa-share"></i></a>
            </div>
        </div>
    </div>
</div>
