<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Peserta;
use App\Models\Register;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Register::all();
        return view('admin.pembayaran.index', compact('register'));
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
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pembayaran)
    {
        $validate = $request->validate([
            'jns_pembayaran' => 'required|in:tunai,transfer',
            'via' => 'required',
            'atas_nama' => 'sometimes|string',
            'via' => 'sometimes|string',
            'bukti' => 'sometimes|image'
        ]);

        if($request->hasFile('bukti')){
            $name = 'bukti-'.date('Ymd_His').'.'.$request->file('bukti')->getClientOriginalExtension();
            $request->file('bukti')->storeAs('bukti', $name);
            $validate['bukti'] = $name;
        }

        Peserta::updateOrCreate([
            'register_id' => $pembayaran
        ],[
            'no_peserta' => Register::find($pembayaran)->uniq_code,
        ]);

        Pembayaran::updateOrCreate([
            'register_id' => $pembayaran
        ], $validate);
        return back()->with('success', 'Pembayaran berhasil dilakukan.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }

}
