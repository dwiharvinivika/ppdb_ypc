<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = ['nisn','nik','nama','tmp_lhr','tgl_lhr','jk','sekolah','peringkat','alamat_siswa','tb','lulus_thn','hp_siswa','jur1','jur2','tgl_reg','updated_created','created_at'];
}
  `` varchar(30) NOT NULL,
  `` varchar(50) NOT NULL,
  `` varchar(50) NOT NULL,
  `` varchar(20) NOT NULL,
  `` date NOT NULL,
  `` varchar(5) NOT NULL,
  `` varchar(50) NOT NULL,
  `` varchar(20) DEFAULT NULL,
  `` text NOT NULL,
  `` varchar(10) DEFAULT NULL,
  `lulus_thn` varchar(5) NOT NULL,
  `hp_siswa` double NOT NULL,
  `jur1` varchar(6) NOT NULL,
  `jur2` varchar(6) NOT NULL,
  `tgl_reg` date NOT NULL,
  `gel` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `ijazah` varchar(100) DEFAULT NULL,
  `kodesekolah` varchar(50) DEFAULT NULL,
  `kebutuhankhusus` varchar(20) DEFAULT NULL,
  `hobi` varchar(20) DEFAULT NULL,
  `transportasi` varchar(30) DEFAULT NULL,
  `tinggal` varchar(30) DEFAULT NULL,
  `kipksp` varchar(6) DEFAULT NULL,
  `nokipksp` varchar(30) DEFAULT NULL,
  `jmlsaudara` varchar(3) DEFAULT NULL,
  `jarak` varchar(20) DEFAULT NULL,
  `ketjarak` varchar(10) DEFAULT NULL,
  `waktu` varchar(20) DEFAULT NULL,
  `ketwaktu` varchar(15) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL