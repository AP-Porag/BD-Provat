<?php

namespace App\Listeners;

use App\Events\NewCommentCreatedEvent;
use App\Models\Notification;
use App\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendingNotificationToAllUserListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param NewCommentCreatedEvent $event
     * @return void
     */
    public function handle(NewCommentCreatedEvent $event)
    {
        $users = User::whereHas('roles', function ($q) {

            $q->where('name', '!=', 'supper-admin')->where('name', '!=', 'subscriber');

        })->get();
        $comment = $event->comment;
        $comment_id = $comment->id;
        $commenter_id = $comment->user_id;
        $commented_post_id = $comment->post_id;

        foreach ($users as $user) {
            $notification = Notification::create([
                'user_id' => $user->id,
                'comment_id' => $comment_id,
                'post_id' => $commented_post_id,
                'commenter_id' => $commenter_id,
                'status' => 'unseen',
            ]);
        }

    }
}
