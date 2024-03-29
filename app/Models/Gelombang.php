<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gelombang extends Model
{
    protected $table = 'gelombang';
    protected $fillable = ['tahun_ajaran_id','gelombang','pendaftaran_awal','pendaftaran_akhir','pengumuman','daftar_ulang','updated_at','created_at'];

    public function tahun_ajaran()
    {
        return $this->belongsTo(Tahun_Ajaran::class);
    }

    public function getPendaftaranAttribute()
    {
        return $this->pendaftaran_awal.' - '.$this->pendaftaran_akhir;
    }
}
