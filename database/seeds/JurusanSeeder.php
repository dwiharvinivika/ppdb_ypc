<?php

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jurusan::truncate();
        $jurusan = [
            ['gambar' => 'logo-teknik-kendaraan-ringan-otomotif.png', 'jurusan' => 'Teknik <b>Kendaraan Ringan Otomotif<b>', 'kode_jurusan'=>'TKRO'],
            ['gambar' => 'logo-teknik-bisnis-sepeda-motor.png', 'jurusan' => 'Teknik <b>dan Bisnis Sepeda Motor<b>', 'kode_jurusan'=>'TBSM'],
            ['gambar' => 'logo-teknik-elektronika-industri.png', 'jurusan' => 'Teknik <b>Elektronika Industri<b>', 'kode_jurusan'=>'TEKLIN'],
            ['gambar' => 'logo-teknik-komputer-jaringan.png', 'jurusan' => 'Teknik <b>Komputer dan Jaringan<b>', 'kode_jurusan'=>'TKJ'],
            ['gambar' => 'logo-rekayasa-perangkat-lunak.png', 'jurusan' => 'Rekayasa <b>Perangkat Lunak<b>', 'kode_jurusan'=>'RPL'],
            ['gambar' => 'logo-multimedia.png', 'jurusan' => '<b>Multimedia<b>', 'kode_jurusan'=>'MM'],
            ['gambar' => 'logo-desain-pemodelan-infrastruktur-dan-bangunan.png', 'jurusan' => 'Desain <b>Pemodelan dan Informasi Gambar Bangunan<b>', 'kode_jurusan'=>'DPIB'],
        ];
        foreach($jurusan as $j){
            Jurusan::create(array_merge($j, ['keterangan'=>'Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.']));
        }
    }
}
