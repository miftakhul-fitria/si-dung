<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

use App\Exports\PeminjamanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExportController extends Controller
{
    public function index(){
    	$title = 'Export Data Peminjaman';
    	$data = Peminjaman::get();

    	return view('export.index',compact('title','data'));
    }

    public function export_excel()
    {
        return Excel::download(new PeminjamanExport, 'Data-Peminjaman.xlsx');
    }
}
