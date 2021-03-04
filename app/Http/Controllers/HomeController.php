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
use Carbon\CarbonPeriod;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

            $breaking_news = Post::Where('breaking', 'breaking')->orderBy('created_at', 'desc')->get();
            $headlines = Post::orderBy('created_at','desc')->limit(10)->get();

            $last_top_news = Post::where('status', 'published')->orderBy('created_at', 'desc')->first();
            $top_news = Post::where('status', 'published')->orderBy('created_at', 'desc')->where('id', '!=', $last_top_news->id)->paginate(4);

            //latest news
            $latest_news = Post::where('status', 'published')->orderBy('created_at', 'desc')->where('id', '>=', 7)->limit(15)->get();

            //popular news
            $popular_news = Post::orderBy('views', 'desc')->whereDate('created_at', '>', Carbon::now()->subMonth())->limit(15)->get();

            $national_posts = Post::where('category_id', 1)->where('status', 'published')->orderBy('id', 'desc')->limit(6)->get();

            $last_political_post = Post::where('category_id', 2)->where('status', 'published')->orderBy('id', 'desc')->first();
            $political_posts = Post::where('category_id', 2)->where('status', 'published')->orderBy('id', 'desc')->where('id', '!=', $last_political_post->id)->paginate(4);

            $last_info_tech_post = Post::where('category_id', 8)->where('status', 'published')->orderBy('id', 'desc')->first();
            $info_tech_posts = Post::where('category_id', 8)->where('status', 'published')->orderBy('id', 'desc')->where('id', '!=', $last_info_tech_post->id)->paginate(4);

            $last_law_post = Post::where('category_id', 5)->where('status', 'published')->orderBy('id', 'desc')->first();
            $law_posts = Post::where('category_id', 5)->where('status', 'published')->orderBy('id', 'desc')->where('id', '!=', $last_law_post->id)->paginate(4);

            $last_entertainment_post = Post::where('category_id', 6)->where('status', 'published')->orderBy('id', 'desc')->first();
            $entertainment_posts = Post::where('category_id', 6)->where('status', 'published')->orderBy('id', 'desc')->where('id', '!=', $last_entertainment_post->id)->paginate(10);

            //feature news
            $feature_news = Post::Where('featured', 'featured')->orderBy('created_at', 'desc')->limit(5)->get();
            //international
            $last_international_post = Post::where('category_id', 4)->where('status', 'published')->orderBy('id', 'desc')->first();
            $international_posts = Post::where('category_id', 4)->where('status', 'published')->orderBy('id', 'desc')->where('id', '!=', $last_international_post->id)->limit(4)->get();

            //lifestyle
            $last_lifestyle_post = Post::where('category_id', 9)->where('status', 'published')->orderBy('id', 'desc')->first();
            $lifestyle_posts = Post::where('category_id', 9)->where('status', 'published')->orderBy('id', 'desc')->where('id', '!=', $last_entertainment_post->id)->paginate(4);

            //full country
            $divisions = SubCategory::where('category_id', 3)->get();

            //sports news
            $last_sports_post = Post::where('category_id', 7)->where('status', 'published')->orderBy('created_at', 'desc')->first();
            $sports_left_posts = Post::where('category_id', 7)->where('status', 'published')->orderBy('created_at', 'desc')->where('id', '!=', $last_sports_post->id)->limit(2)->get();
            $last_left_post = $sports_left_posts->last();
            $sports_right_posts = Post::where('category_id', 7)->where('status', 'published')->orderBy('created_at', 'desc')->where('id', '>', $last_left_post->id)->limit(2)->get();

            //photo gallery
            $photo_gallery = Post::where('category_id', 6)->where('status', 'published')->orderBy('created_at', 'desc')->limit(6)->get();

            //finance news
            $finance_news = Post::where('sub_category_id', 9)->where('status', 'published')->orderBy('created_at', 'desc')->limit(4)->get();

            //NRB news
            $nrb_news = Post::where('sub_category_id', 13)->where('status', 'published')->orderBy('created_at', 'desc')->limit(4)->get();

            //tourism news
            $last_tourism_post = Post::where('sub_category_id', 15)->where('status', 'published')->orderBy('created_at', 'desc')->first();
            $tourism_posts = Post::where('sub_category_id', 15)->where('status', 'published')->orderBy('created_at', 'desc')->where('id', '!=', $last_tourism_post->id)->limit(4)->get();

            //health news
            $last_health_post = Post::where('sub_category_id', 19)->where('status', 'published')->orderBy('created_at', 'desc')->first();
            $health_posts = Post::where('sub_category_id', 19)->where('status', 'published')->orderBy('created_at', 'desc')->where('id', '!=', $last_health_post->id)->limit(4)->get();

            //religion
            $last_religion_post = Post::where('category_id', 10)->where('status', 'published')->orderBy('created_at', 'desc')->first();
            $religion_posts = Post::where('category_id', 10)->where('status', 'published')->orderBy('created_at', 'desc')->where('id', '!=', $last_religion_post->id)->limit(4)->get();
            //custom add start
            $top_right_add = CustomAdd::where('place', 'top-right')->latest()->first();
            $right_side_one_add = CustomAdd::where('place', 'right-side-one')->latest()->first();
            $right_side_two_add = CustomAdd::where('place', 'right-side-two')->latest()->first();
            $right_side_three_add = CustomAdd::where('place', 'right-side-three')->latest()->first();
            $right_side_four_add = CustomAdd::where('place', 'right-side-four')->latest()->first();
            //custom add end

            return view('frontend.index', compact([
                'categories',
                'breaking_news',
                'headlines',
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
                'top_right_add',
                'right_side_one_add',
                'right_side_two_add',
                'right_side_three_add',
                'right_side_four_add'
            ]));
        } else {
            //Dashboard Data Controlling start
            //All Post
            $postCount = Post::where('status', 'published')->count();
            $postForThisMonth = Post::select('*')->whereMonth('created_at', Carbon::now()->month)->count();
            $subscriberCount = User::role('subscriber')->count();

            //for progressive bar
            $categories = Category::orderBy('created_at', 'desc')->paginate(5, ['*'], 'categories');

            $subCategories = SubCategory::orderBy('created_at', 'desc')->paginate(5, ['*'], 'subCategories');

            $categoriesViews = Category::orderBy('created_at', 'desc')->paginate(5, ['*'], 'categoriesViews');
            $subCategoriesViews = SubCategory::orderBy('created_at', 'desc')->paginate(5, ['*'], 'subCategoriesViews');

            //google analytics
            $totalVisitors = Analytics::fetchTotalVisitorsAndPageViews(Period:: days(7));

            // Retrieve Total Visitors and Page Views
            $total_visitors = Analytics::fetchTotalVisitorsAndPageViews(Period::months(1))->pluck('date'); //bar chart
            $date_array = array();
            if ($total_visitors->count() != 0) {
                foreach ($total_visitors as $data) {
                    $date = new \DateTime($data);
                    $month_name = $date->format('M-d');
                    array_push($date_array, $month_name);
                }
            }
            $months_date = array(
                'months' => $date_array,
            );
            $total_visitors_pageViews = Analytics::fetchTotalVisitorsAndPageViews(Period::months(1))->pluck('visitors', 'pageViews'); //bar chart
            $totalVisitorsChart = new TotalVisitorChart();
            $totalVisitorsChart->labels($months_date['months']);
            $totalVisitorsChart->dataset('Visitors', 'bar', $total_visitors_pageViews->values())->backgroundColor('#4167d6');
            $totalVisitorsChart->dataset('Page-Views', 'line', $total_visitors_pageViews->keys())->backgroundColor('#2c9faf');


            // Retrieve User Types
            $user_types = Analytics::fetchUserTypes(Period::days(7))->pluck('type', 'sessions');
            $user_typesChart = new TotalVisitorChart();
            $user_typesChart->labels($user_types->values());
            $user_typesChart->dataset('Visitors', 'doughnut', $user_types->keys())->backgroundColor('');

            //Retrieve Top Browsers
            $top_browser = Analytics::fetchTopBrowsers(Period::months(1))->pluck('browser', 'sessions'); //bar chart
            $top_browserChart = new TotalVisitorChart();
            $top_browserChart->labels($top_browser->values());
            $top_browserChart->dataset('Browsers', 'bar', $top_browser->keys())->backgroundColor('#2c9faf');

            //Retrieve Most Visited Pages
            $pages = Analytics::fetchMostVisitedPages(Period::months(1));

            //retrieve visitors and pageview data for the current day and the last fifteen days
            $googlevisitors = Analytics::fetchVisitorsAndPageViews(Period::days(15)); //col-md-4-pie chart


            // Retrieve Top Referrers
            $top_referrers = Analytics::fetchTopReferrers(Period::days(7))->pluck('url', 'pageViews');
            $top_referrerChart = new TotalVisitorChart();
            $top_referrerChart->labels($top_referrers->values());
            $top_referrerChart->dataset('Referrers', 'bar', $top_referrers->keys())->backgroundColor('#e6ae1e');

            //Post Creation Overview
            $dataArray = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) posts')
                ->where("created_at", ">", \Illuminate\Support\Carbon::now()->subMonths(17))
                ->groupBy('year', 'month')
                ->orderBy('created_at', 'asc')
                ->get();


            $month_name_array = array();
            $monthly_post_count_array = array();
            if ($dataArray->count() != 0) {
                foreach ($dataArray as $data) {
                    $unformated_date = $data->month . '-' . $data->year;
                    $date = new \DateTime($unformated_date);
                    $month_name = $date->format('M-y');
                    array_push($month_name_array, $month_name);
                    array_push($monthly_post_count_array, $data->posts);
                }
            }

            $monthly_post_data_array = array(
                'months' => $month_name_array,
                'posts' => $monthly_post_count_array,
            );

            $post_creationChart = new TotalVisitorChart();
            $post_creationChart->labels($monthly_post_data_array['months']);
            $post_creationChart->dataset('Posts', 'line', $monthly_post_data_array['posts'])->backgroundColor('#00007c');

            return view('admin.index', compact([
                'postCount',
                'postForThisMonth',
                'subscriberCount',
                'categories',
                'subCategories',
                'categoriesViews',
                'subCategoriesViews',
                'post_creationChart',
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
