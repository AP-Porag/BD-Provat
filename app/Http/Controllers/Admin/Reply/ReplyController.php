<?php

namespace App\Http\Controllers\Admin\Reply;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Reply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post_id = $request->post_id;
        $user_id = $request->user_id;
        $comment_id = $request->comment_id;
        $comment_status = $request->comment_status;
        $message = $request->message;

        $this->validate($request,[
            'message'=>'required'
        ]);
        if ($comment_status == 'uncertain'){
            $comment = DB::table('comments')
                ->where('id', $comment_id)
                ->update(['status' => 'approved']);

            $reply = Reply::create([
                'user_id'=>$user_id,
                'post_id'=>$post_id,
                'comment_id'=>$comment_id,
                'message'=>$message,
            ]);
        }else{
            $reply = Reply::create([
                'user_id'=>$user_id,
                'post_id'=>$post_id,
                'comment_id'=>$comment_id,
                'message'=>$message,
            ]);
        }

        if ($reply){
            Session::flash('success', 'User Deleted Successfully !');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
