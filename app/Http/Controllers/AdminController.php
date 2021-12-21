<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Register;
use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $register = Register::whereHas('tahun_ajaran', function($q){
            $q->where('status', 'Aktif');
        })->get();
        $calon_siswa = Register::whereHas('tahun_ajaran', function($q){
            $q->where('status', 'Aktif');
        })->whereHas('peserta')->get();
        $jurusan = Jurusan::pluck('id', 'jurusan');
        $admin = User::where('role', 'admin')->limit(4)->get();
        return view('admin.dashboard', compact('register', 'calon_siswa', 'jurusan', 'admin'));
    }

    public function data_statistik(Request $request)
    {
        $now = Carbon::now();
        $register = Register::whereHas('tahun_ajaran', function($q){$q->where('status','Aktif');})->get();
        $calon_siswa = Register::whereHas('tahun_ajaran', function($q){$q->where('status','Aktif');})->whereHas('peserta')->get();
        $chart_register_data = [];
        $chart_calon_siswa_data = [];
        if(!is_null($request->start)&&!is_null($request->end)){
            $period = CarbonPeriod::create($request->start, $request->end);
        }else{
            $period = CarbonPeriod::create($now->copy()->subtract('days', 20)->format('Y-m-d'), $now->format('Y-m-d'));
        }
        foreach($period as $p){
            $chart_register_data[] = [
                $p->getTimestampMs(),
                $register->filter(function($r)use($p){
                    return $r->created_at->format('Y-m-d')==$p->format('Y-m-d');
                })->count()
            ];
            $chart_calon_siswa_data[] = [
                $p->getTimestampMs(),
                $calon_siswa->filter(function($r)use($p){
                    return $r->created_at->format('Y-m-d')==$p->format('Y-m-d');
                })->count()
            ];
        }
        $min = $chart_register_data[0][0];
        $max = $chart_register_data[count($chart_register_data)>20?20:count($chart_register_data)-1][0];
        return response()->json(compact('chart_register_data','chart_calon_siswa_data', 'min', 'max'));
    }
}
