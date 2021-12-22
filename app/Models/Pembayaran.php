<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $guarded = ['id'];

    public function register()
    {
        return $this->hasOne(Register::class, 'id', 'register_id');
    }

    public function getVerifiedAttribute()
    {
        return $this->is_verified?'<span class="badge badge-success">Sudah</span>':'<span class="badge badge-danger">Belum</span>';
    }
}
