<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function prosedur(Request $request)
    {
        $file = $request->file('gambar');
        $name = 'prosedur-'.date('Y-m-d').'.'.$file->getClientOriginalExtension();
        $file->move('images/', $name);
        Setting::updateOrCreate([
            'key' => 'prosedur'
        ],[
            'value' => json_encode([
                'gambar' => 'images/'.$name
            ])
        ]);
        return back()->with('success', 'Prosedur berhasil diupload');
    }
}
