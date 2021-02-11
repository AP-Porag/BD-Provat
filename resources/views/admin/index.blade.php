@extends('layouts.admin')

@section('title')
    Dashboard
@endsection

@section('before-path')

@endsection

@section('breadcrumb-name')

@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="content">
        @can('dashboard')
            <!-- Content Row -->
                <div class="row">

                    <!-- Post (Total) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Post (Total)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$postCount}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Post (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Total Post (Monthly)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$postForThisMonth}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-paste fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Total Visitors (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                            Total Visitors (Monthly)
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$postForThisMonth}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-binoculars fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Total Subscriber Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Total Subscriber
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{$subscriberCount}}</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-street-view fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Post Creation Overview</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="myAreaChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pie Chart -->
                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                       data-toggle="dropdown"
                                       aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                         aria-labelledby="dropdownMenuLink">
                                        <div class="dropdown-header">Dropdown Header:</div>
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2">
                                    <canvas id="myPieChart"></canvas>
                                </div>
                                <div class="mt-4 text-center small">
                            <span class="mr-2">
                                <i class="fas fa-circle text-primary"></i> Direct
                            </span>
                                    <span class="mr-2">
                                <i class="fas fa-circle text-success"></i> Social
                            </span>
                                    <span class="mr-2">
                                <i class="fas fa-circle text-info"></i> Referral
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{--            bar Chart--}}
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Content Column one -->
                    <div class="col-lg-6 mb-4">

                        <!-- Category wise Post  Card -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Category-wise Post Percentage</h6>
                            </div>
                            <div class="card-body">
                                @php
                                    $classArray = [
                                        'bg-gradient-warning',
                                        'bg-gradient-danger',
                                        'bg-gradient-dark',
                                        'bg-gradient-primary',
                                        'bg-gradient-success',
                                        'bg-gradient-info',
                                    ];
                                @endphp
                                @foreach($categories as $category)
                                    <div class="single-category-post">
                                        <h4 class="small font-weight-bold">{{$category->name}} <span class="float-right">
                                    @php
                                        $postUnderThisCategory = $category->posts->count();
                                        $totalPosts = \App\Models\Post::where('status','published')->count();
                                        $percent = $postUnderThisCategory / $totalPosts * 100;
                                    @endphp
                                                {{ceil($percent)}}%
                                </span>
                                        </h4>
                                        <div class="progress mb-4">
                                            <div
                                                class="progress-bar {{implode(\Illuminate\Support\Arr::random($classArray, 1))}}"
                                                role="progressbar" style="width: {{ceil($percent)}}%"
                                                aria-valuenow="{{ceil($percent)}}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="">
                                    {{ $categories->appends(['subCategories'=>$subCategories->currentPage(),'categoriesViews'=>$categoriesViews->currentPage(),'subCategoriesViews'=>$subCategoriesViews->currentPage()])->links() }}
                                </div>
                                <div class="">
                                    <p>Total posts : <span>{{$totalPosts}}</span></p>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Content Column two -->
                    <div class="col-lg-6 mb-4">

                        <!-- Sub Category wise Post  Card -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Sub-Category-wise Post Percentage</h6>
                            </div>
                            <div class="card-body">
                                @php
                                    $classArray = [
                                        'bg-gradient-warning',
                                        'bg-gradient-danger',
                                        'bg-gradient-dark',
                                        'bg-gradient-primary',
                                        'bg-gradient-success',
                                        'bg-gradient-info',
                                    ];
                                @endphp
                                @foreach($subCategories as $subCategory)
                                    <div class="single-category-post">
                                        <h4 class="small font-weight-bold">{{$subCategory->name}} <span class="float-right">
                                    @php
                                        $postUnderThisSubCategory = $subCategory->posts->count();
                                        $totalSubPosts = \App\Models\Post::where('sub_category_id','!=',null)->where('status','published')->count();
                                        $SubPercent = $postUnderThisSubCategory / $totalSubPosts * 100;
                                    @endphp
                                                {{ceil($SubPercent)}}%
                                </span>
                                        </h4>
                                        <div class="progress mb-4">
                                            <div
                                                class="progress-bar {{implode(\Illuminate\Support\Arr::random($classArray, 1))}}"
                                                role="progressbar" style="width: {{ceil($SubPercent)}}%"
                                                aria-valuenow="{{ceil($SubPercent)}}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="">
                                    {{ $subCategories->appends(['categories'=>$categories->currentPage(),'categoriesViews'=>$categoriesViews->currentPage(),'subCategoriesViews'=>$subCategoriesViews->currentPage()])->links() }}
                                </div>
                                <div class="">
                                    <p>Total posts with sub-category : <span>{{$totalSubPosts}}</span></p>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Content Column two -->
                    <div class="col-lg-6 mb-4">

                        <!-- Category wise Post view Card -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Category-wise Post View Percentage</h6>
                            </div>
                            <div class="card-body">
                                @php
                                    $classArray = [
                                        'bg-gradient-warning',
                                        'bg-gradient-danger',
                                        'bg-gradient-dark',
                                        'bg-gradient-primary',
                                        'bg-gradient-success',
                                        'bg-gradient-info',
                                    ];
                                @endphp
                                @foreach($categoriesViews as $categoriesView)
                                    <div class="single-category-post">
                                        <h4 class="small font-weight-bold">{{$categoriesView->name}} <span class="float-right">
                                    @php
                                        $postViewCount = 0;
                                        foreach ($categoriesView->posts as $cPost){
                                           $cPostView = $cPost->views;
                                           $postViewCount =$postViewCount += $cPostView;
                                        }

                                        $categoriesPosts = \App\Models\Post::where('category_id', '!=' ,null)->get();
                                        $categoriesPostViewCount = 0;
                                        foreach ($categoriesPosts as $catePost){
                                           $catePostView = $catePost->views;
                                           $categoriesPostViewCount =$categoriesPostViewCount += $catePostView;
                                        }

                                    $catePostViewPercentage = $postViewCount / $categoriesPostViewCount * 100;
                                    @endphp
                                                {{ceil($catePostViewPercentage)}}%
                                </span>
                                        </h4>
                                        <div class="progress mb-4">
                                            <div
                                                class="progress-bar {{implode(\Illuminate\Support\Arr::random($classArray, 1))}}"
                                                role="progressbar" style="width: {{ceil($catePostViewPercentage)}}%"
                                                aria-valuenow="{{ceil($catePostViewPercentage)}}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="">
                                    {{$categoriesViews->appends(['categories'=>$categories->currentPage(),'subCategories'=>$subCategories->currentPage(),'subCategoriesViews'=>$subCategoriesViews->currentPage()])->links()}}
                                </div>
                                <div class="">
                                    <p>Posts Total View : <span>{{$categoriesPostViewCount}}</span></p>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Content Column two -->
                    <div class="col-lg-6 mb-4">

                        <!-- Sub-Category wise Post view Card -->
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Sub-Category-wise Post View Percentage</h6>
                            </div>
                            <div class="card-body">
                                @php
                                    $classArray = [
                                        'bg-gradient-warning',
                                        'bg-gradient-danger',
                                        'bg-gradient-dark',
                                        'bg-gradient-primary',
                                        'bg-gradient-success',
                                        'bg-gradient-info',
                                    ];
                                @endphp
                                @foreach($subCategoriesViews as $subCategoriesView)
                                    <div class="single-category-post">
                                        <h4 class="small font-weight-bold">{{$subCategoriesView->name}} <span
                                                class="float-right">
                                    @php
                                        $SubPostViewCount = 0;
                                        foreach ($subCategoriesView->posts as $sPost){
                                           $sPostView = $sPost->views;
                                           $SubPostViewCount =$SubPostViewCount += $sPostView;
                                        }

                                        $subCategoriesPosts = \App\Models\Post::where('sub_category_id', '!=' ,null)->get();
                                        $subCategoriesPostViewCount = 0;
                                        foreach ($subCategoriesPosts as $subCatePost){
                                           $subCatePostView = $subCatePost->views;
                                           $subCategoriesPostViewCount =$subCategoriesPostViewCount += $subCatePostView;
                                        }

                                    $subCatePostViewPercentage = $SubPostViewCount / $subCategoriesPostViewCount * 100;
                                    @endphp
                                                {{ceil($subCatePostViewPercentage)}}%
                                </span>
                                        </h4>
                                        <div class="progress mb-4">
                                            <div
                                                class="progress-bar {{implode(\Illuminate\Support\Arr::random($classArray, 1))}}"
                                                role="progressbar" style="width: {{ceil($subCatePostViewPercentage)}}%"
                                                aria-valuenow="{{ceil($subCatePostViewPercentage)}}"
                                                aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <div class="">
                                    {{$subCategoriesViews->appends(['categories'=>$categories->currentPage(),'subCategories'=>$subCategories->currentPage(),'categoriesViews'=>$categoriesViews->currentPage()])->links()}}
                                </div>
                                <div class="">
                                    <p>Posts Total View : <span>{{$subCategoriesPostViewCount}}</span></p>
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
        @endcan
    </div>
@endsection

@section('script')

@endsection
