<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class LoginController extends Controller
{


    public function indexLoginPage(): View
    {
        return view('sites.login');
    }


    public function login(Request $request)
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


        if($validated){

        }
    }

}
