<?php

namespace App\Http\Controllers;

use App\Models\Raport;
use App\Models\Register;
use Illuminate\Http\Request;

class RaportController extends Controller
{
    public function index()
    {
        $nilai = [1=>'Matematika', 'Bahasa_Indonesia', 'Bahasa_Inggris', 'IPA', 'Pendidikan_Agama_Islam'];
        $raports = auth()->user()->register->raports;
        $values = [];
        for ($i=1; $i <= 5; $i++) {
            foreach(array_merge($nilai,['rangking']) as $name){
                $values[$name][$i] = old($name.'.'.$i ,$raports[$i-1]->$name??0);
            }
        }
        return view('user.rapot', compact('nilai', 'values'));
    }

    public function admin()
    {
        $register = Register::whereHas('peserta')->get();
        return view('admin.raport.index', compact('register'));
    }

    public function show(Register $register)
    {
        $info = collect($register->toArray())->only('nisn','nama', 'tmp_lhr','tgl_lhr','alamat_siswa');
        $info['jurusan1'] = $register->jurusan(1);
        $info['jurusan2'] = $register->jurusan(2);
        return view('admin.raport.show', compact('register', 'info'));
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'Matematika.*' => 'required|integer',
            'Bahasa_Indonesia.*' => 'required|integer',
            'Bahasa_Inggris.*' => 'required|integer',
            'IPA.*' => 'required|integer',
            'Pendidikan_Agama_Islam.*' => 'required|integer',
            'rangking.*' => 'required|integer',
            'semester.*' => 'required|image',
        ]);

        for ($i=1; $i <= 5; $i++) {
            $raport = [];
            if($request->hasFile('semester.'.$i)){
                $bukti = auth()->user()->register->id.'-semester-'.$i.'.'.$request->file('semester.'.$i)->getClientOriginalExtension();
                $request->file('semester.'.$i)->move('images/raports/', $bukti);
                $raport['bukti']=$bukti;
            }
            foreach($validate as $name => $val){
                if($name!='semester'){
                    $raport[$name] = $val[$i];
                }
            }
            Raport::updateOrCreate([
                'register_id'=>auth()->user()->register->id,
                'semester' => $i
            ], $raport);
        }

        return back()->with('success', 'Raport berhasil disimpan');
    }
}
