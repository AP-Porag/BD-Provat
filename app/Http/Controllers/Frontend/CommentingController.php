<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CommentingController extends Controller
{

    public function comment(Request $request)
    {
        $post_id = $request->post_id;
        $name = $request->name;
        $comment = $request->comment;
        $email = $request->email;
        $password = $request->password;

        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)){
            $user_id = Auth::user()->id;

            $comment = Comment::create([
                'user_id'=>$user_id,
                'post_id'=>$post_id,
                'message'=>$comment,
            ]);

            return redirect()->back();
        }else{
            $user = User::create([
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password),
            ]);
            if ($user){
                $user->assignRole('subscriber');
                $user_id = $user->id;
            }
            $comment = Comment::create([
                'user_id'=>$user_id,
                'post_id'=>$post_id,
                'message'=>$comment,
            ]);

            return redirect()->back();
        }
    }
}
