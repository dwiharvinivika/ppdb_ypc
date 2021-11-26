<?php

namespace App\Http\Livewire;

use App\Models\Jurusan;
use App\Models\Register;
use Livewire\Component;

class RegisterFormJurusan extends Component
{
    public $jurusan;
    public $jur1_id = '';
    public $jur2_id = '';
    public $register;

    public function mount()
    {
        if(!is_null($this->register)){
            $this->jur1_id = $this->register->jur1_id;
            $this->jur2_id = $this->register->jur2_id;
        }else{
            $this->jur1_id = old('jur1_id');
            $this->jur2_id = old('jur2_id');
        }
        $this->jurusan = Jurusan::all();
    }

    public function render()
    {
        return view('livewire.register-form-jurusan');
    }
}
