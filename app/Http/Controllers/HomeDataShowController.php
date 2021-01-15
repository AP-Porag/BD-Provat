<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeDataShowController extends Controller
{
    public function HomeDataShow()
    {
        $last_national_post = Post::where('category_id', 2)->orderBy('id', 'DESC')->first();
        $national_posts = Post::where('category_id', 2)->orderBy('id', 'DESC')->where('id', '!=', $last_national_post->id)->paginate(4);

        $last_international_post = Post::where('category_id', 5)->orderBy('id', 'DESC')->first();
        $international_posts = Post::where('category_id', 5)->orderBy('id', 'DESC')->where('id', '!=', $last_international_post->id)->paginate(4);

        $last_political_post = Post::where('category_id', 3)->orderBy('id', 'DESC')->first();
        $political_posts = Post::where('category_id', 3)->orderBy('id', 'DESC')->where('id', '!=', $last_political_post->id)->paginate(4);

        $last_info_tech_post = Post::where('category_id', 8)->orderBy('id', 'DESC')->first();
        $info_tech_posts = Post::where('category_id', 8)->orderBy('id', 'DESC')->where('id', '!=', $last_info_tech_post->id)->paginate(4);

        $last_law_post = Post::where('category_id', 6)->orderBy('id', 'DESC')->first();
        $law_posts = Post::where('category_id', 6)->orderBy('id', 'DESC')->where('id', '!=', $last_law_post->id)->paginate(4);

        $last_entertainment_post = Post::where('category_id', 7)->orderBy('id', 'DESC')->first();
        $entertainment_posts = Post::where('category_id', 7)->orderBy('id', 'DESC')->where('id', '!=', $last_entertainment_post->id)->paginate(10);

        $last_lifestyle_post = Post::where('category_id', 10)->orderBy('id', 'DESC')->first();
        $lifestyle_posts = Post::where('category_id', 10)->orderBy('id', 'DESC')->where('id', '!=', $last_entertainment_post->id)->paginate(4);
        return view('frontend.index', compact('last_national_post', 'national_posts', 'last_international_post', 'international_posts', 'last_political_post', 'political_posts', 'last_info_tech_post', 'info_tech_posts', 'last_law_post', 'law_posts', 'last_entertainment_post', 'entertainment_posts', 'last_lifestyle_post', 'lifestyle_posts'));
    }
}
