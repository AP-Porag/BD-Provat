<?php

namespace App\Http\Controllers\Frontend;

use App\CustomAdd;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\SubMenu;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubMenuPageController extends Controller
{
    protected function index($slug)
    {
        //for nav bar
        $categories = Category::all();
        //for breaking news   'main_post', 'category', 'right_side_posts', 'bottom_side_posts',
        $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','desc')->get();
        $headlines = Post::orderBy('created_at','desc')->limit(10)->get();
        //for search post belongs to this subcategory
        $category = SubMenu::where('slug',$slug)->first();
        $categories_post_count = Post::where('sub_menu_id', $category->id)->count();
        //$main_post = Post::where('sub_menu_id', $category->id)->where('status', 'published')->orderBy('created_at', 'desc')->first();

        //$right_side_posts = Post::where('sub_category_id', $category->id)->where('id', '!=', $main_post->id)->where('status', 'published')->orderBy('created_at', 'desc')->limit(2)->get();

        //$bottom_side_posts = Post::where('sub_category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'desc')->where('id', '>=', 4)->limit(3)->get();

        $posts = Post::where('sub_menu_id', $category->id)->where('status', 'published')->orderBy('created_at', 'desc')->paginate(6);

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

        return response(view('frontend.sub-menu-page', compact('slug', 'categories', 'breaking_news','headlines', 'posts','latest_news','popular_news',
            'category',
            'categories_post_count',
            'custom_add_one',
            'custom_add_two',
            'custom_add_three',
            'custom_add_four',
            'custom_add_five',
            'custom_add_six')));
    }
}
