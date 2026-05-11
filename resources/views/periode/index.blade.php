@extends("main")

@section("title","Tahun Periode")

@section("title1","List Tahun Periode")


@section("content")
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tahun Akademik</th>
                <th>Singkatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $key => $periode)
                <tr>
                    <td>{{$periode->tahun_akademik}}</td>
                    <td>{{$periode->semester}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
<a href="{{ route("periode.create") }}" class= "btn btn-primary mt-2">Tambah</a>
@endsection