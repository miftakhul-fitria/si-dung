<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableGedung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_gedung', function (Blueprint $table) {
            $table->string('id',40);
            $table->string('nama_gedung',255);
            $table->string('luas_gedung',255);
            $table->string('kapasitas_gedung',255);
            $table->string('parkir',255);
            $table->timestamps();

            $table->primary('id');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_gedung', function (Blueprint $table) {
            //
        });
    }
}
