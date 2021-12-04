<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login_admin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('admin/index');
        }

        return back()->withErrors([
            'email' => 'Email atau password tidak cocok.',
        ]);
    }

    public function login_siswa(Request $request)
    {
        $credentials = $request->validate([
            'code' => ['required', 'numeric'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('user/index');
        }

        return back()->withErrors([
            'code' => 'NISN atau password tidak cocok.',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('');
    }
}
