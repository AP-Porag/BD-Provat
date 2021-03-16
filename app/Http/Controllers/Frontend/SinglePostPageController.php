<?php

namespace App\Http\Controllers\Frontend;

use App\CustomAdd;
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
        $breaking_news = Post::Where('breaking', 'breaking')->orderBy('created_at', 'desc')->get();
        $headlines = Post::orderBy('created_at', 'desc')->limit(10)->get();
        //for search post
        $post = Post::where('slug', $slug)->withCount('tags')->first();

        //update post views count in database
        $post_id = $post->id;
        Post::find($post_id)->increment('views');

        //latest news
        $latest_news = Post::where('status', 'published')->orderBy('created_at', 'desc')->where('id', '>=', 7)->limit(15)->get();
        //custom add start
        $custom_add_one = CustomAdd::where('place', 'custom-add-one')->latest()->first();
        $custom_add_two = CustomAdd::where('place', 'custom-add-two')->latest()->first();
        $custom_add_three = CustomAdd::where('place', 'custom-add-three')->latest()->first();
        $custom_add_four = CustomAdd::where('place', 'custom-add-four')->latest()->first();
        $custom_add_five = CustomAdd::where('place', 'custom-add-five')->latest()->first();
        $custom_add_six = CustomAdd::where('place', 'custom-add-six')->latest()->first();
        //custom add end

        //popular news
        $popular_news = Post::orderBy('views', 'desc')->whereDate('created_at', '>', Carbon::now()->subMonth())->limit(15)->get();

        //related_news
        $related_news = Post::where('category_id', $post->category_id)->where('id', '!=', $post_id)->inRandomOrder()->limit(6)->get();

        //comments for this post
        $comments = Comment::where('post_id', $post_id)->where('status', 'approved')->orderBy('created_at', 'desc')->get();

        return response(view('frontend.single-post-page', compact('slug', 'categories', 'breaking_news', 'headlines', 'post', 'latest_news', 'popular_news', 'related_news', 'comments',
            'custom_add_one',
            'custom_add_two',
            'custom_add_three',
            'custom_add_four',
            'custom_add_five',
            'custom_add_six')));
    }
    public function shareCounter(Request $request){
        //'it will increment shares column value of related post;
        $post = Post::find($request->post_id)->increment('shares');
        $post = Post::where('id',$request->post_id)->get();
        return response()->json($post);

    }
}
