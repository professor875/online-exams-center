<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function show()
    {
        return view('form.login');
    }

    public function login(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email' , 'max:50'],
            'password' => ['required', Password::default()],
        ]);
        if (! auth()->attempt($attributes)){
            return back()->withErrors(['email'=> 'Your provided information could not be verified!']);
        };

        session()->regenerate();

        return redirect()->route('welcome');
    }
    public function logout()
    {
        auth()->logout();

        return redirect()->route('welcome');
    }
}
