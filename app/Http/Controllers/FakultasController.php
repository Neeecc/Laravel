<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Termwind\Components\Dd;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = fakultas::all(); //select * from fakultas
        // dd($result); //dump data
        return view('fakultas.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("fakultas.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validasi input data
        $input = $request ->validate([
            'nama_fakultas' => 'required|unique:fakultas', 'singkatan' => 'required'
        ]);
        //simpan ke tabel fakultas
        fakultas::create($input);
        //redirect ke route fakultas.index
        return redirect()->route("fakultas.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(fakultas $fakultas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($fakultas)
    {
        $fakultas = fakultas::find($fakultas);
        return view ("fakultas.edit", compact("fakultas"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $fakultas)
    {
        //validasi input data
        $input = $request ->validate([
            'nama_fakultas' => 'required|unique:fakultas,nama_fakultas,'. $fakultas, 'singkatan' => 'required'
        ]);
        //simpan ke tabel fakultas
        fakultas::where('id',$fakultas)->update($input);
        //redirect ke route fakultas.index
        return redirect()->route("fakultas.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($fakultas)
    {
        //cari data berdasarkan id
        $fakultas = fakultas::find($fakultas, "id");
        // dd($fakultas);
        $fakultas -> delete(); 
        return redirect()-> route("fakultas.index");
    }
}
