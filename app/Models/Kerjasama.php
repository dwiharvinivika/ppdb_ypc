<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kerjasama extends Model
{
    protected $table = 'kerjasama';
    protected $fillable = ['nama_perusahaan','keterangan','updated_at','created_at'];
}
