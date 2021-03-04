<?php

namespace App\Http\Controllers\Frontend;

use App\CustomAdd;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    protected function index()
    {
        //for nav bar
        $categories = Category::all();
//for breaking news
        $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','desc')->get();
        $headlines = Post::orderBy('created_at','desc')->limit(10)->get();
        //for dynamic title
        $slug = 'contact-us';
        //custom add start
        $top_right_add = CustomAdd::where('place', 'top-right')->latest()->first();
        $right_side_one_add = CustomAdd::where('place', 'right-side-one')->latest()->first();
        $right_side_two_add = CustomAdd::where('place', 'right-side-two')->latest()->first();
        $right_side_three_add = CustomAdd::where('place', 'right-side-three')->latest()->first();
        $right_side_four_add = CustomAdd::where('place', 'right-side-four')->latest()->first();
        //custom add end
        return response(view('frontend.contact-us-page',compact('slug','categories','breaking_news','headlines','top_right_add',
            'right_side_one_add',
            'right_side_two_add',
            'right_side_three_add',
            'right_side_four_add')));
    }
}
