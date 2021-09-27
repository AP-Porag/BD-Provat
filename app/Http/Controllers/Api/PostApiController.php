<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    //get all category
    public function topNews()
    {
        return $headlines = Post::orderBy('created_at', 'desc')->select('id','title','slug')->limit(10)->get();
    }

    //get single post by slug
    public function singlePost($slug)
    {
        return $post = Post::where('slug', $slug)->withCount('tags')->first();
    }

}
