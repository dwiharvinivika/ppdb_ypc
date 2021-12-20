<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveToRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('register', function (Blueprint $table) {
            $table->dropColumn(['peringkat','tgl_reg','kodesekolah','kebutuhankhusus','kipksp']);
            $table->string('foto')->nullable()->change();
            $table->string('ijazah')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('register', function (Blueprint $table) {
            $table->integer('peringkat');
            $table->date('tgl_reg');
            $table->string('kodesekolah',5);
            $table->boolean('kebutuhankhusus');
            $table->boolean('kipksp');
        });
    }
}
