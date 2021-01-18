<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{
    protected function index()
    {
        //for nav bar
        $categories = Category::all();

        //for dynamic title
        $slug = 'আমাদের-কথা';
        return response(view('frontend.about-page',compact('slug','categories')));
    }
}
