@extends('admin.kontak')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <center>
                        <h3>Data Kontak {{ $kontak->nama }}</h3>
                    </center>

                    <div class="card-body">
                        <div class="col-lg-12">
                            <label for="deskripsi">
                                Deskripsi :
                            </label>
                            {{ $kontak->deskripsi }}
                            <br>
                            <label for="subject">
                                Subject :
                            </label>
                            {{ $kontak->subject }}
                            <br>
                            <label for="nama">
                                Nama :
                            </label>
                            {{ $kontak->nama }}
                            <br>
                            <label for="email">
                                Email :
                            </label>
                            {{ $kontak->email }}
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
