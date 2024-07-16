@extends('back.index')

@section('konten')
    <h1>{{ $judul ?? '' }}</h1>
    <a href="{{ route('informasi.create') }}" class="btn btn-success">Tambah</a>
    <div class="card my-4 p-4">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>Telepon</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pendaftar as $index => $value)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $value->nama }}</td>
                        <td>{{ $value->tanggal_lahir }}</td>
                        <td>{{ $value->alamat }}</td>
                        <td>{{ $value->telp }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
