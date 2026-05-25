@extends("main")

@section("title","Tambah Mahasiswa")

@section("title1","Tambahkan Mahasiswa")

@section("content")
    <form action="{{ route("mahasiswa.store") }}" method="POST"
    method="post" enctype = "multipart/form-data">
        <div class="form-group mb-2">
            <label for="">Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old("nama") }}">
        </div>

        @error("nama")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        
        <div class="form-group mt-2 mb-2">
            <label for="">NPM</label>
            <input type="text" name="npm" class="form-control" value="{{ old("NPM") }}">
        </div>

        @error("npm")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        <div class="form-group mt-2 mb-2">
            <label for="">Foto</label>
            <input type="file" name="foto" class="form-control" value="{{ old("foto") }}">
        </div>
        

        <div class="form-group mt-2 mb-2">
            <label for="">Program Studi</label>
            <select name="prodi_id" class="form-control">    
                <option value="">Pilih Prodi</option>
                @foreach ($prodi as $row)
                <option value="{{ $row->id }}" {{ old("prodi") == $row->id ? "selected" : '' }}>
                    {{ $row->Nama_Prodi }}
                </option>
                @endforeach
            </select>
        </div>

        @error("prodi_id")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <button type="submit" class="btn btn-primary mt-2">Simpan</button>

    </form>
@endsection
