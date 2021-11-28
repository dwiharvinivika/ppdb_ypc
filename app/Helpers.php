<?php

use App\Models\Setting;

if(!function_exists('setting')){
    function setting($key){
        $data = [
            'prosedur' => ['gambar'=>'images/prosedur-2021-09-26.jpg'],
            'kategori_tags' => [
                'kegiatan' => ['MPLS', 'Pengembangan Diri', 'Boarding School', 'Extra Kulikuler'],
                'fasilitas' => ['Halaman', 'Ruang Kelas', 'Ruang Praktik', 'Perpustakaan/Mushola']
            ]
        ];
        $setting = Setting::where('key', $key)->first();
        return is_null($setting)? $data[$key] : json_decode($setting->value, true);
    }
}
