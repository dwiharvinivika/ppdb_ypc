<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGelombangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gelombang', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('gelombang');
            $table->string('pendaftaran');
            $table->string('pengumuman');
            $table->string('daftar_ulang');
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
        Schema::dropIfExists('gelombang');
    }
}
