<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('register_id');
            $table->tinyInteger('semester');
            $table->smallInteger('Matematika');
            $table->smallInteger('Bahasa_Indonesia');
            $table->smallInteger('Bahasa_Inggris');
            $table->smallInteger('IPA');
            $table->smallInteger('Pendidikan_Agama_Islam');
            $table->smallInteger('rangking');
            $table->string('bukti', 100)->nullable();
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
        Schema::dropIfExists('raports');
    }
}
