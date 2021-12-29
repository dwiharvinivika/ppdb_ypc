<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orangtua extends Model
{
    protected $table = 'orangtua';
    protected $guarded = ['id'];

    public function anak()
    {
        return $this->hasOne(Register::class, 'id', 'register_id');
    }
}
