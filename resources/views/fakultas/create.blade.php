@extends("main")

@section("title","Tambah Fakultas")

@section("title1","Tambahkan Fakultas")

@section("content")
    <form action="{{ route("fakultas.store") }}" method="POST">
        <div class="form-group mb-2">
            <label for="">Nama Fakultas</label>
            <input type="text" name="nama_fakultas" class="form-control" value="{{ old("nama_fakultas") }}">
        </div>

        @error("nama_fakultas")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        
        <div class="form-group mt-2 mb-2">
            <label for="">Singkatan</label>
            <input type="text" name="singkatan" class="form-control" value="{{ old("singkatan") }}">
        </div>

        @error("singkatan")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <button type="submit" class="btn btn-primary mt-2">Simpan</button>

    </form>
@endsection
