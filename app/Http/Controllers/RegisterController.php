<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\Gelombang;
use App\Models\Orangtua;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Register::whereHas('gelombang.tahun_ajaran', function($q){
            $q->where('status', 'Aktif');
        })->get();
        return view('admin.register.index', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = request()->routeIs('register.create')?'/admin/register':'';
        $date = date('Y-m-d');
        $gelombang = Gelombang::where('pendaftaran_awal', '<=', $date)
                                ->where('pendaftaran_akhir', '>=', $date)->first();
        $view = request()->routeIs('register.create')?'admin.register.create':'register';
        return view($view, compact('gelombang', 'action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        $date = date('Y-m-d');
        $gelombang = Gelombang::where('pendaftaran_awal', '<=', $date)
                                ->where('pendaftaran_akhir', '>=', $date)->firstOrFail();

        $register = $request->merge(['gelombang_id'=>$gelombang->id])->toArray();
        if($request->hasFile('foto')){
            $foto = 'foto_'.date('Y-m-d').'.'.$request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->storeAs('files-register', $foto);
            $register['foto'] = $foto;
        }
        if($request->hasFile('ijazah')){
            $ijazah = 'ijazah_'.date('Y-m-d').'.'.$request->file('ijazah')->getClientOriginalExtension();
            $request->file('ijazah')->storeAs('public/files-register', $ijazah);
            $register['ijazah'] = $ijazah;
        }

        $user = User::create([
            'code' => $register['nisn'],
            'name' => $register['nama'],
            'password' => bcrypt($register['tgl_lhr']),
            'role' => 'peserta'
        ]);
        $register['user_id'] = $user->id;
        $register['is_read'] = !is_null(auth()->user())?1:0;
        $register['alamat_siswa'] = $register['kabupaten'].'~'.$register['kecamatan'].'~'.$register['kelurahan'].'~'.$register['rt'].'~'.$register['rw'].'~'.$register['alamat_rumah'].'~'.$register['kodepos'].'~'.$register['no_rumah'];
        $id = Register::create($register)->id;
        Orangtua::create($request->merge(['register_id'=>$id])->toArray());

        // $this->whatsappNotification($request->hp_siswa);

        $url = $request->is('register')?redirect('login_siswa'):redirect('admin/register');
        return $url->with('success', 'Register berhasil dilakukan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function show(Register $register)
    {
        $register->update(['is_read'=>1]);
        return request()->ajax()?response()->json($register):view('admin.register.detail_register', compact('register'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function edit(Register $register)
    {
        $action = route('register.update', $register);
        $date = date('Y-m-d');
        $gelombang = Gelombang::where('pendaftaran_awal', '<=', $date)
                                ->where('pendaftaran_akhir', '>=', $date)->first();
        return view('admin.register.create', compact('gelombang', 'action', 'register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterRequest $request, Register $register)
    {
        $date = date('Y-m-d');
        $gelombang = Gelombang::where('pendaftaran_awal', '<=', $date)
                                ->where('pendaftaran_akhir', '>=', $date)->firstOrFail();

        $data = $request->merge(['gelombang_id'=>$gelombang->id])->toArray();
        if($request->hasFile('foto')){
            $foto = 'foto_'.date('Y-m-d').'.'.$request->file('foto')->getClientOriginalExtension();
            $request->file('foto')->storeAs('public/files-register', $foto);
            $data['foto'] = $foto;
        }
        if($request->hasFile('ijazah')){
            $ijazah = 'ijazah_'.date('Y-m-d').'.'.$request->file('ijazah')->getClientOriginalExtension();
            $request->file('ijazah')->storeAs('files-register', $ijazah);
            $data['ijazah'] = $ijazah;
        }

        $register->update($data);
        $register->user->update(['code'=>$data['nisn']]);
        $register->orangtua->update($request->all());

        return redirect(auth()->user()->role=='peserta'?'user/index':'admin/register')->with('success', 'Data Register berhasil diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Register  $register
     * @return \Illuminate\Http\Response
     */
    public function destroy(Register $register)
    {
        $register->pembayaran()->delete();
        $register->peserta()->delete();
        $register->orangtua()->delete();
        $register->delete();
        return back()->with('success', 'Data Register berhasil dihapus.');
    }

    public function jadwal()
    {
        $gelombang = Gelombang::whereHas('tahun_ajaran', function($q){
            // $q->where('tahun_ajaran_awal', '<=', date('Y'))->where('tahun_ajaran_akhir', '>=', date('Y'));
            $q->where('status', 'Aktif');
        })->get();
        return view('jadwal', compact('gelombang'));
    }

    public function orang_tua(Orangtua $orangtua)
    {
        $anak = ['anak'=>$orangtua->anak];
        $ortu = array_merge($anak,collect($orangtua->toArray())->except('id','register_id')->toArray());
        return view('admin.register.orangtua', compact('ortu'));
    }

}
