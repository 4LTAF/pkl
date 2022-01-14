@extends('layouts.master')

@section('header')
    <div class="container">
        <header class="masthead"
            style="background-image: url('asset/img/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-left">
                    <div class="col-md-7 col-lg-8 col-xl-7">
                        <div class="">
                            <font color="white">
                                <h1>Hewan</h1>
                                <h1>Tropis di Dunia</h1>
                                <span class="subheading">Lorem ipsum dolor sit amet, consectetur</span><br>
                                <span class="subheading">adipiscing elit, sed du euismod tempor
                                    incididunt</span><br>
                                <span class="subheading">ut labore et dolore magna aliqua. Ut enim ad</span>
                            </font>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>
@endsection

@section('content')
    <main class="mb-4">
        <div class="container px-2 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-left">
                <div class="col-md-6">
                    <font color="MediumSeaGreen">
                        TENTANG KAMI
                    </font>
                    <h1>Membangun</h1>
                    <h1>Komunitas Hewan </h1>
                    <p>Lorem ipsum dolor sit amet, consectur adipiscing <br>
                        elit, sed do euismod tempor incididunt ut labore et <br>
                        dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do <br>
                        euismod tempor incididunt ut labore et dolore magna aliqua. <br>
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco <br>
                        laboris nisi ut aliquip ex ea commodo consequat</P>
                    <a href="{{ route('kontak') }}">
                        <button type=" button" class="btn btn-success" style="background-color: MediumSeaGreen">baca
                            selengkapnya
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                            </svg>
                        </button></a>
                </div>
                <div class="col-md-6 ">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('asset/img/x2/alessandro-desantis-9_9hzZVjV8s-unsplash@2x.png') }}"
                                width="97%" height="">
                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('asset/img/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') }}" width="99%"
                                height="99%">
                        </div>
                    </div> <br>
                    <div class="row">
                        <img src="{{ asset('asset/img/x1/kyle-nieber-3ryX0ShTMWg-unsplash.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <br>

        <link href="css/styles.css" rel="stylesheet" />
        <div class="container">
            <main class="mb-4">
                <header class="masthead"
                    style="background-image: url('asset/img/x2/pascal-muller-iSz0IMtulos-unsplash@2x.png')">
                    <div class="container position-relative px-4 px-lg-5">
                        <div class="row gx-4 gx-lg-5 justify-content-left">
                            <font color="white">
                                <h1>Kami Membawa Anda</h1>
                                <h1>Untuk Mengetahui Lebih Dalam</h1>
                            </font>
                            <br><br><br><br>
                            <div class="col-md-7 col-lg-8 col-xl-7">
                            </div>
                        </div>
                        <br>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div style="background-color: white">
                                            <div class="card-body">
                                                <center>
                                                    <div class="lingkaran1">
                                                        <style type="text/css">
                                                            .lingkaran1 {
                                                                width: 90px;
                                                                height: 90px;
                                                                background: green;
                                                                border-radius: 100%;
                                                            }

                                                        </style>
                                                        <br>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="34.215"
                                                            height="29.904" viewBox="0 0 34.215 29.904">


                                                            <defs>
                                                                <style>
                                                                    .cls-1 {
                                                                        fill: green;
                                                                    }

                                                                </style>
                                                            </defs>
                                                            <g id="pawprint" transform="translate(0 0)">
                                                                <path id="Path_29" data-name="Path 29"
                                                                    class="cls-1"
                                                                    d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0"
                                                                    transform="translate(-60.152 -169.79)" />
                                                                <path id="Path_30" data-name="Path 30"
                                                                    class="cls-1"
                                                                    d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0"
                                                                    transform="translate(0 -92.285)" />
                                                                <path id="Path_31" data-name="Path 31"
                                                                    class="cls-1"
                                                                    d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0"
                                                                    transform="translate(-116.1 0)" />
                                                                <path id="Path_32" data-name="Path 32"
                                                                    class="cls-1"
                                                                    d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0"
                                                                    transform="translate(-265.203 -37.564)" />
                                                                <path id="Path_33" data-name="Path 33"
                                                                    class="cls-1"
                                                                    d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0"
                                                                    transform="translate(-351.56 -159.623)" />
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </center>
                                                <p class="card-text">
                                                    <center>
                                                        <p>
                                                            <b>Lorem Ipsum <br>Dolor Sit Amet <br></b>
                                                            Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,sed
                                                            <br>do
                                                            eiusmod tempor incididunt
                                                        </p>
                                                    </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div style="background-color: white">
                                            <div class="card-body">
                                                <center>
                                                    <div class="lingkaran1">
                                                        <style type="text/css">
                                                            .lingkaran1 {
                                                                width: 90px;
                                                                height: 85px;
                                                                background: green;
                                                            }

                                                        </style>
                                                        <br>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="34.215"
                                                            height="29.904" viewBox="0 0 34.215 29.904">


                                                            <defs>
                                                                <style>
                                                                    .cls-1 {
                                                                        fill: green;
                                                                    }

                                                                </style>
                                                            </defs>
                                                            <g id="pawprint" transform="translate(0 0)">
                                                                <path id="Path_29" data-name="Path 29"
                                                                    class="cls-1"
                                                                    d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0"
                                                                    transform="translate(-60.152 -169.79)" />
                                                                <path id="Path_30" data-name="Path 30"
                                                                    class="cls-1"
                                                                    d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0"
                                                                    transform="translate(0 -92.285)" />
                                                                <path id="Path_31" data-name="Path 31"
                                                                    class="cls-1"
                                                                    d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0"
                                                                    transform="translate(-116.1 0)" />
                                                                <path id="Path_32" data-name="Path 32"
                                                                    class="cls-1"
                                                                    d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0"
                                                                    transform="translate(-265.203 -37.564)" />
                                                                <path id="Path_33" data-name="Path 33"
                                                                    class="cls-1"
                                                                    d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0"
                                                                    transform="translate(-351.56 -159.623)" />
                                                            </g>
                                                        </svg>
                                                </center>
                                                <p class="card-text">
                                                    <center>
                                                        <p>
                                                            <b>Lorem Ipsum <br>Dolor Sit Amet <br></b>
                                                            Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,sed
                                                            <br>do
                                                            eiusmod tempor incididunt
                                                        </p>
                                                    </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div style="background-color: white">
                                            <div class="card-body">
                                                <center>
                                                    <div class="lingkaran1">
                                                        <style type="text/css">
                                                            .lingkaran1 {
                                                                width: 90px;
                                                                height: 90px;
                                                                background: green;
                                                                border-radius: 100%;
                                                            }

                                                        </style>
                                                        <br>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="34.215"
                                                            height="29.904" viewBox="0 0 34.215 29.904">


                                                            <defs>
                                                                <style>
                                                                    .cls-1 {
                                                                        fill: green;
                                                                    }

                                                                </style>
                                                            </defs>
                                                            <g id="pawprint" transform="translate(0 0)">
                                                                <path id="Path_29" data-name="Path 29"
                                                                    class="cls-1"
                                                                    d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0"
                                                                    transform="translate(-60.152 -169.79)" />
                                                                <path id="Path_30" data-name="Path 30"
                                                                    class="cls-1"
                                                                    d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0"
                                                                    transform="translate(0 -92.285)" />
                                                                <path id="Path_31" data-name="Path 31"
                                                                    class="cls-1"
                                                                    d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0"
                                                                    transform="translate(-116.1 0)" />
                                                                <path id="Path_32" data-name="Path 32"
                                                                    class="cls-1"
                                                                    d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0"
                                                                    transform="translate(-265.203 -37.564)" />
                                                                <path id="Path_33" data-name="Path 33"
                                                                    class="cls-1"
                                                                    d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0"
                                                                    transform="translate(-351.56 -159.623)" />
                                                            </g>
                                                        </svg>
                                                </center>
                                                <p class="card-text">
                                                    <center>
                                                        <p>
                                                            <b>Lorem Ipsum <br>Dolor Sit Amet <br></b>
                                                            Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,sed
                                                            <br>do
                                                            eiusmod tempor incididunt
                                                        </p>
                                                    </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div style="background-color: white">
                                            <div class="card-body">
                                                <center>
                                                    <div class="lingkaran1">
                                                        <style type="text/css">
                                                            .lingkaran1 {
                                                                width: 90px;
                                                                height: 90px;
                                                                background: green;
                                                                border-radius: 100%;
                                                            }

                                                        </style>
                                                        <br>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="34.215"
                                                            height="29.904" viewBox="0 0 34.215 29.904">
                                                            <defs>
                                                                <style>
                                                                    .cls-1 {
                                                                        fill: #fff;
                                                                    }

                                                                </style>
                                                            </defs>
                                                            <g id="pawprint" transform="translate(0 0)">
                                                                <path id="Path_29" data-name="Path 29"
                                                                    class="cls-1"
                                                                    d="M83.032,185.786a8.331,8.331,0,0,0-14.029,0l-3.71,5.788a5.273,5.273,0,0,0,6.562,7.673l.068-.03a10.366,10.366,0,0,1,8.256.03,5.244,5.244,0,0,0,2.116.448,5.31,5.31,0,0,0,1.18-.134,5.274,5.274,0,0,0,3.266-7.987Zm1.754,10.757a3.249,3.249,0,0,1-3.8.868,12.376,12.376,0,0,0-9.938,0l-.045.02a3.268,3.268,0,0,1-4.023-4.774l3.71-5.788a6.326,6.326,0,0,1,10.652,0l3.71,5.787a3.249,3.249,0,0,1-.267,3.888Zm0,0"
                                                                    transform="translate(-60.152 -169.79)" />
                                                                <path id="Path_30" data-name="Path 30"
                                                                    class="cls-1"
                                                                    d="M6.141,108.273a4.045,4.045,0,0,0,2.361-2.5,5.226,5.226,0,0,0-.092-3.6,5.229,5.229,0,0,0-2.348-2.735,4.045,4.045,0,0,0-3.429-.276,4.631,4.631,0,0,0-2.267,6.108,4.885,4.885,0,0,0,4.394,3.267,3.83,3.83,0,0,0,1.382-.256Zm-3.9-3.731a2.645,2.645,0,0,1,1.116-3.516,1.861,1.861,0,0,1,.671-.123,2.262,2.262,0,0,1,1.079.29,3.221,3.221,0,0,1,1.434,1.693,3.219,3.219,0,0,1,.072,2.217,2.074,2.074,0,0,1-1.188,1.3h0a2.644,2.644,0,0,1-3.183-1.86Zm0,0"
                                                                    transform="translate(0 -92.285)" />
                                                                <path id="Path_31" data-name="Path 31"
                                                                    class="cls-1"
                                                                    d="M129.439,11.454c2.771,0,5.026-2.569,5.026-5.726S132.21,0,129.439,0s-5.025,2.569-5.025,5.727S126.668,11.454,129.439,11.454Zm0-9.448c1.665,0,3.02,1.67,3.02,3.722s-1.355,3.72-3.02,3.72-3.02-1.669-3.02-3.72,1.355-3.722,3.02-3.722Zm0,0"
                                                                    transform="translate(-116.1 0)" />
                                                                <path id="Path_32" data-name="Path 32"
                                                                    class="cls-1"
                                                                    d="M287.222,50.424h0a4.1,4.1,0,0,0,1.294.209,5.209,5.209,0,0,0,4.742-3.732,5.616,5.616,0,0,0-.08-3.874,4.248,4.248,0,0,0-6.3-2.093A5.616,5.616,0,0,0,284.5,43.99c-.912,2.745.31,5.632,2.725,6.435Zm-.822-5.8a3.612,3.612,0,0,1,1.519-1.972,2.247,2.247,0,0,1,3.4,1.13,3.611,3.611,0,0,1,.036,2.489c-.564,1.7-2.134,2.706-3.5,2.252S285.836,46.318,286.4,44.622Zm0,0"
                                                                    transform="translate(-265.203 -37.564)" />
                                                                <path id="Path_33" data-name="Path 33"
                                                                    class="cls-1"
                                                                    d="M384.162,171.815h0a4.925,4.925,0,0,0-5.814,7.855,3.929,3.929,0,0,0,2.36.762,5.081,5.081,0,0,0,4.013-2.125A4.632,4.632,0,0,0,384.162,171.815Zm-1.054,5.3a2.362,2.362,0,1,1-3.706-2.74,3.079,3.079,0,0,1,2.388-1.319,1.959,1.959,0,0,1,1.179.375A2.646,2.646,0,0,1,383.108,177.112Zm0,0"
                                                                    transform="translate(-351.56 -159.623)" />
                                                            </g>
                                                        </svg>
                                                </center>
                                                <p class="card-text">
                                                    <center>
                                                        <p>
                                                            <b>Lorem Ipsum <br>Dolor Sit Amet <br></b>
                                                            Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,sed
                                                            <br>do
                                                            eiusmod tempor incididunt
                                                        </p>
                                                    </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </main>
        </div>

        <main class="mb-4">
            <div class="container px-2 px-lg-10">
                <div class="row gx-4 gx-lg-5 justify-content-left">
                    <div class="col-md-10 col-lg-10 col-xl-7">
                        <font color="MediumSeaGreen">
                            <b>BERITA</b>
                        </font>
                        <h1>Baca Cerita Terbaru Kami Dalam</h1>
                        <h1>Tropisianimal</h1>
                    </div>
                </div>
            </div><br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem;">
                            <div style="background-color: rgb(245, 238, 238)">
                                <img class="card-img-top"
                                    src="{{ asset('asset/img/x1/rick-l-037fCBgZB10-unsplash.png') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center><b>Apa Kabar Kebun Binatang <br>Saat Wabah Covid 19?</b></center>
                                        <center>
                                            <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,
                                                sed do</font>
                                        </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem;">
                            <div style="background-color: rgb(245, 238, 238)">
                                <img class="card-img-top"
                                    src="{{ asset('asset/img/x1/hans-veth-o33FMDaXJS8-unsplash.png') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center><b>Apa Kabar Kebun Binatang <br>Saat Wabah Covid 19?</b></center>
                                        <center>
                                            <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,
                                                sed do</font>
                                        </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem;">
                            <div style="background-color: rgb(245, 238, 238)">
                                <img class="card-img-top"
                                    src="{{ asset('asset/img/x1/ronald-gijezen-7h06P9UKhYY-unsplash.png') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center><b>Apa Kabar Kebun Binatang <br>Saat Wabah Covid 19?</b></center>
                                        <center>
                                            <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,
                                                sed do</font>
                                        </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem;">
                            <div style="background-color: rgb(245, 238, 238)">
                                <img class="card-img-top"
                                    src="{{ asset('asset/img/x1/smit-patel-dGMcpbzcq1I-unsplash.png') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center><b>Apa Kabar Kebun Binatang <br>Saat Wabah Covid 19?</b></center>
                                        <center>
                                            <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,
                                                sed do</font>
                                        </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem;">
                            <div style="background-color: rgb(245, 238, 238)">
                                <img class="card-img-top" src="{{ asset('asset/img/x1/TERUMBU-KARANG (1).png') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center><b>Apa Kabar Kebun Binatang <br>Saat Wabah Covid 19?</b></center>
                                        <center>
                                            <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,
                                                sed do</font>
                                        </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" style="width: 25rem;">
                            <div style="background-color: rgb(245, 238, 238)">
                                <img class="card-img-top"
                                    src="{{ asset('asset/img/x1/vladimir-kudinov-vmlJcey6HEU-unsplash.png') }}"
                                    alt="Card image cap">
                                <div class="card-body">
                                    <p class="card-text">
                                        <center><b>Apa Kabar Kebun Binatang <br>Saat Wabah Covid 19?</b></center>
                                        <center>
                                            <font color="grey">Lorem ipsum dolor sit amet,<br>consectur adipiscing elit,
                                                sed do</font>
                                        </center>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <main class="mb-4">
            <div class="container px-2 px-lg-3">
                <div class="row justify-content-left">
                    <div class="col-xl-12">
                        <font color="MediumSeaGreen">
                            <a href="{{ url('galery') }}" style="text-decoration: none; color: green;">
                                <b>Galeri</b>
                            </a>

                        </font>
                        <h1>
                            <b>
                                Lihat Lebih Banyak Hewan Tropis <br>
                                Pada Galeri Kami
                            </b>
                        </h1>
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
                                                    margin: 5px 1150px -950px;
                                                    position: relative;
                                                    top: 100%;
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
                                                    margin: 5px 20px -900px;
                                                    position: relative;
                                                    top: 50%;
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
                                                <td><img src="{{ asset('asset/img/x1/kyaw-tun-_YIX48_4hgs-unsplash.png') }}"
                                                        style="height: 300px" ; width="320px"></td>
                                                <td><img src="{{ asset('asset/img/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') }}"
                                                        style="height: 300px" ; width="320px"></td>
                                                <td><img src="{{ asset('asset/img/x1/oscar-merchant-sCt1TLNIxFw-unsplash.png') }}"
                                                        style="height: 18.7rem" ; width="320px"></td>
                                                <td><img src="{{ asset('asset/img/x1/david-clode-0lwa8Dprrzs-unsplash.png') }}"
                                                        style="height: 300px" ; width="320px"></td>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

        </main>
    @endsection
