<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Spatie\Analytics\AnalyticsFacade as Analytics;
use Spatie\Analytics\Period;

class ChartDataController extends Controller
{

    public function getYearlyMonthWisePost()
    {
        $yearlyMonthWisePosts = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) posts')
            ->where("created_at", ">", Carbon::now()->subMonths(17))
            ->groupBy('year', 'month')
            ->orderBy('created_at', 'asc')
            ->get();
        return $yearlyMonthWisePosts;
    }

    public function setArrayValue()
    {
        $dataArray = $this->getYearlyMonthWisePost();
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

        $max_no = max($monthly_post_count_array);
        $max = round(($max_no + 10 / 2) / 10) * 10;
        $monthly_post_data_array = array(
            'months' => $month_name_array,
            'posts' => $monthly_post_count_array,
            'max' => $max,
        );

        return $monthly_post_data_array;
    }


}
