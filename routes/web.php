<?php

use App\Http\Controllers\KaryawanController;
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

Route::get('/','KaryawanController@tampil')->name('tampil-karyawan');
Route::get('/kecerdasan','KaryawanController@karyawan')->name('tampil-form-kecerdasan');
Route::post('/kecerdasan/proses','KaryawanController@submitkecerdasan')->name('submit-form-kecerdasan');
Route::post('/targetkerja/proses','KaryawanController@submittargetkerja')->name('submit-form-targetkerja');
Route::post('/sikapkerja/proses','KaryawanController@submitsikapkerja')->name('submit-form-sikapkerja');
Route::post('/pembobotan/proses','KaryawanController@hitunghasil')->name('submit-form-hasilakhir');




Route::get('/targetkerja', function () {
    return view('targetkerja');

});
Route::get('/sikapkerja', function () {
    return view('sikapkerja');

});

Route::get('/nilaiakhir', function () {
    return view('nilaiakhir');

});
