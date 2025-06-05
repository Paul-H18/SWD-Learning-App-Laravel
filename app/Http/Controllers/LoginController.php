<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{


    public function indexLoginPage(): View
    {
        return view('sites.login');
    }


    public function login(Request $request): \Illuminate\Http\RedirectResponse
    {
        $validated = $request->validate([
            'email' => [
                'required',
                'email'
            ],
            'password' => [
                'required',
            ],
        ]);

        if(Auth::attempt($validated, true)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }

    public function logout(Request $request): \Illuminate\Http\RedirectResponse
    {
        Auth::logout();
        return redirect()->intended('/');
    }

}
