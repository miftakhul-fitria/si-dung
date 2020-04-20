<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gedung;

class GedungController extends Controller
{
    public function index(){
    	$title = 'Kelola Gedung';
    	$data = Gedung::get();

    	return view('gedung.index',compact('title','data'));
    }

    public function add(){
    	$title = 'Tambah Gedung';

    	return view('gedung.add',compact('title'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_gedung'=>'required',
            'luas_gedung'=>'required',
            'kapasitas'=>'required',
            'parkir'=>'required',
        ]);

    	$data['nama_gedung'] = $request->nama_gedung;
    	$data['luas_gedung'] = $request->luas_gedung;
    	$data['kapasitas'] = $request->kapasitas;
    	$data['parkir'] = $request->parkir;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');

        \Session::flash('sukses','Data berhasil ditambah');
        
    	Gedung::insert($data);

    	return redirect('kelola-gedung');
    }

    public function edit($id){
        $dt =  Gedung::find($id);
        $title = "Edit $dt->nama_gedung";

        return view('gedung.edit', compact('title','dt'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
            'nama_gedung'=>'required',
            'luas_gedung'=>'required',
            'kapasitas'=>'required',
            'parkir'=>'required',
        ]);

        $data['nama_gedung'] = $request->nama_gedung;
        $data['luas_gedung'] = $request->luas_gedung;
        $data['kapasitas'] = $request->kapasitas;
        $data['parkir'] = $request->parkir;
        $data['updated_at'] = date('Y-m-d H:i:s');

        \Session::flash('sukses','Data berhasil diupdate');

        Gedung::where('id',$id)->update($data);

        return redirect('kelola-gedung');
    }

    public function delete($id){
        Gedung::where('id',$id)->delete();

        \Session::flash('sukses','Data berhasil dihapus');

        return redirect('kelola-gedung');
    }
}
