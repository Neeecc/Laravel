@extends("main")

@section("title","Tambah Periode")

@section("title1","Tambahkan Periode")

@section("content")
    <form action="{{ route("periode.store") }}" method="POST">
        <div class="form-group mb-2">
            <label for="">Tahun Akademik</label>
            <input type="text" name="tahun_akademik" class="form-control" value="{{ old("Tahun_akademik") }}">
        </div>

        @error("tahun_akademik")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        
        <div class="form-group mt-2 mb-2">
            <label for="">Semester</label>
            <input type="text" name="semester" class="form-control" value="{{ old("semester") }}">
        </div>

        @error("semester")
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <button type="submit" class="btn btn-primary mt-2">Simpan</button>

    </form>
@endsection
