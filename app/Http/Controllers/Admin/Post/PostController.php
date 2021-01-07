<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at','DESC')->paginate(10);
        return response(view('admin.posts.posts',compact('posts')));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //Extra Methods
    public static function postSoftDelete(int $id)
    {
        $post = Post::findOrFail($id)->delete();

        if ($post){
            Session::flash('success','User Inactivated Successfully !');
        }

        return back();
    }
    public static function postInactive()
    {
        $trashed_posts = Post::onlyTrashed()->orderBy('created_at', 'DESC')->paginate(5);
        return response()->view('admin.users.trashed-users', compact('trashed_posts'));
    }
    public static function postRestore(int $id)
    {
        $post = Post::onlyTrashed()->findOrFail($id)->restore();

        if ($post){
            Session::flash('success','User Activated Again !');
        }

        return back();
    }
    public static function postForceDelete(int $id)
    {
        $post = Post::onlyTrashed()->findOrFail($id)->forceDelete();

        if ($post){
            Session::flash('success','User Deleted Successfully !');
        }

        return back();
    }

    //get data for data table
    public function getPosts()
    {
        return $query = Post::select('id','created_at','post_author','title', 'status','publishing_date', 'views')->withCount(['comments'])->with('user')->get();
        //return$query = Post::all();
        return datatables($query)->make(true);
    }
}
