<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function showExam()
    {
        $exams = Exam::all();
        if (Auth::check()){
            if (auth()->user()->roll === 'sub-admin' || auth()->user()->roll === 'examiner' || auth()->user()->roll === 'admin'){
                return view('exam.exams', compact('exams'));
            }
        }

        return back();
    }
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
        $exam = Exam::create($request->only(['title', 'duration', 'examiner']));

        foreach ($request->input('questions') as $questionData) {
            $question = $exam->questions()->create(['question' => $questionData['value']]);

            foreach ($questionData['answer'] as $currentAnswer) {

                $correct = $questionData['correct_answer'];
                $correctAnswer = $questionData['answer'][$correct];

                $isCorrect = isset($correct) && $correctAnswer == $currentAnswer;

                // $correctAnswer = $questionData['correct_answer'];
                // $isCorrect = isset($correctAnswer) && $correctAnswer == $currentAnswer;

                $question->answers()->create([
                    'answer' => $currentAnswer,
                    'is_correct' => $isCorrect,
                ]);
            }
        }

        return redirect()->route('create-exam')->with('success', 'Exam created successfully!');
    }
}
