<?php

namespace App\Http\Controllers;

use App\Charts\TotalVisitorChart;
use App\CustomAdd;
use App\Models\Category;
use App\Models\Notification;
use App\Models\Post;
use App\Models\SubCategory;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Analytics\AnalyticsFacade as Analytics;
use Spatie\Analytics\Period;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    //    public function index()
    //    {
    //        return view('admin.index');
    //    }

    public function index()
    {
        $user = Auth::user();
        if ($user->hasRole('subscriber')) {

            $categories = Category::all();

            $breaking_news = Post::Where('breaking','breaking')->orderBy('created_at','DESC')->get();

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
            $feature_news = Post::Where('featured','featured')->orderBy('created_at','DESC')->limit(9)->get();
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
            $custom_add = CustomAdd::first();

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
                'custom_add'
            ]));
        } else {
            //Dashboard Data Controlling start
            //All Post
            $postCount = Post::where('status','published')->count();
            $postForThisMonth = Post::select('*')->whereMonth('created_at', Carbon::now()->month)->count();
            $subscriberCount = User::role('subscriber')->count();

            //for progressive bar
            $categories = Category::orderBy('created_at','DESC')->paginate(5,['*'],'categories');

            $subCategories = SubCategory::orderBy('created_at','DESC')->paginate(5,['*'],'subCategories');

            $categoriesViews = Category::orderBy('created_at','DESC')->paginate(5,['*'],'categoriesViews');
            $subCategoriesViews = SubCategory::orderBy('created_at','DESC')->paginate(5,['*'],'subCategoriesViews');

            //google analytics
            $totalVisitors = Analytics::fetchTotalVisitorsAndPageViews(Period :: days(7));

            // Retrieve Total Visitors and Page Views
            $total_visitors = Analytics::fetchTotalVisitorsAndPageViews(Period::months(1))->pluck('date','visitors'); //bar chart
            $total_visitors_pageViews = Analytics::fetchTotalVisitorsAndPageViews(Period::months(1))->pluck('date','pageViews'); //bar chart

            $totalVisitorsChart = new TotalVisitorChart();
            $totalVisitorsChart->labels($total_visitors->values());
            $totalVisitorsChart->dataset('Visitors', 'bar', $total_visitors->keys())->backgroundColor('#4167d6');
            $totalVisitorsChart->dataset('Page-Views', 'line', $total_visitors_pageViews->keys())->backgroundColor('#2c9faf');


            // Retrieve User Types
            $user_types = Analytics::fetchUserTypes(Period::days(7))->pluck('type','sessions');
            $user_typesChart = new TotalVisitorChart();
            $user_typesChart->labels($user_types->values());
            $user_typesChart->dataset('Visitors', 'doughnut', $user_types->keys())->backgroundColor('');

            //Retrieve Top Browsers
            $top_browser = Analytics::fetchTopBrowsers(Period::months(1))->pluck('browser','sessions'); //bar chart
            $top_browserChart = new TotalVisitorChart();
            $top_browserChart->labels($top_browser->values());
            $top_browserChart->dataset('Browsers', 'bar', $top_browser->keys())->backgroundColor('#2c9faf');

            //Retrieve Most Visited Pages
            $pages = Analytics::fetchMostVisitedPages(Period::months(1));

            //retrieve visitors and pageview data for the current day and the last fifteen days
            $googlevisitors = Analytics::fetchVisitorsAndPageViews(Period::days(15)); //col-md-4-pie chart


            // Retrieve Top Referrers
            $top_referrers = Analytics::fetchTopReferrers(Period::days(7))->pluck('url','pageViews');
            $top_referrerChart = new TotalVisitorChart();
            $top_referrerChart->labels($top_referrers->values());
            $top_referrerChart->dataset('Referrers', 'bar', $top_referrers->keys())->backgroundColor('#e6ae1e');


            return view('admin.index',compact([
                'postCount',
                'postForThisMonth',
                'subscriberCount',
                'categories',
                'subCategories',
                'categoriesViews',
                'subCategoriesViews',
                'totalVisitors',
                'pages',
                'totalVisitorsChart',
                'user_typesChart',
                'top_browserChart',
                'googlevisitors',
                'top_referrerChart'
            ]));
        }
    }
}
