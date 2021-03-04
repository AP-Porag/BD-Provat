<?php

namespace App\Http\Controllers\Frontend;

use App\CustomAdd;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubCategoryPageController extends Controller
{
    protected function index($slug)
    {
        //for nav bar
        $categories = Category::all();
        //for breaking news
        $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','desc')->get();
        $headlines = Post::orderBy('created_at','desc')->limit(10)->get();
        //for search post belongs to this subcategory
        $category = SubCategory::where('slug',$slug)->first();
        $main_post = Post::where('sub_category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'desc')->first();

        $right_side_posts = Post::where('sub_category_id', $category->id)->where('id', '!=', $main_post->id)->where('status', 'published')->orderBy('created_at', 'desc')->limit(2)->get();

        $bottom_side_posts = Post::where('sub_category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'desc')->where('id', '>=', 4)->limit(3)->get();

        $posts = Post::where('sub_category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'desc')->paginate(4);

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

        return response(view('frontend.category-subcategory-tag-page', compact('slug', 'categories', 'breaking_news','headlines', 'posts', 'main_post', 'category', 'right_side_posts', 'bottom_side_posts','latest_news','popular_news','top_right_add',
            'right_side_one_add',
            'right_side_two_add',
            'right_side_three_add',
            'right_side_four_add')));
    }
}
