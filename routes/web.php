<?php

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
    return view('welcome');
});

Route::get('tugas4', function () {
    return view('tugas4js') ;
});

Route::get('praktikum2', function () {
    return view('praktikum2form') ;
});

Route::get('ets2021',"ViewController@showETS") ;

Route::get('periksa',"ViewController@periksaCovid") ;
Route::post('hasil',"ViewController@hasilPeriksa") ;

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');


//tugas laravel CRUD pendapatan
Route::get('/pendapatan','PendapatanController@index');
Route::get('/pendapatan/tambah','PendapatanController@tambah');
Route::post('/pendapatan/store','PendapatanController@store');
Route::get('/pendapatan/edit/{id}','PendapatanController@edit');
Route::post('/pendapatan/update','PendapatanController@update');
Route::get('/pendapatan/hapus/{id}','PendapatanController@hapus');

//tugas tugas
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');

//absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//tugas ikan
Route::get('/ikan','IkanController@index');
Route::get('/ikan/tambah','IkanController@tambah');
Route::post('/ikan/store','IkanController@store');
Route::get('/ikan/edit/{id}','IkanController@edit');
Route::post('/ikan/update','IkanController@update');
Route::get('/ikan/hapus/{id}','IkanController@hapus');
Route::get('/ikan/cari','IkanController@cari');
Route::get('/ikan/detail/{id}','IkanController@view');

//UAS
//route CRUD
Route::get('/nilai','NilaiController@index');
Route::get('/nilai/tambah','NilaiController@tambah');
Route::post('/nilai/store','NilaiController@store');




