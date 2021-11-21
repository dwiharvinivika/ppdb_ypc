<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrangtuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orangtua', function (Blueprint $table) {
            $table->id();
            $table->char('nisn', 12);
            $table->string('nama_ayah', 191);
            $table->string('nama_ibu', 191);
            $table->string('pekerjaan_ayah', 191);
            $table->string('pekerjaan_ibu', 191);
            $table->string('nama_wali', 191);
            $table->string('pekerjaan_wali', 191);
            $table->text('alamat_orangtua');
            $table->char('kontak', 14);
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
        Schema::dropIfExists('orangtua');
    }
}
