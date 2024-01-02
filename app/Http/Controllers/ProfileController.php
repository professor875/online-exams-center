<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    public function profile(Request $request)
    {
        $user = $request->user();

        return view('auth.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ]);
        $request->user()->fill($attributes);

        $request->user()->save();

        return redirect()->back();

    }
    public function show()
    {
        if (!Auth::check()) {
            return view('form.login');
        }
        return back();
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

    private function user()
    {
        return auth()->user();
    }
}
