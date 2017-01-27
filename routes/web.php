<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/admin','AdminController@index');
Route::get('/admin/pegawai/tambah','AdminController@getRegister');
Route::post('/admin/pegawai/tambah','AdminController@postRegister');
Route::get('/admin/pegawai/edit/{id}','AdminController@getEdit');
Route::post('/admin/pegawai/edit/{id}','AdminController@postEdit');
Route::get('/admin/pegawai/list','AdminController@pegawai');
Route::post('/admin/pegawai/delete/{id}','AdminController@delete');
Route::get('/','Auth\LoginController@index');
Route::post('/login','Auth\LoginController@postLogin');
Route::get('/logout','Auth\LoginController@logout');

Route::get('/pelayan','PelayanController@index');
Route::get('/pelayan/meja/{id}/','PelayanController@menu');
Route::get('/pelayan/meja/menu/{id}/{no}','PelayanController@list');
Route::get('/pesanan/list','PesanananController@getList');
Route::get('/pelayan/pesanan/{id}/{no}','PesanananController@detailPesan');
Route::post('/pelayan/meja/pesanan','PesanananController@add');
Route::post('/pelayan/meja/pesanan/hapus','PesanananController@hapus');
Route::post('/pelayan/pesanan/done','PesanananController@done');

Route::get('/koki','KokiController@index');
Route::get('/koki/meja','KokiController@meja');
Route::get('/koki/notif','KokiController@notif');
Route::get('/koki/meja/menu','KokiController@menu');
Route::get('/koki/menu','MenuController@index');
Route::get('/koki/menu/tambah','MenuController@getTambah');
Route::post('/koki/menu/tambah','MenuController@postTambah');
Route::get('/koki/menu/edit/{id}','MenuController@getEdit');
Route::post('/koki/menu/edit/{id}','MenuController@postEdit');
Route::get('/koki/menu/resep/{id}','ResepController@index');
Route::post('/koki/menu/resep/','ResepController@resep');
Route::get('/koki/menu/detail/{id}','MenuController@detail');
Route::get('/koki/pesanan/{id}/{no}','KokiController@detailPesan');
Route::post('/koki/pesanan/done','KokiController@done');

Route::get('/kasir','KasirController@index');
Route::get('/kasir/meja/pesanan','KasirController@detailPesan');
Route::get('/kasir/pendapatan/harian','PendapatanController@harian');
Route::get('/kasir/pendapatan/bulanan','PendapatanController@bulanan');
Route::get('/kasir/pendapatan/tahunan','PendapatanController@tahunan');
Route::post('kasir/pendapatan/cari','PendapatanController@cariHari');
Route::get('/kasir/pesanan/{id}/{no}','KasirController@detailPesan');
Route::get('/kasir/pesanan/meja/{no}/selesai','KasirController@done');

Route::get('/pantry','BahanBakuController@index');
Route::get('/pantry/bahan/tambah','BahanBakuController@getTambah');
Route::post('/pantry/bahan/tambah','BahanBakuController@postTambah');
Route::get('/pantry/bahan/edit/{id}','BahanBakuController@getEdit');
Route::post('/pantry/bahan/edit/{id}','BahanBakuController@postEdit');
Route::get('/pantry/bahan/hapus/{id}','BahanBakuController@delete');
Route::get('/customer','CSController@index');
Route::get('/customer/kuisioner/tambah','CSController@getTambah');
Route::post('/customer/kuisioner/tambah','CSController@postTambah');
Route::post('/customer/kuesioner/cari','CSController@cari');