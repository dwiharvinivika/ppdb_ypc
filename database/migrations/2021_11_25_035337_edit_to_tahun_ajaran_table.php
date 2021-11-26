<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditToTahunAjaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tahun_ajaran', function (Blueprint $table) {
            $table->renameColumn('tahun_ajaran', 'tahun_ajaran_awal');
        });
        Schema::table('tahun_ajaran', function (Blueprint $table) {
            $table->string('tahun_ajaran_awal', 4)->change();
            $table->year('tahun_ajaran_akhir')->after('tahun_ajaran_awal');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tahun_ajaran', function (Blueprint $table) {
            $table->dropColumn('tahun_ajaran_akhir');
        });
    }
}
