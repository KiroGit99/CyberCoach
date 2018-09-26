<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminHomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = (array) DB::table('student')->get();
        $teacher = (array) DB::table('teacher')->get();
        $admin = (array) DB::table('admin')->get();

        $users = $student + $teacher;
        //dd($users);
        return view('admin.dashboard');
    }
}
