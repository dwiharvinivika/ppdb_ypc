<?php

use App\Models\Setting;

if(!function_exists('setting')){
    function setting($key){
        $data = [
            'prosedur' => ['gambar'=>'images/prosedur-2021-09-26.jpg'],
            'kategori_tags' => [
                'kegiatan' => ['MPLS', 'Pengembangan Diri', 'Boarding School', 'Extra Kulikuler'],
                'fasilitas' => ['Halaman', 'Ruang Kelas', 'Ruang Praktik', 'Perpustakaan/Mushola']
            ],
            'web_setting'=>[
                'website_name' => 'PPDB SMK YPC',
                'no_telp' => '08979394991',
                'email' => 'smkypcofficial@gmail.com',
                'logo' => asset('img/logo.JPG'),
                'theme_color' => '#1211fa',
                'alamat' => 'Jl. Komplek Yayasan Pesantren Cintawarna Singaparna RT/RW 009/004 Desa: Cikunten, Kecamatan: Singaparna, Kab/Kota: Kab. Tasikmalaya, Propinsi: Jawa Barat, Kode Pos: 46414'
            ],
            'slides' => [
                [
                    'bg' => 'img/slides/bg-slide-1.jpg',
                    'content' => 'img/slides/content-slide-1.png'
                ],
                [
                    'bg' => 'img/slides/bg-slide-2.jpg',
                    'content' => 'img/slides/content-slide-2.png'
                ],
                [
                    'bg' => 'img/slides/bg-slide-3.jpg',
                    'content' => 'img/slides/content-slide-3.png'
                ],
            ]
        ];
        $setting = Setting::where('key', $key)->first();
        return is_null($setting)? $data[$key] : json_decode($setting->value, true);
    }
}
