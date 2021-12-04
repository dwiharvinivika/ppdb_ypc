<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'nisn'=>'required|max:12',
            'nik'=>'required',
            'nama'=>'required',
            'tmp_lhr'=>'required|max:20',
            'tgl_lhr'=>'required',
            'jk'=>'required',
            'sekolah'=>'required',
            'alamat_siswa'=>'required',
            'tb'=>'required',
            'lulus_thn'=>'required',
            'hp_siswa'=>'required',
            'jur1_id'=>'required',
            'jur2_id'=>'required',
            'peringkat'=>'required',
            'tgl_reg'=>'required',
            // 'gel'=>'required',
            'kodesekolah'=>'required',
            'kebutuhankhusus'=>'required',
            'transportasi'=>'required',
            'tinggal'=>'required',
            'kipksp'=>'required',
            // 'nokipksp'=>'required',
            'jmlsaudara'=>'required',
            'jarak'=>'required',
            'ketjarak'=>'required|max:10',
            'waktu'=>'required',
            'ketwaktu'=>'required|max:15',

            //Bagian orang tua
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'nama_wali'=>'required',
            'pekerjaan_ayah'=>'required',
            'pekerjaan_ibu'=>'required',
            'pekerjaan_wali'=>'required',
            'alamat_orangtua'=>'required',
            'kontak'=>'required',

            //Bagian data file
            'foto'=>'required|image',
            'ijazah'=>'required|image',
        ];
        if(request()->routeIs('register.update')||request()->is('user/register/*')){
            unset($rules['foto']);
            unset($rules['ijazah']);
        }
        return $rules;
    }
}
