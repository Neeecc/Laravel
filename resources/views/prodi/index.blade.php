<h1>Data Prodi</h1>

<table border="1" cellpading="10">
    <tr>
       <th>No</th>
       <th>Nama Prodi</th>
       <th>Singaktan</th>
       <th>Kaprodi</th>
       <th>Fakultas</th>
    </tr>

    @foreach ($prodis as $key => $prodi)
        <tr>
            <td>{{$key + 1}}</td>
            <td>{{$prodi->Nama_Prodi}}</td>
            <td>{{$prodi->Singkatan}}</td>
            <td>{{$prodi->Kaprodi}}</td>
            <td>{{$prodi->fakultas->nama_fakult as ?? "-"}}</td>
        </tr>      
    @endforeach
       

</table>