<?php

namespace App\Http\Controllers;

use App\Peserta;
use App\Register;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peserta = Register::whereHas('peserta')->get();
        return view('admin.calon_siswa', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(Peserta $peserta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit(Peserta $peserta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peserta $peserta)
    {
        $validate = $request->validate([
            'daftar_ulang' => 'sometimes|boolean',
            'program' => 'sometimes|string'
        ]);
        $peserta->update($validate);
        $title = $request->has('daftar_ulang')?'Daftar Ulang berhasil diubah':'Program berhasil dipilih';
        return response()->json($title);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peserta $peserta)
    {
        //
    }

    public function siswa()
    {
        $jurusan = ["RPL", 'TKJ', 'MM', 'TKRO', 'TBSM', 'TEKLIN', 'DPIB'];
        $peserta = Register::whereHas('peserta')->get();
        return view('admin.siswa', compact('peserta', 'jurusan'));
    }
}
