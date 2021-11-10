<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->id();
            $table->char('nisn',12);
            $table->char('nik',20);
            $table->string('nama');
            $table->string('tmp_lhr');
            $table->date('tgl_lhr');
            $table->string('jk');
            $table->string('sekolah');
            $table->string('peringkat');
            $table->text('alamat_siswa');
            $table->integer('tb');
            $table->string('lulus_thn');
            $table->string('hp_siswa');
            $table->string('jur1');
            $table->string('jur2');
            $table->date('tgl_reg');
            $table->integer('gel');
            $table->string('foto');
            $table->string('ijazah');
            $table->string('kodesekolah');
            $table->string('kebutuhankhusus');
            $table->string('transportasi');
            $table->string('tinggal');
            $table->string('kipksp');
            $table->string('nokipksp');
            $table->integer('jmlsaudara');
            $table->integer('jarak');
            $table->string('ketjarak');
            $table->integer('waktu');
            $table->string('ketwaktu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('register');
    }
}
