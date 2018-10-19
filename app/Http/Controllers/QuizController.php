<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quizzes;
use Illuminate\Support\Facades\DB;
use Auth;

class QuizController extends Controller
{
    //
    public function addQuiz(Request $request)
    {
        //dd($request);
        $num_questions = count($request->question);
        $quiz = new Quizzes;
            $quiz->title = $request->title;
            $quiz->description = $request->description;
            $quiz->active = 1;
            if(Auth::guard('teacher')->check())
            {
                $quiz->teacher_id = Auth::id();
            }
            $quiz->save();
        for($i = 0; $i < $num_questions; $i++)
        {
            DB::table('quiz_questions')->insert([
                ['quiz_id' => $quiz->id, 'quiz_order' => ($i + 1), 'choice_1' => $request->choice_1[$i], 'choice_2' => $request->choice_2[$i], 'choice_3' => $request->choice_3[$i], 'choice_4' => $request->choice_4[$i], 'answer' => $request->answer[$i]]
            ]);
        }
        /*DB::table('quiz_questions')->insert([
            ['quiz_i']
        ])*/
        return redirect('teacher/home');
    }
}
