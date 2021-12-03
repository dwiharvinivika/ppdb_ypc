<?php

namespace App\Http\Controllers;

use App\Models\Tahun_Ajaran;
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
        return view('admin.tahun_ajaran.index', compact('tahun_ajaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tahun_ajaran.create');
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
            'tahun_ajaran_awal' => 'required',
            'tahun_ajaran_akhir' => 'required',
            'status' => 'required'
        ]);
        Tahun_Ajaran::create($validate);
        return redirect('admin/tahun_ajaran')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tahun_Ajaran  $tahun_ajaran
     * @return \Illuminate\Http\Response
     */
    public function show(Tahun_Ajaran $tahun_ajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tahun_Ajaran  $tahun_ajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Tahun_Ajaran $tahun_ajaran)
    {
        return view('admin.tahun_ajaran.edit', compact('tahun_ajaran'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tahun_Ajaran  $tahun_ajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tahun_Ajaran $tahun_ajaran)
    {
        $validate = $request->validate([
            'tahun_ajaran_awal' => 'required',
            'tahun_ajaran_akhir' => 'required',
            'status' => 'required'
        ]);
        $tahun_ajaran->update($validate);
        return redirect('admin/tahun_ajaran')->with('success', 'Tahun Ajaran berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tahun_Ajaran  $tahun_ajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tahun_Ajaran $tahun_ajaran)
    {
        $tahun_ajaran->delete();
        return back()->with('success', 'Tahun Ajaran Berhasil dihapus');
    }

    public function set_aktif(Request $request)
    {
        foreach(Tahun_Ajaran::get() as $thn){
            $thn->update(['status'=>'Tidak Aktif']);
        }
        $tahun_ajaran = Tahun_Ajaran::find($request->id);
        $tahun_ajaran->update(['status'=>'Aktif']);
        return response()->json($tahun_ajaran->tahun_ajaran);
    }
}
