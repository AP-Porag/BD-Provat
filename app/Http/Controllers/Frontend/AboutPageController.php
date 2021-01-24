<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    protected function index()
    {
        //for nav bar
        $categories = Category::all();
        //for breaking news
        $breaking_tag = '1';
        $breaking_news = Post::whereHas('tags', function($q) use($breaking_tag){

            $q->where('id', '=', $breaking_tag);

        })->where('status', 'published')->orderBy('created_at', 'DESC')->limit(6)->get();

        //for dynamic title
        $slug = 'আমাদের-কথা';
        return response(view('frontend.about-page',compact('slug','categories','breaking_news')));
    }
}
