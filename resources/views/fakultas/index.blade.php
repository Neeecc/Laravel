@extends("main")

@section('title',"Fakultas")

@section("title1","List Fakultas")

@section("footer","©M.Wanhar - 2529250056")

@section('content')
    <ul>
        @foreach ($result as $item)
        <li>{{  $item->nama_fakultas  }} - {{ $item->singkatan }} <br></li>
        @endforeach
    </ul>
@endsection