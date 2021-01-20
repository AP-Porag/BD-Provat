<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagPageController extends Controller
{
    protected function index($slug)
    {
        //for nav bar
        $categories = Category::all();
//for breaking news
        $breaking_news = Post::where('status','published')->orderBy('created_at','DESC')->paginate(5);
        //for search post belongs to this tag
        $tag = Tag::where('slug',$slug)->first();
        $posts = Post::where('tag_id',$tag->id)->where('status','published')->orderBy('created_at','DESC')->paginate(12);
        return response(view('frontend.category-subcategory-tag-page',compact('slug','categories','breaking_news','posts')));
    }
}
