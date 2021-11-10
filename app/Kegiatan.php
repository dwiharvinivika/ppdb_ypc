<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';
    protected $fillable = ['kegiatan','gambar','keterangan','updated_at','created_at'];
}
