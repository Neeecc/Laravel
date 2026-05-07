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
    </tr>
    
    @foreach ($prodis as $key => $prodi)
    <tr>
        <td>{{$key + 1}}</td>
        <td>{{$prodi->Nama_Prodi}}</td>
        <td>{{$prodi->Singkatan}}</td>
        <td>{{$prodi->Kaprodi}}</td>
        <td>{{$prodi->fakultas->nama_fakultas ?? "-"}}</td>
        <td>{{$prodi->fakultas->singkatan ?? "-" }}</td>
    </tr>      
    @endforeach
</table>
@endsection