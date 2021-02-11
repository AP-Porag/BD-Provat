<?php

namespace App\Http\Controllers\Admin\Notification;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Notification;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class NotificationController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        $notifications = Notification::where('user_id',$user_id)->orderBy('created_at','desc')->paginate(10);
        return response(view('admin.notification.notifications',compact('notifications')));
    }
    public function notificationView($id)
    {
        $notification = Notification::findOrFail($id);

        $post_id = $notification->post_id;
        //for search post
        $post = Post::where('id', $post_id)->first();
        //comments for this post
        $comments = Comment::where('post_id', $post_id)->orderBy('created_at', 'DESC')->get();

        if ($notification->status == 'unseen'){
            $notification->status = 'seen';
            $notification->save();
        }

        return response(view('admin.posts.posts-show', compact('post', 'comments')));
    }

    public static function notificationDelete(int $id)
    {
        $notification = Notification::findOrFail($id)->delete();

        Session::flash('success', 'Notification Deleted Successfully !');
        return back();
    }
}
