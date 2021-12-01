<?php

namespace App\Exports;

use App\Models\Register;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class SiswaExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\View
    */
    public function view(): View
    {
        $registers = Register::whereHas('peserta')->get();
        return view('exports.siswa', compact('registers'));
    }
}
