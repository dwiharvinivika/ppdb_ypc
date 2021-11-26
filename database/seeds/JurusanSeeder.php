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
        $jurusan = [
            ['gambar' => 'star', 'jurusan' => 'Teknik <b>Kendaraan Ringan Otomotif<b>', 'kode_jurusan'=>'TKRO'],
            ['gambar' => 'wrench', 'jurusan' => 'Teknik <b>dan Bisnis Sepeda Motor<b>', 'kode_jurusan'=>'TBSM'],
            ['gambar' => 'laptop', 'jurusan' => 'Teknik <b>Elektronika Industri<b>', 'kode_jurusan'=>'TEKLIN'],
            ['gambar' => 'laptop', 'jurusan' => 'Teknik <b>Komputer dan Jaringan<b>', 'kode_jurusan'=>'TKJ'],
            ['gambar' => 'laptop', 'jurusan' => 'Rekayasa <b>Perangkat Lunak<b>', 'kode_jurusan'=>'RPL'],
            ['gambar' => 'camera', 'jurusan' => '<b>Multimedia<b>', 'kode_jurusan'=>'MM'],
            ['gambar' => 'laptop', 'jurusan' => 'Desain <b>Pemodelan dan Informasi Gambar Bangunan<b>', 'kode_jurusan'=>'DPIB'],
        ];
        foreach($jurusan as $j){
            Jurusan::create(array_merge($j, ['keterangan'=>'Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.']));
        }
    }
}
