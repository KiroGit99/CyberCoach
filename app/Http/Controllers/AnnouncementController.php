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
        if(Auth::guard('teacher')->check())
        {
            $announce->user_type = 'teacher';
            $announce->user_id = Auth::id();
        }
        else if(Auth::guard('admin')->check())
        {
            $announce->user_type = 'admin';
            $announce->user_id = Auth::id();
        }
        $announce->save();
        return redirect('/teacher/home');
    }
}
