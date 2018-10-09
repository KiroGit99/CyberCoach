<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;
use App\Teacher;
use App\Admin;
use App\Lessons;

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

        $student = Student::all()->toArray();
        $teacher = Teacher::all()->toArray();
        $admin = Admin::all()->toArray();
        $lessons = Lessons::all()->toArray();

        $activity = array();
        foreach($student as $stu)
        {
            array_push($activity, $stu);
        }
        foreach($teacher as $t)
        {
            array_push($activity, $t);
        }
        foreach($admin as $ad)
        {
            array_push($activity, $ad);
        }
        foreach($lessons as $l)
        {
            array_push($activity, $l);
        }

        $length = count($activity);
        //INSERTION SORT
        $i = 1;
        while($i < $length)
        {
            $j = $i;
            while($j > 0 && strtotime($activity[$j]['updated_at']) > strtotime($activity[$j-1]['updated_at']))
            {
                $temp = $activity[$j-1];
                $activity[$j-1] = $activity[$j];
                $activity[$j] = $temp;
                $j--;
            }
            $i++;
        }
        $admin_log = array();
        $counter = 0;
        foreach($activity as $act)
        {
            if(array_key_exists('lesson_path', $act))
            {
                $admin_log[$counter]['timestamp'] = $act['updated_at'];
                $admin_log[$counter]['activity'] = "uploaded ".$act['lesson_path'];
                $admin_log[$counter]['username'] = Teacher::find($act['teacher_id'])->username;
                $admin_log[$counter]['user_type'] = "Teacher";
            }
            else if(array_key_exists('teacher', $act))
            {
                $admin_log[$counter]['timestamp'] = $act['updated_at'];
                $admin_log[$counter]['activity'] = "added user account for ".$act['first_name'].' '.$act['last_name'];
                $admin_log[$counter]['username'] = 'Admin1';
                $admin_log[$counter]['user_type'] = "Admin";
            }
            else if(array_key_exists('name', $act))
            {
                $admin_log[$counter]['timestamp'] = $act['updated_at'];
                $admin_log[$counter]['activity'] = "added user account for ".$act['name'];
                $admin_log[$counter]['username'] = 'Admin1';
                $admin_log[$counter]['user_type'] = "Admin";
            }
            else
            {
                $admin_log[$counter]['timestamp'] = $act['updated_at'];
                $admin_log[$counter]['activity'] = "added user account for ".$act['first_name'].' '.$act['last_name'];
                $admin_log[$counter]['username'] = 'Admin1';
                $admin_log[$counter]['user_type'] = "Admin";
            }
            $counter++;
        }
        return view('admin.dashboard')->with('activity', $admin_log);
    }
}
