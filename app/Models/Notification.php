<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $guarded = [];

    public function comment()
    {
        return $this->belongsTo(Comment::class,'comment_id');
    }
    public function post()
    {
        return $this->belongsTo(Post::class,'post_id');
    }
    public function commenter()
    {
        return $this->belongsTo(User::class,'commenter_id');
    }
}
