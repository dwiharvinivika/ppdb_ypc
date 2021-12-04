<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $model = Testimoni::query();
        if(!is_null($request->is_accepted)){
            $model = $model->where('is_accepted');
        }
        $dt = DataTables::of($model)
            ->addIndexColumn()
            ->addColumn('image', function($testimoni){
                return '<img class="img-thumbnail" style="max-height: 150px" src="/img/avatars/'.$testimoni->avatar.'">';
            })
            ->addColumn('action', function($testimoni){
                return view('admin.testimoni._action', compact('testimoni'));
            })
            ->editColumn('is_accepted', function($testimoni){
                return $testimoni->is_accepted?'<span class="badge badge-success">Iya</span>':'<span class="badge badge-danger">Belum</span>';
            })
            ->escapeColumns([])
            ->toJson();
        return $request->ajax()?$dt:view('admin.testimoni.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'avatar' => 'required|image',
            'name' => 'required|string',
            'company_name' => 'required',
            'jabatan' => 'required',
            'message' => 'required'
        ]);
        $avatar = $request->file('avatar');
        $name = 'testimoni-'.uniqid().'.'.$avatar->getClientOriginalExtension();
        $avatar->move('img/avatars/', $name);
        $validate['avatar'] = $name;
        $validate['company_name'] .= ' - '.$validate['jabatan'];
        Testimoni::create($validate);
        return redirect('/')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        return view('admin.testimoni.show', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        $validate = $request->validate(['is_accepted'=>'required|boolean']);
        $testimoni->update($validate);
        return response()->json($validate['is_accepted']==1?'terima':'tolak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        if(file_exists(public_path('img/avatars/'.$testimoni->avatar))){
            unlink(public_path('img/avatars/'.$testimoni->avatar));
        }
        $testimoni->delete();
        return response()->json('oke');
    }
}
