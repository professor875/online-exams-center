<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function show()
    {
        if (Auth::check()){
            if (auth()->user()->roll === 'admin'){
                return view('form.admin-form');
            }
        }
        else{
            return redirect()->route('welcome');
        }
    }
}
