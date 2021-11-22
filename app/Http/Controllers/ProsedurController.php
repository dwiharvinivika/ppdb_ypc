<?php

namespace App\Http\Controllers;

use App\Models\Prosedur;
use Illuminate\Http\Request;

class ProsedurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prosedur = Prosedur::all();
        return view('prosedur', compact('prosedur'));
       // return view('admin.jurusan', compact('jurusan'));
       //return view('admin/prosedur.prosedur', compact('prosedur'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/admin/prosedur.create');
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
            'prosedur' => 'required',
            'gambar' => 'required'

        ]);

        $imgName = $request->gambar->getClientOriginalName() . '-' . time()
                                . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image/prosedur'), $imgName);
        Prosedur::create([
            'prosedur' => $request->prosedur,
            'gambar' => $imgName
        ]);

        return redirect('admin/prosedur')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prosedur  $prosedur
     * @return \Illuminate\Http\Response
     */
    public function show(Prosedur $prosedur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prosedur  $prosedur
     * @return \Illuminate\Http\Response
     */
    public function edit(Prosedur $prosedur)
    {
        return view('layouts/admin/prosedur.edit', compact('prosedur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prosedur  $prosedur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prosedur $prosedur)
    {
        Prosedur::where('id', $prosedur->id)
                ->update([
                    'prosedur' => $request->prosedur,
                    'gambar' => $request->gambar
                ]);
                return redirect('admin/prosedur')->with('status','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prosedur  $prosedur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prosedur $prosedur)
    {
        Prosedur::destroy($prosedur->id);
        return redirect('admin/prosedur')->with('status','Data berhasil dihapus');
    }
}
