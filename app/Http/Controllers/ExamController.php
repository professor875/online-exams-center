<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
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

    public function store(Request $request)
    {
        dd($request->cAnsq1);
        return 5;
    }
}
