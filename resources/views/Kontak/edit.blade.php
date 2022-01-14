@extends('admin.kontak')

@section('content')
    <title>Halaman Edit Kontak</title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <h1>Edit Kontak</h1>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('kontak.update', $kontak->id) }}" method="POST" accept="">
                            @csrf
                            @method('PUT')

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Deskripsi</label>
                                    <input type="text" value="{{ $kontak->deskripsi }}" class=" form-control"
                                        name="deskripsi" placeholder="Masukan Deskripsi" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Subject</label>
                                    <input type="text" value="{{ $kontak->subject }}" class=" form-control"
                                        name="subject" placeholder="Masukan Subject" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Nama</label>
                                    <input type="text" value="{{ $kontak->nama }}" class=" form-control" name="nama"
                                        placeholder="Masukan Nama" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Email</label>
                                    <input type="email" value="{{ $kontak->email }}" class="form-control" name="email"
                                        placeholder="Masukan Alamat Email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-danger btn-block">Ubah Data</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <footer class="main-footer">
                        <strong>
                            {{--  --}}
                            </a>
                        </strong>
                    </footer>

                </div>
            </div>
        </div>
    </div>
@endsection
