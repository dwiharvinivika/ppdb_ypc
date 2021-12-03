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
        $this->update('prosedur', ['gambar'=>'images/'.$name]);
        return back()->with('success', 'Prosedur berhasil diupload');
    }

    public function web_setting()
    {
        $web_setting = setting('web_setting');
        return view('admin.web_setting', compact('web_setting'));
    }

    public function post_web_setting(Request $request)
    {
        $validate = $request->validate([
            'website_name' => 'required',
            'no_telp' => 'required|numeric|digits_between:9,14',
            'email' => 'required|email',
            'alamat' => 'required',
            'logo' => 'nullable|image',
            'theme_color' => 'required'
        ]);
        if(!is_null($validate['logo'])){
            $logo = $request->file('logo');
            $name = 'logo.'.$logo->getClientOriginalExtension();
            $logo->move('img/', $name);
            $validate['logo'] = $name;
        }else{
            $validate['logo'] = setting('web_setting')['logo'];
        }
        $this->update('web_setting', $validate);
        return back()->with('success', 'Web Setting berhasil diupdate');
    }

    public function slide(Request $request)
    {
        $slides = setting('slides');
        $slide = $request->slide;
        if($request->hasFile('bg')){
            $bg = $request->file('bg');
            $name = 'bg-slide-'.($slide+1).'.'.$bg->getClientOriginalExtension();
            $bg->move('img/slides/', $name);
            $slides[$slide]['bg'] = 'img/slides/'.$name;
        }else if($request->hasFile('content')){
            $content = $request->file('content');
            $name = 'content-slide-'.($slide+1).'.'.$content->getClientOriginalExtension();
            $content->move('img/slides/', $name);
            $slides[$slide]['content'] = 'img/slides/'.$name;
        }
        $this->update('slides', $slides);
        return response()->json('Slide ke-'.($slide+1).' berhasil diubah');
    }

    private function update(string $key, $data)
    {
        Setting::updateOrCreate(['key'=>$key],['value'=>json_encode($data)]);
    }
}
