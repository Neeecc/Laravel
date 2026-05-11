<?php

namespace App\Http\Controllers;

use App\Models\periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $result = Periode::all(); //select * from fakultas
        // dd($result); //dump data
        return view('periode.index', compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ("periode.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        //validasi input data
        $input = $request ->validate([
            'tahun_akademik' => 'required', 'semester' => 'required'
        ]);
        //simpan ke tabel periode
        Periode::create($input);
        //redirect ke route fakultas.index
        return redirect()->route("periode.index");
    }

    /** 
     * Display the specified resource.
     */
    public function show(periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(periode $periode)
    {
        //
    }
}
