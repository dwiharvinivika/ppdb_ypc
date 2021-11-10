<?php

namespace App\Http\Controllers;

use App\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('layouts.home', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
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
            'prosedur' => 'required',
            'gambar' => 'required'
          
        ]);
        Prosedur::create($request->all());
        return redirect('admin/prosedur')->with('status','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        //
    }
}
