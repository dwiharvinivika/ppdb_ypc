<?php

namespace App\Http\Controllers;

use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AchievementController extends Controller
{
    public function index()
    {
        $categories = DB::table('achievement_categories')->limit(13)->pluck('tingkat');
        $achievements = auth()->user()->register->achievements;
        return view('user.achievement', compact('categories', 'achievements'));
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_prestasi' => 'required',
            'category' => 'required|in:1,2',
            'juara' => 'required',
            'kelompok' => 'required|in:tunggal,beregu',
            'bukti' => 'required|image'
        ]);
        $bukti = Str::slug($validate['nama_prestasi']).uniqid().'.'.$request->file('bukti')->getClientOriginalExtension();
        $request->file('bukti')->move('images/bukti/', $bukti);
        $validate['bukti'] = $bukti;
        $validate['register_id'] = $request->user()->register->id;
        Achievement::create($validate);
        return back()->with('success', 'Data Prestasi berhasil ditambahkan');
    }

    public function destroy(Achievement $achievement)
    {
        if(file_exists(public_path('images/bukti/'.$achievement->bukti))){
            unlink(public_path('images/bukti/'.$achievement->bukti));
        }
        $achievement->delete();
        return back()->with('success', 'Data Prestasi berhasil dihapus');
    }
}
