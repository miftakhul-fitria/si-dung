<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index(){
    	$title = 'Kelola Peminjaman';
    	$data = Peminjaman::get();

    	return view('peminjaman.index',compact('title','data'));
    }

    //fungsi untuk filter tanggal
    public function periode(Request $request){
        try {
            $dari = $request->dari;
            $sampai = $request->sampai;

            $title = "Tanggal Peminjaman dari $dari sampai $sampai";

            $data = Peminjaman::whereDate('created_at','>=',$dari)->whereDate('created_at','<=',$sampai)->orderBy('created_at','desc')->get();

            return view('peminjaman.index',compact('title','data'));
        } catch (\Exception $e) {
            \Session::flash('gagal',$e->getMessage());

            return redirect()->back();
        }
    }

    public function detail($id){
    	$dt =  Peminjaman::find($id);
        $title = "Detail Peminjaman $dt->nama_gedung";

        return view('peminjaman.detail', compact('title','dt'));
    }

    public function edit($id){
        $dt =  Peminjaman::find($id);
        $title = 'Edit Peminjaman '.$dt->nama_gedung;

        return view('peminjaman.edit', compact('title','dt'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'status'=>'required',
        ]);

        $data['status'] = $request->status;
        $data['updated_at'] = date('Y-m-d H:i:s');

        \Session::flash('sukses','Data berhasil diupdate');

        Peminjaman::where('id',$id)->update($data);

        return redirect('kelola-peminjaman');
    }
}
