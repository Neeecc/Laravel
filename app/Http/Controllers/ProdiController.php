<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prodis = Prodi::with("fakultas")->get();
        return view('prodi.index', compact("prodis"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fakultas = fakultas::all();
        return view ('prodi.create', compact('fakultas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request ->  validate([
            "Nama_Prodi" => 'required|unique:prodis' , 
            "Singkatan" => "required", 
            "Kaprodi" => "required",
            "fakultas_id" => "required"
        ]);
        Prodi::create($input);
        return redirect()->route("prodi.index");    
    }

    /**
     * Display the specified resource.
     */
    public function show(Prodi $prodi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prodi $prodi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prodi $prodi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prodi $prodi)
    {
        //
    }
}
