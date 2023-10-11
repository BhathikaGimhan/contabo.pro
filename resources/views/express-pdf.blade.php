@extends('layouts/master')
@section('title', 'Digital Archive')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-center">
                <div id="viewer" style="width: 1024px; height: 1000px"></div>
            </div>
        </div>
    </div>
@section('assets-js')
    <script>
        WebViewer({
                path: '{{ asset('assets/lib') }}', // path to the PDF.js Express'lib' folder on your server
                licenseKey: 'JU9JF7Aa8ViBPHEqObX7',
                initialDoc: 'https://thp-pdfs.s3.ap-south-1.amazonaws.com/53c40eb5-7f7d-4d3f-a332-8cfb8de18661.pdf',
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
            });
    </script>
@endsection
@endsection
