@extends('layouts.website')
@section('title')
    BD-Provat
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')
    {{-- Main news section start --}}
    <section id="main_news_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-2">
                    <a href="{{ route('single-post-page', $last_top_news->slug) }}">
                        <div class="image_box">
                            <img src="{{ $last_top_news->thumbnail }}" alt="{{ $last_top_news->slug }}" class="w-100"
                                style="max-height: 286px">
                            <div class="image_overlay">
                                <h5 class="">
                                    {{ $last_top_news->title }}
                                </h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach ($top_news as $t_news)
                            <div class="col-md-6">
                                <a class="" href="{{ route('single-post-page', $t_news->slug) }}">
                                    <div class="small_image_box">
                                        <img class="w-100" alt="{{ $t_news->slug }}" src="{{ $t_news->thumbnail }}">
                                        <div class="small_image_overlay">
                                            <h5 class="">
                                                {{ $t_news->title }}
                                            </h5>
                                        </div>
                                    </div>

                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Main news section end --}}
    {{-- National Section Start --}}
    <section id="national_news">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('category-page', 'জাতীয়') }}">
                            <span>
                                জাতীয়
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('category-page', 'জাতীয়') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <div class="row">
                        @foreach ($national_posts as $national_post)
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-img">
                                        <a href="{{ route('single-post-page', $national_post->slug) }}" class="d-flex">
                                            <img class="img-fluid card_image" alt="{{ $national_post->slug }}"
                                                src="{{ $national_post->thumbnail }}">
                                        </a>
                                    </div>
                                    <div class="card-text pl-2 pr-2 pt-2 ">
                                        <a href="{{ route('single-post-page', $national_post->slug) }}" class="d-flex">
                                            <h4 class="">
                                                {{ \Illuminate\Support\str::limit(strip_tags($national_post->title), 50) }}
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="card-text pl-2 pr-2 pb-2">
                                        <p>{!! \Illuminate\Support\str::limit(strip_tags($national_post->content), 50) !!}
                                            @if (strlen(strip_tags($national_post->content)) > 50)
                                                <a href="{{ route('single-post-page', $national_post->slug) }}"
                                                    class="text-danger">বিস্তারিত...</a>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    @include('frontend.popular_last_news')
                </div>
            </div>
        </div>
    </section>
    {{-- National International Section End --}}
    {{-- Politics Technology and Law Section Start --}}
    <section id="politics_technology_law">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('category-page', 'রাজনীতি') }}">
                            <span>
                                রাজনীতি
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('category-page', 'রাজনীতি') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <a href="{{ route('single-post-page', $last_international_post->slug) }}">
                        <img src="{{ $last_political_post->thumbnail }}" alt="" width="100%">
                        <h5 class="pt-2">
                            {{ Illuminate\Support\Str::limit($last_political_post->title, 38) }}
                        </h5>
                        <p>
                            {!! \Illuminate\Support\str::limit(strip_tags($last_international_post->content), 100) !!}
                            @if (strlen(strip_tags($last_international_post->content)) > 50)
                                <a href="{{ route('single-post-page', $last_international_post->slug) }}"
                                    class="text-danger">বিস্তারিত...</a>
                            @endif
                        </p>
                    </a>
                    <ul>
                        @foreach ($political_posts as $key => $political_post)
                            <li>
                                <a class="d-flex" href="{{ route('single-post-page', $political_post->slug) }}"><img
                                        alt="{{ $political_post->slug }}" src="{{ $political_post->thumbnail }}">
                                    <p class="ml-3">
                                        {{ $political_post->title }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('category-page', 'তথ্যপ্রযুক্তি') }}">
                            <span>
                                তথ্যপ্রযুক্তি
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('category-page', 'তথ্যপ্রযুক্তি') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <a href="{{ route('single-post-page', $last_political_post->slug) }}">
                        <img src="{{ $last_info_tech_post->thumbnail }}" alt="" width="100%">
                        <h5 class="pt-2">
                            {{ Illuminate\Support\Str::limit($last_info_tech_post->title, 38) }}
                        </h5>
                        <p>
                            {!! \Illuminate\Support\str::limit(strip_tags($last_political_post->content), 100) !!}
                            @if (strlen(strip_tags($last_political_post->content)) > 50)
                                <a href="{{ route('single-post-page', $last_political_post->slug) }}"
                                    class="text-danger">বিস্তারিত...</a>
                            @endif
                        </p>
                    </a>
                    <ul>
                        @foreach ($info_tech_posts as $key => $info_tech_post)
                            <li>
                                <a class="d-flex" href="{{ route('single-post-page', $info_tech_post->slug) }}"><img
                                        alt="{{ $info_tech_post->slug }}" src="{{ $info_tech_post->thumbnail }}">
                                    <p class="ml-3">
                                        {{ $info_tech_post->title }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('category-page', 'আইন-আদালত') }}">
                            <span>
                                আইন আদালত
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('category-page', 'আইন-আদালত') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <a href="{{ route('single-post-page', $last_law_post->slug) }}">
                        <img src="{{ $last_law_post->thumbnail }}" alt="" class="w-100">
                        <h5 class="pt-2">
                            {{ Illuminate\Support\Str::limit($last_law_post->title, 38) }}
                        </h5>
                        <p>
                            {!! \Illuminate\Support\str::limit(strip_tags($last_law_post->content), 100) !!}
                            @if (strlen(strip_tags($last_law_post->content)) > 50)
                                <a href="{{ route('single-post-page', $last_law_post->slug) }}"
                                    class="text-danger">বিস্তারিত...</a>
                            @endif
                        </p>
                    </a>
                    <ul>
                        @foreach ($law_posts as $key => $law_post)
                            <li>
                                <a class="d-flex" href="{{ route('single-post-page', $law_post->slug) }}"><img
                                        alt="{{ $law_post->slug }}" src="{{ $law_post->thumbnail }}">
                                    <p class="ml-3">{{ $law_post->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Politics Technology and Law Section End --}}
    {{-- Entertainment Section Start --}}
    <section id="entertainment_and_feature">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="d-flex justify-content-between">
                                <a class="section_header" href="{{ route('category-page', 'বিনোদন') }}">
                                    <span>
                                        বিনোদন
                                    </span>
                                </a>
                                <a class="section_link" href="{{ route('category-page', 'বিনোদন') }}">
                                    <span>
                                        সব খবর ...
                                    </span>
                                </a>
                            </h3>
                        </div>
                        <div class="card ml-3 mr-3 pt-3 pb-3">
                            <a href="{{ route('single-post-page', $last_entertainment_post->slug) }}"
                                class="d-flex for-position-image">
                                <div class="col-md-5 col-12">
                                    <h5 class="text-danger">{{ $last_entertainment_post->title }}</h5>
                                    <p class="text-justify">
                                        {!! Illuminate\Support\Str::of($last_entertainment_post->content)->words(50) !!}
                                    </p>
                                </div>
                                <div class="col-md-7 col-12">
                                    <img src="{{ $last_entertainment_post->thumbnail }}"
                                        alt="{{ $last_entertainment_post->slug }}" class="img-fluid">
                                </div>
                            </a>
                        </div>
                        <div class="col-md-12">
                            <div class="row slider">
                                @foreach ($entertainment_posts as $key => $entertainment_post)
                                    <div class="col-md-3 pt-3">
                                        <a href="{{ route('single-post-page', $entertainment_post->slug) }}"
                                            style="border: 0">
                                            <div>
                                                <img src="{{ $entertainment_post->thumbnail }}"
                                                    alt="{{ $entertainment_post->slug }}" class="img-fluid">
                                                <p class="pt-2">
                                                    {{ \Illuminate\Support\str::limit($entertainment_post->title, 30) }}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('tag-page', 'ফিচার') }}">
                            <span>
                                ফিচার
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('tag-page', 'ফিচার') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <ul>
                        @foreach ($feature_news as $f_news)
                            <li>
                                <a class="d-flex" href="{{ route('single-post-page', $f_news->slug) }}">
                                    <img height="70" width="100" alt="{{ $f_news->slug }}" src="{{ $f_news->thumbnail }}">
                                    <p class="ml-3">{{ $f_news->title }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Entertainment Section End--}}
    {{-- Lifestyle and international Section Start --}}
    <section id="international_lifestyle">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('category-page', 'আন্তর্জাতিক') }}">
                            <span>
                                আন্তর্জাতিক
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('category-page', 'আন্তর্জাতিক') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <a href="{{ route('single-post-page', $last_international_post->slug) }}">
                                <img class="img-fluid" src="{{ $last_international_post->thumbnail }}"
                                    alt="{{ $last_international_post->slug }}">
                                <h5 class="pt-2">
                                    {{ Illuminate\Support\Str::limit($last_international_post->title, 38) }}
                                </h5>
                                <p class="text-justify">
                                    {{ Illuminate\Support\Str::of($last_international_post->content)->words(25) }}
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                @foreach ($international_posts as $international_post)
                                    <li class="ml-2">
                                        <a class="d-flex" href="{{ route('single-post-page', $international_post->slug) }}">
                                            <img class="img-fluid" alt="{{ $international_post->slug }}"
                                                src="{{ $international_post->thumbnail }}">
                                            <p class="ml-2">
                                                {{ Illuminate\Support\Str::limit($international_post->title, 29) }}
                                            </p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('category-page', 'লাইফস্টাইল') }}">
                            <span>
                                লাইফস্টাইল
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('category-page', 'লাইফস্টাইল') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <a href="{{ route('single-post-page', $last_lifestyle_post->slug) }}">
                                <img class="img-fluid" src="{{ $last_lifestyle_post->thumbnail }}"
                                    alt="{{ $last_lifestyle_post->slug }}">
                                <h5 class="pt-2">
                                    {{ Illuminate\Support\Str::limit($last_lifestyle_post->title, 29) }}
                                </h5>
                                <p class="text-justify">
                                    {{ Illuminate\Support\Str::of($last_lifestyle_post->content)->words(25) }}
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6 pl-0">
                            <ul>
                                @foreach ($lifestyle_posts as $key => $lifestyle_post)
                                    <li class="ml-2">
                                        <a class="d-flex" href="{{ route('single-post-page', $lifestyle_post->slug) }}">
                                            <img class="img-fluid" alt="{{ $lifestyle_post->slug }}"
                                                src="{{ $lifestyle_post->thumbnail }}">
                                            <p class="ml-2">
                                                {{ Illuminate\Support\Str::limit($lifestyle_post->title, 29) }}
                                            </p>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Lifestyle and Education Section End --}}
    {{-- Full Contry Section Start --}}
    <section id="full_country">
        <div class="container">
            <div class="row">
                <div class="col-md-9 for-remove-country">
                    <div class="row card">
                        <div class="card-body">
                            <div class="col-md-12">
                                <div class="division_btn text-center">
                                    <ul class="division_btn btn-group">
                                        <li class="division_btn_li">
                                            <a class="btn btn-sm" href="javascript:void(0);" data-filter="*">সারাদেশ</a>
                                        </li>
                                        @foreach ($divisions as $division)
                                            <li class="division_btn_li">
                                                <a class="btn btn-sm" href="javascript:void(0);"
                                                    data-filter="{{ $division->id }}">{{ $division->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div id="container" class="grid">
                                @foreach ($divisions as $division)
                                    @foreach ($division->posts as $division_news)
                                        <div class="post-item col-md-4 " data-filter="{{ $division->id }}">
                                            <a href="{{ route('single-post-page', $division->slug) }}">
                                                <div class="card-img">
                                                    <img alt="{{ $division_news->slug }}"
                                                        src="{{ $division_news->thumbnail }}" class="w-100">
                                                </div>
                                                <h5 class="py-2">
                                                    {{ Illuminate\Support\Str::limit($division_news->title, 34) }}
                                                </h5>
                                            </a>
                                        </div>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 map">
                    <div class="card">
                        <h5 class="card-header text-center text-capitalize">Map</h5>
                        <div id="map_container" class="map_container card-body">
                            <svg version="1.1" id="map" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-201 -372.5 560 776.5"
                                style="enable-background:new -201 -372.5 560 776.5;" xml:space="preserve">
                                <style type="text/css">
                                    .st0 {
                                        opacity: 0.7;
                                    }

                                    .st1 {
                                        fill: #80C2EB;
                                    }

                                    .st2 {
                                        fill: none;
                                    }

                                    .st3 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st4 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st5 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st6 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st7 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st8 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st9 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st10 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st11 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st13 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.25;
                                        stroke-miterlimit: 10;
                                    }

                                    .st14 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.75;
                                        stroke-miterlimit: 10;
                                    }

                                    .st15 {
                                        fill: green;
                                        stroke: #FFFFFF;
                                        stroke-width: 0.25;
                                        stroke-miterlimit: 10;
                                    }

                                    .st16 {
                                        enable-background: new;
                                    }

                                    .st17 {
                                        fill: #FFFFFF;
                                    }

                                    .st18 {
                                        opacity: 0.34;
                                    }

                                    .st19 {
                                        fill: #D5D5D5;
                                    }

                                    #rangpur:hover path {
                                        fill: #8c0707;
                                    }

                                    #rangpur:hover path.st17 {
                                        fill: #fff;
                                    }

                                    #rangpur:hover path.st19 {
                                        fill: #d5d5d5;
                                    }

                                    #mymensingh:hover path {
                                        fill: #8c0707;
                                    }

                                    #mymensingh:hover path.st17 {
                                        fill: #fff;
                                    }

                                    #mymensingh:hover path.st19 {
                                        fill: #d5d5d5;
                                    }

                                    #sylhet:hover path {
                                        fill: #8c0707;
                                    }

                                    #sylhet:hover path.st17 {
                                        fill: #fff;
                                    }

                                    #sylhet:hover path.st19 {
                                        fill: #d5d5d5;
                                    }

                                    #rajshahi:hover path {
                                        fill: #8c0707;
                                    }

                                    #rajshahi:hover path.st17 {
                                        fill: #fff;
                                    }

                                    #rajshahi:hover path.st19 {
                                        fill: #d5d5d5;
                                    }

                                    #khulna:hover path {
                                        fill: #8c0707;
                                    }

                                    #khulna:hover path.st17 {
                                        fill: #fff;
                                    }

                                    #khulna:hover path.st19 {
                                        fill: #d5d5d5;
                                    }

                                    #borishal:hover path {
                                        fill: #8c0707;
                                    }

                                    #borishal:hover path.st17 {
                                        fill: #fff;
                                    }

                                    #borishal:hover path.st19 {
                                        fill: #d5d5d5;
                                    }

                                    #chittagong:hover path {
                                        fill: #8c0707;
                                    }

                                    #chittagong:hover path.st17 {
                                        fill: #fff;
                                    }

                                    #chittagong:hover path.st19 {
                                        fill: #d5d5d5;
                                    }

                                    #dhaka:hover path {
                                        fill: #8c0707;
                                    }

                                    #dhaka:hover path.st17 {
                                        fill: #fff;
                                    }

                                    #dhaka:hover path.st19 {
                                        fill: #d5d5d5;
                                    }

                                </style>
                                <g id="border">
                                    <g id="shadow">
                                        <path
                                            d="M-138.8-67.2c0.6-0.5-0.1-0.2,0.6-0.5s3.5-0.1,3.5-0.1l0.6,0.2c0,0,1.1-0.1,1.5,0.4c0.4,0.5,0.4,1.1,0.9,1.4
                                                                                                                                                                    s0.2,0.4,1.1,0.6c0.9,0.2,1.6,0.5,1.6,0.5l1.1-0.1l0.6-1.5l1.5-0.8c0,0,0.8,0.1,1.2,0.1s1.8,0.8,1.8,0.8l1.2,1.6
                                                                                                                                                                    c0,0,1,1.4,1.5,1.9c0.2,0.2,0.2,0.1,0.2,0.1c0,0.1,0.2,0.5,0.7,1.4c1.2,2.4,1.5,4,1.8,4.5s0.1,1.2,0.2,1.9s0.4,1.9,0.4,2.2
                                                                                                                                                                    s-0.4,1-0.5,1.4s-0.6,1-0.6,1l-0.5,0.8l0.5,0.8l0.8,0.5l0.1,1.1l0.5,1.1l0.1,0.9c0,0,0,1.1,0.5,1.1s1.8,0.8,1.8,0.8l0.9,1.5
                                                                                                                                                                    l1.2,0.6l3.4,0.5l2.5-0.1c0,0,0.2,0.1,0.6,0s1.5-0.5,1.5-0.5l0.8-1.6l1.2-0.8l0.6-0.6l0.6-0.8c0.6-0.2,1.9-0.5,1.9-0.5v-0.9l1-0.6
                                                                                                                                                                    l2.4-0.6l1.9,0.1l3.5,0.2l2.2,0.9l1.4,0.8l-0.2,1.4l-0.2,3.2c0,0,0.2,1.1,0.6,1.2s1.8,1.4,1.8,1.4l1.4,1.1l0.2,2.1l0.1,1.6
                                                                                                                                                                    l1.5,1.4l1.6,1.8l1.1,2.2l1.1,1.2l0.2,2.8l-1.6-0.1c0,0-0.1,1.8,0.2,2s0,0.9,1.4,1s2.6,0.2,2.6,0.2l2,0.9c0,0,0.5,1.1,1.4,1.4
                                                                                                                                                                    s2.4,0.6,3.2,0.6s1.8,0.2,2.1,0.2s2.2,0.5,3.1,0.5s2.6,0.1,2.6,0.1l3.6,0.4l4.9,0.4l1.4,0.1l2.1,0.9l0.8,1.4c0,0,1.5,0.8,2.5,1
                                                                                                                                                                    s1.5,0.5,2,0.6s1,0.4,1.4,0.5s0.5,0.6,1.2,1s1.2,1.2,1.9,1.5s1.2,0.9,1.2,0.9l2.8,1.6l1.8,1.1c0,0-0.2,1,1,1.1s2.6,0.9,3.1,1.1
                                                                                                                                                                    s2.1,1.1,3.2,1.2s0.6,0.1,3.6,0.5s4.1-0.2,4.1-0.2s2.4-2.9,2.9-2.6s1.4,0,1.4,0s1,1.2,1.8,0s1.5-2.6,1.5-2.6l1-1.5l0.4-1.6l-1-4.4
                                                                                                                                                                    l-1.5-1.2v-5.6c0,0,0.9-0.5,1.2-1.2s0.8-1.2,0.9-2s-0.6-4.8-0.6-4.8l-1.3-1.8l0.4-1.2l1.4,0.5l1.1,0.5l2.4-1.1l0.2-3.9
                                                                                                                                                                    c0,0,0.4-1.2,0.6-1.6s0.6-0.9,0.6-0.9s1.4-1.9,1.4-3s-0.4-4.2-0.4-4.6s0.4-1.6-0.4-2.2s-1.2-6.9-1.2-6.9s-0.1-1.9,0.1-2.2
                                                                                                                                                                    s1.6-1.8,2.2-2.2S-1-61.8-1-62.5s0.1-3.2,0.1-3.2l0.2-3.1l0.4-2.8l-1-2.6c0,0-0.8-1.6-0.8-2.1s-0.5-7-0.5-7L-4-85.5l-1.9-1.2
                                                                                                                                                                    c0,0-1,0.1-1-0.2s0.1-2.6,0.1-2.6s0.4-0.4,0.6-1.4s0.8-2.8,0.8-4.1s-0.1-5.1-0.1-5.5s-0.6-1.5-0.6-1.5l-0.5-1.8l-2.5-0.9l-0.4-4.6
                                                                                                                                                                    c0,0-1.5-1.6-1.6-2s-0.8-2.4-0.6-3s-0.1-2.4,0.8-3.1s0.9-1,0.9-1.5s-1.5-2.9-1.5-2.9l-0.5-2l0.2-3.2l-1.2-1.5l-2.6-3.4l-0.6-3.8
                                                                                                                                                                    l-1.6-2.6c0,0-0.8-1.1-0.8-1.5s-0.1-1.8-0.1-1.8l-0.8-2.2l-0.5-1.9v-2l-1-0.8l-0.2-2c0,0,1.6-1.8,2.1-2.2s1.4-2.6,1.4-2.6l2-1.9
                                                                                                                                                                    c0,0-0.1-1.9-0.1-2.4s0-1.9,0-1.9l-4.1,2.5h-0.9h-0.1c0.8-0.5,1.6-0.7,2.3-1.1c0.9-0.5,1-0.9,1.5-1s0.8-0.8,0.8-0.8
                                                                                                                                                                    s0.5-0.2,0.5-0.6s-0.5-2.5-0.5-2.5l-0.2-6.9l-0.2-1.1l0.5-0.8c0,0,0.8-0.2,0.9,0.1s0.2,1.2,1.1,2s1.6,1.2,1.6,1.2s0.5,0.2,0.5,0.8
                                                                                                                                                                    s0,0.8,0,1.6s0.4,2,0.4,2s-0.6,0.1,0.6,0.4s2-1.1,2-1.1s-0.5-0.8-0.2-1.9s-0.9-1.4,0.5-2.5s2.2-2,2.2-2v-4c0,0-0.8-1.9-0.8-2.2
                                                                                                                                                                    s0.1-2.5,0.1-2.5l-2.6,0.2c0,0-0.4,0.4-0.5,0.8s0,0.5-0.6,0.8s-1.1,0.5-1.1,0.5l-1.5,1.5l-1.1,1.2v1.4l-0.9-0.5l-0.6-1
                                                                                                                                                                    c0,0-0.8-1-0.4-1.5s0.9-1.5,0.9-1.5s0.8-1,1.5-1.6s1.2-0.8,2.2-1.1s1.2,2,1.5-0.9s0.2-2.1,0.2-2.9s-0.8-3.4-0.8-3.4l-1-2v-1.1
                                                                                                                                                                    l-0.2-1.5l-0.4-1.1l-0.1-1.5l0.2-1.9l0.9-1.5l1.1-1.2l0.8-0.5l0.4-0.9l0.4-1l0.5-1l1-0.8l0.9-0.4l0.2-1.6v-2.5l-1.1-1.2l-1.4-0.2
                                                                                                                                                                    l-0.4-0.8l-0.9-0.8l-0.2-0.9l0.5-1.6l-0.1-2.6v-1.1l-0.4-1.1l-1.5-1l-2.2-1h-2.2l-1.9,0.1h-0.9l-0.9-1.1l-1.5-0.5l-0.8-1.6
                                                                                                                                                                    l-0.6-1.5l-0.6-1.8l-0.2-0.6c0,0,0.1-0.6,0-1s0-3.2,0-3.2l0.1-1.4l-1.1-0.9l-1.4-0.6l-0.4-1.8v-0.9l0.4-1.1l0.5-0.6l1-0.4h0.9
                                                                                                                                                                    l0.8,0.4l0.4,1.1l0.1,1.8v1l0.8,1l-0.1,6.4l1.6,1.5l1.6,2.1l0.1,1l2,1c0,0,0.8,0.1,1.1,0s-0.5,0.1,0.4-0.1s1.1-0.4,1.6-0.4
                                                                                                                                                                    s1.2,0.1,1.6,0.1s1.1,0,1.1,0l0.9,0.1l0.6,0.5c0,0,0.5,0.4,0.5,0.8s0,0.8,0,1.1s0,1.1,0,1.1s0.1,0.9,0.5,1.5s0.4,2.1,0.4,2.1
                                                                                                                                                                    s0,1,0,1.4s0,0.9,0,0.9l1.2-0.9l0.6-0.8c0,0,0.4-1.1,0.5-1.5s0.4-1.5,0.4-1.5s0.6-0.9,0.2-1.2s-0.6-1.4-1-1.5s-1-0.9-1-0.9
                                                                                                                                                                    l-0.4-1.5l-0.4-0.9v-0.9c0,0,0.2-0.6,0.6-1.2s0.2-0.5,0.6-1.1s0.5-0.9,0.8-1.6s0.6-2.4,0.6-2.8s0-1.4,0-1.9s0-1.5,0-1.5l-0.1-0.9
                                                                                                                                                                    l1.2-0.4c0,0,0.2-0.1,0.8-0.4s0,0.1,0.5-0.2s0.9-0.5,0.9-1.1s0.2-1.9,0.2-2.8s-0.1-1.6-0.1-2.8s0-2,0-2.4s0.2-0.8,0.2-1.2
                                                                                                                                                                    s0-0.9,0.1-1.4s-0.1-1.1,0.2-1.8c0.3-0.7,1.2-2,1.2-2l0.9-1.5l0.2-1v-1l-0.6-1.1l-0.9-0.6l-0.4-1.4l-0.2-0.9l-0.2-0.8l0.4-0.6
                                                                                                                                                                    l0.2-1.9L0-266l0.8-1.1c0,0,0-0.4,0.4-0.8c0.4-0.4,0.8-0.5,0.9-1s0.1-1.2,0.1-1.2l0.1-0.8l0.5-0.9l0.2-1.8L2.2-275l-0.4-1.1
                                                                                                                                                                    l-0.6-1.2l-0.5-0.9v-1.1l1.4-0.6h0.5c0.8,0,0.8,0,0.8,0s1.4,0.2,1.4,0.8s-0.2,1-0.2,1.4s0.4-0.5,0,0.4s-0.4,1.4-0.4,1.4
                                                                                                                                                                    s-0.1,0.4,0.5,0.4s1.4-1,1.4-1l2.2-1.1c0,0,0-0.8,0.4-1s0.9-0.8,1.2-0.9c0.3-0.1,0.6-0.2,1-0.4c0.4-0.2,1.1-0.2,1.1-0.2l1.1-0.9
                                                                                                                                                                    l0.1-1l0.8-0.9l0.5-1.5l-2-0.5h-1.4l-0.6,0.2l-1-0.4l-0.8-0.1l-0.2-1.2l-0.4-1.9c0,0,0.5-0.8,0-1c-0.5-0.2-1.2-1.2-1.2-1.2
                                                                                                                                                                    l-1.5-0.1c-0.6,0-0.6,0-0.6,0L4.3-291l-0.1-1.5v-1c0,0-0.5-0.6,0.1-0.8c0.6-0.2,0.6-0.1,0.6-0.1s0.6-0.9,0.9-1.2s0.2-0.9,0.2-0.9
                                                                                                                                                                    l0.4-0.5v-1.5c0,0-0.6-0.2-1-0.2s-0.9,0-0.9,0l-1-0.6l-0.8-0.9L2.2-301l-1.1-0.6v-0.9v-1.2v-1.6l-1.6-0.6h-0.6h-2.6H-4
                                                                                                                                                                    c0,0-0.2,0-0.6,0s-0.4,0-0.4,0l-0.8-0.2l-0.5-0.6l-0.6-0.8l0.1-0.9l0.8-0.5l0.5-0.4c0,0,0.1-0.6,0.1-1c0-0.4,0-1.4,0-1.8
                                                                                                                                                                    s0-1.5,0-1.5l-0.4-1l-1.5-0.4l-1-0.4l-0.9-0.2H-11l-0.4,0.6l-0.5,0.8l-0.6,1.5l-0.8,0.8l0.9,1l1.1,1.5h0.9c0,0,0.5,0,0.6,0.4
                                                                                                                                                                    s0.1,1.4,0.1,1.4s-0.5,0-0.9,0.2c-0.4,0.2-1,0.4-1,0.4l-1-0.2l-0.4-0.9h-1l-1,0.8c0,0,0.2,0.2-0.2,0.6c-0.4,0.4-0.9,1.8-0.9,1.8
                                                                                                                                                                    l0.6,1.6l2.1,0.4l0.9,0.4c0.6,1.4,0.6,0.6,0.6,1.4c0,0.8-0.6,1.2-0.6,1.2s-0.6,0.4-1.5,0.5s-2.1,0.1-2.1,0.1l-0.8,0.2l0.5,1.4
                                                                                                                                                                    c0,0,1.2,0.5,1.6,0.5s1,0.1,1.8,0.2s1.1-0.6,1.5,0.2c0.4,0.8,0.5,1.5,0.5,1.5s0,1.6-0.8,1.9c-0.8,0.3-0.5-0.5-2,0.5
                                                                                                                                                                    s-1.1,1.4-1.9,1.5s0.1-0.4-0.8,0.1s-0.9,0.5-0.9,0.5s-1.8,0.4-0.1,0.6c1.7,0.2,3.4,0.2,3.4,0.2h0.5l-0.8,1.2c0,0-0.1,0.2-1,0.6
                                                                                                                                                                    s-0.9,0.4-0.9,0.4s-0.8,0.6-0.8,1s0.1,0.1-0.1,1s-0.1,0-0.2,0.9c-0.1,0.9,0.4,0-0.1,0.9c-0.5,0.9-0.8,1.5-0.8,1.5l-0.9,0.6
                                                                                                                                                                    c0,0,0,0.9-0.6,1c-0.6,0.1-0.2,0.2-1.1,0.2s-2.5,0.5-2.5-0.1s-0.4-1.1-0.4-1.5s0-0.6,0-1.1s-0.2-2-0.2-2s0.5,0-1-0.5
                                                                                                                                                                    s-1.1-0.9-2.9-0.9s-2.8-0.5-2.9,0.2c-0.1,0.7,0.2,0.2-0.1,0.8s0.4,0-0.4,0.5s-1.6,0.4-1.8,0.8c-0.2,0.4,1.5,0.8-0.1,0.4
                                                                                                                                                                    s-0.5,0.2-1.6-0.4c-1.1-0.6-1,0.2-1.1-0.6s0.1-0.8-0.1-1.8s-0.5-1.8-0.5-1.8s-0.1-0.9-0.5-0.9s-1.4-1.1-1.5,0s-1.1,0.8-1.1,0.8
                                                                                                                                                                    s0.2,0.6,0,1s-0.8,1.9-0.8,1.9s-1,0.4-1.6,0.2s-1.4-0.2-1.4-0.2l-0.9-0.4c0,0-0.1-0.4-0.1-0.8s-0.2-1.1-0.2-1.1h-0.8
                                                                                                                                                                    c-0.5-0.4,0.2-0.1-0.5-0.4c-0.7-0.3-1.4-0.1-1.4-0.1c-0.5,0.1-0.5,0.1-0.5,0.1l-1.4-0.4v-3.4c-0.8-0.2-0.9,0-1.2-0.2
                                                                                                                                                                    c-0.3-0.2-1.2-1-1.2-1l-0.8-0.5c0,0-0.6,0-1.4,0s-0.1,0-0.8,0s-1.1-0.8-1.1-1.6s0-2.2,0-2.2s0.2-0.8,0-1.1s-1.9-2-1.9-2
                                                                                                                                                                    s-1.1-0.6-2.1-0.8c-1-0.2-0.4,0-1.5-0.2c-1.1-0.2-2.1-0.8-2.5-0.8s-0.4,0-0.4,0l-1.4-0.1h-1l-0.9-0.8l-1-1.5l-0.5-0.4l-0.6-1.1
                                                                                                                                                                    l-0.6-1v-9.2l-0.4-0.9l-0.9-1.5c0,0-1-2-1.4-2.2c-0.4-0.2-0.6-1-1.1-1.4c-0.5-0.4-1-1-1.4-1.5s-0.6-1.1-0.6-1.6s0-1.4,0-1.4
                                                                                                                                                                    s0.9-0.9,1.5-0.9s1,0,1.4,0c0.4,0,1,0.2,1,0.2l0.5,0.5v0.5c0,0,1.4,0.8,1.5,0.4s0.8-1.4,0.8-1.4v-1.2c0,0-0.1-0.4-0.4-0.8
                                                                                                                                                                    s-0.6-1.1-0.6-1.1l-1.1-0.9l-1.5,0.8l-1.5,0.1h-1l-0.8-0.1l-0.5-0.5c0,0-0.2-1-0.2-1.5s0-2,0-2c-0.6-0.4-1.2-0.4-1.6-0.4
                                                                                                                                                                    s-1.2,0-1.2,0l-1-0.6l-0.5-1l-0.4-0.8l-1.8-0.9l-0.4-0.6v-1l-1.1-0.5l-1.9-0.5l-0.9-0.9l-0.1-1.5v-0.9c0,0-0.5-0.1-1-0.1
                                                                                                                                                                    s-1.2,0-1.2,0s-1-0.2-1,0.1s-1.2,2-1.2,2s-0.8-0.4-1.4,0.5s-1.4,1.5-1.4,1.5s-0.2,0.6-0.5,1.1s-0.4,1.4-0.4,1.4l-0.2,1.6l0.9,1.2
                                                                                                                                                                    l0.1,0.8h2.1h0.8c0,0,1,0.6,0.9,1.2c-0.1,0.6-0.2,1.9-0.2,1.9l0.9,1c1.8,0,2.4-0.1,2.4-0.1h0.7c0.1,0.2,0.3,0.5,0.5,0.9
                                                                                                                                                                    c1.4,2.1,1.2,3.2,1.2,3.2l-0.1,1.2l1.9,0.1l1.5,0.8l1.6,0.1c0,0,0.2,0,0.2,0.5s-0.5,0.9-0.5,0.9l-0.6,1.5c0,0,0.1,0.1,0.8,0.2
                                                                                                                                                                    s1.8,0.2,2.1,0.2s0.8-0.1,0.9,0.2c0.1,0.3-0.1,2.2-0.1,2.2l-1.1,1.5l-1,1.1l-2.4,0.1c0,0-1.9,0-2.2,0s-0.8,0.1-1.5,0.1
                                                                                                                                                                    s-2.1-0.1-2.1-0.1h-0.5l-0.8-1.2l-1.2-1.1l-0.6-1l-0.4-2.1l-1.2-1.1l-0.1-0.5l-0.9-0.5l-2.2-0.6l-1.9,0.4l-1,0.4l-0.2,1.2l-1,0.8
                                                                                                                                                                    l0.1,1.5l-0.2,1.6l-0.6,1c0,0-0.9,0-1.2,0s-0.8,0.2-1.1,0c-0.3-0.2-1.6-1.4-1.6-1.4s-0.6-2-0.6-2.4s-0.5-1.1-0.5-1.1l-0.6-1.8
                                                                                                                                                                    l-1.4-0.6l-0.5-0.2l-0.9-0.5l-1.5-0.2l-3.4,0.8l-1.4,1.1l-1.6,0.8l-1.1,1.3l-1.4,1.1c0,0-1.6,0.6-2.1,0.6s-1.9-0.5-1.9-0.5
                                                                                                                                                                    l-0.4-2.1v-1.8l1.4-1.8h0.5h0.6h0.7l1.2-0.5c0,0,0.4-0.6,0.9-0.9c0.5-0.3-0.6,0,0.5-0.2c1.1-0.2,2.5-0.2,2.5-0.2l0.2-4.2l-1.8-0.2
                                                                                                                                                                    l-1.5-0.2c0,0-0.5-0.5-1-0.8c-0.5-0.3-1.1-2.1-1.1-2.1l-0.1-1.2v-1.1l-0.5-1.5l-0.9-0.1l-0.5-0.1l-0.1-2l-0.1-0.5l-1.5-0.4h-1.4
                                                                                                                                                                    l-1.3-0.3l-0.9-1.1l0.9-1v-1.5l-0.8-1.1l-2.4-1l-0.8-0.3l-1.1,1.1l-0.6,0.5l-0.5,0.5h-0.9l-7.2-6c0,0-0.4-0.9-1.1-0.9
                                                                                                                                                                    s-0.8-1-0.8-1l-0.6-2.1l-1.9-0.1c0,0-0.6,0-1-0.1c-0.4-0.1-0.6-0.2-1.5-0.5c-0.9-0.3-0.9-0.2-0.9-0.2s-1.4-0.6-1.5-1
                                                                                                                                                                    c-0.1-0.4-0.2-1-0.2-1s0-0.5-0.1-0.9c-0.1-0.4-0.4-2.7-0.4-3.1c0-0.4,0-2.5,0-2.5l-0.2-1.6l-0.6-0.8c0,0-2,0.1-2.6,0.5
                                                                                                                                                                    c0,0,0.5,2-2.2,3.8l-1.6,1l0.2,7.5c0,0-3.2,2.5-3.2,3.4l0.2,5c0,0,0.9,1.9,1.6,1.9l1.6-0.9l0.4-3.6l1.8-1.4h1l1,0.9l1.1,1.1l2,0.2
                                                                                                                                                                    l4.1,0.1l1.2,0.2l0.9,0.9l1,0.2l0.5,0.5l0.4,1.5v1v1.4v1.5l0.5,1.5c0,0,0.4,1,0.9,1.2c0.5,0.2,1.5,1.2,1.5,1.2l0.8,0.4v0.9v1.6
                                                                                                                                                                    l-0.5,0.7c0,0-0.4,0.4-1.2,0.5s-3,0.4-3,0.4s-1,0-1.4,0c-0.4,0-1.4-0.9-1.4-0.9s0.2-0.5-0.1-0.5c-0.3,0-0.9-0.2-0.9-0.2l-0.8-0.1
                                                                                                                                                                    c0,0-0.5-0.1-0.6,0.6c-0.1,0.7-0.1,0.7-0.1,0.7l-1.2,0.8v0.8v0.4l-0.8,0.5c0,0-0.8,0.5-1.2,0.6c-0.4,0.1-0.9,0.1-1.2,0.2
                                                                                                                                                                    c-0.3,0.1-0.9,0.1-0.9,0.1l-3.4,3l-0.6,0.8l-1.4,1.2v0.8l-0.1,0.6c0,0-0.2,1.1-0.2,1.5c0,0.4,0.8,5.4,0.8,5.4l-0.9,0.4l-0.4,1.3
                                                                                                                                                                    l-1.2,0.4l-0.6,0.4c0,0-0.2,0.4-0.8,0.4c-0.6,0-1.4,0.1-1.9,0.2s-1.4,0.2-1.4,0.2s-0.4,0.2-0.9,0.2s-3,0.4-3.4,0.4
                                                                                                                                                                    c-0.4,0-0.8,0-1.5,0c-0.7,0-1.4,0-1.4,0l-0.6,1.5v1.4l-0.3,0.6l-0.5,1c0,0-0.1,0.4-0.5,0.4s-0.6,0-1.2,0c-0.6,0-1.2,0-1.8,0
                                                                                                                                                                    s-0.5,0-0.5,0l-1.1,0.5v0.6c0,0-0.2,0.2-0.4,0.6c-0.2,0.4-0.2,1.2-0.2,1.2l-0.4,1.1v0.8l-0.6,1.1l-1.5,1.2l-0.5,0.4l0.1,1l0.5,0.6
                                                                                                                                                                    l2.4,1.2l0.5,2.2l0.2,0.5v1.1v0.5c0,0-0.5,0.6-0.9,0.9c-0.4,0.3-1.1,0.9-1.1,0.9c-0.8,0.6-1.8,0.8-1.8,0.8l-1,1.2l-0.3,1.1
                                                                                                                                                                    l-1.4,1.9l-0.8,1.2l0.2,0.6v2.4l0.2,0.8v1.1c0,0-0.2,0-0.9,0.5s-1.6,1.1-1.6,1.1l-1,1.1l-0.2,0.5v0.6v0.9l0.4,0.9l0.5,0.5h0.9
                                                                                                                                                                    c0,0-0.1,1.1-0.1,1.6s-0.1,1.4-0.2,2c-0.1,0.6-0.2,1.4-0.1,1.8c0.1,0.4,0,0.8,0.2,1.2c0.2,0.4,0.4,1,0.4,1l0.9,1.2l0.9,0.6
                                                                                                                                                                    l0.9,3.6c0,0,1.1,0.4,1.4,0.8c0.3,0.4,1.4,1.5,1.4,1.5s-0.1,0.4,1.4-0.1s0.8,0,1.5-0.5c0.7-0.5,1.2-0.6,1.2-0.6l0.9-0.6
                                                                                                                                                                    c0,0,0.4,0.4,1.1-0.1s0.2,0.2,0.8-0.5c0.6-0.7,0.1-0.6,0.5-0.8c0.4-0.2-0.2,0.1,0.4-0.1c0.6-0.2,0.6-0.2,1.1-0.5
                                                                                                                                                                    c0.5-0.3,0.1-0.4,1.2-0.4s1.1,0,1.1,0h0.8c0,0,0.2,0.1,0.8,0.5c0.6,0.4,1.1,1,1.1,1l1.1,0.9c0,0-0.4,1,0.2,1.2
                                                                                                                                                                    c0.6,0.2,1.8,0.6,1.8,0.6l0.6,1.8c0,0,0.6,2,1.1,2.1c0.5,0.1,8.8,9.9,14.5,11.8l1,1.8c0,0-0.4,0.8-0.4,1.2s-0.6,1.6-0.6,1.6
                                                                                                                                                                    l-0.6,0.4l-0.8,1.1l0.8,1.1l0.2,1.4l0.9,0.1l0.1,0.8c0,0-0.1,0.9,0.2,1c0.3,0.1-0.5-0.2,0.4,0.1c0.9,0.3,0.8,0.5,1.4,0.5
                                                                                                                                                                    c0.6,0,0.6,0,0.6,0s0,0.1,0.6,0.1c0.6,0,0.6,0,0.6,0h0.6l1.2,0.8l0.1,0.9l0.4,2.8l-0.1,1.1l0.5,0.5c0,0,0.9,0.6,1.4,0.6
                                                                                                                                                                    s1.6,0,1.6,0h0.8l0.5,0.6l0.6,2.4c1.5,0.5,1.5,0.5,2.1,0.5s0,0.2,1.9,0.4c1.9,0.2,1.1,0,1.9,0.1s1.6-0.4,1.6-0.4s0.1-0.1,0.8,0.1
                                                                                                                                                                    c0.7,0.2,0.6,0.2,0.6,0.2s0.2,0.8,1,0.8s0.9,0.1,1.4,0.1s0.5,0,0.5,0l0.8,2.5l1.4,1.1c0,0,0.2,0,0.9,0s1.2-0.2,1.2-0.2
                                                                                                                                                                    s0-0.4,0.5-0.4s1.9,0,1.9,0l1.1-1.8l0.1-0.9l5.2,0.1v-1.2l-0.1-1.1l2.4-0.4h1.8h0.4l0.9,0.9l-0.5,1.2c0,0-0.4,0,1.1,0.9
                                                                                                                                                                    s2,1.5,2,1.5v1.4c0,0,1.2,2,1.2,2.5s0.6,2.1,0,2.2s-1.6,0.9-1.6,0.9l-0.8,1.1l-0.1,0.5l-0.1,0.8l-0.4,1l1.6,0.1l0.4,2.8l2.1,1.9
                                                                                                                                                                    l1.5,2.5l0.9,2l2.2-0.1h1.1c0,0,1.2,1.1,1.5,1.5s0.9,1.1,0.9,1.1l1.2,0.5c0,0,0.6,0.1,1.6,0s1.2,0,2-0.1s0.8-0.1,0.8-0.1
                                                                                                                                                                    s-0.2-1.1,0.4-1.1s2.1-0.1,2.1-0.1c0.9,0.8,1.4,0.6,1.5,1.1s0.1,2.2,0.1,2.2l-0.2,2.2l-1.1,1.8l-0.9,1.2l0.5,0.4l-1.1-0.2
                                                                                                                                                                    l-1.5-0.4l-1.4,0.4l-0.6,0.5l-0.8,0.5l0.4,2c0,0,0.5,0.8,0.5,1.1s-0.5,1.6-0.5,1.6l-1,0.9l-0.9,2.1c0,0,0.5,0.6,0.5,1
                                                                                                                                                                    s-0.1,1.5-0.1,1.5s-1.1-0.2-1.8-0.2s0.1,0.2-1.2,0s-0.5-0.2-1.9-0.6s-1.4-0.4-1.4-0.4l-3.1-3.9l-2.6,0.2l-2,2.1l-0.4,1.4l-0.5,1.5
                                                                                                                                                                    l-2-0.2c0,0-1.8-1.4-2.1-1.4s-3.1-0.4-3.1-0.4h-1c0,0-0.4-0.8-1.2-1.1s-2.4-1.5-2.4-1.5s-2.1-0.6-3-0.6s-3,0-3.4,0
                                                                                                                                                                    s-1.1-0.2-1.1-0.2s-2.2,0-2.8,0s-2.4,0.8-2.4,0.8s0,1.8-0.4,1.9s-1,0.9-1,0.9l-1.2,0.2c0,0-1.1-0.4-1.9-0.4c-0.8,0-0.8,0.2-1.2,0
                                                                                                                                                                    c-0.4-0.2-1-0.8-1-0.8s-0.5-0.1-1-0.2s-2-1.1-2-1.1l-2.4-2h-2.4l-1.8,0.5l-1.4,1v1.9l0.4,2.4v0.9l-0.1,1.6v6l1.2,2l-0.2,1.4
                                                                                                                                                                    c0,0-1.8,0.9-1.8,1.2s0,0.9,0,0.9l-1.1,0.8v0.9l-0.1,3l-1.8,0.8c0,0-0.6,0.9-0.6,1.2s-0.1,1.6-0.1,1.6l-0.6,1.5l-0.9,1.8l-0.9,0.5
                                                                                                                                                                    l-0.4,0.5l-0.6,3c0,0-1,0.1-1.1,0.5c-0.1,0.4-0.4,1.2-0.8,1.4c-0.4,0.2-0.9,0.2-0.9,0.2l-0.8,0.9l-0.5,0.5l-0.6,2.1v1l-0.4,1
                                                                                                                                                                    l-0.6,0.5c0,0-2.6-0.1-3-0.2s-0.9,0.6-2.2-0.2s-1.9-1.5-2.4-1.6s-2-2.1-2-2.1s-0.1-2.2-0.1-2.6s-1.1-2.4-1.1-2.4l-1.2-1.6
                                                                                                                                                                    l-1.4,0.1h-1.5l-0.9,0.4l-2.5,0.9l-0.8,0.1c0,0-1,0-1.5,0.1s-1.9,0.1-1.9,0.1s-0.2,1-0.6,1.2c-0.4,0.2-0.4,0.2-0.4,0.2v1.5
                                                                                                                                                                    l0.6,1.8l1.4,0.2v1.4v1.8l0.4,1l0.6,0.8v1.9c0,0-0.5,0.9-0.9,1.4c-0.4,0.5-1.1,2-1.1,2s-0.8,0.1-1.2,0.2c-0.4,0.1-1.4,1.4-1.4,1.4
                                                                                                                                                                    l-1.4-0.1h-1l-0.2,1.2v1v1.6l-0.4,0.8l-0.5,0.1h-1.5c0,0,0-0.1-0.5-0.1s-1.1,0.1-1.1,0.1l-0.6,1.4l-0.2,2.6l0.1,1.2v1.2l-0.1,1.2
                                                                                                                                                                    l-0.2,0.8l-0.5,0.6l-1.2-0.1l-1.6,1.6l0.5,2.9l1.6,1.8l1.4,3c0,0,2,1.8,2.4,1.9c0.4,0.1,0.9,0.5,0.9,0.5l0.2,1.1l0.6,3.9l-0.2,3.3
                                                                                                                                                                    v1.6l1.8,1.8l1.6,2.1l1.5,0.4l1.2,0.2c0.1,0,0.2,0,0.5,0c0.8,0,2.2,0.6,2.2,0.6s1.5,1.1,2.1,1.4c0.6,0.3,2.4,2.4,2.4,2.4
                                                                                                                                                                    s0.8,0,1.8,0s0.9,0,2,0.1s2.5,0.4,2.5,0.4s0.4,0.4,1,0.5s2.4,2.1,2.9,2.4s4.1,1.9,4.6,2.1c0,0,2.6,1.9,3.1,2s6.2,4.4,6.2,4.4
                                                                                                                                                                    l4.5,4.2l3.1,3.4c0,0-0.8,0.8,0,1c0.8,0.2,2.2,0.6,2.2,0.6s3.9,0.4,4.2,0.4s1.2,0,1.8-0.4C-138.8-67.3-139.4-66.7-138.8-67.2z
                                                                                                                                                                    M-27-159.4l-1.4-0.4C-27.8-159.6-28.1-160.1-27-159.4z M-29-159.9l-0.5-0.1l-0.2-0.2C-29.5-160.1-29.3-160-29-159.9z
                                                                                                                                                                    M-38.2-164.5c0.5,0,1.8,0.1,2.4,0.6s0.1,0.4,1.9,1s0.5,0.2,1.8,0.6s1.8,0.5,2.1,0.9c0.2,0.2,0,0.6,0.2,0.9l-0.3-0.4l-1.1-0.8
                                                                                                                                                                    l-2-0.8l-1.9-0.9l-1.5-0.6L-38.2-164.5l-1.9,0.9C-39.5-164-38.8-164.5-38.2-164.5z M-41.4-162.6c-0.1,0.1-0.2,0.2-0.3,0.3
                                                                                                                                                                    C-41.6-162.4-41.5-162.5-41.4-162.6z M-46-164.7c0.5,1.4,0.5,1.6,0.5,2c0,0.3-0.3,1,0.1,1.4h-0.3l-0.4-2.8l-0.5-1.3
                                                                                                                                                                    C-46.5-165.6-46.4-165.8-46-164.7z M-47.4-167.1l-1.1-0.8C-47.9-167.6-47.9-168-47.4-167.1z M-53.6-167.4l-0.2,0.1l-1.1,0.3
                                                                                                                                                                    C-54.4-167.2-53.9-167.3-53.6-167.4z M-61.2-173c0.2,0.4,0.4,0.8,0.4,1.1c0,0.6-0.4,1.1,0.2,1.8s0,1,1,1.6
                                                                                                                                                                    c0.6,0.4,1.2,1.2,1.6,1.7l-2.2-1.9l-0.4-1.4l-0.6-0.6V-173z M-61.8-174c0.1,0.2,0.2,0.5,0.4,0.8l-1.8-1.9l-2.2-1.4
                                                                                                                                                                    c0.8,0.4,0.6,0.4,1.6,0.9S-61.9-174.4-61.8-174z M-63.6-182.6c0.1-0.3,0.1-0.9,0.1-1.4c0.2,0.1,0.3,0.3,0.3,0.5
                                                                                                                                                                    c0,0.5-1.2,2.5-1.2,2.5H-66c0.4-0.2,0.7-0.3,0.9-0.5C-64.8-181.7-63.8-182.2-63.6-182.6z M-64.5-184.7c0.1,0.1,0.1,0.1,0.2,0.2
                                                                                                                                                                    l-2-0.5C-66.2-185.1-65.1-185.2-64.5-184.7z M-66.9-179.7c0,0-0.5-0.5,0.1-0.9C-66.8-180.6-66.9-180.5-66.9-179.7
                                                                                                                                                                    c0,0.5-0.4,1.2-0.3,1.7l-0.4-0.7L-66.9-179.7z M-75.9-184.9c0.2,0,1.1,0.1,1.8,0.2h-0.3l-2-0.1l-1-0.4
                                                                                                                                                                    C-77-185.1-76.2-184.9-75.9-184.9z M-77-186.2c0,0-0.3,0.4-0.4,0.7l-0.1-1l-1-0.9C-77.8-186.8-77-186.2-77-186.2z M-79.8-188.2
                                                                                                                                                                    c0.1,0,0.2,0.2,0.4,0.3l-1.2-0.4C-80.2-188.4-79.9-188.3-79.8-188.2z M-83.4-188.1l-1.2,0.2C-84.6-187.9-84-188.1-83.4-188.1z">
                                        </path>
                                        <path d="M-122.1-16.4L-122.1-16.4L-122.1-16.4z"></path>
                                        <path
                                            d="M-73.2,266.1l-5.8-2.6l-0.9-2.4v-6.4l-0.4-1.2c0,0,0-1,0-1.6s-0.8-2-0.8-2l-1.5-0.9l-0.5-2l-1.4-0.2l-0.1,1.8
                                                                                                                                                                    c0,0-0.1,1.2-0.1,2.1s1.1,1,1.1,1s0.1,0.6,0.1,1.1s0.5,1.1,0.5,1.1l0.4,0.9l-0.5,4l-0.9,4.8l1.5,0.8l1.9,1.9l2.5,2.2l0.8,2
                                                                                                                                                                    c0,0,1.5,2.8,1.9,2.8s1-0.1,1.6-0.1s1.8-1.9,1.8-1.9l-0.4-2.2L-73.2,266.1z">
                                        </path>
                                        <path
                                            d="M88.9,64.1c0.1,0.4,0.8,1.2,1.1,1.5s0.6-0.4,1-0.6s0.8-0.8,0.8-0.8s0-0.8,0.2-1.5s0.6-0.1,1.5-0.1s1,0.4,1.5,0.4
                                                                                                                                                                    s1.6,1.4,2,1.6s1.4,2.4,1.4,2.4s1.1,0,1.5,0s0.8-1.2,0.8-1.2l-0.9-1.4L98,63l-2-2c0,0-2-1.1-2.5-1.5s-0.8-0.5-1.4-0.6
                                                                                                                                                                    s-2-0.6-2.4-0.8s-2.5-1.6-3-1.9S84.9,56,84.9,56l-4-0.6L80.8,57c0,0,0.9,1.2,1.8,2.1s0.1,0.5,0.4,0.9s0.9,1,1,1.4s1.4,0.5,2.5,0.9
                                                                                                                                                                    s0.6,0,1.5,0.1s0.1,0.9,0.1,0.9S88.8,63.8,88.9,64.1z">
                                        </path>
                                        <path
                                            d="M13.1,20.6c0.1,0.8,0,0,0.8,0.4s0.6,0.5,0.9,0.9s0.2,1,0.2,1s0.5,0,1.6,0s1-0.1,2.2-0.1s0.9-0.1,1.5-0.2s0.8-0.9,0.8-1.4
                                                                                                                                                                    s-0.4-0.6-0.8-1.1s-1-0.4-2-0.9s0,0-1.4-1.2s-0.6-0.4-0.6-0.4l-2.2,0.8h-0.4c0,0,0,0-0.4,0.4s0,0-0.2,0.8S13,19.9,13.1,20.6z">
                                        </path>
                                        <path
                                            d="M-0.5-9.5c-0.2-0.4-0.9-1.1-0.9-1.1s0,0-0.4-1.1s-0.2-0.5-0.6-1s-0.9-1-0.9-1l-2.4,0.1c0,0-0.2,0.9-0.4,1.5s0,1,0,1
                                                                                                                                                                    s0.5,0.1,1,0.5s0.6,0.9,1,1.1s1,0.8,1,0.8s0,0.5,0,1.4s0,1.8,0,2.8s1.1,0,1.1,0l2,2.2c0,0,0,0,0.6-0.1s0.6-0.5,0.6-0.5l0.1-0.5
                                                                                                                                                                    c0,0,0.4-1.1,0.5-1.1S1-7.6,1-7.6s0,0-1.1-0.6S-0.2-9.1-0.5-9.5z">
                                        </path>
                                        <path d="M-9.9-4.6h0.1C-9.8-4.8-9.9-4.8-9.9-4.6z"></path>
                                        <path
                                            d="M-5.5-3.2c-0.9-0.2-0.8-0.2-1.8-1.4h-0.6H-9h-0.8C-9.6-4.3-9.3-3.3-9-3.1c0.4,0.2,0.9,0.5,0.9,0.5S-7-1.4-6.3-1.1
                                                                                                                                                                    s1.4-0.5,1.4-0.5L-4-2.4L-4.5-3C-4.6-3-4.6-3-5.5-3.2z">
                                        </path>
                                        <path
                                            d="M-5.6-23.1l-0.8,1.9l-0.9,1.5c0,0-0.1,0.6-0.2,1s-0.2,1.9-0.2,1.9l1.5,1.4c0,0,0.6,0,1.2-0.1s1.1-0.6,1.1-0.6s0-1.4,0-2
                                                                                                                                                                    s-0.5-3.6-0.8-4.4S-5.6-23.1-5.6-23.1z">
                                        </path>
                                        <path
                                            d="M3.9-56.7c0-0.4-1.5,0.6-1.5,0.6s-1,0.6-1.8,1.4L0-54.2c0,0,0,0-1,0.5s0,0-0.2,0.6s-0.2,0.9-0.2,0.9s0.5,1.9,1,1.9
                                                                                                                                                                    s0.6-0.1,1.4-0.8s0,0,0.5-0.1s0.4-0.8,1-1.5s0,0,1.5-0.9s0-0.5,0.1-1.5S3.9-56.4,3.9-56.7z">
                                        </path>
                                        <path
                                            d="M0.2-55.5l0.8-1l1.1-0.8v-1c0,0-0.2-1.8-0.6-1.8s-0.9,0.2-1.2,0.2s-0.9,1-0.9,1l-1.2,0.6l-0.6,1.8v1l0.6,0.2l1.5-0.1
                                                                                                                                                                    L0.2-55.5z">
                                        </path>
                                        <path
                                            d="M0.1-97.7v2.8l-0.2,1.2c0,0,0-0.1-0.6,0.4s-1.2,0.5-1.2,1s0.2,1.1,0.2,1.1l1.8,0.4l0.5,1.1c0,0,0.4,0.2,0.4,0.8s1.2,1,0,1
                                                                                                                                                                    s-0.8,0-1.2,0S-1.6-88-1.6-88l-0.2-0.9L-2-87.1c0,0-0.1,1,0.2,1.2s-0.4-0.1,0.4,0.2s0.5-0.9,0.8,0.4s0.4,0.9,0.2,1.8
                                                                                                                                                                    s-0.1,1.2,0.6,1.5s1.1,0.5,1.5-0.1s0.8-2.6,0.8-2.6s1.2,1.6,2.4,1.4s0.4,0.6,1.1-0.2s1.4-1.5,1.4-2.9S6-95,6-95v-1.6
                                                                                                                                                                    c0,0-0.8-0.2-0.9-1.4s-0.8-1.9-0.8-2.2s0-1,0-1l-1.5-0.1l-0.6,0.8l0.1,2.1l-0.9,1H0.1V-97.7z">
                                        </path>
                                        <path
                                            d="M-5.2-119.1l-0.8-0.6c0,0-0.1-0.8-0.1-2s-0.1-0.9-0.2-1.2s-0.5-0.8-0.5-1.1s-0.8-0.5-1.1-0.5s-1,0.6-1,0.6l0.6,2.2
                                                                                                                                                                    c0,0,0.2,0.5,0.2,1.1s0.5,0.9,0.6,1.2s0.5,0.9,0.5,0.9s-1.1,0.6-1.2,1.1s-0.2,1.2-0.4,1.6s-0.2,1.1-0.2,1.9s0,0,0,0.9
                                                                                                                                                                    s0.5,0.2,2,2.5c1.2,1.8,1.4,1.1,1.4,0.7c0,0.3,0,1,0,1.3c0,0.4,0.4,3.1,0.8,3.2s1.6,1.8,1.6,2.4s-0.4,3.4-0.4,4.2s1.1,0,2-0.2
                                                                                                                                                                    s0,0,0.9-1.5s0.4-0.6,0.4-0.6s0.8-0.9,0.6-1.2s0-2.5,0-2.5s0.5-1.4,1-1.5s0.1-1.5,0.1-1.5v-2.8l-0.5-3.4c0,0-1.9-0.6-2-1.8
                                                                                                                                                                    s0.6-0.9,0.6-0.9s0,0-0.2-1.6s-1.5-0.6-1.8-1s-0.8-0.9-0.8-0.9l-0.4,0.8c0,0,0.5,1.8,0.5,2.1s1,1.5,1,1.5l-0.6,0.5l-1.8-0.4
                                                                                                                                                                    c0,0-0.4-0.6-0.6-1s0-1,0-1.4S-5.2-119.1-5.2-119.1z">
                                        </path>
                                        <path
                                            d="M-1-124l-0.8-0.2h-1.9v0.6l0.2,1.4c0,0,0.8,0.6,1.1,0.8c0.3,0.2,0.4,0.6,0.4,0.6l0.8,0.5l1.1,1.4l0.6,1l0.9-0.2l-0.5-1.1
                                                                                                                                                                    L0.1-120l-0.4-1l-0.1-1.1v-0.9L-1-124z">
                                        </path>
                                        <path
                                            d="M-16.2-141.3c0.1,0.2,0.7,0.2,0.7,0.2s0.3,0.9,0.3,1.1s0.5,1.4,0.5,1.4l0.7,0.9c0,0,0.4-0.5,0.4-0.8s0.3-1.4,0.3-1.4
                                                                                                                                                                    l0.5-0.1c0,0,0-0.9,0.1-1.1s0-1.1,0-1.3s-0.4-0.8-0.4-0.8l-0.3-0.2l-1-0.4l-0.2-0.9L-15-146l-0.2-1.1l-0.5,0.1l-1.1,0.1h-0.5
                                                                                                                                                                    l-0.8,1.6c0,0,1,0.6,1.2,0.6s0.2,0.8,0.2,0.8s0.4,0.8,0.4,1.1S-16.3-141.5-16.2-141.3z">
                                        </path>
                                        <path
                                            d="M-17.6-148.8c0.2,0,0.9,0.1,1.4,0s0.2-0.2,0.4-0.5s0.5-0.6,0.6-0.8s0.8-1.2,0.8-1.2l0.1-1.6l-0.9-0.4c0,0,0.1-0.8-0.3-1.1
                                                                                                                                                                    s-0.2-0.4-0.2-0.4l-0.7,0.7l-0.4,1.4l-0.6,0.7c0,0-0.5,0.8-0.7,1.1s-0.1,0.9-0.1,0.9v1.2C-18.4-148.9-17.9-148.8-17.6-148.8z">
                                        </path>
                                        <path
                                            d="M-2.6-190.9c0-0.9-0.1-0.6-0.3-0.9s-0.2-0.5-0.5-0.9s-0.6-0.6-0.6-0.6l-1.3-0.8l-1.4,0.8c0,0,0.1,0.8,0.2,0.9s0,0.8,0,1.1
                                                                                                                                                                    s0.4,0.4,1.3,0.9s0.6,0.2,0.9,0.4s0.4,0.8,0.4,0.8s0,1.1,0,1.4s0.1,0.5,0.1,1.4s0.8,0.7,0.8,0.7s0.3-0.2,0.5-0.3s0.1-0.6,0.1-0.8
                                                                                                                                                                    s0-1.2,0-1.8S-2.6-190-2.6-190.9z">
                                        </path>
                                        <path
                                            d="M1.6-246.6c0.4,0.2,1,0.1,1.2,0s0.4-0.4,0.7-0.8s0.7-0.3,0.7-0.3s0.4-1.5,0.4-2s0-0.9,0-2s0,0-0.5-1.3l-1-0.6l0.2,0.7h-1
                                                                                                                                                                    l-0.5,0.3l-0.1,1.2v0.2l0.1,0.2v0.6c0,0-0.2,0-0.2,0.4c0,0.4-0.4,0.1-0.6,0.2c-0.2,0.1-0.1,1.1-0.1,1.1s-0.3,1.1-0.3,1.2
                                                                                                                                                                    S1.2-246.9,1.6-246.6z">
                                        </path>
                                        <path
                                            d="M10.1-259.4c-0.6-0.5-0.1-0.9-0.1-1.2c0-0.3,0.4-0.3,0.4-0.8s0-1.8,0-2.8s0.3-2.1,0.4-2.8s-0.7-0.6-0.7-0.6
                                                                                                                                                                    s-0.2,0.7-0.4,1.1c-0.2,0.4-1.1,1.2-1.1,1.2s-0.3,0.8-0.6,1.4c-0.3,0.6-0.3,0.3-0.4,0.6c-0.1,0.3-0.6,0.4-0.8,0.6
                                                                                                                                                                    s-0.6,0.2-1.1,0.2s-0.7,0-1.2,0s-1.1,0.5-1.3,0.7s0,0.7,0,0.7L4-260l1.1,0.4l0.6,0.2c0,0,0.2,0.9,0.3,1.3c0.1,0.4,0,0-0.1,1.6
                                                                                                                                                                    s-0.2,1.4-0.3,2c-0.1,0.6,0.4,0.4,0.7,0.4s0.9-0.1,3.3-0.2s0.4-0.1,0.8-0.3s0,0,0-1.2c0-1.2,0.5-2.1,0.7-2.6
                                                                                                                                                                    S10.6-258.9,10.1-259.4z">
                                        </path>
                                        <path
                                            d="M3.6-263.6c0.2,0.3,0.8-0.2,0.8-0.2l0.7-0.2l0.4-0.4c0,0,0.4-0.2,0.6-0.4s0.2-0.4,0.6-0.8s0.5-0.2,0.8-0.4
                                                                                                                                                                    s0.2-0.8,0.4-0.9s0.4-0.4,0.6-0.6s0-0.3,0.1-1.6c0.1-1.3-0.1-0.5-0.7-0.8c-0.6-0.3-0.2,0-0.2,0l-0.9,0.2l-0.6,0.9
                                                                                                                                                                    c0,0-0.2,0.4-0.2,0.8s-0.2,0.4-0.4,0.5s-0.4,0.6-0.4,0.6s-0.4,0.4-0.6,0.5s-0.3,0.5-0.8,0.7c-0.5,0.2,0,0-0.4,0.5
                                                                                                                                                                    s-0.1,0.6-0.2,0.9C3.1-264,3.3-263.9,3.6-263.6z">
                                        </path>
                                        <path
                                            d="M12.7-279c-0.2,0.1-0.8,0.5-1,0.8c-0.2,0.3-0.4,0.1-0.6,0.6s-0.1,0.7-0.3,0.9c-0.2,0.2-0.1,0.2-0.6,0.5
                                                                                                                                                                    c-0.5,0.3-0.4,0.5-0.9,0.5s-0.9,0.2-0.9,0.2l-1.1,1.3c0,0-0.4,0.2-0.5,0.5c-0.1,0.3-0.1,0.6-0.1,0.9c0,0.3-0.5,0.6,0,0.9
                                                                                                                                                                    s-0.1,0.1,0.5,0.4c0.6,0.3-0.4,0.4,0.6,0.2s0.9-0.5,1.4-0.8c0.5-0.3,0.7-0.8,1-1.1c0.3-0.3,0.4-0.6,0.7-0.8s0.3-0.4,0.6-0.5
                                                                                                                                                                    s-0.8,0.1,0.4-0.4s0.8-0.4,1.4-0.4s0.4,0,1.2,0s1,0,1,0l0.1-1.5l0.1-1.5c0,0-0.4-0.9-0.8-0.9S12.9-279.2,12.7-279z">
                                        </path>
                                        <path
                                            d="M-93.8-43.6c0.3-0.1,0.9,0,1.2,0s0.9,0.2,1.6,0.2s0.7,0.3,0.7,0.3l0.6,0.8c0,0,1.2,1,1.4,1.3s0.2-0.6,0.1-0.8
                                                                                                                                                                    s-0.2-0.7-0.2-1.1s-0.2-0.4-0.4-0.8s-0.2-0.4-0.4-0.6s-0.4-0.2-0.6-0.2s-1.1-0.2-2-0.4s0,0-0.1-0.2s-0.3-0.2-0.7-0.5
                                                                                                                                                                    s-0.4-0.1-0.9-0.1s-0.7,0-1,0s-0.8,0.2-0.9,0.4s-0.3,0.3-0.6,0.4s-0.2,0.6-0.2,0.6h-0.7c0,0-1.2,0-1.8,0s-0.4,0.2-0.7,0.2
                                                                                                                                                                    s-0.4,0.9-0.4,0.9s0,0.6,0,0.8s0.4,0,0.4,0h0.6h0.3c0,0,0,0,0.8-0.4s0.7-0.1,1.2-0.1s1.2-0.2,1.6-0.4s0,0,0.1-0.2
                                                                                                                                                                    S-94.1-43.5-93.8-43.6z">
                                        </path>
                                        <path
                                            d="M170.5,190.6c-0.2-0.4-0.8-0.8-1.2-1.5s-0.5-1.2-0.8-2.4s-0.6-3.8-0.6-3.8s-0.8-3.2-1.2-3.8s-2.9-3.2-2.9-3.2l-2-3
                                                                                                                                                                    l0.6-2.5c0,0,0.1-2.1,0.1-2.5s0-0.9,0-0.9l-1.2-0.6l-1.2,0.5l0.4,4.2l-1,1.6c0,0,0.5,2.1,0.5,2.6s-0.2,1.9-0.4,2.4
                                                                                                                                                                    s-0.8,2.2-0.8,3.2s-0.8,1.8-0.8,2.5s0,1.5,0,1.5l-0.4,28.4l-0.8,1.5c0,0,0.5,1.5-0.2,2.2s-0.9,1.5-0.9,1.5s-0.5,0.2-0.9,0.5
                                                                                                                                                                    s-0.6,0.6-1.1,1.2s-0.9,0.9-1,1.5s-0.6,2.5,0.2,3s1.2,0.6,2,0.6s0.6,0.1,1.2-0.2s0.5-0.4,0.9-0.9s0.4-0.5,0.4-0.5
                                                                                                                                                                    s-0.5-0.1,0.1-0.8s-0.6,0.1,0.6-0.6s0.9-0.2,1.9-1.1s1.4-1.2,1.5-1.9s-1.2,0.2,0.4-1.2s-0.1-0.8,1.6-1.5s-0.6,0,2.4-1
                                                                                                                                                                    s4.2-1.5,4.4-2s0.5-2.2,0.5-2.2l1.8-6.1l-0.5-6c0,0,0.5-2.9,0.5-3.5s0.1-1.9-0.1-2.4S170.8,191,170.5,190.6z">
                                        </path>
                                        <path
                                            d="M175.9,176.5c-0.4-0.4-0.5-0.8-1.2-1s-1-0.8-2-0.8s-3.1,3-3.1,3v1.5c0,0,0.6,1.4,1.2,1.6s1.1,0.8,1.1,0.8s0.4,0.9,0.4,1.2
                                                                                                                                                                    s-1,0.8-0.4,1.1s0.9,0.6,1.6,0.4s1.2-0.9,1.2-0.9s0.2-0.2,0.4-0.6s0.1-0.4,0.1-0.4s1.4-0.1,1.4-1.1s0.2-1.8,0-2.5
                                                                                                                                                                    S176.2,176.9,175.9,176.5z">
                                        </path>
                                        <path
                                            d="M218.9,180.3c-0.4-1-0.9-2.6-1.1-3.1s-2.5-3.9-2.5-3.9l-7.6-14l-1.1-3.5l-1.1-1.6c0,0-1.1-0.6-1.5-0.6s-1.5,0.1-1.5,0.1
                                                                                                                                                                    l-0.6,0.5c0.1,0.5,0.4,1.6,0.4,2.9s-0.1,2.4-0.2,3s0.4,0.9-0.1,1.4s-0.8,1.5-1.1,1.9s-1.2,2.2-1.2,2.2s-0.2,1-0.4,1.9
                                                                                                                                                                    s-0.5,1.8-0.5,2.2s0.4,2.1,0.4,2.1s0.9,3.6,1.6,4.6s2.1,4.6,2.5,5.4s3.6,5.6,3.6,5.6s2.1,3.6,6.2,3.5l2.9-1.8c0,0,0.9-0.8,1.4-1
                                                                                                                                                                    s0.8,0,1.2-0.8s0.9-0.8,0.9-1.6s0.2-1.8,0.1-2.9S219.2,181.3,218.9,180.3z">
                                        </path>
                                        <path
                                            d="M190.9,151.4c0,0-0.8,0.1-1.4,0.2s-0.2,1.4-0.2,1.4l-1.1,0.1l-1,0.6c0,0,0,0.5,0,1s1,1,1,1l1.5,0.1l1.4-0.9
                                                                                                                                                                    c0,0,0.8-1.8,0.8-2.2s-0.2-1-0.2-1L190.9,151.4z">
                                        </path>
                                        <path
                                            d="M254.6,262.8c0-0.6,0.9-1.8,0.9-2.1s0.2-1.1,0.2-1.6s0,0,1.4-2.1s0.2-1.5,0.5-2s0-2-0.2-2.8s-0.1-1.6-0.2-2
                                                                                                                                                                    s-0.6-1.5-0.6-1.5l0.4-1.5l-0.9-0.9l-1-2l-1.1,0.6l-0.4,1.8c0,0-0.8,0.4-1,0.9s-0.4,1.4-0.5,2s0,1.8,0.2,2.6s0.2,1.1,0.8,1.8
                                                                                                                                                                    s-0.1,0.8-0.4,1.9s-0.1,4.1-0.1,5s-1.1,1.8-1.6,2.5s-0.8,1.8-1.4,2.6s-0.5,3.1-0.5,3.1l1.8,1.5l1.8-0.6c0,0,0.4-2.2,0.5-2.6
                                                                                                                                                                    s1.1-2.2,1.1-2.2S254.6,263.4,254.6,262.8z">
                                        </path>
                                        <path
                                            d="M267.4,299.3c1.4-0.4,1.9-2,1.9-2.6s-0.4-4.4-0.4-4.9s0.1-3.2,0.1-3.2s0.6-1.8,0.6-2.8s-0.4-4.2-0.4-4.2l-1.5-1.1
                                                                                                                                                                    l-1.6-3.1l-1-2.2l-0.6-1.9l-0.9-2.6v-2.9V265l-1.2-0.2h-1.1l-0.5,0.6l-0.4,1.5l0.2,0.6l0.8,0.6c0,0-0.2,1.2,0,1.6s0.2,1.6,0.2,1.6
                                                                                                                                                                    s0,0.9,0,1.4s-0.4,1-0.8,1.4s-0.1,0.5-1,1s-0.8,0.4-0.8,0.4l-1.1-0.4l-0.5-0.6l0.2-1.2l0.9-0.2c0,0,0.1,0.5,0.5-0.6
                                                                                                                                                                    s0.5-3.2,0.5-3.2l-0.1-2l-1.4-0.8h-1.1c0,0,0.4-0.9-0.6,0.8s-1.2,2.4-1.2,2.4s-1,1.5-1,2s-0.2,1.4-0.2,2.4s-0.1,1.8-0.1,2.8
                                                                                                                                                                    s0.2,2.9,0.2,2.9l1.1,0.6l0.4,2.1l0.6,0.6l0.5,2.8l0.8,0.8c0,0,0.5,3.5,0.5,3.9s0,0.5-0.8,1.9s-0.4,0.8-1.4,2.9s-1.1,2.5-1.1,3.2
                                                                                                                                                                    s0.5,1.9,1,2.4s0.5,2.5,1.5,2.2s0.9-0.5,1.5-0.6s1.8-1,1.8-1s-0.4-1.8,0-2.2s0.5-1.5,0.9-1.5s0.9-0.1,0.9-0.1s0.6,1.5,1.1,1.6
                                                                                                                                                                    s1.2,0.4,2.5,0.4S266,299.6,267.4,299.3z">
                                        </path>
                                        <path
                                            d="M352.4,323.6c0-1-0.1-1.6-0.1-2s-1.1-2-1.1-2l-1.8-5l-2.5-10.1L344,277l1.2-23.9l1.4-6.1l-0.8-4.1l-1.4-3l-1.4-4.6
                                                                                                                                                                    l-0.9-4.6c0,0-0.2-3.6-0.2-4s-1.1-5.9-1.1-5.9l-1.5-0.8c0,0,0-3.2,0.1-3.6s0.8-1.4,0.8-1.4s0,0,0.5,0s1.9,0.1,1.9,0.1
                                                                                                                                                                    s1.5-1.1,1.9-1.4s0.1-1.6,0.1-1.6l-1.5-2.6l-1.8-3l-0.2-5l0.2-3.2l-1.4-1.4l-0.8-3.9l0.6-5.1l-0.6-2.6l-2.2-4.4L336,165l-0.1-0.6
                                                                                                                                                                    l-1.5-1l-1.1-4.1l1-2v-4.4l-1.2-1.5c0,0,0.1-1.6,0.1-2.2s0.2-2.4,0.2-2.4l-0.8-1.6l-0.4-5.5l-1.2-1.5c0,0-4.1-2.6-5.1-3.5
                                                                                                                                                                    s-0.9-4-1.1-5.1s-0.2-3.6-0.2-4.8s0-3.9,0-3.9l-1.6-1.1l-0.4-1.6l-0.2-1l-1-1.1l-6.1-4.4l-0.1-12.1l0.6-2.4l0.2-3l-1.2-2.5
                                                                                                                                                                    l-1.1-0.1c0,0-0.5-2.1-0.9-2.1s-0.4-4-0.4-4v-4l-0.9-2.9c0,0-0.4-5-0.4-5.4s1.9-2.8,2.2-3.1s1.9-2.5,1.9-2.5v-2.2l-0.4-2.9l-1.2-1
                                                                                                                                                                    c0,0-0.1-1.9-0.2-2.6s-0.2-2.2-0.2-2.8s0-1.4,0-1.8s-1.4-0.2-1.4-0.2l0.1-1.2l0.1-1.1c0,0-0.8-0.8-1.2-1.2s-1-1.4-1-1.4l-2-1.9
                                                                                                                                                                    c1.1-13.2-4.4-20.1-4.4-20.1l-2.1-3.5c0,0,0.8-4.4,0.8-4.9s1.2-2,1.4-2.5s0.4-2.8,0.4-2.8l-0.5-1.8c0,0-0.2-1.5-0.5-2.2
                                                                                                                                                                    s-1-0.6-1.8-1.1s-1.6,0-1.6,0l-1.4,0.5l-0.2,1.6l-0.1,3.2l-0.9,2.6c0,0-1.9,1.8-2.8,1.9s-1.1-0.1-1.1-1.1s0.1-0.9,0.1-1.2
                                                                                                                                                                    s0.4-2,0.5-2.4s0.1-1.8,0.1-1.8s-0.8-1.4-1.1-2s-2.2-1-2.9-1s-2.4,0.4-2.4,0.4l-2.9,1.5l-4,3.8l-2,4.4l-2.2,1l-3.2-0.3l-0.9-1.1
                                                                                                                                                                    l-2.8-1.6l-1.1-1.8l-0.6-1.5c0,0-0.2-1-0.6-1.4s-1.2-1.6-1.2-1.6l-0.5-1l-1.1-0.8L263,9.6c0,0-1,4.4-1.2,5s0.4,4.5,0.4,4.5L263,23
                                                                                                                                                                    l1.1,3.9l1.8,3l0.2,2.9l0.5,6.2l-1.4,1.6l-1.8,1.4l-0.9,2.2l-0.8,1.4l-1.4,0.9c-3.9-0.6-6.1,1.8-6.1,1.8
                                                                                                                                                                    c-8.1,6.6-12.5,22.4-12.5,22.4s0.9,2.8,1.2,3.5s0.5,1.9,0.5,1.9l2,1.2l0.4,3.2l2.6,6.6v5.6l-0.6,1l-3,0.4l-0.9,4.8v0.8l-1.6,1.6
                                                                                                                                                                    l-2.9,1.6L238,103l-0.9,0.6l-0.5,1l-3.8,0.2l-1,0.9h-1c0,0,0,0-0.6,0s-1.4,0-1.4,0s0,0-0.8,0s0,0-1.4,0s-1,0.2-1,0.2s0,0-0.2,0.9
                                                                                                                                                                    s0,1.5-0.1,2.4s-0.4,1.2-1,1.8s-1.2,0-1.2,0s0.4-0.8,0.4-1.1s0-1.8,0-1.8s-1.1-1-1.9-1.2s0,0-1.2,0s-1.1-0.4-2.6-0.4
                                                                                                                                                                    s-0.4-0.6-0.4-0.6s-0.8-0.4-1.2-0.5s-0.6-0.6-0.6-0.6s0-1.9,0-2.2s0-2.4,0-2.4l-0.8-1.6c0,0-0.6-0.1-2.4-0.6s-0.5-0.6-0.5-0.6
                                                                                                                                                                    l-0.4-1l0.1-1.8l1.5-0.8c0,0,0-0.9,0-1.2s-0.8-1.2-1.1-1.2s-1.4-0.5-1.4-0.5l-0.6-0.8c0,0,0-1.4-0.1-1.8s-0.1-1.2-0.1-1.8
                                                                                                                                                                    s-0.2-1.1-0.2-1.1s-0.4-1.1-0.5-2s0.1-1.4,0.1-1.4l0.2-2.1c0,0-0.6,0-1.1,0s-1.9-0.4-1.9-0.4v-0.8l0.5-0.5l0.6-0.5v-1.8l-0.6-1
                                                                                                                                                                    l-2.2,0.9c0,0-0.4-0.8-0.4-1.1s0.2-0.9,0.2-0.9l-0.6-1.5l-1.9-1.1c0,0-1.1-0.8-1.8-0.9s-1,0-2.1,0.1s0,0-0.8,0s-0.4,0.6-0.8,0.9
                                                                                                                                                                    s-0.4,0.9-0.9,1.9s0.5,2.9,0.5,3.4s-0.6,4.6-0.6,4.6l2.1,4.1l1,3.2c0,0,0,2-0.1,2.4s0.4,2.5,0.4,3s-0.1,0.9-0.1,0.9s-1,1-1.4,1
                                                                                                                                                                    s-1.4,0-2.2-0.2s-0.9-0.4-1.2-0.4s-1.6-0.9-1.6-0.9l-0.8-1.8l-0.9-0.8l-0.1-2.5l-1.8-1l-0.6-5.9l-0.1-4.4l-0.2-3l-0.1-2l-0.9-2.4
                                                                                                                                                                    l-0.5-0.5l-1-0.9l-0.8-1l0.6-1.9l0.8-0.6c0,0,0.4-1.4,0.4-1.8s-0.5-1-0.5-1l-1-1.1c0,0,0.5-1.2,0.5-1.6s0.1-0.6,0.1-0.6h1.6
                                                                                                                                                                    c0,0,0.4-1,0.6-1.4s0.8-1.4,0.8-1.4l-1-1c0,0-1.5,0-2.6,0s-1.4-0.1-2.1-0.2s0-1,0-1l0.1-0.9l0.5-1.5l-0.2-1.6c0,0,0,0-1.5-0.5
                                                                                                                                                                    s0,0-0.2-0.5s-0.6-1.2-0.6-1.6s0-1.2,0-1.2h-0.6v-1.9l-0.4-2.4l-1-1c0,0-2.9-1.5-3.9-2.1s-1.1-1-1.8-1.1s-0.2-1.6-0.2-1.6l1.2-1.9
                                                                                                                                                                    l0.4-1c0,0-0.2-1.2-0.6-1.4s-0.5-0.8-1-2s-0.4-0.5-1-1s-0.5-0.4-2.1-2s-0.5-1.4-1.4-2.8s-0.5-2.1-0.8-2.8s0-1,0-1l1.1-1.9
                                                                                                                                                                    c0,0,0.5,0,1.5-0.1s2.4,0,2.4,0l1.1-0.8v-2l-1.1-1.2c0,0,0,0-1.2-0.2s0,0-1.1-0.8s-0.5-0.4-1.4-1s-0.2-0.6-0.8-1s-0.2-0.9-0.2-0.9
                                                                                                                                                                    s0-0.8,0.1-1.4s0.1-1.1,0.4-1.6s0.4-0.8,1-1.5s0,0,0.8-0.1s0.6,0,1.8,0s1.5,0,2.1-0.1s2-0.2,2-0.2l0.4-1.5c0,0,0.1-1.5,0.1-2
                                                                                                                                                                    s0.1-1.4,0.1-1.8s0.8-1,0.8-1l1-1.2l1-0.9l0.4-2.4l-0.6-1.9c0,0-0.8-2.1-1-2.9s0-2.1,0-2.1v-2.6l0.1-1.8l2.2-2.1l0.4-3.6l1.4-1.2
                                                                                                                                                                    c0,0,0.5,0,0.9-0.1s1,0,1,0l1-0.4l0.8-1.2l0.9-2l2,0.7l1.2,1.2l2.3,0.5c0,0,0-1.7,0.5-1.7s2.3-3.8,2-4.3s-1.5-5.3-1.5-5.3l0.3-3.7
                                                                                                                                                                    l3.7-1.3h4.3l2.7,1.3l1.3,1.3l15,1.2l4.8-4.8c0,0,0.2-1.7,0.2-2.5s0.7-5.3,0.3-6.2c-0.3-0.8-0.7-4.3-0.7-4.3s1.2-1.2,1.8-1.2
                                                                                                                                                                    s1.8-2.7,2,0.2c0.2,2.8,0.2,2.8,0.2,2.8l1.5,4.2l1.3,3.7l4.7,0.2l2-1.2l-1-6.8l-0.3-4l2-0.3c0,0,1.3,0,1.8,0.2s2,1.8,2,1.8
                                                                                                                                                                    l2.2-0.5l1.7-0.3l1.2,0.2l-0.2,2l2.5,3.5c0,0,0.2,0.7,0.7,1.2s1,1.8,1,1.8s-1.2,1.8,0,1.8s3.8-0.8,3.8-0.8s1.3-2.5,1.5-3.3
                                                                                                                                                                    s0.7-3,0.7-3l-0.5-3.7l1-4l0.7-3l-0.3-5l0.7-3.3h1.3l3,1.3l3.7,0.3l-1-2.3l-2.3-2.7c2.7-1,2.7-1,2.7-1l3.3,0.7h5.7l6.3-2.3
                                                                                                                                                                    c0,0,1.3-3,1.3-4.3s0-5,0-5l-0.7-3l-0.3-5l4.7-4c0,0,2-0.7,2.3-1.7s0.3-6,0.3-6l2-4.3l3.7-10.3l1.3-2.7v-8.7l-2-5.7v-4.3l2-2.2
                                                                                                                                                                    l5,0.5l3.5,1.5l2.5,2.5l2.5,2l6.5,1l2.5-3.5h3l1.2-3v-3.8c0,0-2-2.5-3-2.8s-3.5-1.8-3.5-1.8l-1.8-2.2l-1-5.8l-2.2-2.2l-5-1.2
                                                                                                                                                                    l-2-0.5l0.5-2.8c0,0-1-0.2-3.2-0.5s-6.5-0.8-6.5-0.8l-2.8-2.5l-2.8-3.8l-6.5-0.2c0,0-2.5-3.5-3.5-4s-7.2-1.5-7.2-1.5l-6.5,0.5
                                                                                                                                                                    l-1,0.8h-2.5l-1.2-1.2h-4.8h-2.8c0,0-1-0.2-1.8,0s-1.8,0.8-2.8,1s-1.2,1.5-3,1.5s-3,0.8-4,0.8s-4-0.2-4-0.2l-1.5-1l-1,1.5
                                                                                                                                                                    c0,0-0.5,1.5-1.5,1.5s-2.2-1.8-2.2-1.8l-2,1.8l-1,2.8c0,0-4,0.5-5,0.5s-4.8-2.8-4.8-2.8v-3.2c0,0-1.8-0.2-2.5-0.2s-2.2,0-2.2,0
                                                                                                                                                                    l-1,2.2l-1.5,0.2l-4.8,1l-1.5,1.5l-3-1.2c0,0-1.5-0.8-2.5-0.8s-2.8-0.8-2.8-0.8l-3-1.5c0,0-3.2,0.8-4.2,0.8s-1.2,0.2-2,0.2
                                                                                                                                                                    s-4.2-3.5-4.2-3.5l-3-2.8h-3.2l-2.5,0.5l-1.5,2l-2,0.2h-5.2l-5-1l-3.2-0.8l-2.5,1l-3.2,2.2l-5,1.2l-4.8,1.5l-3.3,0.2l-0.1,0.3
                                                                                                                                                                    l-0.5-0.2l-2.7-0.4l-0.9,0.8c0,0-0.9,0.4-1.2,0.5s-8.4,0.3-8.4,0.3l-1-1.1l-1.1-1.3l-0.4-1.2c0,0-0.8-0.3-1.2-0.3
                                                                                                                                                                    c-0.4,0-2.2,0-2.2,0l-0.6,0.8c0,0-0.7,0.5-1,0.7s-1,0.4-1.2,0.5s-0.2,0.4-1,0.4s-1.2,0.1-1.6,0.2c-0.4,0.2-3.5,0.1-3.5,0.1
                                                                                                                                                                    s-2.6-2.2-2.9-2.5c-0.3-0.2-1.2-1.4-1.2-1.4s-1-0.3-1.5,0.6c-0.5,0.9-1.3,1.8-1.3,1.8l-1.1,1.1c0,0,0.1,0.4-1.7,0.2
                                                                                                                                                                    s-4.8,0.1-4.8,0.1l-1.6-0.7c0,0,0.7-1.5-0.2-1.5c-0.9,0-2.1,0-2.9,0.1s-1.2,0.2-2.2,0.2c-0.9,0.1-1.4,0.4-1.8,0.7
                                                                                                                                                                    c-0.3,0.2-0.8,1-1.8,1.6s-1.2,1.1-2.2,1.3c-1.1,0.2-2.3,0.5-2.8,0.3c-0.4-0.2-0.9-0.9-0.9-0.9l-1.8-1c0,0-1.2,0.4-1.7,0.5
                                                                                                                                                                    c-0.4,0.1-0.2,0.4-1.2,0.1s-1.8-0.2-1.8-0.2l-1.8-1c0,0-2.1,1.2-2.4,0.9s-2.7-1-3-1s-2.3-0.2-2.6-0.2s-3.2-0.8-3.8-0.8
                                                                                                                                                                    c-0.6,0-2.2-2.4-2.9-2.4s-2.3-1-3-1.1s-2,0.6-2,0.6s0.5-0.3-0.8-0.7c-1.3-0.3-4.5-1.2-5.6-1.1c-1.1,0.1-0.9-1.2-1.6-1.5
                                                                                                                                                                    c-0.8-0.3-5.7,3.6-5.7,3.6s-2.2-2.7-2.5-2.7s-4.1-0.5-4.6-0.5s-2-5-2-5s-5.4-1-5.6-1s-2.4-1.9-2.4-1.9l-3.4-1c0,0-0.8-0.7-1-0.5
                                                                                                                                                                    s-2.1,0.9-2.1,0.9l-2-0.4l-1.2-0.2l-1.1-1.8l-0.6-3.2c0,0,0.1-2.2,0.1-2.4s-0.4-2.2-0.4-2.2l-1.2-2.1l-0.3-1.8l-1.8-1.2l-2.2,0.2
                                                                                                                                                                    L3.8-205l-1.2,2.8c0,0-0.8-0.3-1.4-0.2l1.9-3.5l3.2-1.8l3.2,0.8l0.2-4l1.8-4l2.2-4.2l0.5-4.2l0.2-4l1.2-5v-5.8c0,0,0.5-2.2,0.5-3
                                                                                                                                                                    s-1.8-1.5-1.8-1.5l-0.2-2.8l-0.2-2.2l-1.2-0.8h-2.5v-3.5c0,0-1.8-0.8-2.5-0.2s-1.5,1.2-1.5,1.2s0,2.5,0,3.2s2,1.5,2,1.5l-2,2
                                                                                                                                                                    l-3,1.8l0.2,3l-1.2,2c0,0,0,1.5-0.8,2.8s-2.5,2.2-3,3.2s0,2.5,0,2.5l1.5,1.5c0,0,1,2.2,1,3s-1.2,3.5-1.2,3.5l-2,5.5
                                                                                                                                                                    c0,0,0,2.8,0,3.8s-1.5,3.2-1.5,3.2l-2.8,5.2l1.2,2l2,1.5l-2.8,3l5,3.5c0,0,0.2-2.8,0.8-4.2s0.8-3.8,0.8-3.8c0.2,2-0.2,3.5-0.5,4.8
                                                                                                                                                                    s-1,3.2-1,3.2l1.5,2.2l-0.2,4l-0.5,2.5c0,0-2,0.8-1.2,1.2s3.2,1.5,3.2,1.5l0.2,2.5c0,0-1,1.8-2,2.2s-1,0.5-1,0.5l-1.2,2.2
                                                                                                                                                                    l-1.5,1.5c0,0-1.5,1.8-1.5,2.8s-1,8.2-1,8.2l-1.5,1.8l-1.8-1l-1.2,0.2l-2,1.5v2.8l1.5,2.5l0.5,2.5l-1.5,3.8l-0.2,2l2,0.5l1.8-2.2
                                                                                                                                                                    l1.8-1.5l0.8,1.5c0,0-0.5,0.2-0.5,1s-0.5,4-0.5,4l-0.5,4l2.5,6.8l2.8,3l3.2,2.8l3.8,1.2l1.2,3.2v1.5l-1,3c0,0-1.2-0.2-1.2,0.8
                                                                                                                                                                    s0.5,3.2,0.5,3.2l-0.5,3c0,0-0.2,1,0,2s1.5,2.5,1.5,2.5l1.2,2.5l0.8,1.8l1,3l2.2,4l1,4l-0.2,4.5l-3,2.5L6.4-81l-1.2,2l-1.5,2.8
                                                                                                                                                                    l-0.2,2L5-71l0.8,1l-1,3.2c0,0-1.8-0.5-1.5,0.2s1.2,3.8,1.2,3.8L7-60.6l1.8,0.5v1.5l-1.2,1.5l-1.2,1.2v1.5l-1.8,2.2l-2.5,3
                                                                                                                                                                    l-0.5,3.5l1.8,2.8l0.8,1.2l1.2,1.2v2l-3.5,3.2l-1.2,1.5l-1.5,2.5l-1.8,4v2l0.8,2.8l1,3.2l1,5l2.5,4l1.8,2.8L5-2.7l2,4.5L11.5,5
                                                                                                                                                                    l5.8,2.8l4.8,2.8l2.5,2.2l11.5,11.5l6,4l4.8,2.8l3.8,3.8c0,0,0.2,2,1,3.2s4,2.5,4,2.5l4.5,3.8l3,2.5l5.5,2.2l8,1.5l10,2.2l6.5,1.8
                                                                                                                                                                    l3.5-0.8l1.5-2l2.2-2.5l0.8-13.5l-2.5-1.2h-5.2l-2-0.2L91,32.6l1.5-1H97l3.2-3c0,0,6.2-1.2,7-1.5s1.8-2.5,1.8-2.5l-2.5-1.2v-2
                                                                                                                                                                    l1-1.2l0.2-1.8l0.2-1.8l2.2-0.2l1.2-0.2c0,0-1.2,1.8,0.2,2.2s0,1.2,3,1.2s3,0,3,0l1.5-2l-0.5-2.5l-3.2-0.5v-2.5l1.2-1.8l0.2-2
                                                                                                                                                                    c0,0,2.5-4.5,3.2-5s1.2-3.5,1.2-3.5l-2.8-2.2l0.5-2.2l1.8-3l2-1.2l1.2-2.8l1.2,0.8V-8l4.5,1.2l1.2-1.2l1.5-0.8l-1-4.5v-3.2l2-0.8
                                                                                                                                                                    c0,0,0.2,0.8,0.2,1.5s-0.5,1,0,2s0.8,2,0.8,2l1,1.5l1.2,2.2l2.5,0.2l2-3l2-2.2l2-8c0,0,0.5-5,1.2-6s4-4.5,4-4.5l3.2-3.5l-1-4.5
                                                                                                                                                                    l-2.8-2.5l-1.2-2l-1.8,1.2l-0.2,1.8l-1.2,0.2l-0.5-2l-2,2.2l-2.5-0.5c0,0,0.2-4.5,1-4.5s2.2-0.2,2.2-0.2l3.2-0.2l0.5-3.8l2-2.5
                                                                                                                                                                    c0,0,0.5,3.8,1.8,3.8s3.5-4,3.5-4l2.2-0.2l3.8,0.2v-3.5l0.6,3.2c0,0-0.6,0.9-1,0.9s-1.2-0.2-1.2-0.2l-1.1-0.4l-1.2,0.4l0.5,0.8
                                                                                                                                                                    c0,0-0.2,0.9-0.4,1.2s-0.9,1.4-0.9,1.4l-1,1.2l-1.6,1c0,0-0.9,0.6-1.4,0.8s-0.8,1.2-0.8,1.2l1.1,1.6l1.9,1.4l1.6,2l1.6,2v2.9
                                                                                                                                                                    l-1.1,2.1l-6.6,6.2c-2.1,3-1.2,8.5-1.2,8.5s0,0.5-1,1.8s-0.5,0.5-1,1.1s-0.4,0.6-0.9,1s-0.5,1.6-0.6,2s-0.5,1.5-0.5,1.5l-1.8,1.6
                                                                                                                                                                    c0,0-0.5,2.1-2,2.8s-1.9,0-1.9,0l-2,0.8c0,0,0,0-0.5,0.8s-0.5-0.9-1.4,0s-1-0.9-2.5,0s-1.2-0.4-1.6,0S129.8-3.4,129-3
                                                                                                                                                                    s-1,0-1.8-0.4c0,0-0.8-0.5-1.1-1.1s-1.1-0.1-1.6,0s-1.6,0-1.6,0l-0.5,1.8l1,2.9l0.8,1.9v2.1l-1,0.9l-2.5,1.4l-2.8,3.5v2l0.4,1.8
                                                                                                                                                                    l1.5,0.1l0.1-1c0,0,0.8-0.9,1-1.4s1.1,0,1.1,0l0.6,1.9l-0.2,4.1l-1.2,1.8c0,0-2,2.5-2,2.9s1.4,0.9,1.9,0.9s1.1,1.2,1.1,1.2
                                                                                                                                                                    l-0.6,1.6h-2.2l-0.6,3.9l-1,2l-2-0.1l-1.5,0.6c0,0,0,1.6,0.4,1.9s1.6,0.5,1.6,0.5l0.6,0.5v2.1l-0.6,5l-1.5,0.5l-0.9,0.1
                                                                                                                                                                    c0,0-0.6,0.6-1,0.6s-0.9,0-1.9,0s-1.1-0.4-1.5-0.5s-1.2-0.6-1.2-0.6s-0.8,0.9-1.2,1.4s-1.1,0-1.8,0s-1.1,0.2-2,0.2
                                                                                                                                                                    s-0.8,0.9-1.1,1.1s1,2.9,1,2.9l0.4,1.5v4.1l-0.9,0.6l-1,1l-1.1,1.1l1.2,2.2l2.2,3.8l2.2,0.6c0,0,1.6,0.4,2,0.6s0.5,0.9,0.5,0.9
                                                                                                                                                                    l0.4,4.4l1.1,0.8l0.6,0.9l0.1,1.5l0.2,1.5l-0.9,1.4l-2.8,4.2l-0.2,10l-0.2,3l-1.5,1.8c-1.8,4.8,1.8,7,1.8,7c5.2,3.2,8.5,11,8.5,11
                                                                                                                                                                    l0.2,2.5l1.5,0.8l1,6.5l1.2,0.2l1,1.2v7c1.2,5.8,6,11,6,11l2.8,1l1,3c0,0,1.2,1.8,2,1.8s2.2,0,3,0s1,1.8,1,1.8l-1,2.8l1.8,2.2
                                                                                                                                                                    l3,4.5l3.2,0.2l0.5,2.5c4.2,2.5,8.5-1.1,9.6-1.2s0.6-0.1,2.1-2.2s-0.6-1.2-0.6-1.2s0,0-0.4-0.8s-0.2-1.1-0.5-2s-1.4-1.4-2.9-2.2
                                                                                                                                                                    s-0.1-2.2-0.1-3.9s0.6-1.2,1.2-2.1s0.9,0.6,1.9,1.4s0.6,1.4,0.8,3s0,0,0,1.5s0.5,1.1,0.8,1.5s0.9,0.8,1.4,1s0.5,0.8,1.1,2
                                                                                                                                                                    s-0.4,1.5-0.4,1.5s1.2,1.1,2.1,1.5s1.2,1.1,1.2,1.1s1.1,0.6,2.6,1.1s1.1,0.1,2.2,0.1s1.5-0.9,1.5-0.9s0.6-0.2,2.1-0.8s2-1.1,2-1.1
                                                                                                                                                                    l0.6,1l1.2-0.2c0,0,0.5-0.2,0.8-1s0.8,0,1.2,0s0.5,0.5,0.8,0.9s1.1,1,1.1,1l1.1-1.5c0,0,2.1-2.6,2.1-3s1.4-1.1,1.8-1.2s0-1,0-1.4
                                                                                                                                                                    s0-1.1-1.2-2.6s0,0-0.8-0.6s0,0-1.1-0.2s0,0-1.2-0.5s-0.5,0-1,0s-2.1-0.4-3.2-0.4s-1,0-2.2,0s-0.6-0.1-1.5-0.5s-0.4-0.9-0.4-1.2
                                                                                                                                                                    s0.6-0.9,0.6-0.9s1.2,0,1.6,0s2.5,0,2.5,0l-0.2-1c0,0-0.9-1.4-0.9-1.8s0-0.9,0-1.6s0,0,0.2-0.4s0.6-0.5,1.4-0.8s1.2,0.1,3.1,0.1
                                                                                                                                                                    s0.5,0.6,1.2,1.8s0,0.8,0.5,2.4s0,0,1.4,0.1s1.4,0,2.9,0.1s0,0,0.8,0.6s0.5,0,1.6,0s0.5,0,1.5,0s1-0.5,1.4-0.8s0.4-0.6,0.6-1.1
                                                                                                                                                                    s0-1.1,0-1.5s-0.9-0.8-0.9-0.8l-2.2-0.1l-0.4-2.1c0,0,0.4-0.5,1.4-0.6s0.6,0.2,1,0.5s1.4,0.8,2,1s1,0,1.8-0.2s1.4-0.1,1.4-0.1
                                                                                                                                                                    s-0.1-0.8-0.2-1.4s-0.2-0.9-0.5-1.9s0-0.8-0.2-1.4s0.8-0.4,1.5-0.6s1.9,0.8,2.6,1.1s1.5-0.1,1.6-0.5s0.2-3.1,0.4-3.5s0.6-0.8,2-2
                                                                                                                                                                    s1.8-1.4,2.1-1.5s0.6-0.2,1.6-0.6s0.5-1.1,0.8-1.6s0.5-1.2,0.5-1.2s0,0,0-3.1s1.6-2.4,2.1-2.4s1,0.9,1.2,1.2s0.4,1.9,0.4,3
                                                                                                                                                                    s-0.2,3.1-0.6,4s-2.5,2-3.1,2.1s-1.5,4.4-1.5,4.4s2.9,3.6,3.2,3.8s4,5.6,4,5.6l2.8,0.5c0,0,3.4,2.6,3.9,2.8s2.5,6,2.5,6l4.8,5.8
                                                                                                                                                                    l7,8.9l5.5,10.5l1.4,4.4l1.8,4.1l0.8,5c0,0,0.8,8.6,0.9,9.5s1.5,3.5,1.5,3.5l2.2,1.5c0,0,1.5-1.4,2.5-2.2s0.9-1.4,0.9-1.9
                                                                                                                                                                    s-0.4-0.6-0.4-0.6l-2.5-0.2l-0.9-1.1l-0.5-3.8c0,0,0.4-2.2,0.6-2.6s0.4-0.5,1.1-1s0.5,0,1,0s2.9-0.5,2.9-0.5l-2.2-0.6
                                                                                                                                                                    c0,0-1.1-0.2-1.6-0.4s-0.6-1.4-0.6-1.9s0.1-1.1,0.5-1.5s1.4-0.6,1.9-1s1.9-0.6,1.9-0.6s1.8,0.6,2.2,1s0.8,2.4,0.8,2.4l0.8-0.5
                                                                                                                                                                    c0,0,0.1-1,0.2-1.5s0.4-1.4,0.5-2.2s0.5-1.9,0.6-2.5s1.2-2,1.8-2.5s1.6,0.1,1.6,0.1l0.5,1.2l-0.5,1.5c0,0-1.4,1.4-1.6,1.8
                                                                                                                                                                    s0,2.9,0,2.9v3.5l-1.6,2l-4.6,1.2c0,0-2.4,0.1-2.8,0.1s-0.5,1.8-0.5,1.8l1.8,2.2c0,0,0.9,1.6,1.4,2.1s1.1,1.4,1.1,1.9
                                                                                                                                                                    s-1.4,2.2-1.4,2.2l-3.1,2.5c0,0,0.6,5.8,0.6,6.2s0.4,3.1,0.4,3.1v1.2c0,0,0.8,1.2,1.5,2.2s1.1-0.5,1.2-0.9s0-0.8,0-1.2
                                                                                                                                                                    s0-1.5,0-1.9s1.4-0.4,1.4-0.4l1.6,0.5v1.5c0,0-0.6,3.6-1.2,5s0.5,2.9,0.8,3.5s2.4,4.6,2.4,4.6s0,1.8-0.1,2.4s-0.1,2.9-0.1,2.9
                                                                                                                                                                    l0.5,4.1l2.1,2l1.1,3.5c0,0,0.1,4.1,0.1,4.6s0.4,2,0.6,2.4s0.5-0.1,0.9-0.4s0.4-1,0.4-1s0.4-0.5,1.4-1.1s0,0,1.1,0s0.5,1,0.5,1
                                                                                                                                                                    s0,1.5-0.1,2s-0.9,2-1.5,2.9s-2,1.5-2.5,1.8s-1.5,2.5-1.5,2.5s-0.4,0.5-0.5,0.9s0.8,2.5,0.8,2.5s1.1,1,2,1s1.9-1.2,1.9-1.2
                                                                                                                                                                    l1.9-1.4l3.4,0.5l0.6,1.1l-0.9,0.8h-1.2l-1.2,0.4l-0.2,1.5l2.5,0.1c0,0,1.1,0,1.6,0s-0.2,0.8-0.5,1.2s-1,1.2-1,1.2
                                                                                                                                                                    s-1.2,0.1-2.2,0.1s-1,0.4-1.1,1.2s0.4,0.6,0.8,0.9s0.5,2.1,0.5,2.1l0.1,2.9l1.5,1l0.9-0.5c0,0,0.2-1.4,0.4-1.9s0.9,0.2,0.9,0.2
                                                                                                                                                                    s-0.1,0.8-0.4,1.1s-0.6,1.6-0.6,2s0.4,1.8,0.4,1.8s0.6,0.9,1,0.9s1.2-0.4,1.6-0.5s0.8-1.6,0.8-1.6l1.1-1.6v-2l0.5-0.5h1.1
                                                                                                                                                                    c0,0,0.2,1.8,0.2,2.1s0.1,1.6,0.5,1.9s0.4,0.9,0.5,1.2s0,1.2-0.1,1.8s-0.6,1-1,1.4S276,283,276,283v2.4l0.1,2.4
                                                                                                                                                                    c0,0-0.9,1.1-1.9,1.5s-0.8,0.4-1.2,0.9s0,0-0.4,0.9s0.2,2.9,0.2,3.6s0.5,2.1,0.9,2.5s0.9,0.8,1.4,1.1s0.1,0.8,0,1.8s0,0-0.2,0.4
                                                                                                                                                                    s-0.9,0.6-1.4,0.8s-1.5-1-1.5-1s-0.6,0.2-0.6,0.8s0,1.8,0,1.8l-0.9,1.5c0,0,0,0-0.6,0.8s-0.5,0.1-1,0.2s-1.1,0.4-1.4,1
                                                                                                                                                                    s-0.1,1.8-0.1,1.8l1.2,1.6l10.2,14.9c3,9.8,1.2,17.9,1.2,17.9l0.2,2.9c0,0,3.4,3.2,3.8,3.4s3,3.9,3,3.9l1.5,3.9
                                                                                                                                                                    c0,0,5.1,4.5,5.4,4.9s2.2,0.5,2.2,0.5l1.6,5.1c0,0,0.4,3.9,0.6,4.2s1.6,4.6,1.8,5.4s3.2,4.8,3.4,5.1s2.5,2.5,2.5,2.5l2.1,3.8
                                                                                                                                                                    l2.2,6.9c0,0,0.2,1.6,1.2,2.9c1,1.3,2.1,0.9,2.8,0.9s0.8,0,1.1,0s0.4-2.5,0.4-2.5s-0.1-2.9-0.2-3.5s-0.1-0.9-0.8-1.4
                                                                                                                                                                    s-0.2-0.8-0.6-1.1s-0.2-0.6-1.4-2s-0.5-1.4-1-3.1s-1-2.8-1.8-4.4s-1.4-1.4-2.2-2.1s-1.1-3.1-1.1-3.1l-1.4-15.9c0,0,0.1-2,0.1-2.6
                                                                                                                                                                    s-0.1-0.9-0.4-1.5s-0.8-1.8-0.9-2.1s-0.8-1.1-1.6-2.6s-0.8-1-1.6-1.5s-1.2-0.9-1.8-1.4s-0.8-1.8-0.8-1.8l-1.5-4.8l0.4-2.9
                                                                                                                                                                    c0,0,0,0,0.4-0.2s0.9-1.1,0.9-1.1s-0.2-1.5-0.4-2s-0.2-2.2-0.2-2.8s0-1.1,0.1-1.9s0.2-0.9,0.6-1.4s1-1.4,1-1.4s-1-2.1-1.1-2.5
                                                                                                                                                                    s-1.1-1.9-1.1-1.9l0.2-2.8c0,0,0.4-1.1,0.5-1.5s0.6-0.4,1.1-0.9s0.6-1.1,1.1-1.6s0.6-0.5,1.6-0.9s0.9-0.4,1.8-0.5s0.2-1.2,0.2-1.2
                                                                                                                                                                    l0.1-5.1c0,0,1-0.1,1.6-0.1s0.6,0.1,1.8,0.2s1.1,0.1,2,0.1s1.5,0,1.5,0s1.5-0.2,1.9-0.6s1-1.1,1-1.1s0.2-0.8,0.4-1.1
                                                                                                                                                                    s0.6-1,0.9-1.4s1-1.5,1.4-1.9s1.2-0.8,1.2-0.8h1.4c0,0,1.2,0.8,1.8,0.9s2.4,2,2.4,2s0.4,1.2,0.4,1.6s0.6,3.4,0.6,4.1
                                                                                                                                                                    s-0.1,3.1-0.1,3.5s1,1.1,1.5,1.4s0.9,0.1,2.8,0.6s2.6,1,2.6,1s1.4,0,2.1,0s0.5-0.4,1-1.1s0.6-1.2,0.9-1.6s2.6-0.2,2.6-0.2l3.6,2.5
                                                                                                                                                                    c0,0,1.2,2.4,1.8,2.9s0.2,1.8,0.2,2.8s-0.1,2.4-0.1,2.9s0.4,4.5,0.4,4.5l3.1-0.1c0,0,2.6-0.5,3.1-0.6s2.5-1.1,3.2-1.6
                                                                                                                                                                    S352.4,324.6,352.4,323.6z M188.3-49.1c-0.1,0.1-0.4,0.3-0.7,0.5l1.1-1.1C188.6-49.5,188.5-49.3,188.3-49.1z M188.8-50l-0.4-0.5
                                                                                                                                                                    h0.5C189-50.4,188.9-50.2,188.8-50z M189.3-57.9v0.5c0-0.2-0.1-0.5-0.1-0.6L189.3-57.9z M189.3-57.3v1.2l-0.7,0.8l-0.3,0.1
                                                                                                                                                                    c0.4-0.5,0.5-1.1,0.5-1.1C189.2-56.6,189.3-57,189.3-57.3z M188.5-58.6l-1-0.5C187.8-59,188.2-58.8,188.5-58.6z M187.1-59.2
                                                                                                                                                                    l-1-0.3C186.6-59.4,186.7-59.3,187.1-59.2z M186.1-54.7h0.4C186.3-54.7,186.2-54.7,186.1-54.7L186.1-54.7z M185.9-51.4L185.9-51.4
                                                                                                                                                                    L185.9-51.4L185.9-51.4z M185.3-59.3l-0.3,1.2l-0.1,0.1C185.2-58.6,185.1-59,185.3-59.3z M185.6-54.3c0,0.5-0.5,1.1-0.7,1.6
                                                                                                                                                                    l-0.1-0.1L185.6-54.3z M185.9-48l0.9-0.1c-0.4,0.3-0.8,0.5-0.8,0.5l-0.5,0.8l-0.8,1.3L185.9-48z M185.5-43.3c0,0,0.5,0.7,0.5,1.3
                                                                                                                                                                    l0,0l-1.3-3.5L185.5-43.3z M182.5-54.6l-0.3,0.4l-0.1-0.1C182.2-54.3,182.4-54.5,182.5-54.6z M139-172.4l0.6-1.2l-0.6,1.5V-172.4z
                                                                                                                                                                    M139-171.6l0.1,0.9L139-171V-171.6z M139-156.3l-0.3,4l0.3-4.8l0.7-0.9L139-156.3z M144.7-140l-1.2-2.3l-1-0.8l-2.3-4.7
                                                                                                                                                                    c0,0,2.7,5,3.2,5.2C143.7-142.5,144.5-140.7,144.7-140L144.7-140z M148-138l-1.5-0.9l1.5,0.6l6.3-0.2L148-138z M156.2-138.8
                                                                                                                                                                    l3.6-1.1l0.4,0.2L156.2-138.8z M181.1-54.8c0.2,0,0.3,0.1,0.4,0.2L181.1-54.8h-3.2l-1.6-0.2c0.3,0,0.6,0,0.9,0
                                                                                                                                                                    C179-54.9,180.5-54.8,181.1-54.8z M177.5-74.8l-0.7,1.5l-1.3,0.8l0.9-2.4l-0.5-3.1l0.9,0.7L177.5-74.8z M176.3-84.6l-1.1-0.6
                                                                                                                                                                    l0.3,0.1C175.5-85.1,176.3-85.1,176.3-84.6z M175-93.9l-0.2,0.1l0.5-1.2C175.1-94.5,175-93.9,175-93.9z M175.8-98.4v0.1l-1.2-1.1
                                                                                                                                                                    L175.8-98.4z M176-81.7l0.3-1.6c0,0.6,0,1.2,0,1.2s-0.3,0.7-0.8,1.2s-1.3,0.8-1.3,0.8l0.7,1.3l-1-1.4L176-81.7z M173.5-111.1
                                                                                                                                                                    c0,0,0.2,0.5,0,1.8c-0.1,0.7-0.3,1.2-0.6,1.6L173.5-111.1z M170.8-105.9l1.9-1.4c-0.1,0.2-0.2,0.3-0.2,0.3l-1.7,1.7l-0.3,2v-0.1
                                                                                                                                                                    C170.5-103.8,170.8-105.9,170.8-105.9z M171.3-87.3l-0.2-2.2c0,0-0.3-0.8-0.1-1.1s1.3-1.8,1.3-1.8h0.1l-1.3,2.4L171.3-87.3z
                                                                                                                                                                    M168.4-62.6l0.8-3.2l7.3-0.6l-1-4c0.8,1,1.5,1.2,1.5,1.7s-0.2,1.5-0.2,1.5l-0.3,0.8l-1,0.5h-2.7h-2.2c0,0-1.5,0.5-1.5,1.2
                                                                                                                                                                    c0,0.4-0.5,1.9-0.8,2.8v-0.7H168.4z M160.7-139.6l2.3,1c0,0,0.1,0.1,0.1,0.3L160.7-139.6z M164.1-132.6l-0.7-1.3l0.1-2.8l-0.4-1.4
                                                                                                                                                                    c0.2,0.4,0.4,1.1,0.5,1.8C163.8-134.9,163.5-134.1,164.1-132.6s0.7,2.3,0.7,2.3L164.1-132.6z M165.9-57.1l-0.6,0.2
                                                                                                                                                                    c1.4-0.8,3.1-1.9,3.1-1.9v-2l1.4,2.1c0,0,1.8,2.5,2.8,3.3l-0.6-0.1l-3.2-3.8l-0.4,0.5L165.9-57.1z">
                                        </path>
                                        <path
                                            d="M69.6,232.1c0.9-1,2.2-2.6,2.2-2.6s1.2-1.5,1.8-2.1s0.9-1.8,0.9-1.8L75,220c0,0,0-1.5,0.5-1.6s1.9-2.1,1.9-2.1v-1.8
                                                                                                                                                                    c0,0,1.5-0.4,1.8-0.8s0.8-2.5,0.8-2.5s-1.5-1.4-1.9-1.8s-1.5-2-1.5-2s-0.5-1,0-1.4s1.1,0,1.2-1.4s-0.2-3-0.2-3.6s0.5-2,0.5-2h2.2
                                                                                                                                                                    c0,0-0.2,1.5,0,2.8s0.5,3.5,0.5,3.5s-0.6,1.9-0.4,2.4s1.1,2,1.1,2.4s0.1,2.2,0.1,2.8s-0.1,1.1-0.4,1.6s-0.9,1.2-1,1.6
                                                                                                                                                                    s-0.9,1.4-0.9,2s-1,2.4-1,2.4l-0.9,1.4c0,0,0.8,1.4,1.4,1.8s2,1.1,2,1.1s0.4,1.6,0.9,1.6s0.8,2.1,2,0s0.4-1,1.6-3.1s1.1-2.9,1.5-3
                                                                                                                                                                    s1.9-2.9,2-3.6s1.4-4.5,1.4-4.5s0.8-1.5,2.9-1.5s3.1,1,4.1-0.2s4-6.9,4-6.9l2.8-5.4l0.1-11.4l-2.4-5.4c0,0-1.8-2.1-1.6-3
                                                                                                                                                                    s1.2-3.1,1.2-3.1s-0.1-7.2-0.1-7.6s-2.2-3.2-2.4-3.6s-2.6-2-2.6-2l-1.5-0.5l-2.9-0.8l-2.2-0.8l-2.2,0.5l-0.6,0.9
                                                                                                                                                                    c0,0-0.1,0.9-0.1,1.2s-0.2,1.2-0.2,1.9s0,1.5,0,1.5s-0.1,1-0.1,1.4s0,0.8-0.4,1.1s-0.6,0.8-0.9,1.1s-0.2,0.4-0.2,0.4l-1.5,0.4
                                                                                                                                                                    l-0.6-1.4l1.1-1.4c0,0,0.5-2.5,0.5-2.9s-0.1-3-0.1-3.6s-0.2-1.4,0.2-1.9s1.2-1.2,1.6-1.4s0.9,0.1,1.5,0.1s2,0.2,2.5,0s1-1,1-1
                                                                                                                                                                    l1.4-3.8l-1.5-2.9l-0.9-3.4l-0.6-2.6l-1.1-2.1l-1-2.9l-1.4-2.4l-1.9,0.8l-1.2,0.6l-1.1,1.6l-0.9-0.8c0,0-1-0.4-1.4-0.4
                                                                                                                                                                    s-2.2-0.1-2.2-0.1s-0.9,0.4-1,0s-0.8-1.6-0.8-1.6l0.4-1.5l1.4-0.1l1.1,0.2c0,0,2.1,1.6,2.6,0.5l1-1.2l-0.6-1.9l-0.1-0.9l0.4-0.5
                                                                                                                                                                    c0,0,0.2,0,0.6-0.1s1.2-0.9,1.2-0.9s0.2-1.6,0.2-2s0.1-2.2,0.1-2.6s0.8-2.6,0.8-2.6l1.4-2.9l2-0.4c0,0,0.5,0.2,1,0.4
                                                                                                                                                                    s0.8,0.2,1.2,0.5s1.9,0.8,2.2,0.8s1.4-1.5,1.4-1.5l0.9-1.1l-1.1-2.5l-2.5-2c0,0-0.1-1-0.4-1.4s-1.4-1.5-1.4-1.5l-1.4-1l0.1-4.2
                                                                                                                                                                    l-1.1-0.9l-1.6-0.6l-0.5-1.9l0.9-0.6h1l0.9,1.1l1-1.9c0,0-0.1-0.2,0.2-0.6s1.5-0.8,1.9-0.9s0.8-1.2,0.8-1.2s0.1-0.8-0.2-0.8
                                                                                                                                                                    s-2.1-0.1-2.1-0.1l-0.8-0.5c0,0-1.1,0.1-1.1,0.5s-0.5,2.4-0.5,2.4l-1.2,0.6c0,0-0.8-0.4-0.8-0.8s0.1-1.9,0.1-1.9s-0.1-1.1,0.2-1.2
                                                                                                                                                                    s0.9-0.8,0.9-0.8l-0.4-0.8c0,0-0.1,0-0.3-0.1c0.3-0.1,0.6-0.2,0.8-0.2c0.4,0,2.6,0.9,2.6,0.9s0.8-0.2,0.9-0.8s1.2,0,1.2,0l2.4-0.2
                                                                                                                                                                    l1.6-1.6l0.5-1l1.8-0.9l0.6,0.8l-1.1,2.4l1.8-0.1l1.9-1l0.5-2l1-2.5l0.1-3l-0.1-2.2l-1.1-1.1v-1.9c0,0,0.1-1.6,0.1-2
                                                                                                                                                                    s0.8-1.2,0.8-1.2l1.9,1.5l0.1-1l0.8-1.9l-1.1-2.4l-1.8-2.1v-0.9c0,0-1-1.5-1.5-1.6S98,68,98,68s-1.1-0.2-1.9-0.4s-2.2-0.1-2.2-0.1
                                                                                                                                                                    h-2.5c0,0-2.2-1-2.9-1.1s-1.2-0.9-1.2-0.9L85.8,65l-1.5-0.8l-1.5,0.5l-1.2-1.9c0,0-1.6-2.6-2-3.2s-2.2-2.1-3.5-2.8s-2-1.5-2-1.5
                                                                                                                                                                    s-1.8-0.4-2.5-0.4S69,53.5,69,53.5l-1.6-1.4c0,0-0.4-0.5-0.9-0.6s-0.5-0.1-1.6-0.1c-0.3,0-0.5,0-0.6,0c0,0-1-0.1-1.6-0.1
                                                                                                                                                                    s-1-0.6-1.4-0.8s-1.2-1.4-1.2-1.4s-1.2-1-2.1-0.6s0,0-0.4,0.4s-0.9,1-1.6,1.4s-1.4,0.5-1.4,0.5s-0.6,0-1.9,0c-0.6,0-0.8,0-0.9,0
                                                                                                                                                                    c0,0-1.4-0.1-2.2-0.2s-1.5-0.5-1.5-0.5v-0.9c0,0,0.1-0.6,0.1-1s0.5,0,1.1-0.1s0.8,0.2,1.2,0.4s1.2,0.8,1.2,0.8h2l1.4-1.1
                                                                                                                                                                    c0,0,1-1.1,1.4-1.5s-0.6-1.8-0.6-1.8l-1.1-1.6l-3.9-0.1h-4.4c0,0-0.8-1.6-1.2-1.6s-1.4-1-1.9-1.5s-0.9-1.5-1.1-1.9s-1.5-1.6-1.8-2
                                                                                                                                                                    s-0.9-1.5-0.9-1.5L37,33.5c0,0-1.4-1-2.1-1.5s-2.5-2.1-2.5-2.1l-1.9-1l-1.8-2.1l-1.6-0.5c0,0-3.2,0.1-3.6,0.1s-3.2-0.2-3.2-0.2
                                                                                                                                                                    l-1.8-0.9l-4.8-0.4h-1.6c0,0-2.8-2.4-2.8-2.9s1.4-1.6,1.4-1.6v-8.1l-1.9-1.4l-1.4-3L5.8,5.1l-3-0.6l-1.4-2L-1.2,0l-3.4-0.1H-9
                                                                                                                                                                    l-1.1-1l-3.2-0.5l-1.8,0.2L-16.9,0l-2.5,0.5l-1.4,0.9c0,0-2.6,0.5-3.1,0.8s-1.8,0.1-2.5-0.1S-27.6,1-27.6,1s-1.9-1.4-3.5-1.5
                                                                                                                                                                    s-1.5-0.2-1.5-0.2s-1.5-2.5-1.6-3.5s-1.1,0-1.1,0H-37L-37.9-6l-1.5-1.1l-3.8-1l-2-1.4l-0.6,0.1V-8c0-0.4-0.2-3-0.2-3l-3-1.5
                                                                                                                                                                    l-3.8-2.1l-5,0.4l-7.4,0.6l-5.1-0.8l-3.6-0.6l-3.1-2.9c0,0-2.5-2.1-2.9-2.2s-1.8-0.8-1.8-0.8l-0.5-1.2v-5.1l-0.6-2.6l-4.1-6.1
                                                                                                                                                                    c0,0-1.8-2.4-2.1-2.5s-2.2-1.9-2.2-1.9l-1.9-0.5l-2-0.6l-1.5,0.4l-0.8,1.2c0,0-2.1,0-2.5,0s-1.6-0.8-1.6-0.8L-103-39l-1.5,2.1
                                                                                                                                                                    l-1.6-0.2c0,0-1,0-1.9-0.2s-2.9-0.5-3.4-0.8s-3.2-1.5-3.2-1.5l-1.6-1.9L-117-44l-1-1.8l-1.9-1.5l-2.5-1l-0.2,3.2l-0.8,1.8v4.2
                                                                                                                                                                    l0.2,2.5l3.5,2.8l-0.5,1.2l2.2,0.5v2.2v1.8l-2.2,1l0.5,4.8c0,0,0,0.8,0,1.5s1,2.8,1,2.8v1c0,0-0.2,1-1.2,1c-0.9,0-2.1,0-2.2,0
                                                                                                                                                                    c0,0.1-0.2,0.3-0.8,1.2c-1,1.5-2.2,3.2-2.2,3.2l-1,2c0,0,0,0.2-1.2,0.5c-1.2,0.3-4.8-0.2-4.8-0.2l-1.8-0.8l-1.8,1l0.8,7l-1.8,1.5
                                                                                                                                                                    l-1,1.5l-0.8,2l0.5,3.5v2.2l-0.8,2.2c0,0,0,1.8,0,2.8s-1,4.5-1,4.5l1.8,1.2l1,2.2l-0.8,2.8l1.5,2.5l6.2-0.2v4.5l2,3.8l5.2,2.8
                                                                                                                                                                    l3,2.2l0.2,1.8l1.8-0.5c0,0,0-0.5,0.8-1.2s2-1.8,2-1.8l1.9,0.2v1.5l0.4,0.8c0,0,0,1.6,0,2s0,1.6,0,1.6l-0.6,1.2l-1.1,1.8l-1.6,1.2
                                                                                                                                                                    c0,0,0.1,0.4-0.1,0.9s-0.8,1-0.8,1c-0.2,0.8-0.5,2.2-0.5,2.2V54l0.5,1.5l-0.4,0.6l-0.2,1.1l-0.6,0.1c0,0-0.2,0.2-0.6,0.8
                                                                                                                                                                    s-0.4,1.6-0.4,1.6l-1,1.6c0,0-1.4-0.2-1.6,0.2s-0.9,2-0.9,2c0,1.4,0,1.5,0,1.9s-0.2,0.4,0,1s-0.4-0.2,0.2,1.1s0.5,1.5,0.9,2.5
                                                                                                                                                                    s0.4,1,0.4,1s0.5,0.5,1,0.9s1.6,0.4,1.6,0.4l1.6,0.2c0,0,0.5-0.2,0.9,0s0.1,0.6,1.1,1s1.5,0.6,1.5,0.6s0.4,0.6,1.6,0.4
                                                                                                                                                                    s1.6,0.4,1.9-0.4s0.4-1.6,0.9-1.8s1.6-1.1,1.6-1.1l2,1.5l0.6,0.1c0,0,0.5,0,0.6,0.4s-1.8-0.1,0.1,0.4s2.2-0.1,2.2-0.1h1.8
                                                                                                                                                                    c0,0,0.6-0.2,1.1,0.4s1.2,1.8,1.2,1.8l1.5,0.8c0,0-0.2,0.1,0.6,0s0,0.4,0.9-0.1s0.1-0.2,0.9-0.5s0.9-0.5,1.5-0.5s1.8,0.4,1.8,0.4
                                                                                                                                                                    l0.6,0.9l-0.1,1.6l-0.9,0.9c0,0,0.2,0.9-0.1,1s-1,1-1.4,1s-1.1,0.1-1.8,0.5s-1.2,0.4-1.5,1s-0.8,0.5-1.1,1.8s-0.5,1.9-0.8,2.6
                                                                                                                                                                    s-0.6,2.2-0.6,2.2s0.4,0-1.1,0.4s-2.2,1.4-2.2,1.4l-1.1,0.5l-1,0.9h-0.6l0.9,3.4c0,0,0.2,1.6,0.2,2.2s0.1,1.2,0,1.8
                                                                                                                                                                    s-1.2,1.4-1.2,1.4s-0.5-0.8-0.5,0.2s-0.2,1.4-0.2,2.4s-0.8,2.4-0.8,2.4l0.4,1.6l1.9,1.4c0,0,0.1,0.5,1.1,1.1s2.1,0.8,2.2,1.1
                                                                                                                                                                    s0.2,0.8,0.2,1.6s-0.6,4-0.6,4s0.6,1.6,1.4,2.4s1.2,1.1,1.2,1.1l1.1,0.2h2.5c0,0,1.2,1,1.8,1s1.6,0.2,1.6,0.2s0.2,1.6,0,2.1
                                                                                                                                                                    s-0.2,1.5-0.6,1.9s-0.8,0.8-1,1.1s-0.1-0.2-0.2,1s-0.4,0.1-0.4,2s0,1.9,0,1.9s0.2,0.8-0.1,1.2s-2.5,1.5-2.5,1.5l-1,0.5l-0.6,1
                                                                                                                                                                    l-0.2,1l0.5,1.5c0,0,2.1,1.8,2.2,2.2s0.4,2.1,0.4,2.5s0.1,0.9,0,1.2s0.1,0.6-0.2,1.1s-0.4,0.5-0.4,0.5l-0.1,5.6l1.1,1.8
                                                                                                                                                                    c0,0,1.5,1.5,1.4,2s-1.2,2.2-1.2,2.2s-0.5,1.9-1.4,2.2s-1.8,0.5-1.8,1.2s-0.1,1.5,0.6,2s0.5,0.5,1.5,0.6s0.2-1.8,2.1,0.2
                                                                                                                                                                    s1.9,2,1.9,2l0.2,1.1v1.8v3.5l2,1.4c0,0,0.4,0.8,0.4,1.1s0,1.9-0.2,2.2s-0.8,0.6-0.9,1.1s-1,1.9-1,1.9l-0.4,0.6l-0.4,1.1l1.1,0.5
                                                                                                                                                                    c0,0,0.4-0.5,0.5,0.4s0.2,1.6,0,2s-0.5,1.1-0.5,1.1s-0.4,0.1-0.5,0.5s-0.6,1.5-0.6,2.4s0,2.4,0,2.4s1.8,0.2,2.2,0.5
                                                                                                                                                                    s1.2,0.9,1.2,0.9l1.2,1.1c0,0,1,0.6,0.8,1.1s-1,1.9-1,1.9l-1.4,0.4l-0.4,3c0,0,2.1,1.4,2.5,1.6s1.8,1.2,1.8,1.2s0.1,2.5,0.2,2.9
                                                                                                                                                                    s1.1,1.4,1.5,1.6s0.9,0.6,0.9,0.6s1.1,0.2,1.1,0.6s-0.2,1-0.2,1.5s0,1.9,0,1.9s1.4,0.4,1.6,0.8s0.2,0.4,0.2,0.4l0.1,3.4
                                                                                                                                                                    c0,0-1.5,0.1-1.8,0.5s-1.2,1.4-1.6,1.5s-0.9,1.1-0.9,1.1s-0.5,0.6-0.5,1.2s-0.1,1.4,0,1.9s0.2,1.8,0.2,1.8s0.2,1.5,0.8,1.8
                                                                                                                                                                    s2.2,2.1,2.2,2.1l1.4,2.5c0,0,0.1-0.1,0,1.4s-0.5,2.8-0.5,3.2s-0.2,2.9-0.2,2.9l0.1,6.1l-0.5,2.6c0,0-1,1.1,0,2s1.5,0.8,1.9,1.9
                                                                                                                                                                    s0.5,1.8,0.5,1.8l0.1,6.4l2.2,1.9l2.2,1.1l0.8,0.1l1.4,0.4c0,0,0.5-0.1,1.1-0.6s1.4-0.8,1.4-1.1s0.1-1.4,0.1-1.4l1.5,0.1l0.1,1.4
                                                                                                                                                                    v1.2c0,0-0.2,1.1,0,1.6s1,1.9,1,1.9l1.9,3l0.1,1.1l0.2,2.5l-0.8,3l-0.4,1.1l-1.5,0.4c0,0-0.2,1.2-0.1,1.9s0,1.8,0.8,2.1
                                                                                                                                                                    s4.9,1.4,4.9,1.4l1.8-0.4l0.8-1.5l1.4-1.4l1-0.5l1.4-0.8l-1.4-2h-1l-0.4-1v-1.2c0,0,0.2-1.1,0.8-1.6s0.5-0.6,1-1.1
                                                                                                                                                                    s0.5-1.9,0.5-1.9s0.6-0.5,0.8-0.9s0.2-1.2,0.2-1.9s-1-2.6-1.2-3s-0.8-1.9-0.8-1.9s-0.6-0.6-0.6-1s3.1-0.1,3.1-0.1l1-4.4
                                                                                                                                                                    c0,0-0.4-2.4,0-2.8s2.2-1.9,2.2-1.9s1.5-0.9,1.9-1.1s1.1-0.6,1.1-1.1s-0.8-5.5-0.8-5.5l-0.6-2v-1.8l1.2-0.5c0,0,0.5-0.2,0.9,0
                                                                                                                                                                    s0.9,0.9,0.9,0.9l0.4,1.5c0,0,0.5,1.1,0.5,2s0.2,2.5,0.2,2.5l0.8,1.4l0.6,4.8l-1,1.6c0,0-0.1,0.8-0.5,1.2s-0.5,1.2-0.8,1.6
                                                                                                                                                                    s-0.8,12.9-0.8,12.9s1.6,1.8,2,2.2s0.8,1.2,1.1,1.2s2.6-1.4,3.1-1.4s1.8-1.5,1.8-1.5l1.2-3.1c0,0,1.2,0.8,1.8-0.6s0.4-0.9,0.8-2
                                                                                                                                                                    s0.6-2,0.6-2.8s0-2.9-0.1-3.4s-1.1-1.9-1.2-2.4s-0.5-2.4-0.1-2.6s0.8-0.8,1.2-1s-0.2-0.4,0.8-0.8s1.6-1.2,1.6-1.6s-0.6-0.9,0-0.9
                                                                                                                                                                    s2.5,0,2.5,0l0.8-2l-0.5-4.1l0.6-1.1l1.4-1.5l-0.8-1.9l-2.1-2.2c0,0-1.4-1.2-1.4-1.6s-0.1-2.5-0.1-2.5s1.9-1.8,2.2-2.4
                                                                                                                                                                    s1.1-1.9,1.1-2.2s0-1.8,0-2.1s0.4-0.9-0.1-1.9s-1.2-2.5-1.2-2.5s-0.8,0.2-0.8-0.2s-0.5-2.6-0.5-2.6l-0.8,1.6l-0.4,1.2l-0.4,0.9
                                                                                                                                                                    l-0.8-0.9c0,0-0.6-2.1-0.6-2.6s0.2-2,0.2-2l-0.2-1.6c0,0,1.2-1.1,1.2-1.6s-1-2.4-1.1-2.8s-0.5-1.9-0.5-1.9s-1.1-0.8-1.1-1.4
                                                                                                                                                                    s-0.4-0.9,0.1-2s0.9-1.8,0.9-1.8l0.8-1.8l0.2-2.1v-0.6l0.5-0.5h0.5c0,0,0.6-0.1,0.8,0.2s0.6,1.4,0.6,1.4s0.4,0.5,0.4,1
                                                                                                                                                                    s0.1,0.4,0,1.6s-0.2,1.9-0.4,2.4s-0.2,2.9-0.2,3.8s0,2.8,0,3.2s0.1,2,0.1,2l1.5,0.6c0,0-0.2,1.8,0.1,2s1.1,1.2,1.2,1.6
                                                                                                                                                                    s0.6-0.1,0.6,1.4s0.1,2.9,0.1,2.9s1.4,0.9,1.4,1.2s0.2,0.9,0.4,1.5s0,0.6,0.1,1.1s-0.9,3.1-0.9,3.5s0.1,1-0.5,1.6
                                                                                                                                                                    s-0.6-0.8-0.6,0.6s0.1,3.4,0.1,3.4l1.2,2l2.1-0.5c0,0,0.6-1,0.6-1.5s0-1.1,0.1-2s0.4-2.1,0.5-2.8s0.2-3.1,0.2-3.1s0.8-2.5,0.8-3
                                                                                                                                                                    s-0.1-0.4,0.4-1.8s0.5-3.2,0.5-3.8s0.2-1.8-0.1-2.2s-2-2-2-2l-1-0.9l0.1-5.6c0,0,3.1-2.6,3.4-3.4s0.5-2,0.5-2l-0.5-1.9
                                                                                                                                                                    c0,0-0.2-0.9,0-1.2s0.6-1.1,0.8-1.5s0.9-1.6,0.9-1.6l0.5-1.2c0,0,0-0.9,0.6-0.9s1.9,0.8,1.9,0.8s-0.6,1.1-0.6,2s-0.2,2.4-0.2,2.4
                                                                                                                                                                    s0,2,0,2.4s-0.1,1.8-0.1,1.8s0.1,1.8-0.4,1.9s-1.4,0.8-1.4,0.8s-1,1.8-1.5,2s-1-0.2-1.1,0.5s0.1,0.8-0.1,1.4s-0.1,2.4-0.1,2.4
                                                                                                                                                                    s0.6,0.8,0.9,1.2s0.8,1.2,0.8,1.2s0.4,0.8,0.9,0.8s1.2,0.6,1.2,0.6l0.6,0.6c0,0-0.2,0.6-0.2,1s0,0.4,0,0.4l0.6,2.4v1l-0.8,3
                                                                                                                                                                    l-0.4,0.8c0,0-0.5,1.1-0.9,1.5s-1.1,1.1-1.1,1.1l-0.2,0.8l-1.1,0.9l0.2,1v1.8l0.1,2.2l-0.2,1.4l-0.6,1.1c0,0-0.6-0.2-0.6,0.5
                                                                                                                                                                    s0,2.2,0,2.2s-0.4,0.6,0,1.2s0.4,0.6,0.4,0.6s0.5,0.5,0.6,1.6s0,4.4,0,4.4v2.9l-0.9,1.4l-2.9,2.6c0,0-0.8,0.5-1.1,1.6
                                                                                                                                                                    s-1,1.9-1,2.6s0.2,1.9,0.2,1.9l0.9,1.9c0,0,0.2,0.1,0.4,0.6s0.5,1.9,0.5,2.4s-0.5,0.8-0.4,1.8s0.2,1.8,0.4,2.4s-0.4,1,0.6,1.9
                                                                                                                                                                    s1.4,2,2,2.5s1.6,1.1,2,1.1s1.6-0.1,1.6-0.1s0.8,0,0.8-0.4s0.6-1,0.8-1.4s0.2-0.1,0.2-1s-0.1-2-0.1-2l-1.5-2.4
                                                                                                                                                                    c0,0-0.2-0.4-0.1-0.8s0.1-1.2,0.9-1.2s1.8,0,1.8,0l1,0.8l1.8,0.5l1.2,0.4h5.1l1.1-1.1v-1.9c0,0,0-1.2-0.2-1.6s-3-2.2-3-2.2
                                                                                                                                                                    l-3.4-2.1l-1.9-2.9l-0.9-2.2c0,0-0.5-2.8-0.2-3.1s0.8-1.5,1.1-1.8s1.1-1.4,1.1-1.4l0.4-0.9c0,0,0.2-0.5,1-0.1s0.9,0.1,1.5,0.8
                                                                                                                                                                    s0.5,0.1,0.6,0.6s0.1,2,0.1,2l-0.8,0.9c0,0-0.5,0.4-0.5,0.9s0,2,0,2s0.8,2.1,1.1,2.2s0.9,0.5,1.4,0.9s-0.2,0.6,1,1
                                                                                                                                                                    s1.6,0.5,2.5,0.5s0.5,0.1,0.9,0s-0.1-0.1,0.4-0.1s1.4-0.2,1.4-0.2s1.1,0,1.4-0.4s0.9-1.1,0.9-1.1l0.5-0.1c0,0,1,1.2,1.5,1.5
                                                                                                                                                                    s-1.4,0.8,0.8,0.8s2.5,0.4,3.2,0s2-0.2,2.1-0.8s0.8-1.4,0.9-1.9s0.2-1.6,0.6-1.9s1-0.8,2.2-1.1s2.8-0.8,3.1-1s0.9-1,0.9-1l0.4-3.4
                                                                                                                                                                    l-1.4-2.4l-2.4-1.8c0,0-0.4-3.6-0.4-4s1-6.2,1-6.2s-0.1-2.8-0.6-2.8s-3.4-1-3.4-1l-1.8-0.5L6,228.7l-0.1-1.5c0,0-0.4-0.5,0-0.9
                                                                                                                                                                    s1.2-0.8,1.2-0.8l1.8,0.9c0,0,1.4,0.9,2.1,0.4s3.5-1,3.5-1.5s0.5-3.8,0.5-3.8s0.6-7-1.1-9.9c0,0-4.9-8.2-2.4-13.9l4-5.9l1.2-1.6
                                                                                                                                                                    l0.2-1.8c0,0,0.1-1.1-0.5-1.5s-1.6-1.5-1.6-1.5s-0.2-1.1-0.1-1.5s0.6-0.9,1-1s1-0.2,1-0.2l0.1,1.8c0,0-0.1,0.9,0.8,0.9
                                                                                                                                                                    s2.5,0,2.5,0l1.5-2.2l1-2.1c0,0,0.1-0.8,0.8-1.2s1.1-1.6,1.1-1.6l2.4-2.2l0.8-3.5l1.4-2.2l1.6-0.6l0.6-0.1l2,0.5v1.6l-1.4,1.6H31
                                                                                                                                                                    l-0.9,0.8l-0.1,1.5l-1.1,3.2l-1.4,2l-2.2,1.4l-1,1.6l-3.1,3.2l-2.8,6.4l-2,4.9l-1,4.6l0.1,4.1l1.6,1.8l0.6,2.8l1.4,3.1l0.5,2.5
                                                                                                                                                                    h1.1l-0.5,7.6l-0.5,0.9v4.5l1,4.9l2.8,3.8c0,0,2.9,1.4,3.2,1.4s1.1-0.9,1.1-0.9l-0.9-3.9c0,0,0.2-1.6,0.4-2.6s0.1-1.6,0.4-2.2
                                                                                                                                                                    s0.5-1.4,1.1-1.8s1.1-0.5,1.8-1.1s2.1-4.4,2.1-4.4l-0.2-3V219l2.5-1.9l2.1-1.1l0.8-0.8l1.5-0.4l0.5,0.8v1.1l-1.1,1.6l-1.5,1
                                                                                                                                                                    l-1.5,1.1l-0.4,2l-0.6,1.6l0.6,2.9v1.8l-1.1,2l-1.8,1h-1.4l-0.6,0.1l-0.6,2.2l1.9,3.9l3.6,1.2l2.6-1.6c0,0,0.4-3.6,0.4-4.1
                                                                                                                                                                    s0.4-2,0.4-2l1.9-2l5-5.5c0,0,1.8-1.2,1.9-1.6s0.5-1.8,0.5-1.8l0.5-0.8l1.1-0.2h1.5H54c0,0,1.1-1.2,1.1-1.8s0-3.2,0-3.2l1.4-2.9
                                                                                                                                                                    l1-1.4l1.4-0.1l0.8,0.2l1.1,1.2l-1,2.1l-0.4,2.5l-0.9,3l-0.5,1l-0.8,1.6c0,0-3.4,0.2-3.9,0.2s-2,0-2,0s-1.6,0-1.8,0.4
                                                                                                                                                                    s-1,2.4-1,2.4l-0.9,1.4l-4.8,4.1l-2,2.9l-0.4,3.2l-0.8,1.9l-1.1,2l-3.4,2l-1.1,0.4l-0.6,0.5l0.5,11.4l3.9,1.2l1.6-1.1l1.8-2.1
                                                                                                                                                                    l0.4-1.2l0.1-4.5l1.6-1.5l1.6,0.2l-0.1,3.6l0.1,1.8v1.8l-1.6,0.9c0,0-1,0.8-1.2,1.1s-0.8,1.1-0.8,1.1l0.1,2.5c0,0,2.4,3,2.8,3
                                                                                                                                                                    s3,0.4,3.6,0.4s2.4,0,4,0s3.1-0.4,3.5-0.6c0.4-0.2,2-1.1,2.4-1.8s0.5-1.2,1.1-1.8s0.8-0.5,1.6-1s2-1.5,2-1.5l4.1-11.4
                                                                                                                                                                    c0,0,0.6-3.2,0.6-3.9s-0.5-3.1,0-4S68.8,233.1,69.6,232.1z M83.2,99.2c-0.1,0.4-0.4,1.7-1.1,1.4L83.2,99.2z M81.1,101
                                                                                                                                                                    c0,0.1-0.1,0.1-0.1,0.1h-0.5C80.7,101.1,80.9,101.1,81.1,101z M75,97.6c0.6,0.2,0.9,1.4,0.9,1.4l-1.6-1.9
                                                                                                                                                                    C74.5,97.4,74.8,97.6,75,97.6z M73.4,96.5l-0.7-0.3C73,96.2,73.2,96.3,73.4,96.5z M70.2,95.8l-1.4,1
                                                                                                                                                                    C68.9,96.8,69.9,95.8,70.2,95.8z M-45.9-5v0.4v0.1C-45.9-4.7-45.9-4.9-45.9-5z M-51.9,11.9l0.6,1.5
                                                                                                                                                                    C-51.6,12.7-51.9,11.9-51.9,11.9z M-50.4,14.9c-0.1,0-0.2-0.2-0.3-0.4L-50.4,14.9C-50.3,14.9-50.4,14.9-50.4,14.9z M-51.8,9.3
                                                                                                                                                                    c0,0,0.9-3.1,1.6-4.2L-51.8,9.3z M-49,2.7c0.4-0.9,0.6-1.7,0.6-1.7s0.2-0.3,0.5-0.7L-49,2.7z M-45.1,18.3c-0.4,0-2.6-0.2-2.6-0.2
                                                                                                                                                                    L-45.1,18.3l0.4-0.1C-44.9,18.2-45.1,18.3-45.1,18.3z M-37.3,19.9l0.3,0.3l0.1,0.3L-37.3,19.9z M-33.9,24.9l0.8,1.1v0.1
                                                                                                                                                                    L-33.9,24.9z M-30.4,39.9l0.2,0.5C-30.3,40.2-30.4,40-30.4,39.9c0.1-0.4,0.2-1.5,0.8-1.5L-30.4,39.9z M-27.5,40.6
                                                                                                                                                                    c0,0-0.6,1.4-1.1,1.4c-0.2,0-0.5-0.3-0.8-0.6l0.8,0.6l0.6-1.1l1.2-1l0.3-0.1C-26.9,40.2-27.5,40.6-27.5,40.6z M-27.8,34.6
                                                                                                                                                                    l-1.5-1.2l2.1,1.6l1.4,1.5L-27.8,34.6z M-17.9,43.6c-0.1-0.5-1.9-2.9-1.9-2.9l-3.2-0.5c0,0-0.8-0.5-1.4-0.8l2.5,0.8l2.1,0.5l1,1.1
                                                                                                                                                                    l1.2,2.2l1.5,2.9C-16,47-17.8,44.1-17.9,43.6z M-17,61c0-0.5-0.1-2.9-0.1-3.2l0.3,4C-16.9,61.4-17,61.1-17,61z M-16.6,56.5
                                                                                                                                                                    l2.2,1.2l-1.5-0.5l-0.9-0.5C-16.7,56.6-16.6,56.5-16.6,56.5z M-14.5,67.5l-1.5-3c0,0,0-0.1-0.1-0.3l1.7,2.5l2.1,1.8l0.4,0.6
                                                                                                                                                                    L-14.5,67.5z M-12.6,75.3l-1.2-1.8l1.6,1.2l0.6,0.5L-12.6,75.3L-12.6,75.3z M-9.4,75.3l1.1,0.1C-8.5,75.4-9,75.3-9.4,75.3z
                                                                                                                                                                    M-7.5,75.8l-0.1,0.8c0-0.1,0-0.1,0-0.1s-0.1-0.6-0.3-0.8L-7.5,75.8z M-7.8,89.9c0,0,0.4-1.1,0.8-1.1L-7.8,89.9z M-4.8,83.4
                                                                                                                                                                    c-0.5,0.1-1.5,0.6-2-0.1s-1.2-1-1.1-2.1c0-0.1,0-0.2,0-0.3l0.5,1.7L-6,83h1.5l0.5-0.5C-4,82.4-4.2,83.3-4.8,83.4z M-2.1,94.8
                                                                                                                                                                    l0.5,0.3C-1.8,95.1-1.9,95-2.1,94.8z M-2.5,85.4h0.9C-2,85.9-2.5,85.4-2.5,85.4z M-0.7,85.2l0.8-0.7l-0.3,0.9
                                                                                                                                                                    C-0.1,85.4-0.4,85.3-0.7,85.2z M0.1,98.5l0.3,0.2L0.5,99C0.4,98.9,0.2,98.7,0.1,98.5z M1.3,101.1l0.3,0.7
                                                                                                                                                                    C1.5,101.6,1.4,101.4,1.3,101.1z M1.5,81.4l-0.8-1.3l-1.5,0.4L-2.4,81l2.5-1.1l1.4,0.2l0.1,1.1L1.5,81.4z M3.5,106h1.6l0.4,0.4
                                                                                                                                                                    L3.5,106z M6.5,107.3l0.3,0.3l0.1,0.3L6.5,107.3z M12.5,115.6l0.2,0.2l0.2,0.4L12.5,115.6z M15.2,120.3c-0.1-0.1-0.3-0.4-0.4-0.8
                                                                                                                                                                    l0.1,0.3h0.5l0.8,0.1l0.1,0.6l1.5,1L15.2,120.3z M17,148.9l-0.3,0.3C16.7,149.1,16.9,148.9,17,148.9z M16.5,173.6
                                                                                                                                                                    c0,0-0.1-0.5-0.2-1.1l0.2,0.5l0.5,0.6C16.7,173.6,16.5,173.6,16.5,173.6z M16.2,170c0.1-0.1,0.4-0.2,0.8-0.3L16.2,170z
                                                                                                                                                                    M18.4,151.5l-2-1.2c0,0,0-0.1,0-0.2v0.2l2,1.1V151.5z M18.2,132.6c0-0.6,0.2-1.2,0.9-2.1L18.2,132.6l1,1l0,0
                                                                                                                                                                    C18.8,133.4,18.2,133,18.2,132.6z M19.6,146.8l-0.7,1.1c0.4-0.9,1.1-2.8,1.1-2.8L19.6,146.8z M20,134.9c0-0.1,0-0.2-0.1-0.3
                                                                                                                                                                    l0.1,0.1V134.9z M21.8,162.8l0.1,0.8C21.8,163.2,21.8,162.9,21.8,162.8z M26.8,121.1l-3,0.9l-1.1-0.2l3-0.5l1.3-0.2L26.8,121.1z
                                                                                                                                                                    M36.6,109.4l-0.6,1.9l-1.1,2.4c0.3-0.8,0.6-1.7,0.6-1.7s1-2.5,1.4-3s1.2-1.4,1.2-1.4L36.6,109.4z M39.9,103.9c0,0,1.2-1,2.1-1.2
                                                                                                                                                                    L39.9,103.9z M47.2,96.5l-0.5,1.4L46.2,99l-0.8,1.5v-0.9c0,0,1.1-1.4,1.2-1.8S47.2,96.5,47.2,96.5s0.9-0.6,1.4-0.6L47.2,96.5z
                                                                                                                                                                    M50.6,95.9h-0.8c0.2,0,0.6-0.1,1-0.2L50.6,95.9z M51.6,95.2l-0.1-0.3H52L51.6,95.2z M52.9,94.9H54l0.3,0.2L52.9,94.9z M54.8,95.5
                                                                                                                                                                    l0.7,0.5c0,0,1,1.9,1,3.6c-0.1-0.4-0.8-3-0.8-3L54.8,95.5z M56.8,105l-0.2-2.8c0,0.4,0.9,2.9,0.9,2.9s0.8,0.8,1.6,1.5L56.8,105z
                                                                                                                                                                    M66.5,98.1C66.6,98,66.8,98,67,98l-1.4,0.5C66,98.4,66.3,98.3,66.5,98.1z M66.4,101.1l-1.2-2.4l1,1.9l1.2,0.9L66.4,101.1z">
                                        </path>
                                        <path
                                            d="M107,108.8c0-0.4-1.1-1.1-1.8-1.8s-1.2-2.2-1.8-2.9s-1.4-1.6-2.4-2.4s-1.6-1.6-1.6-1.6l-0.9,1.1c0,0-1,1-2,1
                                                                                                                                                                    s-0.5,0.2-1.4,0.8s-0.6,0.8-1.1,1.6s-0.5,1.1-1.1,2.2s-0.6,0.9-1.2,1.6s-0.5,1.6-0.9,2.4s1.5,1,1.9,1.2s3.4,0.4,3.4,0.4h3
                                                                                                                                                                    c0,0,0.5-0.4,0.6-0.8s0.4-0.8,0.4-0.8s0.8-0.4,1.1-0.5s1.2,0.1,1.2,0.1l0.5,0.6l0.5,1.4c0,0,0,1.1,0,1.9s1.2,1.5,1.2,1.5
                                                                                                                                                                    s1.1,0.9,1.9,1.5s1.5,0.5,2,0.5s0.9-0.8,1.5-1.2s-0.2-1.1-0.2-1.5s-0.9-1.4-0.9-1.4s-0.8-1.2-1.5-2s-0.5-1.5-0.5-1.5
                                                                                                                                                                    S107,109.1,107,108.8z">
                                        </path>
                                        <path
                                            d="M110.1,122.9c-1.2-0.8-1-0.4-1.6-0.5s-1.6,0-2.1,0s-2.8-0.4-3.1-0.5s-0.6-0.5-1.2-0.5s-1,0.1-1.4,0.1s-1.1,0.4-1.8,0.4
                                                                                                                                                                    s-1.1-0.2-2.5-0.1s0,0-0.5,0.2s-0.4,0.5-1.1,1.4s-0.5,0.9-1.6,1.6l-1.8-0.8c0,0,0,0-0.9-0.2s0,0-0.4-0.2s-0.6,0-0.6,0l-1.6-0.4
                                                                                                                                                                    c0,0,0,0-0.9,0.5s-0.5,0.9-0.5,1.9s0.1,6.5-0.1,8.2s-0.4,0.8-0.8,1.2s1.2,1.5,1.8,1.6s1.2,0.4,1.9,0.8s1.1,0.6,1.6,0.9
                                                                                                                                                                    s0.1,0.6,0.1,1.1s-0.2,1.2-0.5,1.6s-0.1,1.6-0.1,2.1s0.6,0.9,0.9,1.4s1,1.8,1,1.8s0.5,0,0.9,0s0.9-0.4,1.2-0.6s2-1.8,2.2-2.8
                                                                                                                                                                    s0-1.9,0-3.6s0-2.5,0-2.5l-0.9-1.2V134c0,0,1.6-0.9,2-0.9s2.5,0.1,3.8,0.2s0.6-0.5,1.2-0.6s1.1-0.8,1.1-0.8s1.4,0.2,4.2,0.2
                                                                                                                                                                    s1.5-1.4,1.5-1.4l1.1-0.1c0,0,2.4-1.4,2.8-1.8s0-2.6,0-2.6s-0.1-0.6-2.1-2.8S111.4,123.6,110.1,122.9z">
                                        </path>
                                        <path
                                            d="M135,172.3c-0.4-0.8-0.5-1.5-0.5-1.5l-9-6.5l-1.1-5.9c0,0,0-1.1,0-1.5s0-1.1-0.5-1.2s-2.2-1-2.8-1.2s-2.6-1-2.6-1
                                                                                                                                                                    l-1.9-1.5l-2.1-0.9l-0.6-12.1l-0.8-1.8l-0.6-1.4c0,0-0.8-1.5-1.1-1.5s-2.9,0-4.1,0s-4,0-4.5,0s-2,0.5-2,0.5l-0.5,1.2l-1.1,2.5
                                                                                                                                                                    c0,0,0.5,0.9,0.5,1.6s-0.2,3.4-0.2,3.4l-0.8,1l-0.6,1.1L98,147l-0.2,3l-1.1,2v2.4l0.2,0.9l0.5,0.8c0,0,0.4,1.6,1.1,1.9
                                                                                                                                                                    s1.4,0.4,1.4,0.4c0.8,0.5,1.9,2.8,1.9,2.8s0.5,1,1,1s1.4,0,1.8,0.1s0.5-0.1,1.5,0.8s0,0.2,1,0.9s1.8,1.2,2.1,1.8s0.5,0.8,1.1,2
                                                                                                                                                                    s0.5,0,0.8,2.1s0.2,2.9,0.2,2.9l0.2,1.2c0,0,0.6,0,0.9,0.6s0.9,5.1,0.9,5.1s-1.2,0.2-1,2.1s0.1,19.5,0.1,19.5l-1.4,3.6l-0.9,1
                                                                                                                                                                    c-0.6,0.6-1.2,0.6-1.4,1s-0.2,1.5-0.4,1.9s-0.3,0.7-0.3,0.7s-0.4,0-0.6,0.9s-0.2,0-0.2,0.9s0.4,0.5,0,0.9s-0.4,0.4-0.4,0.4
                                                                                                                                                                    l-0.8,0.5l0.1,1.2v1.6l-0.5,0.4c0,0-0.2-0.8-0.2,0.6s0.5,2.9,0.5,2.9c0.5,1,0.5,1,0.5,1.9s0,2.4,0,2.4s-1,0.1-1.1,0.8
                                                                                                                                                                    s-0.8,1.1-0.9,1.5s-0.1,0.4-0.1,0.4l-1.1,0.8l-0.2,1.5c0,0-0.2,1.6-0.2,2.4s0.5,1.9,0.5,1.9s0.2,0,0.9,0s2,0.1,2,0.1l1.2-2.4
                                                                                                                                                                    l0.2-2l0.9-0.9c0,0,0.5-0.4,1-0.8s1.5-2.2,1.5-2.2s-0.1-0.5,0-0.9s0.4-0.9,0.4-0.9l0.9-0.1c0.8,0,0.8,0,0.8,0l0.2,1.1l0.1,1.1
                                                                                                                                                                    c0,0-0.2,0.4-0.5,0.8s-0.6,0.9-1.2,1.4s-0.4-0.4-0.6,0.5s-0.1,0.6-0.9,1.5s-0.8,0.9-0.8,0.9l-0.2,0.9c0,0-0.9,0.2-0.9,0.9
                                                                                                                                                                    s0,1.6,0,1.6s-0.4,0.5-0.6,1.4s-1.1,1-0.5,1.8s1.8,1.8,3.2,1.4s2.2-1.2,2.2-1.2l1.1-0.4c0,0,0.8-1.5,0.9-1.9s0.2-0.6,0.4-1.5
                                                                                                                                                                    s0.2-2.2,0.2-2.2s1-0.5,1-0.9s0-0.4,0-0.4s1.1-0.1,1.5-0.4s-0.5,0.4,0.4-0.2s-1.1-0.1,0.9-0.6s1.1-0.2,2-0.5s1.4-0.8,1.9-0.8
                                                                                                                                                                    s1.1-1.5,1.1-1.5l0.9-1.2v-1.6c0,0,0.2-0.5,0.8-0.9s0.9-1.1,1.8-1.5s1.6-0.6,2.2-1.5s0.1-0.4,0.6-1.9s0.4-1.6,0.6-2.8
                                                                                                                                                                    s0.5-2.9,0.5-2.9l2.8-13.8l2.2-22.6c0,0-1.2-1.2-1.2-1.6S135.4,173,135,172.3z">
                                        </path>
                                        <path
                                            d="M153.1,184c0-0.2,0-0.3-0.1-0.4c0.1,0.1,0.3,0.2,0.6,0.2c0.8-0.1,0.6,0,1.4-0.1s0.2,0.6,0.8-0.1s-0.2-0.1,0.5-0.8
                                                                                                                                                                    s1.2-0.6,1.2-1.8s0.1-1.4,0-2s-0.1-2.2-0.5-2.2s-1.6-0.8-1.6-0.8l-1-0.1c0,0,0,0.5-0.4,0.8s-1.2,0.2-1.2,0.9s0.2-0.4,0.2,1.6
                                                                                                                                                                    s-0.1,3.1-0.1,3.5c0,0.2,0,0.4,0.1,0.7c-0.2-0.2-0.5-0.3-1.1-0.6c-0.9-0.4-0.9-1-0.9-1l-1.2,0.4c0,0-0.2,0.5-0.6,0.6
                                                                                                                                                                    s-1.6,0.9-1.6,0.9l1,1.9c0,0,0.5,0.5,0.9,0.8s0.8,0.4,0.8,0.4l1.2-0.4c0,0,0.8-0.2,1.1-0.2S153.1,184.9,153.1,184z">
                                        </path>
                                        <path
                                            d="M149.5,175.3c-0.5,0.4-0.4,0.9-0.5,1.2s0,1.9,0,1.9l1.1,1.2l1.4-0.1v-0.9v-2l0.2-0.5v-1.8l0.9,0.5l0.1-0.6l-0.5-1
                                                                                                                                                                    c0,0-0.6,0-1.5,0.1s0,0-0.5,0.5S150,174.9,149.5,175.3z">
                                        </path>
                                        <path
                                            d="M147.5,201.5c1.2-1.2,1-1.4,1.6-1.9s0.6-9,0.6-9l-0.4-0.8c0,0-0.1-0.5-1-0.5s-1.9-0.1-1.9-0.1l-0.2,0.5l-0.4,1.2l1.1,1.8
                                                                                                                                                                    c0,0-0.1,0.8-0.5,1s-0.8-0.4-0.8,0.9s-0.1,2.1-0.1,2.5s-0.2,2.1-0.2,2.1s0.2-0.4-0.4,1.1s-0.5,2-1,2.4s-1,0.5-1.2,1.1
                                                                                                                                                                    s-0.4,1.5-0.4,1.5s0.9,0.6,1.6,0.6s2.9-3.2,2.9-3.2S146.2,202.8,147.5,201.5z">
                                        </path>
                                        <path
                                            d="M150.4,205.8c0,0,0-2,0-2.5s-0.2-0.9-0.2-0.9s-0.6-0.6-1.6-0.1s0,0-0.6,0.6s0,0.8-0.4,1.6s0,2.6-0.2,3.6s1.1,2.9,1.1,2.9
                                                                                                                                                                    l0.5,0.1l0.6-0.8c0,0,0-0.6,0.2-1.9s0,0,0.5-0.6s0.4-0.8,0.4-0.8L150.4,205.8z">
                                        </path>
                                        <path
                                            d="M143.9,209.1l-1.4,0.5c0,0,0,1.4,0,1.8s0,1.5-0.2,3.1s0,0-1.1,0.5s0,0-0.5,0.2s-0.2,0.9-0.2,0.9l0.4,1.5v1.9l1.1,1.8h1.6
                                                                                                                                                                    l1.1-0.4l1-2.9l-0.4-8.9L143.9,209.1L143.9,209.1z">
                                        </path>
                                        <path
                                            d="M107.2,176.6c0,0.8-0.1,2.1,0.1,2.6s0.2-0.1,0.2,0.5s0.5,1.2,0.5,1.2s0.2,1.1,0.9-0.2s0.6-1.4,0.6-1.4l1-1.1
                                                                                                                                                                    c0,0,0.2-1.2,0-2.1s-0.2-1.5-0.2-1.5l-0.8-0.1c0,0-0.4-0.8-0.4-1.1s-1-0.8-1-0.8l-0.5,2.4l0.1,0.6
                                                                                                                                                                    C107.9,175.6,107.2,175.9,107.2,176.6z">
                                        </path>
                                        <path
                                            d="M105,177.5l-0.8-0.8l-1.2,0.6l-0.2,2.1l1.4,2.2l1,1l0.2,1.1l0.8,1.1c0,0,0.5,3.1,0.5,3.5s0.1,0.9,0.1,0.9l-0.1,4.6l0.5,2
                                                                                                                                                                    l1.1-0.1c0,0-0.5-6.9-0.4-7.9s0.8-0.8,0.8-0.8l0.6,1.1l0.8,0.5c0,0,0-0.6,0.1-2.8s-0.1-0.6-0.9-1.6s0,0-0.5-0.2s-0.5-0.5-1-1
                                                                                                                                                                    s-1-1.1-1.6-1.5s-0.4-1.6-0.4-1.6L105,177.5z">
                                        </path>
                                        <path
                                            d="M102.1,215.4c0,0,0,0-0.8,0s-0.6,0.4-1,0.8s-0.2,1.8-0.4,2.5s0.9,1.6,1.4,1.9s0.1,1,0.1,1l0.6,1.2l0.9-0.1l-0.1-2.5
                                                                                                                                                                    l0.2-3.8L102.1,215.4z">
                                        </path>
                                        <path
                                            d="M98.8,217.8c0,0,0,0-0.8,0.6s-0.6,0.8-1.9,1.6s-1.5,1.5-1.5,1.5s-2,2.5-3.6,2.5s-0.9,0.2-1.1,2.6s-0.1,1.1-0.8,1.9
                                                                                                                                                                    s-0.4,1.2-0.1,2s0,0,0.5-0.2s0.9-0.5,0.9-0.5s0.9,0,1.5,0s0.4-0.8,0.4-1.1s1.4-0.6,1.4-0.6s0.6,0.1,1,0.2s0.2,0.6,0.1,1.5
                                                                                                                                                                    s-0.1,0.8-0.9,1.5s-1.4,0.8-2.1,1.1s-0.9,2.8-0.9,3.1s0.2,0.8,0.8,1.2s1.9,0.1,2.2,0.1s1.8-0.4,2.6-0.9s1.1-2.4,1.6-3.2
                                                                                                                                                                    s0.8-2.9,0.9-3.4s0.1-2.6,0.1-3.6s-0.4-2.5-0.4-3s0.5-4.9,0.5-4.9L98.8,217.8z">
                                        </path>
                                        <path
                                            d="M103.1,241.3c-0.8-0.6-0.2,0.2-0.8-0.6s-0.4-0.2-0.5-0.9s-1.2-1.1-1.2-1.1s-1.1,3-1.5,3s-0.9,0.4-1.6,0.4s-1.5,0-2,0
                                                                                                                                                                    s-1.1,0-1.1,0s-1-0.5-1.2,0.6s-0.5,2.6-0.5,3s0,0.4,0,1.9s0,2.5,0,3s0.2,0.9-0.1,1.6s-1.1,1-1.1,1.5s-0.5,1.4,0.1,1.4
                                                                                                                                                                    s1.2,1.2,2.5,0s1.8-1.9,1.9-2.2s0.4-0.1,0.9-1.4s0.4-1.1,1.1-2.1s0-1.1,1.2-1.4s1.4,0.5,1.8-0.2s0.8-1.1,0.8-1.5s-0.2-0.5,0.1-1.1
                                                                                                                                                                    s1-1.2,1-1.2s1.5-0.9,1.2-1.4S103.9,241.9,103.1,241.3z">
                                        </path>
                                        <path
                                            d="M113.5,239.1c-0.2,0.4-0.9,0.9-0.9,0.9s0.2,0.5-0.1,1s-1.2,0.9-1.2,0.9h-0.8c0,0-0.6-1.2-1.8,0s-0.4,0.5-1.1,1.2
                                                                                                                                                                    s-0.4,0.2-0.8,0.8s-0.8,2.4-0.8,2.4l0.5,1c0,0-0.2,2.9,0.9,1.6s2.4-3.6,2.4-3.6s-0.5-0.8,0.4-1s-0.6,0.2,0.9-0.2s0.9-0.8,2.1-0.8
                                                                                                                                                                    s2.5-2,2.5-2l-0.2-1.9C115.5,239.4,113.8,238.8,113.5,239.1z">
                                        </path>
                                        <path
                                            d="M121,246.6c0,0,0.4-0.9-0.5-0.9s-0.8,0.6-0.8,0.6l-0.2,1.1c0,0-0.8,0.6-0.4,0.9s1,0.6,1,0.6s-0.4,0.5,0,0.6s0.5,0.9,1,0.2
                                                                                                                                                                    s0.5-0.6,0.5-0.6l1.5-0.5l-0.4-2L121,246.6z">
                                        </path>
                                        <path
                                            d="M89,259.3l-1.6,0.2h-0.8l-0.4,0.5l1.1,0.9c0,0-0.4,0.4,1,0.8s1,1.1,1.9,0.2s0.9-0.1,0.9-0.9s0-1.2,0-1.2s-0.6-0.5-1-0.5
                                                                                                                                                                    S89,259.3,89,259.3z">
                                        </path>
                                        <path
                                            d="M85.5,255.6h-1.2l-1,0.5l-0.6,1c0,0-1.1,0.5-1.5,0.5s-1.8,0.2-1.8,0.2s-0.1-0.1,0,0.5s-1.4,0.9,0.9,1.1s1.2,0.4,2.2,0.2
                                                                                                                                                                    s1.1,0.1,1.5-0.5s0.8-1.1,0.8-1.1s0.1,0.9,0.8-0.2s0.9-1.8,0.9-1.8L85.5,255.6z">
                                        </path>
                                        <path
                                            d="M81.9,249.3c0.4,0,1.4,0.1,1.8-0.5s0.5-1.2,1.4-2.2s1.4-1.9,1.5-2.2s0-1.6,0-1.6s-0.1-0.6,1-1s1.9,0.1,1.9-1
                                                                                                                                                                    s0.4-2.2,0-2.9s-0.8-0.8-1-1.5s-0.6-1.2-1-1.6s-2.1-2.1-2.1-2.1s-1.2-0.1-1.2-0.5s-0.5-1-0.5-1s-0.1-0.6-0.9-0.6s-2.1,0-2.1,0
                                                                                                                                                                    l-1.8,1.4l0.1,1.2c0,0-1,1.4-0.5,1.8s2,1.5,2.1,1.9s0.4,0,0.4,1.5s0.5,1.1,0,2.1s-0.2,0.8-1.2,1.9s-0.2,0-1,1.1s-1.1,1.8-1.1,2.6
                                                                                                                                                                    s-0.4,2,0.2,2.5s1.1,0.9,1.8,0.9S81.5,249.3,81.9,249.3z">
                                        </path>
                                        <path
                                            d="M77.9,232.8c0.5-1.4,0.8-1.5,0.5-2s-0.6-1-0.6-1l-1.1-0.5l-1.5,1.4c0,0-0.5-0.2-0.6,0.8s-0.4,1-0.4,1.5s-0.2,0.5-0.6,0.9
                                                                                                                                                                    s-0.8,1.1-0.8,1.1l-1,0.8l-0.9,0.8c0,0-0.5,0.1-0.5,0.6s0,0.8,0.9,1s1.1,0.1,1.5-0.2s1.1-1.1,1.6-1.5s-0.5,0.6,0.5-0.4
                                                                                                                                                                    s0.1-0.1,1-1s1.2-0.9,1.6-1.5S77.4,234.1,77.9,232.8z">
                                        </path>
                                        <path
                                            d="M77.4,238.3l0.8-0.6l-1.2-1c-0.6,0.8-2.6,2.8-2.8,3.1s-0.4,0.9-0.6,1.2s-0.2,0.4-1,1.1s-1.1,1.2-1.1,1.2
                                                                                                                                                                    c-1,0.8-1.8,1-1.8,1.5s0.4,1.1-0.5,1.9s-0.6,1.6-0.6,1.6s0,0.6,0,1.6s-0.2,1.8-0.2,2.1s-0.2,0.5-0.2,1.2s0,1.5,0,2s-0.1,2,0.4,2
                                                                                                                                                                    s0.6,0.8,1.6-0.1s1.2-1.1,1.9-2s0.8,0.1,1-1.5s0.2-3,0.2-3.6s-0.2-1.4,0-1.8s-0.1-1,0.9-1.8s0.9-0.6,1.4-1.8s-0.1-0.9,0.6-1.8
                                                                                                                                                                    s0.9-1.5,0.9-1.5l-0.2-2.2l0.1-0.8L77.4,238.3z">
                                        </path>
                                        <path
                                            d="M93.5,99.6c0.1,0,0.2,0,0.2,0l0,0c0,0,0.2,0,0.4,0c0.9,0,1.5-0.4,1.5-0.4l0.6-0.8l-0.1-1.8l-0.8-0.4l-0.2,0.9
                                                                                                                                                                    c0,0-0.5,0.2-0.9,0.5s-0.4,0.2-0.4,0.2s-0.9,0.1-0.9,0.5S92.9,99.6,93.5,99.6z">
                                        </path>
                                    </g>
                                    <path class="st1"
                                        d="M-71.5,268.2l5.2-18.2c0,0,8.7-11.3,9.3-13.3s16-8.7,16-8.7s-5.3-6.7-9.3-8.7s19.3-30,19.3-30l4.7,3.3
                                                                                                                                                                c0,0,5.3,8.7,6.7,4.7c1.3-4,0.7-3.3,0.7-10s7.3-1.3,9.3-1.3s3.3,8,3.3,11.3s0,17.3-0.7,23.3s-4.7,12.7-8.7,18s2.7,0.7,6,0
                                                                                                                                                                s2.7-4,6-4.7s0,4.7,0,4.7s-4.7,13.3-2.8,13.9c1.9,0.6,12.1-1.9,16.8-3.2s2-13.3,2-13.3l-8.7-18.7h6.7L11,212l0.7-6.7c0,0,0,0,0-2
                                                                                                                                                                s0.7-6.7,0.7-6.7s-2-10-2-12.7s8.7-8.7,8.7-8.7l13.6-9.9l6.2,0.5L31.7,178l-7.9,14.5v6.7l4,7.3l3.3-1.3c0,0,2.7,0,6,0s6,5.9,6,5.9
                                                                                                                                                                l7.4,0.8l3.3-2c0,0,3.3-5.3,4.7-8c1.3-2.7,8-2,8-2l8,2.7l-3.3,8l-6.7,5.3l-2.7,4.7c0,0-2,7.3-5.3,8.7c-3.3,1.3-16,11.3-19.3,10.4
                                                                                                                                                                s4.6,8.3,4.6,8.3l3.7-4.7l1-6.7l5.3,5.3l-2,12l7.3-2c0,0,8.7-10,10.7-12s4-15.3,4-15.3l6.7-11.3c0,0,0.7-6,1.4-8.9
                                                                                                                                                                c0.7-2.9,3.3-11.1,3.3-11.1l0.7,24.7c0,0,5.3-6,6-9.3s4-2,4-2l2-2.7c0,0,4-4.7,6.7-8s1.3-10.7,1.3-10.7l-2.7-7.3c0,0,0-8-0.7-14.7
                                                                                                                                                                s-9.8-5.9-9.8-5.9s0.4,6.5-1.5,8s-2.8,4.5-5.4,3.9c-2.7-0.7-1.3-4-1.3-4s0,0,0-2.7s0-3.3,0-6s1.3-3.3,2-5.3s5.3-2.7,5.3-2.7v-6
                                                                                                                                                                c0,0-2-1.5-5-4.8s-2.1-2-5.3-2.1s-5-3-5-3l4.6-0.1c0,0,0.7-5.9,0.7-7.9s4-3.3,4-3.3s2-4.7,2.7-6.7s3.3-4,3.3-4l0.4-8
                                                                                                                                                                c0,0-2.2-5.2-2.1-7.1s-3-2.9-3-2.9s3.3-5.3,3.3-8s6-2,10-2s5.5-6.5,5.5-6.5l-4.2-8.9c0,0-6.7,0-12.7,0s-1.3-5.5-1.3-5.5
                                                                                                                                                                S77,59.3,73,55.3S64.3,52,64.3,52s-4,0.7-6.7,0.7c-2.7,0-15.3-5.3-15.3-5.3L54.1,40l-5.6-1.6L33.7,25.6L19,24.7l-6.4-6l-2.2-6
                                                                                                                                                                c0,0,1.8-4.5-2.4-10C5.8-0.2,3.5,3,4.8-0.7C1.8-1.5-5.6-3.3-10-4.8s-3.5,1.6-7.4,3S-24.3-2.3-29.3-4S-33-3.2-37-5.2s-4-4-5.5-5.1
                                                                                                                                                                s-3.4-4.4-7.2-6.5s-6.6,0.3-12.2-0.1c-5.6-0.4-8.8-1.4-11.9-4.2c-3.1-2.9-3.2,0-4.6-3s-4.6-5.7-4.6-5.7s-1.3-8-2.8-11.9
                                                                                                                                                                s-8.4-1.4-8.4-1.4s-7.1,3-8.8,2.8s-8.5-2.5-8.5-2.5l-7.8-8.6l4.3-1.1l4,1.9l4.7,3.3l6-3.3l4.7-2l3.3-0.7c0,0,9.3,2.7,12,2.7
                                                                                                                                                                s1.3,4.7,1.3,6.7s4.7,5.3,4.7,5.3v8.9l8.6,5.1c0,0,3.3,0.7,5.3,0.7s6,0.7,8.7,0.7s9.3,4,9.3,4l8.4,7.8l15.6,2.9l7.3-4
                                                                                                                                                                c0,0-0.7-5.3-0.7-11.3s-0.7-8-2.7-14s7.3-2.7,7.3-2.7l2-8.7c0,0-4.7-10.7-6-13.3s7.3-8,7.3-8l1.3-8L-2.7-90l-3.2-6.5l-4-6
                                                                                                                                                                c0,0-1.4-11.1,0.6-13.2s-3.3-10.8-4.6-14.1s-4-10.7-4.7-12.7s-2.7-9.3-2.7-12.7c0-3.3,3.5-7.1,3.5-7.1l-0.1-4.9l1.3-8.7l3.3-12.7
                                                                                                                                                                l-2.7-6.7l4.7-16l-10-5.3c0,0-8-22-10.7-29.3s11.3-6.7,11.3-6.7l12,21.3L-4-254l2-14l2.7-14.7l8-4.7l9.3,0.9l0.7,8L13-267l1.8,16
                                                                                                                                                                l-7.3,34.3L8.7-204L6-197.3c0,0,2.3,11.1,0.5,12.8s-3.2,7.2-3.2,7.2S0-166-0.7-164s4.7,4,4.7,4s-1.3,8.7-1.3,10.7s0,6.7,0,6.7
                                                                                                                                                                s2.7,2,4.7,2.7s3.3,6.7,3.3,9.3S10-117.9,10-115.3c0,2.7,9.3,12.7,9.3,12.7s0.7,5.3-0.7,10s-2,9.3-5.3,15.3s0.7,4,0.7,4s4,7.3,4,10
                                                                                                                                                                S9.3-54,9.3-54s0.7,4,0.7,6.7s0,8,0,8l-7.3,8L9.4-8l41.3,32l6.8,13.6c0,0,16.5,6.4,19.2,7.1s14.7,0,17.3,0c2.7,0,0-6,0-6
                                                                                                                                                                s-2.7-5.3-5.3-6.7c-2.7-1.3,2.7-6,2.7-6l7.3-8.7l10.7-10.7l2.7-5.3l2.7-4l3.3-3.3c0,0,0-2.7,0-6s3.3-5.3,5.3-8s3.3,1.3,5.3,1.3
                                                                                                                                                                s0-4,1.3-6s5.3-2.7,5.3-2.7l2.2,13.9l3.2-7.9c0,0,0-6,0-10.7s9.3-8.7,11.3-13.2s-5-0.8-7,1.5s-3.7-6.3-3.7-6.3s4-4,5.3-6
                                                                                                                                                                s2-6.7,2-6.7s8.7,0,11.3,0c2.7,0,4.7,1.3,4.7,1.3s4.1,1.2,7-1.1s3.2,3.8,3.2,3.8s-12.5,3.6-16,5.4s5.1,4.6,6.5,7.3
                                                                                                                                                                c1.3,2.7,0,4-3.3,11.3s-4,8.7-4,10.7s-8,16.7-8,16.7s-6.7,4-14.7,8s-2.7,4-4,7.3s-1.3,3.3-3.3,10s0,3.3-0.7,7.3s-1.3,4-8.7,13.6
                                                                                                                                                                s-3.4,1.2-9.2,1.5s-1.4,8.9-1.4,8.9l3.1,11.9L124,83.2l4.7,26c0,0,1.3,16.7,2,18.7s9.3,6.7,12.7,8c3.3,1.3,12-1.3,14.7-1.3
                                                                                                                                                                s5.3,0,16,0s12.7-4.7,16-6s9.3-11.3,11.3-14s8-0.7,9.5,0.8s1.6,4.2,1.6,4.2l0.8,14.3c0,0,10.7,2,14,2.7S300,66.3,300,66.3l33,85
                                                                                                                                                                l-16,28l-42-26l-27-13l-41-37l-55,23l-14,21.8l8,7l-29.8,61.2L-71.5,268.2z">
                                    </path>
                                    <path class="st2"
                                        d="M316.5,142.1c-0.9-0.4-0.5-0.2-1.2-0.9s-0.6-1-1.6-2.2s-1.4-0.6-1.4-0.6s-1.4,0-2.1-0.1s-0.5-0.8-0.6-1.1
                                                                                                                                                                s-0.6-1.7-0.6-1.7l0.9-0.2c0,0,0.9-0.9,1.2-1.2c0.4-0.4,0.9-0.4,0.9-0.4l0.9-0.9l0.5-0.9l-1.6-1c0,0,0,0-0.8-1.1
                                                                                                                                                                c-0.7-1.1,0-0.9,0-1.2s-0.5-0.9-0.5-0.9l-0.8,1c0,0-0.1,1.2-0.2,1.6s-1.4-0.8-1.4-0.8s0,0-0.4,0s-0.9,0.1-1.9,0s0,0-1-0.6
                                                                                                                                                                s-0.2-0.9-0.2-1.4s0.4-0.9,0.4-1.4s0.8-0.1,1.2-0.2s0.9-1.9,0.9-1.9s-0.6-0.1-1.1-0.1s-0.2-1.2-0.6-1.5s0-1.2,0-1.2l-0.1-2.8
                                                                                                                                                                c0,0-0.5-1-0.9-1s-0.2-2.2-0.2-2.2l-0.6-2.5c0,0,0,0-1.2-0.1s-1.2-0.8-1.6-1.8s0,0,0.1-0.4s0.5-0.2,1.1-0.5s0.1-0.6,0-3.1
                                                                                                                                                                s-0.8,0-1.6-0.1s-1.1-0.1-1.6-0.5s-0.4-1.1-0.4-1.9s0.2-1.2,0.8-2.1s1.5-0.1,2.8-0.8s1.1-0.8,1.2-1.1s-0.8-1.2-1.4-1.6
                                                                                                                                                                s-1.4-0.1-1.4-0.1s0-1.1,0-2.1s-0.9-0.4-1.8,0.1s0,0-0.1,0.6s0.2,0.9,0.2,1.6s-0.8,2.2-2.1,2.5s-0.1-1.4-0.1-1.8s-0.6-1.8-0.6-1.8
                                                                                                                                                                s-0.6,0.1-1.4,0.5s-0.8,0.9-1.2,1.6s0,1.2,0,1.6s0.4,1.1,0.6,1.5s1.8,1.1,1.8,1.1l0.8,0.4l-0.2,1c0,0-0.1,1-0.1,1.5s1,1.9,1,1.9
                                                                                                                                                                s-0.4,1.4-0.8,1.2s-0.6-0.9-1.2-1.1s-0.4-1.4-1.1-1.8s-0.6,0.9-0.6,0.9l-0.6,1.1l0.9,1.9l1.6,1.4c0,0,0,0.8,0,1.4s-0.5,0.8-0.5,0.8
                                                                                                                                                                l0.1,1.1l0.5,1.9l1.1,1.1c0,0,0,0.8,0,1.6s-0.4,1.1-0.4,1.6s1,0.1,1,0.1s0.2,0.8,0.5,1.4s0.8,0.1,0.8,0.1s0,0.6,0,1s0.4,0.9,0.4,1.2
                                                                                                                                                                s0.8,0.1,0.8,0.1s0.9,0,1.6,0s0.2,1,0.2,1l-0.1,0.8c0,0,0,1,0,2s0.9,0,1.2,0s1.2-0.4,1.2-0.4l0.5,1.2c0,0,0.2,1.1,0.1,2.4
                                                                                                                                                                s-0.6,0-1.5,0s-0.4,0.9-0.4,0.9s1.1,0.9,1.5,1.2s0.9,0.9,0.9,0.9s0,0.8,0,1.2s-0.2,0.5-1.1,1.4s-0.5,0.1-1.8,0.1s-1.2-0.1-1.8-0.4
                                                                                                                                                                s-0.2-0.6-0.2-0.6l-0.8-0.9l-0.8,0.1v0.5v1.2l0.4,1.4l1.6,1l0.5,0.6l0.9,1l-0.4,1.4c0,0,0,0-1.1,0s-0.6-0.6-1.2-0.9
                                                                                                                                                                s-0.5-0.6-0.5-0.6l-0.4-1.4v-0.4c0,0-1-1.2-1.8-1.5s-0.2-0.8-0.9-1.2s-0.9-0.5-0.9-0.5s-0.8-2.1-1.1-2.8s-0.8-1.5-0.8-1.5
                                                                                                                                                                s0,0-0.2-0.4s0,0-1-0.4s0,0-0.9-0.5s-0.1-0.6-0.4-1s0.6-0.8,0.6-0.8l0.5-1v-1.8c0,0-0.6,0-1.1,0s-1.8-1.4-1.8-1.4s0,0-0.8-0.2
                                                                                                                                                                s-0.6-1-0.6-1s0-1.1-0.1-1.8s-0.1-1.4-0.5-2.1s0,0-0.5,0s-1.5-0.6-1.9-0.9s0-1-0.2-1.4s0-0.6,0-0.6l-0.8-1.1c0,0-0.5-1.4-0.6-1.9
                                                                                                                                                                s-0.5-1.1-0.5-1.1l-0.5-1c0,0-0.1-0.8-0.9-0.9s0-0.6,0-1s0.1-0.6,0.1-1.1s-0.2-0.8-0.6-1.2s-1.2-1.2-1.2-1.2l-0.8-0.5v-2v-1.9V101
                                                                                                                                                                l-0.5-0.9l-1,0.1c0,0,0,0-0.6,0.4s-0.4,1.2-0.4,1.2l0.6,1v1.4l0.4,1.6l0.9,2.4c0,0,0,2.6,0,3.1s0.4,0.8,0.9,1.4s1.4,1.1,1.4,1.1
                                                                                                                                                                l1,0.5c0,0,0,2.6,0,3.9s0.5,0.1,0.9,0.1s0.2,1.4,0.2,1.4v2.5c0,0,0.1,0.8,0.1,1.1s0.9,0,1.4,0s0.6,0.6,0.6,0.6s-0.1,1.1-0.1,1.5
                                                                                                                                                                s0.1,1,0.1,1l1.1,0.6l1,0.5l-0.1,0.5l-0.2,1.6c0,0-0.2,1.1-0.4,1.5s0.1,0.9,0.5,1.2s0.8,0.9,0.8,0.9s0.9-0.2,1.2-0.2s1.4,0,1.4,0
                                                                                                                                                                l0.5,1.1l0.5,0.6l0.9,0.6v0.6l-0.2,1.5l-0.1,2.4h0.6h0.8c0,0,1.1,0.2,1.6,0.2s1.1,0.6,1.1,0.6l0.2,0.9l1,0.2v0.9c0,0-0.5,0-1.4-0.2
                                                                                                                                                                s-1.4,0-1.8,0s-0.5,0.9-0.5,1.2s0.2,1.6,0.2,1.6h0.9h0.8l1.2-0.9l0.8,0.5v0.9l-0.6,0.9l-0.9,0.5l-0.2,1.8l1.1,0.5l0.5-0.4l1.5,0.5
                                                                                                                                                                l-0.5,1l-1.1,1.5c0,0-1.2,0.4-2,0.4s-0.8-1-0.8-1l-0.4-1.6h-0.8c0,0-0.8,0.2-1.1,0.6s0,0.8,0,1.2s0.4,0.6,0.4,0.6l0.5,1.5l1.6,0.1
                                                                                                                                                                l2.1,1c0,0,0.5,1.4,0.5,1.8s-0.5,2-0.5,2l0.8,1.5l3.1,2.1l2.2,0.9l-0.4,1l-1.9,0.8l-0.4,1.6l1.1,1.4v1.1c0,0,0.4,1.2,0.8,1.4
                                                                                                                                                                s0.8-0.4,0.8-0.4l0.9-1.1l0.9-1.2c0,0-0.2-1.2,0.1-2s0,0,0.5,0s0.9,0,2.8,0.1s1,0.1,1.6,0.1s0.6,0.1,1.1,0.1s0.5,0.1,0.5,0.1
                                                                                                                                                                l0.1,0.5c0,0,0.4,1,0.7,1.4c0.4,0.4,0,0.9,0,0.9s1.5,0,2-0.2s1.8-0.5,1.8-0.5l1-0.5l0.2-1.9l-1.1-1.6l-1.8-0.9v-0.5l-2-0.3
                                                                                                                                                                c0,0,0,0-0.1-0.5s0.1-0.8,0.1-0.8l-0.1-1.1c0,0,0,0-0.4,0s-1,0-1.4,0.1s0,1.4,0,2.1s-0.1,1.6-0.5,2.1s-0.8,0.4-1.6,0.4s-0.9,0-2-0.1
                                                                                                                                                                s-0.6-0.4-0.9-1.1s0.1-0.8,0.1-0.8s0,0,0.8,0s1.2,0.2,2,0.2s0.5,0,0.9-0.1s0-0.8,0-0.8s-0.1-0.5-0.6-1.2s-1.5-0.1-1.5-0.1l-1.6-0.5
                                                                                                                                                                l0.9-0.6l0.4-0.9l-0.2-1.4l-0.5-0.8c0,0,0,0-0.5,0s-0.5,0.2-0.5,0.6s-0.6,1.6-0.6,1.6L303,160c0,0-0.5,0.4-1.2,0.4s-0.5,0-1.1-0.1
                                                                                                                                                                s-1-1.1-0.6-2.4s0,0,0.6-0.4s0.9-0.8,1.1-1.1s0.8-1.5,0.8-1.5v-1.4l-0.2-1c0,0,0.2-1.2,0.4-1.6s0.9-0.8,0.9-0.8s0,0,0-0.4
                                                                                                                                                                s0-1.1,0-1.1l-0.5-0.2l-1.6-0.9l0.2-0.9l0.5-0.8l1.2,0.1c0,0,2,1.4,2.2,1.8s0.2,0.9,0.2,0.9s0,0.8,0.5,1.2s0,0,0.6,0
                                                                                                                                                                s1.5-0.1,2.4-0.8s0,0,0-0.5s0-0.8-0.2-1.1s-0.5-0.4-0.9-0.4s-1.6-1.9-1.9-2.2s-0.9-0.9-1.9-1.5s-0.2-0.5-0.8-0.9s0.2-1.4,0.2-1.4
                                                                                                                                                                l0.4-0.8c0,0,1.2,0,1.8-0.1s1.2,0,1.8,0s0.9,0.4,0.9,0.4l0.6,1.1c0,0,2.2,0,2.6,0s0.8,0.1,1.2,0.2s1.4,0.6,1.8,0.8s0,0.8,0,1.2
                                                                                                                                                                s0.1,1.4,0.1,1.4l1,1.1l0.5,0.6l1.6-0.9l1.1-0.2c0,0,0-1.1,0-1.6s0-1,0-1l-0.6-0.5C317.8,142.6,317.4,142.5,316.5,142.1z">
                                    </path>
                                </g>
                                <g id="rangpur">
                                    <a href="{{ route('subcategory-page', 'রংপুর') }}" xlink:href="">
                                        <path class="st3"
                                            d="M-152-370.6c0,0,0.5,2-2.2,3.8l-1.6,1l0.2,7.5c0,0-3.2,2.5-3.2,3.4l0.2,5c0,0,0.9,1.9,1.6,1.9l1.6-0.9l0.4-3.6
                                                                                                                                                                l1.8-1.4h1l1,0.9l1.1,1.1l2,0.2l4.1,0.1l1.2,0.2l0.9,0.9l1,0.2l0.5,0.5l0.4,1.5v1v1.4v1.4l0.5,1.5c0,0,0.4,1,0.9,1.2
                                                                                                                                                                c0.5,0.2,1.5,1.2,1.5,1.2l0.8,0.4v0.9v1.6l-0.4,0.6c0,0-0.4,0.4-1.2,0.5c-0.8,0.1-3,0.4-3,0.4s-1,0-1.4,0c-0.4,0-1.4-0.9-1.4-0.9
                                                                                                                                                                s0.2-0.5-0.1-0.5s-0.9-0.2-0.9-0.2l-0.8-0.1c0,0-0.5-0.1-0.6,0.6c-0.1,0.7-0.1,0.8-0.1,0.8l-1.2,0.8v0.8v0.4l-0.8,0.5
                                                                                                                                                                c0,0-0.8,0.5-1.2,0.6c-0.4,0.1-0.9,0.1-1.2,0.2c-0.3,0.1-0.9,0.1-0.9,0.1l-3.4,3l-0.6,0.8l-1.5,1.3v0.8l-0.1,0.6
                                                                                                                                                                c0,0-0.2,1.1-0.2,1.5s0.8,5.4,0.8,5.4l-0.9,0.4l-0.2,1.2l-1.4,0.4l-0.6,0.4c0,0-0.2,0.4-0.8,0.4c-0.6,0-1.4,0.1-1.9,0.2
                                                                                                                                                                c-0.5,0.1-1.3,0.2-1.3,0.2s-0.4,0.2-0.9,0.2s-3,0.4-3.4,0.4c-0.4,0-0.8,0-1.5,0c-0.7,0-1.4,0-1.4,0l-0.6,1.5v1.4l-0.4,0.6l-0.5,1
                                                                                                                                                                c0,0-0.1,0.4-0.5,0.4c-0.4,0-0.6,0-1.2,0s-1.2,0-1.8,0c-0.6,0-0.5,0-0.5,0l-1.1,0.5v0.6c0,0-0.2,0.2-0.4,0.6
                                                                                                                                                                c-0.2,0.4-0.2,1.3-0.2,1.3l-0.4,1.1v0.8l-0.6,1.1l-1.5,1.2l-0.5,0.4l0.1,1l0.5,0.6l2.4,1.3l0.5,2.2l0.2,0.5v1.1v0.5
                                                                                                                                                                c0,0-0.5,0.6-0.9,0.9c-0.4,0.3-1.1,0.9-1.1,0.9c-0.7,0.7-1.7,0.8-1.7,0.8l-1,1.2l-0.4,0.9l-1.4,1.9l-0.8,1.2l0.2,0.6v2.4l0.2,0.8
                                                                                                                                                                l0.1,1.1c0,0-0.2,0-0.9,0.5c-0.6,0.5-1.6,1.1-1.6,1.1l-1,1.1l-0.2,0.5v0.6v0.9l0.4,0.9l0.5,0.5h0.9c0,0-0.1,1.1-0.1,1.6
                                                                                                                                                                s-0.1,1.4-0.2,2c-0.1,0.6-0.2,1.4-0.1,1.8c0.1,0.4,0,0.8,0.2,1.2c0.2,0.4,0.4,1,0.4,1l0.9,1.2l0.9,0.6l0.9,3.6c0,0,1.1,0.4,1.4,0.8
                                                                                                                                                                c0.3,0.4,1.4,1.5,1.4,1.5s-0.1,0.4,1.4-0.1s0.8,0,1.5-0.5c0.7-0.5,1.2-0.6,1.2-0.6l0.9-0.6c0,0,0.4,0.4,1.1-0.1
                                                                                                                                                                c0.7-0.5,0.2,0.2,0.8-0.5c0.6-0.7,0.1-0.6,0.5-0.8c0.4-0.2-0.2,0.1,0.4-0.1c0.6-0.2,0.6-0.2,1.1-0.5c0.5-0.3,0.1-0.4,1.2-0.4
                                                                                                                                                                c1.1,0,1.1,0,1.1,0h0.8c0,0,0.2,0.1,0.8,0.5c0.6,0.4,1.1,1,1.1,1l1.1,0.9c0,0-0.4,1,0.2,1.2c0.6,0.2,1.8,0.6,1.8,0.6l0.6,1.8
                                                                                                                                                                c0,0,0.6,2,1.1,2.1c0.5,0.1,8.8,9.9,14.5,11.8l1,1.8c0,0-0.4,0.8-0.4,1.2s-0.6,1.6-0.6,1.6l-0.6,0.4l-0.8,1.1l0.8,1.1l0.2,1.4
                                                                                                                                                                l0.9,0.1l0.1,0.8c0,0-0.1,0.9,0.2,1s-0.5-0.2,0.4,0.1c0.9,0.3,0.8,0.5,1.4,0.5s0.6,0,0.6,0s0,0.1,0.6,0.1c0.6,0,0.6,0,0.6,0h0.6
                                                                                                                                                                l1.2,0.8l0.1,0.9l0.4,2.8l-0.1,1.1l0.5,0.5c0,0,0.9,0.6,1.4,0.6s1.6,0,1.6,0h0.8l0.5,0.6l0.6,2.4c1.5,0.5,1.5,0.5,2.1,0.5
                                                                                                                                                                c0.6,0,0,0.2,1.9,0.4s1.1,0,1.9,0.1c0.8,0.1,1.6-0.4,1.6-0.4s0.1-0.1,0.8,0.1s0.6,0.2,0.6,0.2s0.2,0.8,1,0.8s0.9,0.1,1.4,0.1
                                                                                                                                                                s0.5,0,0.5,0l0.8,2.5l1.4,1.1c0,0,0.2,0,0.9,0s1.2-0.2,1.2-0.2s0-0.4,0.5-0.4s1.9,0,1.9,0l1.1-1.8l0.1-0.9l5.2,0.1v-1.2l-0.1-1.1
                                                                                                                                                                l2.4-0.4h1.8h0.6l0.9,0.9l-0.5,1.2c0,0-0.4,0,1.1,0.9s2,1.5,2,1.5v1.4c0,0,1.2,2,1.2,2.5s0.6,2.1,0,2.2s-1.6,0.9-1.6,0.9l-0.8,1.1
                                                                                                                                                                l-0.1,0.5l-0.1,0.8l-0.4,1l1.6,0.1l0.4,2.8l2.1,1.9l1.5,2.5l0.9,2l2.2-0.1h1.1c0,0,1.2,1.1,1.5,1.5s0.9,1.1,0.9,1.1l1.2,0.5
                                                                                                                                                                c0,0,0.6,0.1,1.6,0s1.2,0,2-0.1S-86-199-86-199s-0.2-1.1,0.4-1.1s2.1-0.1,2.1-0.1c0.9,0.8,1.4,0.6,1.5,1.1s0.1,2.2,0.1,2.2l-0.2,2.2
                                                                                                                                                                l-1.1,1.8l-0.9,1.2l0.5,0.4l2.2,1.8l0.1-1.2c0,0,0.6-0.2,1.2-0.2s1-0.1,1.6-0.1s1.6-0.2,2,0s2.8,2,2.8,2s-0.8,1.1-0.4,1.1
                                                                                                                                                                s1.1,0.2,1.5,0.2s2.5,0.4,2.5,0.4s0.9,0,1.5-0.2s2.5-0.2,2.5-0.2l3.1-0.1c0,0,1.1-0.1,1.8,0.4s1.2,0.8,1.2,1.2s-1.2,2.5-1.2,2.5
                                                                                                                                                                h-1.6l-0.6,0.4c0,0-0.1,0.1-0.1,0.9s-0.8,1.8,0,2.2s0.8,0.6,1.5,1s0.6,0.4,1.6,0.9s1.9,1.2,2,1.6s0.9,1.4,0.9,2s-0.4,1.1,0.2,1.8
                                                                                                                                                                s0,1,1,1.6s1.8,2.1,2.1,2.1s4.1-1,4.5-1.1s1.1-0.8,1.5-0.8s0.6-0.5,0.6-0.5l1.6,0.5c0,0,0.1,0.2,0.8,0.5s0.6-0.1,1.1,0.8
                                                                                                                                                                s0.9,1.8,0.9,1.8s0-0.8,0.5,0.6s0.5,1.6,0.5,2s-0.6,1.6,1,1.6s1,0.2,1.6,0s1-1.1,1.5-1.5s0.6-0.6,1.2-1s1.4-0.9,1.9-0.9
                                                                                                                                                                s1.8,0.1,2.4,0.6s0.1,0.4,1.9,1s0.5,0.2,1.8,0.6s1.8,0.5,2.1,0.9s-0.4,1,1.1,1.5s0.6-0.4,2,0.5s1.9,1.1,1.9,1.1s-0.4,0.4,1.2,0
                                                                                                                                                                s1.6-0.2,2.6-0.9s1.9-0.9,2.8-1.4s1-0.9,1.5-1s0.8-0.8,0.8-0.8s0.5-0.2,0.5-0.6s-0.5-2.5-0.5-2.5l-0.2-6.9l-0.2-1.1l0.5-0.8
                                                                                                                                                                c0,0,0.8-0.2,0.9,0.1s0.2,1.2,1.1,2s1.6,1.2,1.6,1.2s0.5,0.2,0.5,0.8s0,0.8,0,1.6s0.4,2,0.4,2s-0.6,0.1,0.6,0.4s2-1.1,2-1.1
                                                                                                                                                                s-0.5-0.8-0.2-1.9s-0.9-1.4,0.5-2.5s2.2-2,2.2-2v-4c0,0-0.8-1.9-0.8-2.2s0.1-2.5,0.1-2.5l-2.6,0.2c0,0-0.4,0.4-0.5,0.8
                                                                                                                                                                s0,0.5-0.6,0.8s-1.1,0.5-1.1,0.5l-1.5,1.5l-1.1,1.2v1.4l-0.9-0.5l-0.6-1c0,0-0.8-1-0.4-1.5s0.9-1.5,0.9-1.5s0.8-1,1.5-1.6
                                                                                                                                                                s1.2-0.8,2.2-1.1s1.2,2,1.5-0.9s0.2-2.1,0.2-2.9s-0.8-3.4-0.8-3.4l-1-2v-1.1l-0.2-1.5l-0.4-1.1l-0.1-1.5l0.2-1.9l0.9-1.5l1.1-1.2
                                                                                                                                                                l0.8-0.5l0.4-0.9l0.4-1l0.5-1l1-0.8l0.9-0.4l0.2-1.6v-2.5l-1.1-1.2l-1.4-0.2l-0.4-0.8l-0.9-0.8l-0.2-0.9l0.5-1.6l-0.1-2.2v-1.1
                                                                                                                                                                l-0.4-1.1l-1.5-1l-2.2-1h-2.2l-1.9,0.1h-0.9l-0.9-1.1l-1.5-0.5l-0.8-1.6l-0.6-1.5l-0.6-1.8l-0.2-0.6c0,0,0.1-0.6,0-1s0-3.2,0-3.2
                                                                                                                                                                l0.1-1.4l-1.1-0.9l-1.4-0.6l-0.4-1.8v-1.1l0.4-1.1l0.5-0.6l1-0.4h0.9l0.8,0.4l0.4,1.1l0.1,1.8v1l0.8,1l-0.1,6.4l1.6,1.5l1.6,2.1
                                                                                                                                                                l0.1,1l2,1c0,0,0.8,0.1,1.1,0s-0.5,0.1,0.4-0.1s1.1-0.4,1.6-0.4s1.2,0.1,1.6,0.1s1.1,0,1.1,0l0.9,0.1l0.6,0.5c0,0,0.5,0.4,0.5,0.8
                                                                                                                                                                s0,0.8,0,1.1s0,1.1,0,1.1s0.1,0.9,0.5,1.5s0.4,2.1,0.4,2.1s0,1,0,1.4s0,0.9,0,0.9l1.2-0.9l0.6-0.8c0,0,0.4-1.1,0.5-1.5
                                                                                                                                                                s0.4-1.5,0.4-1.5s0.6-0.9,0.2-1.2s-0.6-1.4-1-1.5s-1-0.9-1-0.9l-0.4-1.5l-0.4-0.9v-0.9c0,0,0.2-0.6,0.6-1.2s0.2-0.5,0.6-1.1
                                                                                                                                                                s0.5-0.9,0.8-1.6s0.6-2.4,0.6-2.8s0-1.4,0-1.9s0-1.5,0-1.5l-0.1-0.9l1.2-0.4c0,0,0.2-0.1,0.8-0.4s0,0.1,0.5-0.2s0.9-0.5,0.9-1.1
                                                                                                                                                                s0.2-1.9,0.2-2.8s-0.1-1.6-0.1-2.8s0-2,0-2.4c0-0.4,0.2-0.8,0.2-1.2s0-0.9,0.1-1.4s-0.1-1.1,0.2-1.8s1.2-2,1.2-2l0.9-1.5l0.2-1v-1
                                                                                                                                                                L4-261.9l-0.9-0.6l-0.4-1.4l-0.2-0.9l-0.2-0.8l0.4-0.6l0.2-1.9l0.5-0.9l0.8-1.1c0,0,0-0.4,0.4-0.8s0.8-0.5,0.9-1s0.1-1.2,0.1-1.2
                                                                                                                                                                l0.1-0.8l0.5-0.9l0.2-1.8L5.6-278l-0.4-1.1l-0.6-1.2l-0.5-0.9v-1.1l1.4-0.6H6c0.8,0,0.8,0,0.8,0s1.4,0.2,1.4,0.8
                                                                                                                                                                c0,0.6-0.2,1-0.2,1.4c0,0.4,0.4-0.5,0,0.4s-0.4,1.4-0.4,1.4s-0.1,0.4,0.5,0.4s1.4-1,1.4-1l2.2-1.1c0,0,0-0.8,0.4-1
                                                                                                                                                                c0.4-0.2,0.9-0.8,1.2-0.9c0.3-0.1,0.6-0.2,1-0.4s1.1-0.2,1.1-0.2l1.1-0.9l0.1-1l0.8-0.9l0.5-1.5l-2-0.5h-1.4l-0.5,0.4l-1-0.4
                                                                                                                                                                l-0.8-0.1l-0.2-1.2l-0.4-1.9c0,0,0.5-0.8,0-1c-0.5-0.2-1.2-1.2-1.2-1.2l-1.5-0.1c-0.6,0-0.6,0-0.6,0l0,0l-0.5-0.4l-0.1-1.5v-1
                                                                                                                                                                c0,0-0.5-0.6,0.1-0.8c0.6-0.2,0.6-0.1,0.6-0.1s0.6-0.9,0.9-1.2s0.2-0.9,0.2-0.9l0.4-0.5v-1.7c0,0-0.6-0.2-1-0.2s-0.9,0-0.9,0l-1-0.6
                                                                                                                                                                l-0.8-0.9L5.7-304l-1.1-0.6v-0.9v-1.2v-1.6L3-308.9H2.4h-2.6h-0.5c0,0-0.2,0-0.6,0s-0.4,0-0.4,0l-0.8-0.2l-0.5-0.6l-0.6-0.8l0.1-0.9
                                                                                                                                                                l0.8-0.5l0.5-0.4c0,0,0.1-0.6,0.1-1c0-0.4,0-1.4,0-1.8s0-1.5,0-1.5l-0.4-1L-4-318l-1-0.4l-0.9-0.2h-1.9l-0.4,0.6l-0.5,0.8l-0.6,1.5
                                                                                                                                                                l-0.8,0.8l0.9,1l1.2,1.4h0.9c0,0,0.5,0,0.6,0.4s0.1,1.4,0.1,1.4s-0.5,0-0.9,0.2s-1,0.4-1,0.4l-1-0.2l-0.4-0.9h-1.1l-1,0.8
                                                                                                                                                                c0,0,0.2,0.2-0.2,0.6c-0.4,0.4-0.9,1.8-0.9,1.8l0.6,1.6l2.1,0.4l0.9,0.4c0.6,1.4,0.6,0.6,0.6,1.4c0,0.8-0.6,1.2-0.6,1.2
                                                                                                                                                                s-0.6,0.4-1.5,0.5c-0.9,0.1-2.1,0.1-2.1,0.1l-0.8,0.2l0.5,1.4c0,0,1.2,0.5,1.6,0.5s1,0.1,1.8,0.2s1.1-0.6,1.5,0.2
                                                                                                                                                                c0.4,0.8,0.5,1.5,0.5,1.5s0,1.6-0.8,1.9s-0.5-0.5-2,0.5s-1.1,1.4-1.9,1.5s0.1-0.4-0.8,0.1s-0.9,0.5-0.9,0.5s-1.8,0.4-0.1,0.6
                                                                                                                                                                c1.7,0.2,3.4,0.2,3.4,0.2h0.5l-0.8,1.2c0,0-0.1,0.2-1,0.6s-0.9,0.4-0.9,0.4s-0.8,0.6-0.8,1c0,0.4,0.1,0.1-0.1,1
                                                                                                                                                                c-0.2,0.9-0.1,0-0.2,0.9c-0.1,0.9,0.4,0-0.1,0.9s-0.8,1.5-0.8,1.5L-16-285c0,0,0,0.9-0.6,1c-0.6,0.1-0.2,0.2-1.1,0.2
                                                                                                                                                                s-2.5,0.5-2.5-0.1c0-0.6-0.4-1.1-0.4-1.5c0-0.4,0-0.6,0-1.1s-0.2-2-0.2-2s0.5,0-1-0.5s-1.1-0.9-2.9-0.9s-2.8-0.5-2.9,0.2
                                                                                                                                                                s0.2,0.2-0.1,0.8c-0.3,0.6,0.4,0-0.4,0.5s-1.6,0.4-1.8,0.8s1.5,0.8-0.1,0.4c-1.6-0.4-0.5,0.2-1.6-0.4s-1,0.2-1.1-0.6
                                                                                                                                                                s0.1-0.8-0.1-1.8s-0.5-1.8-0.5-1.8s-0.1-0.9-0.5-0.9s-1.4-1.1-1.5,0s-1.1,0.8-1.1,0.8s0.2,0.6,0,1c-0.2,0.4-0.8,1.9-0.8,1.9
                                                                                                                                                                s-1,0.4-1.6,0.2c-0.6-0.2-1.4-0.2-1.4-0.2l-0.9-0.4c0,0-0.1-0.4-0.1-0.8s-0.2-1.1-0.2-1.1H-42c-0.5-0.4,0.2-0.1-0.5-0.4
                                                                                                                                                                s-1.4-0.1-1.4-0.1c-0.5,0.1-0.5,0.1-0.5,0.1l-1.4-0.4v-3.4c-0.8-0.2-0.9,0-1.2-0.2s-1.2-1-1.2-1l-0.8-0.5c0,0-0.6,0-1.4,0
                                                                                                                                                                s-0.1,0-0.8,0s-1.1-0.8-1.1-1.6c0-0.8,0-2.2,0-2.2s0.2-0.8,0-1.1s-1.9-2-1.9-2s-1.1-0.6-2.1-0.8c-1-0.2-0.4,0-1.5-0.2
                                                                                                                                                                s-2.1-0.8-2.5-0.8s-0.4,0-0.4,0l-1.4-0.1h-1l-0.9-0.8l-1-1.5l-0.5-0.4l-0.6-1.1l-0.6-1v-9.2l-0.4-0.9l-0.9-1.5c0,0-1-2-1.4-2.2
                                                                                                                                                                c-0.4-0.2-0.6-1-1.1-1.4c-0.5-0.4-1-1-1.4-1.5s-0.6-1.1-0.6-1.6s0-1.4,0-1.4s0.9-0.9,1.5-0.9s1,0,1.4,0s1,0.2,1,0.2l0.6,0.7v0.5
                                                                                                                                                                c0,0,1.4,0.8,1.5,0.4s0.8-1.4,0.8-1.4v-1.2c0,0-0.1-0.4-0.4-0.8s-0.6-1.1-0.6-1.1l-1.1-0.9l-1.5,0.8l-1.5,0.1h-1l-0.8-0.1l-0.5-0.5
                                                                                                                                                                c0,0-0.2-1-0.2-1.5s0-2,0-2c-0.6-0.4-1.2-0.4-1.6-0.4s-1.2,0-1.2,0l-1-0.6l-0.5-1L-78-341l-1.8-0.9l-0.4-0.6v-1l-1.1-0.5l-1.9-0.5
                                                                                                                                                                l-0.9-0.9l-0.1-1.5v-0.9c0,0-0.5-0.1-1-0.1s-1.2,0-1.2,0s-1-0.2-1,0.1c0,0.3-1.2,2-1.2,2s-0.8-0.4-1.4,0.5c-0.6,0.9-1.4,1.5-1.4,1.5
                                                                                                                                                                s-0.2,0.6-0.5,1.1s-0.4,1.4-0.4,1.4l-0.2,1.6l0.9,1.2l0.1,0.8h2.1h0.8c0,0,1,0.6,0.9,1.2s-0.2,1.9-0.2,1.9l0.9,1
                                                                                                                                                                c1.8,0,2.4-0.1,2.4-0.1h0.9c0,0-1-1.2,0.4,0.9c1.4,2.1,1.2,3.2,1.2,3.2l-0.1,1.2l1.9,0.1l1.5,0.8l1.6,0.1c0,0,0.2,0,0.2,0.5
                                                                                                                                                                s-0.5,0.9-0.5,0.9l-0.6,1.5c0,0,0.1,0.1,0.8,0.2c0.7,0.1,1.8,0.2,2.1,0.2s0.8-0.1,0.9,0.2c0.1,0.3-0.1,2.2-0.1,2.2l-1.1,1.5l-1,1.1
                                                                                                                                                                l-2.4,0.1c0,0-1.9,0-2.2,0s-1.1,0.5-1.9,0.5s-2.1-0.1-2.1-0.1h-0.5l-0.8-1.2l-1.2-1.1l-0.6-1l-0.4-2.1l-1.2-1.1l-0.1-0.5l-0.9-0.5
                                                                                                                                                                l-2.2-0.6l-2,0.2l-1,0.4l-0.2,1.2l-1,0.8l0.1,1.5l-0.2,1.6l-0.6,1c0,0-0.9,0-1.2,0s-0.8,0.2-1.1,0s-1.8-1.4-1.8-1.4s-0.6-2-0.6-2.4
                                                                                                                                                                c0-0.4-0.1-1.5-0.1-1.5l-0.6-1.8l-1.4-0.6l-0.5-0.2l-0.9-0.5l-1.5-0.2l-3.4,0.7l-1.4,1.1l-1.6,0.8l-1.1,1.5l-1.4,1.1
                                                                                                                                                                c0,0-1.6,0.6-2.1,0.6s-1.9-0.5-1.9-0.5l-0.4-2.1v-1.8l1.4-1.8h0.5h0.6h0.6l1.2-0.5c0,0,0.4-0.6,0.9-0.9c0.5-0.3-0.6,0,0.5-0.2
                                                                                                                                                                c1.1-0.2,2.5-0.2,2.5-0.2l0.2-4.2l-1.8-0.2l-1.6-0.1c0,0-0.5-0.5-1-0.8c-0.5-0.3-1.1-2.1-1.1-2.1l0-1.3v-1.1l-0.5-1.5l-0.9-0.1
                                                                                                                                                                l-0.5-0.1l-0.1-2l-0.1-0.5l-1.5-0.4h-1.4l-1.2-0.3l-0.9-1.1l0.9-1v-1.5l-0.8-1.1l-2.4-1l-0.8-0.3l-1.1,1.1l-0.7,0.5l-0.5,0.5h-0.9
                                                                                                                                                                l-7.2-6c0,0-0.4-0.9-1.1-0.9s-0.8-1-0.8-1l-0.6-2.1l-1.9-0.1c0,0-0.6,0-1-0.1s-0.6-0.2-1.5-0.5c-0.9-0.3-0.9-0.2-0.9-0.2
                                                                                                                                                                s-1.4-0.6-1.5-1c-0.1-0.4-0.2-1-0.2-1s0-0.5-0.1-0.9c-0.1-0.4-0.4-2.8-0.4-3.1c0-0.3,0-2.5,0-2.5l-0.1-1.5l-0.6-0.8
                                                                                                                                                                C-149.4-371.1-151.4-371-152-370.6z">
                                        </path>
                                        <g class="st16">
                                            <image style="overflow:visible;opacity:0.75;" width="86" height="43"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFYAAAAsCAYAAAD/709QAAAACXBIWXMAAA3XAAAN1wFCKJt4AAAA
                                                                                                                                                                        GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACgdJREFUeNrsmwmT2kgShSUhIY6m
                                                                                                                                                                        T9s7szG7+/9/2ezabTc0IARCqoWJl45v06WGZtsRc5iICmhdlfkqj5dZ6iT58fkun/SMc+kbzhfc
                                                                                                                                                                        91vLHb6z/Gfrk/YIHRtvIUQ4A9zQcy4mS9qjYPrCPW8Jamx8A6z9zjQGGP+vcDZp50bM0roIsDZ/
                                                                                                                                                                        hu/M3d85YDOMtwQ3QM5Ww35/BdcDa4AONcrDKA4jv3D1vRD7w2j07QEMTlgTMsUC5xr2d6ZrqGBw
                                                                                                                                                                        19r1yRsbyFGHncZWen2V27tMLkAnhzE7jCv9HupcdmbcS517thCg1vcewCUQdgvwDaQCC11iwQdO
                                                                                                                                                                        Sd5zvGak7xyW+9o4nkaMZC89VhrLw9gA3I43mwJHIG8P491hPOj3VOeyHnD7YrKtbiNB1hKk1jEK
                                                                                                                                                                        3grU4zWVfnead6xFtoUeC7CBe37snrEWJXMLfgrULGLlAYt/BPPzYTxqLATub97oXdxW+ijQ/WH8
                                                                                                                                                                        /TDeH8Y1FImByLjMmBZgTWsJY6vbYs5E4ByPP0nItUAayXvutMgzgVtqrg731gB2gmsLhI3g4nvM
                                                                                                                                                                        OKgL9emkSyVQS+mx0bGd/v7NRWIxtpSVzqTMrVY+d5NlsPQC8TgHsKb00VKf9b2Fyxqwe4F5XP0v
                                                                                                                                                                        WoBO897Lg+4k0whz+HjX6ZxZ7EhzWIzfIxYmEcPy+hSw3k6Lt5AXHH/PEW6+RoC8hz5QiEZjoHN2
                                                                                                                                                                        T46YPJIiY/0ewprMWksdn+p45hKLxa1bAfus6yYC9r3OjRACPM3ppFwBuTI9eyM5GL8Tx4ByxOaJ
                                                                                                                                                                        vkd6Xqp717pv4UD/nySXuyRDt1oIqERmPnZsocR5A3Lo4l+r4w0WgfE8d3Pv4forWOydwJ3iebUW
                                                                                                                                                                        LehZJeRjsm20SBZmnuUxJlvhjCOD/CX0SZEgU5eQv2E63mIZmHNdWLmkMZGCV7DgMTI8+WOANdpI
                                                                                                                                                                        AGwKqpRKQbPKKx0vFeOvdb4VqJVGAuZiIYzub4twBPVXxcaN7isw1xWMpIvw4dQBajnDkvEe94U8
                                                                                                                                                                        ws+2MG9zT5v42sWwxNEYs7pBhGZZckmhdEDAz2B1KVwvR9Ike6iklH3GCAOW2Mwy1wov/zmMTzo+
                                                                                                                                                                        0IJ0uj5EjKLD4pg8lryWANao1tfCJ+8h6FuX6YdwuTFAnunvQs/YIcNbmDHuutEYRGJrg+OMlzsk
                                                                                                                                                                        ukzW1br42tcj8F64BpVrETun0uVG31OnT3AxtgYLqBCSWrKN/EQ9b3FmJk77NyWRBwkxgYXVGoxb
                                                                                                                                                                        A4CzhaUw2/oS1bzkWaPVPK3ChCXNEWQdOS+xOMgQ1MHVBwLyPfS5gZGkCDcZ5A3gyw1iK0ENMWAT
                                                                                                                                                                        VGAE9OfD+Ie+34HXkn9usMIlyLlZ7Q6ewGSTO/JudMZo115ypJBphNDRuUS1lqIDKG5GYslpKj1+
                                                                                                                                                                        0veNnkl91pLFFs4suXa0LcZOvgE2heJWgR2t9JfD+KcEuYVClQQwUl/p4VNl8Vs9yzhmDSWHzlKZ
                                                                                                                                                                        FI6g/luJxuL+GAVCiXBimboSIIXL5HtY6gzFxk/S7Rb5olbc/KK5LYZf6Z4r5wGhrxvXB2wOq7tz
                                                                                                                                                                        LmPZ0yzUSjsKcoMwQvc0Aj8A62D1tJVSn5Ro5gB/jWQUsBgVMnOr584Q/3cA1qzuQZZ6r+sGqPMr
                                                                                                                                                                        zftJoSjRvDlyQHeqr5yfqJVzx1uHiGWJq3osoJvL7rCynSs+LKs3YAZWnT1qkb7oGuPGa3iIZeqF
                                                                                                                                                                        rrNKzXjwEbAPssYUya9wzZkCpavXx5KU8dcGBcjJZn1f8mojE1QALoW1DcFvzZqGrvzNIpywBchL
                                                                                                                                                                        WcdClvKkYw1480KAG0Ab1wRZIgw1SKBD1zNtQP8qGFDr6NoYjSLmg+6cFmoMWF99fZa7FAL7Bskj
                                                                                                                                                                        R9yxpNC6Oj2H6xdYjCHANRbwWcAyXndyzY96zkoKGTd91EJs9Ox7lME7lLRblKMt6JxRLKv1Jwp/
                                                                                                                                                                        HZLvDEmzOacF6XlsilW1WPMr3GGp2GStROvdWsY1jjhEUWH3sulsPYUOSbCA0g24YcB9W80bIJ91
                                                                                                                                                                        wvawrBoxswWFW+gZcy3kkxbgHkynRNK90Vxj6Lt+LbAxi52DW1q1YTTEaEqJNt4MQJiSDYoB9n5p
                                                                                                                                                                        9azSlq4ZvgWfXTk+SYLOktNnbAI71zFjPR+Q+O5QFg8dzRuCjg1ObVTmPVspFvsS10jeRTr0dHHv
                                                                                                                                                                        6py4jbT1JrJqxt6t28PagoGsXCHhiX+O5o4vtRuEj1rXPaNKHKHQyF2RUyIU5uds8eQ9+zod+F/n
                                                                                                                                                                        XHKqlTWgy55dhCyyMCtXpiZITta62zuhF6jF68gcORLoNRpGI1fd+eZJhtL2DrsWJRaLhUtwC971
                                                                                                                                                                        bHy+SLc8uBmqqxpUqnWxLIATNrjPuOYT3NkUuUdieEB29s2hCvKwbzp1TSLj26zQuPG4hzcOoVMD
                                                                                                                                                                        xpBCnwKle3Bhqj23QEh6mjKN2wzcYGRwWaMnI+w4WMvOMvgclrgSYNbEHgqUvqZ7ACBX6NPeo4li
                                                                                                                                                                        cfMBrccCHbKAOMweBnl4B7AH0CdFD6PyO7PnAst9fu/OcwFVoJ6uwApyNDQa0aiP4Kh7NJ3XiKH3
                                                                                                                                                                        IPjknDu3+Wi1/s8aH1DuzgTylay6ArCDyF5cpUV+ggW3kKsD+zEP/AhKuIt0204CG9y+0gYkPtdD
                                                                                                                                                                        SX/WcCUL+K0A5G7mTuesl8ku/Ac9+1rgWd+zAjm3ztSxMfQvgWsUkNtDCQoWvx/XgXE8gsGMwYLW
                                                                                                                                                                        knWARL1Fybt0tPBVFhujYCm2PCZoYKyRmFhbb1BdrdE4rtGgaZC4rgHIBLsXpuQ1ulO/CFi2/XJX
                                                                                                                                                                        GJTI+kPXK35GIluCX1ewyBRcuoWVL13/IlwCrKdgxgtL1wTewbJ8j7WGIGmk/dbq+nd6bu2eNQAD
                                                                                                                                                                        sB1k2xa/Bj3itlCBJDfTdwlrXKP6myNJ7aAPX73qXMO7udRiPUtgI2UF12odt0zddkobaQp3jr7Y
                                                                                                                                                                        vUvs5s6hgN9Z5WtEnrdyoSzZ3Wh8cdRvj5Zh7nY2WoTE1Mm673ld6mxgExeg+TpQ5sCPcTvPAUPP
                                                                                                                                                                        uRYx2XZkKySKLRraZCk1CLx/V2yLZvU1EtscydaoYe34d9fzcod/yS95Dd16yXIJbnrGK5ih53zX
                                                                                                                                                                        Q61WqIK4Q2GesELL8BZJhTuzjbNcH7NLlKa07r5XQ8/R52JgE/cWYGzz7tSbh0nPQjRQcIMdhtZt
                                                                                                                                                                        nQdZ9Cc0gDYojfegaEyiNIQ8siXUnSnzOecuAjY5Y0Vf+/FhhuUrvSQFsENY9BMIfBMpVibg3DFi
                                                                                                                                                                        H16yvks+3/M18kvlSXve8kvci3tTvMgxBW/lO7iZ6w0HJahHWfwcpXL71or8Hj/pCeC5ZTSC9TJe
                                                                                                                                                                        dliECZpFW8ept/6dgD8zsKdk9i+yZRF2krh3HAoXKmq3Lxf+6sAmybf/k8DwEXo2RTNXnu9PUKq/
                                                                                                                                                                        JLBe9pf0yFwVGCI0L/wA9jI9Yhb9lqzmTwvsJXqG5Mfnj/f5rwADANxsEU6PePgGAAAAAElFTkSu
                                                                                                                                                                        QmCC"
                                                transform="matrix(0.7972 0 0 0.7972 -116.5603 -268.4205)">
                                            </image>
                                            <g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-97.7-262.6v14.7h-2.1c-1-1.5-2.6-2.9-5-4.2c-2.4-1.3-4.5-2-6.4-2l-0.7-2.5c2.9-1.9,6.8-3.7,11.8-5.5v-0.5
                                                                                                                                                                      h-13.1v-2h17.1v2H-97.7z M-100-259.6c-2.8,1-5.4,2.2-7.9,3.6c2.9,1,5.5,2.5,7.9,4.6V-259.6z M-104.8-247.3c-0.7-0.7-1.6-1.3-3-2
                                                                                                                                                                      l1-1.9c1.3,0.5,2.4,1.3,3.4,2.5L-104.8-247.3z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-95.7-260.1c0-1.2,0.4-2.1,1.1-2.9c0.8-0.8,1.8-1.2,2.9-1.2c1.2,0,2.2,0.5,2.9,1.4c0.7,0.9,1,1.9,1,3.1
                                                                                                                                                                      c0,2.4-1.4,4-3.8,4C-94-255.7-95.7-257.6-95.7-260.1z M-90.8-248.5c-1.6-1.4-3.1-2.4-4.7-3.3l0-3.3c4.7,3.5,7.7,6.1,9.3,8.3v2.3
                                                                                                                                                                      L-90.8-248.5z M-93.6-260c0,1.1,1,2.2,2,2.2c1,0,1.9-0.8,1.9-1.9c0-1.2-0.8-2.3-1.8-2.3C-92.8-262-93.6-261.2-93.6-260z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-72.2-262.6v14.7h-2.3c0-0.8,0-1.6,0.1-2.8c0-1.1,0.1-2,0.1-2.5c0-2.6-0.2-4.2-0.7-4.8
                                                                                                                                                                      c-2.4,1.1-5.1,2.5-8.3,4.2l-1-1.7c0.5-1,0.7-1.7,0.7-2.3c0-1.4-0.5-1.9-2.1-2.1l-0.7-1.8c0.8-1,1.7-1.6,2.9-2.1
                                                                                                                                                                      c1.1-0.5,2.3-0.7,3.5-0.7c1.3,0,2.5,0.3,3.3,1c0.6,0.5,1.3,1.3,2.2,2.5v-3.5h4.3v2H-72.2z M-79.9-262.3c-1,0-2.1,0.4-3.4,1.2
                                                                                                                                                                      c1.1,0.6,1.6,1.5,1.6,2.5c0,0.4-0.1,0.8-0.3,1.3l5.6-2.7c-0.3-0.6-0.7-1.1-1.4-1.6C-78.5-262-79.2-262.3-79.9-262.3z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-71.6-241.1c-0.2-1.1-0.5-1.8-0.8-2.3c-0.2-0.3-0.7-0.8-1.4-1.5c-1.2,1.5-2.4,2.3-3.7,2.3
                                                                                                                                                                      c-2.3,0-3.5-1.5-3.5-3.7c0-0.8,0.3-1.4,1-1.9c0.6-0.4,1.3-0.6,2-0.6c1,0,2.1,0.3,3.1,1l0.5-0.9h2.4c-0.4,0.8-0.9,1.6-1,2
                                                                                                                                                                      c1.9,1.4,3,3,3,4.7L-71.6-241.1z M-78.7-245.7c0,0.6,0.6,1.2,1.3,1.2c0.7,0,1.5-0.6,1.7-1.4c-0.8-0.6-1.4-0.9-1.9-0.9
                                                                                                                                                                      C-78.2-246.8-78.7-246.2-78.7-245.7z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-56.2-262.6v14.7h-2.1c-1-1.5-2.6-2.9-5-4.2c-2.4-1.3-4.5-2-6.4-2l-0.7-2.5c2.9-1.9,6.8-3.7,11.8-5.5v-0.5
                                                                                                                                                                      h-13.1v-2h17.1v2H-56.2z M-58.5-259.6c-2.8,1-5.4,2.2-7.9,3.6c2.9,1,5.5,2.5,7.9,4.6V-259.6z M-63.3-247.3c-0.7-0.7-1.6-1.3-3-2
                                                                                                                                                                      l1-1.9c1.3,0.5,2.4,1.3,3.4,2.5L-63.3-247.3z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g>
                                                <path class="st17"
                                                    d="M-93.9-308c0.4,0.1,0.9,0.1,1.3,0.2c3.8,0.8,6.5,3,7.8,6.7c1,2.8,0.8,5.6-0.6,8.2
                                                                                                                                                                    c-2.9,5.7-5.9,11.5-8.8,17.2c-0.1,0.1-0.1,0.2-0.2,0.4c-0.2-0.4-0.4-0.7-0.6-1.1c-1.8-3.5-3.6-6.9-5.3-10.4c-1-2-2.1-4-3.1-6.1
                                                                                                                                                                    c-0.7-1.3-1.1-2.7-1.2-4.2c-0.1-2.6,0.5-4.9,2.1-6.9c1.6-2.1,3.8-3.4,6.5-3.8c0.4-0.1,0.9-0.1,1.3-0.2
                                                                                                                                                                    C-94.5-308-94.2-308-93.9-308z M-88.8-297.8c0-3.2-2.5-5.7-5.7-5.6c-3.1,0-5.6,2.6-5.6,5.7c0,3.1,2.6,5.6,5.8,5.6
                                                                                                                                                                    C-91.3-292.1-88.8-294.7-88.8-297.8z">
                                                </path>
                                                <path class="st19"
                                                    d="M-84.8-301.1c-1.3-3.7-4-5.9-7.8-6.7c-0.4-0.1-0.9-0.1-1.3-0.2c-0.3,0-0.4,0-0.6,0c-0.4,0.1,0.5,0,0.1,0.1
                                                                                                                                                                    l0,4.6c0.4-0.1-0.3,0,0.2,0l-0.2,0c3.2,0,5.7,2.5,5.7,5.6l0,0c0,3.1-2.6,5.7-5.7,5.7c-0.3,0,0.3,0,0,0l0,16.8
                                                                                                                                                                    c0.1-0.2,0.2-0.3,0.2-0.4c2.9-5.7,5.9-11.5,8.8-17.2C-84-295.5-83.8-298.3-84.8-301.1z">
                                                </path>
                                            </g>
                                        </g>
                                    </a>
                                </g>

                                <g id="sylhet">
                                    <a href="{{ route('subcategory-page', 'সিলেট') }}" xlink:href="">
                                        <path class="st3"
                                            d="M143.6-178.4l-19.2,0.6l2.3,4l-0.7,2.5l-2.8,0.8l2.3,3.3l-1.7,3.2l1.2,3l-0.5,5.8l6.8,4.5l4.9,0.1
                                                                                                                                                                c0,0,3.7,2.3,6.5,6c1.2,1.6,0.2,5.5,0.2,5.5l6.3-1.3l9.2-1l4.8-1.5l3.2,1.3c0,0,0.5,1,0.7,2.3s-0.2,2.2,0.5,3.7s0.7,2.3,0.7,2.3
                                                                                                                                                                l1,3.3c0,0,0,4.8,0,5.3s0,4,0,4v2.5l6.7-0.3l2.5,0.3l0.2,3.2l-1.7,0.8c0,0,0.2,0.5,0,1.8s-1,2.2-1,2.2l-1.7,1.7l-0.3,2.3l3.2,3
                                                                                                                                                                l2.2,1.7c0,0-0.3,1.5-0.3,2.2s-0.5,2.3-0.5,2.3l-2.3,1.2l-1.5,2.7l0.2,2.8l1.3,1.5l2.8,0.7c0,0,0.8,0,0.8,0.5s0,2.5,0,2.5
                                                                                                                                                                s-0.3,0.7-0.8,1.2s-1.3,0.8-1.3,0.8l0.7,1.3l2,1.5l0.7,2.5l-0.7,1.5l-1.3,0.8c0,0-0.7,0.7-0.3,1.3c0.3,0.7-0.5-0.3,0.3,0.7
                                                                                                                                                                s1.5,1.2,1.5,1.7s-0.2,1.5-0.2,1.5l-0.3,0.8l-1,0.5h-2.7h-2.2c0,0-1.5,0.5-1.5,1.2s-1,3.5-1,3.5l1.7,2.5c0,0,2.5,3.5,3.3,3.5
                                                                                                                                                                s2.2,0.3,4,0.3s3.3,0.2,4,0.2s0.5,1.3,1.7-0.2s1-1.3,1.8-2.5s0.2-2,1.2-2s0.8,0.2,1.7,0.3c0.8,0.2,1.8,1.2,1.8,1.2v1.8l-0.7,0.8
                                                                                                                                                                l-1.5,0.7c0,0-1.5-0.3-1.5,0.3c0,0.7-1,1.7-0.7,2.2s2.2,1.5,2.2,1.5l1.8,0.2c0,0-0.2,0.8-0.7,1.3s-2.3,1.5-2.3,1.5l-0.5,0.8
                                                                                                                                                                l-0.8,1.3l0.8,2.2c0,0,0.5,0.7,0.5,1.3c0,0.7,0.2,3.2,0.2,3.2v3l0.7,9.2l2,0.7l1.2,1.2l2.3,0.5c0,0,0-1.7,0.5-1.7s2.3-3.8,2-4.3
                                                                                                                                                                s-1.5-5.3-1.5-5.3l0.3-3.7l3.7-1.3h4.3l2.7,1.3l1.3,1.3l15,1.2l4.8-4.8c0,0,0.2-1.7,0.2-2.5s0.7-5.3,0.3-6.2
                                                                                                                                                                c-0.3-0.8-0.7-4.3-0.7-4.3s1.2-1.2,1.8-1.2c0.7,0,1.8-2.7,2,0.2c0.2,2.8,0.2,2.8,0.2,2.8l1.5,4.2l1.3,3.7l4.7,0.2l2-1.2l-1-6.8
                                                                                                                                                                l-0.3-4l2-0.3c0,0,1.3,0,1.8,0.2s2,1.8,2,1.8l2.2-0.5l1.7-0.3l1.2,0.2l-0.2,2l2.5,3.5c0,0,0.2,0.7,0.7,1.2s1,1.8,1,1.8
                                                                                                                                                                s-1.2,1.8,0,1.8s3.8-0.8,3.8-0.8s1.3-2.5,1.5-3.3s0.7-3,0.7-3l-0.5-3.7l1-4l0.7-3l-0.3-5l0.7-3.3h1.3l3,1.3l3.7,0.3l-1-2.3l-2.3-2.7
                                                                                                                                                                c2.7-1,2.7-1,2.7-1l3.3,0.7h5.7l6.3-2.3c0,0,1.3-3,1.3-4.3s0-5,0-5l-0.7-3l-0.3-5l4.7-4c0,0,2-0.7,2.3-1.7s0.3-6,0.3-6l2-4.3
                                                                                                                                                                l3.7-10.3l1.3-2.7v-8.7l-2-5.7v-4.3l2-2.2l5,0.5l3.5,1.5l2.5,2.5l2.5,2l6.5,1l2.5-3.5h3l1.2-3v-3.8c0,0-2-2.5-3-2.8
                                                                                                                                                                s-3.5-1.8-3.5-1.8l-1.8-2.2l-1-5.8l-2.2-2.2l-5-1.2l-2-0.5l0.5-2.8c0,0-1-0.2-3.2-0.5s-6.5-0.8-6.5-0.8l-2.8-2.5l-2.8-3.8l-6.5-0.2
                                                                                                                                                                c0,0-2.5-3.5-3.5-4s-7.2-1.5-7.2-1.5l-6.5,0.5l-1,0.8h-2.5l-1.2-1.2h-4.8h-2.8c0,0-1-0.2-1.8,0s-1.8,0.8-2.8,1s-1.2,1.5-3,1.5
                                                                                                                                                                s-3,0.8-4,0.8s-4-0.2-4-0.2l-1.5-1l-1,1.5c0,0-0.5,1.5-1.5,1.5s-2.2-1.8-2.2-1.8l-2,1.8l-1,2.8c0,0-4,0.5-5,0.5s-4.8-2.8-4.8-2.8
                                                                                                                                                                v-3.2c0,0-1.8-0.2-2.5-0.2s-2.2,0-2.2,0l-1,2.2l-1.5,0.2l-4.8,1l-1.5,1.5l-3-1.2c0,0-1.5-0.8-2.5-0.8s-2.8-0.8-2.8-0.8l-3-1.5
                                                                                                                                                                c0,0-3.2,0.8-4.2,0.8s-1.2,0.2-2,0.2s-4.2-3.5-4.2-3.5l-3-2.8h-3.2l-2.5,0.5l-1.5,2l-2,0.2h-5.2l-5-1l-3.2-0.8l-2.5,1l-3.2,2.2
                                                                                                                                                                l-5,1.2l-4.8,1.5L143.6-178.4z">
                                        </path>
                                        <g>
                                            <g class="st18">
                                                <image style="overflow:visible;" width="95" height="82"
                                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF8AAABTCAYAAAD5jtuOAAAACXBIWXMAAAsSAAALEgHS3X78AAAA
                                                                                                                                                                        GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAApBJREFUeNrsmetO20AQRuPEuaFe
                                                                                                                                                                        QktpS6/v/2aVaGkAu3bwpWPpW2lYOSgqP7qEc6RPNo6DrLPj8XozmQAAAAAAAAAAAAAAAAAAAAAA
                                                                                                                                                                        AAAAAADAkZA98eseu/5+zz7yH3mtWbS/T34f7ffIf9x1Tl1m2sYDEER3Lm2qg/AU5AfJuWVuWShz
                                                                                                                                                                        NwiBIPxO2VkapdVnPfIPbzNTiV5aTiwvlLUGIQxO78RXlj+WwlJqPwxEMgOQJd5mZhK/sryynFre
                                                                                                                                                                        Wt5YXur43MlvJPnWcm25svyybHWs1uAkMQB54m0mVPtrSf+onFs2+iyWP1T9jaT/GDmncy2qR/59
                                                                                                                                                                        8VNd10rt5VSyLyyfFS8/H5E/VPlP3S1L/c/W9X4/CMh34n2bCdX+yfJF4oe/z9R2lu5OCXJryV/q
                                                                                                                                                                        +J16/q36f6Xzsv/9LpCK/Cyq+KHNvFO1f1UG8R80IEH8zLWQUP3xs+JED+eVmyFl7vxnXfn+4bqS
                                                                                                                                                                        2DNV+3fLN+2fqwWtdX6jqm7ctHKn6i7V97ea8SQ300lN/kJVOgh+L+EX2t9oYDq1kNLNbCq1msp9
                                                                                                                                                                        VqjNDPIvlRud16bywpUnID5T1S/0gN1E08lcoq8lrI1k+xTR/L7Q97aadpa6S9oU1n5SqXzfo9fu
                                                                                                                                                                        QTpU9m8J9JVeuZensK2ibT1yRzDPf6D1ZBJTS3rtZiy1k1tF+1XU9/2yQpyetnOfsAAW5uiX2s7c
                                                                                                                                                                        9NH39l0k26/ftNGCWucqPakFthTk+z5e6Fgp8X20SHaI6PgFqt+zffZrO2OLZwv31to50c0/iJ6k
                                                                                                                                                                        Jjy1hbUsmuuHN93JiOT+gEpO+ter1OT7AYh/Hjwa0SnLj68lOzbRAAAAAAAAAAAAAAAAAAAAAAAA
                                                                                                                                                                        AAAAAHDU/BVgADK2EAh8LlXzAAAAAElFTkSuQmCC"
                                                    transform="matrix(1 0 0 1 189 -178.3333)">
                                                </image>
                                            </g>
                                            <g>
                                                <path class="st17"
                                                    d="M225.9-159.6c0.4,0.1,0.7,0.1,1.1,0.2c3.1,0.6,5.3,2.5,6.4,5.4c0.8,2.3,0.6,4.5-0.5,6.7
                                                                                                                                                                    c-2.4,4.7-4.8,9.3-7.2,14c0,0.1-0.1,0.2-0.2,0.3c-0.2-0.3-0.3-0.6-0.5-0.9c-1.5-2.8-2.9-5.6-4.3-8.5c-0.8-1.6-1.7-3.3-2.5-4.9
                                                                                                                                                                    c-0.6-1.1-0.9-2.2-0.9-3.5c-0.1-2.1,0.4-4,1.7-5.6c1.3-1.7,3.1-2.8,5.3-3.1c0.4-0.1,0.7-0.1,1.1-0.1
                                                                                                                                                                    C225.5-159.6,225.7-159.6,225.9-159.6z M230.1-151.2c0-2.6-2.1-4.6-4.7-4.6c-2.5,0-4.6,2.1-4.5,4.7c0,2.5,2.1,4.6,4.7,4.5
                                                                                                                                                                    C228-146.6,230.1-148.7,230.1-151.2z">
                                                </path>
                                                <path class="st19"
                                                    d="M233.3-153.9c-1.1-3-3.2-4.8-6.4-5.4c-0.4-0.1-0.7-0.1-1.1-0.2c-0.2,0-0.3,0-0.5,0c-0.4,0,0.4,0,0.1,0.1
                                                                                                                                                                    l0,3.7c0.3-0.1-0.2,0,0.1,0l-0.1,0c2.6,0,4.7,2,4.7,4.6l0,0c0,2.5-2.1,4.6-4.6,4.6c-0.2,0,0.2,0,0,0l0,13.7
                                                                                                                                                                    c0.1-0.1,0.1-0.2,0.2-0.3c2.4-4.7,4.8-9.3,7.2-14C234-149.4,234.1-151.7,233.3-153.9z">
                                                </path>
                                            </g>
                                        </g>
                                        <g>
                                            <image style="overflow:visible;opacity:0.75;" width="77" height="36"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAE4AAAAmCAYAAABqDa0qAAAACXBIWXMAAA0SAAANEgG1gDd0AAAA
                                                                                                                                                                          GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACYlJREFUeNrsmotzGtcVxgUsCIQk
                                                                                                                                                                          EMjW27EtxXabNG3SdtKZ/vd9Tjt9OGna2KoVO5Is64EEQuL92N7t/E7m6+2CwKmSTFtmzgDL3XvP
                                                                                                                                                                          +c77LImZt3slRlwPZ/5HXokp1kWUhOLuDaEh9F8NZGJCwAJHs47mHGUdpWLujcDqOWo6ajvqOxpw
                                                                                                                                                                          PfyOyx7+J4FLCmCLju442nBUBryE3B8C1JWjE0dnfL4GyJ5Y4bcJVJzX+J4Sfh3gUoBTdHTX0TuO
                                                                                                                                                                          dhy962iN3wwwYyiyrpqjfUevHb3h8wHXO6wJvwWwUoAVGUHO8xrzlAae0puEz8QI0CKXXAeoJ44e
                                                                                                                                                                          O3roaNXRPOtajroCcppD646qAPeZo6eOvsAKr1nzTYCnHpOHlpChxPWkeErE77Gjc0Ac6yVBDJBp
                                                                                                                                                                          3PKHjn7u6D1AzCNwBNglLlln/V1cOFqzzPdN9omurzj6m6NXWN9tg2fWVeDsTTwlAu0e/GXFUyJ5
                                                                                                                                                                          XjrahV6h/M4o8IKYAyPhtxx96OinHJRCE5HrHaGdLx1dwOAm8W8FkCPGFrDYAgBmAL2FlsNbdM8A
                                                                                                                                                                          63rk6ANH34PHJcJPVtwxAJyHhKM13Pk5MseCF8QcWGCTx4AwC1CRy/1B3M5M2pgsAdhDAHsAkAVA
                                                                                                                                                                          vUsISE1RBr3tKwVAkQwfE24KANCF93Msf0m8oojC0+zzOeu6vqJ9i0uzyX00NIc7Rhv8ytEfCfxN
                                                                                                                                                                          NhsAwgVJILLWF2jrEQCu4J4VgO5LUrnNV4gHZfgcAXBKiDnGc7rwtwO/Ftdn+K0hHvIvGTfw3DQD
                                                                                                                                                                          4mXekwj9At8/IsD3hbEZALSM1JLk8BJrG/D5ShR024mhBQ97KL8GD4eAWIOvIiHoCr62APKCWHeC
                                                                                                                                                                          u3YUvMALpkWCe1GCpxWyGdwxPyY+afpvw3iT3xooI/MN1HRJvKWLJ5wAxAmAtYWHFtdfo/BN3HoT
                                                                                                                                                                          z3vNWksW/8y2gRdMdwik6xycZpNtmKgC4iR9ahIAA1FAXwrOxA1u9nW7gRRKtvIpi4xapyUE5C3W
                                                                                                                                                                          BqyNYvL7gLZM+DklA4eBuM4ypcdHFLx5Di9TmmxxaFy7MvCsSIvOuP7Vqne/+5iJ2Wsa0FLefgkJ
                                                                                                                                                                          C6HXBvqxfoHsn+a+COQf4GV3MJyuharAi2/zbKA1Tk9qu6xYorUrHTazIJqQotPSvgbZJNfzpP2U
                                                                                                                                                                          CNXxet1pXNP4tzNbAJSFkiK4XxJpeDkT2RPgsQiv5j1fxbg+AXSfcqMEOG0C6jEbr4tJZ7ivye+W
                                                                                                                                                                          bVPc/4DDuvx2CMNZaqUHxNIMgDVwhSMycGdCy0uwR5mQkkXZFtRXhN+m8NJg/4TnAWr1Q3i2OGn3
                                                                                                                                                                          fAVcD6b/grBl3i8pQT5lXVQP/YT6qMwBdTLup6xPE1it3Yni4p+gOpb7Y8AtcvaxZO5dkkrbm7yE
                                                                                                                                                                          Mf1xUmLUtiS5S2SpE34WuTeypj/Dyzl7pbnfWrCeeEiX71fgc2WWGkiMukbb+2za5OADes5rBOwI
                                                                                                                                                                          iHnpCVMwkRErtkMPqAWbotWAvSoU17939ExKnhkRpguQZgnmmnMSPuYBrAXfR2TSNc6ZhZdDlFTn
                                                                                                                                                                          2pK4Y8D1M3i+kLDR1fgYeAG+LfXYkBvabGamalrKkYULWKClf7O0Nd6H7GG/3eG3OQSNlPJLLKEC
                                                                                                                                                                          PzkEWeasGkLYkCCDwOu8Z9jXFDkELJVliIx91m8I3cel0xjNZ6y9QvbOuALYn+SqmwzEOp4j1BqC
                                                                                                                                                                          reAmq16wzXkZNIeQj3HlFP3uJzB6htXcA5BVhMpw7htp83LssQ1g5rYbKETnbGFMBl1G6T8iZpeR
                                                                                                                                                                          KYVyyoAYem3XzDjgxtVWXTT/EnN/FyYWxOJ6Ems6krEKJIRtYluDff4OaDni0c/Y9w73pFhbI15e
                                                                                                                                                                          sXbFG3MNcNuhdDSjSpY8ynnIPklp+Jcl3PhZ+N86h2nBq+G6Vb4baBWu5WAgKXViCZdYh/kTrHcf
                                                                                                                                                                          pu4xkfmYdTkpUwrc1xeXz6GclFeWNCcorq1cqUlFMQDEDaxvB4XuERevNcsHE6b7pJfF0jCdlrbl
                                                                                                                                                                          CJfbB6QPsJpQhqNFBG7SB+4J0Pdx4y2AMuuuYklmgYEA2sKqk1I33gRanz2fSTtY4bcnWPy2FMSL
                                                                                                                                                                          yJqYxlWtRrLWpSNm/oC2xGZ1Ufr/BXHL+r05qZVSInSNdVbblelWNjmn7yliCUVsI8gA4W3ElRVr
                                                                                                                                                                          vqldsxrvgOGqFehZksmmjNPSUuxPBZz1qu+wcYvv70st1weAp9AZ99awmmGM1ttk1GsYz0lZkMLS
                                                                                                                                                                          bJS1hwsFgJZEgRFovyZGLmIps+wxDjwrvU68vrvEdX02MvJR5yTA2Rjd6hgrP3awqHOE26Uq15Im
                                                                                                                                                                          HDNoTEv9l5T3gdR+eyQQK5yL8uTMBqsv4GmB+BTcAJzFuC5KtzBSlvImkG4mtv0LJmiaF2XcNM8h
                                                                                                                                                                          JZjtANYzYtal9J7jxtoLZMRlsbqW1EsBIaEok9t9ru8C7DNc7RRgX+AJ5TGtmp2fkZ47T8ixAccm
                                                                                                                                                                          a08JJ6feGGoii7M6KMPmK9LsdqmtPpeRS5vfR+01lF52G7oEuAvcexWtfx+r3QKoNufUucfG920s
                                                                                                                                                                          1UqV7gjgktIpbKCUsmTSJ4zUFpDlE9rNV5JRw0mA04fMlvksew0RNArev0PbtTGzOpv1N7GqIuXH
                                                                                                                                                                          ewBxJa4xgPlHCHlB1oss7LfEtnNxoVA6glEPgczSSoBjxe06hXxZHhmeEwasmzmOGzgEE2SgM9zk
                                                                                                                                                                          EGvIw2hF3OXNiGmGWWwPKznAte3J14cIUfHKjUCmxUUEeikjrGbM+D68YQhqjzE/ovCdIQzlvYl1
                                                                                                                                                                          VB38Bms7kFAyNsaF0qNaY13FRTpYnWmricAXfB5IqzOUJr/HvWd8LnpdRIn7Z4l5WbHOpgwfviQT
                                                                                                                                                                          tmKetMedORBL7Mn43x5dWjdwDR0SP60FPBTQwnHAhdIcV6UzqOLz597I24acfU8jcXvUub9CUF5G
                                                                                                                                                                          CauQjtptmGiBuYbm/8r3zgjQ4s5soNhjkVf/43IOOOfEsi84qyLGEE7yQFqr6g4H2BOgpgfQKNcY
                                                                                                                                                                          tccllrQrmfIRFqB/R7jg3qeAdwkINu/vT3DmNfc2ZLC5hGJ6rLXhpP056IL9G2KhEz3csPJjHmEW
                                                                                                                                                                          JcZVJ5zI3rTHgJiyIQ+u1yTx9ND+c7L1iTcP68fwMOrMKu8FiZP2J5smllyXfXtxz08n/dNNwitO
                                                                                                                                                                          h96G0zw0idvDil/761iJ97QnlMVOP56FU5zZl4lHSvrt0Asz4QT73wjcqGvTPq4bt0fC6121FwzH
                                                                                                                                                                          xM63OXPU7+FbyjXxYbf5StyWUP9/fYdf/xBgAC9n6lG6sC1xAAAAAElFTkSuQmCC"
                                                transform="matrix(0.8485 0 0 0.8485 198.1667 -130.2727)">
                                            </image>
                                            <g>
                                                <g class="st16">
                                                    <g>
                                                        <path class="st17"
                                                            d="M217.6-124.1c-3.3-2.1-5.9-3-8-3c-1.9,0-3.4,0.4-4.5,1.3c-1.2,0.9-1.8,2.3-1.8,4h1.9v1.9h-2v14.3H201
                                                                                                                                                                        v-14.3h-2v-1.9h2c0-2.4,0.9-4.2,2.5-5.6c1.6-1.3,3.6-1.9,6.1-1.9c1.6,0,3.1,0.4,4.7,1c1.1,0.5,2.5,1.3,4.4,2.5L217.6-124.1z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path class="st17"
                                                            d="M217.5-119.8v14.1h-2.2v-7.3c0-0.9-0.7-1.8-1.5-1.8c-0.7,0-1.5,0.7-2.2,2.3c-0.8,1.8-1.4,2.8-1.6,3.1
                                                                                                                                                                        c-0.8,1.2-1.8,1.8-3,1.8c-0.6,0-1.4-0.3-2.4-1v-2.3c0.9,0.8,1.5,1.1,2.1,1.1c0.6,0,1.3-0.5,1.9-1.7c0.6-1,0.9-1.9,0.9-2.6
                                                                                                                                                                        c0-2.3-1.3-4.3-4.1-5.8h-1.9v-1.9h15.7v1.9H217.5z M215.3-119.8h-6.4c0.6,0.5,1.1,1.1,1.5,1.8c0.5,0.8,0.8,1.5,0.9,2.3
                                                                                                                                                                        c0.7-0.7,1.4-1.2,2.1-1.2c0.8,0,1.4,0.4,1.8,1.1V-119.8z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path class="st17"
                                                            d="M221.9-105.5c-1.6-1.7-2.4-3.7-2.4-6.2c0-1.5,0.5-3,1.3-4.5c0.5-0.9,1.5-2.1,2.8-3.6h-5.4v-1.9h9.3v1.9
                                                                                                                                                                        c-1.6,0.6-2.9,1.7-4.1,3.2c-1.3,1.6-1.9,3.1-1.9,4.6c0,3.8,1.6,5.6,4.6,5.6c0.4,0,0.8-0.2,1.6-0.8v2.4c-0.6,0.3-1.2,0.4-1.8,0.4
                                                                                                                                                                        C224.1-104.5,222.6-104.8,221.9-105.5z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path class="st17"
                                                            d="M242.1-119.8v14.3h-2.2c0-0.5,0-1,0-1.7c0-0.7,0.1-1.1,0.1-1.5c0-3.4-0.9-4.9-2.4-4.9
                                                                                                                                                                        c-0.5,0-1,0.3-1.4,0.9c-0.4,0.5-0.6,1.1-0.7,1.9H233c0-0.8-0.3-1.5-0.7-2c-0.4-0.6-1-0.9-1.6-0.9c-0.8,0-1.3,0.3-1.7,0.9
                                                                                                                                                                        c-0.4,0.5-0.6,1.2-0.6,2c0,1.6,1,2.5,3,2.5c0.2,0,0.4,0,0.9-0.1l-0.7,2.2c-0.4,0-0.7,0.1-0.9,0.1c-1.4,0-2.6-0.5-3.5-1.4
                                                                                                                                                                        c-0.9-0.9-1.3-2.1-1.3-3.5c0-2.9,1.9-4.9,4.8-4.9c1.4,0,2.6,0.8,3.5,2.3c1-1.5,2.1-2.3,3.3-2.3c0.9,0,1.6,0.6,2.2,1.7v-5.5
                                                                                                                                                                        h-15.4v-1.9h19.6v1.9H242.1z">
                                                        </path>
                                                    </g>
                                                    <g>
                                                        <path class="st17"
                                                            d="M246.6-119.8v12.2c0.3,0,0.9,0,0.9,0c1.4,0.1,2.9-0.3,4.6-1.2c1.8-1,2.7-2.1,2.7-3.5
                                                                                                                                                                        c0-1.6-0.7-2.3-2.2-2.3c-0.4,0-1.1,0.3-2.4,1l-0.9-2c1.2-0.9,2.6-1.2,4.1-1.2c1.2,0,2.1,0.4,2.8,1.3c0.6,0.8,0.9,1.8,0.9,3
                                                                                                                                                                        c0,1.7-0.8,3.2-2.3,4.4c-1.3,1.1-2.9,1.8-4.6,2.2c-1.2,0.3-3.1,0.4-5.7,0.4v-14.3h-1.5v-1.9h11.3l0-0.3c0-1-0.4-1.8-1.3-2.5
                                                                                                                                                                        c-0.8-0.6-1.7-0.9-2.8-0.9c-1.3,0-3.1,0.6-5.6,2l-0.7-1.7c2.4-1.5,4.5-2.2,6.5-2.2c1.7,0,3.1,0.6,4.2,1.7c1.1,1,1.8,2.3,1.8,3.9
                                                                                                                                                                        h2.1v1.9H246.6z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </a>
                                </g>
                                <g id="khulna">
                                    <a href="{{ route('subcategory-page', 'খুলনা') }}" xlink:href="">
                                        <path class="st3"
                                            d="M25.8,164.2c0,0-0.9-4.1-0.9-4.6s0.4-2.5,0.4-2.5l-1.4-1.9c0,0-0.6-2-1-2.4c-0.4-0.4-1.4-3-1.4-3l0.6-1.1
                                                                                                                                                                      l-2.6-1.6c0,0,0.1-1.2,0.6-1.4s1.2-0.4,1.6-0.6c0.4-0.2,1.4-3.2,1.4-3.2s-0.6-2.4-0.6-2.9s-0.1-1.6,0-2.1c0.1-0.5,0.6-3.4,0.8-3.8
                                                                                                                                                                      c0.2-0.4-0.4-2.4-0.4-2.4s-1.5-0.6-1.5-1.2c0-0.6,0.2-1.2,0.9-2.1c0.7-0.9,0.6-0.9,0.6-0.9l1.2-2.8l-0.1-1.9c0,0-0.9-1.1-1.2-1.4
                                                                                                                                                                      c-0.3-0.3-3-1.1-3-1.1s-1-1.9-1.4-2.2c-0.4-0.3-0.9-2.2-0.9-2.2l-2.4-3.1l-2-1.4l-1.8-1l-0.8-3.8L9,103.4l-2.5-0.5
                                                                                                                                                                      c0,0-1.4-0.5-1.4-1s-0.2-2.8-0.5-3.2s-0.8-2-1-2.5S2.5,95,2.5,95s-1-1-1-1.4c0-0.4,0.4-1.2-0.1-1.5s-1.5-1-2.1-1.2
                                                                                                                                                                      c-0.6-0.2-3.2-1-3.2-1l-0.8-3c0,0,0.4-1.1,0.8-1.1S-2.5,86-2.5,86H-1c0,0,1-0.6,1.2-1.5c0.2-0.9,0.4-2.1,0.4-2.1h1.6l1.5-1.2
                                                                                                                                                                      l1.1-2.4l-1-1.6l-1.5,0.4l-1.6,0.5l-1.6,1.4c0,0-0.2,0.9-0.8,1c-0.6,0.1-1.5,0.6-2-0.1s-1.2-1-1.1-2.1c0.1-1.1-0.1-1.6,0.1-2.1
                                                                                                                                                                      s0.1-2.6,0.1-2.6s-0.1-1-0.6-1s-1.5-0.1-1.9-0.1c-0.4,0-1.5,0-1.5,0h-1l-1.2-1.8l0.9-1.4l1.1-1.6v-1.4l-2.6-1.6l-1.5-3
                                                                                                                                                                      c0,0-1-3-1-3.5S-14,55.3-14,55c0-0.3,0.5-1.2,0.5-1.2l2.2,1.2l0.2-2.5l-0.6-2.1l-1.2-6.1c0,0-1.8-2.9-1.9-3.4s-1.9-2.9-1.9-2.9
                                                                                                                                                                      l-3.2-0.5c0,0-1.4-0.9-1.8-0.9c-0.4,0-0.9-0.1-1.2,0.1c-0.3,0.2-1.5,1.1-1.5,1.1s-0.6,1.4-1.1,1.4s-1.9-1.8-1.8-2.1
                                                                                                                                                                      c0.1-0.3,0.2-1.5,0.8-1.5c0.6,0,0.2-1.4,1.9-1c1.7,0.4,2-0.9,2-0.9l-2-1.9l-1.5-1.2c0,0,0.1-1.6,0.1-2.1s-1.2-2.6-1.2-2.6h-2
                                                                                                                                                                      l-0.2-1.8l-1.2-2l-1.9-2l-0.8-2l-1.9-2.4l-2.6-1c0,0-1.2,0.1-1.6,0.1c-0.4,0-2.1,0.6-2.5,0.6c-0.4,0-2.6-0.2-2.6-0.2s-2.2-3-2.6-3.1
                                                                                                                                                                      c-0.4-0.1-1.5-3-1.5-3l0.1-2.6c0,0,0.9-3.1,1.6-4.2c0.7-1.1,1.8-4,1.8-4s2.1-2.9,2.2-3.8c0.1-0.9,0.2-2.4,0.4-3c0.2-0.6,0-2.2,0-2.6
                                                                                                                                                                      c0-0.4-0.2-3-0.2-3l-3-1.5l-3.8-2.1l-5,0.4l-7.4,0.6l-5.1-0.8l-3.6-0.6l-3.1-2.9c0,0-2.5-2.1-2.9-2.2c-0.4-0.1-1.8-0.8-1.8-0.8
                                                                                                                                                                      l-0.5-1.2v-5.1l-0.6-2.6l-4.1-6.1c0,0-1.8-2.4-2.1-2.5c-0.3-0.1-2.2-1.9-2.2-1.9l-1.9-0.5l-2-0.6l-1.5,0.4l-0.8,1.2c0,0-0.4,0-0.9,0
                                                                                                                                                                      l0.5-2.9c0.8-0.4,0.6-0.1,1.2-0.1s1.3-0.2,1.6-0.4s0,0,0.1-0.2c0.1-0.3,0.8,0,1.1-0.1c0.3-0.1,0.9,0,1.2,0s0.9,0.2,1.6,0.2
                                                                                                                                                                      s0.7,0.3,0.7,0.3l0.6,0.8c0,0,1.2,1,1.4,1.3c0.2,0.3,0.2-0.6,0.1-0.8c0-0.2-0.1-0.7-0.2-1.1c0-0.4-0.2-0.4-0.4-0.8
                                                                                                                                                                      c-0.2-0.4-0.1-0.4-0.4-0.6s-0.4-0.2-0.6-0.2s-1.1-0.1-2-0.4c-0.9-0.3,0,0-0.1-0.2c-0.1-0.2-0.3-0.2-0.7-0.5
                                                                                                                                                                      c-0.4-0.3-0.4-0.1-0.9-0.1s-0.7,0-1,0s-0.8,0.2-0.9,0.4c0,0.2-0.3,0.3-0.6,0.4c-0.3,0-0.2,0.6-0.2,0.6h-0.7c0,0-1.2,0-1.8,0
                                                                                                                                                                      c-0.6,0-0.4,0.2-0.7,0.2c-0.3,0-0.4,0.9-0.4,0.9s0,0.6,0,0.8s0.4,0,0.4,0l-2,1.4l1.5,1.1c-0.4,0-1.6-0.8-1.6-0.8l-1.5,1.6l-1.5,2.1
                                                                                                                                                                      l-1.6-0.2c0,0-1,0-1.9-0.2c-0.9-0.2-2.9-0.5-3.4-0.8s-3.2-1.5-3.2-1.5l-1.6-1.9l-0.8-2.5l-1-1.8l-1.9-1.7l-2.5-1l-0.2,3.2l-0.8,1.8
                                                                                                                                                                      v4.2l0.2,2.5l3.5,2.8l-0.5,1.2l2.2,0.5v2.2v1.8l-2.2,1l0.5,4.8c0,0,0,0.8,0,1.5s1,2.8,1,2.8v1c0,0-0.2,1-1.2,1c-1,0-2.1,0-2.2,0
                                                                                                                                                                      c0,0-0.1,0.2-0.8,1.2c-1,1.4-2.2,3.2-2.2,3.2l-1,2c0,0,0,0.2-1.2,0.5s-4.8-0.2-4.8-0.2l-1.8-0.8l-1.8,1l0.8,7l-1.8,1.5l-1,1.5
                                                                                                                                                                      l-0.8,2l0.5,3.5v2.2l-0.8,2.2c0,0,0,1.8,0,2.8s-1,4.5-1,4.5l1.8,1.2l1,2.2l-0.8,2.8l1.5,2.5l6.2-0.2v4.5l2,3.8l5.2,2.8l3,2.2
                                                                                                                                                                      l0.2,1.8l1.8-0.5c0,0,0-0.5,0.8-1.2c0.8-0.7,2-1.8,2-1.8l1.9,0.2v1.5l0.4,0.8c0,0,0,1.6,0,2c0,0.4,0,1.6,0,1.6l-0.6,1.2l-1.1,1.8
                                                                                                                                                                      l-1.6,1.2c0,0,0.1,0.4-0.1,0.9c-0.2,0.5-0.8,1-0.8,1c-0.2,0.8-0.5,2.2-0.5,2.2v1.4l0.4,1.8l-0.4,0.6l-0.2,1.1l-0.6,0.1
                                                                                                                                                                      c0,0-0.2,0.2-0.6,0.8c-0.4,0.6-0.4,1.6-0.4,1.6l-1,1.6c0,0-1.4-0.2-1.6,0.2c-0.2,0.4-0.9,2-0.9,2c0,1.4,0,1.5,0,1.9
                                                                                                                                                                      c0,0.4-0.2,0.4,0,1c0.2,0.6-0.4-0.2,0.2,1.1c0.6,1.3,0.5,1.5,0.9,2.5c0.4,1,0.4,1,0.4,1s0.5,0.5,1,0.9c0.5,0.4,1.6,0.4,1.6,0.4
                                                                                                                                                                      l1.6,0.1c0,0,0.5-0.2,0.9,0c0.4,0.2,0.1,0.6,1.1,1c1,0.4,1.5,0.6,1.5,0.6s0.4,0.6,1.6,0.4s1.6,0.4,1.9-0.4s0.4-1.6,0.9-1.8
                                                                                                                                                                      c0.5-0.2,1.6-1.1,1.6-1.1l2,1.5l0.6,0.1c0,0,0.5,0,0.6,0.4c0.1,0.4-1.8-0.1,0.1,0.4s2.2-0.1,2.2-0.1h1.8c0,0,0.6-0.2,1.1,0.4
                                                                                                                                                                      c0.5,0.6,1.2,1.8,1.2,1.8l1.5,0.8c0,0-0.2,0.1,0.6,0c0.8-0.1,0,0.4,0.9-0.1s0.1-0.2,0.9-0.5c0.8-0.3,0.9-0.5,1.5-0.5
                                                                                                                                                                      c0.6,0,1.8,0.4,1.8,0.4l0.6,0.9l-0.1,1.6l-0.9,0.9c0,0,0.2,0.9-0.1,1c-0.3,0.1-1,1-1.4,1c-0.4,0-1.1,0.1-1.8,0.5
                                                                                                                                                                      c-0.7,0.4-1.2,0.4-1.5,1c-0.3,0.6-0.8,0.5-1.1,1.8s-0.5,1.9-0.8,2.6c-0.3,0.7-0.6,2.2-0.6,2.2s0.4,0-1.1,0.4
                                                                                                                                                                      c-1.5,0.4-2.2,1.4-2.2,1.4l-1.1,0.5l-1,0.9h-0.6l0.9,3.4c0,0,0.2,1.6,0.2,2.2c0,0.6,0.1,1.2,0,1.8c-0.1,0.6-1.2,1.4-1.2,1.4
                                                                                                                                                                      s-0.5-0.5-0.5,0.5s-0.2,1.4-0.2,2.4s-0.8,2.4-0.8,2.4l0.4,1.6l1.9,1.4c0,0,0.1,0.5,1.1,1.1c1,0.6,2.1,0.8,2.2,1.1
                                                                                                                                                                      c0.1,0.3,0.2,0.8,0.2,1.6c0,0.8-0.6,4-0.6,4s0.6,1.6,1.4,2.4s1.2,1.1,1.2,1.1l1.1,0.2h2.5c0,0,1.2,1,1.8,1c0.6,0,1.6,0.2,1.6,0.2
                                                                                                                                                                      s0.2,1.6,0,2.1s-0.2,1.5-0.6,1.9c-0.4,0.4-0.8,0.8-1,1.1c-0.2,0.3-0.1-0.2-0.2,1c-0.1,1.2-0.4,0.1-0.4,2c0,1.9,0,1.9,0,1.9
                                                                                                                                                                      s0.2,0.8-0.1,1.2s-2.5,1.5-2.5,1.5l-1,0.5l-0.6,1l-0.2,1l0.5,1.5c0,0,2.1,1.8,2.2,2.2c0.1,0.4,0.4,2.1,0.4,2.5s0.1,0.9,0,1.2
                                                                                                                                                                      s0.1,0.6-0.2,1.1s-0.4,0.5-0.4,0.5l-0.1,5.6l1.1,1.8c0,0,1.5,1.5,1.4,2c-0.1,0.5-1.2,2.2-1.2,2.2s-0.5,1.9-1.4,2.2s-1.8,0.5-1.8,1.2
                                                                                                                                                                      s-0.1,1.5,0.6,2s0.5,0.5,1.5,0.6s0.2-1.8,2.1,0.2c1.9,2,1.9,2,1.9,2l0.2,1.1v1.8v3.5l2,1.4c0,0,0.4,0.8,0.4,1.1s0,1.9-0.2,2.2
                                                                                                                                                                      c-0.2,0.3-0.8,0.6-0.9,1.1s-1,1.9-1,1.9l-0.4,0.6l-0.4,1.1l1.1,0.5c0,0,0.4-0.5,0.5,0.4c0.1,0.9,0.2,1.6,0,2s-0.5,1.1-0.5,1.1
                                                                                                                                                                      s-0.4,0.1-0.5,0.5c-0.1,0.4-0.6,1.5-0.6,2.4s0,2.4,0,2.4s1.8,0.2,2.2,0.5c0.4,0.3,1.2,0.9,1.2,0.9l1.2,1.1c0,0,1,0.6,0.8,1.1
                                                                                                                                                                      c-0.2,0.5-1,1.9-1,1.9l-1.4,0.4l-0.4,3c0,0,2.1,1.4,2.5,1.6s1.8,1.2,1.8,1.2s0.1,2.5,0.2,2.9s1.1,1.4,1.5,1.6s0.9,0.6,0.9,0.6
                                                                                                                                                                      s1.1,0.2,1.1,0.6s-0.2,1-0.2,1.5s0,1.9,0,1.9s1.4,0.4,1.6,0.8c0.2,0.4,0.2,0.4,0.2,0.4l0.1,3.4c0,0-1.5,0.1-1.8,0.5
                                                                                                                                                                      c-0.3,0.4-1.2,1.4-1.6,1.5c-0.4,0.1-0.9,1.1-0.9,1.1s-0.5,0.6-0.5,1.2s-0.1,1.4,0,1.9c0.1,0.5,0.2,1.8,0.2,1.8s0.2,1.5,0.8,1.8
                                                                                                                                                                      c0.6,0.3,2.2,2.1,2.2,2.1l1.4,2.5c0,0,0.1-0.1,0,1.4s-0.5,2.8-0.5,3.2s-0.2,2.9-0.2,2.9l0.1,6.1l-0.5,2.6c0,0-1,1.1,0,2
                                                                                                                                                                      s1.5,0.8,1.9,1.9c0.4,1.1,0.5,1.8,0.5,1.8l0.1,6.4l2.2,1.9l2.2,1.1l0.8,0.1l0.9,0.3l-1.7,1.5l-0.5,0.7l-0.3,0.6l-4.3-2l-0.9-2.4
                                                                                                                                                                      v-6.4l-0.4-1.2c0,0,0-1,0-1.6s-0.8-2-0.8-2l-1.5-0.9l-0.5-2l-1.4-0.2l-0.1,1.6c0,0-0.1,1.2-0.1,2.1s1.1,1,1.1,1s0.1,0.6,0.1,1.1
                                                                                                                                                                      s0.5,1.1,0.5,1.1l0.4,0.9l-0.5,4l-0.9,4.8l1.5,0.8l1.9,1.9l2.5,2.2l0.8,2c0,0,1.5,2.8,1.9,2.8s0.9-0.1,1.6-0.1
                                                                                                                                                                      c0.7,0,1.8-1.9,1.8-1.9l-0.4-2.2l-0.4-1.3l0.1,0.1c0,0,0.9-0.2,0.9-0.8c0-0.7-0.4-1.2,0.2-1.9c0.6-0.7,1.2-1.5,1.4-1.9
                                                                                                                                                                      c0.2-0.4-0.3,0.1,0.2-0.4s0.5-0.5,0.5-0.5l-0.9,0.2c0.6-0.5,1.4-0.8,1.4-1.1c0-0.3,0.1-1.4,0.1-1.4l1.5,0.1l0.1,1.4v1.2
                                                                                                                                                                      c0,0-0.2,1.1,0,1.6s1,1.9,1,1.9l1.9,3l0.1,1.1l0.2,2.5l-0.8,3l-0.4,1.1l-1.5,0.4c0,0-0.2,1.2-0.1,1.9c0.1,0.7,0,1.8,0.8,2.1
                                                                                                                                                                      c0.8,0.3,4.9,1.4,4.9,1.4l1.8-0.4l0.8-1.5l1.4-1.4l1-0.5l1.4-0.8l-1.4-2h-1l-0.4-1v-1.2c0,0,0.2-1.1,0.8-1.6c0.6-0.5,0.5-0.6,1-1.1
                                                                                                                                                                      s0.5-1.9,0.5-1.9s0.6-0.5,0.8-0.9s0.2-1.2,0.2-1.9s-1-2.6-1.2-3s-0.8-1.9-0.8-1.9s-0.6-0.6-0.6-1s3.1-0.1,3.1-0.1l1-4.4
                                                                                                                                                                      c0,0-0.4-2.4,0-2.8c0.4-0.4,2.2-1.9,2.2-1.9s1.5-0.9,1.9-1.1c0.4-0.2,1.1-0.6,1.1-1.1s-0.8-5.5-0.8-5.5l-0.6-2v-1.8l1.2-0.5
                                                                                                                                                                      c0,0,0.5-0.2,0.9,0c0.4,0.2,0.9,0.9,0.9,0.9l0.4,1.5c0,0,0.5,1.1,0.5,2s0.2,2.5,0.2,2.5l0.8,1.4l0.6,4.8l-1,1.6c0,0-0.1,0.8-0.5,1.2
                                                                                                                                                                      c-0.4,0.4-0.5,1.2-0.8,1.6c-0.3,0.4-0.8,12.9-0.8,12.9s1.6,1.8,2,2.2c0.4,0.4,0.8,1.2,1.1,1.2c0.3,0,2.6-1.4,3.1-1.4
                                                                                                                                                                      s1.8-1.5,1.8-1.5l1.2-3.1c0,0,1.2,0.8,1.8-0.6c0.6-1.4,0.4-0.9,0.8-2c0.4-1.1,0.6-2,0.6-2.8s0-2.9-0.1-3.4c-0.1-0.5-1.1-1.9-1.2-2.4
                                                                                                                                                                      s-0.5-2.4-0.1-2.6c0.4-0.2,0.8-0.8,1.2-1c0.4-0.2-0.2-0.4,0.8-0.8s1.6-1.2,1.6-1.6s-0.6-0.9,0-0.9c0.6,0,2.5,0,2.5,0l0.8-2l-0.5-4.1
                                                                                                                                                                      l0.6-1.1l1.4-1.5l-0.8-1.9l-2.1-2.2c0,0-1.4-1.2-1.4-1.6s0.2-2,0.2-2s1.9-1.8,2.2-2.4s1.1-1.9,1.1-2.2s0-1.8,0-2.1s0.4-0.9-0.1-1.9
                                                                                                                                                                      s-1.2-2.5-1.2-2.5s-0.8,0.2-0.8-0.2s-0.5-2.6-0.5-2.6l-0.8,1.6l-0.4,1.2l-0.4,0.9l-0.8-0.9c0,0-0.6-2.1-0.6-2.6s0.2-2,0.2-2
                                                                                                                                                                      l-0.2-1.6c0,0,1.2-1.1,1.2-1.6s-1-2.4-1.1-2.8c-0.1-0.4-0.5-1.9-0.5-1.9s-1.1-0.8-1.1-1.4s-0.4-0.9,0.1-2s0.9-1.8,0.9-1.8l0.8-1.8
                                                                                                                                                                      l0.2-2.1v-1.3l0.5-0.5h0.5c0,0,0.6-0.1,0.8,0.2s0.6,1.4,0.6,1.4s0.4,0.5,0.4,1s0.1,0.4,0,1.6c-0.1,1.2-0.2,1.9-0.4,2.4
                                                                                                                                                                      c-0.2,0.5-0.2,2.9-0.2,3.8s0,2.8,0,3.2s0.1,2,0.1,2l1.5,0.6c0,0-0.2,1.8,0.1,2c0.3,0.2,1.1,1.2,1.2,1.6c0.1,0.4,0.6-0.1,0.6,1.4
                                                                                                                                                                      s0.1,2.9,0.1,2.9s1.4,0.9,1.4,1.2s0.2,0.9,0.4,1.5c0.2,0.6,0,0.6,0.1,1.1c0.1,0.5-0.9,3.1-0.9,3.5s0.1,1-0.5,1.6
                                                                                                                                                                      c-0.6,0.6-0.6-0.8-0.6,0.6S-24,232-24,232l1.2,2l2.1-0.5c0,0,0.6-1,0.6-1.5s0-1.1,0.1-2c0.1-0.9,0.4-2.1,0.5-2.8
                                                                                                                                                                      c0.1-0.7,0.2-3.1,0.2-3.1s0.8-2.5,0.8-3s-0.1-0.4,0.4-1.8s0.5-3.2,0.5-3.8s0.2-1.8-0.1-2.2c-0.3-0.4-2-2-2-2l-1-0.9l0.1-5.6
                                                                                                                                                                      c0,0,3.1-2.6,3.4-3.4s0.5-2,0.5-2l-0.5-1.9c0,0-0.2-0.9,0-1.2c0.2-0.3,0.6-1.1,0.8-1.5s0.9-1.6,0.9-1.6l0.5-1.2c0,0,0-0.9,0.6-0.9
                                                                                                                                                                      c0.6,0,1.9,0.8,1.9,0.8s-0.6,1.1-0.6,2s-0.2,2.4-0.2,2.4s0,2,0,2.4s-0.1,1.8-0.1,1.8s0.1,1.8-0.4,1.9s-1.4,0.8-1.4,0.8s-1,1.8-1.5,2
                                                                                                                                                                      s-1-0.2-1.1,0.5c-0.1,0.7,0.1,0.8-0.1,1.4s-0.1,2.4-0.1,2.4s0.6,0.8,0.9,1.2s0.8,1.2,0.8,1.2s0.4,0.8,0.9,0.8s1.2,0.6,1.2,0.6
                                                                                                                                                                      l0.6,0.6c0,0-0.2,0.6-0.2,1s0,0.4,0,0.4l0.6,2.4v1l-0.8,3l-0.4,0.8c0,0-0.5,1.1-0.9,1.5c-0.4,0.4-1.1,1.1-1.1,1.1l-0.2,0.8l-1.1,0.9
                                                                                                                                                                      l0.2,1v1.8l0.1,2.2l-0.2,1.4l-0.6,1.1c0,0-0.6-0.2-0.6,0.5s0,2.2,0,2.2s-0.4,0.6,0,1.2c0.4,0.6,0.4,0.6,0.4,0.6s0.5,0.5,0.6,1.6
                                                                                                                                                                      c0.1,1.1,0,4.4,0,4.4v2.9l-0.9,1.4l-2.9,2.6c0,0-0.8,0.5-1.1,1.6c-0.3,1.1-1,1.9-1,2.6s0.2,1.9,0.2,1.9l0.9,1.9c0,0,0.2,0.1,0.4,0.6
                                                                                                                                                                      s0.5,1.9,0.5,2.4s-0.5,0.8-0.4,1.8c0.1,1,0.2,1.8,0.4,2.4s-0.4,1,0.6,1.9s1.4,2,2,2.5c0.6,0.5,1.6,1.1,2,1.1c0.4,0,1.6-0.1,1.6-0.1
                                                                                                                                                                      s0.8,0,0.8-0.4s0.6-1,0.8-1.4c0.2-0.4,0.2-0.1,0.2-1s-0.1-2-0.1-2l-1.5-2.4c0,0-0.2-0.4-0.1-0.8c0.1-0.4,0.1-1.2,0.9-1.2
                                                                                                                                                                      s1.8,0,1.8,0l1,0.8l1.8,0.5l1.2,0.4h5.1l1.1-1.1v-1.9c0,0,0-1.2-0.2-1.6c-0.2-0.4-3-2.2-3-2.2l-3.4-2.1L-11,253l-0.9-2.2
                                                                                                                                                                      c0,0-0.5-2.8-0.2-3.1s0.8-1.5,1.1-1.8c0.3-0.3,1.1-1.4,1.1-1.4l0.4-0.9c0,0,0.2-0.5,1-0.1c0.8,0.4,0.9,0.1,1.5,0.8
                                                                                                                                                                      c0.6,0.7,0.5,0.1,0.6,0.6c0.1,0.5,0.1,2,0.1,2l-0.7,0.6c0,0-0.5,0.4-0.5,0.9s0,2,0,2s0.8,2.1,1.1,2.2c0.3,0.1,0.9,0.5,1.4,0.9
                                                                                                                                                                      s-0.2,0.6,1,1s1.6,0.5,2.5,0.5c0.9,0,0.5,0.1,0.9,0c0.4-0.1-0.1-0.1,0.4-0.1s1.4-0.2,1.4-0.2s1.1,0,1.4-0.4s0.9-1.1,0.9-1.1l0.5-0.1
                                                                                                                                                                      c0,0,1,1.2,1.5,1.5s-1.4,0.8,0.8,0.8s2.5,0.4,3.2,0c0.7-0.4,2-0.2,2.1-0.8c0.1-0.6,0.8-1.4,0.9-1.9c0.1-0.5,0.2-1.6,0.6-1.9
                                                                                                                                                                      s1-0.8,2.2-1.1s2.8-0.8,3.1-1c0.3-0.2,0.9-1,0.9-1l0.4-3.4l-1.4-2.4l-2.4-1.8c0,0-0.4-3.6-0.4-4s1-6.2,1-6.2s-0.1-2.8-0.6-2.8
                                                                                                                                                                      s-3.4-1-3.4-1l-1.8-0.5l-1.1-0.2l-0.1-1.5c0,0-0.4-0.5,0-0.9c0.4-0.4,1.2-0.8,1.2-0.8l1.8,0.9c0,0,1.4,0.9,2.1,0.4s3.5-1,3.5-1.5
                                                                                                                                                                      s0.5-3.8,0.5-3.8s0.6-7-1.1-9.9c0,0-4.9-8.2-2.4-13.9l4-5.9l1.2-1.6l0.2-1.8c0,0,0.1-1.1-0.5-1.5c-0.6-0.4-1.6-1.5-1.6-1.5
                                                                                                                                                                      s-0.2-1.1-0.1-1.5c0.1-0.4,0.6-0.9,1-1c0.4-0.1,1-0.2,1-0.2l4.2-2.9c0,0,0.2-2.4,0.2-2.9s-0.1-2.4-0.1-2.4s-1.9-0.8-2.2-0.8
                                                                                                                                                                      s-2.8,0-2.8,0s-0.5-3.2-0.2-3.6s2.5-0.4,2.5-0.4s1.6,0,2,0c0.4,0,0.5,0,1,0s1.4,0.4,1.4-0.2S25.8,164.2,25.8,164.2z">
                                        </path>
                                        <g>
                                            <g class="st18">
                                                <image style="overflow:visible;" width="100" height="84"
                                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGUAAABVCAYAAABQBipiAAAACXBIWXMAAAsSAAALEgHS3X78AAAA
                                                                                                                                                                            GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAvJJREFUeNrsmgtP01AYhlfWCSig
                                                                                                                                                                            eJmKN8T//7eMCfGGdOtl7TxL3pO8OXQIRpN2eZ7kTbeuJN15+p3bmEwAAAAAAAAAAAAAAAAAAAAA
                                                                                                                                                                            AAAAAAAAAABGQ7Yj97/te6yTI1L+4z1nyetsi5B1j5w1Uv79/e5ZpjqmYmLjdzq2yftByxmTlNj4
                                                                                                                                                                            ecgs5IEyMzmRTlmFNHZsLYOVk41IyJ6E7Ic8DDkOOQo5lJwobW1C6pBlSGnH2kS1Vj1I+Qshm4o4
                                                                                                                                                                            kIynIc91PNH5mUlpTUgR8ku5CrkOWeizWnIGJSYbkZBDCXgRcqa8CjlV5fRJWUjCj5DvId9Cvur4
                                                                                                                                                                            U5+VQxOTj0jI45B5yLuQD8prVcthj5RG1XAtARsRlyFfQj7bd18PbXzJRybkfcjHkAu9fmnd19Qq
                                                                                                                                                                            P44plYnZVMszdX/7uraTwFUyM0PKPYRcKOdWJbHr2kue/NYG+yNdd6DrWhtvCr0ezKA/HVGX9cmE
                                                                                                                                                                            nOmpP9JTn9vfZj2LyHSKXNoEoND7RtfQfd1RyIW6rfca3J/omqlVRZdUSBRQJbOwhc61yWJ0MJOe
                                                                                                                                                                            fOBC3qoyzvV6rjFhJgl1TxU0Ol/Z+uRaudIs7FLHwhaVa6Tc3Drpm/ZuquSNBvRTdVWdGrqzWVYt
                                                                                                                                                                            AZXJWNiUOCauVXyKXDAlvikkUze0WZU/UuPP1U3N9f5AjVZYI9YmYWkLwqV1V1FKYe89hS0iOxuD
                                                                                                                                                                            qJREyonGjGOd6/SEl2qwKtk2WSYN7ec9laWxrKiU26slt0XgSk95Y9PYOhGR7muVyf5WbRJWtt/V
                                                                                                                                                                            JrMyFo89+CZiqX5/opX4xIRUSeOX1vi17WV54/dJ8G5qcD+E5QMREhu9UMWsJCSzz5rk2Cegm9z8
                                                                                                                                                                            7aT7Q+OzdX9L1xV3gfdtQej7WO09BGyTMIqfhbOB3ENcvMUfrKa2uZguDu8qYDQShijFKyYzSel4
                                                                                                                                                                            s5MChizF72XbP0HspIA+piO4x50WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9+G3AAMAdo9nS2/5
                                                                                                                                                                            hIAAAAAASUVORK5CYII="
                                                    transform="matrix(1 0 0 1 -89.9167 35.8333)">
                                                </image>
                                            </g>
                                            <g>
                                                <path class="st17"
                                                    d="M-52.9,51.1c0.4,0.1,0.9,0.1,1.3,0.2c3.8,0.8,6.5,3,7.8,6.7c1,2.8,0.8,5.6-0.6,8.2
                                                                                                                                                                    c-2.9,5.7-5.9,11.5-8.8,17.2c-0.1,0.1-0.1,0.2-0.2,0.4c-0.2-0.4-0.4-0.7-0.6-1.1c-1.8-3.5-3.6-6.9-5.3-10.4c-1-2-2.1-4-3.1-6.1
                                                                                                                                                                    c-0.7-1.3-1.1-2.7-1.2-4.2c-0.1-2.6,0.5-4.9,2.1-6.9c1.6-2.1,3.8-3.4,6.5-3.8c0.4-0.1,0.9-0.1,1.3-0.2
                                                                                                                                                                    C-53.4,51.1-53.1,51.1-52.9,51.1z M-47.7,61.3c0-3.2-2.5-5.7-5.7-5.6c-3.1,0-5.6,2.6-5.6,5.7c0,3.1,2.6,5.6,5.8,5.6
                                                                                                                                                                    C-50.2,67-47.7,64.4-47.7,61.3z">
                                                </path>
                                                <path class="st19"
                                                    d="M-43.7,58c-1.3-3.7-4-5.9-7.8-6.7c-0.4-0.1-0.9-0.1-1.3-0.2c-0.3,0-0.4,0-0.6,0c-0.4,0.1,0.5,0,0.1,0.1
                                                                                                                                                                    l0,4.6c0.4-0.1-0.3,0,0.2,0l-0.2,0c3.2,0,5.7,2.5,5.7,5.6l0,0c0,3.1-2.6,5.7-5.7,5.7c-0.3,0,0.3,0,0,0l0,16.8
                                                                                                                                                                    c0.1-0.2,0.2-0.3,0.2-0.4c2.9-5.7,5.9-11.5,8.8-17.2C-43,63.5-42.7,60.8-43.7,58z">
                                                </path>
                                            </g>
                                        </g>
                                        <g class="st16">
                                            <image style="overflow:visible;opacity:0.75;" width="72" height="35"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEkAAAAlCAYAAAAORcT9AAAACXBIWXMAAAv+AAAL/gFBkBnlAAAA
                                                                                                                                                                            GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAB/ZJREFUeNrsmotTE1cUxjdkISG8
                                                                                                                                                                            34gKWlFsO33YWtvp39/pTB/aWodqSwERkAhCgEBIspts7535HedzmyCPdlqxO3NmN7t3z97znXO+
                                                                                                                                                                            c+6FTND6yDhJTnHfnl2EIznOsA4RG9yUcen7TbnfcUGASlL2JWqUNzLnpNdJN7/rTo6cNJzkEX8/
                                                                                                                                                                            cnLopMbvAu+EFwCkJvZVsNFfN80wfx5yMuvkspMuJyUna4Ax4WQSIMtOnjkpOsk6mXYyBcDZtzyK
                                                                                                                                                                            Yie7TlacPHWy5++HDOgCiM+dfOakB4B+BtXbiAdih/s/8a5/546TMcB+m0HyAbHq5FsAOvDAhcIr
                                                                                                                                                                            HoCrTj5wMuhkWMLvfSdzTvqIsAxKPIAzvDMFSInm8xmOdtx4Fp3KmZkWc1OubZBiPmD+ENp55Xkb
                                                                                                                                                                            3EUUDUmOdpCCkzwPuR5mTAGAe/n4IVwWn8Eom4NyY4S+KjyZnAKgLuHMrABRZUw3FBLg8Ko8b9i3
                                                                                                                                                                            QmH0SCbiFY7IRAt8sIN3PJD9jA+575XuO1l0sk6omtcyx5XYlFGjTm6kuHEDntg9IfjGs4NE+gzA
                                                                                                                                                                            H8Cna4y7jATcW3Dym5NluLepkRRhoJ/MlpNxQMhLiNYldPvgsJgxGXRsOrmPbAFcOnUa4hgzKIsU
                                                                                                                                                                            KB5ZDEzQOQ9PrMIbSZuWQ+/noI+vsaUTwOeZXwD/WiT5+98A0jpjYyXuGEI2JAf4QDcAHQJSAVD6
                                                                                                                                                                            8UAk0dYEfW/IY4zL8Fzbh4qkY8Akexg3QCTZ8xjve+c9gSuqQg+tQLLozfOt65xjzhvY6Y9L6A/k
                                                                                                                                                                            /gIBU9dISiRVlkE5w+9xrisoGhVeykkKGn81rLfg+QBgjvCOGVwkdTKSEuNw4TTXFqEx0WO9SwNA
                                                                                                                                                                            u4mOTKqEHyEJ79R5x+ZXQ0/AdSzXh9IDWiP9Kt0SlBUp7T4iXjh5DyO6IeouxntjX2LoiCjsYOwU
                                                                                                                                                                            Z+/Fm3isk4q4jLfWmPQ1J58A1ABROgGH1FI8kyfqptHZm3LSIRFclEqVOcnSI9Vxv/Y8TBFdSDhv
                                                                                                                                                                            Mpk8ETEKGAWer2PoDpM1cu4EzI8weo5IGsCYIzjnNmkZkda3ACbPHLqk61eOmcBxd3lnUGyIJd0X
                                                                                                                                                                            OFt1O1eTG6YqwSxeGqHM38DTk5B1TLo8hrsCCU2rTuMAM4euXqmeffye5HlM5AwIb6XXgjo//949
                                                                                                                                                                            J1/ihEIqAurYMEuV3WM+OdF5JpACImCczvku0WENpRlQB6CHTn6AREclpy0dRgFjEgBiUnNHSny/
                                                                                                                                                                            9GLWyJWFy8z7Ccbl0efB/5Ro6pUeKpb156QAusO4fvRlzgOSNXEjTOA6yo2kI7zio+d7J78wgT7J
                                                                                                                                                                            35DJTJGqvRjtAXoEqAW685s4IIRci1Lex0nBAdFrq4FZqbr79Dzr6MjxroFkDXAn82mcN5KsPO5y
                                                                                                                                                                            ttSx6tGErItIWSIoED4aEl7J42VvxAMKQg7jQqmQm6wFH/ANzzVfAYilWh+ONPAa6P1BHNYNMLPo
                                                                                                                                                                            mBEeDaXLPhdIO3h7AWOtaQwFtGF45gBA+6WCdABUlwB7RJVcoarZMmdQeqhVjP2OilQmGi9hoDWb
                                                                                                                                                                            1nLo8uIlYG2h9zmrd185v6CA5M678E73SUtOfuRZGc8MMTnvwQ+Z+GUm1M1zjbgotWhMeJ4H3Bfw
                                                                                                                                                                            2i73N4iyZcaPkdp19DeIghKOnGQOo9DCLqDXeL4oy5ccOkbOseB+rU+q4RXPOdt4ZA6OGmNiQ+T3
                                                                                                                                                                            ZcZEXBckJfcAtY8JXoVsO0nVCN0LAFEm5XYxKkJ0TWn8kwUcq7h3iO49AHpI2i5j2xhtQ8/fUd0S
                                                                                                                                                                            WQI85YN+Ur9DsjNSXUY5T+HlAtLgvWWiZhpQr/F7htR6BpE/JTpqsgToTHncoryCA6uA0ss8rhBF
                                                                                                                                                                            h+jewKZyav4G1LlAUqCsdS+T80U4ZQZCNNCGhSM6mOg+Y23dNUuaXuE8TFou8I2DVMPYqiu2/ucl
                                                                                                                                                                            qWocOQtYxql1JJbUWwG8W0Rp0sIJb+rC/0Jo2pbr3optkRg/RELUtriNGb+GR0uMtZJdJyL2ALOm
                                                                                                                                                                            ezapTTFbA9blbGl5BLhLAJ/l+QvZ4ojQtwtYZYpMlPqmfSdI3T8WJD1su2KODvcWIT6YImvz9D48
                                                                                                                                                                            5QH6FQ9uApL1KVs8WwHQZosVvEVBETA2ZRe0hMG25ZGXglHh+yVpLisypwAg92VNuI/+IL3yPwlI
                                                                                                                                                                            HRhmpHsPbukBnFDC3iLoOZ5cR2LOA8I1h9J9V1tMKMbIJ/zOo3cJI6pS/jdS27IN3o9aVGzbbS1R
                                                                                                                                                                            /UroX2Judl0+KUgZ6Z6vwUFXKaO6NZGR1Kzx4SJn23LYTf2pycI7btMBR3j7PpPOomdPIkS3PDJt
                                                                                                                                                                            OEwBn2deOd7ZFpDmcWTAvVKrnc/wmFTrpc0fwxNhizKayMbZEONH+PBhiy43OYYkzfsHGPNcUimW
                                                                                                                                                                            faoTka2k4IY0m00pKgHz2xJQo9Okm1W6qmxMJbIlYgbVpTr5DvljvLEtf9w7zZrJ9DZa/Fn9tM1g
                                                                                                                                                                            IptttTa6Gqk9q6RdxLT707dF0wSEnU911RVIz/qXvKzMi6RNpZVnzvN3+X9DV/YNSo3AbQ11JNVl
                                                                                                                                                                            labwEb8LdNkVCPxZOyJ8247j0q0KL9wnOhalvY9IqUVyeppnOQH3ovyXyRs5yfaQtumPOlN9yY50
                                                                                                                                                                            u9cBatv+PPwPpMx/CiRdDlgD1ynbqdqXhKTaI8Ap03UfXYRUC06YEpk210mLdsFa/y1ZvDbfBZBO
                                                                                                                                                                            oiMrnXhTGsZ3JpLOqicJ/j/eneNPAQYAqlIjWQakbmIAAAAASUVORK5CYII="
                                                transform="matrix(0.9259 0 0 0.9259 -78.6667 95.6296)">
                                            </image>
                                            <g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-62.7,99.4v16h-2.5c-2.7-2.3-6.4-4.1-11.1-5.5l-1-3.4c2,0,3.5-0.4,4.8-1c1.7-0.8,2.5-1.9,2.5-3.4
                                                                                                                                                                      c0-0.6-0.1-1.3-0.4-1.9c-0.2,0.6-0.5,1.2-0.9,1.7c-0.6,0.8-1.3,1.4-2.1,1.4c-2.1,0-3.7-1.7-3.7-3.8v-2.3h2.8c0,0.3,0,0.5,0,0.7
                                                                                                                                                                      c0,0.2-0.1,0.4-0.1,0.6c-0.1,0.4-0.1,0.8-0.1,1c0,0.7,0.7,1.2,1.6,1.2c0.8-0.7,1.2-1.8,1.2-3.5h3c0.4,0.4,0.7,1.3,1,2.7
                                                                                                                                                                      c0.3,1.2,0.4,2.2,0.4,2.8c0,1.6-0.7,3-2.1,4.1c-1,0.8-2.2,1.3-3.6,1.5c3.3,1.4,5.9,2.8,7.9,4.3V97.2h5v2.2H-62.7z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-63,123c-0.3-1.3-0.5-2-0.9-2.5c-0.2-0.3-0.8-0.9-1.5-1.6c-1.3,1.6-2.7,2.5-4,2.5c-2.5,0-3.8-1.6-3.8-4.1
                                                                                                                                                                      c0-0.8,0.4-1.5,1.1-2c0.6-0.4,1.4-0.7,2.2-0.7c1.1,0,2.3,0.4,3.4,1.1l0.6-1h2.6c-0.5,0.9-0.9,1.8-1.1,2.2
                                                                                                                                                                      c2.1,1.6,3.3,3.3,3.3,5.2L-63,123z M-70.8,118c0,0.7,0.7,1.3,1.5,1.3c0.8,0,1.7-0.7,1.9-1.5c-0.9-0.7-1.6-1-2.1-1
                                                                                                                                                                      C-70.2,116.8-70.8,117.4-70.8,118z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-43.1,99.4v16.2h-2.5c0-0.6,0-1.2,0-1.9c0.1-0.7,0.1-1.3,0.1-1.7c0-3.9-1-5.5-2.7-5.5
                                                                                                                                                                      c-0.6,0-1.2,0.3-1.6,1c-0.4,0.6-0.7,1.2-0.8,2.1h-2.8c0-1-0.3-1.7-0.8-2.3c-0.5-0.7-1.1-1-1.8-1c-0.8,0-1.5,0.3-1.9,1
                                                                                                                                                                      c-0.4,0.6-0.7,1.4-0.7,2.3c0,1.9,1.1,2.8,3.4,2.8c0.2,0,0.5,0,1.1-0.1l-0.8,2.5c-0.5,0.1-0.8,0.1-1,0.1c-1.6,0-2.9-0.5-3.9-1.6
                                                                                                                                                                      c-1-1.1-1.5-2.4-1.5-4c0-3.3,2.1-5.5,5.4-5.5c1.6,0,2.9,0.9,4,2.6c1.2-1.7,2.4-2.6,3.8-2.6c1,0,1.8,0.7,2.5,1.9v-6.2H-63v-2.2
                                                                                                                                                                      h22.1v2.2H-43.1z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-25.4,99.4v16.2h-2.5v-1.5c0-1.5-0.9-3.1-2.7-4.9c-1.8-1.7-3.5-2.6-5-2.6c-1.4,0-2.6,1.1-2.6,2.4
                                                                                                                                                                      c0,1.4,1.1,2.5,2.5,2.5c0.4,0,0.9-0.1,1.5-0.4l0.7,2.4c-0.8,0.4-1.7,0.5-2.9,0.5c-1.3,0-2.4-0.5-3.2-1.5c-0.9-1-1.3-2.1-1.3-3.4
                                                                                                                                                                      c0-1.4,0.5-2.6,1.4-3.6c1-1,2.1-1.5,3.5-1.5c3,0,5.7,1.7,8,5v-9.7h-14.6v-2.2h19v2.2H-25.4z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-19.5,99.4v16.2H-22V99.4h-2.6v-2.2h7.5v2.2H-19.5z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </a>
                                </g>
                                <g id="dhaka">
                                    <a href="{{ route('subcategory-page', 'ঢাকা') }}" xlink:href="">
                                        <path class="st3"
                                            d="M49.4-95.6l1.6-3.1l-5.3-1.9l-2.8-3.5l-2.6-4.1l-2.2-4.1v-2.5l1.7-3.5l-0.2-6.7l-4.2-2.7l-1.8-2.3l2.8-3.2
                                                                                                                                                                          l-2.6-0.4l-2.7,0.4l-2.2,1.1l-3.5,3l-3.8,2.2l-3.2-1H16l-2,2.7l-0.7,2l-1.3,2.5l-0.5,1.3L9-117.8c0,0-0.2,0.2-0.5,2.8
                                                                                                                                                                          c-0.1,1.1-0.5,1.8-1,2.2l-0.8-0.3c0,0-0.1,0.5-0.1,1.1c-0.1,0-0.1,0-0.1,0l0.2,0.9c0.2,1,1.5,2.5,1.5,2.5l1.2,2.5l0.8,1.8l1,3l2.2,4
                                                                                                                                                                          l1,4l-0.2,4.5l-3,2.5l-1.8,2.2l-1.2,2l-1.5,2.8l-0.2,2L8-74.1l0.8,1l-1,3.2c0,0-1.8-0.5-1.5,0.2s1.2,3.8,1.2,3.8l2.5,2.2l1.8,0.5
                                                                                                                                                                          v1.5l-1.2,1.5l-0.8,0.8l0.3-0.9l-3,0.6c0-0.4-1.5,0.6-1.5,0.6s-0.5,0.3-1.1,0.7l-0.5-0.9l0,0l1.1-0.8v-1c0,0-0.3-1.8-0.6-1.8
                                                                                                                                                                          s-0.8,0.2-1.2,0.2c-0.4,0-0.9,1-0.9,1L1.3-61l-0.6,1.8v1L1.3-58l1.5-0.1l0.5-0.2l-0.1,1.1c0,0,0,0-1,0.5s0-0.1-0.2,0.6
                                                                                                                                                                          c-0.2,0.7-0.2,0.9-0.2,0.9s0.5,1.9,1,1.9s0.7-0.2,1.4-0.8c0.7-0.6,0,0,0.5-0.1c0.5-0.1,0.4-0.7,1-1.5c0.6-0.8,0,0,1.5-0.9
                                                                                                                                                                          c0.5-0.3,0.7-0.5,0.7-0.6l1-0.3l0.6-0.9v0.9l-1.8,2.2l-2.5,3l-0.5,3.5L6.4-46l0.8,1.2l1.2,1.2v2l-3.5,3.2l-1.2,1.5l-1.5,2.5l-1.8,4
                                                                                                                                                                          v0.8l-2.5,3l0.5,0.6c-0.3-0.1-0.6-0.1-0.6-0.1l-0.8,1.9l-1,1.4c0,0-0.1,0.6-0.2,1c-0.1,0.4-0.2,1.9-0.2,1.9l1.5,1.4c0,0,0,0.1,0,0.2
                                                                                                                                                                          s0.1,0.6,0.1,0.6l0.2,0.5l0.3,0.3l-0.1,0.3c0,0,0.5-0.1,0.6,0c0,0,0,0,0,0l-0.6,0c0,0-0.1,0.7-0.2,1.3c-0.1,0.6,0,1,0,1
                                                                                                                                                                          s0.5,0.2,1,0.5c0.5,0.3,0.6,0.8,1,1.1c0.4,0.3,1,0.8,1,0.8s0,0.5,0,1.4c0,0.9,0,1.7,0,2.7L0.2-7.9L0-7.8l0.4,0.4c0,0,0,0.1,0.1,0.1
                                                                                                                                                                          L-1.4-6c-0.1,0-0.3-0.1-0.8-0.2C-3.1-6.5-3-6.5-4-7.6h-0.6h-1.1h-0.9c0.2,0.3,0.5,1.3,0.8,1.5c0.4,0.3,0.9,0.5,0.9,0.5
                                                                                                                                                                          s1.1,1,1.7,1.4l-0.1,0.6L-3-3.5h-2.6l-1.1-1L-9.9-5l-1.8,0.2l-1.8,1.4L-16-2.9L-17.4-2c0,0-2.6,0.5-3.1,0.8s-1.8,0.1-2.5-0.1
                                                                                                                                                                          c-0.7-0.2-1.2-1.1-1.2-1.1s-1.9-1.4-3.5-1.5c-1.6-0.1-1.5-0.2-1.5-0.2s-1.5-2.5-1.6-3.5c-0.1-1-1.1,0-1.1,0h-1.8l-0.9-1.8l-1.5-1.1
                                                                                                                                                                          l-3.8-1l-2-1.4l-0.6,0.4v2.4l-0.1,2.8l-1.1,3.1l-3.1,6.5l-1.6,4.2l-0.1,2.6l1,2.4l3.1,3.8l2.6,0.2l4.1-0.8l1.9,0.8l2.1,1.9l1.2,2.8
                                                                                                                                                                          l1.9,2l0.8,1.1l0.8,2.6h2l1.2,2.6l-0.1,2.1l2.1,1.6l1.4,1.5l-1,0.6l-2.5,0.1l-0.4,1.1l-0.8,1.5l0.4,1.1l1.4,1l0.6-1.1l1.2-1l2-0.5
                                                                                                                                                                          l2.9,0.9l2.1,0.5l1,1.1l1.2,2.2l1.5,2.9l1.2,6.1l0.4,4.6l-1.5-0.5l-1.2-0.8v1.2l0.4,5.5l2.4,3.5l2.1,1.8l0.3,0c0,0-0.7,1.2-0.8,1.6
                                                                                                                                                                          c-0.1,0.4-0.7,1-0.9,1.4c-0.2,0.4-0.4,1.4-0.4,1.4l1.6,1.2l0.6,0.5h1.5l1.9,0.1l0.8,0.4l-0.2,1.6L-5,76.2l0.8,2.6l1.4,0.4h1.5
                                                                                                                                                                          l0.5-0.5l1.6-1.4l2.5-1.1l1.4,0.2l0.1,1.1l-0.9,1.4L3,81.7c0,0-1.1-0.5-1.5,0c-0.4,0.5-0.9,0-0.9,0l-1.1,2.9l-1.2,0.6l-2.1-0.1
                                                                                                                                                                          l-0.8,1.1l0.8,3l3.2,1l2.1,1.2l0.1,1.5l0.2,1L3.4,95l1.2,3l0.4,3.8l1.5,0.5h1.6l1.8,1.6l1.4,4.9l0.9,0.5l3.6,2.8l2.2,4h0.5l0.8,0.1
                                                                                                                                                                          l0.1,0.6l2.2,1.5h2.5l4.5-0.8l2.5-0.4l1.6-0.5l1.8-1.5c0,0,1.4-1.4,1.8-1.9c0.4-0.5,0.6-1.5,1-2.1c0.4-0.6,1.2-3,1.2-3
                                                                                                                                                                          s1.1-2.5,1.4-3c0.3-0.5,1.2-1.4,1.2-1.4l2.1-0.5l0.2-1l-0.6-2.1c0,0,1.2-1,2.1-1.2c0.9-0.2,1.2-0.8,1.8-1c0.6-0.2,1.8-1.1,1.8-1.1
                                                                                                                                                                          v-0.9c0,0,1.1-1.4,1.2-1.8c0.1-0.4,0.5-1.4,0.5-1.4s1-0.6,1.4-0.6c0.4,0,0.8,0,1.2,0s1.8-0.4,1.8-0.4l-0.1-0.6H57l1.5,1.1
                                                                                                                                                                          c0,0,1,1.9,1,3.6s0,2.2,0,2.6c0,0.4,0.9,2.9,0.9,2.9s2.4,2.3,2.8,2.4c0.4,0.1,2.2,0.2,3.5,0.2s2.5-0.2,2.5-0.2l0.2-2.4
                                                                                                                                                                          c0,0,2.5-1.9,2.5-2.2c0-0.3-1-1.1-1-1.1l-1.5-0.6L68.2,95c0,0,1.1-0.4,1.4-0.6c0.3-0.2,1.5-0.1,2.1-0.1c0.6,0,0.2-1.2,0.2-1.2
                                                                                                                                                                          s1-1,1.4-1c0.4,0,1.4,0.3,2.4,0.4c1,0.1,1.7,1.2,2.4,1.5c0.7,0.3,0.9,1.4,0.9,1.4l1.5,2.1c0,0,2.5,0,3.1,0c0.6,0,1.6-0.6,1.6-0.6
                                                                                                                                                                          l1.8-2.1l0.5-2.2c0,0,1.2-0.5,1.6-0.5c0.4,0,2.6,0.9,2.6,0.9s0.8-0.3,0.9-0.8c0.1-0.5,1.2,0,1.2,0l2.4-0.2l1.6-1.6l0.5-1l1.8-0.9
                                                                                                                                                                          l0.6,0.8l-1.1,2.4l1.8-0.1l1.9-1l0.5-2l1-2.5l0.1-3l-0.1-2.2l-1.1-1.1v-1.9c0,0,0.1-1.7,0.1-2c0-0.3,0.8-1.2,0.8-1.2l1.9,1.5l0.1-1
                                                                                                                                                                          l0.8-1.9l-1.1-2.4l-1.8-2.1v-0.9c0,0-1-1.5-1.5-1.6c-0.5-0.1-2-1.5-2-1.5s-1.2-0.3-1.9-0.4c-0.7-0.1-2.2-0.1-2.2-0.1h-2.3l-0.5-2
                                                                                                                                                                          c0.1-0.1,0.2-0.2,0.3-0.3c0.4-0.3,0.8-0.8,0.8-0.8s-0.1-0.8,0.2-1.5s0.6-0.1,1.5-0.1c0.9,0,1,0.4,1.5,0.4s1.6,1.3,2,1.6
                                                                                                                                                                          c0.4,0.3,1.4,2.4,1.4,2.4s1.1,0,1.5,0c0.4,0,0.8-1.2,0.8-1.2l-0.9-1.4l-1.8-1.4l-2-2c0,0-2-1.1-2.5-1.5c-0.5-0.4-0.8-0.4-1.4-0.6
                                                                                                                                                                          c-0.6-0.2-2-0.7-2.4-0.8c-0.4-0.1-2.4-1.7-3-1.9S88.3,53,88.3,53l-4-0.6l-0.1,1.5c0,0,0.9,1.2,1.8,2.1c0.9,0.9,0.2,0.5,0.4,0.9
                                                                                                                                                                          c0.2,0.4,0.9,1,1,1.4c0.1,0.4,1.4,0.6,2.5,0.9c1.1,0.3,0.6,0,1.5,0.1c0.9,0.1,0.1,0.9,0.1,0.9s0.7,0.5,0.8,0.9
                                                                                                                                                                          c0.1,0.2,0.2,0.5,0.5,0.8l0,0l-0.5,1.3L92,63.4c-0.2-0.1-0.4-0.1-0.5-0.2c-0.6-0.1-1.2-0.9-1.2-0.9l-1.5-0.5L87.3,61l-1.5,0.5
                                                                                                                                                                          l-1.2-1.9c0,0-1.6-2.5-2-3.2c-0.4-0.7-2.3-2.2-3.5-2.8c-1.2-0.6-2-1.5-2-1.5s-1.8-0.4-2.5-0.4s-2.2-1.6-2.2-1.6l-1.6-1.4
                                                                                                                                                                          c0,0-0.4-0.5-0.9-0.6C69.4,48,69.4,48,68.3,48c-0.3,0-0.5,0-0.6,0c0,0-1-0.1-1.6-0.1c-0.6,0-1.1-0.6-1.4-0.8
                                                                                                                                                                          c-0.3-0.2-1.2-1.4-1.2-1.4s-1.2-1-2.1-0.6c-0.9,0.4,0,0-0.4,0.4c-0.4,0.4-0.8,1-1.6,1.4c-0.8,0.4-1.4,0.5-1.4,0.5s-0.7,0-1.9,0
                                                                                                                                                                          c-0.6,0-0.8,0-0.9,0c0,0-1.4-0.1-2.3-0.2c-0.9-0.1-1.5-0.5-1.5-0.5v-0.9c0,0,0.1-0.7,0.1-1c0-0.3,0.5,0,1.1-0.1
                                                                                                                                                                          c0.6-0.1,0.7,0.2,1.2,0.4c0.5,0.2,1.3,0.8,1.3,0.8h2l1.4-1.1c0,0,1-1.1,1.4-1.5c0.4-0.4-0.6-1.8-0.6-1.8l-1.1-1.6l-3.9-0.1h-4.4
                                                                                                                                                                          c0,0-0.7-1.6-1.2-1.6s-1.4-1-1.9-1.5s-0.8-1.5-1.1-1.9c-0.3-0.4-1.5-1.6-1.8-2c-0.3-0.4-0.9-1.5-0.9-1.5l-2.6-1.2c0,0-1.4-1-2.1-1.5
                                                                                                                                                                          s-2.5-2.1-2.5-2.1l-1.9-1l-1.8-2.1l-1.6-0.5c0,0-3.3,0.1-3.6,0.1s-3.2-0.2-3.2-0.2l-1.8-0.9L20,21.7l0.5-2c0.5,0,0.6-0.1,1.6-0.1
                                                                                                                                                                          c1.3,0,0.8,0,1.5-0.2c0.7-0.2,0.8-0.9,0.8-1.4S24,17.5,23.6,17c-0.4-0.5-1-0.5-2-0.9s0,0.1-1.4-1.2s-0.6-0.4-0.6-0.4l-2.2,0.8v-0.2
                                                                                                                                                                          H17c0,0-0.1,0-0.4,0.4c-0.3,0.4,0,0.1-0.2,0.8c-0.2,0.7-0.2,0.4,0,1.2c0.2,0.8,0,0,0.8,0.4c0.8,0.4,0.7,0.5,0.9,0.9
                                                                                                                                                                          c0.2,0.4,0.2,1,0.2,1l-1.7,1.5l3.2,0.4l-2.7-0.2h-1.6c0,0-2.8-2.4-2.8-2.9s1.4-1.6,1.4-1.6V8.9l-1.9-1.4l-1.4-3L9.2,1.7l-3-0.6
                                                                                                                                                                          l-1.4-2L2.2-3.4l-3.4-0.1h-0.7l-0.5-0.6C-2-4.3-1.7-4.6-1.7-4.6l0.9-0.8l0,0l0.6-0.9l0.8,0.1c0,0,0.8,0,0.7-0.2
                                                                                                                                                                          C1.2-6.6,1.2-7.2,1.2-7.2v-0.2l0,0c0.2-0.1,0.3-0.3,0.3-0.3l2,2.2c0,0,0,0,0.6-0.1c0.6-0.1,0.6-0.5,0.6-0.5l0.1-0.5
                                                                                                                                                                          c0,0,0.4-1.1,0.5-1.1c0.1,0-0.8-3.1-0.8-3.1s0,0-1.1-0.6c-1.1-0.6-0.3-0.8-0.6-1.1c-0.3-0.3-0.9-1.1-0.9-1.1s0,0-0.4-1.1
                                                                                                                                                                          c-0.4-1.1-0.2-0.5-0.6-1c-0.4-0.5-0.9-1-0.9-1l-1.1,0c-0.2-0.2-0.5-0.4-0.5-0.4c-0.1,0,0.3-0.2,0.3-0.2l-0.1-0.4
                                                                                                                                                                          c0,0,0.2-0.3,0.1-0.5c-0.1-0.2-0.3-0.3-0.5-0.4c0.1,0,0.2,0,0.3,0c0.6-0.1,1.1-0.6,1.1-0.6s0-1.4,0-2c0-0.6-0.6-3.7-0.8-4.4l0.4-0.3
                                                                                                                                                                          l1.8-0.2l-0.1-0.9l0.4,1.5l1,3.2l1,5l2.5,4l1.8,2.8L8-5.8l2,4.5l4.5,3.2l5.8,2.8l4.8,2.8l2.5,2.2l11.5,11.5l6,4l4.8,2.8l3.8,3.8
                                                                                                                                                                          c0,0,0.2,2,1,3.2s4,2.5,4,2.5l4.5,3.8l3,2.5l5.5,2.2l8,1.5l10,2.2l6.5,1.8l3.5-0.8l1.5-2l2.2-2.5l0.8-13.5l-2.5-1.2h-5.2l-2-0.2
                                                                                                                                                                          L94,29.5l1.5-1h4.5l3.2-3c0,0,6.2-1.2,7-1.5s1.8-2.5,1.8-2.5l-2.5-1.2v-2l1-1.2l0.2-1.8l0.2-1.8l2.2-0.2l1.2-0.2
                                                                                                                                                                          c0,0-1.2,1.8,0.2,2.2s0,1.2,3,1.2s3,0,3,0l1.5-2l-0.5-2.5l-3.2-0.5V9l1.2-1.8l0.2-2c0,0,2.5-4.5,3.2-5s1.2-3.5,1.2-3.5l-2.8-2.2
                                                                                                                                                                          l0.5-2.2l1.8-3l2-1.2l1.2-2.8l1.2,0.8v2.8l4.5,1.2l1.2-1.2l1.5-0.8l-1-4.5v-3.2l2-0.8c0,0,0.2,0.8,0.2,1.5s-0.5,1,0,2s0.8,2,0.8,2
                                                                                                                                                                          l1,1.5l1.2,2.2l2.5,0.2l2-3l2-2.2l2-8c0,0,0.5-5,1.2-6s4-4.5,4-4.5l3.2-3.5l-1-4.5l-2.8-2.5l-1.2-2l-1.8,1.2l-0.2,1.8l-1.2,0.2
                                                                                                                                                                          l-0.5-2l-2,2.2l-2.5-0.5c0,0,0.2-4.5,1-4.5s2.2-0.2,2.2-0.2l3.2-0.2L150-53l2-2.5c0,0,0.5,3.8,1.8,3.8s3.5-4,3.5-4l2.2-0.2l3.8,0.2
                                                                                                                                                                          v-3.5c0,0,2.8,0.2,3.8,0s4.8-2.8,4.8-2.8v-3.8l0.8-3.2l7.3-0.6l-1-4v-2l0.9-2.4l-0.8-4.5l-0.8,0.6l-1-1.4l2.2-1.5l0.3-1.6v-1.3
                                                                                                                                                                          l-2.3-1.2h-1.3l-1.3-1.5l-0.2-2.2c0,0-0.3-0.8-0.1-1.1c0.2-0.3,1.3-1.8,1.3-1.8l2.2-1.1l0.8-1.8l0.5-2.8l-2.7-2.4l-2.2-2.1
                                                                                                                                                                          c0,0-0.5-0.6-0.5-0.8c0-0.2,0.3-2.4,0.3-2.4l2.1-1.6l0.6-3.6l1.7-0.8l-0.2-3.2l-2.6-0.7l-6.6,0.7v-8.9v-2.9l-1-3.3l-0.7-2.3
                                                                                                                                                                          l-0.7-1.3l0.1-2.8l-0.4-1.6l-2.8-1.5l-5.8,1.3l-6.6,0.4l-2.2,0.5l-1.2,4.3l-1.2,2.7l-0.2,1.8l0.6,2.9l3.5-0.8l2.8,2.2l2.2,1.5
                                                                                                                                                                          l-1.2,1.5v1.8l-1.2,3l-0.8,1L145-118l-6,3l-2.5-0.5l-4,0.8L131-115l-4.7,1.2l-2.6-0.7l-2.6,2l-2.7,0.3l-2.2-0.6l-2.8,2.5l-1.2,1
                                                                                                                                                                          l0.2,3.8l-1.8,3.5l-4.4,0.2l-2.7,2.7l-1.7-0.2l-1.5-1.5l-1.8-0.7l-0.5,1.8L95-98.5l-1.8-0.2l-2-0.8l-1.2-0.8l-3.2,1.1l-2,0.3
                                                                                                                                                                          l-0.6,0.1v2.8l2.5,0.5L87-94c0,0,1.5-0.7,1.8,0s2.4,1.3,2.4,1.3l0.8,2.2l0.2,2l0.4,2l0.7,7.2L87-82h-9h-9H51L49.4-95.6z">
                                        </path>
                                        <g class="st16">
                                            <image style="overflow:visible;opacity:0.75;" width="82" height="39"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFMAAAAoCAYAAACCV8YCAAAACXBIWXMAAAxNAAAMTQHSzq1OAAAA
                                                                                                                                                                                GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACOBJREFUeNrsmuuS2kgShSUkAQ00
                                                                                                                                                                                fbE99m7svv977cw6PO02fQMkQFKtFHFy4tucggbG9vywicgQIClVefKepST5+flqn/SIc+lPmP74
                                                                                                                                                                                BHc8CswBzg1+AvoHgDHaC2Yq6gHMRPb9R7ZSA67tqAG1tNQ8AmYPXtHRsKORjgUsNP0BQew/dUe7
                                                                                                                                                                                jrYdbfR9B0D/D0wDsv9v3NG0o8uOZh1dOEBjceRrxOw0wi+cyCc9IuYd4uvvb0U9gGVHy45eOlqJ
                                                                                                                                                                                R63zYR+YPXg3Hb0VXQngHA+Lxo0zwPR0MC4dySOmnBD5Hg4k3RRg9ha47uixo3vh1MLVA8Ekk0Jg
                                                                                                                                                                                9gB+6OifHb2ThY7AyDM7xpLSiPIYl0345gD/WHwnn1g4ahHzPBmoVEYGPv0aqo6eO7rTf1uBWxK7
                                                                                                                                                                                fM/iekAnHc0FZA/otf4buPhRHxB4n4vZgnPE5gKK2smtjH+D+32SzBHXC/3OIh7UYN07fTcKqFwK
                                                                                                                                                                                UKbzvWt/EY8neanPIyE/ogTIJOylKJWgawRgAzRWmwZYh7fQArwtLu+k8UTfGx2DU4Qdx1LyVN9H
                                                                                                                                                                                AnTgLL2WhVXiX+p7A2V5ngWevXQKar2MeQTEBmBZsC2dQDudW+i8gTqA1fDBjXOtgRZ8qWvGCiM5
                                                                                                                                                                                LNOs4UVCm7JyhKKZhJ/Amy5kqRmUWMvKLSsn+r0UGaiF1hRg5QEx064voeg/ZXPTSgsNPkmYayWj
                                                                                                                                                                                SwmdKn587uiTgvIW/HJYRgA4W1EDMN/o/AghZCMAe/4ftYZS19Fq5uI/Ek8CTTAbHDPEQXvOQrJu
                                                                                                                                                                                de8NnmWgP+u6Pvk86L4NQkTwbk7BSzGYiMEbxMxUD78HmLUefiHhRliM8VurnKj0rLG+FwJmrntK
                                                                                                                                                                                KOs3HdfiNVJibAFigsQzcEmodQV368LMTmta6JgJpByGs4VhfRGYZs31vjozwJW2EupFgr1IoErn
                                                                                                                                                                                vckz/lldai6yBc9W1xv//p5bCbKRRVmmfJEQDzpXIOmMFCNniJVFJE424leh0Da5qXRbl+WIK61h
                                                                                                                                                                                pPtWwIJuTmUlsQRkGrRKv0Jm3WnBO5i4LexWdI0YFnTvs65hUmkc3waJokYWTxAPexf8paP3qjJu
                                                                                                                                                                                BegQrlzDODbwCLplKgWYRzw61905Miw2UErjK5h8T/nS7ulDW3ddhpr0vQS9lrUULtCb0JagKt0f
                                                                                                                                                                                XM2XuKw6F69r8f+3gLwSwEPUgrb2oY4rAfUoUANKsUxruoHnvbg1sR+ngttY4Z8f0diHSIGbIOAP
                                                                                                                                                                                tKgrEN0uuJbU7n1EohhEZgNTWd5U9FZNxAcBPEIYWQN8e1aQR9yr2H7GWm50HGu9N1J44+pUj8PB
                                                                                                                                                                                ziw/YYa3bwAQIrWc9ayWWSd41g7ZP7iaMEXwn+N5ZpXvJHgu/hZXV7p35pKCWeZnJZkgXhnWdYHY
                                                                                                                                                                                W7qx40lDnTw5/UPwrEPJ4W4T/J5K85fIxCtZSSVgc9fVEExzyTeyzGsJXyt2LWV5j7r/Bl1Rjpi/
                                                                                                                                                                                xmBiiLoygcKHSJqDcwYN+RlAsh4tkeXXEmyEYUkv/D+0uEu44Uyglw5MuvmFc3dzzQEUuRSQC2R6
                                                                                                                                                                                dmoBChqivCoAWKxPD98DTJZQtQB8QN3HHnmmpJTDnTJYgrVq+6Y9KQbUmeuq2khiGLg5gQ1tzMpN
                                                                                                                                                                                UXOtrXCjtRJJsT0H1HPATBATK7SbtKqxrLKQi1YQODYuS10l0aAsSeWiQ6y5BlgjKSqFq2ZQ3ERr
                                                                                                                                                                                sRGiJbQMZdsDYu/QKSV8j5hJV1+i5y4QOxuXqA6O/XHeCmUrlq3In6PtDJi7Wrc1R2+eQ7ENws8I
                                                                                                                                                                                QD4p0/+u7mYtq23OcfVzLTNxpUOD3nfoBhFTzEEb1wiw+CWvCv1wI0HnmBNMAdY1Wr8Jkl3mZpwD
                                                                                                                                                                                lFI2VrP+/yOelX9PMLk4DhYsU16iJnyv5GE9Pcf+a8S7NlIl2LBjqWdN0Byw0+K4bAzltW7iU6Lo
                                                                                                                                                                                XsMqP+E5Fgaabx0zOdUuMOmZoVacSsgeyH9pqHwrIWtMaR5keT5psJW15PYZNetM/71Hx2UTram8
                                                                                                                                                                                YSyLrFySfEDlscTwYqG11AhN7be2TJ9g5kouNiMc6r9bCfoB2x1BQN4rPlltOI5M6ls3InvA1Gjs
                                                                                                                                                                                Zqw2zhuhXR1izVvMRT+K1wpDmhcdN+IzPNfFTwEz1p281YOvkAyuZJm36J0TLbh3qf9KqDtMaRg3
                                                                                                                                                                                W5fNOb2yeLZFwd+6dU1cLcwR2ye0leb2G0yzRpH4fdLm3qmWmaNetDhWYdg7hbvZ1Ny6lF87+o8L
                                                                                                                                                                                9gXiWIxqt0+duDibIHZzpJbj3goWfi8wSySiANnaV4Y8XwVMbjiNsNcyQy3ITagEbnovAH8V3cla
                                                                                                                                                                                LNhvIHSh49ZtC7QOQO4oMoYPodjKjRHXKLcqt2+VOQCpxNhawqlg+rKH88Uh2jcK2WLhz4pVv6P8
                                                                                                                                                                                uFPg32HwWiIhNG5fZhvZP9o65WZQsMXLS2RxzmO3kR3PFGGhQWhZuWH1xk/WT7VMi10VCugLuAcX
                                                                                                                                                                                aDFuhaz9WXQnYJ8QKxOAfo8+fIWNtM2e0ilFLZq5QUWruB2U5KiYes840W/Z2LaMdWELJKq92T4/
                                                                                                                                                                                ov/ewMqmYj7GJJvbp1Z2WIu2wHCW+yZmVQZcIV7mnvf6f+W2B7jbmeiZGULMQKBd6/uTU8w+IIIb
                                                                                                                                                                                nnzBxmENGUr/ftEpYDIbWrZbuC0JDglKt0W81P2ls4wUVrzQf89wK5sGrdziPaA7DIbtBYY1NufW
                                                                                                                                                                                2FFc7wHCb3G/YJd0hIn9Mwr/aHbPXxmz7WA9lpmn7s2LysWlTeS/2pUdKYAIunYMvnxRYHfgFRxa
                                                                                                                                                                                U8B++0RgUjGHgKByVuiSuClYvhY301cKdItHF2jdhujL/WsytXsNpYnUbolLHjmqgNQJVh/xvtHA
                                                                                                                                                                                vWZzgQTZOOVuD7SK5JW77RS/BxStOV97DdsL7F87afe8ZNXu2Tfxzx24NtXvkIaIix9qcz0Q7bFA
                                                                                                                                                                                uDUNIm/ChUjsPgnMQwL7N8xi+0JJ8vpbcYfeTzp22JC613JOBuLAmkJkTckpbn6MwMmBh5za26ZH
                                                                                                                                                                                buQdw+MsII5YUzhHiFOv/Ssvu36rT/p3rPF/AgwAgF7g0VhFtnAAAAAASUVORK5CYII="
                                                transform="matrix(0.8974 0 0 0.8974 40.9551 -36.25)">
                                            </image>
                                            <g>
                                                <g>
                                                    <path class="st17"
                                                        d="M50.5-29.7v17.2c2.3,0,4.5-0.6,6.8-1.7c2.8-1.3,4.1-3,4.1-5c0-2.3-1-3.4-3.1-3.4c-0.7,0-1.7,0.4-3.3,1.3
                                                                                                                                                                          L53.6-24c1.5-1.2,3.3-1.7,5.4-1.7c1.7,0,3,0.6,4.2,1.7c1.1,1.1,1.7,2.5,1.7,4.1c0,3.4-1.7,6.2-5.1,8.1c-2.9,1.7-6.1,2.5-9.8,2.5
                                                                                                                                                                          c-0.7,0-1.6,0-2.7-0.1v-20.3h-2.2v-2.8h21.7v2.8H50.5z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M71.7-29.7v20.3h-3.1v-20.3h-3.3v-2.8h9.5v2.8H71.7z"></path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M88.7-29.7v0.9c2.1,0,4,0.7,5.8,1.8c2.1,1.4,3.2,3.1,3.2,5.2c0,1.7-0.7,3.1-2,4.2c-1.2,1-2.7,1.5-4.4,1.5
                                                                                                                                                                          c-0.1,0-0.2,0-0.3,0c-0.1,0-0.2,0-0.6-0.1v-3.1c0.7,0.1,1.2,0.1,1.6,0.1c1.8,0,2.7-0.8,2.7-2.6c0-2-1.8-3.3-6-3.8v16.4h-2.9
                                                                                                                                                                          c-1.3-2.5-2.8-4.5-4.5-6c-2.1-1.9-4.2-2.9-6.6-2.9l-0.9-3.5c1.7-1.2,5.5-3.6,11.6-7.1v-0.9H73v-2.8h26.5v2.8H88.7z M85.5-25.3
                                                                                                                                                                          c-1,0.4-2.1,1.1-3.3,2.1c0,0-1,0.9-3.1,2.6c1.2,0.7,2.4,1.8,3.4,3c0.5,0.6,1.5,1.7,3,3.4V-25.3z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M104.3-29.7v20.3h-3.1v-20.3h-3.3v-2.8h9.5v2.8H104.3z"></path>
                                                </g>
                                            </g>
                                        </g>
                                        <g>
                                            <g class="st18">
                                                <image style="overflow:visible;" width="99" height="85"
                                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGMAAABVCAYAAABdGFolAAAACXBIWXMAAAsSAAALEgHS3X78AAAA
                                                                                                                                                                                    GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAwJJREFUeNrsmmtz0lAQhqEEKBSs
                                                                                                                                                                                    WCra1lv//w9Tx3opt3BJ4sn47nTNQMEP6oE+z8w7J00ghH2zu+eE1moAAAAAAAAAAAAAAAAAAAAA
                                                                                                                                                                                    AAAAAAAAAPtSP+LvUWDGv7/2emVfscWQAjP+rgknldEHvlTutmsbxqhIDtAIC35D129quMwoTVgH
                                                                                                                                                                                    ZVKu0Y5FmS3JgWWDN6EddBrU1djScTNiGbTQWGql/WtnUFSGJAeWDYmCXhrQCzoPeh7UD+roeKbg
                                                                                                                                                                                    z6S52y6VyqSVXhuNIcmBGFFmQ1MB78mAYdClNAg60/fJFfAy8JOgcdB90I+g79JYx5fKlCgMSSI3
                                                                                                                                                                                    wspSW9lQZsJF0CjoddCVtgcyycxYKNhTBb404C7oc9Anjd9kVi0WQ5LIjbDe0FPARzLgJuha20OZ
                                                                                                                                                                                    1JVxhUrQQiVqoqz4EvRCGdTU+f2MK8OM3Ub0FfAyE95Kb/T3pYw4cw3cAruSUhky0Lna+ozMNXZr
                                                                                                                                                                                    6PX/aUgSuRHPZESZBe+DPsiMK5Wrc/WRlrLCyPX+tcaWzlnXvpnrJRMZtqZn7DbiRibcyhArTX1N
                                                                                                                                                                                    aRO36LOyk7u73e70hkzpKJO6+pzmhkXjkzaj2qz7uvMtI25lyLX291y5ySsLu7WT7x0z9Y6xy4SC
                                                                                                                                                                                    dcb26as16wtlwDtXmkYqS229b7nBAFvo2WIvdUbYNPdr0EeNUxmWM7V9wMpTR2uIl8qCskS9UvM9
                                                                                                                                                                                    VdAsuCt35/vAV2VTXNO9prV3mvLOZWT+1M3wWdFSLT9XTxjKGDNhomBmjwTfAj/bcizdYNDCTWsL
                                                                                                                                                                                    ytSvzGhWnjXZow2r8bnLhHRH4Od6TbVsrTYoiqyIrWf4GdFS5aRQOcm1b74lI7YF3j8Y9E9wq+Jx
                                                                                                                                                                                    SAUrP2NdV6rSVV1R+4DvG/ii0qQ3/cZBZlRWzFPtS938P3MzpT8J/K6gR/cDUwy/9J3Ufn883pTq
                                                                                                                                                                                    bjWdHVvgYzXD9wwvH8ijC3ysZvjrqNce/0+Powl8zGbscz1HFXgAAAAAAAAAAAAAAAAAAAAAAAAA
                                                                                                                                                                                    AAAAADgafgowAC4wT/jUaBZlAAAAAElFTkSuQmCC"
                                                    transform="matrix(1 0 0 1 38 -86)">
                                                </image>
                                            </g>
                                            <g>
                                                <path class="st17"
                                                    d="M74.8-70.3c0.4,0.1,0.9,0.1,1.3,0.2c3.8,0.8,6.5,3,7.8,6.7c1,2.8,0.8,5.6-0.6,8.2
                                                                                                                                                                      c-2.9,5.7-5.9,11.5-8.8,17.2c-0.1,0.1-0.1,0.2-0.2,0.4c-0.2-0.4-0.4-0.7-0.6-1.1c-1.8-3.5-3.6-6.9-5.3-10.4c-1-2-2.1-4-3.1-6.1
                                                                                                                                                                      c-0.7-1.3-1.1-2.7-1.2-4.2c-0.1-2.6,0.5-4.9,2.1-6.9c1.6-2.1,3.8-3.4,6.5-3.8c0.4-0.1,0.9-0.1,1.3-0.2
                                                                                                                                                                      C74.3-70.3,74.5-70.3,74.8-70.3z M79.9-60c0-3.2-2.5-5.7-5.7-5.6c-3.1,0-5.6,2.6-5.6,5.7c0,3.1,2.6,5.6,5.8,5.6
                                                                                                                                                                      C77.4-54.4,80-56.9,79.9-60z">
                                                </path>
                                                <path class="st19"
                                                    d="M83.9-63.4c-1.3-3.7-4-5.9-7.8-6.7c-0.4-0.1-0.9-0.1-1.3-0.2c-0.3,0-0.4,0-0.6,0c-0.4,0.1,0.5,0,0.1,0.1
                                                                                                                                                                      l0,4.6c0.4-0.1-0.3,0,0.2,0l-0.2,0c3.2,0,5.7,2.5,5.7,5.6l0,0c0,3.1-2.6,5.7-5.7,5.7c-0.3,0,0.3,0,0,0l0,16.8
                                                                                                                                                                      c0.1-0.2,0.2-0.3,0.2-0.4c2.9-5.7,5.9-11.5,8.8-17.2C84.7-57.8,84.9-60.6,83.9-63.4z">
                                                </path>
                                            </g>
                                        </g>
                                    </a>
                                </g>

                                <g id="mymensingh">
                                    <a href="{{ route('subcategory-page', 'ময়মনসিংহ') }}" xlink:href="">
                                        <path class="st3"
                                            d="M6.5-112l2-3l0.5-2.8l2.5-1.8l2.2-5.2L16-128h2.2l3.2,1l4.5-2.5l2.5-2l2.5-1.8l3.5-0.5l1.8,0.5l-2.8,3.2
                                                                                                                                                                              c0,0,0,0.5,0.8,1.5s5.2,3.5,5.2,3.5l0.8,5.5l-2.2,5.2l0.2,2.8c0,0,1.8,2.8,2,3.2s2,3.2,2,3.2s2,2,2.2,2.8s4,2.8,4.8,2.8
                                                                                                                                                                              s1.8,0.8,1.8,0.8l-0.8,1.2l-1,2.2l0.8,1.5l-1.8,4.2v1.5l0.8,4l2,2.5l0.8,2l1.5,1.2l1.5,1.2h3.8l2.8-1.2l3.2,1.2c0,0,0.8,0.2,2.2-0.5
                                                                                                                                                                              s4.5-4,4.5-4l1.5-0.8h2L79-82l2,1.5c0,0,3,0.5,4,0.5s4.2,1,4.2,1l2.8,0.8l1.5-0.5c0,0-0.2-2.2-0.2-3S93-85.5,93-85.5v-1.8
                                                                                                                                                                              c0,0-0.8-0.5-0.8-1.2s-0.5-4-0.5-4l-3-1.5H87l-0.2-1.5L84.2-96v-2.8H86l2-1c0,0,1.2-0.5,2-0.5s0.8,0.8,2,1.2s2,0.5,3,0.5
                                                                                                                                                                              s3.2-1.2,3.2-1.2l0.5-1.8l2.5,1.2c0,0,0.5,1.2,1.5,1s1.8-0.8,2.2-1.5s1.5-1,2.5-1s3.2-0.2,3.2-0.2s1.8-2.5,1.8-3.5s0.5-3-0.2-3.8
                                                                                                                                                                              s1.2-1,1.2-1s2-2.5,2.8-2.5s2.5,0.5,3.8,0.5s3.8-2.2,3.8-2.2l2,0.5l3.2-0.5l2-0.5l1.5,0.2l2.5-0.2l1.5-0.5l2.5,0.5l4.2-1.8l1.8-1.2
                                                                                                                                                                              h2.8h2.5l2.2-0.5l2.2-3.5l-0.2-2.2l1.2-1.5l-2.2-1.5l-1.8-1.2l-1-1h-1.5l-2,0.8l-0.8-1.8v-2.2l1-2l1-3.2v-2.5l-0.2-1.8l-2.5,0.2
                                                                                                                                                                              l-0.5,1.8l-1.2,1l-1-1.2l-0.2-3.8l-2.5-3l-2-2l-2.5-1.5h-4.5l-4.5-2l-2.2-2.5v-2.5l0.5-3.2l-0.8-1l-1-1.8l1-0.8l1-2l-1-1.2l-1.5-2
                                                                                                                                                                              v-1.2h2l1-1l0.5-2.2l-1.8-2.2l0.5-2.5l-3.5-0.2l-2.2,1.5h-3.5l-2.8-2l-2.2-0.8l-3.5,0.8l-2.5,1l-3,0.8c0,0-3,0.8-3.8,0.2
                                                                                                                                                                              s-2-1.5-2-1.5h-1.5h-2.2l-2.5,0.2l-9.8-0.2l-2.5,1.8l-3.8,1l-2.8,0.2l-3.2-1.8H64l-2.5-2.2l-3.5-0.5l-3.5-0.5l-2.8-0.2l-2.8-1
                                                                                                                                                                              l-2.8-1.2c0,0-1-0.8-1.8-0.8s-3-0.2-3-0.2h-2.8l-1-0.2l-2.8-1.2l-2.5-2l-2.8-1.2c0,0-1.2,0.2-2,0.2s-0.8,0-0.8,0l-3.8-1.8
                                                                                                                                                                              c0,0-2-1-2.8-1s-3-0.8-3-0.8l-3.8-2.2l-0.8-6.5l-2.8-6.5l1.8-3.8l3-8.5l1.2-3l1-8.2l0.2-7.5l0.5-5.5l-1-3c0,0-0.1-2.9-0.8-3.5
                                                                                                                                                                              s-3.5-1.2-4-2s-1-3.5-1-3.5l1.2-1.5l0.8-2.8v-2.2l0.5-3.2l0.8-3.5l-1.5-5l0.5-1.8c0,0,3-1,3-1.5s2.5-3.8,2.5-3.8h-2.2l-1.5,0.8
                                                                                                                                                                              l-1.5,1c0,0-1.4,0.7-1.8,1s-1.5,1.8-1.5,1.8L10-276c0,0,0.6,1.4,1.2,1.2s-1.5,3.2-1.5,3.2l-0.2,0.2l-1.3,1.1L6-268.5
                                                                                                                                                                              c0,0,0.5,2,1.5,1.5s3.8-4,3.8-4l0.8-1.8l0.5,2.8c0,0-0.2,1.2-0.5,2s-1,2-1,2l-3.5,0.5c0,0-1.6-0.2-1.5,0.2s0.2,1.8,0.2,1.8l1.5,0.5
                                                                                                                                                                              c0,0,1.2-0.5,1.2,1.2s0.2,3.2,0.2,3.2l-1.5,2L6-255.8L4.8-255v3c0,0-1.7-1.1-1.2,0.2s-0.3,0.7,0.4,1.4s0.8,0.8,1.8,0.4
                                                                                                                                                                              s1.5-2.2,1.5-2.2v-2.8l1.8-0.5l1.2-0.5l-1,2.2v2.8l2.2,1.5l-1.2,1.8l-2,1.8L7-245.8l-0.2,2v2c0,0-1.5,0.5-1.5,1.2s0,0.8,0,0.8
                                                                                                                                                                              s-0.2,1.8-1,2.2S3-235.8,3-235.8l-1.2,1.2l-0.2,1.2l0.5,2l0.8,2l1,1.2L2-224.2l-0.5,4L1-217l-1,4.2l-2.8,5v2l2.8,2.5l-2,2.5
                                                                                                                                                                              l-0.2,1.2l3.2,1.8l1,3l0.5,3l0.5,3.2l-2.5-1.2v-4.5l-3.5-2.5l-0.5,2c0,0,0,2,0.8,2.8s3,3.2,3,3.2l1.8,1.5l1.2,1.5L4-184l-1.8,3.8
                                                                                                                                                                              l-2,3l-1.8,2.5l-1.5,6v3.2c0,0-2,2-3,1.8s-3.5,0-3.5,0l-1,1.5l2.5,3c0,0-0.2,3.2-0.5,5.2s-0.5,4-0.5,4l0.2,4l4.8-3.8l0.8,3.8
                                                                                                                                                                              l-0.8,4.8l3,6.5c0,0,2,3.8,3,4.2s4.2,3.2,4.2,3.2L8-124v3l-1.5,1c0,0,0,1,0,2.2S6.5-112,6.5-112z">
                                        </path>
                                        <g>
                                            <g>
                                                <path class="st17"
                                                    d="M47.8-190c0.4,0.1,0.7,0.1,1.1,0.2c3.1,0.6,5.3,2.5,6.4,5.4c0.8,2.3,0.6,4.5-0.5,6.7
                                                                                                                                                                    c-2.4,4.7-4.8,9.3-7.2,14c0,0.1-0.1,0.2-0.2,0.3c-0.2-0.3-0.3-0.6-0.5-0.9c-1.5-2.8-2.9-5.6-4.3-8.5c-0.8-1.6-1.7-3.3-2.5-4.9
                                                                                                                                                                    c-0.6-1.1-0.9-2.2-0.9-3.5c-0.1-2.1,0.4-4,1.7-5.6c1.3-1.7,3.1-2.8,5.3-3.1c0.4-0.1,0.7-0.1,1.1-0.1C47.4-190,47.6-190,47.8-190z
                                                                                                                                                                    M52-181.6c0-2.6-2.1-4.6-4.7-4.6c-2.5,0-4.6,2.1-4.5,4.7c0,2.5,2.1,4.6,4.7,4.5C50-177,52-179.1,52-181.6z">
                                                </path>
                                                <path class="st19"
                                                    d="M55.2-184.4c-1.1-3-3.2-4.8-6.4-5.4c-0.4-0.1-0.7-0.1-1.1-0.2c-0.2,0-0.3,0-0.5,0c-0.4,0,0.4,0,0.1,0.1
                                                                                                                                                                    l0,3.7c0.3-0.1-0.2,0,0.1,0l-0.1,0c2.6,0,4.7,2,4.7,4.6l0,0c0,2.5-2.1,4.6-4.6,4.6c-0.2,0,0.2,0,0,0l0,13.7
                                                                                                                                                                    c0.1-0.1,0.1-0.2,0.2-0.3c2.4-4.7,4.8-9.3,7.2-14C55.9-179.8,56.1-182.1,55.2-184.4z">
                                                </path>
                                            </g>
                                        </g>
                                        <g class="st16">
                                            <image style="overflow:visible;opacity:0.75;" width="115" height="35"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHQAAAAkCAYAAABYFB7QAAAACXBIWXMAAAomAAAKJgFRqakzAAAA
                                                                                                                                                                                GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAADCFJREFUeNrsm/lTG8kVxzW6L24Q
                                                                                                                                                                                YFgHfOJjd5NNKqnKL/nvU5tKKht7116vARswlwQCSSB0z6RV9XnerycDNvbacZWZqleDpOnu1+/7
                                                                                                                                                                                7h682NV12csLfQ4+Z+aurovllIDiADmAgs8F4CtA3y6fIXhJRylHOUcjjrIAeeqo6agn4BrAwRWg
                                                                                                                                                                                nx+QaUd5R2PQtKNrjiYcdR3tO6o4OoMagNx21P9/AHsFaLRMhhZZBMAFR7/jPsvdAN1zdODoxNGx
                                                                                                                                                                                o21HrwC5wTND6/U/FbBXgP7vNQRz1NGSo4eO7jm65aiEuy3icvtY49AyO4A6BPSFo1VHm46qjo4c
                                                                                                                                                                                tSJi7Ue5Elf4vXEN3WwGK/yzo785+qOjZVxuAIAWOzt8l8FqhxY852gG4DOAqS74o2vj1fUmoEVc
                                                                                                                                                                                7DdY6Ayg7GB1B3y2+JgE7GuAOe9oCoCHll53VANU/1MC+qW7X49MdtLRDdzsJBb51NEjR88clQHU
                                                                                                                                                                                wEkB6HVHdxytYKmjuOi0yPZjyTgIA+rhfpNoqfeFAloAjCXuCQD80dG/sNAGiU4gVp3Fcg/4/Q7P
                                                                                                                                                                                WMLU57m4hDmLqZ7Utpe9fOZ5nVEnZcIirqLwhbpiA/S2o6+wOp942UJG45QxwTmxt0uGm+WZOnOk
                                                                                                                                                                                sdg8FJPYmpZ4G78kmG3WqPN3YMCl8f+/ZzP5c6w0+A0y5Q+ZI3iHbD14TzBNDsMYeBN32ScWrqDs
                                                                                                                                                                                7Qu6QuayC4y1cuUYA0ki4xLjKmTAReLvOOO9d5BBwPzDLPoXR8/htWcWmmahPzj6jsnD2mKmPQhl
                                                                                                                                                                                yeqmfXEjUdpmc9hzcRkfC7kxL0Ij+6H038YnZLw9478DiLq+zZkDvCJzLcjfCn6YnziApOCnhcst
                                                                                                                                                                                EpNHMJZZxu5Qx+aIv9P8fZH7VRc7nH8LYPdIvHrJEDimLfMhbRmQHBwTE3o8XxA37bFIB/eRDblu
                                                                                                                                                                                naPFHJbumxvrMq+N9URR2jDdYA0PAUwgLBOi8ui/pWTLobwF+DsRhQxE8cxlmmuMwUNN1soyl/Fy
                                                                                                                                                                                yvxp5h4nySow5wLxucv+R2UvmVj0IYDVuzXGRWa5Zr7Dh3a5T4umJWCowe/ruIoEGvctzBigh3xO
                                                                                                                                                                                M4eB2pM5bJ1x3Nkivx8xbkJieQLBnqHxa7grH6/yAEEneGaN4r4h3sSLcJEZFPc+6w/HbrCHRX5r
                                                                                                                                                                                yn5nqEdL8GV7fYmQh3u5CyBJsaYi8XhElDaNjNPI4oA4GEd2WfYThAyii9xW4XVD1h9olttl0meY
                                                                                                                                                                                fx8mCjCa4bsG/vpnJnhIXJhDaIfMMYKA5iV1j4libCAoSzJGsMB1BDHF+iaMHOs3yTQfs4llxs4h
                                                                                                                                                                                jGFM+cnRP9hPINllIEL2WfcuexxFUD9LIpPH2h/D1wxrPgQMc3sV1mrCR08stMZ6Ezxf4bsJPGEG
                                                                                                                                                                                vqqMmRavoKFDPWUbJXgEsLvw3LekyI6B6gTYLAKfAJAVQM6xqVHAOkTwp0zmyRwd/PtdivRZxlt/
                                                                                                                                                                                dBQlOhIXesK6u+LiZqkHl9j8JACbcDLifvrwVaafWgOUAp7CZ50Gwrfs0jLEJns6gmf7bhifnjDH
                                                                                                                                                                                GYL9GkUqoVRWc44zr7nHpoATQ0Eq/D0tltwH0DT3HmONt6QYxijrxNhjTTpWry00YOAOwnkBs6bB
                                                                                                                                                                                MwC8SI21Ksxq49nmWAfYXTLn74gZBTSzgqU3xWo6gPEYzR8jmUgApHVibsHfsVhemDI8v4RS5lin
                                                                                                                                                                                Dtg7gGPx2ReX1pXEzSyiKoqbk8x3HqVoAfg4v3cEKJvHxnncU1J2NDCOpISubWRkinsTGmVvM6Ko
                                                                                                                                                                                fhSgAyZqhLTBMi/rotwGJB/G0pJEDCTWNRhbQgl8sYoxrKcTUVdZkjHJs3mJxdY0/xpeLSuNS9Za
                                                                                                                                                                                5JlrxPfrzOGjzVso5DYKlgtlleEjL19yjE3GPkDZLBz0pOzRjLsnlj6GApTkuQoeoCwNfx+lqtKh
                                                                                                                                                                                esrzTfY/L4cE6XDyFG4gpFjwW+geArFCOYWl/Qmt8WE0Kd0Qc83juKNrLB4PxbCos8IETE8Rqx6I
                                                                                                                                                                                S7NjrRKAxgF/WrLCFGPzWNAKipEQN2jHYS8R9sxbinqNXy3WbMk+unzns8+iKHcHT1IWC82K+32F
                                                                                                                                                                                kuxJzD6VfOEIL5cAyGP2ax0n77xernWLxrCmv2KFJfHVDUnbb6LdbdygpebWoJhEaCvcZ6SsqBKr
                                                                                                                                                                                TiJOIKweHmaef2FsJvbrAXKeZxYRzClr5UUhLeG4gVK1GdtnvzmUZAp+Js9ppHhSW1rGnuFZA+UU
                                                                                                                                                                                gW8A6DI8a63aYc9J9mz7eYX1PQG4JKEqhUz2mD+NRY7Ib4PzjuOSIWHOAMJ9ShIfF/WSv+dJVMb4
                                                                                                                                                                                3RMhdwTQKSlHRgXwE+bbYJPpkPBy0ktdRGkqUk5M8vsEwM8i3CzAWV/VXHqTeLvJ+KJ0a8bYr9Wg
                                                                                                                                                                                8Qgw8zyzIN7IFDQObz+Qcab5bkYUJM38edYoY2WWZwx522fNAvtMSMael7LqHvuNYVwnEqsjLTQl
                                                                                                                                                                                iU8JwRyyyCMY2ue3JTY2EXJXJtBJ0fxwg6JDbElJ4W2WYMX7LPcum3/CJgzI66yv3RVPgLA4dkas
                                                                                                                                                                                /AkBZMWCb0MpGRsOP9O4/j5jsoSBOQS5TRL3GCW+B88Wl9N4iXlkcQCIVvrtoYjWXLHDcwttczLe
                                                                                                                                                                                egMHKMOW1p/vch7qiSvOSWmzB7Ad6XGqi7GCewfgrNY0C1yUzoonBXZCCuqCpPQJ6Ty1yJ73cUcm
                                                                                                                                                                                3KwkIr5sMoNVTfG3lVOb0sQ47zAiCe/3maMMv0so3jFNjFVkkg6dwsQk7hfYZxYZbkl5Y9a5SFVx
                                                                                                                                                                                Q/Zjss9IFWAnP2vMNYg6PrOMzNxBFa2xPmQezdtCw15K2v+AjVsXpIwGraPVywjdOiDz0tfsidur
                                                                                                                                                                                ysl+Q0D/Cj6bAPmI9eusmcCig9AJxBl7uC218zDefQ9vbay9hDcJzjnwzmMt0/LZFOMZ99OQYINQ
                                                                                                                                                                                3VuV7H6F79tyxGZvE06yTkEa+nGePWDfTwHz4CKXq92iXyQ7HGPDRQRqWdgan/M8l5MN7ONOYgj6
                                                                                                                                                                                HvNdg9kRcS/moi3I19j8KEDPSaeqKXXiBl4gKb3YhDQr2rinO9Jx0sTImhnPSfCyEYD0UIwyY+1V
                                                                                                                                                                                zjo8/gdAD6XcCJ+G1FCefTknHedtCFvrKYbRlGzYGhWjIUu20JiX+veNBClch9YB69/S60xJQlOF
                                                                                                                                                                                yQOENi9u12rQGrGlKV2RcYTWlTNBy9ws9W9JrWfNgWU2GJNOTo37gVjgHM+dIpQtlK+JhWekQXDC
                                                                                                                                                                                99aZ2maeFsD0pRSp4uJ25XWTgbjbdYDKSGPCmgyn0grt4JabgDnB3WL1Jp7x7xiUdemuY1DWvL8p
                                                                                                                                                                                hxIjzL2tHiIZKqjbPPA9giuJhrRItY2xPp/XxOfviLtrIoAui09Lql+FAdPCASBUmNOAW4B5T6x/
                                                                                                                                                                                Q9ytHRZMSJZoHZYtnp+Hvx6fN+VUZZ8QkgOkI+bel6b3D9LVCkQW1uHpSklWZlwRXnbYj5Vq5iK/
                                                                                                                                                                                QckfimsfxuJ/SkxdoCt2SxLAScm8Lffos+ezKED70o+tMNgyRit2q/LCk4G/wzMGeCd05lmQWvRQ
                                                                                                                                                                                ujVNUZgywi0DcEX6sF7o+K3Jd/sIvAZoFRRsV7LyoiRY4fFlXKe9+PVC3Ji52ucSJ33J1tXV9djX
                                                                                                                                                                                Y8mmKyiPNeSboWbECqDekvp8i3k8xlpGbBn5dbzhrKy5q5gkI87c7JirJb3FWKjfOZCY+wQgrT46
                                                                                                                                                                                lGzP2mb2ukVBukp7MN2VVz0q0nA4izgT9aXXGgecVdZMiJvXOaqh882o8WVJCnuSQJnQ6toAD909
                                                                                                                                                                                5ovipQ4vtuaulCV9XKjVw5OSAGnLsI7nOGKNZTm9SYQwikzXDYRe7Pz/tLJ7Xd63iYUAj0kW9yPf
                                                                                                                                                                                TzF2CyV4LrWUCjuQ/qh3zvoBStBBUN47zHHeeD31sHeBEiKL/gWH5ZZ/RPHSl4N2y1FWUfwdWpj3
                                                                                                                                                                                5Z2klHhDq9ktFr9i7A05pltHGV+/GvOhb/d5FwjMajBrSpsWWsNiDZfYCvV1g/dYPyZWeJk5PvRd
                                                                                                                                                                                psvy4kldPYa1PUA2m/JmYTv0mo0BXoj9+r5vIFWB9X+Dj/26ZlzO+TLSGWqHmtxf2hUXZV8A0FPA
                                                                                                                                                                                PIxoUCiwSfGs/fB7Vp/i/VttqyUiTl2+1MuT9qf1epso++ASXiV4H5fzW28kiF1deggQlxzEvxLL
                                                                                                                                                                                1fX6+q8AAwAexfCEjBB1ggAAAABJRU5ErkJggg=="
                                                transform="matrix(1.0957 0 0 1.0957 -3 -165.3478)">
                                            </image>
                                            <g>
                                                <g>
                                                    <path class="st17"
                                                        d="M15.8-152.8v15.8h-2.4v-1.7c0-1.2-0.9-2.6-2.9-4.1c-1.8-1.4-3.4-2.1-4.7-2.1c-0.8,0-1.4,0.2-2,0.6
                                                                                                                                                                      c-0.7,0.5-1,1-1,1.6c0,1,1.1,2,2.1,2c0.4,0,1-0.2,2.2-0.7l0.8,2.3c-1.2,0.7-2.2,0.9-3.1,0.9c-1.2,0-2.3-0.4-3.2-1.3
                                                                                                                                                                      c-0.9-0.8-1.4-1.9-1.4-3.1c0-1.5,0.5-2.6,1.6-3.5c1-0.8,2.2-1.3,3.6-1.3c0.1,0,0.3,0,0.4,0l0-0.2c0.1-0.6-0.2-1.3-0.9-2.1
                                                                                                                                                                      c-0.7-0.8-1.4-1.2-2.1-1.3c-0.3,0-0.8,0-1.4,0c-0.3,0-0.7,0-1.5,0.1v-2h-1.7v-2.1h19.5v2.1H15.8z M13.3-152.8H4.6
                                                                                                                                                                      c2.6,1.6,4,3.6,4.1,5.8c1.4,0.5,2.9,1.8,4.7,3.7V-152.8z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M33.1-152.8v15.8h-2.3c-2.6-2.1-6.5-3.7-12.1-5l-0.7-2.6l6.7-2.9c-0.6-0.8-1.5-1.6-2.8-2.2
                                                                                                                                                                      c-1.2-0.6-2.5-0.9-3.9-1v-2.2h-1.7v-2.1H35v2.1H33.1z M30.7-152.8h-9c1.2,0.7,2.1,1.3,2.8,1.7c1.4,0.9,2.4,1.8,2.9,2.8v2.5
                                                                                                                                                                      l-4.6,2.1c3.2,1.3,5.8,2.5,7.9,3.8V-152.8z M26.5-134.5c-1.3-0.6-2.4-1-3.7-1.3l0.4-2.2c1.5,0.2,2.8,0.8,4.3,1.7L26.5-134.5z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M50.9-152.8v15.8h-2.4v-1.7c0-1.2-0.9-2.6-2.9-4.1c-1.8-1.4-3.4-2.1-4.7-2.1c-0.8,0-1.4,0.2-2,0.6
                                                                                                                                                                      c-0.7,0.5-1,1-1,1.6c0,1,1.1,2,2.1,2c0.4,0,1-0.2,2.2-0.7l0.8,2.3c-1.2,0.7-2.2,0.9-3.1,0.9c-1.2,0-2.3-0.4-3.2-1.3
                                                                                                                                                                      c-0.9-0.8-1.4-1.9-1.4-3.1c0-1.5,0.5-2.6,1.6-3.5c1-0.8,2.2-1.3,3.6-1.3c0.1,0,0.3,0,0.4,0l0-0.2c0.1-0.6-0.2-1.3-0.9-2.1
                                                                                                                                                                      c-0.7-0.8-1.4-1.2-2.1-1.3c-0.3,0-0.8,0-1.4,0c-0.3,0-0.7,0-1.5,0.1v-2h-1.7v-2.1H53v2.1H50.9z M48.4-152.8h-8.8
                                                                                                                                                                      c2.6,1.6,4,3.6,4.1,5.8c1.4,0.5,2.9,1.8,4.7,3.7V-152.8z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M68.2-152.8v15.8h-2.4v-1.4c0-1.5-0.9-3.1-2.6-4.8c-1.8-1.7-3.4-2.5-4.9-2.5c-1.4,0-2.6,1.1-2.6,2.4
                                                                                                                                                                      c0,1.4,1.1,2.4,2.5,2.4c0.4,0,0.8-0.1,1.5-0.4l0.7,2.3c-0.8,0.4-1.7,0.5-2.8,0.5c-1.3,0-2.3-0.5-3.1-1.4c-0.8-1-1.3-2.1-1.3-3.3
                                                                                                                                                                      c0-1.4,0.5-2.6,1.4-3.5c0.9-0.9,2.1-1.4,3.5-1.4c3,0,5.6,1.6,7.8,4.9v-9.5H51.4v-2.1H70v2.1H68.2z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M89.1-157.6c-3.6-2.3-6.5-3.3-8.8-3.3c-2.1,0-3.8,0.5-5,1.5c-1.3,1-2,2.5-2,4.5h2.1v2.1h-2.2v15.8h-2.5
                                                                                                                                                                      v-15.8h-2.2v-2.1h2.2c0-2.6,1-4.7,2.8-6.1c1.7-1.4,4-2.1,6.7-2.1c1.7,0,3.5,0.4,5.2,1.2c1.2,0.5,2.8,1.4,4.9,2.8L89.1-157.6z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M89-152.8v15.6h-2.5v-8c0-1-0.8-2-1.7-2c-0.8,0-1.6,0.8-2.5,2.5c-0.9,1.9-1.5,3.1-1.8,3.5
                                                                                                                                                                      c-0.9,1.3-2,2-3.3,2c-0.7,0-1.5-0.4-2.6-1.1v-2.5c1,0.9,1.7,1.2,2.4,1.2c0.7,0,1.4-0.6,2.1-1.8c0.6-1.1,0.9-2.1,0.9-2.9
                                                                                                                                                                      c0-2.6-1.5-4.7-4.6-6.4h-2.1v-2.1h17.3v2.1H89z M86.6-152.8h-7c0.6,0.5,1.2,1.2,1.7,2c0.5,0.9,0.9,1.7,1,2.5
                                                                                                                                                                      c0.8-0.8,1.6-1.3,2.3-1.3c0.8,0,1.5,0.4,2,1.2V-152.8z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M91.5-150.1c0-1.3,0.4-2.3,1.2-3.1c0.8-0.9,1.9-1.3,3.2-1.3c1.3,0,2.3,0.5,3.1,1.5c0.7,0.9,1,2,1,3.3
                                                                                                                                                                      c0,2.6-1.5,4.3-4,4.3C93.3-145.4,91.5-147.4,91.5-150.1z M96.8-137.7c-1.7-1.5-3.3-2.6-5.1-3.5l0-3.5c5.1,3.7,8.3,6.6,10,8.9v2.5
                                                                                                                                                                      L96.8-137.7z M93.7-150c0,1.2,1,2.3,2.2,2.3c1.1,0,2-0.9,2-2c0-1.2-0.8-2.4-2-2.4C94.6-152.2,93.7-151.3,93.7-150z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M100.7-152.8v-2.1h15.9v2.1H100.7z M115.1-134.9c-1.6-1.2-3.4-2.2-5.7-3.2c-2.5-1.1-4.5-1.6-6.2-1.7
                                                                                                                                                                      l-1.1-3.3c1.4,0.2,2.3,0.2,2.8,0.2c1.5,0,3-0.3,4.5-0.8c2-0.7,3-1.7,3-2.9c0-1.1-0.4-1.9-1.3-2.6c-0.8-0.6-1.7-0.9-2.9-0.9
                                                                                                                                                                      c-0.8,0-1.4,0.1-2,0.4c-0.8,0.3-1.1,0.8-1.1,1.3c0,0.7,0.4,1.1,1.8,1.1l-1.4,2c-1.9,0-3.3-1.3-3.3-3.1c0-1.4,0.7-2.4,2.1-3.2
                                                                                                                                                                      c1.1-0.6,2.3-0.8,3.8-0.8c1.7,0,3.2,0.5,4.6,1.3c1.6,1,2.4,2.4,2.4,4c0,1.7-0.8,3.1-2.4,4.2c-1.1,0.8-2.4,1.3-4,1.8
                                                                                                                                                                      c2.7,1.1,5.3,2.5,7.9,4.4L115.1-134.9z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </a>
                                </g>
                                <g id="rajshahi">
                                    <a href="{{ route('subcategory-page', 'রাজশাহী') }}" xlink:href="">
                                        <path class="st14"
                                            d="M-184-149.2l0.6,1.8l1.4,0.2v1.4v1.8l0.4,1l0.6,0.8v1.9c0,0-0.5,0.9-0.9,1.4c-0.4,0.5-1.1,2-1.1,2
                                                                                                                                                                  s-0.8,0.1-1.2,0.2c-0.4,0.1-1.4,1.4-1.4,1.4l-1.4-0.1h-1l-0.2,1.2v1v1.6l-0.6,1.2l-0.5,0.1h-1.5c0,0,0-0.1-0.5-0.1
                                                                                                                                                                  s-1.1,0.1-1.1,0.1l-0.6,1.4l-0.2,2.6l0.1,1.2v1.2l-0.1,1.2l-0.2,0.8l-0.5,0.6l-1.2-0.1l-1.4,1.5l0.5,2.9l1.6,1.8l1.4,3
                                                                                                                                                                  c0,0,2,1.8,2.4,1.9c0.4,0.1,0.9,0.5,0.9,0.5l0.2,1.1l0.6,3.9l-0.2,3.4v1.6l1.8,1.8l1.6,2.1l1.5,0.4l1.2,0.2c0,0-0.2,0,0.5,0
                                                                                                                                                                  s2.2,0.6,2.2,0.6s1.5,1.1,2.1,1.4c0.6,0.3,2.4,2.4,2.4,2.4s0.8,0,1.8,0s0.9,0,2,0.1s2.5,0.4,2.5,0.4s0.4,0.4,1,0.5s2.4,2.1,2.9,2.4
                                                                                                                                                                  s4.1,1.9,4.6,2.1c0,0,2.6,1.9,3.1,2s6.2,4.4,6.2,4.4l4.5,4.2l3.1,3.4c0,0-0.8,0.8,0,1c0.8,0.2,2.2,0.6,2.2,0.6s3.9,0.4,4.2,0.4
                                                                                                                                                                  s1.2,0,1.8-0.4c0.6-0.4-0.1,0.1,0.5-0.4c0.6-0.5-0.1-0.2,0.6-0.5s3.5-0.1,3.5-0.1l0.6,0.2c0,0,1.1-0.1,1.5,0.4
                                                                                                                                                                  c0.4,0.5,0.4,1.1,0.9,1.4s0.2,0.4,1.1,0.6s1.6,0.5,1.6,0.5l1.1-0.1l0.6-1.5l1.5-0.8c0,0,0.8,0.1,1.2,0.1s1.8,0.8,1.8,0.8l1.2,1.6
                                                                                                                                                                  c0,0,1,1.4,1.5,1.9s-0.4-0.9,0.9,1.5s1.5,4,1.8,4.5s0.1,1.2,0.2,1.9s0.4,1.9,0.4,2.2s-0.4,1-0.5,1.4s-0.6,1-0.6,1l-0.5,0.7l0.5,0.8
                                                                                                                                                                  l0.8,0.5l0.1,1.1l0.5,1.1l0.1,0.9c0,0,0,1.1,0.5,1.1s1.8,0.8,1.8,0.8l0.9,1.5l1.2,0.6l3.4,0.5l2.5-0.1c0,0,0.2,0.1,0.6,0
                                                                                                                                                                  s1.5-0.5,1.5-0.5l0.8-1.6l1.1-0.6l0.6-0.6l0.6-0.8c0.6-0.2,1.9-0.5,1.9-0.5v-0.9l1-0.6l2.4-0.6l1.9,0.1l3.5,0.2l2.2,0.9l1.4,0.8
                                                                                                                                                                  l-0.2,1.4l-0.2,3.2c0,0,0.2,1.1,0.6,1.2s1.8,1.4,1.8,1.4l1.4,1.1l0.2,2.1l0.1,1.6L-78-35l1.6,1.8l1.1,2.2l1.1,1.2L-74-27l-1.6-0.1
                                                                                                                                                                  c0,0-0.1,1.8,0.2,2s0,0.9,1.4,1c1.4,0.1,2.6,0.2,2.6,0.2l2,0.9c0,0,0.5,1.1,1.4,1.4s2.4,0.6,3.2,0.6s1.8,0.2,2.1,0.2
                                                                                                                                                                  s2.2,0.5,3.1,0.5s2.6,0.1,2.6,0.1l3.6,0.4l4.9,0.4l1.4,0.1l2.1,0.9l0.8,1.4c0,0,1.5,0.8,2.5,1s1.5,0.5,2,0.6s1,0.4,1.4,0.5
                                                                                                                                                                  s0.5,0.6,1.2,1s1.2,1.2,1.9,1.5s1.2,0.9,1.2,0.9l2.8,1.6l1.8,1.1c0,0-0.2,1,1,1.1s2.6,0.9,3.1,1.1s2.1,1.1,3.2,1.2s0.6,0.1,3.6,0.5
                                                                                                                                                                  s4.1-0.2,4.1-0.2S-12-8-11.5-7.7s1.4,0,1.4,0s1,1.2,1.8,0s1.5-2.6,1.5-2.6l1-1.5l0.4-1.6l-1-4.4L-7.9-19v-5.6c0,0,0.9-0.5,1.2-1.2
                                                                                                                                                                  s0.8-1.2,0.9-2s-0.6-4.8-0.6-4.8l-1.4-1.9l0.4-1.2l1.4,0.5l1.1,0.5l2.4-1.1l0.2-3.9c0,0,0.4-1.2,0.6-1.6s0.6-0.9,0.6-0.9
                                                                                                                                                                  s1.4-1.9,1.4-3s-0.4-4.2-0.4-4.6s0.4-1.6-0.4-2.2s-1.2-6.9-1.2-6.9s-0.1-1.9,0.1-2.2s1.6-1.8,2.2-2.2s1.6-1.5,1.6-2.2
                                                                                                                                                                  s0.1-3.2,0.1-3.2l0.2-3.1l0.4-2.8l-1-2.6c0,0-0.8-1.6-0.8-2.1s-0.5-7-0.5-7l-1.4-2.2l-1.9-1.2c0,0-1,0.1-1-0.2s0.1-2.6,0.1-2.6
                                                                                                                                                                  s0.4-0.4,0.6-1.4s0.8-2.8,0.8-4.1s-0.1-5.1-0.1-5.5s-0.6-1.5-0.6-1.5l-0.5-1.8l-2.5-0.9l-0.4-4.6c0,0-1.5-1.6-1.6-2s-0.8-2.4-0.6-3
                                                                                                                                                                  s-0.1-2.4,0.8-3.1s0.9-1,0.9-1.5s-1.5-2.9-1.5-2.9l-0.5-2l0.2-3.2l-1.2-1.5l-2.6-3.4l-0.6-3.8l-1.6-2.6c0,0-0.8-1.1-0.8-1.5
                                                                                                                                                                  s-0.1-1.8-0.1-1.8l-0.8-2.2l-0.5-1.9v-2l-1-0.8l-0.2-2c0,0,1.6-1.8,2.1-2.2s1.4-2.6,1.4-2.6l2-1.9c0,0-0.1-1.9-0.1-2.4s0-1.9,0-1.9
                                                                                                                                                                  l-4.1,2.5h-0.9l-2,0.5l-2.4,0.6l-1.9-1.1l-2-0.5l-0.5-0.1l-0.8-0.9l-1.1-0.8l-2-0.8l-1.9-0.9l-1.5-0.6l-1.3-0.9l-1.9,0.9
                                                                                                                                                                  c0,0-0.9,0.5-1.2,1s-2.1,1.5-2.1,1.5l-2.1-0.2l-0.4-2.8l-0.8-2l-0.6-1l-1.9-1.2l-1.6-0.5l-1.1,0.6l-1.8,0.9l-3.8,0.9l-2.8-2.4
                                                                                                                                                                  l-0.4-1.4l-0.6-0.6v-2.2l-1.9-2l-2.2-1.4l-1.5-1l-0.8-1.2l0.8-1c0,0-0.5-0.5,0.1-0.9s1.2-0.6,1.6-0.9s1.4-0.8,1.5-1.1
                                                                                                                                                                  s0.1-1.8,0.1-1.8l-2.8-0.8l-4.1-0.1l-1.5,0.5l-1,0.1h-1.5l-2-0.1l-1-0.4l-0.1-1.4l-1.6-1.4l-1.8-0.6l-2.5,0.4l-1.2,0.2l-0.2,0.8
                                                                                                                                                                  l-2.1-1.2l-1.1-0.2l-1.5-0.4l-1.4,0.4l-0.6,0.5l-0.8,0.5l0.4,2c0,0,0.5,0.8,0.5,1.1s-0.5,1.6-0.5,1.6l-1,0.9l-0.9,2.1
                                                                                                                                                                  c0,0,0.5,0.6,0.5,1s-0.1,1.5-0.1,1.5s-1.1-0.2-1.8-0.2s0.1,0.2-1.2,0s-0.5-0.2-1.9-0.6s-1.4-0.4-1.4-0.4l-3.1-3.9l-2.6,0.2l-2,2.1
                                                                                                                                                                  l-0.4,1.4l-0.5,1.5l-2-0.2c0,0-1.8-1.4-2.1-1.4s-3.1-0.4-3.1-0.4h-1c0,0-0.4-0.8-1.2-1.1s-2.4-1.5-2.4-1.5s-2.1-0.6-3-0.6
                                                                                                                                                                  s-3,0-3.4,0s-1.1-0.2-1.1-0.2s-2.2,0-2.8,0s-2.4,0.8-2.4,0.8s0,1.8-0.4,1.9c-0.4,0.1-1,0.9-1,0.9l-1.2,0.2c0,0-1.1-0.4-1.9-0.4
                                                                                                                                                                  s-0.8,0.2-1.2,0s-1-0.8-1-0.8s-0.5-0.1-1-0.2s-2-1.1-2-1.1l-2.4-2h-2.4l-1.8,0.5l-1.4,1v1.9l0.4,2.4v0.9l-0.1,1.6v6l1.2,2l-0.2,1.4
                                                                                                                                                                  c0,0-1.8,0.9-1.8,1.2s0,0.9,0,0.9l-1.1,0.8v0.9l-0.1,3l-1.8,0.8c0,0-0.6,0.9-0.6,1.2s-0.1,1.6-0.1,1.6l-0.6,1.5l-0.9,1.8l-0.9,0.5
                                                                                                                                                                  l-0.4,0.5l-0.6,3c0,0-1,0.1-1.1,0.5c-0.1,0.4-0.4,1.2-0.8,1.4c-0.4,0.2-0.9,0.2-0.9,0.2l-0.8,0.9l-0.5,0.5l-0.6,2.1v1l-0.4,1
                                                                                                                                                                  l-0.6,0.5c0,0-2.6-0.1-3-0.2c-0.4-0.1-0.9,0.6-2.2-0.2c-1.3-0.8-1.9-1.5-2.4-1.6s-2-2.1-2-2.1s-0.1-2.2-0.1-2.6s-1.1-2.4-1.1-2.4
                                                                                                                                                                  l-1.2-1.6l-1.4,0.1h-1.5l-0.9,0.4l-2.5,0.9l-0.8,0.1c0,0-1,0-1.5,0.1s-1.9,0.1-1.9,0.1s-0.2,1-0.6,1.2s-0.4,0.2-0.4,0.2v1.2H-184z">
                                        </path>
                                        <g>
                                            <g class="st18">
                                                <image style="overflow:visible;" width="100" height="84"
                                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGUAAABVCAYAAABQBipiAAAACXBIWXMAAAsSAAALEgHS3X78AAAA
                                                                                                                                                                                    GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAxhJREFUeNrsmolu00AURePEpYGU
                                                                                                                                                                                    0hYIpRuU//8vJNaWpFm98CzdkZ4GtyEViHE4R7pyvFRq5/jN8zjt9QAAAAAAAAAAAAAAAAAAAAAA
                                                                                                                                                                                    AAAAAAAAoJ3sP/gb6q79QfkOyNjmxqqplL8vo0k/2veDX7vPVcs5KuUPCQkiBlGy6CarJaJJ6T5X
                                                                                                                                                                                    TlCScvKOCekre5YnlqFlX58HkZQgY21ZuW2h42VL9TB9PULIQAKeWQ4sh5bnlqc63te1tROysMws
                                                                                                                                                                                    c7ddOlFBTo2UxwlpqmJkOba8sry2nEjO0FVLrYpYSsTU8sNyq22TO51b6tpkxGQdE3IgCaeWC8u5
                                                                                                                                                                                    ZWw5UrXkbjoKUprBn1huLN8sXy1flBudW6QkJu+YkJeWM8uV5b3l0vLG8kKV4qWUmqLmqpRbCflk
                                                                                                                                                                                    +egqq24JUrYU0si4Vs51/MA1+0Cpuz+ImejaI/WkgSqjUG/xlVIjpV1I7nqIF/JBQi7VUw5dlWTR
                                                                                                                                                                                    +iQ0+333lNbX8YUqaKJtMlNYnriQ0EMaIe8iIeNISL9l0Rjf+Zl7ghuqDw21n7u1TvYvxeQdEPJW
                                                                                                                                                                                    Qq61PVPljDSYmZuqKrcGWbu1SXgsnrgnsJnOVywetxNyqqq4Uk71ODzUz63cNFVEC8WlZMz1BDZ1
                                                                                                                                                                                    Df+75bMa/1Q/U9Lof311EqaVkZrxWI38QtVyogbdc4NdORFBwsKdn0VCpm7NEtYtN7quSOW9WCqV
                                                                                                                                                                                    0lYlYzXyY839PbcaL101LHU8SJhF+3duoejPhQSJa9Yp7ZWy716hjLRfazBLXVdEIuYtUhb3ZOVS
                                                                                                                                                                                    uJQpvW5Jqaf4N8Bh8O80SLfart26Y+4ELFsGfx01ez/4ZfRklsT6JDUptXtyWuopKdcA+0Xeyk1Z
                                                                                                                                                                                    9wlou/vbJPSi/pHMC8k8ESG1W9BNtN9Uwp6uKaKBf0hA5QSEwX/oFX1y36dkCU1dA0kIK+89TWWV
                                                                                                                                                                                    q5TyNwTUD9z9fB38CDF9tzofRFNb2/RTb5h+OvdPEylJiZv9pu/bd0ZA6lL875NtGOydEdDGoAO/
                                                                                                                                                                                    404LAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAbfgpwACUCWGrwpLn7AAAAABJRU5ErkJggg=="
                                                    transform="matrix(1 0 0 1 -129.25 -174.5)">
                                                </image>
                                            </g>
                                            <g>
                                                <path class="st17"
                                                    d="M-92.2-159.3c0.4,0.1,0.9,0.1,1.3,0.2c3.8,0.8,6.5,3,7.8,6.7c1,2.8,0.8,5.6-0.6,8.2
                                                                                                                                                                    c-2.9,5.7-5.9,11.5-8.8,17.2c-0.1,0.1-0.1,0.2-0.2,0.4c-0.2-0.4-0.4-0.7-0.6-1.1c-1.8-3.5-3.6-6.9-5.3-10.4c-1-2-2.1-4-3.1-6.1
                                                                                                                                                                    c-0.7-1.3-1.1-2.7-1.2-4.2c-0.1-2.6,0.5-4.9,2.1-6.9c1.6-2.1,3.8-3.4,6.5-3.8c0.4-0.1,0.9-0.1,1.3-0.2
                                                                                                                                                                    C-92.7-159.3-92.5-159.3-92.2-159.3z M-87.1-149c0-3.2-2.5-5.7-5.7-5.6c-3.1,0-5.6,2.6-5.6,5.7c0,3.1,2.6,5.6,5.8,5.6
                                                                                                                                                                    C-89.6-143.4-87-145.9-87.1-149z">
                                                </path>
                                                <path class="st19"
                                                    d="M-83.1-152.4c-1.3-3.7-4-5.9-7.8-6.7c-0.4-0.1-0.9-0.1-1.3-0.2c-0.3,0-0.4,0-0.6,0c-0.4,0.1,0.5,0,0.1,0.1
                                                                                                                                                                    l0,4.6c0.4-0.1-0.3,0,0.2,0l-0.2,0c3.2,0,5.7,2.5,5.7,5.6l0,0c0,3.1-2.6,5.7-5.7,5.7c-0.3,0,0.3,0,0,0l0,16.8
                                                                                                                                                                    c0.1-0.2,0.2-0.3,0.2-0.4c2.9-5.7,5.9-11.5,8.8-17.2C-82.3-146.8-82.1-149.6-83.1-152.4z">
                                                </path>
                                            </g>
                                        </g>
                                        <g class="st16">
                                            <image style="overflow:visible;opacity:0.75;" width="108" height="43"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGwAAAAsCAYAAACAPl2hAAAACXBIWXMAAAzDAAAMwwFTdG0jAAAA
                                                                                                                                                                                  GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAACvpJREFUeNrsnAlz48YRhTE4eIra
                                                                                                                                                                                  K7Zz/v+/lnJ25dVBkTgnkKs79entACTXcirlkFVTlElgOOjXx+s3sw7Z9fV7vMKZ18Xfa+Lr63xb
                                                                                                                                                                                  Bvl7Dqgof598lVc7vwlQHDne8wRoL8AMGP7fZ0XdFbC3A6qwUZldS/vvXO57AacfR2ejtff+nGi7
                                                                                                                                                                                  AvY2QFU2luNYj2Nlf1f2fQAQvYF0tHGw9wbATYJ2Bez7wXKgFgbSZhw349jZ2BpojLLBQKnHsR/H
                                                                                                                                                                                  4zjux/EwjicANwnaFbDLwcrNbg7UC0i343g/jg/2/m4GsN4AewHol3F8Hse/DPx7+w2Ptm9AuwL2
                                                                                                                                                                                  fWCtDKgXcD6O45ONjwbajYFZCukIBsALGM/j+Gpgr80BclwTU5F2BeyyV26G3Ro4P47jz/b+CZHl
                                                                                                                                                                                  xnejD7i/RPq8sb+XwCKCPZJBxlOAXXu017YoEF07A+iv4/jbOH6wz5YGSmdp7WjpzyOlMoA2mKcE
                                                                                                                                                                                  MVEG2UuvlgQsTDSBf4RXvACgFGDOBG+kZt2YLR2kPcbBWGGwe3e4b2fp8E8GViPMsUO0/br+cqJT
                                                                                                                                                                                  z2X8EYBTVSGlRsREzfH3ErSd1L1ARD0b41Pm1wGwW7vOQXxnEffJgHLm+Gj3tgStnAn9Ck1gcQFo
                                                                                                                                                                                  4Q09PrxRxGRSF6JQ9FMyk9tlgbpT2ZxHAPYkYB1A04Olx0FqoROUW6uLL8zxi73vheb/BzDtLVaS
                                                                                                                                                                                  a6uJrj1LeOop/Swk9LTU9+ECwOIZ4A2oERHPm5/RHHvWqWDcrdnP53PFItq8S7tvAeJQgpBk+Nz7
                                                                                                                                                                                  OWedni4fkFIHjbAA5D1Hv7fFOWj5hPeFmfSpXp3S1KIApil5LmJSc6RSHgHLRE4KCacJM/0XFY0K
                                                                                                                                                                                  RndAWxv9hJOswSiZWndid42yb2qYh/3GbvrREHeqWggohQzX0HIBpZc0lAkb8uJKw1QzelyEakBG
                                                                                                                                                                                  NQd+EDBzeZ44U/e4rlLuS82vzuTr6xGB3nQTMNL9bSpQyoQ30ZNWmGSFxRYizSwxFpi3F28LMH6X
                                                                                                                                                                                  YERBUvIajqKGdInHqXMjwJEsLGyoE0ylQ2p+naSzEt/38t1CHHbAPLXQ/BwZbgAoxQR3+HWU4ln0
                                                                                                                                                                                  XFLMwj5fAKQSfcUWxdiNnNlCDzY6GDDY3BE5uhGH2VraWEtTScAOVtz3Iq72ErG5zUONL5cMkEk/
                                                                                                                                                                                  dDQ2V9t1S3s+r1tu/MwcbIuoKDGPaoeZzdtI6l5OOB9LyquU6ItvbcJ7UNa9LWRlD761H1qhwK7B
                                                                                                                                                                                  eBY2X41IUmbmRrk3VuSOcWsPvAN4uagFOT5zx9KopaFbc65bGDeHMSMAKzBvh7kLuy5HOm/tuwWa
                                                                                                                                                                                  6o1EYQHnLfDc7mTusGv7zUc44Syt9x/wfiLAk/aIogHyitYxGjMmUlcB4A7Ggl6Ez3/ab5Z27dJq
                                                                                                                                                                                  aGOGjlh4hTTJrY0KxvTIa+3a3oz5DjUkt/kbONQCrO5oczwgbVUQZ5l9VpJOW6mvLaKlx7N7BurN
                                                                                                                                                                                  vq19zh6O936TahjCNL57Tw5SsoUOVmChBeZr8XBHyclH9C135hSecr1/abHlcETEUFxdI/o8MvZw
                                                                                                                                                                                  log00wshcOX8GdnFr3mWNOZptcBztUIyOqz9gL4r4Log5WJARHaIrmdkqGRKVKqdwXt2xhZ/MBnl
                                                                                                                                                                                  k6UXbyB75OUjQGxgrEZYJL3PRy40vRdvjkinytoqRIDnf/9uK/1kSLC6TloGEqIMdD3FSuksvYH8
                                                                                                                                                                                  1WwSUTJy4QAR4DfgDg1+a5jTEln0lyJy/mUcPxlwLnRm6PBbFGCPgCx7vQUeEpTb9bk+wTKnFAe2
                                                                                                                                                                                  EVFqXQfPdgLwzlLsBqBGkKBSoqQXRwoCEnu6HNdnBvAXS/WeTnfYdilkN5psUsdwSvylEb0Xe9k+
                                                                                                                                                                                  +Mc4/m592a193yFl0Js26NYr8ZIohnLmVtvflT3UApHgvaGvbSNMLENP5eCvAM7CANuhPjUAJ4D5
                                                                                                                                                                                  qVo+II1pb9Wjrj6Diu8txX/GhmSPdeVwtkK2T1JCwMkNTNasW6TCnywdrm2SvS3Yd07v7Yd2Uuv6
                                                                                                                                                                                  RDNbwCk+2PW1fbdBWzBA3qkA8goP28PIvTSojMhMdD02tS3ln4mUp+SsRV2NSMFOKPao25wv/y3a
                                                                                                                                                                                  aDkjuubSHNNovUg+ZEJtYj9nKorXoPHu0QXq3wHXlsIGMxCFDhScZyU6kJIahIiRo4SgBGiD9EpR
                                                                                                                                                                                  2p8jak5ta2vhfEs47hJORifJJhzjbMDUg/YWRY/2oxEGq6CE9DDQAiHfzezekn0Osi1+RFSsQJ0r
                                                                                                                                                                                  6HedFOq9ebenpBqOsZRaxNpXIHpJpOKMZDUAnB7Nr69xB7JyizbIWemzPWOZvT6XeBFgBMvPHPxs
                                                                                                                                                                                  xvL+4wMYz9Lqg6eyDp9tUMNCQqkfRJFgH0XWVKMmZSKP0VOP2I+6s3U/2W9VQp2p6S2gYryHdjrM
                                                                                                                                                                                  GDIlDBfIQqxTS6TwVrZgnu27/twomwLMmd8XpJEGvYkzRZKEHZpLrzMRklOQlNIh7Q0wnEdPLSm1
                                                                                                                                                                                  sM9YbxoZR0SZ7ym1CY1QNUBXz3sYPcwYkHU4ovXZIZqZZaJsTt5ZMDQgJRenROp0LepHzF4ffGyR
                                                                                                                                                                                  TnZIURsRW70OFQmweoD1ZOB5FK/BAjuJkEJ6lxo9SyP15Ble3Mvvx8ShmsHeXYguTuyzsZXYYGvk
                                                                                                                                                                                  BqB5zTogDT6AlHjr8SY1rBaPjGikt6Lg50hTC2lg9Sz5IFvq90h7GbYe1gnFvYIBGuhwKTpMp2gm
                                                                                                                                                                                  WoscEbiGQ3ayhzY3NJ0VIp/1EIkHsWeWaOJnN2PLGVrpD5zJxuYTZJdG9oNKYVatsLiIe5i+nsCw
                                                                                                                                                                                  BjSZS9kOGUCX91A/FvjtXPa4etXjBDAXb1sZpPeU2SpJvw0adW2AF/i9Aul3ixajkhNTvTjfWREW
                                                                                                                                                                                  RfOqIdUckB6P0nAG7KOVoj4fkSKCfe5N91f7zPWzGumFWmWHWvAIFniDtBYR8WEiFab0U91SakUD
                                                                                                                                                                                  PUCjPIgGmtsz/JK9Pv17A3Ya0He2qMmVHI2rVaE/pw9L7Y/VqDn3thifowV4JVSLHop3I2cdnBjc
                                                                                                                                                                                  2YN2Nq9f/8HqAptk7it5DVgbCWpghC6b/ic8UUiI1tRH1MwaQrjf5xnmM+SnHhnona39A7b6N+gj
                                                                                                                                                                                  byFpPUnPesi+PWM/qyVOHXDxPPxoRl5i8SWKfCMNYwTdbpFagxn8szCmyub8ioMuS6TDGp7uhrxB
                                                                                                                                                                                  BvD7nxLAzfVUfL47kI4GKdwZcmXX+ummezyb1/dbA+6jHKpZIoWvUVaO6CPvbB1Nij2ec1SbEfaI
                                                                                                                                                                                  9HS0RRQgEE5USiEeNVImd5wfEVUNgHyAY1TCVhvMVwK8JzPE0R76KdEaTDmkqyQPcERuVObop0q0
                                                                                                                                                                                  PQ+oY2wTNhJtH5ExltAfD7JhuUePdtCtlXNTYiY70RmE3zUa2CPYGGuIbtkXM2c6MkQRt2I0ffVw
                                                                                                                                                                                  jBrgl2hOHwHYcMIhe8hJnRABSlaV7AgcEMlktJTHPBKZHn3z9AGHRveg/s9Taz/3YKieW1yK9w+y
                                                                                                                                                                                  f6NHAWLi1JRqkIOwt5A4KKPbDTka7oWkTp6NGGZSom7blAnCkiXYp574ijKXHmTiodFCatZemHeb
                                                                                                                                                                                  TZytP/eUbkjIMIUcWlEqGmaYpx7ujAlFP5yI/NT+GKl86hDLKZkpF7ofEzbIEj1a6jrKU5WcLMtF
                                                                                                                                                                                  i0yd+hoSh2wvOlYdJsDLzmz6UoDNndy9NPqnDq+ecyo4y06fXE454dzaw0z05omzlf056/6ef+AQ
                                                                                                                                                                                  TjzApa/vve/ctcTfOG/MTh8/P9ehGMWZbIqe9b+AuP4bsP/O65L/b8f19T8K4DVY/h9e/xZgAPwr
                                                                                                                                                                                  zXvxONlKAAAAAElFTkSuQmCC"
                                                transform="matrix(0.8673 0 0 0.8673 -141.6667 -127)">
                                            </image>
                                            <g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-122.5-113.4v14.7h-2.1c-1-1.5-2.6-2.9-5-4.2c-2.4-1.3-4.5-2-6.4-2l-0.7-2.5c2.9-1.9,6.8-3.7,11.8-5.5
                                                                                                                                                                      v-0.5h-13.1v-2h17v2H-122.5z M-124.9-110.4c-2.8,1-5.4,2.2-7.9,3.6c2.9,1,5.5,2.5,7.9,4.6V-110.4z M-129.6-98.1
                                                                                                                                                                      c-0.7-0.7-1.6-1.3-3-2l1-1.9c1.3,0.5,2.4,1.3,3.4,2.5L-129.6-98.1z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-117.2-113.4v14.7h-2.3v-14.7h-2.4v-2h6.9v2H-117.2z"></path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-103.5-113.4c0.6,1.7,1.9,2.6,4,2.6c0.3,0,0.6,0,1-0.1l1.5,1.9c-1.2,2.4-1.7,4.1-1.7,5.2
                                                                                                                                                                      c0,2.5,0.3,4.1,1,5l-1.6,0.9c-1-1.5-1.5-3-1.5-4.8c0-1,0.1-2.1,0.3-3.1c0.1-0.4,0.3-1.4,0.8-2.9c-1.4-0.2-2.7-0.7-3.8-1.5
                                                                                                                                                                      c-1.3-0.9-2.1-1.9-2.4-3.2c-1.9,1.4-2.7,2.9-2.7,4.4c0,1,0.4,1.5,1.1,1.5c0.9,0,2.1-0.7,2.5-1.5h2.2c0.5,0.8,0.7,1.9,0.7,3.4
                                                                                                                                                                      c0,3.8-2.1,5.8-6.1,5.8c-0.7,0-1.7-0.2-2.5-0.5c-1.1-0.4-1.9-1.5-2-1.6c-0.6-0.8-1-1.4-1.3-2c-0.3-0.6-0.6-1.4-1.2-2.5l1.4-1.3
                                                                                                                                                                      c0.6,1.6,1.2,3.4,2.8,5c0.4,0.4,1,0.6,1.5,0.7c0.5,0.1,1,0.1,1.2,0.1c1.1,0,2-0.3,2.7-0.9c0.8-0.6,1.2-1.4,1.2-2.5
                                                                                                                                                                      c0-0.5-0.1-0.9-0.3-1.3c-0.9,0.9-1.9,1.4-3,1.4c-2.1,0-3.3-1.6-3.3-3.8c0-1.3,0.6-2.8,1.8-4.4h-7.2v-2h20.8v2H-103.5z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-82-113.4v14.8h-2.3v-11.1c0-0.8-0.2-1.5-0.7-2.1c-0.5-0.7-1.1-1-1.8-1c-1.2,0-2.1,0.9-2.1,2.1
                                                                                                                                                                      c0,1.7,0.6,2.4,1.7,2.4c0.3,0,0.7-0.2,1.2-0.5l0.5-0.4v2.6c-0.7,0.7-1.4,1-2.2,1c-0.8,0-1.5-0.5-2.1-1.3l-0.5-0.7
                                                                                                                                                                      c-0.7,1.4-1.7,2.1-3,2.1c-0.9,0-1.7-0.4-2.2-1.2v-2.5c0.8,0.9,1.3,1.2,1.8,1.2c1.1,0,1.8-0.8,1.8-2.7c0-1.5-1.1-2.3-3.5-2.4
                                                                                                                                                                      c0,0-0.1,0-0.1,0h-0.7H-97v-2h3.5c1.2,0,2.3,0.8,3.2,2.4c0.5-1.3,1.7-2.3,3.1-2.3c1,0,2,0.6,2.9,1.7v-1.7h4.5v2H-82z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-76.5-113.4v14.7h-2.3v-14.7h-2.4v-2h6.9v2H-76.5z"></path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-75.4-113.4v-2h14.8v2H-75.4z M-61.9-96.7c-1.5-1.1-3.2-2.1-5.3-2.9c-2.3-1-4.2-1.5-5.8-1.5l-1-3.1
                                                                                                                                                                      c1.3,0.2,2.1,0.2,2.6,0.2c1.4,0,2.8-0.3,4.2-0.8c1.9-0.7,2.7-1.6,2.7-2.7c0-1-0.4-1.8-1.2-2.4c-0.7-0.5-1.6-0.8-2.7-0.8
                                                                                                                                                                      c-0.7,0-1.3,0.1-1.9,0.4c-0.7,0.3-1,0.7-1,1.2c0,0.7,0.4,1,1.7,1.1l-1.3,1.9c-1.7,0-3.1-1.2-3.1-2.9c0-1.3,0.7-2.3,1.9-2.9
                                                                                                                                                                      c1-0.5,2.2-0.8,3.6-0.8c1.6,0,3,0.4,4.3,1.2c1.4,0.9,2.2,2.2,2.2,3.8c0,1.5-0.8,2.9-2.3,4c-1,0.7-2.2,1.2-3.7,1.7
                                                                                                                                                                      c2.6,1,5,2.3,7.4,4.1L-61.9-96.7z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M-57-113.4v14.7h-2.3v-14.7h-2.3v-2h2.3l0-0.4c0.1-1.3-0.6-2.6-2.2-3.6c-1.5-1-2.9-1.5-4.3-1.5
                                                                                                                                                                      c-1.3,0-2.8,0.4-4.4,1.1c-0.9,0.4-2.2,1.2-4.2,2.4l-1.2-1.7c3.8-2.8,7-4.2,9.6-4.2c2.1,0,4,0.7,5.9,2.1c2.1,1.5,3.1,3.3,3.1,5.3
                                                                                                                                                                      c0,0.2,0,0.3,0,0.5h1.9v2H-57z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </a>
                                </g>
                                <g id="borishal">
                                    <a href="{{ route('subcategory-page', 'বরিশাল') }}" xlink:href="">
                                        <path class="st13"
                                            d="M72.9,229.1c0.9-1,2.2-2.6,2.2-2.6s1.2-1.5,1.8-2.1s0.9-1.8,0.9-1.8l0.5-5.6c0,0,0-1.5,0.5-1.6
                                                                                                                                                                      s1.9-2.1,1.9-2.1v-1.8c0,0,1.5-0.4,1.8-0.8s0.8-2.5,0.8-2.5s-1.5-1.4-1.9-1.8s-1.5-2-1.5-2s-0.5-1,0-1.4s1.1,0,1.2-1.4
                                                                                                                                                                      s-0.2-3-0.2-3.6s0.5-2,0.5-2h2.2c0,0-0.2,1.5,0,2.8s0.5,3.5,0.5,3.5s-0.6,1.9-0.4,2.4s1.1,2,1.1,2.4s0.1,2.2,0.1,2.8
                                                                                                                                                                      s-0.1,1.1-0.4,1.6s-0.9,1.2-1,1.6s-0.9,1.4-0.9,2s-1,2.4-1,2.4l-0.9,1.4c0,0,0.8,1.4,1.4,1.8s2,1.1,2,1.1s0.4,1.6,0.9,1.6
                                                                                                                                                                      s0.8,2.1,2,0s0.4-1,1.6-3.1s1.1-2.9,1.5-3s1.9-2.9,2-3.6s1.4-4.5,1.4-4.5s0.8-1.5,2.9-1.5s3.1,1,4.1-0.2s4-6.9,4-6.9l2.8-5.4
                                                                                                                                                                      l0.1-11.4l-2.4-5.4c0,0-1.8-2.1-1.6-3s1.2-3.1,1.2-3.1s-0.1-7.2-0.1-7.6s-2.2-3.2-2.4-3.6s-2.6-2-2.6-2l-1.5-0.6l-2.9-0.8
                                                                                                                                                                      l-2.2-0.8l-2.2,0.5l-0.6,0.9c0,0-0.1,0.9-0.1,1.2s-0.2,1.2-0.2,1.9s0,1.5,0,1.5s-0.1,1-0.1,1.4s0,0.8-0.4,1.1s-0.6,0.8-0.9,1.1
                                                                                                                                                                      s-0.2,0.4-0.2,0.4l-1.5,0.4l-0.6-1.4l1.1-1.4c0,0,0.5-2.5,0.5-2.9s-0.1-3-0.1-3.6s-0.2-1.4,0.2-1.9s1.2-1.2,1.6-1.4
                                                                                                                                                                      s0.9,0.1,1.5,0.1s2,0.2,2.5,0s1-1,1-1l1.4-3.8l-1.5-2.9l-0.9-3.4l-0.6-2.6l-1.1-2.1l-1-2.9l-1.4-2.4l-1.9,0.8l-1.2,0.6l-1.1,1.6
                                                                                                                                                                      l-0.9-0.8c0,0-1-0.4-1.4-0.4s-2.2-0.1-2.2-0.1s-0.9,0.4-1,0s-0.8-1.6-0.8-1.6l0.4-1.5l1.4-0.1l1.1,0.2c0,0,2.1,1.6,2.6,0.5l1-1.2
                                                                                                                                                                      l-0.6-1.9l-0.1-0.9l0.4-0.5c0,0,0.2,0,0.6-0.1s1.2-0.9,1.2-0.9s0.2-1.6,0.2-2s0.1-2.2,0.1-2.6s0.8-2.6,0.8-2.6l1.4-2.9l2-0.4
                                                                                                                                                                      c0,0,0.5,0.2,1,0.4s0.8,0.2,1.2,0.5s1.9,0.8,2.2,0.8s1.4-1.5,1.4-1.5L98,116l-1.1-2.5l-2.5-2c0,0-0.1-1-0.4-1.4s-1.4-1.5-1.4-1.5
                                                                                                                                                                      l-1.4-1l0.1-4.2l-1.1-0.9l-1.6-0.6l-0.5-1.9l0.9-0.6h1l0.9,1.1l1-1.9c0,0-0.1-0.2,0.2-0.6s1.5-0.8,1.9-0.9s0.8-1.2,0.8-1.2
                                                                                                                                                                      s0.1-0.8-0.2-0.8S92.5,95,92.5,95l-0.8-0.5c0,0-1.1,0.1-1.1,0.5s-0.5,2.4-0.5,2.4L88.9,98c0,0-0.8-0.4-0.8-0.8s0.1-1.9,0.1-1.9
                                                                                                                                                                      s-0.1-1.1,0.2-1.2s0.9-0.8,0.9-0.8l-0.4-0.8c0,0-1-0.2-1.1,0.2s-1,2.6-1.1,3s-0.4,1.8-1.1,1.4s-1.1,0.6-1.1,0.6h-3h-0.6l-1.5-2.1
                                                                                                                                                                      l-2-2.4l-2.1-0.9h-1.5l-1.4,1l-0.6,0.8l-3.1,1.2l1,1.9l2.4,1.8c0,0-0.5,1.2-0.9,1.4s-1.2,1.4-1.2,1.4l-0.4,1.4l-0.8,1.1l-5.9-0.8
                                                                                                                                                                      l-2.6-1.9l-0.2-2.8c0,0,0.1-2.2,0-2.6s-0.8-3-0.8-3l-1.2-1.5l-2.4-0.4l-1.5,1.1h-2L50.8,93l-0.5,1.4l-0.5,1.1L49,97l-1.8,1.1
                                                                                                                                                                      l-1.8,1l-2.1,1.2l0.6,2.1l-2.4,1.5l-1.5,1.9l-0.6,1.9l-1.1,2.4l-1.4,2.6l-1.5,2l-2.8,2l-2.5,0.9l-3,0.9l-1.8-0.4l-2.2,0.2
                                                                                                                                                                      l-1.6-0.2l-2.9-1.4l0.1,1.4l1.2,0.9l3,1.1l1.2,1.4l0.1,1.9l-1.2,2.1l-0.6,1.5l-0.9,2.1l1,1l0.8,1.1l-0.4,3.5l-0.5,2.8l0.4,2.6
                                                                                                                                                                      l0.5,1.4l-0.4,1.8l-1,1.5l-1.6,0.6l-0.5,0.5l-0.1,0.9l2,1.1v1.6l-0.1,0.9l1.5,2.1l0.8,1.9l0.8,1.5l0.9,0.9l-0.8,1.5l0.4,1
                                                                                                                                                                      l0.5,3.5l0.8,2.4l0.1,0.8l-3.8,0.2h-2l-1.1,0.4l-0.4,1l0.6,2l0.5,0.6H22l1.5,0.2l0.9,0.8l0.6,2.1l-0.4,1.6l0.1,1.2l-2.2,1.4
                                                                                                                                                                      l-1.6,0.9l-0.4,0.6l0.1,1.8c0,0-0.1,0.9,0.8,0.9s2.5,0,2.5,0l1.5-2.2l1-2.1c0,0,0.1-0.8,0.8-1.2s1.1-1.6,1.1-1.6l2.4-2.2l0.8-3.5
                                                                                                                                                                      l1.4-2.2l1.6-0.6l0.6-0.1l2,0.5v1.6l-1.4,1.6h-0.9l-0.9,0.8l-0.1,1.5l-1.1,3.2l-1.4,2l-2.2,1.4l-1,1.6l-3.1,3.2l-2.8,6.4l-2,4.9
                                                                                                                                                                      l-1,4.6l0.1,4.1l1.6,1.8l0.6,2.8l1.4,3.1l0.5,2.5h1.1l-0.5,7.6l-0.5,0.9v4.5l1,4.9l2.8,3.8c0,0,2.9,1.4,3.2,1.4s1.1-0.9,1.1-0.9
                                                                                                                                                                      l-0.9-3.9c0,0,0.2-1.6,0.4-2.6s0.1-1.6,0.4-2.2s0.5-1.4,1.1-1.8s1.1-0.5,1.8-1.1s2.1-4.4,2.1-4.4l-0.2-3v-1.5l2.5-1.9l2.1-1.1
                                                                                                                                                                      l0.8-0.8l1.5-0.4l0.5,0.8v1.1l-1.1,1.6l-1.5,1l-1.5,1.1l-0.4,2l-0.6,1.6l0.6,2.9v1.8l-1.1,2l-1.8,1h-1.4l-0.6,0.1l-0.6,2.2
                                                                                                                                                                      l1.9,3.9l3.6,1.2l2.6-1.6c0,0,0.4-3.6,0.4-4.1s0.4-2,0.4-2l1.9-2l5-5.5c0,0,1.8-1.2,1.9-1.6s0.5-1.8,0.5-1.8l0.5-0.8l1.1-0.2H55
                                                                                                                                                                      h2.8c0,0,1.1-1.2,1.1-1.8s0-3.2,0-3.2l1.4-2.9l1-1.4l1.4-0.1l0.8,0.2l1.1,1.2l-1,2.1l-0.4,2.5l-0.9,3l-0.5,1L61,218
                                                                                                                                                                      c0,0-3.4,0.2-3.9,0.2s-2,0-2,0s-1.6,0-1.8,0.4s-1,2.4-1,2.4l-0.9,1.4l-4.8,4.1l-2,2.9l-0.4,3.2l-0.8,1.9l-1.1,2l-3.4,2l-1.1,0.4
                                                                                                                                                                      l-0.6,0.5l0.5,11.4l3.9,1.2l1.6-1.1l1.8-2.1l0.4-1.2l0.1-4.5l1.6-1.5l1.6,0.2l-0.1,3.6l0.1,1.8v1.8l-1.6,0.9c0,0-1,0.8-1.2,1.1
                                                                                                                                                                      s-0.8,1.1-0.8,1.1l0.1,2.5c0,0,2.4,3,2.8,3s3,0.4,3.6,0.4s2.4,0,4,0c1.6,0,3.1-0.4,3.5-0.6s2-1.1,2.4-1.8s0.5-1.2,1.1-1.8
                                                                                                                                                                      s0.8-0.5,1.6-1s2-1.5,2-1.5l4.1-11.4c0,0,0.6-3.2,0.6-3.9s-0.5-3.1,0-4S72,230.1,72.9,229.1z">
                                        </path>
                                        <path class="st13"
                                            d="M96,109.1c0.4,0.2,3.4,0.4,3.4,0.4h3c0,0,0.5-0.4,0.6-0.8s0.4-0.8,0.4-0.8s0.8-0.4,1.1-0.5s1.2,0.1,1.2,0.1
                                                                                                                                                                      l0.5,0.6l0.5,1.4c0,0,0,1.1,0,1.9s1.2,1.5,1.2,1.5s1.1,0.9,1.9,1.5s1.5,0.5,2,0.5s0.9-0.8,1.5-1.2s-0.2-1.1-0.2-1.5
                                                                                                                                                                      s-0.9-1.4-0.9-1.4s-0.8-1.2-1.5-2s-0.5-1.5-0.5-1.5s0-1.2,0-1.6s-1.1-1.1-1.8-1.8s-1.2-2.2-1.8-2.9s-1.4-1.6-2.4-2.4
                                                                                                                                                                      s-1.6-1.6-1.6-1.6l-0.9,1.1c0,0-1,1-2,1s-0.5,0.2-1.4,0.8s-0.6,0.8-1.1,1.6s-0.5,1.1-1.1,2.2s-0.6,0.9-1.2,1.6s-0.5,1.6-0.9,2.4
                                                                                                                                                                      S95.6,108.9,96,109.1z">
                                        </path>
                                        <path class="st13"
                                            d="M113.4,119.9c-1.2-0.8-1-0.4-1.6-0.5s-1.6,0-2.1,0s-2.8-0.4-3.1-0.5s-0.6-0.5-1.2-0.5s-1,0.1-1.4,0.1
                                                                                                                                                                      s-1.1,0.4-1.8,0.4s-1.1-0.2-2.5-0.1s0,0-0.5,0.2s-0.4,0.5-1.1,1.4s-0.5,0.9-1.6,1.6l-1.8-0.8c0,0,0,0-0.9-0.2s0,0-0.4-0.2
                                                                                                                                                                      s-0.6,0-0.6,0l-1.6-0.4c0,0,0,0-0.9,0.5s-0.5,0.9-0.5,1.9s0.1,6.5-0.1,8.2s-0.4,0.8-0.8,1.2s1.2,1.5,1.8,1.6s1.2,0.4,1.9,0.8
                                                                                                                                                                      s1.1,0.6,1.6,0.9s0.1,0.6,0.1,1.1s-0.2,1.2-0.5,1.6s-0.1,1.6-0.1,2.1s0.6,0.9,0.9,1.4s1,1.8,1,1.8s0.5,0,0.9,0s0.9-0.4,1.2-0.6
                                                                                                                                                                      s2-1.8,2.2-2.8s0-1.9,0-3.6s0-2.5,0-2.5l-0.9-1.2V131c0,0,1.6-0.9,2-0.9s2.5,0.1,3.8,0.2s0.6-0.5,1.2-0.6s1.1-0.8,1.1-0.8
                                                                                                                                                                      s1.4,0.2,4.2,0.2s1.5-1.4,1.5-1.4l1.1-0.1c0,0,2.4-1.4,2.8-1.8s0-2.6,0-2.6s-0.1-0.6-2.1-2.8S114.6,120.6,113.4,119.9z">
                                        </path>
                                        <path class="st13"
                                            d="M138.3,169.3c-0.4-0.8-0.5-1.5-0.5-1.5l-9-6.5l-1.1-5.9c0,0,0-1.1,0-1.5s0-1.1-0.5-1.2s-2.2-1-2.8-1.2
                                                                                                                                                                      s-2.6-1-2.6-1l-1.9-1.5l-2.1-0.9l-0.6-12.1l-0.8-1.8l-0.6-1.4c0,0-0.8-1.5-1.1-1.5s-2.9,0-4.1,0s-4,0-4.5,0s-2,0.5-2,0.5
                                                                                                                                                                      l-0.5,1.2l-1.1,2.5c0,0,0.5,0.9,0.5,1.6s-0.2,3.4-0.2,3.4l-0.8,1l-0.6,1.1l-0.1,1.4l-0.2,3l-1.1,2v2.4l0.2,0.9l0.5,0.8
                                                                                                                                                                      c0,0,0.4,1.6,1.1,1.9s1.4,0.4,1.4,0.4c0.8,0.5,1.9,2.8,1.9,2.8s0.5,1,1,1s1.4,0,1.8,0.1s0.5-0.1,1.5,0.8s0,0.2,1,0.9
                                                                                                                                                                      s1.8,1.2,2.1,1.8s0.5,0.8,1.1,2s0.5,0,0.8,2.1s0.2,2.9,0.2,2.9l0.2,1.2c0,0,0.6,0,0.9,0.6s0.9,5.1,0.9,5.1s-1.2,0.2-1,2.1
                                                                                                                                                                      s0.1,19.5,0.1,19.5l-1.4,3.6l-0.9,1c-0.6,0.6-1.2,0.6-1.4,1s-0.2,1.5-0.4,1.9s-0.2,0.9-0.2,0.9s-0.4,0-0.6,0.9s-0.2,0-0.2,0.9
                                                                                                                                                                      s0.4,0.5,0,0.9s-0.6,0.1-0.6,0.1l-0.8,0.5l0.1,1.2v1.6l-0.5,0.4c0,0-0.2-0.8-0.2,0.6s0.5,2.9,0.5,2.9c0.5,1,0.5,1,0.5,1.9
                                                                                                                                                                      s0,2.4,0,2.4s-1,0.1-1.1,0.8s-0.8,1.1-0.9,1.5s-0.1,0.4-0.1,0.4l-1.1,0.8l-0.2,1.5c0,0-0.2,1.6-0.2,2.4s0.5,1.9,0.5,1.9
                                                                                                                                                                      s0.2,0,0.9,0s2,0.1,2,0.1l1.2-2.4l0.2-2l0.9-0.9c0,0,0.5-0.4,1-0.8s1.5-2.2,1.5-2.2s-0.1-0.5,0-0.9s0.4-0.9,0.4-0.9l0.9-0.1
                                                                                                                                                                      c0.8,0,0.8,0,0.8,0l0.2,1.1l0.1,1.1c0,0-0.2,0.4-0.5,0.8s-0.6,0.9-1.2,1.4s-0.4-0.4-0.6,0.5s-0.1,0.6-0.9,1.5s-0.8,0.9-0.8,0.9
                                                                                                                                                                      l-0.2,0.9c0,0-0.9,0.2-0.9,0.9s0,1.6,0,1.6s-0.4,0.5-0.6,1.4s-1.1,1-0.5,1.8s1.8,1.8,3.2,1.4s2.2-1.2,2.2-1.2l1.1-0.4
                                                                                                                                                                      c0,0,0.8-1.5,0.9-1.9s0.2-0.6,0.4-1.5s0.2-2.2,0.2-2.2s1-0.5,1-0.9s0-0.4,0-0.4s1.1-0.1,1.5-0.4s-0.5,0.4,0.4-0.2
                                                                                                                                                                      s-1.1-0.1,0.9-0.6s1.1-0.2,2-0.5s1.4-0.8,1.9-0.8s1.1-1.5,1.1-1.5l0.9-1.2v-1.6c0,0,0.2-0.5,0.8-0.9s0.9-1.1,1.8-1.5
                                                                                                                                                                      s1.6-0.6,2.2-1.5s0.1-0.4,0.6-1.9s0.4-1.6,0.6-2.8s0.5-2.9,0.5-2.9l2.8-13.8l2.2-22.6c0,0-1.2-1.2-1.2-1.6S138.6,170,138.3,169.3
                                                                                                                                                                      z">
                                        </path>
                                        <path class="st13"
                                            d="M155.1,179.8c-0.9-0.4-0.9-1-0.9-1l-1.2,0.4c0,0-0.2,0.5-0.6,0.6s-1.6,0.9-1.6,0.9l1,1.9
                                                                                                                                                                      c0,0,0.5,0.5,0.9,0.8s0.8,0.4,0.8,0.4l1.2-0.4c0,0,0.8-0.2,1.1-0.2s0.6-1.1,0.6-2S156,180.1,155.1,179.8z">
                                        </path>
                                        <path class="st13"
                                            d="M153.4,176.6l1.4-0.1v-0.9v-2l0.2-0.5v-1.8l0.9,0.5l0.1-0.6l-0.5-1c0,0-0.6,0-1.5,0.1s0,0-0.5,0.5
                                                                                                                                                                      s-0.2,1-0.8,1.4s-0.4,0.9-0.5,1.2s0,1.9,0,1.9L153.4,176.6z">
                                        </path>
                                        <path class="st13"
                                            d="M150.8,198.5c1.2-1.2,1-1.4,1.6-1.9s0.6-9,0.6-9l-0.4-0.8c0,0-0.1-0.5-1-0.5s-1.9-0.1-1.9-0.1l-0.2,0.5
                                                                                                                                                                      l-0.4,1.2l1.1,1.8c0,0-0.1,0.8-0.5,1s-0.8-0.4-0.8,0.9s-0.1,2.1-0.1,2.5s-0.2,2.1-0.2,2.1s0.2-0.4-0.4,1.1s-0.5,2-1,2.4
                                                                                                                                                                      s-1,0.5-1.2,1.1s-0.4,1.5-0.4,1.5s0.9,0.6,1.6,0.6s2.9-3.2,2.9-3.2S149.5,199.8,150.8,198.5z">
                                        </path>
                                        <path class="st13"
                                            d="M153.6,202.8c0,0,0-2,0-2.5s-0.2-0.9-0.2-0.9s-0.6-0.6-1.6-0.1s0,0-0.6,0.6s0,0.8-0.4,1.6s0,2.6-0.2,3.6
                                                                                                                                                                      s1.1,2.9,1.1,2.9l0.5,0.1l0.6-0.8c0,0,0-0.6,0.2-1.9s0,0,0.5-0.6s0.4-0.8,0.4-0.8L153.6,202.8z">
                                        </path>
                                        <path class="st13"
                                            d="M147.1,206.1l-1.4,0.5c0,0,0,1.4,0,1.8s0,1.5-0.2,3.1s0,0-1.1,0.5s0,0-0.5,0.2s-0.2,0.9-0.2,0.9l0.4,1.5
                                                                                                                                                                      v1.9l1.1,1.8h1.6l1.1-0.4l1-2.9l-0.4-8.9L147.1,206.1L147.1,206.1z">
                                        </path>
                                        <path class="st13"
                                            d="M110.5,173.6c0,0.8-0.1,2.1,0.1,2.6s0.2-0.1,0.2,0.5s0.5,1.2,0.5,1.2s0.2,1.1,0.9-0.2s0.6-1.4,0.6-1.4
                                                                                                                                                                      l1-1.1c0,0,0.2-1.2,0-2.1s-0.2-1.5-0.2-1.5l-0.8-0.1c0,0-0.4-0.8-0.4-1.1s-1-0.8-1-0.8l-0.5,2.4l0.1,0.6
                                                                                                                                                                      C111.1,172.6,110.5,172.9,110.5,173.6z">
                                        </path>
                                        <path class="st13"
                                            d="M108.3,174.5l-0.8-0.8l-1.2,0.6l-0.3,2.2l1.4,2.2l1,1l0.2,1.1l0.8,1.1c0,0,0.5,3.1,0.5,3.5s0.1,0.9,0.1,0.9
                                                                                                                                                                      l-0.1,4.6l0.5,2l1.1-0.1c0,0-0.5-6.9-0.4-7.9s0.8-0.8,0.8-0.8l0.6,1.1l0.8,0.5c0,0,0-0.6,0.1-2.8s-0.1-0.6-0.9-1.6s0,0-0.5-0.2
                                                                                                                                                                      s-0.5-0.5-1-1s-1-1.1-1.6-1.5S109,177,109,177L108.3,174.5z">
                                        </path>
                                        <path class="st13"
                                            d="M105.4,212.4c0,0,0,0-0.8,0s-0.6,0.4-1,0.8s-0.2,1.8-0.4,2.5s0.9,1.6,1.4,1.9s0.1,1,0.1,1l0.6,1.2l0.9-0.1
                                                                                                                                                                      l-0.1-2.5l0.2-3.8L105.4,212.4z">
                                        </path>
                                        <path class="st13"
                                            d="M102,214.8c0,0,0,0-0.8,0.6s-0.6,0.8-1.9,1.6s-1.5,1.5-1.5,1.5s-2,2.5-3.6,2.5s-0.9,0.2-1.1,2.6
                                                                                                                                                                      s-0.1,1.1-0.8,1.9s-0.4,1.2-0.1,2s0,0,0.5-0.2s0.9-0.5,0.9-0.5s0.9,0,1.5,0s0.4-0.8,0.4-1.1s1.4-0.6,1.4-0.6s0.6,0.1,1,0.2
                                                                                                                                                                      s0.2,0.6,0.1,1.5s-0.1,0.8-0.9,1.5s-1.4,0.8-2.1,1.1s-0.9,2.8-0.9,3.1s0.2,0.8,0.8,1.2s1.9,0.1,2.2,0.1s1.8-0.4,2.6-0.9
                                                                                                                                                                      s1.1-2.4,1.6-3.2s0.8-2.9,0.9-3.4s0.1-2.6,0.1-3.6s-0.4-2.5-0.4-3s0.5-4.9,0.5-4.9L102,214.8z">
                                        </path>
                                        <path class="st13"
                                            d="M106.4,238.3c-0.8-0.6-0.2,0.2-0.8-0.6s-0.4-0.2-0.5-0.9s-1.2-1.1-1.2-1.1s-1.1,3-1.5,3s-0.9,0.4-1.6,0.4
                                                                                                                                                                      s-1.5,0-2,0s-1.1,0-1.1,0s-1-0.5-1.2,0.6s-0.5,2.6-0.5,3s0,0.4,0,1.9s0,2.5,0,3s0.2,0.9-0.1,1.6s-1.1,1-1.1,1.5s-0.5,1.4,0.1,1.4
                                                                                                                                                                      s1.2,1.2,2.5,0s1.8-1.9,1.9-2.2s0.4-0.1,0.9-1.4s0.4-1.1,1.1-2.1s0-1.1,1.2-1.4s1.4,0.5,1.8-0.2s0.8-1.1,0.8-1.5
                                                                                                                                                                      s-0.2-0.5,0.1-1.1s1-1.2,1-1.2s1.5-0.9,1.2-1.4S107.1,238.9,106.4,238.3z">
                                        </path>
                                        <path class="st13"
                                            d="M116.8,236.1c-0.2,0.4-0.9,0.9-0.9,0.9s0.2,0.5-0.1,1s-1.2,0.9-1.2,0.9h-0.8c0,0-0.6-1.2-1.8,0
                                                                                                                                                                      s-0.4,0.5-1.1,1.2s-0.4,0.2-0.8,0.8s-0.8,2.4-0.8,2.4l0.5,1c0,0-0.2,2.9,0.9,1.6s2.4-3.6,2.4-3.6s-0.5-0.8,0.4-1
                                                                                                                                                                      s-0.6,0.2,0.9-0.2s0.9-0.8,2.1-0.8s2.5-2,2.5-2l-0.2-1.9C118.8,236.4,117,235.8,116.8,236.1z">
                                        </path>
                                        <path class="st13"
                                            d="M124.3,243.6c0,0,0.4-0.9-0.5-0.9s-0.8,0.6-0.8,0.6l-0.2,1.1c0,0-0.8,0.6-0.4,0.9s1,0.6,1,0.6
                                                                                                                                                                      s-0.4,0.5,0,0.6s0.5,0.9,1,0.2s0.5-0.6,0.5-0.6l1.5-0.5l-0.4-2L124.3,243.6z">
                                        </path>
                                        <path class="st13"
                                            d="M92.3,256.3l-1.6,0.2h-0.8l-0.4,0.5l1.1,0.9c0,0-0.4,0.4,1,0.8s1,1.1,1.9,0.2s0.9-0.1,0.9-0.9s0-1.2,0-1.2
                                                                                                                                                                      s-0.6-0.5-1-0.5S92.3,256.3,92.3,256.3z">
                                        </path>
                                        <path class="st13"
                                            d="M88.8,252.6h-1.2l-1,0.5l-0.6,1c0,0-1.1,0.5-1.5,0.5s-1.8,0.2-1.8,0.2s-0.1-0.1,0,0.5s-1.4,0.9,0.9,1.1
                                                                                                                                                                      s1.2,0.4,2.2,0.2s1.1,0.1,1.5-0.5s0.8-1.1,0.8-1.1s0.1,0.9,0.8-0.2s0.9-1.8,0.9-1.8L88.8,252.6z">
                                        </path>
                                        <path class="st13"
                                            d="M85.1,246.3c0.4,0,1.4,0.1,1.8-0.5s0.5-1.2,1.4-2.2s1.4-1.9,1.5-2.2s0-1.6,0-1.6s-0.1-0.6,1-1
                                                                                                                                                                      s1.9,0.1,1.9-1s0.4-2.2,0-2.9s-0.8-0.8-1-1.5s-0.6-1.2-1-1.6s-2.1-2.1-2.1-2.1s-1.2-0.1-1.2-0.5s-0.5-1-0.5-1s-0.1-0.6-0.9-0.6
                                                                                                                                                                      s-2.1,0-2.1,0l-1.8,1.4l0.1,1.2c0,0-1,1.4-0.5,1.8s2,1.5,2.1,1.9s0.4,0,0.4,1.5s0.5,1.1,0,2.1s-0.2,0.8-1.2,1.9s-0.2,0-1,1.1
                                                                                                                                                                      s-1.1,1.8-1.1,2.6s-0.4,2,0.2,2.5s1.1,0.9,1.8,0.9S84.8,246.3,85.1,246.3z">
                                        </path>
                                        <path class="st13"
                                            d="M81.1,229.8c0.5-1.4,0.8-1.5,0.5-2s-0.6-1-0.6-1l-1.1-0.5l-1.5,1.4c0,0-0.5-0.2-0.6,0.8s-0.4,1-0.4,1.5
                                                                                                                                                                      s-0.2,0.5-0.6,0.9S76,232,76,232l-1,0.8l-0.9,0.8c0,0-0.5,0.1-0.5,0.6s0,0.8,0.9,1s1.1,0.1,1.5-0.2s1.1-1.1,1.6-1.5
                                                                                                                                                                      s-0.5,0.6,0.5-0.4s0.1-0.1,1-1s1.2-0.9,1.6-1.5S80.6,231.1,81.1,229.8z">
                                        </path>
                                        <path class="st13"
                                            d="M80.6,235.3l0.8-0.6l-1.2-1c-0.6,0.8-2.6,2.8-2.8,3.1s-0.4,0.9-0.6,1.2s-0.2,0.4-1,1.1s-1.1,1.2-1.1,1.2
                                                                                                                                                                      c-1,0.8-1.8,1-1.8,1.5s0.4,1.1-0.5,1.9s-0.6,1.6-0.6,1.6s0,0.6,0,1.6s-0.2,1.8-0.2,2.1s-0.2,0.5-0.2,1.2s0,1.5,0,2s-0.1,2,0.4,2
                                                                                                                                                                      s0.6,0.8,1.6-0.1s1.2-1.1,1.9-2s0.8,0.1,1-1.5s0.2-3,0.2-3.6s-0.2-1.4,0-1.8s-0.1-1,0.9-1.8s0.9-0.6,1.4-1.8s-0.1-0.9,0.6-1.8
                                                                                                                                                                      s0.9-1.5,0.9-1.5l-0.2-2.2l0.1-0.8L80.6,235.3z">
                                        </path>
                                        <path class="st13"
                                            d="M96.8,96.6c0.1,0,0.2,0,0.2,0l0,0c0,0,0.2,0,0.4,0c0.9,0,1.5-0.4,1.5-0.4l0.6-0.8l-0.1-1.8l-0.8-0.4
                                                                                                                                                                      l-0.2,0.9c0,0-0.5,0.2-0.9,0.5s-0.4,0.2-0.4,0.2s-0.9,0.1-0.9,0.5S96.1,96.6,96.8,96.6z">
                                        </path>
                                        <g>
                                            <g class="st18">
                                                <image style="overflow:visible;" width="100" height="84"
                                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGUAAABVCAYAAABQBipiAAAACXBIWXMAAAsSAAALEgHS3X78AAAA
                                                                                                                                                                                  GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAvJJREFUeNrsmgtP01AYhlfWCSig
                                                                                                                                                                                  eJmKN8T//7eMCfGGdOtl7TxL3pO8OXQIRpN2eZ7kTbeuJN15+p3bmEwAAAAAAAAAAAAAAAAAAAAA
                                                                                                                                                                                  AAAAAAAAAABGQ7Yj97/te6yTI1L+4z1nyetsi5B1j5w1Uv79/e5ZpjqmYmLjdzq2yftByxmTlNj4
                                                                                                                                                                                  ecgs5IEyMzmRTlmFNHZsLYOVk41IyJ6E7Ic8DDkOOQo5lJwobW1C6pBlSGnH2kS1Vj1I+Qshm4o4
                                                                                                                                                                                  kIynIc91PNH5mUlpTUgR8ku5CrkOWeizWnIGJSYbkZBDCXgRcqa8CjlV5fRJWUjCj5DvId9Cvur4
                                                                                                                                                                                  U5+VQxOTj0jI45B5yLuQD8prVcthj5RG1XAtARsRlyFfQj7bd18PbXzJRybkfcjHkAu9fmnd19Qq
                                                                                                                                                                                  P44plYnZVMszdX/7uraTwFUyM0PKPYRcKOdWJbHr2kue/NYG+yNdd6DrWhtvCr0ezKA/HVGX9cmE
                                                                                                                                                                                  nOmpP9JTn9vfZj2LyHSKXNoEoND7RtfQfd1RyIW6rfca3J/omqlVRZdUSBRQJbOwhc61yWJ0MJOe
                                                                                                                                                                                  fOBC3qoyzvV6rjFhJgl1TxU0Ol/Z+uRaudIs7FLHwhaVa6Tc3Drpm/ZuquSNBvRTdVWdGrqzWVYt
                                                                                                                                                                                  AZXJWNiUOCauVXyKXDAlvikkUze0WZU/UuPP1U3N9f5AjVZYI9YmYWkLwqV1V1FKYe89hS0iOxuD
                                                                                                                                                                                  qJREyonGjGOd6/SEl2qwKtk2WSYN7ec9laWxrKiU26slt0XgSk95Y9PYOhGR7muVyf5WbRJWtt/V
                                                                                                                                                                                  JrMyFo89+CZiqX5/opX4xIRUSeOX1vi17WV54/dJ8G5qcD+E5QMREhu9UMWsJCSzz5rk2Cegm9z8
                                                                                                                                                                                  7aT7Q+OzdX9L1xV3gfdtQej7WO09BGyTMIqfhbOB3ENcvMUfrKa2uZguDu8qYDQShijFKyYzSel4
                                                                                                                                                                                  s5MChizF72XbP0HspIA+piO4x50WAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA9+G3AAMAdo9nS2/5
                                                                                                                                                                                  hIAAAAAASUVORK5CYII="
                                                    transform="matrix(1 0 0 1 26.0833 112.8333)">
                                                </image>
                                            </g>
                                            <g>
                                                <path class="st17"
                                                    d="M63.1,128.1c0.4,0.1,0.9,0.1,1.3,0.2c3.8,0.8,6.5,3,7.8,6.7c1,2.8,0.8,5.6-0.6,8.2
                                                                                                                                                                    c-2.9,5.7-5.9,11.5-8.8,17.2c-0.1,0.1-0.1,0.2-0.2,0.4c-0.2-0.4-0.4-0.7-0.6-1.1c-1.8-3.5-3.6-6.9-5.3-10.4c-1-2-2.1-4-3.1-6.1
                                                                                                                                                                    c-0.7-1.3-1.1-2.7-1.2-4.2c-0.1-2.6,0.5-4.9,2.1-6.9c1.6-2.1,3.8-3.4,6.5-3.8c0.4-0.1,0.9-0.1,1.3-0.2
                                                                                                                                                                    C62.6,128.1,62.9,128.1,63.1,128.1z M68.3,138.3c0-3.2-2.5-5.7-5.7-5.6c-3.1,0-5.6,2.6-5.6,5.7c0,3.1,2.6,5.6,5.8,5.6
                                                                                                                                                                    C65.8,144,68.3,141.4,68.3,138.3z">
                                                </path>
                                                <path class="st19"
                                                    d="M72.3,135c-1.3-3.7-4-5.9-7.8-6.7c-0.4-0.1-0.9-0.1-1.3-0.2c-0.3,0-0.4,0-0.6,0c-0.4,0.1,0.5,0,0.1,0.1
                                                                                                                                                                    l0,4.6c0.4-0.1-0.3,0,0.2,0l-0.2,0c3.2,0,5.7,2.5,5.7,5.6l0,0c0,3.1-2.6,5.7-5.7,5.7c-0.3,0,0.3,0,0,0l0,16.8
                                                                                                                                                                    c0.1-0.2,0.2-0.3,0.2-0.4c2.9-5.7,5.9-11.5,8.8-17.2C73,140.5,73.3,137.8,72.3,135z">
                                                </path>
                                            </g>
                                        </g>
                                        <g class="st16">
                                            <image style="overflow:visible;opacity:0.75;" width="73" height="28"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEsAAAAcCAYAAAApxUKlAAAACXBIWXMAAAnXAAAJ1wGxbhe3AAAA
                                                                                                                                                                                    GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABwlJREFUeNrcmf9PG0cQxe98Z2yM
                                                                                                                                                                                    bb4ESEkgISEhpWnVNq2q/tL/P1JSNf2WtknapAkUEgMGDP7uu+5Jn6leVzZxUpBQLY0M3O3u7Js3
                                                                                                                                                                                    M2+XMDi/T+h9D/uk3veF/oTnNGdmsbM83+EIoPrOenynFx20swYrwiadTTu75KzM3/zPwNmxsz1n
                                                                                                                                                                                    h85aFx208IyBKjmrOlt2dsPZmrN5GJYBkDjLsW7GqF1nvzt74WzbWd1ZG9CS/ytYOdhkIH3p7ENn
                                                                                                                                                                                    K86m2HjGnK6zCd7NwaxNZ8+c/eLsqbNXzg6EZRfmE58hq8oA9ZWzb5xdZbMHWMaahrOKs1lnM87m
                                                                                                                                                                                    +HkZm4FxTcAKLjJY4XsyLgaEDKDbzlaZ44mzH2DLPiCUAGnJ2U3GVADrT55HMC8Z4V96Ts3p1E4d
                                                                                                                                                                                    e6kUkyY5bNxULrH5Zb6Lzt44e+zsAal2AltiAWyTurZCmh4AUIl5+8KwWHwaCKDnAVqCdbV+xgJU
                                                                                                                                                                                    gZRYJNLRmI7kSMFs0x87u8JcxopJuuK0MCIC0KyY15hjwLNl3u1Q046Yp8pcPZ4VWSc6Y8BSfGkQ
                                                                                                                                                                                    8DrrJaFEbZai/AWRLg5xIjyluC+Sfouws0YabgNK4ukwY3KR8QFp2hRA9hgfwNhpGHhCgKp02vCU
                                                                                                                                                                                    NHrXZpeyRlY6vnX2K4D1Y3kxi9JlZxvO7tDFcvLcNhd70UxlfIXNp4xfZc6Bl+oqVi2VUmhv1B/g
                                                                                                                                                                                    9D7P55mzA/glLCc+WJ3rMD4dE6QcAY4Yn5WDnygTz22vsScSrW7s4VAkdayIs7Oek13GDYTCJzBi
                                                                                                                                                                                    H5bYWiZWZ2FG7Kn5TJy+ZnwRNl0XgENJ1wLfLWwSP09I30NZOxzBOjtplPGrAtAHzKkZ8Y+zCYs8
                                                                                                                                                                                    B6CnADNFO79EZK8wYQ7nB2xyn/FzLPyXs/vO/gDMAvMsIS8qwrJQwMro/qOzHda7BzsNhAPen2XO
                                                                                                                                                                                    HjWtxvtV6swDxG5LfI1kr6bhYvaY1clP+P0Qzfeds5cAn/hgtdhki00v0NZLRFlTrCOIdwDrQDZf
                                                                                                                                                                                    oxM+5p0PcDgPA2KAbkvBt+5zCFhdZIgp/zrBLMg8xsZtKRE15Moj5qgS7Cl8aQPwgMDOs7c2e6mL
                                                                                                                                                                                    SDY8/gVWKogHUHKV+rUmWigAlBrOVqWGNKVWWN0p4WhWA9dh1TwA7dJxYv5WhDG3pcuZhEiExZNS
                                                                                                                                                                                    5xLWPpFjUgsAm6Lf1vEjAKgdfF0gW1YIaEECVhe5k/o1K8SRa86+dvY5QC0wSbb4Fue4Ol1vgxQx
                                                                                                                                                                                    XWKH4DyF3YTnLZwpkzo7pMkmG7pHbZphY4vMsyCss3SZFIanUif194g57rKPWwQiAIA9/LDDflV8
                                                                                                                                                                                    CyQwySgFH+LEZSTEXTZbIAoN6PkIsG7zfM7rOiFgzQPQBt8lFm9Qy+6TVstEdkm6WVlEqOmcUFKp
                                                                                                                                                                                    IaI1HdLdijDmU6TQolezlqVm2U1JXprHWMedgahmo75FLecp5uSU40goGkqFYyQ/m+hsQn0NyICx
                                                                                                                                                                                    Ae80AKrIsxjWV4esH8HWAqDM4ece+6iK6DZp0pemk4wDVoLjm3SkvCxWxdE1FtmH1hXvrir1FPAr
                                                                                                                                                                                    HDiCsdaeV1H7eZl/gGx4SGG1+UyoWvrFsKYs6aifCea0Dh4z78+k2VVSvkDnfML8q7B75G2HD1aL
                                                                                                                                                                                    dhlQn5ZIkZv8XCE9e2x0Flb4nw7jdwH+BnXpIwBbAcRrbO4K8x1TEx9RW/Q21bRWBtJn2tKHsMu0
                                                                                                                                                                                    od2jtQFsj8AdEeQtxKc1iQjf3wpWKrrlJczYxN5QJK8TrWlq0CSdw8/zPl3zGQ40YdYqRbwsHTYn
                                                                                                                                                                                    XdUCVmd8KumeY66eJ4KH3cCauD6GYUV83gcwE5071M0ANi6Py6xAWrGBtk0qvUCoriMDNmCFHlVS
                                                                                                                                                                                    2Zyl4RaLFwGg613pFKXO9IRJHdU3Q86hfW9NLQFdAKnB2DmAWud5luK/sacaflY9KZOMe/mXiNOm
                                                                                                                                                                                    n+wYYkwzUXeVTXVwsi1mRbsnAeiJlrPjhJ0T26LTkhF38RqMjozpCsBNGLQLCDNkxbwcgw7Jnj3m
                                                                                                                                                                                    rcjZcOD58Nab0tRLTQPOrkwMoDswwwBMcWSLd3vC0k1Yagf0HTZkZ86WjBuccvC1f3RswTK7mYhE
                                                                                                                                                                                    C9YAwzpnE3a9kXUb7GlCLgwavHskTE/f5Vo5FdAaIi9OEJYT1IA2UZzEqW0A7fP794BiGukZAOb5
                                                                                                                                                                                    ex8wt2FKOsKXLu88lLNbnVvWMmtZnT3m/R3AqjNmE1BsLw1ql2XBS54n//UfFhFtt4rFODQAuFj0
                                                                                                                                                                                    i3Usa+drdMYAYF4DwATfpq6PRxTwUO7757zLQDsztuQKO5Q7fxXXR4Bi+rFEoKekOTX8oL3vDWPO
                                                                                                                                                                                    E5ipLBzKOVMFbR7Hqx7lE7nu8ceNun+KROH7/2LTOQLv3cSrSf5dXU504uAsmPUuY9Mhm4yk9iSn
                                                                                                                                                                                    pNtZrT3uLWr4tnf+FmAA6KLD8jcePaIAAAAASUVORK5CYII="
                                                transform="matrix(1.1322 0 0 1.1322 34.7654 163.216)">
                                            </image>
                                            <g>
                                                <g>
                                                    <path class="st17"
                                                        d="M51.4,173.7v14.1h-1.9c-0.9-1.4-2.5-2.8-4.9-4.1c-2.4-1.3-4.4-2-6.2-2l-0.6-2.4c1.2-0.9,3-1.9,5.6-2.9
                                                                                                                                                                      c0.8-0.3,2.7-1,5.9-2.3v-0.4H36.5v-1.9h16.8v1.9H51.4z M49.2,176.6c-1.7,0.6-4.3,1.8-7.8,3.4c3,1.1,5.6,2.6,7.8,4.5V176.6z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M70.1,169.5c-3.2-2-5.8-2.9-7.8-2.9c-1.9,0-3.3,0.4-4.4,1.3c-1.1,0.9-1.7,2.2-1.8,4H58v1.9h-1.9v14h-2.2
                                                                                                                                                                      v-14h-1.9v-1.9h2c0-2.3,0.9-4.1,2.5-5.5c1.5-1.3,3.5-1.9,6-1.9c1.6,0,3.1,0.4,4.7,1c1.1,0.4,2.5,1.2,4.4,2.5L70.1,169.5z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M71.2,173.7v14.1h-2c-0.9-1.5-2.5-2.8-4.8-4c-2.3-1.2-4.3-1.9-6.1-1.9l-0.7-2.4c2.8-1.8,6.5-3.6,11.3-5.3
                                                                                                                                                                      v-0.4H56.4v-1.9h16.3v1.9H71.2z M68.9,176.6c-2.7,1-5.2,2.1-7.6,3.5c2.7,1,5.3,2.4,7.6,4.4V176.6z M64.4,188.3
                                                                                                                                                                      c-0.7-0.7-1.6-1.3-2.9-1.9l0.9-1.8c1.2,0.5,2.3,1.2,3.3,2.4L64.4,188.3z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M85.9,173.7v14.1h-2.2v-10.6c0-0.7-0.2-1.4-0.7-2c-0.5-0.7-1.1-1-1.8-1c-1.1,0-2,0.9-2,2
                                                                                                                                                                      c0,1.6,0.6,2.3,1.6,2.3c0.3,0,0.7-0.2,1.2-0.5l0.5-0.3v2.4c-0.6,0.6-1.3,0.9-2.1,0.9c-0.7,0-1.4-0.4-2-1.2L78,179
                                                                                                                                                                      c-0.7,1.3-1.6,2-2.9,2c-0.9,0-1.6-0.4-2.1-1.2v-2.4c0.8,0.9,1.3,1.1,1.8,1.1c1.1,0,1.7-0.8,1.7-2.6c0-1.5-1-2.2-3.4-2.3
                                                                                                                                                                      c0,0-0.1,0-0.1,0h-0.6h-0.8v-1.9h3.4c1.2,0,2.2,0.8,3,2.3c0.5-1.2,1.6-2.2,2.9-2.2c1,0,1.9,0.6,2.8,1.6v-1.6H88v1.9H85.9z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M91.2,173.7v14.1H89v-14.1h-2.3v-1.9h6.6v1.9H91.2z"></path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M109.4,173.7v14.1h-2.2c0-0.5,0-1,0-1.7c0-0.6,0.1-1.1,0.1-1.4c0-3.4-0.9-4.8-2.4-4.8c-0.5,0-1,0.3-1.4,0.9
                                                                                                                                                                      c-0.4,0.5-0.6,1.1-0.7,1.9h-2.4c0-0.8-0.2-1.4-0.7-2c-0.4-0.6-1-0.9-1.5-0.9c-0.7,0-1.3,0.3-1.7,0.8c-0.4,0.5-0.6,1.2-0.6,2
                                                                                                                                                                      c0,1.6,0.9,2.4,2.9,2.4c0.2,0,0.4,0,0.9-0.1l-0.7,2.2c-0.4,0-0.7,0.1-0.8,0.1c-1.4,0-2.5-0.4-3.4-1.4c-0.9-0.9-1.3-2.1-1.3-3.5
                                                                                                                                                                      c0-2.8,1.8-4.8,4.7-4.8c1.4,0,2.5,0.8,3.5,2.2c1-1.5,2.1-2.3,3.3-2.3c0.9,0,1.6,0.6,2.2,1.7v-5.4H92.1v-1.9h19.3v1.9H109.4z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </a>
                                </g>
                                <g id="chittagong">
                                    <a href="{{ route('subcategory-page', 'চট্টগ্রাম') }}" xlink:href="">
                                        <path class="st11"
                                            d="M355.6,320.6c0-1-0.1-1.6-0.1-2s-1.1-2-1.1-2l-1.8-5l-2.5-10.1l-2.9-27.5l1.2-23.9l1.4-6.1l-0.8-4.1l-1.4-3
                                                                                                                                                                    l-1.4-4.6l-0.9-4.6c0,0-0.2-3.6-0.2-4s-1.1-5.9-1.1-5.9l-1.5-0.8c0,0,0-3.2,0.1-3.6s0.8-1.4,0.8-1.4s0,0,0.5,0s1.9,0.1,1.9,0.1
                                                                                                                                                                    s1.5-1.1,1.9-1.4s0.1-1.6,0.1-1.6l-1.5-2.6l-1.8-3l-0.2-5l0.2-3.2l-1.4-1.4l-0.8-3.9l0.6-5.1l-0.6-2.6l-2.2-4.4l-0.9-15.9
                                                                                                                                                                    l-0.1-0.6l-1.5-1l-1.1-4.1l1-2v-4.4l-1.2-1.5c0,0,0.1-1.6,0.1-2.2s0.2-2.4,0.2-2.4l-0.8-1.6l-0.4-5.5l-1.2-1.5
                                                                                                                                                                    c0,0-4.1-2.6-5.1-3.5s-0.9-4-1.1-5.1s-0.2-3.6-0.2-4.8s0-3.9,0-3.9l-1.6-1.1l-0.4-1.6l-0.2-1l-1-1.1l-6.1-4.4l-0.1-12.1l0.6-2.4
                                                                                                                                                                    l0.2-3l-1.2-2.5l-1.1-0.1c0,0-0.5-2.1-0.9-2.1s-0.4-4-0.4-4v-4l-0.9-2.9c0,0-0.4-5-0.4-5.4s1.9-2.8,2.2-3.1s1.9-2.5,1.9-2.5v-2.2
                                                                                                                                                                    l-0.4-2.9l-1.2-1c0,0-0.1-1.9-0.2-2.6s-0.2-2.2-0.2-2.8s0-1.4,0-1.8s-1.4-0.2-1.4-0.2l0.1-1.2l0.1-1.1c0,0-0.8-0.8-1.2-1.2
                                                                                                                                                                    s-1-1.4-1-1.4l-2-1.9c1.1-13.2-4.4-20.1-4.4-20.1l-2.1-3.5c0,0,0.8-4.4,0.8-4.9s1.2-2,1.4-2.5s0.4-2.8,0.4-2.8l-0.5-1.8
                                                                                                                                                                    c0,0-0.2-1.5-0.5-2.2s-1-0.6-1.8-1.1s-1.6,0-1.6,0l-1.4,0.5L301,7.5l-0.1,3.2l-0.9,2.6c0,0-1.9,1.8-2.8,1.9s-1.1-0.1-1.1-1.1
                                                                                                                                                                    s0.1-0.9,0.1-1.2s0.4-2,0.5-2.4s0.1-1.8,0.1-1.8s-0.8-1.4-1.1-2s-2.2-1-2.9-1s-2.4,0.4-2.4,0.4l-2.9,1.5l-4,3.8l-2,4.4l-2.2,1
                                                                                                                                                                    l-3.1-0.2l-0.9-1.1l-2.8-1.6l-1.1-1.8l-0.6-1.5c0,0-0.2-1-0.6-1.4S269,7.5,269,7.5l-0.5-1l-1.1-0.8l-1.2,0.9c0,0-1,4.4-1.2,5
                                                                                                                                                                    s0.4,4.5,0.4,4.5l0.8,3.9l1.1,3.9l1.8,3l0.2,2.9l0.5,6.2l-1.4,1.6l-1.8,1.4l-0.9,2.2l-0.8,1.4l-1.4,0.9c-3.9-0.6-6.1,1.8-6.1,1.8
                                                                                                                                                                    c-8.1,6.6-12.5,22.4-12.5,22.4s0.9,2.8,1.2,3.5s0.5,1.9,0.5,1.9l2,1.2l0.4,3.2l2.6,6.6v5.6l-0.6,1l-3,0.4l-0.9,4.8v0.8l-1.6,1.6
                                                                                                                                                                    l-2.9,1.6l-1.4,0.1l-0.9,0.6l-0.5,1l-3.8,0.2l-1,0.9h-1c0,0,0,0-0.6,0s-1.4,0-1.4,0s0,0-0.8,0s0,0-1.4,0s-1,0.2-1,0.2s0,0-0.2,0.9
                                                                                                                                                                    s0,1.5-0.1,2.4s-0.4,1.2-1,1.8s-1.2,0-1.2,0s0.4-0.8,0.4-1.1s0-1.8,0-1.8s-1.1-1-1.9-1.2s0,0-1.2,0s-1.1-0.4-2.6-0.4
                                                                                                                                                                    s-0.4-0.6-0.4-0.6s-0.8-0.4-1.2-0.5s-0.6-0.6-0.6-0.6s0-1.9,0-2.2s0-2.4,0-2.4l-0.8-1.7c0,0-0.6-0.1-2.4-0.6s-0.5-0.6-0.5-0.6
                                                                                                                                                                    l-0.4-1l0.1-1.8l1.5-0.8c0,0,0-0.9,0-1.2s-0.8-1.2-1.1-1.2s-1.4-0.5-1.4-0.5l-0.6-0.8c0,0,0-1.4-0.1-1.8S213,84,213,83.4
                                                                                                                                                                    s-0.2-1.1-0.2-1.1s-0.4-1.1-0.5-2s0.1-1.4,0.1-1.4l0.2-2.1c0,0-0.6,0-1.1,0s-1.9-0.4-1.9-0.4v-0.8l0.5-0.5l0.6-0.5v-1.8l-0.6-1
                                                                                                                                                                    l-2.2,0.9c0,0-0.4-0.8-0.4-1.1s0.2-0.9,0.2-0.9l-0.6-1.5l-1.9-1.1c0,0-1.1-0.8-1.8-0.9s-1,0-2.1,0.1s0,0-0.8,0s-0.4,0.6-0.8,0.9
                                                                                                                                                                    s-0.4,0.9-0.9,1.9s0.5,2.9,0.5,3.4s-0.6,4.6-0.6,4.6l2.1,4.1l1,3.2c0,0,0,2-0.1,2.4s0.4,2.5,0.4,3s-0.1,0.9-0.1,0.9s-1,1-1.4,1
                                                                                                                                                                    s-1.4,0-2.2-0.2s-0.9-0.4-1.2-0.4s-1.6-0.9-1.6-0.9l-0.8-1.8l-0.9-0.8l-0.1-2.5l-1.8-1l-0.6-5.9l-0.1-4.4l-0.2-3l-0.1-2l-0.9-2.4
                                                                                                                                                                    l-0.5-0.5l-1-0.9l-0.8-1l0.6-1.9l0.8-0.6c0,0,0.4-1.4,0.4-1.8s-0.5-1-0.5-1l-1-1.1c0,0,0.5-1.2,0.5-1.6s0.1-0.6,0.1-0.6h1.6
                                                                                                                                                                    c0,0,0.4-1,0.6-1.4s0.8-1.4,0.8-1.4l-1-1c0,0-1.5,0-2.6,0s-1.4-0.1-2.1-0.2s0-1,0-1l0.1-0.9l0.5-1.5l-0.2-1.6c0,0,0,0-1.5-0.5
                                                                                                                                                                    s0,0-0.2-0.5s-0.6-1.2-0.6-1.6s0-1.2,0-1.2h-0.6v-1.9l-0.4-2.4l-1-1c0,0-2.9-1.5-3.9-2.1s-1.1-1-1.8-1.1s-0.2-1.6-0.2-1.6l1.2-1.9
                                                                                                                                                                    l0.4-1c0,0-0.2-1.2-0.6-1.4s-0.5-0.8-1-2s-0.4-0.5-1-1s-0.5-0.4-2.1-2s-0.5-1.4-1.4-2.8s-0.5-2.1-0.8-2.8s0-1,0-1l1.1-1.9
                                                                                                                                                                    c0,0,0.5,0,1.5-0.1s2.4,0,2.4,0l1.1-0.8v-2l-1.1-1.2c0,0,0,0-1.2-0.2s0,0-1.1-0.8s-0.5-0.4-1.4-1s-0.2-0.6-0.8-1s-0.2-0.9-0.2-0.9
                                                                                                                                                                    s0-0.8,0.1-1.4s0.1-1.1,0.4-1.6s0.4-0.8,1-1.5s0,0,0.8-0.1s0.6,0,1.8,0s1.5,0,2.1-0.1s2-0.2,2-0.2l0.4-1.5c0,0,0.1-1.5,0.1-2
                                                                                                                                                                    s0.1-1.4,0.1-1.8s0.8-1,0.8-1l1-1.2l1-0.9l0.4-2.4l-0.6-1.9c0,0-0.8-2.1-1-2.9s0-2.1,0-2.1v-2.6l0.1-1.8l2.2-2.1l0.4-3.6l1.4-1.2
                                                                                                                                                                    c0,0,0.5,0,0.9-0.1s1,0,1,0l1-0.4l0.8-1.2l0.9-2l-0.8-15.3l-1.3-3.5l1.2-2.5l1.2-0.1l1.8-1.8l-0.5-0.8l-2.5-0.8l-1-1.4l0.8-1.5
                                                                                                                                                                    l0.5-0.5l1,0.1c1.5,0,1.8-1.6,1.8-1.6c0.9-1.1,0.1-2.1,0.1-2.1l-1.5-0.8L189-63l-0.4,1.5l-2.8,3.9l-1.1-0.5h-3.2l-5.9-0.9
                                                                                                                                                                    l-3.2-3.8l-0.4,0.5l-2.5,1.8l-3.2,1c0,0-1.5,0-2,0s-0.8,0-0.8,0l0.6,3.2c0,0-0.6,0.9-1,0.9s-1.2-0.2-1.2-0.2l-1.1-0.4l-1.2,0.4
                                                                                                                                                                    l0.5,0.8c0,0-0.2,0.9-0.4,1.2s-0.9,1.4-0.9,1.4l-1,1.2l-1.6,1c0,0-0.9,0.6-1.4,0.8S154-48,154-48l1.1,1.6L157-45l1.6,2l1.6,2v2.9
                                                                                                                                                                    l-1.1,2.1l-6.6,6.2c-2.1,3-1.2,8.5-1.2,8.5s0,0.5-1,1.8s-0.5,0.5-1,1.1s-0.4,0.6-0.9,1s-0.5,1.6-0.6,2s-0.5,1.5-0.5,1.5l-1.8,1.6
                                                                                                                                                                    c0,0-0.5,2.1-2,2.8s-1.9,0-1.9,0l-2,0.8c0,0,0,0-0.5,0.8s-0.5-0.9-1.4,0s-1-0.9-2.5,0s-1.2-0.4-1.6,0s-0.6,1.1-1.4,1.5
                                                                                                                                                                    s-1,0-1.8-0.4c0,0-0.8-0.5-1.1-1.1s-1.1-0.1-1.6,0s-1.6,0-1.6,0l-0.5,1.8l1,2.9l0.8,1.9v2.1l-1,0.9l-2.5,1.4l-2.8,3.5v2l0.4,1.8
                                                                                                                                                                    l1.5,0.1l0.1-1c0,0,0.8-0.9,1-1.4s1.1,0,1.1,0l0.6,1.9l-0.2,4.1l-1.2,1.8c0,0-2,2.5-2,2.9s1.4,0.9,1.9,0.9s1.1,1.2,1.1,1.2
                                                                                                                                                                    l-0.6,1.6h-2.2l-0.6,3.9l-1,2l-2-0.1l-1.5,0.6c0,0,0,1.6,0.4,1.9s1.6,0.5,1.6,0.5l0.6,0.5v2.1l-0.6,5l-1.5,0.5l-0.9,0.1
                                                                                                                                                                    c0,0-0.6,0.6-1,0.6s-0.9,0-1.9,0s-1.1-0.4-1.5-0.5s-1.2-0.6-1.2-0.6s-0.8,0.9-1.2,1.4s-1.1,0-1.8,0s-1.1,0.2-2,0.2
                                                                                                                                                                    s-0.8,0.9-1.1,1.1s1,2.9,1,2.9l0.4,1.5v4.1l-0.9,0.6l-1,1l-1.1,1.1l1.2,2.2l2.2,3.8l2.2,0.6c0,0,1.6,0.4,2,0.6s0.5,0.9,0.5,0.9
                                                                                                                                                                    l0.4,4.4l1.1,0.8l0.6,0.9l0.1,1.5l0.2,1.5l-0.9,1.4l-2.8,4.2l-0.2,10l-0.2,3l-1.5,1.8c-1.8,4.8,1.8,7,1.8,7c5.2,3.2,8.5,11,8.5,11
                                                                                                                                                                    l0.2,2.5l1.5,0.8l1,6.5l1.2,0.2l1,1.2v7c1.2,5.8,6,11,6,11l2.8,1l1,3c0,0,1.2,1.8,2,1.8s2.2,0,3,0s1,1.8,1,1.8l-1,2.8l1.8,2.2
                                                                                                                                                                    l3,4.5l3.2,0.2l0.5,2.5c4.2,2.5,8.5-1.1,9.6-1.2s0.6-0.1,2.1-2.2s-0.6-1.2-0.6-1.2s0,0-0.4-0.8s-0.2-1.1-0.5-2s-1.4-1.4-2.9-2.2
                                                                                                                                                                    s-0.1-2.2-0.1-3.9s0.6-1.2,1.2-2.1s0.9,0.6,1.9,1.4s0.6,1.4,0.8,3s0,0,0,1.5s0.5,1.1,0.8,1.5s0.9,0.8,1.4,1s0.5,0.8,1.1,2
                                                                                                                                                                    s-0.4,1.5-0.4,1.5s1.2,1.1,2.1,1.5s1.2,1.1,1.2,1.1s1.1,0.6,2.6,1.1s1.1,0.1,2.2,0.1s1.5-0.9,1.5-0.9s0.6-0.2,2.1-0.8s2-1.1,2-1.1
                                                                                                                                                                    l0.6,1l1.2-0.2c0,0,0.5-0.2,0.8-1s0.8,0,1.2,0s0.5,0.5,0.8,0.9s1.1,1,1.1,1l1.1-1.5c0,0,2.1-2.6,2.1-3s1.4-1.1,1.8-1.2s0-1,0-1.4
                                                                                                                                                                    s0-1.1-1.2-2.6s0,0-0.8-0.6s0,0-1.1-0.2s0,0-1.2-0.5s-0.5,0-1,0s-2.1-0.4-3.2-0.4s-1,0-2.2,0s-0.6-0.1-1.5-0.5s-0.4-0.9-0.4-1.2
                                                                                                                                                                    s0.6-0.9,0.6-0.9s1.2,0,1.6,0s2.5,0,2.5,0l-0.2-1c0,0-0.9-1.4-0.9-1.8s0-0.9,0-1.6s0,0,0.2-0.4s0.6-0.5,1.4-0.8s1.2,0.1,3.1,0.1
                                                                                                                                                                    s0.5,0.6,1.2,1.8s0,0.8,0.5,2.4s0,0,1.4,0.1s1.4,0,2.9,0.1s0,0,0.8,0.6s0.5,0,1.6,0s0.5,0,1.5,0s1-0.5,1.4-0.8s0.4-0.6,0.6-1.1
                                                                                                                                                                    s0-1.1,0-1.5s-0.9-0.8-0.9-0.8l-2.2-0.1l-0.4-2.1c0,0,0.4-0.5,1.4-0.6s0.6,0.2,1,0.5s1.4,0.8,2,1s1,0,1.8-0.2s1.4-0.1,1.4-0.1
                                                                                                                                                                    s-0.1-0.8-0.2-1.4s-0.2-0.9-0.5-1.9s0-0.8-0.2-1.4s0.8-0.4,1.5-0.6s1.9,0.8,2.6,1.1s1.5-0.1,1.6-0.5s0.2-3.1,0.4-3.5s0.6-0.8,2-2
                                                                                                                                                                    s1.8-1.4,2.1-1.5s0.6-0.2,1.6-0.6s0.5-1.1,0.8-1.6s0.5-1.2,0.5-1.2s0,0,0-3.1s1.6-2.4,2.1-2.4s1,0.9,1.2,1.2s0.4,1.9,0.4,3
                                                                                                                                                                    s-0.2,3.1-0.6,4s-2.5,2-3.1,2.1s-1.5,4.4-1.5,4.4s2.9,3.6,3.2,3.8s4,5.6,4,5.6l2.8,0.5c0,0,3.4,2.6,3.9,2.8s2.5,6,2.5,6l4.8,5.8
                                                                                                                                                                    l7,8.9l5.5,10.5l1.4,4.4l1.8,4.1l0.8,5c0,0,0.8,8.6,0.9,9.5s1.5,3.5,1.5,3.5l2.2,1.5c0,0,1.5-1.4,2.5-2.2s0.9-1.4,0.9-1.9
                                                                                                                                                                    s-0.4-0.6-0.4-0.6l-2.5-0.2l-0.9-1.1l-0.5-3.8c0,0,0.4-2.2,0.6-2.6s0.4-0.5,1.1-1s0.5,0,1,0s2.9-0.5,2.9-0.5l-2.2-0.6
                                                                                                                                                                    c0,0-1.1-0.2-1.6-0.4s-0.6-1.4-0.6-1.9s0.1-1.1,0.5-1.5s1.4-0.6,1.9-1s1.9-0.6,1.9-0.6s1.8,0.6,2.2,1s0.8,2.4,0.8,2.4l0.8-0.5
                                                                                                                                                                    c0,0,0.1-1,0.2-1.5s0.4-1.4,0.5-2.2s0.5-1.9,0.6-2.5s1.2-2,1.8-2.5s1.6,0.1,1.6,0.1l0.5,1.2l-0.5,1.5c0,0-1.4,1.4-1.6,1.8
                                                                                                                                                                    s0,2.9,0,2.9v3.5l-1.6,2l-4.6,1.2c0,0-2.4,0.1-2.8,0.1s-0.5,1.8-0.5,1.8l1.8,2.2c0,0,0.9,1.6,1.4,2.1s1.1,1.4,1.1,1.9
                                                                                                                                                                    s-1.4,2.2-1.4,2.2l-3.1,2.5c0,0,0.6,5.8,0.6,6.2s0.4,3.1,0.4,3.1v1.2c0,0,0.8,1.2,1.5,2.2s1.1-0.5,1.2-0.9s0-0.8,0-1.2
                                                                                                                                                                    s0-1.5,0-1.9s1.4-0.4,1.4-0.4l1.6,0.5v1.5c0,0-0.6,3.6-1.2,5s0.5,2.9,0.8,3.5s2.4,4.6,2.4,4.6s0,1.8-0.1,2.4s-0.1,2.9-0.1,2.9
                                                                                                                                                                    l0.5,4.1l2.1,2l1.1,3.5c0,0,0.1,4.1,0.1,4.6s0.4,2,0.6,2.4s0.5-0.1,0.9-0.4s0.4-1,0.4-1s0.4-0.5,1.4-1.1s0,0,1.1,0s0.5,1,0.5,1
                                                                                                                                                                    s0,1.5-0.1,2s-0.9,2-1.5,2.9s-2,1.5-2.5,1.8s-1.5,2.5-1.5,2.5s-0.4,0.5-0.5,0.9s0.8,2.5,0.8,2.5s1.1,1,2,1s1.9-1.2,1.9-1.2
                                                                                                                                                                    l1.9-1.4l3.4,0.5l0.6,1.1l-1.8,0.6h-1.2l-1.2,0.4l-0.2,1.5l2.5,0.1c0,0,1.1,0,1.6,0s-0.2,0.8-0.5,1.2s-1,1.2-1,1.2
                                                                                                                                                                    s-1.2,0.1-2.2,0.1s-1,0.4-1.1,1.2s0.4,0.6,0.8,0.9s0.5,2.1,0.5,2.1l0.1,2.9l1.5,1l0.9-0.5c0,0,0.2-1.4,0.4-1.9s0.9,0.2,0.9,0.2
                                                                                                                                                                    s-0.1,0.8-0.4,1.1s-0.6,1.6-0.6,2s0.4,1.8,0.4,1.8s0.6,0.9,1,0.9s1.2-0.4,1.6-0.5s0.8-1.6,0.8-1.6l1.1-1.6v-2l0.5-0.5h1.1
                                                                                                                                                                    c0,0,0.2,1.8,0.2,2.1s0.1,1.6,0.5,1.9s0.4,0.9,0.5,1.2s0,1.2-0.1,1.8s-0.6,1-1,1.4s-1.4,0.6-1.4,0.6v2.4l0.1,2.4
                                                                                                                                                                    c0,0-0.9,1.1-1.9,1.5s-0.8,0.4-1.2,0.9s0,0-0.4,0.9s0.2,2.9,0.2,3.6s0.5,2.1,0.9,2.5s0.9,0.8,1.4,1.1s0.1,0.8,0,1.8s0,0-0.2,0.4
                                                                                                                                                                    s-0.9,0.6-1.4,0.8s-1.5-1-1.5-1s-0.6,0.2-0.6,0.8s0,1.8,0,1.8l-0.9,1.5c0,0,0,0-0.6,0.8s-0.5,0.1-1,0.2s-1.1,0.4-1.4,1
                                                                                                                                                                    s-0.1,1.8-0.1,1.8l1.2,1.6l10.2,14.9c3,9.8,1.2,17.9,1.2,17.9l0.2,2.9c0,0,3.4,3.2,3.8,3.4s3,3.9,3,3.9l1.5,3.9
                                                                                                                                                                    c0,0,5.1,4.5,5.4,4.9s2.2,0.5,2.2,0.5l1.6,5.1c0,0,0.4,3.9,0.6,4.2s1.6,4.6,1.8,5.4s3.2,4.8,3.4,5.1s2.5,2.5,2.5,2.5l2.1,3.8
                                                                                                                                                                    l2.2,6.9c0,0,0.2,1.6,1.2,2.9s2.1,0.9,2.8,0.9s0.8,0,1.1,0s0.4-2.5,0.4-2.5s-0.1-2.9-0.2-3.5s-0.1-0.9-0.8-1.4s-0.2-0.8-0.6-1.1
                                                                                                                                                                    s-0.2-0.6-1.4-2s-0.5-1.4-1-3.1s-1-2.8-1.8-4.4s-1.4-1.4-2.2-2.1s-1.1-3.1-1.1-3.1l-1.4-15.9c0,0,0.1-2,0.1-2.6s-0.1-0.9-0.4-1.5
                                                                                                                                                                    s-0.8-1.8-0.9-2.1s-0.8-1.1-1.6-2.6s-0.8-1-1.6-1.5s-1.2-0.9-1.8-1.4s-0.8-1.8-0.8-1.8l-1.5-4.8l0.4-2.9c0,0,0,0,0.4-0.2
                                                                                                                                                                    s0.9-1.1,0.9-1.1s-0.2-1.5-0.4-2s-0.2-2.2-0.2-2.8s0-1.1,0.1-1.9s0.2-0.9,0.6-1.4s1-1.4,1-1.4s-1-2.1-1.1-2.5s-1.1-1.9-1.1-1.9
                                                                                                                                                                    l0.2-2.8c0,0,0.4-1.1,0.5-1.5s0.6-0.4,1.1-0.9s0.6-1.1,1.1-1.6s0.6-0.5,1.6-0.9s0.9-0.4,1.8-0.5s0.2-1.2,0.2-1.2l0.1-5.1
                                                                                                                                                                    c0,0,1-0.1,1.6-0.1s0.6,0.1,1.8,0.2s1.1,0.1,2,0.1c0.9,0,1.5,0,1.5,0s1.5-0.2,1.9-0.6s1-1.1,1-1.1s0.2-0.8,0.4-1.1s0.6-1,0.9-1.4
                                                                                                                                                                    s1-1.5,1.4-1.9s1.2-0.8,1.2-0.8h1.4c0,0,1.2,0.8,1.8,0.9s2.4,2,2.4,2s0.4,1.2,0.4,1.6s0.6,3.4,0.6,4.1s-0.1,3.1-0.1,3.5
                                                                                                                                                                    s1,1.1,1.5,1.4s0.9,0.1,2.8,0.6s2.6,1,2.6,1s1.4,0,2.1,0s0.5-0.4,1-1.1s0.6-1.2,0.9-1.6s2.6-0.2,2.6-0.2l3.6,2.5
                                                                                                                                                                    c0,0,1.2,2.4,1.8,2.9s0.2,1.8,0.2,2.8s-0.1,2.4-0.1,2.9s0.4,4.5,0.4,4.5l3.1-0.1c0,0,2.6-0.5,3.1-0.6s2.5-1.1,3.2-1.6
                                                                                                                                                                    S355.6,321.6,355.6,320.6z M319.1,144.4c0,0.5,0,1.6,0,1.6l-1.1,0.2l-1.6,0.9l-0.5-0.6l-1-1.1c0,0-0.1-0.9-0.1-1.4s0.4-1.1,0-1.2
                                                                                                                                                                    s-1.2-0.6-1.8-0.8s-0.9-0.2-1.2-0.2s-2.6,0-2.6,0l-0.6-1.1c0,0-0.4-0.4-0.9-0.4s-1.2-0.1-1.8,0s-1.8,0.1-1.8,0.1l-0.4,0.8
                                                                                                                                                                    c0,0-0.8,1-0.2,1.4s-0.2,0.2,0.8,0.9s1.6,1.1,1.9,1.5s1.5,2.2,1.9,2.2s0.6,0,0.9,0.4s0.2,0.6,0.2,1.1s0.9-0.1,0,0.5
                                                                                                                                                                    s-1.8,0.8-2.4,0.8s-0.1,0.5-0.6,0s-0.5-1.2-0.5-1.2s0-0.5-0.2-0.9s-2.2-1.8-2.2-1.8l-1.2-0.1l-0.5,0.8l-0.2,0.9l1.6,0.9l0.5,0.2
                                                                                                                                                                    c0,0,0,0.8,0,1.1s0,0.4,0,0.4s-0.8,0.4-0.9,0.8s-0.6,1.4-0.6,1.4l0.2,1v1.6c0,0-0.5,1.1-0.8,1.5s-0.5,0.8-1.1,1.1
                                                                                                                                                                    s-0.2-0.9-0.6,0.4s0,2.2,0.6,2.4s0.4,0.1,1.1,0.1s1.2-0.4,1.2-0.4l0.2-1.2c0,0,0.6-1.2,0.6-1.6s0-0.6,0.5-0.6s0.5,0,0.5,0l0.5,0.8
                                                                                                                                                                    l0.2,1.4l-0.4,0.9l-0.9,0.6l1.6,0.5c0,0,1-0.6,1.5,0.1s0.6,1.2,0.6,1.2s0.4,0.6,0,0.8s-0.1,0.1-0.9,0.1s-1.2-0.2-2-0.2
                                                                                                                                                                    s-0.8,0-0.8,0s-0.4,0-0.1,0.8s-0.2,1,0.9,1.1s1.1,0.1,2,0.1s1.2,0.1,1.6-0.4s0.5-1.4,0.5-2.1s-0.4-2,0-2.1s1-0.1,1.4-0.1
                                                                                                                                                                    s0.4,0,0.4,0l0.1,1.1c0,0-0.2,0.2-0.1,0.8c0.1,0.5,0.1,0.5,0.1,0.5l2.1,0.5v0.5l1.8,0.9l1.1,1.6l-0.2,1.9l-1,0.5
                                                                                                                                                                    c0,0-1.2,0.2-1.8,0.5s-2,0.2-2,0.2s0.4-0.5,0-0.9c-0.4-0.4-0.7-1.4-0.7-1.4l-0.1-0.5c0,0,0-0.1-0.5-0.1s-0.5-0.1-1.1-0.1
                                                                                                                                                                    s0.2,0-1.6-0.1s-2.2-0.1-2.8-0.1s-0.1-0.8-0.5,0s-0.1,2-0.1,2l-0.9,1.2l-0.9,1.1c0,0-0.4,0.5-0.8,0.4s-0.8-1.4-0.8-1.4v-1.1
                                                                                                                                                                    l-1.1-1.4l0.4-1.6l1.9-0.8l0.4-1l-2.2-0.9l-3.1-2.1l-0.8-1.5c0,0,0.5-1.6,0.5-2s-0.5-1.8-0.5-1.8l-2.1-1l-1.6-0.1l-0.5-1.5
                                                                                                                                                                    c0,0-0.4-0.1-0.4-0.6s-0.4-0.9,0-1.2s1.1-0.6,1.1-0.6h0.8l0.4,1.6c0,0,0,1,0.8,1s2-0.4,2-0.4l1.1-1.5l0.5-1l-1.5-0.5l-0.5,0.4
                                                                                                                                                                    l-1.1-0.5l0.2-1.8l0.9-0.5l0.6-0.9v-0.9l-0.8-0.5l-1.2,0.9h-0.8h-0.9c0,0-0.2-1.2-0.2-1.6s0.1-1.2,0.5-1.2s0.9-0.2,1.8,0
                                                                                                                                                                    s1.4,0.2,1.4,0.2v-0.9l-1-0.2l-0.2-0.9c0,0-0.6-0.6-1.1-0.6s-1.6-0.2-1.6-0.2h-0.8h-0.6l0.1-2.4l0.2-1.5v-0.8l-0.9-0.6l-0.5-0.6
                                                                                                                                                                    l-0.5-1.1c0,0-1,0-1.4,0s-1.2,0.2-1.2,0.2s-0.4-0.5-0.8-0.9s-0.6-0.9-0.5-1.2s0.4-1.5,0.4-1.5l0.2-1.6l0.1-0.5l-1-0.5l-1.1-0.6
                                                                                                                                                                    c0,0-0.1-0.6-0.1-1s0.1-1.5,0.1-1.5s-0.1-0.6-0.6-0.6s-1.4,0.4-1.4,0s-0.1-1.1-0.1-1.1v-2.5c0,0,0.1-1.4-0.2-1.4s-0.9,1.1-0.9-0.1
                                                                                                                                                                    s0-3.9,0-3.9l-1-0.5c0,0-0.9-0.5-1.4-1.1s-0.9-0.9-0.9-1.4s0-3.1,0-3.1l-0.9-2.4l-0.4-1.6V103l-0.6-1c0,0-0.2-0.9,0.4-1.2
                                                                                                                                                                    s0.6-0.4,0.6-0.4l1-0.1l0.5,0.9v1.8v1.9v2l0.8,0.5c0,0,0.9,0.8,1.2,1.2s0.6,0.8,0.6,1.2s-0.1,0.8-0.1,1.1s-0.8,0.9,0,1
                                                                                                                                                                    s0.9,0.9,0.9,0.9l0.5,1c0,0,0.4,0.6,0.5,1.1s0.6,1.9,0.6,1.9l0.8,1.1c0,0-0.2,0.2,0,0.6s-0.1,1.1,0.2,1.4s1.4,0.9,1.9,0.9
                                                                                                                                                                    s0.1-0.8,0.5,0s0.4,1.5,0.5,2.1s0.1,1.8,0.1,1.8s-0.1,0.9,0.6,1.1s0.8,0.2,0.8,0.2s1.2,1.4,1.8,1.4s1.1,0,1.1,0v1.8l-0.5,1
                                                                                                                                                                    c0,0-0.9,0.4-0.6,0.8s-0.5,0.5,0.4,1s-0.1,0.1,0.9,0.5s0.8,0,1,0.4s0.2,0.4,0.2,0.4s0.4,0.9,0.8,1.5s1.1,2.8,1.1,2.8
                                                                                                                                                                    s0.2,0,0.9,0.5s0.1,1,0.9,1.2s1.8,1.5,1.8,1.5v0.8l0.4,1.4c0,0-0.1,0.4,0.5,0.6s0.1,0.9,1.2,0.9s1.1,0,1.1,0l0.4-1.4l-0.9-1
                                                                                                                                                                    l-0.5-0.6l-1.6-1l-0.4-1.4v-1.6V137l0.8-0.1l0.8,0.9c0,0-0.2,0.4,0.2,0.6s0.5,0.4,1.8,0.4s0.9,0.8,1.8-0.1s1.1-0.9,1.1-1.4
                                                                                                                                                                    s0-1.2,0-1.2s-0.5-0.5-0.9-0.9s-1.5-1.2-1.5-1.2s-0.5-0.9,0.4-0.9s1.4,1.2,1.5,0s-0.1-2.4-0.1-2.4l-0.5-1.2c0,0-0.9,0.4-1.2,0.4
                                                                                                                                                                    s-1.2,1-1.2,0s0-2,0-2l0.1-0.8c0,0,0.5-1-0.2-1s-1.6,0-1.6,0s-0.8,0.2-0.8-0.1s-0.4-0.9-0.4-1.2s0-1,0-1s-0.5,0.5-0.8-0.1
                                                                                                                                                                    s-0.5-1.4-0.5-1.4s-1,0.4-1-0.1s0.4-0.8,0.4-1.6s0-1.6,0-1.6l-1.1-1.1l-0.5-1.9l-0.1-1.1c0,0,0.5-0.1,0.5-0.8s0-1.4,0-1.4
                                                                                                                                                                    l-1.6-1.4l-0.9-1.9l0.6-1.1c0,0-0.1-1.2,0.6-0.9s0.5,1.5,1.1,1.8s0.9,1,1.2,1.1s0.8-1.2,0.8-1.2s-1-1.4-1-1.9s0.1-1.5,0.1-1.5
                                                                                                                                                                    l0.2-1l-0.8-0.4c0,0-1.5-0.8-1.8-1.1s-0.6-1.1-0.6-1.5s-0.5-0.9,0-1.6s0.5-1.2,1.2-1.6s1.4-0.5,1.4-0.5s0.6,1.4,0.6,1.8
                                                                                                                                                                    s-1.2,2,0.1,1.8s2.1-1.8,2.1-2.5s-0.4-1-0.2-1.6s-0.8-0.1,0.1-0.6s1.8-1.1,1.8-0.1s0,2.1,0,2.1s0.8-0.2,1.4,0.1s1.5,1.2,1.4,1.6
                                                                                                                                                                    s0,0.5-1.2,1.1s-2.2-0.1-2.8,0.8s-0.8,1.4-0.8,2.1s-0.1,1.5,0.4,1.9s0.8,0.4,1.6,0.5s1.5-2.4,1.6,0.1s0.6,2.9,0,3.1
                                                                                                                                                                    s-1,0.1-1.1,0.5s-0.5-0.6-0.1,0.4s0.4,1.6,1.6,1.8s1.2,0.1,1.2,0.1l0.6,2.5c0,0-0.1,2.2,0.2,2.2s0.9,1,0.9,1l0.1,2.8
                                                                                                                                                                    c0,0-0.4,1,0,1.2s0.1,1.5,0.6,1.5s1.1,0.1,1.1,0.1s-0.4,1.8-0.9,1.9s-1.2-0.2-1.2,0.2s-0.4,0.9-0.4,1.4s-0.8,0.8,0.2,1.4
                                                                                                                                                                    s0,0.5,1,0.6s1.5,0,1.9,0s0.4,0,0.4,0s1.2,1.1,1.4,0.8s0.2-1.6,0.2-1.6l0.8-1c0,0,0.5,0.5,0.5,0.9s-0.7,0.1,0,1.2
                                                                                                                                                                    c0.8,1.1,0.8,1.1,0.8,1.1l1.6,1l-0.5,0.9l-0.9,0.9c0,0-0.5,0-0.9,0.4s-1.2,1.2-1.2,1.2l-0.6-0.1c0,0,0.4,1.2,0.5,1.6
                                                                                                                                                                    s-0.1,1,0.6,1.1s2.1,0.1,2.1,0.1s0.4-0.6,1.4,0.6s0.9,1.6,1.6,2.2s0.4,0.5,1.2,0.9s1.2,0.5,2,0.8l0.6,0.5
                                                                                                                                                                    C319.1,143.4,319.1,143.9,319.1,144.4z">
                                        </path>
                                        <path class="st4"
                                            d="M173.8,187.6c-0.2-0.4-0.8-0.8-1.2-1.5s-0.5-1.2-0.8-2.4s-0.6-3.8-0.6-3.8s-0.8-3.2-1.2-3.8s-2.9-3.2-2.9-3.2
                                                                                                                                                                    l-2-3l0.6-2.5c0,0,0.1-2.1,0.1-2.5s0-0.9,0-0.9l-1.2-0.6l-1.2,0.5l0.4,4.2l-1,1.6c0,0,0.5,2.1,0.5,2.6s-0.2,1.9-0.4,2.4
                                                                                                                                                                    s-0.8,2.2-0.8,3.2s-0.8,1.8-0.8,2.5s0,1.5,0,1.5l-0.4,28.4l-0.8,1.5c0,0,0.5,1.5-0.2,2.2s-0.9,1.5-0.9,1.5s-0.5,0.2-0.9,0.5
                                                                                                                                                                    s-0.6,0.6-1.1,1.2s-0.9,0.9-1,1.5s-0.6,2.5,0.2,3s1.2,0.6,2,0.6s0.6,0.1,1.2-0.2s0.5-0.4,0.9-0.9s0.4-0.5,0.4-0.5
                                                                                                                                                                    s-0.5-0.1,0.1-0.8s-0.6,0.1,0.6-0.6s0.9-0.2,1.9-1.1s1.4-1.2,1.5-1.9s-1.2,0.2,0.4-1.2s-0.1-0.8,1.6-1.5s-0.6,0,2.4-1
                                                                                                                                                                    s4.2-1.5,4.4-2s0.5-2.2,0.5-2.2l1.8-6.1l-0.5-6c0,0,0.5-2.9,0.5-3.5s0.1-1.9-0.1-2.4S174,188,173.8,187.6z">
                                        </path>
                                        <path class="st6"
                                            d="M222.1,177.3c-0.4-1-0.9-2.6-1.1-3.1s-2.5-3.9-2.5-3.9l-7.6-14l-1.1-3.5l-1.1-1.6c0,0-1.1-0.6-1.5-0.6
                                                                                                                                                                    s-1.5,0.1-1.5,0.1l-0.6,0.5c0.1,0.5,0.4,1.6,0.4,2.9s-0.1,2.4-0.2,3s0.4,0.9-0.1,1.4s-0.8,1.5-1.1,1.9s-1.2,2.2-1.2,2.2
                                                                                                                                                                    s-0.2,1-0.4,1.9s-0.5,1.8-0.5,2.2s0.4,2.1,0.4,2.1s0.9,3.6,1.6,4.6s2.1,4.6,2.5,5.4s3.6,5.6,3.6,5.6s2.1,3.6,6.2,3.5l2.9-1.8
                                                                                                                                                                    c0,0,0.9-0.8,1.4-1s0.8,0,1.2-0.8s0.9-0.8,0.9-1.6s0.2-1.8,0.1-2.9S222.5,178.3,222.1,177.3z">
                                        </path>
                                        <path class="st9"
                                            d="M257.9,259.8c0-0.6,0.9-1.8,0.9-2.1s0.2-1.1,0.2-1.6s0,0,1.4-2.1s0.2-1.5,0.5-2s0-2-0.2-2.8s-0.1-1.6-0.2-2
                                                                                                                                                                    s-0.6-1.5-0.6-1.5l0.4-1.5l-0.9-0.9l-1-2l-1.1,0.6l-0.4,1.8c0,0-0.8,0.4-1,0.9s-0.4,1.4-0.5,2s0,1.8,0.2,2.6s0.2,1.1,0.8,1.8
                                                                                                                                                                    s-0.1,0.8-0.4,1.9s-0.1,4.1-0.1,5s-1.1,1.8-1.6,2.5s-0.8,1.8-1.4,2.6s-0.5,3.1-0.5,3.1l1.8,1.5l1.8-0.6c0,0,0.4-2.2,0.5-2.6
                                                                                                                                                                    s1.1-2.2,1.1-2.2S257.9,260.4,257.9,259.8z">
                                        </path>
                                        <path class="st10"
                                            d="M270.6,296.3c1.4-0.4,1.9-2,1.9-2.6s-0.4-4.4-0.4-4.9s0.1-3.2,0.1-3.2s0.6-1.8,0.6-2.8s-0.4-4.2-0.4-4.2
                                                                                                                                                                    l-1.5-1.1l-1.6-3.1l-1-2.2l-0.6-1.9l-0.9-2.6v-2.9V262l-1.2-0.2h-1.1l-0.5,0.6l-0.4,1.5l0.2,0.6l0.8,0.6c0,0-0.2,1.2,0,1.6
                                                                                                                                                                    s0.2,1.6,0.2,1.6s0,0.9,0,1.4s-0.4,1-0.8,1.4s-0.1,0.5-1,1s-0.9,0.5-0.9,0.5l-1.1-0.4l-0.5-0.6l0.2-1.2l0.9-0.2
                                                                                                                                                                    c0,0,0.1,0.5,0.5-0.6s0.5-3.2,0.5-3.2l-0.1-2l-1.4-0.6H260c0,0,0.4-0.9-0.6,0.8s-1.2,2.4-1.2,2.4s-1,1.5-1,2s-0.2,1.4-0.2,2.4
                                                                                                                                                                    s-0.1,1.8-0.1,2.8s0.2,2.9,0.2,2.9l1.1,0.6l0.4,2.1l0.6,0.6l0.5,2.8l0.8,0.8c0,0,0.5,3.5,0.5,3.9s0,0.5-0.8,1.9s-0.4,0.8-1.4,2.9
                                                                                                                                                                    s-1.1,2.5-1.1,3.2s0.5,1.9,1,2.4s0.5,2.5,1.5,2.2s0.9-0.5,1.5-0.6s1.8-1,1.8-1s-0.4-1.8,0-2.2s0.5-1.5,0.9-1.5s0.9-0.1,0.9-0.1
                                                                                                                                                                    s0.6,1.5,1.1,1.6s1.2,0.4,2.5,0.4S269.3,296.6,270.6,296.3z">
                                        </path>
                                        <path class="st8"
                                            d="M194.1,148.4c0,0-0.8,0.1-1.4,0.2s-0.2,1.4-0.2,1.4l-1.1,0.1l-1,0.6c0,0,0,0.5,0,1s1,1,1,1l1.5,0.1l1.4-0.9
                                                                                                                                                                    c0,0,0.8-1.8,0.8-2.2s-0.2-1-0.2-1L194.1,148.4z">
                                        </path>
                                        <path class="st7"
                                            d="M159.5,179.8c0.8-0.6,1.2-0.6,1.2-1.8s0.1-1.4,0-2s-0.1-2.2-0.5-2.2s-1.6-0.8-1.6-0.8l-1-0.1
                                                                                                                                                                    c0,0,0,0.5-0.4,0.8s-1.2,0.2-1.2,0.9s0.2-0.4,0.2,1.6s-0.1,3.1-0.1,3.5s0,1.2,0.8,1.1s0.6,0,1.4-0.1s0.2,0.6,0.8-0.1
                                                                                                                                                                    S158.8,180.4,159.5,179.8z">
                                        </path>
                                        <path class="st5"
                                            d="M179.1,173.5c-0.4-0.4-0.5-0.8-1.2-1s-1-0.8-2-0.8s-3.1,3-3.1,3v1.5c0,0,0.6,1.4,1.2,1.6s1.1,0.8,1.1,0.8
                                                                                                                                                                    s0.4,0.9,0.4,1.2s-1,0.8-0.4,1.1s0.9,0.6,1.6,0.4s1.2-0.9,1.2-0.9s0.2-0.2,0.4-0.6s0.1-0.4,0.1-0.4s1.4-0.1,1.4-1.1s0.2-1.8,0-2.5
                                                                                                                                                                    S179.5,173.9,179.1,173.5z">
                                        </path>
                                        <g>
                                            <g class="st18">
                                                <image style="overflow:visible;" width="99" height="84"
                                                    xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABVCAYAAAC/xEFcAAAACXBIWXMAAAsSAAALEgHS3X78AAAA
                                                                                                                                                                        GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAxZJREFUeNrsmWtv2kAQRQ2YJIKE
                                                                                                                                                                        NOkjhVLa9P//sT6TFAJ+YXeR7kqTrd32Q9Wuk3OkKy/gIDN3Z2Z3kyQAAAAAAAAAAAAAAAAAAAAA
                                                                                                                                                                        AAAAAAAAALEzeCLP32DIv3nuwW9+R9MyjtqctIdGWA3NuMuQg2ozjjpr0h6aMdRzj3RNW4yxRuyl
                                                                                                                                                                        yoyjNSbtkRlDaex07DRxOtF4bExJjBkHEwqn3CnTtTTmRFfG0h6ZcciIIxkxc3rmdO40lTEj3ecD
                                                                                                                                                                        XCn4O6eN03dd72VOoc/rmExJe2bGqdOF0yunK6eXMmaiLPFly5eqTAbcOn2TbvR6I7OKmExJe2LG
                                                                                                                                                                        scy4dJo7vZXmeq/LkFyBPxjw2emj0RdT4grT+DGkY0nbZsbC6b3TtdM7p9fKmBP9ltCQQ0naqly9
                                                                                                                                                                        0HfM9J3DoOk3+tsGQ9qXtWNTpqwZH2TIUkE+032jYOXkm3que05NJiUyKzP9ZE8P6V7WjjXrfc9Y
                                                                                                                                                                        KCOuZchSfWQWNPQmWPIOA4N8k1+rn3xVtoxMxpAhxoyRzJhoVj9X816ZUrVUMz8zpSfRDK/NtdS4
                                                                                                                                                                        kAmZ3muC/mRXZ8n/LltpZGYcaRl7rqDPZcBKTXxhmviwZcPn9x1WmfrIQXdmtbVROauCXTwZYsrU
                                                                                                                                                                        RMvYKwV/JUMWpkSlmuml2Wv4PUVussFe76WNMeWTxlmLKU/WkLZ9xqXJjDcy4lyfl6r/lZn9uyD4
                                                                                                                                                                        3oCteb3Ta/++3yiu9VnFxvChKX55O1WGXEhTPWNuekNhArw1s3/XYoA/LsmDcRGM9+xDfi5ZPkv8
                                                                                                                                                                        EnavmVyZpp23lKBtR/ALU8oqU972LWrIkIc0QdDXMulOGVSZQG+NdsaIMPhetQn6PlgaNzGZEYsh
                                                                                                                                                                        PiClZv2NgnhrzCjN7A9PbsuO4NfBniRcQUVlRGyGVAqy35xtVLaaoNyU5kikMrX/T4KfJD34V24a
                                                                                                                                                                        SanyzdofaYzMmVQdbPq6Sk/vgv+rg7wYmvrAGBEeeVjj2oLey+DHbEh4sNiWRY/SgJgN6XqmRxt8
                                                                                                                                                                        AAAAAAAAAAAAAAAAAAAAAAAAAAAAAACAv8APAQYA7/lckkUOQGUAAAAASUVORK5CYII="
                                                    transform="matrix(1 0 0 1 231 113.2729)">
                                                </image>
                                            </g>
                                            <g>
                                                <path class="st17"
                                                    d="M268,128.3c0.4,0.1,0.9,0.1,1.3,0.2c3.8,0.8,6.5,3,7.8,6.7c1,2.8,0.8,5.6-0.6,8.2
                                                                                                                                                                    c-2.9,5.7-5.9,11.5-8.8,17.2c-0.1,0.1-0.1,0.2-0.2,0.4c-0.2-0.4-0.4-0.7-0.6-1.1c-1.8-3.5-3.6-6.9-5.3-10.4c-1-2-2.1-4-3.1-6.1
                                                                                                                                                                    c-0.7-1.3-1.1-2.7-1.2-4.2c-0.1-2.6,0.5-4.9,2.1-6.9c1.6-2.1,3.8-3.4,6.5-3.8c0.4-0.1,0.9-0.1,1.3-0.2
                                                                                                                                                                    C267.5,128.3,267.7,128.3,268,128.3z M273.1,138.5c0-3.2-2.5-5.7-5.7-5.6c-3.1,0-5.6,2.6-5.6,5.7c0,3.1,2.6,5.6,5.8,5.6
                                                                                                                                                                    C270.6,144.2,273.2,141.6,273.1,138.5z">
                                                </path>
                                                <path class="st19"
                                                    d="M277.1,135.2c-1.3-3.7-4-5.9-7.8-6.7c-0.4-0.1-0.9-0.1-1.3-0.2c-0.3,0-0.4,0-0.6,0c-0.4,0.1,0.5,0,0.1,0.1
                                                                                                                                                                    l0,4.6c0.4-0.1-0.3,0,0.2,0l-0.2,0c3.2,0,5.7,2.5,5.7,5.6l0,0c0,3.1-2.6,5.7-5.7,5.7c-0.3,0,0.3,0,0,0l0,16.8
                                                                                                                                                                    c0.1-0.2,0.2-0.3,0.2-0.4c2.9-5.7,5.9-11.5,8.8-17.2C277.9,140.8,278.1,138,277.1,135.2z">
                                                </path>
                                            </g>
                                        </g>
                                        <g class="st16">
                                            <image style="overflow:visible;opacity:0.75;" width="70" height="32"
                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEcAAAAhCAYAAACLHbZYAAAACXBIWXMAAAn/AAAJ/wEHzD5GAAAA
                                                                                                                                                                                GXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAB2tJREFUeNrsmu1TE1cUxrPJJoEQ
                                                                                                                                                                                EogREUQRRUtfra06Tvuh/cv7sTO1LzNqVQQFBd/QYCDEBDbJ9q7zO87TnU2AjszY2sycWfbt3nue
                                                                                                                                                                                +5znnHuXVOr/X9+fd4Rtatth7PjRgZPGss5yznza7znbw7qchx8LOB6g5J2VnB1zNuFshOsRKK+d
                                                                                                                                                                                bXB846wDSP9pcKL3M85GnZ10ds7ZBY4V7kVgPHF239mSs8fOas7aHzpAmffwfsHZaWfXnf3o7Jqz
                                                                                                                                                                                BWfTziYBbYZjGUCaznYJsw82xPwDiOl+4JRgyhVnlzmP2PIM54uwqEK4FQAoINSCGEBewvlRJY/4
                                                                                                                                                                                72+Jw4/pRhbt8A8wGI/nTzg7BVMiIX7h7KGzFdgRXf8KAM8CTMPZFnq0hQZZiHoi3F6CwB/Vr8c4
                                                                                                                                                                                2qaJCs4QMzsN/Q8yGB8B/sTZOM6+QlNadPKGMIocHiMEI7A2maHHDMiHVT7vtum/xASUjhCgkLFv
                                                                                                                                                                                iiYGvqThUcT0O2dzDNQoHg4Iq2FnVWfHec4HhBbPFCR7ZQFxgXvRJNzjWQu/iLl1rEO7pmH5feoo
                                                                                                                                                                                bx8A4uHqCWsiNt919hOTGfgSUjlYcNHZJcDqgmi/1Gu0L+C8MXAMLelJ2yrABSYguj5LG2XYEf29
                                                                                                                                                                                Q7g1AX8O9mQYi0mA1lEp2ssmABdouPC+z1gzon9NxvA2vH1e1njb5cVh0HwF3XYTCjhjzgTZKI9j
                                                                                                                                                                                T0VLwtgseTgxilYZS4e5HtJXi0GnJaTq1Eo52JonbGu0fYJJykl/Afc3LFwAsEIWLYocPMfnt5Po
                                                                                                                                                                                C7qWYR5B42Eau41tCEAKzjE05Bqz/8DZr87W6TSU8DRwi/Rx1dkU51naNKZmcL7AvS2E/h7Afglo
                                                                                                                                                                                L53dwOno2nmYOwSgAUniZ/zYps2o/x8AaJ37ka1BknfZqofjdTprcj3PLLR4aZOBpwSkKoO9KMyp
                                                                                                                                                                                i+akZQKsj2c4PIum5GT50QGIGg5OMs5dnFxGt2Z4voZW1ITp07CyKmXDJsCuM/HR73Mmt0a7y+Jj
                                                                                                                                                                                6MdS2Z5oRZZwWQDJHOzZk2cbogNd/h4jey3ACF/S82sGuEjo3ZR0P43TBmSdex4ABZw3Aa2D7QpA
                                                                                                                                                                                keO3nM1TlH4NmyuANSo+7nDscmyaENvE+wMKIdOds9DwnMSjVblrsGBM6pGKpOCSMCINI/LMzjJO
                                                                                                                                                                                /QnrrjKTo4DcAsAMOtKVjBPGCjZjxgagRtfOANI4dp5+nhNa8aIv3m4iOPbrSgiVcLyL4z73zrBm
                                                                                                                                                                                6gJOB9AaEiIdAKlicwCzyFprnVksoz8F0cA13q9KKAyquYZF5KeEuUUm+Rp9LdFP5jDLh1RMg7Yk
                                                                                                                                                                                8wQAM4xOHCM7bGO2Aq/huIXeDjN3iZks815RgC4AYDoWsjXu7wB+OKCcOA4o12HgWfowca8SZj2Y
                                                                                                                                                                                nsOX9D8BZ5slwM9koLYsFy6xjhqik4ywLdKVO8x6g8FZATdB2ExSKbdwykJqnEl5Cf3rsLazzwI1
                                                                                                                                                                                Tx9RO98j1ln6N40aoa/LTJD1ne1XPPbTHGPOcwTuNo2VENvzEjJ7ogc9QNwQQEcAIyXbG3MsVEc4
                                                                                                                                                                                nycc8rI2ewxjwn0qX0+KyFPUW0U0aJHSpMh1Y+xnjLks0nFg5qSkOm4BlNU050jBBcLtlWQwTxav
                                                                                                                                                                                I9B3lvpjQdK+L/RuS2Vs6b6DEydgU24Q/SU8bdFsmvUUTfQAfAoAZ/ClALu8w4KTgY7jOFgF8SvM
                                                                                                                                                                                dAoxfUAngdQlXxBCFdZr84RRWXYNT/F8nWMKgKpSfzQAsxKrspPY3hFg00zOFGG1A5tX8OdbZ9+g
                                                                                                                                                                                Od5hmGNrrSGoeBlQZmDNFMCtQtsVHO0xoHkcanGcYEDDONGELSaSJfoswJAxqbECEeytPgBZKt9m
                                                                                                                                                                                x/Elz1thWkUH/yBLLcH0Cs/0DgOOxfgIYFhhNiYMiRjzO/aCEGjg9BAA9iS9ZmSdU2cWrWC0jNGW
                                                                                                                                                                                xaHtM49IOm5y9CXEeqJzETC/0aZV7hk5tzXUE5h7QdJ94qa/HwOlCzV3mPkh2YoIceoRAn2DqrQL
                                                                                                                                                                                gEuyKrfKMy2pfxJmdGjnGYMsxr5UtKVIOy0puckY8txrSpp/wyQ1aWNTMmTIMw+5vgXrb8L4KSY2
                                                                                                                                                                                iLPIj2WoNoO+JdsFNmjbKF+UjfJN2lglPBqcbzEgD+A+lVqkC/V/Qcw9sZ4sE/JktQX0J6B/05C7
                                                                                                                                                                                jO8F7W0TPrYOLIt/upFlVf4d2HVSNrg6/Spk2/C5zwDKCd+ekj6x2P7LLoMtyJZDvDy3sFoH5FXZ
                                                                                                                                                                                i9FxhLS7yvKiKBnInFuUcFuTncenOJqNbWZ1Yns6y4zTJOHdarxfWBlzNhO2JJM+zqnjeSg6Cwgt
                                                                                                                                                                                nrGwMmaZkD+R/ZV+Hwkbsr6ySbKaKiPjUqdtnN6AzfMA1u7QTlfaCAdpTk9WwwN352OgWexbJeyJ
                                                                                                                                                                                k77Q/R4Zrp4U57F2u7KXnJQ0ksZ0kE/PFr5B7GtHeJBsdZjv2iZ4K4j0HsVbNuGZhzyzHgu7A30q
                                                                                                                                                                                6XPvvXyGOcrPwRmpaCdl28GLLWRrEra7H/oXT+89tmMb6f2+MalmfRTfylOH/GL6r/pXlL8EGAB5
                                                                                                                                                                                tczJqAPSbQAAAABJRU5ErkJggg=="
                                                transform="matrix(1.1106 0 0 1.1106 264.7389 187.973)">
                                            </image>
                                            <g>
                                                <g>
                                                    <path class="st17"
                                                        d="M270,197.7v1.7c1.2,1.7,2.9,2.6,4.9,2.6c0.7,0,1.5-0.2,2.4-0.7c1.2,0.8,2.1,1.8,2.7,2.9
                                                                                                                                                                      c-0.4,3.2-1.8,5.5-4.2,7.1c-2.1,1.3-4.8,2-8.3,2v-15.7h-1.7v-2.1h15.6v2.1H270z M277.4,204.6l-0.5-0.7c-0.7,0.4-1.6,0.6-2.6,0.6
                                                                                                                                                                      c-1.4,0-2.8-0.7-4.2-2v8.4c1.7,0,3.4-0.6,4.9-1.7c1.9-1.3,2.7-2.8,2.6-4.3L277.4,204.6z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M284,197.7v12.1c1.8,0,3.3-0.3,4.9-1c2-0.8,3-2,3-3.4c0-1.8-0.7-2.6-2.2-2.6c-0.4,0-1.2,0.3-2.8,1.1l-1.1-2
                                                                                                                                                                      c1.2-1,2.6-1.4,4.2-1.4c1.3,0,2.4,0.5,3.2,1.5c0.8,0.9,1.2,2,1.2,3.4c0,1.6-0.7,3.1-2.2,4.3c1.1,0.8,1.7,2,1.7,3.6
                                                                                                                                                                      s-0.8,2.8-2.4,3.7c-1.3,0.7-2.8,1.1-4.4,1.1c-1.2,0-2.7-0.6-4.6-1.8l1.1-1.8c1,1,2.2,1.5,3.8,1.5c1,0,1.9-0.2,2.7-0.7
                                                                                                                                                                      c0.9-0.5,1.4-1.2,1.4-2.1c0-0.7-0.4-1.4-1.2-2c-2.4,0.9-4.6,1.4-6.6,1.4h-2.1v-14.7h-1.3v-2.1h11.7l0-0.5c0.1-1-0.3-1.8-1.2-2.4
                                                                                                                                                                      c-0.8-0.5-1.7-0.8-2.8-0.8c-1.3,0-3.1,0.6-5.7,1.9l-0.8-1.8c2.7-1.5,4.9-2.3,6.6-2.3c1.6,0,3,0.5,4.3,1.5
                                                                                                                                                                      c1.4,1.1,2.1,2.3,2.1,3.9c0,0.1,0,0.3,0,0.4h1.9v2.1H284z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M309.8,197.7v15.5h-2.5v-10.5c0-0.2-0.2-0.8-0.8-1.7c-1.3-2-2.8-3-4.7-3c-0.6,0-1.3,0.3-2,0.9
                                                                                                                                                                      c-0.1,0.1-0.3,0.3-0.6,0.5c0.5-0.1,0.9-0.2,1.3-0.2c1,0,1.9,0.2,2.6,0.8c0.8,0.6,1.2,1.4,1.2,2.4c0,1.3-0.5,2.4-1.4,3.6
                                                                                                                                                                      c-0.9,1.1-2,1.9-3.3,2.4l-1.6-2c1.1-0.4,1.9-0.9,2.7-1.7c0.9-0.9,1.3-1.6,1.3-2.3c0-0.3-0.4-0.7-1.5-1c-0.8-0.2-1.6-0.3-2.2-0.3
                                                                                                                                                                      c-0.2,0-0.4,0.1-0.8,0.2l-1.2-2.2c1.2-1.3,2-2,2.4-2.3c0.9-0.7,1.9-1,3-1c2.2,0,4.1,1.1,5.6,3.2v-3.2h4.7v2.1H309.8z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M304.3,211.1c-0.5,0-1.2,0.2-2.2,0.5c-1,0.3-1.8,0.5-2.4,0.5c-1.2,0-2.4-0.4-3.5-1.1
                                                                                                                                                                      c-1-0.7-1.8-1.6-2.5-2.9l1.3-1.8c1.4,2.3,2.9,3.2,4.8,3.2c0.5,0,1.2-0.1,2.1-0.4c1-0.3,1.7-0.5,2.2-0.5c1.6,0,3.1,1,4.6,2.8
                                                                                                                                                                      l1.7,2c-2-0.4-2.7-0.5-2.9-0.5C306.4,211.7,305.3,211.1,304.3,211.1z">
                                                    </path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M315.8,197.7v15.7h-2.4v-15.7h-2.5v-2.1h7.3v2.1H315.8z"></path>
                                                </g>
                                                <g>
                                                    <path class="st17"
                                                        d="M334,197.7v15.7h-2.4v-1.7c0-1.2-0.9-2.6-2.8-4c-1.8-1.4-3.3-2.1-4.7-2.1c-0.7,0-1.4,0.2-1.9,0.6
                                                                                                                                                                      c-0.6,0.5-1,1-1,1.6c0,1,1.1,1.9,2.1,1.9c0.4,0,1-0.2,2.2-0.7l0.7,2.3c-1.2,0.6-2.2,0.9-3.1,0.9c-1.2,0-2.3-0.4-3.2-1.3
                                                                                                                                                                      c-0.9-0.8-1.4-1.9-1.4-3.1c0-1.4,0.5-2.6,1.6-3.5c1-0.8,2.2-1.3,3.6-1.3c0.1,0,0.3,0,0.4,0l0-0.2c0.1-0.6-0.2-1.3-0.9-2.1
                                                                                                                                                                      c-0.7-0.8-1.4-1.2-2.1-1.3c-0.3,0-0.8,0-1.4,0c-0.3,0-0.7,0-1.5,0.1v-1.9h-1.6v-2.1h19.4v2.1H334z M331.6,197.7h-8.7
                                                                                                                                                                      c2.6,1.6,4,3.5,4,5.8c1.4,0.5,2.9,1.8,4.7,3.7V197.7z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </a>
                                </g>
                                <g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_1_"
                                                d="M164.5,163.5l-17.6-5.9l-13.2-9.8l-11.2-16.5l-5-16.5l-4-9.8L107,92l2.5-14.8l2.5-11.8l-9.8-9.2L104,47
                                                                                                                                                                      l1.2-9.2l14.5-17l3.5-5.8l0.5-4.2l-3.8-0.8l1.2-7l4.8-3.8L124.7-9l4.2-0.5h8l8.5-5.8l9.8-23.2l-1.8-8l-2-4l19.2-15.8
                                                                                                                                                                      c0,0,16.5-0.2,17.8-0.2s12.8,5,12.8,5L199-28.7c0,0-13,16-11.8,17.2S182,27.3,182,27.3l9.8,19.2l3.2,18.8l9.8-4l21.8,32l15-0.2
                                                                                                                                                                      l3.8-7.5l-3.2-11.8c0,0-3-15.2-2-16.5s18.5-20.5,18.5-20.5l6.5-9.2l-6-15.5l6-10c0,0,9.5-2,10.5-2s44,5.2,44,5.2l21.8,103.2
                                                                                                                                                                      L355,226l1.5,33l-0.8,29.2c0,0,8.2,32,7.2,34.2s-13,8.2-13,8.2l-13-8.2l-10-5.8l-7-6.8l-7.2,0.5c0,0-6,8-6,9.2s-1,12.2-1,13.5
                                                                                                                                                                      s2.5,9.5,4,11.8s18.2,51,18.2,51s-12.5,9.5-14.5,9s-20.7-19-21.7-21.5s-6.8-23-7.2-24.5s-16-41.2-16-41.2l-13.8-19l-5.8-24
                                                                                                                                                                      l-9-25.8l6-27.2l-8.2-37.8L206.5,195c0,0-15.8,22-16.8,22.8s-31.5,8.5-31.5,8.5l-6.8-1.8l6.2-15.8l1.2-16.2l-0.2-8.2l-2.8-6
                                                                                                                                                                      l0.8-9.8L164.5,163.5z">
                                            </path>
                                        </defs>
                                        <clipPath id="SVGID_2_">
                                            <use style="overflow:visible;"></use>
                                        </clipPath>
                                    </g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_3_"
                                                d="M164.5,163.5l-17.6-5.9l-13.2-9.8l-11.2-16.5l-5-16.5l-4-9.8L107,92l2.5-14.8l2.5-11.8l-9.8-9.2L104,47
                                                                                                                                                                      l1.2-9.2l14.5-17l3.5-5.8l0.5-4.2l-3.8-0.8l1.2-7l4.8-3.8L124.7-9l4.2-0.5h8l8.5-5.8l9.8-23.2l-1.8-8l-2-4l19.2-15.8
                                                                                                                                                                      c0,0,16.5-0.2,17.8-0.2s12.8,5,12.8,5L199-28.7c0,0-13,16-11.8,17.2S182,27.3,182,27.3l9.8,19.2l3.2,18.8l9.8-4l21.8,32l15-0.2
                                                                                                                                                                      l3.8-7.5l-3.2-11.8c0,0-3-15.2-2-16.5s18.5-20.5,18.5-20.5l6.5-9.2l-6-15.5l6-10c0,0,9.5-2,10.5-2s44,5.2,44,5.2l21.8,103.2
                                                                                                                                                                      L355,226l1.5,33l-0.8,29.2c0,0,8.2,32,7.2,34.2s-13,8.2-13,8.2l-13-8.2l-10-5.8l-7-6.8l-7.2,0.5c0,0-6,8-6,9.2s-1,12.2-1,13.5
                                                                                                                                                                      s2.5,9.5,4,11.8s18.2,51,18.2,51s-12.5,9.5-14.5,9s-20.7-19-21.7-21.5s-6.8-23-7.2-24.5s-16-41.2-16-41.2l-13.8-19l-5.8-24
                                                                                                                                                                      l-9-25.8l6-27.2l-8.2-37.8L206.5,195c0,0-15.8,22-16.8,22.8s-31.5,8.5-31.5,8.5l-6.8-1.8l6.2-15.8l1.2-16.2l-0.2-8.2l-2.8-6
                                                                                                                                                                      l0.8-9.8L164.5,163.5z">
                                            </path>
                                        </defs>
                                        <clipPath id="SVGID_4_">
                                            <use xlink:href="#SVGID_3_" style="overflow:visible;"></use>
                                        </clipPath>
                                    </g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_5_"
                                                d="M164.5,163.5l-17.6-5.9l-13.2-9.8l-11.2-16.5l-5-16.5l-4-9.8L107,92l2.5-14.8l2.5-11.8l-9.8-9.2L104,47
                                                                                                                                                                      l1.2-9.2l14.5-17l3.5-5.8l0.5-4.2l-3.8-0.8l1.2-7l4.8-3.8L124.7-9l4.2-0.5h8l8.5-5.8l9.8-23.2l-1.8-8l-2-4l19.2-15.8
                                                                                                                                                                      c0,0,16.5-0.2,17.8-0.2s12.8,5,12.8,5L199-28.7c0,0-13,16-11.8,17.2S182,27.3,182,27.3l9.8,19.2l3.2,18.8l9.8-4l21.8,32l15-0.2
                                                                                                                                                                      l3.8-7.5l-3.2-11.8c0,0-3-15.2-2-16.5s18.5-20.5,18.5-20.5l6.5-9.2l-6-15.5l6-10c0,0,9.5-2,10.5-2s44,5.2,44,5.2l21.8,103.2
                                                                                                                                                                      L355,226l1.5,33l-0.8,29.2c0,0,8.2,32,7.2,34.2s-13,8.2-13,8.2l-13-8.2l-10-5.8l-7-6.8l-7.2,0.5c0,0-6,8-6,9.2s-1,12.2-1,13.5
                                                                                                                                                                      s2.5,9.5,4,11.8s18.2,51,18.2,51s-12.5,9.5-14.5,9s-20.7-19-21.7-21.5s-6.8-23-7.2-24.5s-16-41.2-16-41.2l-13.8-19l-5.8-24
                                                                                                                                                                      l-9-25.8l6-27.2l-8.2-37.8L206.5,195c0,0-15.8,22-16.8,22.8s-31.5,8.5-31.5,8.5l-6.8-1.8l6.2-15.8l1.2-16.2l-0.2-8.2l-2.8-6
                                                                                                                                                                      l0.8-9.8L164.5,163.5z">
                                            </path>
                                        </defs>
                                        <clipPath id="SVGID_6_">
                                            <use xlink:href="#SVGID_5_" style="overflow:visible;"></use>
                                        </clipPath>
                                    </g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_7_"
                                                d="M164.5,163.5l-17.6-5.9l-13.2-9.8l-11.2-16.5l-5-16.5l-4-9.8L107,92l2.5-14.8l2.5-11.8l-9.8-9.2L104,47
                                                                                                                                                                      l1.2-9.2l14.5-17l3.5-5.8l0.5-4.2l-3.8-0.8l1.2-7l4.8-3.8L124.7-9l4.2-0.5h8l8.5-5.8l9.8-23.2l-1.8-8l-2-4l19.2-15.8
                                                                                                                                                                      c0,0,16.5-0.2,17.8-0.2s12.8,5,12.8,5L199-28.7c0,0-13,16-11.8,17.2S182,27.3,182,27.3l9.8,19.2l3.2,18.8l9.8-4l21.8,32l15-0.2
                                                                                                                                                                      l3.8-7.5l-3.2-11.8c0,0-3-15.2-2-16.5s18.5-20.5,18.5-20.5l6.5-9.2l-6-15.5l6-10c0,0,9.5-2,10.5-2s44,5.2,44,5.2l21.8,103.2
                                                                                                                                                                      L355,226l1.5,33l-0.8,29.2c0,0,8.2,32,7.2,34.2s-13,8.2-13,8.2l-13-8.2l-10-5.8l-7-6.8l-7.2,0.5c0,0-6,8-6,9.2s-1,12.2-1,13.5
                                                                                                                                                                      s2.5,9.5,4,11.8s18.2,51,18.2,51s-12.5,9.5-14.5,9s-20.7-19-21.7-21.5s-6.8-23-7.2-24.5s-16-41.2-16-41.2l-13.8-19l-5.8-24
                                                                                                                                                                      l-9-25.8l6-27.2l-8.2-37.8L206.5,195c0,0-15.8,22-16.8,22.8s-31.5,8.5-31.5,8.5l-6.8-1.8l6.2-15.8l1.2-16.2l-0.2-8.2l-2.8-6
                                                                                                                                                                      l0.8-9.8L164.5,163.5z">
                                            </path>
                                        </defs>
                                        <clipPath id="SVGID_8_">
                                            <use xlink:href="#SVGID_7_" style="overflow:visible;"></use>
                                        </clipPath>
                                    </g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_9_"
                                                d="M164.5,163.5l-17.6-5.9l-13.2-9.8l-11.2-16.5l-5-16.5l-4-9.8L107,92l2.5-14.8l2.5-11.8l-9.8-9.2L104,47
                                                                                                                                                                      l1.2-9.2l14.5-17l3.5-5.8l0.5-4.2l-3.8-0.8l1.2-7l4.8-3.8L124.7-9l4.2-0.5h8l8.5-5.8l9.8-23.2l-1.8-8l-2-4l19.2-15.8
                                                                                                                                                                      c0,0,16.5-0.2,17.8-0.2s12.8,5,12.8,5L199-28.7c0,0-13,16-11.8,17.2S182,27.3,182,27.3l9.8,19.2l3.2,18.8l9.8-4l21.8,32l15-0.2
                                                                                                                                                                      l3.8-7.5l-3.2-11.8c0,0-3-15.2-2-16.5s18.5-20.5,18.5-20.5l6.5-9.2l-6-15.5l6-10c0,0,9.5-2,10.5-2s44,5.2,44,5.2l21.8,103.2
                                                                                                                                                                      L355,226l1.5,33l-0.8,29.2c0,0,8.2,32,7.2,34.2s-13,8.2-13,8.2l-13-8.2l-10-5.8l-7-6.8l-7.2,0.5c0,0-6,8-6,9.2s-1,12.2-1,13.5
                                                                                                                                                                      s2.5,9.5,4,11.8s18.2,51,18.2,51s-12.5,9.5-14.5,9s-20.7-19-21.7-21.5s-6.8-23-7.2-24.5s-16-41.2-16-41.2l-13.8-19l-5.8-24
                                                                                                                                                                      l-9-25.8l6-27.2l-8.2-37.8L206.5,195c0,0-15.8,22-16.8,22.8s-31.5,8.5-31.5,8.5l-6.8-1.8l6.2-15.8l1.2-16.2l-0.2-8.2l-2.8-6
                                                                                                                                                                      l0.8-9.8L164.5,163.5z">
                                            </path>
                                        </defs>
                                        <clipPath id="SVGID_10_">
                                            <use xlink:href="#SVGID_9_" style="overflow:visible;"></use>
                                        </clipPath>
                                    </g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_11_"
                                                d="M164.5,163.5l-17.6-5.9l-13.2-9.8l-11.2-16.5l-5-16.5l-4-9.8L107,92l2.5-14.8l2.5-11.8l-9.8-9.2L104,47
                                                                                                                                                                      l1.2-9.2l14.5-17l3.5-5.8l0.5-4.2l-3.8-0.8l1.2-7l4.8-3.8L124.7-9l4.2-0.5h8l8.5-5.8l9.8-23.2l-1.8-8l-2-4l19.2-15.8
                                                                                                                                                                      c0,0,16.5-0.2,17.8-0.2s12.8,5,12.8,5L199-28.7c0,0-13,16-11.8,17.2S182,27.3,182,27.3l9.8,19.2l3.2,18.8l9.8-4l21.8,32l15-0.2
                                                                                                                                                                      l3.8-7.5l-3.2-11.8c0,0-3-15.2-2-16.5s18.5-20.5,18.5-20.5l6.5-9.2l-6-15.5l6-10c0,0,9.5-2,10.5-2s44,5.2,44,5.2l21.8,103.2
                                                                                                                                                                      L355,226l1.5,33l-0.8,29.2c0,0,8.2,32,7.2,34.2s-13,8.2-13,8.2l-13-8.2l-10-5.8l-7-6.8l-7.2,0.5c0,0-6,8-6,9.2s-1,12.2-1,13.5
                                                                                                                                                                      s2.5,9.5,4,11.8s18.2,51,18.2,51s-12.5,9.5-14.5,9s-20.7-19-21.7-21.5s-6.8-23-7.2-24.5s-16-41.2-16-41.2l-13.8-19l-5.8-24
                                                                                                                                                                      l-9-25.8l6-27.2l-8.2-37.8L206.5,195c0,0-15.8,22-16.8,22.8s-31.5,8.5-31.5,8.5l-6.8-1.8l6.2-15.8l1.2-16.2l-0.2-8.2l-2.8-6
                                                                                                                                                                      l0.8-9.8L164.5,163.5z">
                                            </path>
                                        </defs>
                                        <clipPath id="SVGID_12_">
                                            <use xlink:href="#SVGID_11_" style="overflow:visible;"></use>
                                        </clipPath>
                                    </g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_13_"
                                                d="M164.5,163.5l-17.6-5.9l-13.2-9.8l-11.2-16.5l-5-16.5l-4-9.8L107,92l2.5-14.8l2.5-11.8l-9.8-9.2L104,47
                                                                                                                                                                      l1.2-9.2l14.5-17l3.5-5.8l0.5-4.2l-3.8-0.8l1.2-7l4.8-3.8L124.7-9l4.2-0.5h8l8.5-5.8l9.8-23.2l-1.8-8l-2-4l19.2-15.8
                                                                                                                                                                      c0,0,16.5-0.2,17.8-0.2s12.8,5,12.8,5L199-28.7c0,0-13,16-11.8,17.2S182,27.3,182,27.3l9.8,19.2l3.2,18.8l9.8-4l21.8,32l15-0.2
                                                                                                                                                                      l3.8-7.5l-3.2-11.8c0,0-3-15.2-2-16.5s18.5-20.5,18.5-20.5l6.5-9.2l-6-15.5l6-10c0,0,9.5-2,10.5-2s44,5.2,44,5.2l21.8,103.2
                                                                                                                                                                      L355,226l1.5,33l-0.8,29.2c0,0,8.2,32,7.2,34.2s-13,8.2-13,8.2l-13-8.2l-10-5.8l-7-6.8l-7.2,0.5c0,0-6,8-6,9.2s-1,12.2-1,13.5
                                                                                                                                                                      s2.5,9.5,4,11.8s18.2,51,18.2,51s-12.5,9.5-14.5,9s-20.7-19-21.7-21.5s-6.8-23-7.2-24.5s-16-41.2-16-41.2l-13.8-19l-5.8-24
                                                                                                                                                                      l-9-25.8l6-27.2l-8.2-37.8L206.5,195c0,0-15.8,22-16.8,22.8s-31.5,8.5-31.5,8.5l-6.8-1.8l6.2-15.8l1.2-16.2l-0.2-8.2l-2.8-6
                                                                                                                                                                      l0.8-9.8L164.5,163.5z">
                                            </path>
                                        </defs>
                                        <clipPath id="SVGID_14_">
                                            <use xlink:href="#SVGID_13_" style="overflow:visible;"></use>
                                        </clipPath>
                                    </g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_15_"
                                                d="M164.5,163.5l-17.6-5.9l-13.2-9.8l-11.2-16.5l-5-16.5l-4-9.8L107,92l2.5-14.8l2.5-11.8l-9.8-9.2L104,47
                                                                                                                                                                      l1.2-9.2l14.5-17l3.5-5.8l0.5-4.2l-3.8-0.8l1.2-7l4.8-3.8L124.7-9l4.2-0.5h8l8.5-5.8l9.8-23.2l-1.8-8l-2-4l19.2-15.8
                                                                                                                                                                      c0,0,16.5-0.2,17.8-0.2s12.8,5,12.8,5L199-28.7c0,0-13,16-11.8,17.2S182,27.3,182,27.3l9.8,19.2l3.2,18.8l9.8-4l21.8,32l15-0.2
                                                                                                                                                                      l3.8-7.5l-3.2-11.8c0,0-3-15.2-2-16.5s18.5-20.5,18.5-20.5l6.5-9.2l-6-15.5l6-10c0,0,9.5-2,10.5-2s44,5.2,44,5.2l21.8,103.2
                                                                                                                                                                      L355,226l1.5,33l-0.8,29.2c0,0,8.2,32,7.2,34.2s-13,8.2-13,8.2l-13-8.2l-10-5.8l-7-6.8l-7.2,0.5c0,0-6,8-6,9.2s-1,12.2-1,13.5
                                                                                                                                                                      s2.5,9.5,4,11.8s18.2,51,18.2,51s-12.5,9.5-14.5,9s-20.7-19-21.7-21.5s-6.8-23-7.2-24.5s-16-41.2-16-41.2l-13.8-19l-5.8-24
                                                                                                                                                                      l-9-25.8l6-27.2l-8.2-37.8L206.5,195c0,0-15.8,22-16.8,22.8s-31.5,8.5-31.5,8.5l-6.8-1.8l6.2-15.8l1.2-16.2l-0.2-8.2l-2.8-6
                                                                                                                                                                      l0.8-9.8L164.5,163.5z">
                                            </path>
                                        </defs>
                                        <clipPath id="SVGID_16_">
                                            <use xlink:href="#SVGID_15_" style="overflow:visible;"></use>
                                        </clipPath>
                                    </g>
                                    <g>
                                        <g>
                                            <defs>
                                                <path id="SVGID_17_"
                                                    d="M15.9,118.4l0.5,49l-0.5,49l10,43.5c0,0,31.5,21,44,20s59-16,59-16l24-46.5l4-17.5l-0.5-18.9l-0.5-9.1
                                                                                                                                                                      l-3.5-7.5l-26-19l-5.5-19.5l-3.5-11l-9-16.5l-6.9-6.4l-8.8,0.8l-4.8,2.9l-6.6-0.8l-4.5-4.5l-6-1.5l-3.5,3.5l-2,4l-5-6.5
                                                                                                                                                                      c0,0-4.5-2.5-6.5-2.5s-9,1.5-9.5,3s-1,7-4.5,8.5s-11.5,5.5-11.5,5.5s-10.2,5.4-10.5,8S15.9,118.4,15.9,118.4z">
                                                </path>
                                            </defs>
                                            <clipPath id="SVGID_18_">
                                                <use xlink:href="#SVGID_17_" style="overflow:visible;"></use>
                                            </clipPath>
                                        </g>
                                    </g>
                                    <g>
                                        <defs>
                                            <path id="SVGID_19_"
                                                d="M-176-90l-7.8-4l-9-7.2l2.2-6.2l-5.2-7.8l-2.2-4.8l2.5-4.2l1.8-9.2l4-3l4-3.8l1.5-3.5l-2.8-5.8l1.2-2.8
                                                                                                                                                                    c0,0,5.2-3.2,6.5-3.8s6.5-0.8,6.5-0.8l4.2,4c0,0,0.5,4.8,1.2,5.2s4.8,2,4.8,2l8.8-11.2l6.2-13.2l-2-15.5l6.8-3l9.8,4l3.5-3h9
                                                                                                                                                                    l10.5,3.2c0,0,2,3,2.8,2s5.8-5,6.8-5s6,4.2,6,4.2l3.2-1.5c0,0,0.8-2.5,0.8-3.2s1.3-3.3,2.7-3.7s5.3,0.5,5.3,0.5s8.9-3.2,8.2,2.9
                                                                                                                                                                    l5.5,0.4l3.3-0.8l5.1,1.2l-0.1,1.8l-3.2,2.9v2.2l3.7,2.4l1.9,2l0.6,2.8l2,3.4h4l2.5-2.2c0,0,2.8-0.8,3.5-0.8s0.8,1.2,1.8,1.5
                                                                                                                                                                    s2.8,2.8,2.8,2.8v2c0,0,5.2-3,6.2-3S-26-166-26-166s8.2,2,9,2s5.5-3.2,5.5-3.2l1.2,12.5l-1.8,3.5l2.5,3.8l1,4.8l4,11l7,3l3,4v5
                                                                                                                                                                    L6-107.5l1.5,1.5l4.8,11.8c0,0,0,7.2-6,11.8l-4,3.2l1.2,3.8l0.2,7v3.2l-4,4.8L0-55.8l1.8,5.5v5.8l-2.2,5v5.5l-4.2,0.8l0.5,4.5
                                                                                                                                                                    l-0.8,4l-1.8,2.2l1.5,3.5l1.2,4.8l-0.8,3.5l-1.9,3.1L-10-6l-1.5-0.2l-4.8,2.5l-6-0.2l-5.5-2l-9.5-6.2l-8.8-4.5l-4.8-2.2
                                                                                                                                                                    c0,0-12.8-0.5-13.5-0.5s-6.5-1.8-6.5-1.8l-6-2.8l-0.8-6.5l-4.2-9l-1.8-4.3l-1-5.4l-5.7-1.1l-5.3,2l-3.4,4.1l-4.2,2.2l-5.5-1.2
                                                                                                                                                                    l-3.5-2.5l-3.2-5.5l-1-6l0.5-5.5l-4.2-4.2c0,0-4.8,0-6,0.5s-8.8,1.8-8.8,1.8l-17.8-8.8l-5.5-8.5l-9.8-5.8L-176-90z">
                                            </path>
                                        </defs>
                                        <clipPath id="SVGID_20_">
                                            <use xlink:href="#SVGID_19_" style="overflow:visible;"></use>
                                        </clipPath>
                                        <path class="st15"
                                            d="M5.3-103.9l0.1,2.1l-0.9,1H3.4v2.8l-0.2,1.2c0,0,0-0.1-0.6,0.4s-1.2,0.5-1.2,1s0.2,1.1,0.2,1.1l1.8,0.4
                                                                                                                                                                  l0.5,1.1c0,0,0.4,0.2,0.4,0.8s1.2,1,0,1s-0.8,0-1.2,0s-1.4-0.1-1.4-0.1L1.5-92l-0.2,1.8c0,0-0.1,1,0.2,1.2s-0.4-0.1,0.4,0.2
                                                                                                                                                                  s0.5-0.9,0.8,0.4s0.4,0.9,0.2,1.8s-0.1,1.2,0.6,1.5s1.1,0.5,1.5-0.1s0.8-2.6,0.8-2.6s1.2,1.6,2.4,1.4s0.4,0.6,1.1-0.2
                                                                                                                                                                  s1.4-1.5,1.4-2.9s-1.4-8.6-1.4-8.6v-1.6c0,0-0.8-0.2-0.9-1.4s-0.8-1.9-0.8-2.2s0-1,0-1l-1.5-0.1L5.3-103.9z">
                                        </path>
                                        <path class="st15"
                                            d="M-5.7-127c0,0,0.6-0.6,1-0.6s1.1,0.1,1.1,0.5s0.4,0.8,0.5,1.1s0.2,0,0.2,1.2s0.1,2,0.1,2l0.8,0.6
                                                                                                                                                                  c0,0,0.2,0.9,0.2,1.2s-0.2,1,0,1.4s0.6,1,0.6,1l1.8,0.4l0.6-0.5c0,0-1-1.1-1-1.5s-0.5-2.1-0.5-2.1l0.4-0.8c0,0,0.5,0.5,0.8,0.9
                                                                                                                                                                  s1.5-0.6,1.8,1c0.3,1.6,0.2,1.6,0.2,1.6s-0.8-0.2-0.6,0.9s2,1.8,2,1.8l0.5,3.4v2.8c0,0,0.4,1.4-0.1,1.5s-1,1.5-1,1.5
                                                                                                                                                                  s-0.1,2.1,0,2.5S3.1-104,3.1-104s0.5-0.9-0.4,0.6s0,1.2-0.9,1.5s-2,1.1-2,0.2s0.4-3.6,0.4-4.2s-1.2-2.2-1.6-2.4s-0.8-2.9-0.8-3.2
                                                                                                                                                                  s0-1.5,0-1.5s0.1,1.8-1.4-0.5s-2-1.6-2-2.5s0-0.1,0-0.9s0.1-1.5,0.2-1.9s0.2-1.1,0.4-1.6s1.2-1.1,1.2-1.1s-0.4-0.5-0.5-0.9
                                                                                                                                                                  s-0.6-0.6-0.6-1.2s-0.2-1.1-0.2-1.1L-5.7-127z">
                                        </path>
                                        <path class="st15"
                                            d="M-0.4-127.2h1.9l0.8,0.2l0.8,0.9v0.9l0.1,1.1l0.4,1l0.8,0.8l0.5,1.1L4-121l-0.6-1l-1.1-1.4l-0.8-0.5
                                                                                                                                                                  c0,0,0-0.5-0.4-0.6S0-125.3,0-125.3l-0.2-1.4v-0.5H-0.4z">
                                        </path>
                                        <path class="st15"
                                            d="M-13.5-149.8l1.1-0.1l0.5-0.1l0.2,1.1l0.4,1.3l0.2,0.9l1,0.4l0.3,0.2c0,0,0.4,0.5,0.4,0.8s0.1,1.1,0,1.3
                                                                                                                                                                  s-0.1,1.1-0.1,1.1l-0.5,0.1c0,0-0.3,1.2-0.3,1.4s-0.4,0.8-0.4,0.8l-0.7-0.9c0,0-0.5-1.2-0.5-1.4s-0.3-1.1-0.3-1.1s-0.6,0-0.7-0.2
                                                                                                                                                                  s0.1-1.2,0.1-1.5s-0.4-1.1-0.4-1.1s0-0.7-0.2-0.8s-1.2-0.6-1.2-0.6l0.8-1.6L-13.5-149.8L-13.5-149.8z">
                                        </path>
                                        <path class="st15"
                                            d="M-13.8-155.7l0.4-1.4l0.7-0.7c0,0-0.1,0.1,0.2,0.4s0.3,1.1,0.3,1.1l0.9,0.4l-0.1,1.6c0,0-0.7,1.1-0.8,1.2
                                                                                                                                                                  s-0.4,0.6-0.6,0.8s0,0.4-0.4,0.5s-1.1,0-1.4,0s-0.8-0.1-0.8-0.1v-1.2c0,0-0.1-0.6,0.1-0.9s0.7-1.1,0.7-1.1L-13.8-155.7z">
                                        </path>
                                    </g>
                                    <radialGradient id="SVGID_21_" cx="74.3333" cy="-37.5032" r="3.7926"
                                        gradientTransform="matrix(1 0 0 1.6094 0 22.8516)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#000000"></stop>
                                        <stop offset="1" style="stop-color:#FFFFFF"></stop>
                                    </radialGradient>
                                    <ellipse class="st20" cx="74.3" cy="-37.5" rx="2.6" ry="0.4"></ellipse>
                                    <radialGradient id="SVGID_22_" cx="48.3958" cy="-115.741" r="3.7926"
                                        gradientTransform="matrix(1 0 0 1.6094 0 22.8516)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#000000"></stop>
                                        <stop offset="1" style="stop-color:#FFFFFF"></stop>
                                    </radialGradient>
                                    <ellipse class="st21" cx="48.4" cy="-163.4" rx="2.6" ry="0.4"></ellipse>
                                    <radialGradient id="SVGID_23_" cx="269.6042" cy="86.1002" r="3.7926"
                                        gradientTransform="matrix(1 0 0 1.6094 0 22.8516)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#000000"></stop>
                                        <stop offset="1" style="stop-color:#FFFFFF"></stop>
                                    </radialGradient>
                                    <ellipse class="st22" cx="269.6" cy="161.4" rx="2.6" ry="0.4"></ellipse>
                                    <radialGradient id="SVGID_24_" cx="62.8333" cy="85.8366" r="3.7926"
                                        gradientTransform="matrix(1 0 0 1.6094 0 22.8516)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#000000"></stop>
                                        <stop offset="1" style="stop-color:#FFFFFF"></stop>
                                    </radialGradient>
                                    <ellipse class="st23" cx="62.8" cy="161" rx="2.6" ry="0.4"></ellipse>
                                    <radialGradient id="SVGID_25_" cx="-53.4167" cy="37.9919" r="3.7926"
                                        gradientTransform="matrix(1 0 0 1.6094 0 22.8516)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#000000"></stop>
                                        <stop offset="1" style="stop-color:#FFFFFF"></stop>
                                    </radialGradient>
                                    <ellipse class="st24" cx="-53.4" cy="84" rx="2.6" ry="0.4"></ellipse>
                                    <radialGradient id="SVGID_26_" cx="-92.6667" cy="-92.8042" r="3.7926"
                                        gradientTransform="matrix(1 0 0 1.6094 0 22.8516)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#000000"></stop>
                                        <stop offset="1" style="stop-color:#FFFFFF"></stop>
                                    </radialGradient>
                                    <ellipse class="st25" cx="-92.7" cy="-126.5" rx="2.6" ry="0.4"></ellipse>
                                    <radialGradient id="SVGID_27_" cx="225.0833" cy="-96.6877" r="3.7926"
                                        gradientTransform="matrix(1 0 0 1.6094 0 22.8516)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#000000"></stop>
                                        <stop offset="1" style="stop-color:#FFFFFF"></stop>
                                    </radialGradient>
                                    <ellipse class="st26" cx="225.1" cy="-132.8" rx="2.6" ry="0.4"></ellipse>
                                    <radialGradient id="SVGID_28_" cx="-94.25" cy="-184.9175" r="3.7926"
                                        gradientTransform="matrix(1 0 0 1.6094 0 22.8516)" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" style="stop-color:#000000"></stop>
                                        <stop offset="1" style="stop-color:#FFFFFF"></stop>
                                    </radialGradient>
                                    <ellipse class="st27" cx="-94.2" cy="-274.8" rx="2.6" ry="0.4"></ellipse>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Full Contry Section End --}}
    {{-- Sports Section Start --}}
    <section id="sports">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('category-page', 'খেলাধুলা') }}">
                            <span>
                                খেলাধুলা
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('category-page', 'খেলাধুলা') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        @foreach ($sports_left_posts as $left_post)
                            <div class="col-md-12">
                                <a href="{{ route('single-post-page', $left_post->slug) }}">
                                    <div class="card-img">
                                        <img alt="{{ $left_post->slug }}" src="{{ $left_post->thumbnail }}" class="w-100">
                                    </div>
                                    <h5 class="py-2">
                                        {{ Illuminate\Support\Str::limit($left_post->title, 30) }}
                                    </h5>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="{{ route('single-post-page', $last_sports_post->slug) }}">
                        <div class="card-img">
                            <img alt="{{ $last_sports_post->slug }}" src="{{ $last_sports_post->thumbnail }}" class="w-100">
                        </div>
                        <h5 class="pt-2">
                            {{ $last_sports_post->title }}
                        </h5>
                        <p>
                            {!! \Illuminate\Support\str::of(strip_tags($last_sports_post->content))->words(10) !!}
                            @if (strlen(strip_tags($last_sports_post->content)) > 50)
                                <a href="{{ route('single-post-page', $last_sports_post->slug) }}"
                                    class="text-white">বিস্তারিত...</a>
                            @endif
                        </p>
                    </a>
                </div>
                <div class="col-md-3">
                    <div class="row">
                        @foreach ($sports_right_posts as $right_post)
                            <div class="col-md-12">
                                <a href="{{ route('single-post-page', $right_post->slug) }}">
                                    <div class="card-img">
                                        <img src="{{ $right_post->thumbnail }}" class="w-100">
                                    </div>
                                    <h5 class="py-2">
                                        {{ $right_post->title }}
                                    </h5>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Sports Section End --}}
    {{-- Photo finance and foreign Start --}}
    <section id="photo_gallery_finance_foreign">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="d-flex justify-content-between">
                        <span class="section_header">
                            <i class="fa fa-camera"></i> ফটো গ্যালারী
                        </span>
                    </h3>
                    <div class="img-slider">
                        @foreach ($photo_gallery as $photo)
                            <a href="{{ route('single-post-page', $photo->slug) }}">
                                <div class="card-img">
                                    <div class="image_box">
                                        <img src="{{ $photo->thumbnail }}" class="w-100" alt="{{ $photo->slug }}"
                                            width="544" height="367">
                                    </div>
                                    <div class="image_overlay">
                                        <h5 class="py-2">
                                            {{ Illuminate\Support\Str::limit($photo->title, 50) }}
                                        </h5>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-3">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('subcategory-page', 'অর্থনীতি') }}">
                            <span>
                                অর্থনীতি
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('subcategory-page', 'অর্থনীতি') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <ul>
                        @foreach ($finance_news as $f_news)
                            <li>
                                <a class="d-flex" href="{{ route('single-post-page', $f_news->slug) }}">
                                    <img height="70" width="100" alt="{{ $f_news->slug }}" src="{{ $f_news->thumbnail }}">
                                    <p class="ml-3">
                                        {{ Illuminate\Support\Str::limit($f_news->title, 40) }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('subcategory-page', 'প্রবাসের-খবর') }}">
                            <span>
                                প্রবাসের খবর
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('subcategory-page', 'প্রবাসের-খবর') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <ul>
                        @foreach ($nrb_news as $nrb)
                            <li>
                                <a class="d-flex" href="{{ route('single-post-page', $nrb->slug) }}">
                                    <img height="70" width="100" alt="{{ $nrb->slug }}" src="{{ $nrb->thumbnail }}">
                                    <p class="ml-3">
                                        {{ Illuminate\Support\Str::limit($nrb->title, 40) }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Photo finance and foreign End --}}
    {{-- Travel Health religion Section Start --}}
    <section id="travel_health_religion">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('subcategory-page', 'ভ্রমণ') }}">
                            <span>
                                ভ্রমণ
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('subcategory-page', 'ভ্রমণ') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <a href="{{ route('single-post-page', $last_tourism_post->slug) }}">
                        <img src="{{ $last_tourism_post->thumbnail }}" alt="{{ $last_tourism_post->slug }}" width="100%">
                        <h5 class="pt-2">
                            {{ Illuminate\Support\Str::limit($last_tourism_post->title, 40) }}
                        </h5>
                        <p>
                            {!! Illuminate\Support\Str::limit($last_tourism_post->content, 100) !!}
                        </p>
                    </a>
                    <ul>
                        @foreach ($tourism_posts as $tour)
                            <li>
                                <a class="d-flex" href="{{ route('single-post-page', $tour->slug) }}">
                                    <img height="70" width="100" alt="{{ $tour->slug }}" src="{{ $tour->thumbnail }}">
                                    <p class="ml-3">
                                        {{ Illuminate\Support\Str::limit($tour->title, 40) }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('subcategory-page', 'স্বাস্থ্য') }}">
                            <span>
                                স্বাস্থ্য
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('subcategory-page', 'স্বাস্থ্য') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <a href="{{ route('single-post-page', $last_health_post->slug) }}">
                        <img src="{{ $last_health_post->thumbnail }}" alt="{{ $last_health_post->slug }}" width="100%">
                        <h5 class="pt-2">
                            {{ Illuminate\Support\Str::limit($last_health_post->title, 40) }}
                        </h5>
                        <p>
                            {!! Illuminate\Support\Str::limit($last_health_post->content, 100) !!}
                        </p>
                    </a>
                    <ul>
                        @foreach ($health_posts as $health)
                            <li>
                                <a class="d-flex" href="{{ route('single-post-page', $health->slug) }}">
                                    <img height="70" width="100" alt="{{ $health->slug }}" src="{{ $health->thumbnail }}">
                                    <p class="ml-3">
                                        {{ Illuminate\Support\Str::limit($health->title, 40) }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="d-flex justify-content-between">
                        <a class="section_header" href="{{ route('category-page', 'ধর্ম') }}">
                            <span>
                                ধর্ম
                            </span>
                        </a>
                        <a class="section_link" href="{{ route('category-page', 'ধর্ম') }}">
                            <span>
                                সব খবর ...
                            </span>
                        </a>
                    </h3>
                    <a href="{{ route('single-post-page', $last_religion_post->slug) }}">
                        <img src="{{ $last_religion_post->thumbnail }}" alt="{{ $last_religion_post->slug }}" width="100%">
                        <h5 class="pt-2">
                            {{ Illuminate\Support\Str::limit($last_religion_post->title, 40) }}
                        </h5>
                        <p>
                            {!! $last_religion_post->content !!}
                        </p>
                    </a>
                    <ul>
                        @foreach ($religion_posts as $religion)
                            <li>
                                <a class="d-flex" href="{{ route('single-post-page', $religion->slug) }}">
                                    <img height="70" width="100" alt="{{ $religion->slug }}"
                                        src="{{ $religion->thumbnail }}">
                                    <p class="ml-3">
                                        {!! Illuminate\Support\Str::limit($religion->content, 90) !!}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Travel Health Foreign Section End --}}

@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                arrows: false,
                slidesToShow: 4,
                autoplay: true,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
            $('.img-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                arrows: false,
                slidesToShow: 1,
                autoplay: true,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

        });
        //dummy isotop
        $(document).ready(function() {
            // init Isotope
            var $grid = $('.grid').isotope({
                // options
            });

            var itemSelector = '.post-item';

            var $container = $('#container').isotope({
                itemSelector: itemSelector,
                masonry: {
                    columnWidth: itemSelector,
                    isFitWidth: true
                }
            });

            //Ascending order
            var responsiveIsotope = [
                [480, 4],
                [720, 6]
            ];

            var itemsPerPageDefault = 6;
            var itemsPerPage = defineItemsPerPage();
            var currentNumberPages = 1;
            var currentPage = 1;
            var currentFilter = '*';
            var filterAtribute = 'data-filter';
            var pageAtribute = 'data-page';
            var pagerClass = 'isotope-pager';

            function changeFilter(selector) {
                $container.isotope({
                    filter: selector
                });
            }


            function goToPage(n) {
                currentPage = n;

                var selector = itemSelector;
                selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' : '';
                selector += '[' + pageAtribute + '="' + currentPage + '"]';

                changeFilter(selector);
            }

            function defineItemsPerPage() {
                var pages = itemsPerPageDefault;

                for (var i = 0; i < responsiveIsotope.length; i++) {
                    if ($(window).width() <= responsiveIsotope[i][0]) {
                        pages = responsiveIsotope[i][1];
                        break;
                    }


                }

                return pages;
            }

            function setPagination() {

                var SettingsPagesOnItems = function() {

                    var itemsLength = $container.children(itemSelector).length;

                    var pages = Math.ceil(itemsLength / itemsPerPage);
                    var item = 1;
                    var page = 1;
                    var selector = itemSelector;
                    selector += (currentFilter != '*') ? '[' + filterAtribute + '="' + currentFilter + '"]' :
                        '';

                    $container.children(selector).each(function() {
                        if (item > itemsPerPage) {
                            page++;
                            item = 1;
                        }
                        $(this).attr(pageAtribute, page);
                        item++;
                    });

                    currentNumberPages = page;

                }();

                var CreatePagers = function() {

                    var $isotopePager = ($('.' + pagerClass).length == 0) ? $('<div class="' + pagerClass +
                        '"></div>') : $('.' + pagerClass);

                    $isotopePager.html('');

                    for (var i = 0; i < currentNumberPages; i++) {
                        var $pager = $('<a href="javascript:void(0);" class="pager" ' + pageAtribute + '="' + (
                            i + 1) + '"></a>');
                        $pager.html(i + 1);

                        $pager.click(function() {
                            var page = $(this).eq(0).attr(pageAtribute);
                            goToPage(page);
                        });

                        $pager.appendTo($isotopePager);
                    }

                    $container.after($isotopePager);

                }();

            }

            setPagination();
            goToPage(1);

            //Adicionando Event de Click para as categorias
            $('.division_btn a').click(function() {
                var filter = $(this).attr(filterAtribute);
                currentFilter = filter;

                setPagination();
                goToPage(1);


            });

            //Evento Responsivo
            $(window).resize(function() {
                itemsPerPage = defineItemsPerPage();
                setPagination();
                goToPage(1);
            });


        });

    </script>
@endsection
