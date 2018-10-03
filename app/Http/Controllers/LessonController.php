<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use Auth;
use App\Lessons;

class LessonController extends Controller
{

    public function upload(Request $request)
    {
        $user_id = null;
        if(Auth::guard('teacher')->check())
        {
            $user_id = Auth::id();
        }
        $name = $request->lesson->getClientOriginalName();
        $path = $request->lesson->storeAs('public/lessons_'.$user_id, $name);
        $extension = $request->lesson->extension();

        $lesson = new Lessons;
        $lesson->teacher_id = $user_id;
        $lesson->lesson_path = $name;
        $lesson->save();
        return redirect('/teacher/home');
    }
}