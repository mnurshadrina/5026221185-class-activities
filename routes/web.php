<?php

use Illuminate\Support\Facades\Route;
# use App\Http\Controllers\DosenController;

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

Route::get('/error', function () {
    return "<h1>Server Error : Ada kesalahan</h1>";
});

Route::get('/views/day1-pweb', function () {
    return view('day1-pweb');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/style2', function () {
    return view('style2');
});

Route::get('/tugas1', function () {
    return view('TUGAS 1');
});

Route::get('/responsive', function () {
    return view('responsive1');
});

Route::get('/5026221185', function () {
    return view('5026221185');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/blog/home', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

Route::get('dosen', 'App\Http\Controllers\DosenController@index');
Route::get('blog', 'App\Http\Controllers\DosenController@blog');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

Route::get('/pegawai', 'App\Http\Controllers\PegawaiDBController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiDBController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiDBController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiDBController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiDBController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiDBController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiDBController@cari');

Route::get('/kopi', 'App\Http\Controllers\KopiController@index');
Route::get('/kopi/add', 'App\Http\Controllers\KopiController@add');
Route::post('/kopi/store', 'App\Http\Controllers\KopiController@store');
Route::get('/kopi/edit/{kode}', 'App\Http\Controllers\KopiController@edit');
Route::post('/kopi/update', 'App\Http\Controllers\KopiController@update');
Route::get('/kopi/delete/{kode}','App\Http\Controllers\KopiController@delete');
Route::get('/kopi/search','App\Http\Controllers\KopiController@search');

Route::get('/cart', 'App\Http\Controllers\CartController@index');
Route::get('/cart/add', 'App\Http\Controllers\CartController@add');
Route::post('/cart/store', 'App\Http\Controllers\CartController@store');
Route::get('/cart/edit/{kode}', 'App\Http\Controllers\CartController@edit');
Route::post('/cart/update', 'App\Http\Controllers\CartController@update');
Route::get('/cart/delete/{kode}','App\Http\Controllers\CartController@delete');
Route::get('/cart/search','App\Http\Controllers\CartController@search');
