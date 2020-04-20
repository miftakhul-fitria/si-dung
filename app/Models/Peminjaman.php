<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    protected $table = 'tbl_peminjaman_gedung';

    //Relasi
    // public function gedungs(){
    // 	return $this->belongsTo('App\Models\Jadwal','nama_gedung','nama_gedung');
    // }
}
