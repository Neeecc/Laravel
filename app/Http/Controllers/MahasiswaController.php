<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Prodi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::with("prodi")->get();
        return view("mahasiswa.index", compact("mahasiswa")); //kirim data ke view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $prodi = Prodi::all();
        return view ("mahasiswa.create", compact("prodi"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'nama' => "required", 
            "npm" => "required|unique:mahasiswas,npm",
            "foto" =>  "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
            "prodi_id" => "required|exists:prodis,id"
        ]);

        if($request->hasFile("foto")){
            $foto = $request->file("foto");
            $nama_foto = time(). "_". $foto->getClientOriginalName();
            $foto->storeAs("fotos",$nama_foto,"public");
        }else{
            $nama_foto = null;
        }
        $input['foto'] = $nama_foto;
        Mahasiswa::create($input);
        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($mahasiswa)
    {
        $prodi = Prodi::all();
        $mahasiswa = Mahasiswa::find($mahasiswa);
        return view ("mahasiswa.edit",compact("mahasiswa","prodi"));    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $mahasiswa)
    {
        $input = $request -> validate([
            'nama' => "required", 
            "npm" => "required|unique:mahasiswas,npm,". $mahasiswa,
            "foto" =>  "nullable|image|mimes:jpeg,png,jpg,gif|max:2048",
            "prodi_id" => "required|exists:prodis,id"
        ]);
        Mahasiswa::where("id",$mahasiswa)->update($input);
        return redirect()->route("mahasiswa.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
