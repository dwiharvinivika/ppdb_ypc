<?php

namespace App\Http\Controllers;

use App\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = Kegiatan::all();
        //return view('layouts.prosedur', compact('prosedur'));
       // return view('layouts.admin.jurusan', compact('jurusan'));
       return view('layouts.admin/kegiatan.kegiatan', compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/admin/kegiatan.create');
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
            'gambar' => 'mimes:jpg,gif,svg,png',
            'kegiatan' => 'required',
            'gambar' => 'required',
            'keterangan' => 'required'
          
        ]);

        $imgName = $request->gambar->getClientOriginalName() . '-' . time()
                                . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image/kegiatan'), $imgName);
        Kegiatan::create([
            'kegiatan' => $request->kegiatan,
            'gambar' => $imgName,
            'keterangan' => $request->keterangan
        ]);
            
        return redirect('admin/kegiatan')->with('status','Data berhasil ditambahkan'); 
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        return view('layouts/admin/kegiatan.edit', compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        Kegiatan::where('id', $kegiatan->id)
        ->update([
            'kegiatan' => $request->kegiatan,
            'gambar' => $request->gambar,
            'keterangan' => $request->keterangan
        ]);
        return redirect('admin/kegiatan')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        Kegiatan::destroy($kegiatan->id);
        return redirect('admin/kegiatan')->with('status','Data berhasil dihapus');
    }
}
