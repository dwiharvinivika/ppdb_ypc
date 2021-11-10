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
    return view('layouts/home');
});

Route::view('home','layouts/home');
//Route::view('pendaftaran','layouts/pendaftaran');
Route::view('fasilitas','layouts/fasilitas');
Route::view('kegiatan','layouts/kegiatan');

//Route::view('prosedur','layouts/prosedur');
Route::get('prosedur','ProsedurController@index');
Route::get('jurusan','JurusanController@index');
//Route::view('jurusan','JurusanController@index');
Route::view('cek_hasil','layouts/cek_hasil');
Route::view('hasil','layouts/hasil');
//Route::view('jadwal','layouts/jadwal');
Route::get('jadwal','GelombangController@index');
Route::view('contact','layouts/contact');
//Route::view('kerjasama','layouts/kerjasama');
Route::get('kerjasama','KerjasamaController@index');
Route::view('admin/login_admin','layouts/admin/login_admin');
Route::view('admin/login_admin','layouts/admin/login_admin');
Route::view('admin/index','layouts/admin/dashboard');
//Route::view('admin/register','layouts/admin/register');
//Route::get('admin/register','RegisterController@index');
//Route::get('admin/register/{register}','RegisterController@show');
//Route::get('admin/jurusan/create_jurusan','JurusanController@create');
//Route::get('admin/jurusan','JurusanController@index');
Route::view('admin/calon_siswa','layouts/admin/calon_siswa');
Route::view('admin/siswa','layouts/admin/siswa');
Route::resource('admin/biodata','BiodataController');
//Route::get('admin/jurusan/create_jurusan','JurusanController@create');
//Route::get('admin/jurusan','JurusanController@index');
//Route::get('jurusan','JurusanController@index');
//Route::post('jurusan','JurusanController@store');
//testimoni
//Route::view('/testimoni','layouts/create');
Route::get('/testimoni','TestimoniController@index');
Route::get('/testimoni/create','TestimoniController@create');
Route::post('/testimoni','TestimoniController@store');
//prosedur
Route::get('admin/prosedur','ProsedurController@index');
Route::get('admin/prosedur/create','ProsedurController@create');
Route::post('admin/prosedur','ProsedurController@store');
Route::delete('admin/prosedur/{prosedur}','ProsedurController@destroy');
Route::get('admin/prosedur/{prosedur}/edit','ProsedurController@edit');
Route::patch('admin/prosedur/{prosedur}','ProsedurController@update');
//jurusan
//Route::get('admin/jurusan','JurusanController@index');
Route::get('admin/jurusan/create','JurusanController@create');
Route::post('admin/jurusan','JurusanController@store');
Route::delete('admin/jurusan/{jurusan}','JurusanController@destroy');
Route::get('admin/jurusan/{jurusan}/edit','JurusanController@edit');
Route::patch('admin/jurusan/{jurusan}','JurusanController@update');

//gelombang
Route::get('admin/gelombang','GelombangController@index');
Route::get('admin/gelombang/create','GelombangController@create');
Route::post('admin/gelombang','GelombangController@store');
Route::delete('admin/gelombang/{gelombang}','GelombangController@destroy');
Route::get('admin/gelombang/{gelombang}/edit','GelombangController@edit');
Route::patch('admin/gelombang/{gelombang}','GelombangController@update');

//kerjasama
Route::get('admin/kerjasama','KerjasamaController@index');
Route::get('admin/kerjasama/create','KerjasamaController@create');
Route::post('admin/kerjasama','KerjasamaController@store');
Route::delete('admin/kerjasama/{kerjasama}','KerjasamaController@destroy');
Route::get('admin/kerjasama/{kerjasama}/edit','KerjasamaController@edit');
Route::patch('admin/kerjasama/{kerjasama}','KerjasamaController@update');
//pendaftaran_calon_siswa
Route::view('pendaftaran','layouts/admin/pendaftaran');
//Register
Route::get('admin/register','RegisterController@index');
Route::get('register','RegisterController@create');
Route::post('admin/register','RegisterController@store');
Route::get('admin/register/{register}','RegisterController@show');
//Orangtua
//Route::get('admin/register','RegisterController@index');
Route::get('admin/orangtua/create','OrangtuaController@create');
//Route::post('admin/register','OrangtuaController@store');
//Route::get('admin/register/{register}','RegisterController@show');

//Slide
Route::get('admin/slide','ProsedurController@index');
Route::get('admin/slide/create','SlideController@create');
Route::post('admin/slide','SlideController@store');

//Galery
Route::get('admin/galery','GaleryController@index');
Route::get('admin/galery/create','GaleryController@create');
Route::post('admin/galery','GaleryController@store');
//Route::get('home','HomeController@index');

//kegiatan
Route::get('admin/kegiatan','KegiatanController@index');
Route::get('admin/kegiatan/create','KegiatanController@create');
Route::post('admin/kegiatan','KegiatanController@store');
Route::delete('admin/kegiatan/{kegiatan}','KegiatanController@destroy');
Route::get('admin/kegiatan/{kegiatan}/edit','KegiatanController@edit');
Route::patch('admin/kegiatan/{kegiatan}','KegiatanController@update');

//Tahun Ajaran
Route::get('admin/tahun_ajaran','Tahun_AjaranController@index');
Route::get('admin/tahun_ajaran/create','Tahun_AjaranController@create');
Route::post('admin/tahun_ajaran','Tahun_AjaranController@store');
Route::delete('admin/tahun_ajaran/{tahun_ajaran}','Tahun_AjaranController@destroy');
Route::get('admin/tahun_ajaran/{tahun_ajaran}/edit','Tahun_AjaranController@edit');
