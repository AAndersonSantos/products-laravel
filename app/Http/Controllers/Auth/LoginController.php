<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => 'required|email|max:60',
                'password' => 'required|string',
            ],

            [
                'email.required' => 'O campo e-mail é obrigatório.',
                'email.email' => 'Insira um e-mail válido.',
                'email.max' => 'O e-mail não pode ter mais de 60 caracteres.',
                'password.required' => 'O campo senha é obrigatório.',
            ]
        );

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['email' => 'E-mail ou senha incorretos.'])->withInput();
        }

        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
