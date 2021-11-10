<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditToGelombangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gelombang', function (Blueprint $table) {
            $table->dropColumn('pendaftaran');
            $table->unsignedBigInteger('tahun_ajaran_id')->after('id');
            $table->date('pendaftaran_awal')->after('gelombang');
            $table->date('pendaftaran_akhir')->after('pendaftaran_awal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gelombang', function (Blueprint $table) {
            $table->string('pendaftaran');
            $table->dropColumn(['tahun_ajaran_id','pendaftaran_awal','pendaftaran_akhir']);
        });
    }
}
