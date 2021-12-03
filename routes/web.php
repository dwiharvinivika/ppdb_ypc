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

Route::view('/', 'home');

// Gallery tampilan user
Route::view('kegiatan','kegiatan');
Route::view('fasilitas','fasilitas');

Route::view('prosedur','prosedur');
Route::get('jurusan','JurusanController@index');
Route::view('cek_hasil','cek_hasil');
Route::get('hasil', 'PesertaController@cek_hasil');

Route::get('jadwal', 'RegisterController@jadwal');
Route::view('contact','contact');

//pendaftaran_calon_siswa
Route::view('pendaftaran','admin/pendaftaran');

Route::get('kerjasama','KerjasamaController@index');

//testimoni
//Route::view('/testimoni','create');
Route::get('/testimoni','TestimoniController@index');
Route::get('/testimoni/create','TestimoniController@create');
Route::post('/testimoni','TestimoniController@store');

// Authentication
Route::view('login_admin','auth.login_admin')->name('login');
Route::post('login_admin', 'LoginController@login_admin')->name('login.post');
Route::get('logout', 'LoginController@logout');

Route::group(['prefix'=>'admin/', 'middleware'=>'auth'], function(){
    Route::view('index','admin.dashboard');

    //Register
    Route::resource('register', RegisterController::class);

    Route::get('calon_siswa', 'PesertaController@index');
    Route::get('siswa', 'PesertaController@siswa');
    Route::post('siswa/export', 'PesertaController@siswa_export');
    Route::post('siswa/{peserta}', 'PesertaController@update');
    Route::post('siswa/{peserta}/cetak', 'PesertaController@cetak')->name('cetak_kartu');

    //Pembayaran calon siswa
    Route::resource('pembayaran', PembayaranController::class);

    Route::middleware('can:admin')->group(function(){
        Route::resource('user', UserController::class);

        Route::view('preview', 'exports.kartu');

        //Tahun Ajaran
        Route::resource('tahun_ajaran', Tahun_AjaranController::class);

        //prosedur
        Route::view('prosedur', 'admin.prosedur');
        Route::post('prosedur', 'SettingController@prosedur');

        //jurusan
        Route::resource('jurusan', JurusanController::class);

        //gelombang
        Route::resource('gelombang', GelombangController::class);

        //kerjasama
        Route::resource('kerjasama', KerjasamaController::class);

        //Slide
        Route::view('slide', 'admin.slide');
        Route::get('slide/create','SlideController@create');
        Route::post('slide','SlideController@store');

        //Galery
        Route::resource('gallery',GalleryController::class);

        Route::get('web_setting', 'SettingController@web_setting');
        Route::post('web_setting', 'SettingController@post_web_setting');
    });
});

Route::get('register', 'RegisterController@create');
