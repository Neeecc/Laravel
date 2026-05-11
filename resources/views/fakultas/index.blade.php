@extends("main")

@section('title',"Fakultas")

@section("title1","List Fakultas")

@section('content')
<table class= "table table-bordered">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Singkatan</th>
        </tr>
    </thead>
    <tbody>
         @foreach ($result as $key => $fakultas)
        <tr>
            <td>{{$fakultas->nama_fakultas}}</td>
            <td>{{$fakultas->singkatan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route("fakultas.create") }}" class= "btn btn-primary mt-2">Tambah</a>
@endsection

@section("footer","©M.Wanhar - 2529250056")
