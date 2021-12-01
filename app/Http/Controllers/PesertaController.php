<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use App\Models\Jurusan;
use App\Models\Peserta;
use App\Models\Register;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

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
            'jurusan_id' => 'sometimes|integer'
        ]);
        $peserta->update($validate);
        $title = $request->has('daftar_ulang')?'Daftar Ulang berhasil diubah':'Program berhasil dipilih';
        return response()->json($title);
    }

    public function siswa()
    {
        $jurusan = Jurusan::all();
        $peserta = Register::whereHas('peserta')->get();
        return view('admin.siswa', compact('peserta', 'jurusan'));
    }

    public function siswa_export(Request $request)
    {
        return Excel::download(new SiswaExport, 'siswa-'.date('Y-m-d').'.xlsx');
    }

    public function cek_hasil(Request $request)
    {
        $peserta = Peserta::whereHas('register', function($q)use($request){
            $q->where('nisn', $request->nisn)->where('daftar_ulang', 1);
        })->first();
        if(is_null($peserta)){
            $hasilText = 'Maaf sekali, anda belum bisa diterima sebagai siswa disekolah ini. Jangan putus asa, tetap semangat :)';
        }else{
            $hasilText = "Selamat, Anda (<b>{$peserta->register->nama}</b>) diterima di SMK YPC Tasikmalaya, dengan jurusan <b>{$peserta->program->kode_jurusan} ({$peserta->program->jurusan})</b>";
        }
        return view('hasil', compact('hasilText'));
    }
}
