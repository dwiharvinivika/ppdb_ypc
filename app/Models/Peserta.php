<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = 'peserta';
    protected $guarded = ['id'];

    public function register()
    {
        return $this->belongsTo(Register::class);
    }

    public function program()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
}
