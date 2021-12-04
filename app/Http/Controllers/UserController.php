<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role', 'admin')->get();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|same:password_confirmation'
        ]);
        User::create(array_merge($validate, ['role' => 'admin', 'password'=>bcrypt($validate['password'])]));
        return redirect('admin/user')->with('success', 'Data Admin berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validate = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'nullable|min:6|same:password_confirmation'
        ]);
        if(!is_null($validate['password'])){
            $validate['password'] = bcrypt($validate['password']);
        }else{ unset($validate['password']); }
        $user->update($validate);
        return redirect('admin/user')->with('success', 'Data Admin berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Data Admin berhasil dihapus.');
    }

    public function change_profile(Request $request)
    {
        $validate = $request->validate([
            'avatar' => 'sometimes|image',
            'name' => 'required|string',
            'email' => 'required|unique:users,email,'.auth()->user()->id.',id'
        ]);

        if($request->hasFile('avatar')){
            if(file_exists(public_path('img/avatars/'.auth()->user()->avatar))){
                unlink(public_path('img/avatars/'.auth()->user()->avatar));
            }
            $avatar = $request->file('avatar');
            $name = 'avatar-'.uniqid().'.'.$avatar->getClientOriginalExtension();
            $avatar->move('img/avatars/', $name);
            $validate['avatar'] = 'img/avatars/'.$name;
        }
        auth()->user()->update($validate);
        return back()->with('success', 'Profile berhasil diupdate');
    }

    public function change_password(Request $request)
    {
        $validate = $request->validate([
            'old_password' => 'required|password',
            'password' => 'required|min:6|same:confirmation_password'
        ]);
        $validate['password'] = bcrypt($validate['password']);
        auth()->user()->update($validate);
        return back()->with('success', 'Password berhasil diubah');
    }
}
