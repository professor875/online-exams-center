<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

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

        return redirect()->route('welcome');

    }
    public function dashboard()
    {
        $subAdmins = User::where('id','<>',1)->where('roll','<>','candidate')->get();
        return view('admin.dashboard', compact('subAdmins'));
    }

    public function candidate()
    {
        $candidates = User::where('roll','candidate')->get();
        $array = ['candidates' => $candidates];

        return view('admin.candidate', compact('candidates'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back();
    }
}
