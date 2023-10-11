@section('assets-css')
    <style>

        /*  This is for styling the main container that holds everything */
        #container {
            height: 100vh;
            width: 100%;
            position: relative;
            background: #f7f7f7;
        }

        /* This styles the descriptions of the 3D object */
        #content {
            height: 500px;
            width: 700px;
            position: absolute;
            left: 12%;
            top: calc(50% - 250px);
        }

        /* This styles the aside container */
        #aSide {
            height: 600px;
            width: 600px;
            position: absolute;
        }

        /* This styles the 3D object inserted in the aside container */
        #aSide model-viewer {
            height: 600px;
            width: 600px;
            position: absolute;
            border: none;
        }

    </style>
@endsection
@extends('layouts/master')
@section('title', '3d Model Sample')
@section('content')

    <!-- Main Container -->
    <div class="container d-flex justify-content-center align-content-center" id="container">
        <!-- An aside -->
        <!-- This is for holding the 3D object -->
        <div id="aSide">
            <model-viewer src="{{ asset('assets/3d-models/GRAMPIAN_MICROPHONE/3Ddata.glb') }}" alt="test 3d model" auto-rotate camera-controls ar ios-src="{{ asset('assets/3d-models/GRAMPIAN_MICROPHONE/3Ddata.glb') }}"></model-viewer>
        </div>

    </div>

    <div class="container d-flex justify-content-center align-content-center" id="container">
        <!-- An aside -->
        <!-- This is for holding the 3D object -->
        <div id="aSide">
            <model-viewer src="{{ asset('assets/3d-models/Horticulture_Medal/3Ddata.glb') }}" alt="test 3d model" auto-rotate camera-controls ar ios-src="{{ asset('assets/3d-models/Horticulture_Medal/3Ddata.glb') }}"></model-viewer>
        </div>

    </div>

    <div class="container d-flex justify-content-center align-content-center" id="container">
        <!-- An aside -->
        <!-- This is for holding the 3D object -->
        <div id="aSide">
            <model-viewer src="{{ asset('assets/3d-models/MBE_Medal/3Ddata.glb') }}" alt="test 3d model" auto-rotate camera-controls ar ios-src="{{ asset('assets/3d-models/MBE_Medal/3Ddata.glb') }}"></model-viewer>
        </div>

    </div>

    <div class="container d-flex justify-content-center align-content-center" id="container">
        <!-- An aside -->
        <!-- This is for holding the 3D object -->
        <div id="aSide">
            <model-viewer src="{{ asset('assets/3d-models/3D-Map.glb') }}" alt="test 3d model" auto-rotate camera-controls ar ios-src="{{ asset('assets/3d-models/3D-Map.glb') }}"></model-viewer>
        </div>

    </div>

    @section('assets-js')
        <!--Imports a model-viewer JavaScript code -->
        <!--It helps to handle how the 3D Object would be displayed -->
        <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
        <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>
    @endsection
@endsection
