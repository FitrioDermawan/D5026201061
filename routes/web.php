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



