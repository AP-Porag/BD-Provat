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
        $custom_add_one = CustomAdd::where('place', 'custom-add-one')->latest()->first();
        $custom_add_two = CustomAdd::where('place', 'custom-add-two')->latest()->first();
        $custom_add_three = CustomAdd::where('place', 'custom-add-three')->latest()->first();
        $custom_add_four = CustomAdd::where('place', 'custom-add-four')->latest()->first();
        $custom_add_five = CustomAdd::where('place', 'custom-add-five')->latest()->first();
        $custom_add_six = CustomAdd::where('place', 'custom-add-six')->latest()->first();
        //custom add end
        return response(view('frontend.contact-us-page',compact('slug','categories','breaking_news','headlines',
            'custom_add_one',
            'custom_add_two',
            'custom_add_three',
            'custom_add_four',
            'custom_add_five',
            'custom_add_six')));
    }
}
