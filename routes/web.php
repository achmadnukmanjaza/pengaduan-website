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
    return view('welcome');
});

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');
Route::get('/login/register','AuthController@register');

Route::get('/login/create','AuthController@create')->name('registrasi.create');
Route::post('/logi/store','AuthController@store')->name('registrasi.store');

Route::group(['middleware' => 'auth'],function(){
    Route::get('/masyarakat','MasyarakatController@masyarakat');
    Route::get('/masyarakat/create','MasyarakatController@create')->name('masyarakat.create');
    Route::post('/masyarakat/store','MasyarakatController@store')->name('masyarakat.store');
    Route::get('/masyarakat/{id}/edit','MasyarakatController@edit');
    Route::post('/masyarakat/{id}/update','MasyarakatController@update');
    Route::get('/masyarakat/{id}/delete','MasyarakatController@delete');
    }); 

Route::group(['middleware' => 'auth'],function(){
    Route::get('/pengaduan','PengaduanController@pengaduan');
    Route::get('/pengaduan/create','PengaduanController@create')->name('pengaduan.create');
    Route::post('/pengaduan/store/{nik}','PengaduanController@store')->name('pengaduan.store');
    Route::get('/pengaduan/{id}/editstatus','PengaduanController@editstatus');
    Route::post('/pengaduan/{id}/update','PengaduanController@update');
    
    }); 

Route::group(['middleware' => 'auth'],function(){
    Route::get('/tanggapan','TanggapanController@tanggapan');
    Route::get('/tanggapan/create/{id_pengaduan}/{nik}','TanggapanController@create')->name('tanggapan.create');
    Route::post('/tanggapan/store/{id_pengaduan}/{nik}','TanggapanController@store')->name('tanggapan.store');
    });   

Route::group(['middleware' => 'auth'],function(){
    Route::get('/petugas','PetugasController@petugas');
    Route::get('/petugas/create','PetugasController@create')->name('petugas.create');
    Route::post('/petugas/store','PetugasController@store')->name('petugas.store');
    Route::get('/petugas/{id}/editpetugas','PetugasController@editpetugas');
    Route::post('/petugas/{id}/update','PetugasController@update');
    Route::get('/petugas/{id}/delete','PetugasController@delete');
    }); 

Route::get('/lat','LatController@index');