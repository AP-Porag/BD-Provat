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
        //for breaking news
        $breaking_news = Post::where('status', 'published')->orderBy('created_at', 'DESC')->paginate(5);
        //for search post belongs to this category
        $category = Category::where('slug', $slug)->first();
        $main_post = Post::where('category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'DESC')->first();
        $posts = Post::where('category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'DESC')->paginate(12);
        $right_side_posts = Post::where('category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'DESC')->paginate(2);
        $bottom_side_posts = Post::where('category_id', $category->id)->where('status', 'published')->orderBy('created_at', 'DESC')->paginate(3);
        return response(view('frontend.category-subcategory-tag-page', compact('slug', 'categories', 'breaking_news', 'posts', 'main_post', 'category', 'right_side_posts', 'bottom_side_posts')));
    }
}
