<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use App\DiscussionThread;
use App\DiscussionComment;
use Illuminate\Support\Facades\DB;
use Auth;

class ForumController extends Controller
{
    public function showThread($i)
    {
        $thread = DiscussionThread::find($i);
        
        $student_comments = DB::table('forum_comments')->where('thread_id', $i)
            ->where('user_type', 'student')
            ->join('student', 'forum_comments.user_id', '=', 'student.id')
            ->select('comment', 'user_id', 'first_name', 'last_name', 'forum_comments.updated_at')
            ->orderBy('updated_at', 'desc');
        $comments = DB::table('forum_comments')->where('thread_id', $i)
            ->where('user_type', 'teacher')
            ->join('teacher', 'forum_comments.user_id', '=', 'teacher.id')
            ->select('comment', 'user_id', 'first_name', 'last_name', 'forum_comments.updated_at')
            ->orderBy('updated_at', 'desc')
            ->unionAll($student_comments)
            ->get();
        return view('discussion_forum')->with(['thread'=> $thread, 'comments' => $comments]);
    }
    
    public function addThread(Request $request)
    {
        $thread = new DiscussionThread;
        $thread->thread_title = $request->title;
        $thread->thread_body = $request->desc;
        $thread->user_id = $request->user_id;
        $thread->user_type = $request->user_type;

        $thread->save();
        $type = $request->user_type;
        if($type == 'student')
        {
            return redirect('home');
        }
        else if($type == 'teacher')
        {
            return redirect('teacher/home');
        }
    }

    public function addComment(Request $request)
    {
        
        $forum_comment = new DiscussionComment;
        $forum_comment->comment = $request->comment;
        $forum_comment->user_id = Auth::id();
        $forum_comment->thread_id = $request->thread_id;
        if(Auth::guard('teacher')->check())
        {
            $forum_comment->user_type = 'teacher';
            $forum_comment->user_id = Auth::id();
        }
        else
        {
            $forum_comment->user_type = 'student';
        }
        $forum_comment->save();

        return redirect("forum/".$request->thread_id);
    }
}