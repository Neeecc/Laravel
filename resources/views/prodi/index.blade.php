@extends("main")

@section('title',"Program studi")

@section("title1","List Program Studi")

@section("footer","M.Wanhar - 2529250056")

@section('content')
<table class= "table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singaktan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
        <th>Singkatan</th>
        <th>Aksi</th>
    </tr>
    
    @foreach ($prodis as $key => $prodi)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$prodi->Nama_Prodi}}</td>
        <td>{{$prodi->Singkatan}}</td>
        <td>{{$prodi->Kaprodi}}</td>
        <td>{{$prodi->fakultas->nama_fakultas ?? "-"}}</td>
        <td>{{$prodi->fakultas->singkatan ?? "-" }}</td>
        <td>
            <form method="POST" action="{{ route('prodi.destroy', $prodi->id) }}">
                @csrf
            <input name="_method" type="hidden" value="DELETE">
            <a href="{{ route("prodi.edit",$prodi->id) }}" class="btn btn-warning btn-rounded">Edit</a>
            <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                data-toggle="tooltip" title='Delete'
             data-nama='{{ $prodi->Nama_Prodi}}'>Hapus</button>
            </form>
        </td>
    </tr>      
    @endforeach
</table>
<a href="{{ route('prodi.create') }}" class="btn btn-primary mt-2">Tambah</a>
@endsection