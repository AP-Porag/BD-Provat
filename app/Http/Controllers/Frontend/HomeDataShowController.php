<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Post;
use App\Models\Author;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeDataShowController extends Controller
{
    public function HomeDataShow()
    {
        $categories = Category::all();

        $breaking_tag = '1';
        $breaking_news = Post::whereHas('tags', function ($q) use ($breaking_tag) {

            $q->where('id', '=', $breaking_tag);
        })->where('status', 'published')->orderBy('created_at', 'DESC')->limit(6)->get();

        $last_top_news = Post::where('status', 'published')->orderBy('created_at', 'DESC')->first();
        $top_news = Post::where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '!=', $last_top_news->id)->paginate(4);

        //latest news
        $latest_news = Post::where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '>=', 7)->limit(15)->get();

        //popular news
        $popular_news = Post::orderBy('views', 'DESC')->whereDate('created_at', '>', Carbon::now()->subMonth())->limit(15)->get();

        $national_posts = Post::where('category_id', 1)->where('status', 'published')->orderBy('id', 'DESC')->limit(6)->get();

        $last_political_post = Post::where('category_id', 2)->where('status', 'published')->orderBy('id', 'DESC')->first();
        $political_posts = Post::where('category_id', 2)->where('status', 'published')->orderBy('id', 'DESC')->where('id', '!=', $last_political_post->id)->paginate(4);

        $last_info_tech_post = Post::where('category_id', 8)->where('status', 'published')->orderBy('id', 'DESC')->first();
        $info_tech_posts = Post::where('category_id', 8)->where('status', 'published')->orderBy('id', 'DESC')->where('id', '!=', $last_info_tech_post->id)->paginate(4);

        $last_law_post = Post::where('category_id', 5)->where('status', 'published')->orderBy('id', 'DESC')->first();
        $law_posts = Post::where('category_id', 5)->where('status', 'published')->orderBy('id', 'DESC')->where('id', '!=', $last_law_post->id)->paginate(4);

        $last_entertainment_post = Post::where('category_id', 6)->where('status', 'published')->orderBy('id', 'DESC')->first();
        $entertainment_posts = Post::where('category_id', 6)->where('status', 'published')->orderBy('id', 'DESC')->where('id', '!=', $last_entertainment_post->id)->paginate(10);

        //feature news
        $feature_tag = '2';
        $feature_news = Post::whereHas('tags', function ($q) use ($feature_tag) {

            $q->where('id', '=', $feature_tag);
        })->where('status', 'published')->orderBy('created_at', 'DESC')->limit(6)->get();
        //international
        $last_international_post = Post::where('category_id', 4)->where('status', 'published')->orderBy('id', 'DESC')->first();
        $international_posts = Post::where('category_id', 4)->where('status', 'published')->orderBy('id', 'DESC')->where('id', '!=', $last_international_post->id)->limit(4)->get();

        //lifestyle
        $last_lifestyle_post = Post::where('category_id', 9)->where('status', 'published')->orderBy('id', 'DESC')->first();
        $lifestyle_posts = Post::where('category_id', 9)->where('status', 'published')->orderBy('id', 'DESC')->where('id', '!=', $last_entertainment_post->id)->paginate(4);

        //full country
        $divisions = SubCategory::where('category_id', 3)->get();

        //sports news
        $last_sports_post = Post::where('category_id', 7)->where('status', 'published')->orderBy('created_at', 'DESC')->first();
        $sports_left_posts = Post::where('category_id', 7)->where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '!=', $last_sports_post->id)->limit(2)->get();
        $last_left_post = $sports_left_posts->last();
        $sports_right_posts = Post::where('category_id', 7)->where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '>', $last_left_post->id)->limit(2)->get();

        //photo gallery
        $photo_gallery = Post::where('category_id', 6)->where('status', 'published')->orderBy('created_at', 'DESC')->limit(6)->get();

        //finance news
        $finance_news = Post::where('sub_category_id', 9)->where('status', 'published')->orderBy('created_at', 'DESC')->limit(4)->get();

        //NRB news
        $nrb_news = Post::where('sub_category_id', 13)->where('status', 'published')->orderBy('created_at', 'DESC')->limit(4)->get();

        //tourism news
        $last_tourism_post = Post::where('sub_category_id', 15)->where('status', 'published')->orderBy('created_at', 'DESC')->first();
        $tourism_posts = Post::where('sub_category_id', 15)->where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '!=', $last_tourism_post->id)->limit(4)->get();

        //health news
        $last_health_post = Post::where('sub_category_id', 19)->where('status', 'published')->orderBy('created_at', 'DESC')->first();
        $health_posts = Post::where('sub_category_id', 19)->where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '!=', $last_health_post->id)->limit(4)->get();

        //religion
        $last_religion_post = Post::where('category_id', 10)->where('status', 'published')->orderBy('created_at', 'DESC')->first();
        $religion_posts = Post::where('category_id', 10)->where('status', 'published')->orderBy('created_at', 'DESC')->where('id', '!=', $last_religion_post->id)->limit(4)->get();

        //author show
        return view('frontend.index', compact([
            'categories',
            'breaking_news',
            'last_top_news',
            'top_news',
            'latest_news',
            'popular_news',
            'national_posts',
            'last_international_post',
            'international_posts',
            'last_political_post',
            'political_posts',
            'last_info_tech_post',
            'info_tech_posts',
            'last_law_post',
            'law_posts',
            'last_entertainment_post',
            'entertainment_posts',
            'feature_news',
            'last_lifestyle_post',
            'lifestyle_posts',
            'divisions',
            'last_sports_post',
            'sports_left_posts',
            'sports_right_posts',
            'photo_gallery',
            'finance_news',
            'nrb_news',
            'last_tourism_post',
            'tourism_posts',
            'last_health_post',
            'health_posts',
            'last_religion_post',
            'religion_posts',
        ]));
    }
}
