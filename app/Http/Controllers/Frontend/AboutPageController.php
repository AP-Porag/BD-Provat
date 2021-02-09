<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\User;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    protected function index()
    {
        //for nav bar
        $categories = Category::all();
        //for breaking news
        $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','DESC')->get();

        //for dynamic title
        $slug = 'আমাদের-কথা';

        $users = User::whereHas('roles', function($q){

            $q->where('name', '!=', 'supper-admin')->where('name', '!=', 'admin')->where('name', '!=', 'subscriber')->where('name', '!=', 'user');

        })->get();
        return response(view('frontend.about-page',compact('slug','categories','breaking_news','users')));
    }
}
