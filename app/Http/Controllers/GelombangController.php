<?php

namespace App\Http\Controllers;

use App\Gelombang;
use Illuminate\Http\Request;

class GelombangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gelombang = Gelombang::all();
        // return view('jadwal', compact('gelombang'));
        return view('admin/gelombang.gelombang', compact('gelombang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/admin/gelombang.create');
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
            'tahun_ajaran_id' => 'required',
            'gelombang' => 'required',
            'pendaftaran_awal' => 'required|date',
            'pendaftaran_akhir' => 'required|date',
            'pengumuman' => 'required',
            'daftar_ulang' => 'required'
        ]);
        Gelombang::create($validate);
        return redirect('admin/gelombang')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gelombang  $gelombang
     * @return \Illuminate\Http\Response
     */
    public function show(Gelombang $gelombang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gelombang  $gelombang
     * @return \Illuminate\Http\Response
     */
    public function edit(Gelombang $gelombang)
    {
        return view('layouts/admin/gelombang.edit', compact('gelombang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gelombang  $gelombang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gelombang $gelombang)
    {
        Gelombang::where('id', $gelombang->id)
                ->update([
                    'gelombang' => $request->gelombang,
                    'pendaftaran' => $request->pendaftaran,
                    'pengumuman' => $request->pengumuman,
                    'daftar_ulang' => $request->daftar_ulang
                ]);
                return redirect('admin/gelombang')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gelombang  $gelombang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gelombang $gelombang)
    {
        Gelombang::destroy($gelombang->id);
        return redirect('admin/gelombang')->with('status','Data berhasil dihapus');
    }
}
