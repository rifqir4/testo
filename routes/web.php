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

Route::get('/', 'PageController@index');
Route::get('/kelurahan', 'PageController@kelurahan');
Route::get('/tentang/pemerintahan-trantib', 'PageController@pemtib');
Route::get('/tentang/pemberdayaan-masyarakat', 'PageController@pemas');
Route::get('/tentang/ekonomi-pembangunan', 'PageController@ekonomi');
Route::get('/tentang/kebersihan', 'PageController@kebersihan');
Route::get('/keluhan-saran', 'PageController@kelas');
Route::get('/laporki', 'PageController@laporki');

Route::resource('berita', 'PostController');
Auth::routes();

Route::resource('kelas', 'KelasController');

Route::resource('lapor', 'LaporController');

Auth::routes(['register' => false]);

Route::get('/admin', 'DashboardController@index');
Route::get('/admin/berita', 'DashboardController@berita');
Route::get('/admin/keluhan-saran', 'DashboardController@kelas');
Route::get('/admin/laporan', 'DashboardController@laporki');


Route::get('/download/blangko-layanan', 'DownloadController@blangko');
Route::get('/download/dokumen', 'DownloadController@dokumen');
Route::get('/download/dokumen/lakip', 'DownloadController@lakip');
Route::get('/download/dokumen/renstra', 'DownloadController@renstra');
Route::get('/download/dokumen/kinerja', 'DownloadController@kinerja');
Route::get('/download/dokumen/renja', 'DownloadController@renja');


Route::get('/download/blangko-layanan/{file}', 'DownloadController@dblangko');