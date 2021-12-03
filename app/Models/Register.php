<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Register extends Model
{
    protected $table = 'register';
    protected $guarded = ['id'];
    //protected $fillable = ['nisn','nik','nama','tmp_lhr','tgl_lhr','jk','sekolah','peringkat','alamat_siswa','tb','lulus_thn','hp_siswa','jur1','jur2','tgl_reg','updated_created','created_at'];
    //protected $guarded = ['peringkat','tgl_reg','gel','foto','ijazah','kodesekolah','kebutuhankhusus','hobi','transportasi','tinggal','kip','kipksp','nokipksp','jmlsaudara','jarak','ketjarak','waktu','ketwaktu'];

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }

    public function peserta()
    {
        return $this->hasOne(Peserta::class);
    }

    public function orangtua()
    {
        return $this->hasOne(Orangtua::class);
    }

    public function gelombang()
    {
        return $this->belongsTo(Gelombang::class);
    }

    public function tahun_ajaran()
    {
        return $this->hasOneThrough(Tahun_Ajaran::class, Gelombang::class, 'tahun_ajaran_id', 'id', 'gelombang_id');
    }

    public function getUniqCodeAttribute()
    {
        if(!is_null($this->peserta)) return $this->peserta->no_peserta;
        // Mendapatkan tahun ajaranya
        $tahun_ajar = $this->tahun_ajaran;
        $tahun_ajar = substr($tahun_ajar->tahun_ajaran_awal, 2, 2).substr($tahun_ajar->tahun_ajaran_akhir, 2, 2);

        $last_peserta = Peserta::latest()->first();
        if(is_null($last_peserta)){
            $no = '001';
        }else{
            $thn_ajar = substr($last_peserta->no_peserta, 0, 4);
            if($thn_ajar == $tahun_ajar){
                $no = intval(substr($last_peserta->no_peserta, 4, 3))+1;
                $no = substr("000".$no, -3, 3);
            }else{
                $no = '001';
            }
        }
        return $tahun_ajar.$no;
    }

    public function getStatusPembayaranAttribute()
    {
        if($this->pembayaran()->exists()){
            return '<span class="badge badge-success">Sudah Bayar</span>';
        }
        return '<span class="badge badge-danger">Belum Bayar</span>';
    }

    public function getTtlAttribute()
    {
        return $this->tmp_lhr.', '.$this->tgl_lhr;
    }

    public function jurusan(int $ke)
    {
        $jur_id = 'jur'.$ke.'_id';
        $jurusan = DB::table('jurusan')->select('jurusan')->where('id', $this->$jur_id)->first();
        return strip_tags($jurusan->jurusan);
    }
}

