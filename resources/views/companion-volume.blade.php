@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/companion-volume.css') }}">
@endsection
@extends('layouts/master')
@section('title', 'Companion Volume')
@section('content')
    <div class="container-fluid blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 pt-5 page-title-section">
                    <h1 class="main-header">
                        The Companion Volume
                    </h1>
                    <p class="main-text">
                        1972-2022 Companion to The Trinity Story
                    </p>
                </div>
                <div class="col-md-12 text-area pt-5 pb-5">
                    <p>
                        The Trinity History Companion Volume covering thelast 50 years ( 1972-2022 provides a chronology
                        to record and rekindle events for the recent generations. It provides a continuum to key
                        statistics and references supplementing the 100 year publication. It sets out the changing face
                        of Trinity, and adaptations in the classrooms, in House Associations, in the religious movements
                        , in the aesthetics and landscape. It details various adaptations to the times ranging from the
                        Chapel, the Farm, the cadet corps; social services, use of information technology and to
                        developments of the Archives and libraries.
                    </p>
                    <p>
                        The Companion Volume will be available in print on a limited-edition basis and also digitally to facilitate updating as years go by.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid cream-bg">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-12 d-flex justify-content-center">
                    <div id="viewer" style="width: 1024px; height: 1000px"></div>
                </div>
            </div>
        </div>
    </div>
    @section('assets-js')
        <script>
            WebViewer({
                path: '{{ asset('assets/lib') }}', // path to the PDF.js Express'lib' folder on your server
                licenseKey: 'JU9JF7Aa8ViBPHEqObX7',
                initialDoc: 'https://thp-pdfs.s3.ap-south-1.amazonaws.com/static_pdf/A+HISTORY+OF+TRINITY+COLLEGE%2C+KANDY+OCR.pdf',
                // initialDoc: '/path/to/my/file.pdf',  // You can also use documents on your server
            }, document.getElementById('viewer'))
                .then(instance => {
                    // now you can access APIs through the WebViewer instance
                    const {
                        Core,
                        UI
                    } = instance;

                    // adding an event listener for when a document is loaded
                    Core.documentViewer.addEventListener('documentLoaded', () => {
                        console.log('document loaded');
                    });

                    // adding an event listener for when the page number has changed
                    Core.documentViewer.addEventListener('pageNumberUpdated', (pageNumber) => {
                        console.log(`Page number is: ${pageNumber}`);
                    });

                    // disable printing
                    instance.UI.disableFeatures([instance.UI.Feature.Print])
                    instance.UI.disableFeatures([instance.UI.Feature.Download])

                });
        </script>
    @endsection
@endsection
