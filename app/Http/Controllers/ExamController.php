<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\select;

class ExamController extends Controller
{
    public function viewExam(Exam $exam)
    {
        if (Auth::check()){
            if (auth()->user()->roll === 'candidate'){
                return view('exam.view',compact('exam'));
            }
        }

        return back();

    }

    public function submitExam(Request $request)
    {
        $correct_answers_key = Answer::where('is_correct',true)->pluck('id');
        $wrong_answers_key = Answer::where('is_correct',false)->pluck('id');

        $correct = 0;
        $wrong = 0;

        foreach ($request->input('answer') as $selected_answer_id){
                foreach ($correct_answers_key as $correct_answer_id){
                    if ($correct_answer_id == $selected_answer_id){
                        $correct++;
                    }
            }
            foreach ($wrong_answers_key as $wrong_answer_id){
                if ($wrong_answer_id == $selected_answer_id){
                    $wrong++;
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
