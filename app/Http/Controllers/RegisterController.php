<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function show()
    {
        if(Auth::check()){
            return redirect()->route('welcome');
        }
        else {
            return view('form.register');
        }
    }

    public function store(Request $request)
    {

        $request->validate([
            'roll' => ['required'],
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email' , 'max:50', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Password::default()],
        ]);

        $user = User::create([
            'roll' => $request->roll,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('welcome');

    }
}
