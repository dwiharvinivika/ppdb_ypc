<?php

namespace App\Http\Controllers;

use App\Models\MitraKerja;
use Illuminate\Http\Request;

class MitraKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mitra_kerja = MitraKerja::all();
        return view('admin.mitra-kerja.index', compact('mitra_kerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mitra-kerja.create');
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
            'gambar' => 'required|image',
            'mitra_kerja' => 'required',
            'keterangan' => 'required'
        ]);
        $gambar = $request->file('gambar');
        $name = 'mitra-kerja-'.uniqid().'.'.$gambar->getClientOriginalExtension();
        $gambar->move('img/mitra-kerja/', $name);
        $validate['gambar'] = $name;
        MitraKerja::create($validate);
        return redirect('admin/mitra-kerja')->with('success', 'Mitra Kerja berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MitraKerja  $mitraKerja
     * @return \Illuminate\Http\Response
     */
    public function show(MitraKerja $mitraKerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MitraKerja  $mitraKerja
     * @return \Illuminate\Http\Response
     */
    public function edit(MitraKerja $mitraKerja)
    {
        return view('admin.mitra-kerja.edit', compact('mitraKerja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MitraKerja  $mitraKerja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MitraKerja $mitraKerja)
    {
        $validate = $request->validate([
            'gambar' => 'sometimes|image',
            'mitra_kerja' => 'required',
            'keterangan' => 'required'
        ]);
        if($request->hasFile('gambar')){
            if(file_exists(public_path('img/mitra-kerja/'.$mitraKerja->gambar))){
                unlink(public_path('img/mitra-kerja/'.$mitraKerja->gambar));
            }
            $gambar = $request->file('gambar');
            $name = 'mitra-kerja-'.uniqid().'.'.$gambar->getClientOriginalExtension();
            $gambar->move('img/mitra-kerja/', $name);
            $validate['gambar'] = $name;
        }
        $mitraKerja->update($validate);
        return redirect('admin/mitra-kerja')->with('success', 'Mitra Kerja berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MitraKerja  $mitraKerja
     * @return \Illuminate\Http\Response
     */
    public function destroy(MitraKerja $mitraKerja)
    {
        if(file_exists(public_path('img/mitra-kerja/'.$mitraKerja->gambar))){
            unlink(public_path('img/mitra-kerja/'.$mitraKerja->gambar));
        }
        $mitraKerja->delete();
        return back()->with('success', 'Mitra Kerja berhasil dihapus');
    }

    public function kerjasama()
    {
        $kerjasama = MitraKerja::all();
        return view('kerjasama', compact('kerjasama'));
    }
}
