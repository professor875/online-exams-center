<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function viewExam(Exam $exam)
    {
        return view('exam.view',compact('exam'));

    }

    public function submitExam(Request $request)
    {
        $correct_answers = Answer::all();

        $correct = 0;
        $wrong = 0;

        foreach($request->input('answer') as $selected_answer){
            foreach ($selected_answer as $answer_id){
                if($correct_answers[$answer_id-1]->is_correct){
                    $correct = $correct + 1;
                }
                else{
                    $wrong = $wrong +1;
                }
            }
        }
        return view('exam.result',compact('correct','wrong'));
    }
    public function showExam()
    {
        $exams = Exam::latest()->get();
        return view('exam.exams', compact('exams'));
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
                $question->answers()->create([
                    'answer' => $currentAnswer,
                    'is_correct' => $isCorrect,
                ]);
            }
        }

        return redirect()->route('create-exam')->with('success', 'Exam created successfully!');
    }
}
