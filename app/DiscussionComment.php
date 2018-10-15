<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiscussionComment extends Model
{
    //
    protected $table="forum_comments";
    protected $primaryKey='id';
}
