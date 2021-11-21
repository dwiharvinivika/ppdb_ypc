<?php

namespace App\Http\Controllers;

use App\Register;
use App\Gelombang;
use App\Orangtua;
use App\File;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Register::all();

        return view('register.register', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $date = date('Y-m-d');
        $gelombang = Gelombang::where('pendaftaran_awal', '<=', $date)
                                ->where('pendaftaran_akhir', '>=', $date)->first();
        return view('register2.create', compact('gelombang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        $date = date('Y-m-d');
        $gelombang = Gelombang::where('pendaftaran_awal', '<=', $date)
                                ->where('pendaftaran_akhir', '>=', $date)->firstOrFail();

        $foto = 'foto_'.date('Y-m-d').'.'.$request->file('foto')->getClientOriginalExtension();
        $ijazah = 'ijazah_'.date('Y-m-d').'.'.$request->file('ijazah')->getClientOriginalExtension();

        $request->file('foto')->storeAs('files-register', $foto);
        $request->file('ijazah')->storeAs('files-register', $ijazah);

        $register = $request->merge(['gelombang_id'=>$gelombang->id])->toArray();
        $register['foto'] = $foto;
        $register['ijazah'] = $ijazah;

        Register::create($register);
        Orangtua::create($request->all());

        return back()->with('success', 'Register berhasil dilakukan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        return request()->ajax()?response()->json($register):view('register.detail_register', compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Register $register)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        //
    }
}