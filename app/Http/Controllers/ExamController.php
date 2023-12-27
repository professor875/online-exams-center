<?php

namespace App\Http\Controllers;

use App\Models\Exam;
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

            return back();

    }

    public function store(Request $request)
    {
        $exam = Exam::create($request->only(['title', 'duration']));

        foreach ($request->input('questions') as $questionData) {
            $question = $exam->questions()->create(['question' => $questionData['text']]);

            foreach ($questionData['answers'] as $answerData) {
                $isCorrect = isset($answerData['correct_answer']) && $answerData['correct_answer'] == $j;

                $question->answers()->create([
                    'answer' => $answerData['text'],
                    'is_correct' => $isCorrect,
                ]);
            }
        }

        return redirect()->route('create-exam')->with('success', 'Exam created successfully!');
    }
}
