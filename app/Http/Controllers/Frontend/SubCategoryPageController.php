<?php

namespace App\Http\Controllers\Frontend;

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
        $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','DESC')->get();
        //for search post belongs to this subcategory
        $category = SubCategory::where('slug',$slug)->first();
        $main_post = Post::where('sub_category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'DESC')->first();

        $right_side_posts = Post::where('sub_category_id', $category->id)->where('id', '!=', $main_post->id)->where('status', 'published')->orderBy('created_at', 'DESC')->limit(2)->get();

        $bottom_side_posts = Post::where('sub_category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '>=', 4)->limit(3)->get();

        $posts = Post::where('sub_category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'DESC')->paginate(4);

        //latest news
        $latest_news = Post::where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '>=', 7)->limit(15)->get();

        //popular news
        $popular_news = Post::orderBy('views', 'DESC')->whereDate('created_at', '>', Carbon::now()->subMonth())->limit(15)->get();

        return response(view('frontend.category-subcategory-tag-page', compact('slug', 'categories', 'breaking_news', 'posts', 'main_post', 'category', 'right_side_posts', 'bottom_side_posts','latest_news','popular_news')));
    }
}
