<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditToOrangtuaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orangtua', function (Blueprint $table) {
            $table->dropColumn('nisn');
            $table->unsignedBigInteger('register_id')->after('id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orangtua', function (Blueprint $table) {
            $table->dropColumn('register_id');
            $table->string('nisn')->after('id')->nullable();
        });
    }
}
