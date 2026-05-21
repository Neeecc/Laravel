@extends("main")

@section("title","edit Fakultas")

@section("title1","edit Fakultas")

@section("content")
    <form action="{{ route("fakultas.update", $fakultas->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group mb-2">
            <label for="">Nama Fakultas</label>
            <input type="text" name="nama_fakultas" class="form-control" value="{{ old("nama_fakultas") ?? $fakultas->nama_fakultas}}">
        </div>

        @error("nama_fakultas")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        
        <div class="form-group mt-2 mb-2">
            <label for="">Singkatan</label>
            <input type="text" name="singkatan" class="form-control" value="{{ old("singkatan") ?? $fakultas ->singkatan }}">
        </div>

        @error("singkatan")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <button type="submit" class="btn btn-primary mt-2">Simpan</button>

    </form>
@endsection
