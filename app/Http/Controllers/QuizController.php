<?php

namespace App\Http\Controllers;

class QuizController extends Controller
{
    public function show()
    {
        return view('auth.quick-quiz');
    }
}
