<?php

namespace App\Http\Controllers\Frontend;

use App\CustomAdd;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TagPageController extends Controller
{
    protected function index($slug)
    {
        //for nav bar
        $categories = Category::all();
        //for breaking news
        $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','DESC')->get();
        //for search post belongs to this tag
        $category = Tag::where('slug',$slug)->first();

        $search = $category->id;

        $posts = Post::whereHas('tags', function($q) use($search){

            $q->where('id', '=', $search);

        })->where('status', 'published')->orderBy('created_at', 'DESC')->paginate(6);

        //latest news
        $latest_news = Post::where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '>=', 7)->limit(15)->get();
        $custom_add = CustomAdd::first();

        //popular news
        $popular_news = Post::orderBy('views', 'DESC')->whereDate('created_at', '>', Carbon::now()->subMonth())->limit(15)->get();

        return response(view('frontend.tag-page', compact('slug', 'categories', 'breaking_news', 'posts', 'category','latest_news','popular_news','custom_add')));
    }
}
