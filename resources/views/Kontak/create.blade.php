@extends('admin.kontak')

@section('content')
    <title>Halaman Tambah Data Kontak</title>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <h1>Tambah Data Kontak</h1>

                    <div class="card-header">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>

                    <div class="card-body">
                        <form action="{{ route('Kontak.store') }}" method="post" accept="">
                            @csrf

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Deskripsi</label>
                                    <input type="text" value="{{ old('des') }}" class=" form-control" name="des"
                                        placeholder="Masukan nomor telepon" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Subject</label>
                                    <input type="text" value="{{ old('sub') }}" class=" form-control" name="sub"
                                        placeholder="Masukan Subject" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" value="{{ old('nama') }}" class="form-control" name="nama"
                                        placeholder="Masukan Nama" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="">Masukan Email</label>
                                    <input type="email" value="{{ old('email') }}" class=" form-control" name="email"
                                        placeholder="Masukan Alamat Email" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-danger btn-block">Simpan Data</button>
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
