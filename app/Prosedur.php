<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prosedur extends Model
{
    protected $table = 'prosedur';
    protected $fillable = ['prosedur','gambar','updated_at','created_at'];
}
