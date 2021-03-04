<?php

namespace App\Http\Controllers\Frontend;

use App\CustomAdd;
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
        $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','desc')->get();
        $headlines = Post::orderBy('created_at','desc')->limit(10)->get();

        //latest news
        $latest_news = Post::where('status', 'published')->orderBy('created_at', 'desc')->where('id', '>=', 7)->limit(15)->get();
        //custom add start
        $top_right_add = CustomAdd::where('place', 'top-right')->latest()->first();
        $right_side_one_add = CustomAdd::where('place', 'right-side-one')->latest()->first();
        $right_side_two_add = CustomAdd::where('place', 'right-side-two')->latest()->first();
        $right_side_three_add = CustomAdd::where('place', 'right-side-three')->latest()->first();
        $right_side_four_add = CustomAdd::where('place', 'right-side-four')->latest()->first();
        //custom add end

        //popular news
        $popular_news = Post::orderBy('views', 'desc')->whereDate('created_at', '>', Carbon::now()->subMonth())->limit(15)->get();

        $this->validate($request,[
            'search'=>'required'
        ]);
        $search_text = $request->search;
        $posts = Post::where('title','LIKE','%'.$search_text.'%')->orderBy('created_at', 'desc')->paginate(6);

        return response(view('frontend.search-result-page', compact('search_text', 'categories', 'breaking_news','headlines', 'posts','latest_news','popular_news','top_right_add',
            'right_side_one_add',
            'right_side_two_add',
            'right_side_three_add',
            'right_side_four_add')));
    }
}
