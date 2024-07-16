@extends('back.index')

@section('konten')

    <h1>Tambah Informasi</h1>
    <div class="card my-2 p-4">
        <div class="card-body">
            <form method="post" action="{{ url('informasi/'.$informasi->id) }}">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="mb-2 col-md-6">
                        <label for="">Judul Berita</label>
                        <input type="text" name="judul" class="form-control" value="{{ $informasi->judul }}" required>
                    </div>
                    <div class="mb-2 col-md-6">
                        <label for="">Sampul</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <div class="mb-2 col-md-12">
                        <label for="">Konten</label>
                        <textarea name="konten" id="" cols="30" rows="3" class="form-control">{{ $informasi->konten }}</textarea>
                    </div>
                    <div class="mb-2 col-md-12">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
