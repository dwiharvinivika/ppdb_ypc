<?php

namespace App\Http\Controllers;

use App\Kerjasama;
use Illuminate\Http\Request;

class KerjasamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$kerjasama = Kerjasama::all();
        //return view('layouts.kerjasama', compact('kerjasama'));
        //return view('layouts.admin/kerjasama.kerjasama', compact('kerjasama'));
        return view('Kegiatan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kerjasama.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_perusahaan' => 'required',
            'keterangan' => 'required',

        ]);
        Kerjasama::create($request->all());
        return redirect('admin/kerjasama')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function show(Kerjasama $kerjasama)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function edit(Kerjasama $kerjasama)
    {
        return view('admin/kerjasama.edit', compact('kerjasama'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kerjasama $kerjasama)
    {
        Kerjasama::where('id', $kerjasama->id)
                ->update([
                    'nama_perusahaan' => $request->nama_perusahaan,
                    'keterangan' => $request->keterangan
                ]);
                return redirect('admin/kerjasama')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kerjasama  $kerjasama
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerjasama $kerjasama)
    {
        Kerjasama::destroy($kerjasama->id);
        return redirect('admin/kerjasama')->with('status','Data berhasil dihapus');
    }
}
