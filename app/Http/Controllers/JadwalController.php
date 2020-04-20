<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
	public function index(){
    	$title = 'Kelola Jadwal';
    	$data = Jadwal::get();

    	return view('jadwal.index',compact('title','data'));
    }

    public function add(){
    	$title = 'Tambah Jadwal';

    	return view('jadwal.add',compact('title'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_gedung'=>'required',
            'tanggal_pinjam'=>'required',
            'waktu_pinjam'=>'required',
        ]);

    	$data['nama_gedung'] = $request->nama_gedung;
    	$data['tanggal_pinjam'] = $request->tanggal_pinjam;
    	$data['waktu_pinjam'] = $request->waktu_pinjam;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        \Session::flash('sukses','Data berhasil ditambah');
        
    	Jadwal::insert($data);

    	return redirect('kelola-jadwal');
    }

    public function edit($id){
        $dt =  Jadwal::find($id);
        $title = "Edit Jadwal $dt->nama_gedung";

        return view('jadwal.edit', compact('title','dt'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'nama_gedung'=>'required',
            'tanggal_pinjam'=>'required',
            'waktu_pinjam'=>'required',
        ]);

        $data['nama_gedung'] = $request->nama_gedung;
        $data['tanggal_pinjam'] = $request->tanggal_pinjam;
    	$data['waktu_pinjam'] = $request->waktu_pinjam;
        $data['updated_at'] = date('Y-m-d H:i:s');

        \Session::flash('sukses','Data berhasil diupdate');

        Jadwal::where('id',$id)->update($data);

        return redirect('kelola-jadwal');
    }

    public function delete($id){
        Jadwal::where('id',$id)->delete();

        \Session::flash('sukses','Data berhasil dihapus');

        return redirect('kelola-jadwal');
    }
}
