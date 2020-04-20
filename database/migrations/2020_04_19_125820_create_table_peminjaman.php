<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePeminjaman extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tbl_peminjaman_gedung', function (Blueprint $table) {
            $table->integer('id',11);
            $table->integer('no_pinjam',255);  //relasi dengan table customer
            $table->string('nama',255);
            $table->string('nim',255);
            $table->string('fakultas',255);
            $table->string('nama_organisasi',255);
            $table->string('nama_gedung',255);
            $table->string('tanggal_pinjam',255);
            $table->string('waktu_pinjam',255);
            $table->string('jenis_acara',255);
            $table->string('deskripsi_acara',255);
            $table->string('surat_permohonan',255);
            $table->string('ktm',255);
            $table->string('status',255);
            $table->string('deskripsi',255);
            $table->timestamps();

            //Relasi table
            $table->primary('id');
            $table->foreign('nama_gedung')->references('nama_gedung')->on('tbl_jadwal')->onDelete('restrict');

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
        Schema::table('tbl_peminjaman_gedung', function (Blueprint $table) {
            //
        });
    }
}
