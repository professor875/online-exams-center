<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ExamsController extends Controller
{
    public function show()
    {
        if (Auth::check()){
            if (auth()->user()->roll === 'sub-admin' || auth()->user()->roll === 'examiner' || auth()->user()->roll === 'admin'){
                return view('exam.create');
            }
        }
        else{
            return back();
        }
    }
}
