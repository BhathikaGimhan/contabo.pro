@section('assets-css')
    <link rel="stylesheet" href="{{ asset('assets/css/roll-call.css') }}">

@endsection
@extends('layouts/master')
@section('title', 'Roll Call Info')
@section('content')

    <div class="head-perfect container mt-5">
        <div class="inner-head-perfect">

            <div class="for-head-slider-active">
                @foreach ($roll_call_info as $info)

                    <div>
                        <div class="row align-items-center for-mob-responsive">

                            <div class="col-md-5">
                                <div class="head-header">
                                    <h1>{{ $info->data()['name'] }}</h1>
                                    <div class="dot">
                                        <i class="fas fa-square-full"></i>
                                        <i class="fas fa-square-full"></i>
                                        <p> {!! $info->data()['description'] !!}
                                        </p>

                                        {{-- <div class="button">
                                            <button>MORE</button>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 head-perfect-img-lower">
                                <div class="class">
                                    @if (!empty($info->data()['image']))
                                        <img style="height: 400px;width: auto;object-fit: cover" src="{{ $info->data()['image'] }}" alt="" />
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>


    <div class="under-slider-details container mt-5">
        <div class="head-header-under-slider">
            <h1>{{ $roll_call_type->data()['type'] }}</h1>
            <div class="dot-under-slider">
                <i class="fas fa-square-full"></i>
                <i class="fas fa-square-full"></i>
                {{-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim
                </p> --}}

                {{-- <div class="button">
                    <button>MORE</button>
                </div> --}}
            </div>
        </div>


        <div class="viwe-header">
            <div class="inner-view-header">
                @foreach ($roll_call_info as $info)
                    <div class="view-card">
                        @if (!empty($info->data()['image']))
                            <img style="height: 250px;width: 207px;object-fit: cover" src="{{ $info->data()['image'] }}" alt="" />
                        @endif
                        <div class="over-img" style="margin-top: -200px;">
                        <h3 style="color: black">{{ $info->data()['year'] }}</h3>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>


    </div>
@section('assets-js')
    <script src="{{ asset('assets/js/roll_calls.js') }}"></script>
@endsection

@endsection
