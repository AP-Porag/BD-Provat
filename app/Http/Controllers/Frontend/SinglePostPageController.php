<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinglePostPageController extends Controller
{

    protected function index($slug)
    {
        //for nav bar
        $categories = Category::all();

        //for breaking news
        $breaking_news = Post::where('status', 'published')->orderBy('created_at', 'DESC')->paginate(5);
        //for search post
        $post = Post::where('slug', $slug)->first();

        //update post views count in database
        $post_id = $post->id;
        Post::find($post_id)->increment('views');
        return response(view('frontend.single-post-page', compact('slug', 'categories', 'breaking_news', 'post')));
    }
}
