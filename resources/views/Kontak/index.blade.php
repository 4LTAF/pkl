@extends('admin.kontak')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">

                    <center>
                        <h3>Halaman Kontak</h3>
                    </center>

                    <div class="card-body">

                        <div class="table-responsive">
                            <a href="{{ route('Kontak.create') }}" class="btn btn-success">Tambah Data</a>
                            <table class="table">
                                <tr>
                                    <th>No.</th>
                                    <th>Deskripsi</th>
                                    <th>Subject</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach ($contact as $data)
                                    <tr>
                                        <td>
                                            {{ $no++ }}
                                        </td>
                                        <td>
                                            {{ $data->deskripsi }}
                                        </td>
                                        <td>
                                            {{ $data->subject }}
                                        </td>
                                        <td>
                                            {{ $data->nama }}
                                        </td>
                                        <td>
                                            {{ $data->email }}
                                        </td>
                                        <td>
                                            <a href="{{ route('pengarang.show', $data->id) }}"
                                                class="btn btn-warning">Show</a>|
                                            <a href="{{ route('pengarang.edit', $data->id) }}"
                                                class="btn btn-info">Edit</a>|
                                            <form action="{{ route('pengarang.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
