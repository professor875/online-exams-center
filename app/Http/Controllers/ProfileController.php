<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        return view('form.login');
    }

    public function login()
    {
        return 7;
    }
    public function logout()
    {
        auth()->logout();

        return redirect()->route('welcome');
    }
}
