<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Student;
use App\DiscussionThread;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();
        $student = Student::find($id);

        //get lessons
        $directory = 'public/lessons_'.$student->teacher;
        $files = Storage::files($directory);
        for($x = 0; $x < count($files); $x++)
        {
            $file = $files[$x];
            $position = strrpos($file, "/");
            $file = substr($file, $position + 1);
            $files[$x] = $file;
        }

        //get discussion threads
        $threads = DiscussionThread::all();

        return view('student.dashboard')->with(['student' => $student, 'files' => $files, 'threads' => $threads]);
    }
}
