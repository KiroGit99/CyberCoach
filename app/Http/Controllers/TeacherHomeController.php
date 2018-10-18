<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Teacher;
use App\DiscussionThread;
use App\Announcement;
use Auth;

class TeacherHomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
        $user = Auth::id();
        //get lessons
        $directory = 'public/lessons_'.$user;
        $files = Storage::files($directory);
        for($x = 0; $x < count($files); $x++)
        {
            $file = $files[$x];
            $position = strrpos($file, "/");
            $file = substr($file, $position + 1);
            $files[$x] = $file;
        }
        $teacher = Teacher::find($user);
        $threads = DiscussionThread::all();
        $announcements = Announcement::where('user_type', 'teacher')
                                    ->where('user_id', $teacher->id)
                                    ->orWhere('user_type', 'admin')
                                    ->get();
       return view('teacher.dashboard')->with(['teacher' => $teacher, 'files'=> $files, 'threads' => $threads, 'announce' => $announcements]);
     }
}