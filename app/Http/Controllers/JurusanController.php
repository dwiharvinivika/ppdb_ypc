<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusan = Jurusan::all();
        return view('admin.jurusan.index', compact('jurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jurusan.create');
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
            'kode_jurusan' => 'required',
            'jurusan' => 'required',
            'gambar' => 'required|image',
            'keterangan' => 'nullable'
        ]);
        $logo = $request->file('gambar');
        $nama = 'logo-'.Str::slug(strip_tags($validate['jurusan'])).'.'.$logo->getClientOriginalExtension();
        $logo->move('img/jurusan/', $nama);
        $validate['gambar'] = $nama;
        Jurusan::create($validate);
        return redirect('admin/jurusan')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function show(Jurusan $jurusan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function edit(Jurusan $jurusan)
    {
        return view('admin.jurusan.edit', compact('jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jurusan $jurusan)
    {
        $validate = $request->validate([
            'kode_jurusan' => 'required',
            'jurusan' => 'required',
            'gambar' => 'sometimes|image',
            'keterangan' => 'nullable'
        ]);

        if($request->hasFile('gambar')){
            if(file_exists(public_path('img/jurusan/'.$jurusan->gambar))){
                unlink(public_path('img/jurusan/'.$jurusan->gambar));
            }
            $logo = $request->file('gambar');
            $nama = 'logo-'.Str::slug(strip_tags($validate['jurusan'])).'.'.$logo->getClientOriginalExtension();
            $logo->move('img/jurusan/', $nama);
            $validate['gambar'] = $nama;
        }

        $jurusan->update($validate);
        return redirect('admin/jurusan')->with('success','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jurusan  $jurusan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jurusan $jurusan)
    {
        if(file_exists(public_path('img/jurusan/'.$jurusan->gambar))){
            unlink(public_path('img/jurusan/'.$jurusan->gambar));
        }
        $jurusan->delete();
        return redirect('admin/jurusan')->with('success','Data berhasil dihapus');
    }
}
