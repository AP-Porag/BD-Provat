<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SinglePostPageController extends Controller
{
    protected function index($slug)
    {
        //for nav bar
        $categories = Category::all();

        //for search post
        $posts = Post::where('slug',$slug)->where('status','published')->orderBy('created_at','DESC')->paginate(12);
        return response(view('frontend.single-post-page',compact('slug','categories','posts')));
    }
}
