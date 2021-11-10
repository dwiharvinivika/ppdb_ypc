<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'register';
    protected $guarded = ['id'];
    //protected $fillable = ['nisn','nik','nama','tmp_lhr','tgl_lhr','jk','sekolah','peringkat','alamat_siswa','tb','lulus_thn','hp_siswa','jur1','jur2','tgl_reg','updated_created','created_at'];
    //protected $guarded = ['peringkat','tgl_reg','gel','foto','ijazah','kodesekolah','kebutuhankhusus','hobi','transportasi','tinggal','kip','kipksp','nokipksp','jmlsaudara','jarak','ketjarak','waktu','ketwaktu'];
}
