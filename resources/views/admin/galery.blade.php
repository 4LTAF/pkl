@extends('layouts.master')

@section('content')
    {{-- Page Header --}}
    <header class="masthead" style="background-image: url('asset/img/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
                <div class="col-md-7 col-lg-8 col-xl-7">
                    <div class="">
                        <font color="white">
                            <h1><b>Galeri</b></h1>
                        </font>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- End Page Header --}}

    {{-- Main Content --}}
    <main class="mb-4">
        <div class="container">
            <div class="row">
                <table>
                    <tr>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4" style="margin-bottom: -100px">
                                    <style type="text/css">
                                        .panah {
                                            width: 70px;
                                            height: 70px;
                                            background: green;
                                            margin-left: 290%;
                                            padding-inline: 10px;
                                            margin: 5px 1224px -950px;
                                            position: relative;
                                            top: 180%;
                                            opacity: 0.6;
                                        }

                                        .panah:hover,
                                        .panah:focus {
                                            color: #fff;
                                            outline: 0;
                                        }

                                        .panah {
                                            transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
                                        }

                                        .panah:hover {
                                            box-shadow: 0 0 90px 40px #3ce73c inset;
                                        }


                                        .panah2 {
                                            width: 70px;
                                            height: 70px;
                                            background: green;
                                            padding-inline: 20px;
                                            margin: 5px -12px -900px;
                                            position: relative;
                                            top: 130%;
                                            transform: rotateY(180deg);
                                            opacity: 0.6;
                                        }

                                        .panah2:hover,
                                        .panah2:focus {
                                            color: #fff;
                                            outline: 0;
                                        }

                                        .panah2 {
                                            transition: box-shadow 300ms ease-in-out, color 300ms ease-in-out;
                                        }

                                        .panah2:hover {
                                            box-shadow: 0 0 40px 40px #3ce73c inset;
                                        }

                                    </style>

                                    <button class="panah" style="padding-top: px" ;>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="30px"
                                            viewBox="0 0 12.405 13.639">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: none;
                                                        stroke: #fff;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }

                                                </style>
                                            </defs>
                                            <g id="arrow-right_1_" data-name="arrow-right (1)"
                                                transform="translate(-4.405 -3.586)">
                                                <line id="Line_3" data-name="Line 3" class="cls-1" x2="10"
                                                    transform="translate(5.405 10.405)" />
                                                <path id="Path_3" data-name="Path 3" class="cls-1"
                                                    d="M12,5l5.405,5.405L12,15.811" transform="translate(-1.595)" />
                                            </g>
                                        </svg>
                                    </button>
                                    <button class="panah2" style="padding-top: px" ;>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="30px"
                                            viewBox="0 0 12.405 13.639">
                                            <defs>
                                                <style>
                                                    .cls-1 {
                                                        fill: none;
                                                        stroke: #fff;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round;
                                                        stroke-width: 2px;
                                                    }

                                                </style>
                                            </defs>
                                            <g id="arrow-right_1_" data-name="arrow-right (1)"
                                                transform="translate(-4.405 -3.586)">
                                                <line id="Line_3" data-name="Line 3" class="cls-1" x2="10"
                                                    transform="translate(5.405 10.405)" />
                                                <path id="Path_3" data-name="Path 3" class="cls-1"
                                                    d="M12,5l5.405,5.405L12,15.811" transform="translate(-1.595)" />
                                            </g>
                                        </svg>
                                        <td> <img src="{{ asset('asset/img/x1/Group 77.png') }}" width="99%"></td>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </tr>
                </table>
            </div>

            <br>

            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('asset/img/x1/mathew-schwartz-OjQgsR1oyEw-unsplash.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('asset/img/x2/vladimir-kudinov-vmlJcey6HEU-unsplash@2x.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('asset/img/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('asset/img/x1/david-clode-0lwa8Dprrzs-unsplash.png') }}" width="97%">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('asset/img/x2/david-clode-AtCChdVhAmA-unsplash@2x.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('asset/img/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('asset/img/x2/TERUMBU-KARANG (1)@2x.png') }}" width="97%">
                </div>

                <div class="col-md-3">
                    <img src="{{ asset('asset/img/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') }}" width="97%">
                </div>
            </div>
        </div>
    </main>
    {{-- End Main Content --}}

@endsection
