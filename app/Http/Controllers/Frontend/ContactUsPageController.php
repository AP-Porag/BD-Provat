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
        $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','DESC')->get();
        //for dynamic title
        $slug = 'contact-us';
        $custom_add = CustomAdd::first();
        return response(view('frontend.contact-us-page',compact('slug','categories','breaking_news','custom_add')));
    }
}
