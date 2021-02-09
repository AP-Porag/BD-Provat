<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SearchPageController extends Controller
{
    protected function index(Request $request)
    {
        //for nav bar
        $categories = Category::all();
        //for breaking news
        $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','DESC')->get();

        //latest news
        $latest_news = Post::where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '>=', 7)->limit(15)->get();

        //popular news
        $popular_news = Post::orderBy('views', 'DESC')->whereDate('created_at', '>', Carbon::now()->subMonth())->limit(15)->get();

        $this->validate($request,[
            'search'=>'required'
        ]);
        $search_text = $request->search;
        $posts = Post::where('title','LIKE','%'.$search_text.'%')->orderBy('created_at', 'DESC')->paginate(6);

        return response(view('frontend.search-result-page', compact('search_text', 'categories', 'breaking_news', 'posts','latest_news','popular_news')));
    }
}
