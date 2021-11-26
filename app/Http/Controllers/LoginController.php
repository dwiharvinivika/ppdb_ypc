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
            return redirect('admin/index');
        }

        return back()->withErrors([
            'email' => 'Email atau password tidak cocok.',
        ]);
    }

    public function logout()
    {
        session()->flush();
        return redirect('');
    }
}
