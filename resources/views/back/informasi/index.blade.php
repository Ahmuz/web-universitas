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
                        <th>Judul</th>
                        <th>Tanggal</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($informasi as $index => $value)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $value->judul }}</td>
                        <td>{{ $value->created_at }}</td>
                        <td class="">
                            <div class="d-flex">
                                <a href="{{ route('informasi.edit', $value->id) }}" class="btn btn-primary ">Edit</a>
                                <form action="{{ url('informasi/' . $value->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger mx-2">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
