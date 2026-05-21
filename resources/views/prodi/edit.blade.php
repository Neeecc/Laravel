@extends("main")

@section("title","Tambah Program studi")

@section("title1","Tambahkan Program studi")

@section("content")
    <form action="{{ route("prodi.update",$prodi->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="form-group mb-2">
            <label for="">Nama Program Studi</label>
            <input type="text" name="Nama_Prodi" class="form-control" value="{{ old("Nama_Prodi") ?? $prodi->Nama_Prodi }}">
        </div>

        @error("Nama_Prodi")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        
        <div class="form-group mt-2 mb-2">
            <label for="">Singkatan</label>
            <input type="text" name="Singkatan" class="form-control" value="{{ old("Singkatan") ?? $prodi->Singkatan }}">
        </div>

        @error("Singkatan")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <div class="form-group mt-2 mb-2">
            <label for="">Nama Kaprodi</label>
            <input type="text" name="Kaprodi" class="form-control" value="{{ old("Kaprodi") ?? $prodi->Kaprodi }}">
        </div>

        @error("Kaprodi")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        
        <div class="form-group mt-2 mb-2">
            <label for="">Fakultas</label>
            <select name="fakultas_id" class="form-control">    
                <option value="">Pilih Fakultas</option>
                @foreach ($fakultas as $row)
                <option value="{{ $row->id }}" {{ old("fakultas_id") ?? $row->id ? "selected" : '' }}>
                    {{ $row->nama_fakultas }}
                </option>
                @endforeach
            </select>
        </div>

        @error("fakultas_id")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <button type="submit" class="btn btn-primary mt-2">Simpan</button>

    </form>
@endsection
