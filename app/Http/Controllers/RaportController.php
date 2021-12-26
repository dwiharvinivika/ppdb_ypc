<?php

namespace App\Http\Controllers;

use App\Raport;
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
