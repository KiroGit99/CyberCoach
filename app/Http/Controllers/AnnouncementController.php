<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcement;
use Auth;

class AnnouncementController extends Controller
{
    //
    public function addAnnouncement(Request $request)
    {
        $announce = new Announcement;
        $announce->title = $request->title;
        $announce->announcement = $request->announce;
        $user = '';
        if(Auth::guard('teacher')->check())
        {
            $announce->user_type = 'teacher';
            $announce->user_id = Auth::id();
            $user = 'teacher';
        }
        else if(Auth::guard('admin')->check())
        {
            $announce->user_type = 'admin';
            $announce->user_id = Auth::id();
            $user = 'admin';
        }
        $announce->save();
        if($user == 'teacher')
        {
            return redirect('/teacher/home');
        }
        else if($user == 'admin')
        {
            return redirect('/admin/home');
        }
    }
}
