<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

// Halaman difrontend
Route::get('gallery/{kategori}', 'GalleryController@show')->where('kategori', 'fasilitas|kegiatan');
Route::view('prosedur','prosedur');
Route::get('jurusan','JurusanController@index');
Route::view('cek_hasil','cek_hasil');
Route::get('hasil', 'PesertaController@cek_hasil');
Route::get('jadwal', 'RegisterController@jadwal');
Route::view('contact','contact');
Route::get('kerjasama','MitraKerjaController@kerjasama');

//testimoni
//Route::view('/testimoni','create');
Route::get('/testimoni','TestimoniController@index');
Route::get('/testimoni/create','TestimoniController@create');
Route::post('/testimoni','TestimoniController@store');

// Authentication
Route::view('login_admin','auth.login_admin')->name('login');
Route::post('login_admin', 'LoginController@login_admin')->name('login.post');
Route::view('login_siswa','auth.login_siswa')->name('login_siswa');
Route::post('login_siswa', 'LoginController@login_siswa')->name('login_siswa.post');
Route::get('logout', 'LoginController@logout');

// registrasi oleh user
Route::get('register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');

Route::middleware(['auth'])->group(function () {
    Route::post('siswa/{peserta}/cetak', 'PesertaController@cetak')->name('cetak_kartu');
    Route::view('profile', 'profile');
    Route::post('change-profile', 'UserController@change_profile')->name('change-profile');
    Route::post('change-password', 'UserController@change_password')->name('change-password');
});

Route::group(['prefix'=>'admin/', 'middleware'=>['auth','role:super_admin,admin']], function(){
    Route::get('index','AdminController@index');

    //Register
    Route::resource('register', RegisterController::class);
    Route::get('orangtua/{orangtua}', 'RegisterController@orang_tua');

    Route::get('calon_siswa', 'PesertaController@index');
    Route::get('siswa', 'PesertaController@siswa');
    Route::post('siswa/export', 'PesertaController@siswa_export');
    Route::post('siswa/{peserta}', 'PesertaController@update');

    //Pembayaran calon siswa
    Route::resource('pembayaran', PembayaranController::class);
    Route::put('pembayaran/{pembayaran}/verified', 'PembayaranController@verified');

    Route::get('nilai-raport', 'RaportController@admin');
    Route::get('nilai-raport/{register}', 'RaportController@show');

    Route::middleware('role:super_admin')->group(function(){
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

        //Slide
        Route::view('slide', 'admin.slide');
        Route::get('slide/create','SlideController@create');
        Route::post('slide','SlideController@store');

        //Galery
        Route::resource('gallery',GalleryController::class);

        Route::get('web_setting', 'SettingController@web_setting');
        Route::post('web_setting', 'SettingController@post_web_setting');

        // Mitra industri
        Route::resource('mitra-kerja', MitraKerjaController::class);

        Route::resource('testimoni', TestimoniController::class);
    });
});

Route::group(['middleware'=>['auth','role:peserta'], 'prefix'=>'user'], function(){
    Route::view('index', 'user.index');
    Route::view('data-rapot', 'user.data_raport');
    Route::view('konfirmasi_pembayaran', 'user.konfirmasi_pembayaran');
    Route::view('pembayaran', 'user.pembayaran');
    Route::put('pembayaran/{pembayaran}', 'PembayaranController@update')->name('user.pembayaran');
    Route::post('register/{register}', 'RegisterController@update');
    Route::get('nilai-rapot', 'RaportController@index');
    Route::post('nilai-rapot', 'RaportController@update');
    Route::get('data-prestasi', 'AchievementController@index');
    Route::post('data-prestasi', 'AchievementController@store');
    Route::delete('data-prestasi/{achievement}', 'AchievementController@destroy')->name('data-prestasi.delete');
});

Route::post('tambah-nama-sekolah', function(Request $request){
    $request->validate(['namasekolah'=>'required|unique:asal_sekolah,namasekolah']);
    DB::table('asal_sekolah')->insert([
        'namasekolah'=>strtoupper($request->namasekolah),
    ]);
    return strtoupper($request->namasekolah);
});
