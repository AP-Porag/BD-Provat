<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{
    protected function index()
    {
        //for nav bar
        $categories = Category::all();

        //for dynamic title
        $slug = 'contact-us';
        return response(view('frontend.contact-us-page',compact('slug','categories')));
    }
}
