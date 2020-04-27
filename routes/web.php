<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('beranda');
});

//Hanya bisa diakses oleh admin yg sudah login
Route::group(['middleware'=>'auth'],function(){

	Route::get('beranda','BerandaController@index');

	//Kelola Gedung
	Route::get('kelola-gedung','GedungController@index');
	Route::get('kelola-gedung/add','GedungController@add');
	Route::post('kelola-gedung/add','GedungController@store');

	Route::get('kelola-gedung/{id}','GedungController@edit');
	Route::put('kelola-gedung/{id}','GedungController@update');

	Route::delete('kelola-gedung/{id}','GedungController@delete');

	//Kelola Jadwal
	Route::get('kelola-jadwal','JadwalController@index');
	Route::get('kelola-jadwal/add','JadwalController@add');
	Route::post('kelola-jadwal/add','JadwalController@store');

	Route::get('kelola-jadwal/{id}','JadwalController@edit');
	Route::put('kelola-jadwal/{id}','JadwalController@update');

	Route::delete('kelola-jadwal/{id}','JadwalController@delete');

	//Kelola Peminjaman
	Route::get('kelola-peminjaman','PeminjamanController@index');
	Route::get('kelola-peminjaman/detail/{id}','PeminjamanController@detail');

	Route::get('kelola-peminjaman/{id}','PeminjamanController@edit');
	Route::put('kelola-peminjaman/{id}','PeminjamanController@update');

	//Export excel
	Route::get('export','ExportController@index');
	Route::get('/export/export_excel', 'ExportController@export_excel');
});

Auth::routes();

Route::get('/home', function(){
	return redirect('beranda');
});

Route::get('keluar',function(){
	\Auth::logout();
	return redirect('login');
});
