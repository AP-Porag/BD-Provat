<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{
    protected function index($slug)
    {
        //for nav bar
        $categories = Category::all();

        //for search post belongs to this category
        $category = Category::where('slug',$slug)->first();
        $posts = Post::where('category_id',$category->id)->where('status','published')->orderBy('created_at','DESC')->paginate(12);
        return response(view('frontend.category-subcategory-tag-page',compact('slug','categories','posts')));
    }
}
