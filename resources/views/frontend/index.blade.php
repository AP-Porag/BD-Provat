@extends('layouts.website')
@section('title')
    BD-Provat
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="social-icon-content d-flex justify-content-between">
                    <p class="date ml-3 mt-3">Sunday, January 3, 2021</p>
                    <ul class="d-flex social-icon mr-3 mt-3">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li class="mx-5"><a href="{{ route('login') }}" class="text-white login">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Date Social Icon End --}}
    <div class="container my-4">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('frontend/img/272px-90px-Logo.png') }}" alt="" class="img-fluid" width="200">
            </div>
            <div class="col-md-8">
                <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg" alt=""
                    width="728" height="90" class="img-fluid mt-4">
            </div>
        </div>
    </div>
    {{-- Logo and Add Place Ends --}}
    <div class="container">
        <nav class="navbar px-0 navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">প্রচ্ছদ</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            বাংলাদেশ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">জাতীয়</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">রাজনীতি</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">অর্থনীতি</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">রাজধানী</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">সারাদেশ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">আন্তর্জাতিক</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">আইন/আদালত</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">শিক্ষাঙ্গন</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">তথ্যপ্রযুক্তি</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">প্রবাস</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">খেলাধুলা</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">বিনোদন</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ধর্ম</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            সকল বিভাগ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">লাইফস্টাইল</a>
                            <a class="dropdown-item" href="#">ঘটনা/দূর্ঘটনা</a>
                            <a class="dropdown-item" href="#">অপরাধ/দূর্নীতি</a>
                            <a class="dropdown-item" href="#">চাকুরী</a>
                            <a class="dropdown-item" href="#">স্বাস্থ্য সেবা</a>
                            <a class="dropdown-item" href="#">অনুসন্ধানী</a>
                            <a class="dropdown-item" href="#">ফটো গ্যালারী</a>
                            <a class="dropdown-item" href="#">ভিডিও গ্যালারী</a>
                            <a class="dropdown-item" href="#">বিশেষ প্রতিবেদন</a>
                            <a class="dropdown-item" href="#">বিডি প্রভাত পরিবার</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    {{-- Navbar End --}}
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <p class="breaking-news-title">ব্রেকিং নিউজ</p>
            </div>
            <div class="col-md-10">
                <marquee onmouseover="this.stop();" onmouseout="this.start();">
                    <ul class="d-flex">
                        <li><a href="#">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</a><span
                                style="font-size: 12px">বিডি</span></li>
                        <li><a href="#">রেনু হত্যা মামলার আসামি মহিনের সম্পত্তি ক্রোকের নির্দেশ</a><span
                                style="font-size: 12px">বিডি</span></li>
                        <li><a href="#">রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু</a><span
                                style="font-size: 12px">বিডি</span></li>
                        <li><a href="#">মাকে নিয়ে দেশে ফিরলেন সাকিব</a><span style="font-size: 12px">বিডি</span></li>
                        <li><a href="#">ইতালিতে প্রথম ভ্যাকসিন নিলেন বাংলাদেশি নারী</a><span
                                style="font-size: 12px">বিডি</span></li>
                        <li><a href="#">ভারত থেকে পেঁয়াজ আমদানি শুরু</a><span style="font-size: 12px">বিডি</span></li>
                        <li><a href="https://www.facebook.com">সৈয়দ আশরাফের আজ দ্বিতীয় মৃত্যুবার্ষিকী</a><span
                                style="font-size: 12px">বিডি</span></li>
                    </ul>
                </marquee>
            </div>
        </div>
    </div>
    {{-- Braking News End --}}
    {{-- Main news section start --}}
    <section id="main_news_section">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="">
                        <div class="main_news_image">
                            <img src="{{ asset('frontend/images/ObaibulQader.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h5 class="py-2">
                            করোনাভাইরাসে গত ২৪ ঘন্টায় আরও ১৭ জনের মৃত্যু, শনাক্ত ৯৭৮
                        </h5>
                        <p>
                            অনলাইন ডেস্কঃ সারাদেশে করোনাভাইরাসে (কোভিড-১৯) আক্রান্ত হয়ে গত ২৪ ঘণ্টায় সারাদেশে আরও ১৭ জনের
                            মৃত্যু হয়েছে। এ নিয়ে ভাইরাসটিতে মৃতের সংখ্যা বেড়ে দাঁড়াল
                        </p>
                    </a>
                </div>
                <div class="col-md-4">
                    <div class="middle_content">
                        <ul>
                            <li class="ml-3">
                                <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                        src="{{ asset('frontend/images/international.jpg') }}">
                                    <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                </a>
                            </li>
                            <li class="ml-3">
                                <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                        src="{{ asset('frontend/images/international.jpg') }}">
                                    <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                </a>
                            </li>
                            <li class="ml-3">
                                <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                        src="{{ asset('frontend/images/international.jpg') }}">
                                    <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                </a>
                            </li>
                            <li class="ml-3">
                                <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                        src="{{ asset('frontend/images/international.jpg') }}">
                                    <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                </a>
                            </li>
                            <li class="ml-3">
                                <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                        src="{{ asset('frontend/images/international.jpg') }}">
                                    <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="tab_for_content">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">সর্বশেষ</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">জনপ্রিয়</a>
                            </div>
                        </nav>
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">
                                <ul>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <ul>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ asset('frontend/images/international.jpg') }}">
                                            <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Main news section end --}}
    {{-- National International Section Start --}}
    <section id="national_international_news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        <span>
                            জাতীয়
                        </span>
                    </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">
                                <img src={{ $last_national_post->thumbnail }}" alt="" width="100%">
                                <h5 class="pt-2">{{ $last_national_post->title }}</h5>
                                <p>{{ Illuminate\Support\Str::of($last_national_post->content)->words(20) }}
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                @foreach ($national_posts as $national_post)
                                    <li class="ml-3">
                                        <a href="#" class="d-flex"><img height="70" width="100" alt=""
                                                src="{{ $national_post->thumbnail }}">
                                            <p class="ml-3">{{ $national_post->title }}</p>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>
                        <span>
                            আন্তর্জাতিক
                        </span>
                    </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">
                                <img src={{ $last_international_post->thumbnail }}" alt="" width="100%">
                                <h5 class="pt-2">{{ $last_international_post->title }}</h5>
                                <p>{{ Illuminate\Support\Str::of($last_international_post->content)->words(20) }}
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                @foreach ($international_posts as $international_post)
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ $international_post->thumbnail }}">
                                            <p class="ml-3">{{ $international_post->title }}</p>
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
    {{-- National International Section End --}}
    {{-- Politics Technology and Law Section Start --}}
    <section id="politics_technology_law">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>
                        <span>
                            রাজনীতি
                        </span>
                    </h3>
                    <a href="#">
                        <img src="{{ $last_political_post->thumbnail }}" alt="" width="100%">
                        <h5 class="pt-2">{{ $last_political_post->title }}</h5>
                        <p style="text-align:justify">
                            {{ Illuminate\Support\Str::of($last_international_post->content)->words(15) }}
                        </p>
                    </a>
                    <ul>
                        @foreach ($political_posts as $key => $political_post)
                            <li>
                                <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                        src="{{ $political_post->thumbnail }}">
                                    <p class="ml-3" style="text-align: justify">
                                        {{ $political_post->title }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>
                        <span>
                            তথ্যপ্রযুক্তি
                        </span>
                    </h3>
                    <a href="#">
                        <img src="{{ $last_info_tech_post->thumbnail }}" alt="" width="100%">
                        <h5 class="pt-2">{{ $last_info_tech_post->title }}</h5>
                        <p style="text-align: justify">
                            {{ Illuminate\Support\Str::of($last_political_post->content)->words(15) }}
                        </p>
                    </a>
                    <ul>
                        @foreach ($info_tech_posts as $key => $info_tech_post)
                            <li>
                                <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                        src="{{ $info_tech_post->thumbnail }}">
                                    <p class="ml-3" style="text-align: justify">
                                        {{ $info_tech_post->title }}
                                    </p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>
                        <span>
                            আইন আদালত
                        </span>
                    </h3>
                    <a href="#">
                        <img src="{{ $last_law_post->thumbnail }}" alt="" class="w-100">
                        <h5 class="pt-2">{{ $last_law_post->title }}</h5>
                        {!! Illuminate\Support\Str::of($last_law_post->content)->words(15) !!}
                    </a>
                    <ul>
                        @foreach ($law_posts as $key => $law_post)
                            <li>
                                <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                        src="{{ $law_post->thumbnail }}">
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
    <section id="entertainment_and_feedback">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        <span>
                            বিনোদন
                        </span>
                    </h3>
                </div>
                <a href="#" class="d-flex">
                    <div class="col-md-6">
                        <h5 class="text-danger">{{ $last_entertainment_post->title }}</h5>
                        <p class="text-justify">
                            {{ Illuminate\Support\Str::of($last_entertainment_post->content)->words(50) }}
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ $last_entertainment_post->thumbnail }}" alt="" class="img-fluid">
                    </div>
                </a>
                <div class="col-md-12">
                    <div class="row slider">
                        @foreach ($entertainment_posts as $key => $entertainment_post)
                            <div class="col-md-3 pt-3"> <img src="{{ $entertainment_post->thumbnail }}" alt=""
                                    class="img-fluid">
                                <p class="pt-2">
                                    {{ $entertainment_post->title }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- Entertainment Section End--}}
    {{-- Lifestyle and Education Section Start --}}
    <section id="national_international_news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        <span>
                            লাইফস্টাইল
                        </span>
                    </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">
                                <img src="{{ $last_lifestyle_post->thumbnail }}" alt="" width="100%">
                                <h5 class="pt-2">{{ $last_lifestyle_post->title }}</h5>
                                <p class="text-justify">
                                    {{ Illuminate\Support\Str::of($last_lifestyle_post->content)->words(15) }}
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                @foreach ($lifestyle_posts as $key => $lifestyle_post)
                                    <li class="ml-3">
                                        <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                                src="{{ $lifestyle_post->thumbnail }}">
                                            <p class="ml-3" style="text-align:justify">
                                                {{ $lifestyle_post->title }}
                                            </p>
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3>
                        <span>
                            শিক্ষা ও সাহিত্য
                        </span>
                    </h3>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="#">
                                <img src="{{ asset('frontend/images/jatiyo-one.jpg') }}" alt="" width="100%">
                                <h5 class="pt-2">সংরক্ষিত নারী আসনে মনোনয়ন জমা দিলেন যারা</h5>
                                <p>একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার শেষ দিন আজ সোমবার।
                                    এদিন বিকেল ৫টা পর্যন্ত নির্বাচন কমিশনে রিটার্নিং কর্মকর্তার কার্যালয়ে মনোনয়নপত্র জমা
                                    দেয়া....
                                </p>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li class="ml-3">
                                    <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                            src="{{ asset('frontend/images/international.jpg') }}">
                                        <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="ml-3">
                                    <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                            src="{{ asset('frontend/images/international.jpg') }}">
                                        <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="ml-3">
                                    <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                            src="{{ asset('frontend/images/international.jpg') }}">
                                        <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="ml-3">
                                    <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                            src="{{ asset('frontend/images/international.jpg') }}">
                                        <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
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
                <div class="button-group filter-button-group mx-auto">
                    <ul>
                        <li class="active" data-filter="*">সারাদেশ</li>
                        <li data-filter=".dhaka">ঢাকা</li>
                        <li data-filter=".chittagong">চট্টগ্রাম</li>
                        <li data-filter=".khulna">খুলনা</li>
                        <li data-filter=".sylet">সিলেট</li>
                        <li data-filter=".barishal">বরিশাল</li>
                        <li data-filter=".mymensingh">ময়মনসিংহ</li>
                        <li data-filter=".rajshahi">রাজশাহী</li>
                    </ul>
                </div>

                <div class="grid w-100">
                    <div class="col-md-4 element-item dhaka">
                        <a href="#">
                            <div class="card-img">
                                <img src="{{ asset('frontend/images/dhaka.jpg') }}">
                            </div>
                            <h5 class="py-2">একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার...
                            </h5>
                        </a>
                    </div>
                    <div class="col-md-4 element-item chittagong">
                        <a href="#">
                            <div class="card-img">
                                <img src="{{ asset('frontend/images/dhaka.jpg') }}">
                            </div>
                            <h5 class="py-2">একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার...
                            </h5>
                        </a>
                    </div>
                    <div class="col-md-4 element-item khulna">
                        <a href="#">
                            <div class="card-img">
                                <img src="{{ asset('frontend/images/dhaka.jpg') }}">
                            </div>
                            <h5 class="py-2">একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার...
                            </h5>
                        </a>
                    </div>
                    <div class="col-md-4 element-item sylet">
                        <a href="#">
                            <div class="card-img">
                                <img src="{{ asset('frontend/images/dhaka.jpg') }}">
                            </div>
                            <h5 class="py-2">একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার...
                            </h5>
                        </a>
                    </div>
                    <div class="col-md-4 element-item barishal">
                        <a href="#">
                            <div class="card-img">
                                <img src="{{ asset('frontend/images/dhaka.jpg') }}">
                            </div>
                            <h5 class="py-2">একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার...
                            </h5>
                        </a>
                    </div>
                    <div class="col-md-4 element-item mymensingh">
                        <a href="#">
                            <div class="card-img">
                                <img src="{{ asset('frontend/images/dhaka.jpg') }}">
                            </div>
                            <h5 class="py-2">একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার...
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Full Contry Section End --}}
    {{-- Sports Section Start --}}
    <section id="sport">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>
                        <span>
                            খেলাধুলা
                        </span>
                    </h3>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/dhaka.jpg') }}" class="w-100">
                        </div>
                        <h5 class="py-2">বাংলাদেশ সফরে অনীহা : হোল্ডার-পোলার্ডদের ওপর খেপেছেন গঙ্গা..
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/dhaka.jpg') }}" class="w-100">
                        </div>
                        <h5 class="py-2">বাংলাদেশ সফরে অনীহা : হোল্ডার-পোলার্ডদের ওপর খেপেছেন গঙ্গা..
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/dhaka.jpg') }}" class="w-100">
                        </div>
                        <h5 class="py-2">বাংলাদেশ সফরে অনীহা : হোল্ডার-পোলার্ডদের ওপর খেপেছেন গঙ্গা..
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/dhaka.jpg') }}" class="w-100">
                        </div>
                        <h5 class="py-2">বাংলাদেশ সফরে অনীহা : হোল্ডার-পোলার্ডদের ওপর খেপেছেন গঙ্গা..
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/dhaka.jpg') }}" class="w-100">
                        </div>
                        <h5 class="py-2">বাংলাদেশ সফরে অনীহা : হোল্ডার-পোলার্ডদের ওপর খেপেছেন গঙ্গা..
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/dhaka.jpg') }}" class="w-100">
                        </div>
                        <h5 class="py-2">বাংলাদেশ সফরে অনীহা : হোল্ডার-পোলার্ডদের ওপর খেপেছেন গঙ্গা..
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/dhaka.jpg') }}" class="w-100">
                        </div>
                        <h5 class="py-2">বাংলাদেশ সফরে অনীহা : হোল্ডার-পোলার্ডদের ওপর খেপেছেন গঙ্গা..
                        </h5>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="#">
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/dhaka.jpg') }}" class="w-100">
                        </div>
                        <h5 class="py-2">বাংলাদেশ সফরে অনীহা : হোল্ডার-পোলার্ডদের ওপর খেপেছেন গঙ্গা..
                        </h5>
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Sports Section End --}}
    {{-- Photo Feature and Religion Start --}}
    <section id="photo_galery_religion_feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>
                        <span>
                            <i class="fa fa-camera"></i> ফটো গ্যালারী
                        </span>
                    </h3>
                    <div class="img-slider">
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/chittagong.jpg') }}" class="w-100" alt="" width="544"
                                height="367">
                        </div>
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/chittagong.jpg') }}" class="w-100" alt="" width="544"
                                height="367">
                        </div>
                        <div class="card-img">
                            <img src="{{ asset('frontend/images/chittagong.jpg') }}" class="w-100" alt="" width="544"
                                height="367">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>
                        <span>
                            ফিচার
                        </span>
                    </h3>
                    <ul>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>
                        <span>
                            ধর্ম
                        </span>
                    </h3>
                    <ul>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Photo Feature and Religion End --}}
    {{-- Travel Health Foreign Section Start --}}
    <section id="travel_health_foreign">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>
                        <span>
                            প্রবাসের খবর
                        </span>
                    </h3>
                    <a href="#">
                        <img src="{{ asset('frontend/images/jatiyo-one.jpg') }}" alt="" width="100%">
                        <h5 class="pt-2">সংরক্ষিত নারী আসনে মনোনয়ন জমা দিলেন যারা</h5>
                        <p>একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার শেষ দিন আজ সোমবার....
                        </p>
                    </a>
                    <ul>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>
                        <span>
                            স্বাস্থ্য
                        </span>
                    </h3>
                    <a href="#">
                        <img src="{{ asset('frontend/images/jatiyo-one.jpg') }}" alt="" width="100%">
                        <h5 class="pt-2">সংরক্ষিত নারী আসনে মনোনয়ন জমা দিলেন যারা</h5>
                        <p>একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার শেষ দিন আজ সোমবার....
                        </p>
                    </a>
                    <ul>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>
                        <span>
                            ভ্রমণ
                        </span>
                    </h3>
                    <a href="#">
                        <img src="{{ asset('frontend/images/jatiyo-one.jpg') }}" alt="" width="100%">
                        <h5 class="pt-2">সংরক্ষিত নারী আসনে মনোনয়ন জমা দিলেন যারা</h5>
                        <p>একাদশ জাতীয় সংসদের সংরক্ষিত নারী আসনে মনোনয়নপত্র জমা দেয়ার শেষ দিন আজ সোমবার....
                        </p>
                    </a>
                    <ul>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                        <li>
                            <a class="d-flex" href="#"><img height="70" width="100" alt=""
                                    src="{{ asset('frontend/images/international.jpg') }}">
                                <p class="ml-3">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- Travel Health Foreign Section End --}}
    {{-- Footer Section Start --}}
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="logo_play_store d-flex justify-content-between">
                        <img src="{{ asset('frontend/img/272px-90px-Logo.png') }}" alt="" width="200">
                        <img src="{{ asset('frontend/images/google_play.png') }}" alt="" height="90" width="272">
                    </div>

                    <div class="editor d-flex justify-content-between">
                        <p>
                            ভারপ্রাপ্ত সম্পাদক, কাজী রফিক
                            <br>এম, কে, আর এন্টারপ্রাইজের একটি প্রতিষ্ঠান<br>
                            প্রধান কার্যালয়: আলফা টাওয়ার, আবদুল্লাহপুর, উত্তরা, ঢাকা-১২৩০।<br>
                            আমাদের মেইল: bdprovat.news@gmail.com মোবাইল: ০১৭১৪-০৩৬৬১২
                        </p>

                        <ul>
                            <li><a href="#">আমাদের কথা</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    {{-- Footer Section End --}}
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
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
            $('.img-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
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
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
            // init Isotope
            var $grid = $('.grid').isotope({
                // options
            });
            // filter items on button click
            $('.filter-button-group').on('click', 'li', function() {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });
            $('.filter-button-group').on('click', 'li', function() {
                $(this).addClass('active').siblings().removeClass('active');
            });

        });

    </script>
@endsection
