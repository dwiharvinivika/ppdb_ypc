<?php

use App\Models\Gelombang;
use App\Models\Peserta;
use Illuminate\Http\Request;
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
Route::get('hasil', function(Request $request){
    $peserta = Peserta::whereHas('register', function($q)use($request){
        $q->where('nisn', $request->nisn)->where('daftar_ulang', 1);
    })->first();
    if(is_null($peserta)){
        $hasilText = 'Maaf sekali, anda belum bisa diterima sebagai siswa disekolah ini. Jangan putus asa, tetap semangat :)';
    }else{
        $hasilText = "Selamat, Anda (<b>{$peserta->register->nama}</b>) diterima di SMK YPC Tasikmalaya, dengan jurusan <b>{$peserta->program->kode_jurusan} ({$peserta->program->jurusan})</b>";
    }
    return view('hasil', compact('hasilText'));
});

Route::view('jadwal','jadwal');
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

    Route::resource('user', UserController::class);

    Route::get('calon_siswa', 'PesertaController@index');
    Route::get('siswa', 'PesertaController@siswa');
    Route::post('siswa/{peserta}', 'PesertaController@update');

    Route::resource('biodata', BiodataController::class);

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

    //Register
    Route::resource('register', RegisterController::class);

    //Pembayaran calon siswa
    Route::resource('pembayaran', PembayaranController::class);

    //Slide
    Route::get('slide','ProsedurController@index');
    Route::get('slide/create','SlideController@create');
    Route::post('slide','SlideController@store');

    //Galery
    Route::resource('gallery',GalleryController::class);
});

Route::get('register', function(){
    $action = '/admin/register';
    $date = date('Y-m-d');
    $gelombang = Gelombang::where('pendaftaran_awal', '<=', $date)
                            ->where('pendaftaran_akhir', '>=', $date)->first();
    return view('register', compact('gelombang', 'action'));
});
