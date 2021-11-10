<?php

namespace App\Http\Controllers;

use App\Orangtua;
use Illuminate\Http\Request;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/admin/orangtua.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $register = new Register;
        $register->nisn = $request->nisn;
        $register->nama_ayah = $request->nik;
        $register->nama_ibu = $request->nama;
        $register->pekerjaan_ibu=$request->tmp_lhr;
        $register->pekerjaan_ayah=$request->tgl_lhr;
        $register->nama_wali=$request->jk;
        $register->pekerjaan_wali=$request->sekolah;
        $register->alamat_orangtua=$request->alamat_orangtua;
        $register->kontak=$request->kontak;
        
        

        $register->save();
        return $register;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function show(Orangtua $orangtua)
    {
        return view('layouts/admin/orangtua.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function edit(Orangtua $orangtua)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orangtua $orangtua)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orangtua  $orangtua
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orangtua $orangtua)
    {
        //
    }
}
