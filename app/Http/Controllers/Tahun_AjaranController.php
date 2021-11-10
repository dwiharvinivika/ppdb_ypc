<?php

namespace App\Http\Controllers;

use App\Tahun_Ajaran;
use Illuminate\Http\Request;

class Tahun_AjaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tahun_ajaran = Tahun_Ajaran::all();
        return view('layouts.admin/tahun_ajaran.tahun_ajaran', compact('tahun_ajaran'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/admin/tahun_ajaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'tahun_ajaran' => 'required',
            'status' => 'required'
        ]);
        Tahun_Ajaran::create($validate);
        return redirect('admin/tahun_ajaran')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tahun_Ajaran  $tahun_Ajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Tahun_Ajaran $tahun_Ajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tahun_Ajaran  $tahun_Ajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Tahun_Ajaran $tahun_Ajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tahun_Ajaran  $tahun_Ajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tahun_Ajaran $tahun_Ajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tahun_Ajaran  $tahun_Ajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tahun_Ajaran $tahun_Ajaran)
    {
        //
    }
}
