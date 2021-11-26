<?php

namespace App\Http\Controllers;

use App\Models\Register;
use App\Models\Gelombang;
use App\Models\Orangtua;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $register = Register::all();

        return view('admin.register.index', compact('register'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = '/admin/register';
        $date = date('Y-m-d');
        $gelombang = Gelombang::where('pendaftaran_awal', '<=', $date)
                                ->where('pendaftaran_akhir', '>=', $date)->first();
        return view('admin.register.create', compact('gelombang', 'action'));
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

        $foto = 'foto_'.date('Y-m-d').'.'.$request->file('foto')->getClientOriginalExtension();
        $ijazah = 'ijazah_'.date('Y-m-d').'.'.$request->file('ijazah')->getClientOriginalExtension();

        $request->file('foto')->storeAs('files-register', $foto);
        $request->file('ijazah')->storeAs('files-register', $ijazah);

        $register = $request->merge(['gelombang_id'=>$gelombang->id])->toArray();
        $register['foto'] = $foto;
        $register['ijazah'] = $ijazah;

        $id = Register::create($register)->id;
        Orangtua::create($request->merge(['register_id'=>$id])->toArray());

        // $this->whatsappNotification($request->hp_siswa);

        $url = auth()->check()?redirect('admin/register'):back();
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
            $request->file('foto')->storeAs('files-register', $foto);
            $data['foto'] = $foto;
        }
        if($request->hasFile('ijazah')){
            $ijazah = 'ijazah_'.date('Y-m-d').'.'.$request->file('ijazah')->getClientOriginalExtension();
            $request->file('ijazah')->storeAs('files-register', $ijazah);
            $data['ijazah'] = $ijazah;
        }

        $register->update($data);
        $register->orangtua->update($request->all());

        return redirect('admin/register')->with('success', 'Data Register berhasil diubah.');
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

    public function whatsappNotification(string $recipient)
    {
        // $sid    = getenv("TWILIO_AUTH_SID");
        // $token  = getenv("TWILIO_AUTH_TOKEN");
        // $wa_from= getenv("TWILIO_WHATSAPP_FROM");
        // $twilio = new \Twilio\Rest\Client($sid, $token);

        // $body = "Hello, welcome to codelapan.com.";

        // return $twilio->messages->create("whatsapp:$recipient",["from" => "whatsapp:$wa_from", "body" => $body]);
    }
}
