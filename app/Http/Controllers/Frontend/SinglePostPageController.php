<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinglePostPageController extends Controller
{
    protected function index($slug)
    {
        //for nav bar
        $categories = Category::all();

        //for breaking news
        $breaking_tag = '1';
        $breaking_news = Post::whereHas('tags', function($q) use($breaking_tag){

            $q->where('id', '=', $breaking_tag);

        })->where('status', 'published')->orderBy('created_at', 'DESC')->limit(6)->get();
        //for search post
        $post = Post::where('slug',$slug)->withCount('tags')->first();

        //update post views count in database
        $post_id = $post->id;
        Post::find($post_id)->increment('views');

        //latest news
        $latest_news = Post::where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '>=', 7)->limit(15)->get();

        //popular news
        $popular_news = Post::orderBy('views', 'DESC')->whereDate('created_at', '>', Carbon::now()->subMonth())->limit(15)->get();

        //related_news
        $related_news = Post::where('category_id',$post->category_id)->where('id', '!=', $post_id)->inRandomOrder()->limit(6)->get();

        //comments for this post
        $comments = Comment::where('post_id',$post_id)->where('status','approved')->orderBy('created_at','DESC')->get();

        return response(view('frontend.single-post-page',compact('slug','categories','breaking_news','post','latest_news','popular_news','related_news','comments')));
    }
}
