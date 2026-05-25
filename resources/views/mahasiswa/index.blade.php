@extends("main")

@section('title',"Mahasiswa")

@section("title1","List Mahasiswa")

@section('content')
<table class= "table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>NPM</th>
            <th>Foto</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
         @foreach ($mahasiswa as $key => $mhs)
        <tr>
            <td>{{$mhs->nama}}</td>
            <td>{{$mhs->npm}}</td>
            <td>@if ($mhs->foto)
                <img src="{{ asset("storage/fotos/".$mhs->foto) }}" alt="Foto" width="100">
                @else
                <p>Foto Tidak ada</p>
                @endif
            </td>
            <td>{{$mhs->prodi->Nama_Prodi ?? "-"}}</td>
            <td>
                <form method="POST" action="{{ route('mahasiswa.destroy', $mhs->id) }}">
                    @csrf
                <input name="_method" type="hidden" value="DELETE">
                <a href="{{ route("mahasiswa.edit",$mhs->id) }}" class="btn btn-warning btn-rounded bi bi-pencil-square"> Edit</a>
                <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm bi bi-trash3"
                    data-toggle="tooltip" title='Delete'
                    data-nama='{{$mhs->nama}}'> Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route("mahasiswa.create") }}" class= "btn btn-primary mt-2">Tambah</a>
@endsection

@section("footer","©M.Wanhar - 2529250056")
