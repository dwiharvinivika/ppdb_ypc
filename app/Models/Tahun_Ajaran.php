<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tahun_Ajaran extends Model
{
    protected $table = 'tahun_ajaran';
    protected $guarded = ['id'];

    public function getTahunAjaranAttribute()
    {
        return $this->tahun_ajaran_awal.' / '.$this->tahun_ajaran_akhir;
    }

    public function getLabelStatusAttribute()
    {
        return $this->status=='Aktif'?'<span class="badge badge-success">Aktif</span>':'<span class="badge badge-warning">Tidak Aktif</span>';
    }
}
