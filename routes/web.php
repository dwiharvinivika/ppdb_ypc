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
    return view('home');
});

Route::view('home','home');
//Route::view('pendaftaran','pendaftaran');
Route::view('fasilitas','fasilitas');
Route::view('kegiatan','kegiatan');

//Route::view('prosedur','prosedur');
Route::get('prosedur','ProsedurController@index');
Route::get('jurusan','JurusanController@index');
//Route::view('jurusan','JurusanController@index');
Route::view('cek_hasil','cek_hasil');
Route::view('hasil','hasil');
//Route::view('jadwal','jadwal');
Route::get('jadwal','GelombangController@index');
Route::view('contact','contact');

//pendaftaran_calon_siswa
Route::view('pendaftaran','admin/pendaftaran');

Route::get('kerjasama','KerjasamaController@index');

//testimoni
//Route::view('/testimoni','create');
Route::get('/testimoni','TestimoniController@index');
Route::get('/testimoni/create','TestimoniController@create');
Route::post('/testimoni','TestimoniController@store');

Route::group(['prefix'=>'admin/'], function(){
    //Route::view('kerjasama','kerjasama');
    Route::view('login_admin','admin/login_admin');
    Route::view('login_admin','admin/login_admin');
    Route::view('index','admin/dashboard');

    Route::get('calon_siswa', 'PesertaController@index');
    Route::get('siswa', 'PesertaController@siswa');
    Route::post('siswa/{peserta}', 'PesertaController@update');

    Route::resource('biodata','BiodataController');

    //prosedur
    Route::get('prosedur','ProsedurController@index');
    Route::get('prosedur/create','ProsedurController@create');
    Route::post('prosedur','ProsedurController@store');
    Route::delete('prosedur/{prosedur}','ProsedurController@destroy');
    Route::get('prosedur/{prosedur}/edit','ProsedurController@edit');
    Route::patch('prosedur/{prosedur}','ProsedurController@update');

    //jurusan
    Route::resource('jurusan', JurusanController::class);
    Route::get('jurusan','JurusanController@index');
    Route::get('jurusan/create','JurusanController@create');
    Route::post('jurusan','JurusanController@store');
    Route::delete('jurusan/{jurusan}','JurusanController@destroy');
    Route::get('jurusan/{jurusan}/edit','JurusanController@edit');
    Route::patch('jurusan/{jurusan}','JurusanController@update');

    //gelombang
    Route::resource('gelombang', GelombangController::class);

    //kerjasama
    Route::resource('kerjasama', KerjasamaController::class);

    //Register
    Route::get('register','RegisterController@index');
    Route::post('register','RegisterController@store');
    Route::get('register/{register}','RegisterController@show');

    //Pembayaran calon siswa
    Route::resource('pembayaran', PembayaranController::class);

    //Slide
    Route::get('slide','ProsedurController@index');
    Route::get('slide/create','SlideController@create');
    Route::post('slide','SlideController@store');

    //Galery
    Route::get('galery','GaleryController@index');
    Route::get('galery/create','GaleryController@create');
    Route::post('galery','GaleryController@store');

    //kegiatan
    Route::get('kegiatan','KegiatanController@index');
    Route::get('kegiatan/create','KegiatanController@create');
    Route::post('kegiatan','KegiatanController@store');
    Route::delete('kegiatan/{kegiatan}','KegiatanController@destroy');
    Route::get('kegiatan/{kegiatan}/edit','KegiatanController@edit');
    Route::patch('kegiatan/{kegiatan}','KegiatanController@update');

    //Tahun Ajaran
    Route::get('tahun_ajaran','Tahun_AjaranController@index');
    Route::get('tahun_ajaran/create','Tahun_AjaranController@create');
    Route::post('tahun_ajaran','Tahun_AjaranController@store');
    Route::delete('tahun_ajaran/{tahun_ajaran}','Tahun_AjaranController@destroy');
    Route::get('tahun_ajaran/{tahun_ajaran}/edit','Tahun_AjaranController@edit');
});

Route::get('register','RegisterController@create');
