<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{



    public function showLoginForm()
    {
        return view("login");
    }
    public function login(){
        return redirect()>route('dashboard');
    }
}

