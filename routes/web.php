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
Route::get('/akurasi', function () {
	return view('akurasi');
});

Route::resource('/training','trainingController');
Route::resource('/testing','testingController');
Route::resource('/hitung','hitungController');
Route::resource('/mahasiswa','mahasiswaController');
Route::resource('/Rules','rulesController');
Route::resource('/Beranda','berandaController');
Route::resource('/laporan','tempController');
Route::resource('/user','userController');
Route::resource('/registrasi','registrasiController');

Auth::routes();


