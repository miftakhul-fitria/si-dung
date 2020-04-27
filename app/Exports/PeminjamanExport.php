<?php

namespace App\Exports;

use App\Models\Peminjaman;
use Maatwebsite\Excel\Concerns\FromCollection;

class PeminjamanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Peminjaman::select('no_pinjam','nama','nim','fakultas','nama_organisasi','nama_gedung','tanggal_pinjam','waktu_pinjam','jenis_acara','deskripsi_acara','status','deskripsi')->get();
    }
}
