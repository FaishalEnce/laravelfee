<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnDeleteAtInBerita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->softDelets();
        });
        Schema::table('berita', function (Blueprint $table) {
            $table->softDelets();
        });
        Schema::table('berita', function (Blueprint $table) {
            $table->softDelets();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('berita', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
        Schema::table('berita', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}
