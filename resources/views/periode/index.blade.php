@extends("main")

@section("title","Tahun Periode")

@section("title1","List Tahun Periode")


@section("content")
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tahun Akademik</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $key => $periode)
                <tr>
                    <td>{{$periode->tahun_akademik}}</td>
                    <td>{{$periode->semester}}</td>
                    <td>
                        <form method="POST" action="{{ route('periode.destroy', $periode->id) }}">
                            @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <a href="{{ route("periode.edit",$periode->id) }}" class="btn btn-warning btn-rounded">Edit</a>
                        <button type="submit" class="btn btn-xs btn-danger btn-rounded show_confirm"
                            data-toggle="tooltip" title='Delete'
                            data-nama='{{ $periode->tahun_akademik }}'>Hapus</button>
                         </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<a href="{{ route("periode.create") }}" class= "btn btn-primary mt-2">Tambah</a>
@endsection