<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditToJurusanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jurusan', function (Blueprint $table) {
            $table->string('jurusan', 100)->change();
        });
        Schema::table('register', function (Blueprint $table) {
            $table->renameColumn('jur1', 'jur1_id');
            $table->renameColumn('jur2', 'jur2_id');
        });
        Schema::table('register', function (Blueprint $table) {
            $table->unsignedBigInteger('jur1_id')->change();
            $table->unsignedBigInteger('jur2_id')->change();
        });
        Schema::table('peserta', function (Blueprint $table) {
            $table->renameColumn('program', 'jurusan_id');
        });
        Schema::table('peserta', function (Blueprint $table) {
            $table->unsignedBigInteger('jurusan_id')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jurusan', function (Blueprint $table) {
            //
        });
    }
}
