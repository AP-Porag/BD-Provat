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
                    <p class="date ml-3 mt-2">Sunday, January 3, 2021</p>
                    <ul class="d-flex social-icon mr-3 mt-3">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-instagram"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- Date Social Icon End --}}
    <div class="container my-4">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('frontend/img/272px-90px-Logo.png') }}" alt="" class="img-fluid">
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
                        <li><a href="#">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</a></li>
                        <li><a href="#">রেনু হত্যা মামলার আসামি মহিনের সম্পত্তি ক্রোকের নির্দেশ</a></li>
                        <li><a href="#">রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু</a></li>
                        <li><a href="#">মাকে নিয়ে দেশে ফিরলেন সাকিব</a></li>
                        <li><a href="#">ইতালিতে প্রথম ভ্যাকসিন নিলেন বাংলাদেশি নারী</a></li>
                        <li><a href="#">ভারত থেকে পেঁয়াজ আমদানি শুরু</a></li>
                        <li><a href="https://www.facebook.com">সৈয়দ আশরাফের আজ দ্বিতীয় মৃত্যুবার্ষিকী</a></li>
                    </ul>
                </marquee>
            </div>
        </div>
    </div>
    {{-- Braking News End --}}
    <section id="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
{{--                    national--}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h4 class="text-white">
                                    <span>জাতীয়</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="national-card">
                                        <div class="card card-news border-0">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/national-main-news.jpg')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="ভাসানচরে রোহিঙ্গাদের স্থানান্তরে প্রশংসা ওমানের" rel="bookmark">ভাসানচরে রোহিঙ্গাদের স্থানান্তরে প্রশংসা ওমানের</a>
                                                    </h3>
                                                    <p>অনলাইন ডেস্ক: ঢাকাস্থ ওমান দূতাবাসের মিশন প্রধান তায়েব সেলিম আবদুল্লাহ আল আলাবি কক্সবাজার থেকে রোহিঙ্গাদেরকে ভাসান চরে স্থানান্তরের জন্য বাংলাদেশ সরকারের পদক্ষেপের প্রশংসা করে..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="national-right-side-news-headlines">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="national-right-side-img">
                                                    <div class="card-img">
                                                        <img src="{{asset('frontend/images/health-minister.jpg')}}" alt="" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 pl-0 pt-0">
                                                <div class="national-right-side-text">
                                                    <div class="card-text">
                                                        <h3>
                                                            <a href="#" title="করোনা ভ্যাকসিন ৪২৫ টাকায় পাওয়া যাবে: স্বাস্থ্যমন্ত্রী" rel="bookmark">করোনা ভ্যাকসিন ৪২৫ টাকায় পাওয়া যাবে: স্বাস্থ্যমন্ত্রী</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="national-right-side-news-headlines">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="national-right-side-img">
                                                    <div class="card-img">
                                                        <img src="{{asset('frontend/images/health-minister.jpg')}}" alt="" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 pl-0 pt-0">
                                                <div class="national-right-side-text">
                                                    <div class="card-text">
                                                        <h3>
                                                            <a href="#" title="করোনা ভ্যাকসিন ৪২৫ টাকায় পাওয়া যাবে: স্বাস্থ্যমন্ত্রী" rel="bookmark">করোনা ভ্যাকসিন ৪২৫ টাকায় পাওয়া যাবে: স্বাস্থ্যমন্ত্রী</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="national-right-side-news-headlines">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="national-right-side-img">
                                                    <div class="card-img">
                                                        <img src="{{asset('frontend/images/health-minister.jpg')}}" alt="" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 pl-0 pt-0">
                                                <div class="national-right-side-text">
                                                    <div class="card-text">
                                                        <h3>
                                                            <a href="#" title="করোনা ভ্যাকসিন ৪২৫ টাকায় পাওয়া যাবে: স্বাস্থ্যমন্ত্রী" rel="bookmark">করোনা ভ্যাকসিন ৪২৫ টাকায় পাওয়া যাবে: স্বাস্থ্যমন্ত্রী</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="national-right-side-news-headlines">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="national-right-side-img">
                                                    <div class="card-img">
                                                        <img src="{{asset('frontend/images/health-minister.jpg')}}" alt="" class="img-fluid w-100">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8 pl-0 pt-0">
                                                <div class="national-right-side-text">
                                                    <div class="card-text">
                                                        <h3>
                                                            <a href="#" title="করোনা ভ্যাকসিন ৪২৫ টাকায় পাওয়া যাবে: স্বাস্থ্যমন্ত্রী" rel="bookmark">করোনা ভ্যাকসিন ৪২৫ টাকায় পাওয়া যাবে: স্বাস্থ্যমন্ত্রী</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    national news--}}
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="card-body">
                                <div class="national-section-add-one border">

                                </div>
                            </div>
                        </div>
                    </div>
{{--                    ad end--}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h4 class="text-white">
                                    <span>রাজনীতি</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/13-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন" rel="bookmark">টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/13-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন" rel="bookmark">টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/13-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন" rel="bookmark">টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/13-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন" rel="bookmark">টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/13-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন" rel="bookmark">টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/13-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন" rel="bookmark">টুঙ্গিপাড়ায় আ.লীগ প্রার্থী বিনা প্রতিদ্বন্দ্বিতায় মেয়র নির্বাচিত হলেন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start">
                                                <li class="page-item disabled mr-2">
                                                    <a class="page-link" href="#" tabindex="-1"><i class="fa fa-chevron-right"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    politice news end--}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h4 class="text-white">
                                    <span>অর্থনীতি</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/340-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও" rel="bookmark">পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/340-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও" rel="bookmark">পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/340-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও" rel="bookmark">পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/340-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও" rel="bookmark">পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/340-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও" rel="bookmark">পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/340-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও" rel="bookmark">পাওয়ারের শেয়ার কেনার ঘোষণায় বেক্সিমকোর বিক্রেতা উধাও</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start">
                                                <li class="page-item disabled mr-2">
                                                    <a class="page-link" href="#" tabindex="-1"><i class="fa fa-chevron-right"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    Finance news end--}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h4 class="text-white">
                                    <span>রাজধানী</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-408-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু" rel="bookmark">রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-408-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু" rel="bookmark">রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-408-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু" rel="bookmark">রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-408-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু" rel="bookmark">রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-408-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু" rel="bookmark">রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-408-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু" rel="bookmark">রাজধানীতে ট্রাকচাপায় অজ্ঞাত ব্যক্তির মৃত্যু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start">
                                                <li class="page-item disabled mr-2">
                                                    <a class="page-link" href="#" tabindex="-1"><i class="fa fa-chevron-right"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    Capital City news end--}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h4 class="text-white">
                                    <span>সারাদেশ</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-43-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন" rel="bookmark">কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-43-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন" rel="bookmark">কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-43-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন" rel="bookmark">কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-43-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন" rel="bookmark">কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-43-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন" rel="bookmark">কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-43-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন" rel="bookmark">কুড়িগ্রামে প্রতারকদের গ্রেফতার করে কঠোর শাস্তির দাবিতে মানববন্ধন</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start">
                                                <li class="page-item disabled mr-2">
                                                    <a class="page-link" href="#" tabindex="-1"><i class="fa fa-chevron-right"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    full country City news end--}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h4 class="text-white">
                                    <span>আন্তর্জাতিক</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-4">
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-36-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু" rel="bookmark">সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-36-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু" rel="bookmark">সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-36-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু" rel="bookmark">সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-36-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু" rel="bookmark">সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-36-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু" rel="bookmark">সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card-news">
                                        <div class="card-img">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/Bdprovat-Final-Share-Logo-copy-36-218x150.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" title="সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু" rel="bookmark">সৌদি আরবে আন্তর্জাতিক ফ্লাইট চলাচল শুরু</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start">
                                                <li class="page-item disabled mr-2">
                                                    <a class="page-link" href="#" tabindex="-1"><i class="fa fa-chevron-right"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    International news end--}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading">
                                <h4 class="text-white">
                                    <span>আইন/আদালত</span>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row mb-4 pl-3 pr-3">
                                <div class="col-md-6 p-0 m-0">
                                    <div class="card-news">
                                        <div class="card-img law-court">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/320-356x220.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" class="law-court-overlay" title="নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা" rel="bookmark"><span>নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা</span></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0 m-0">
                                    <div class="card-news">
                                        <div class="card-img law-court">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/320-356x220.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" class="law-court-overlay" title="নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা" rel="bookmark"><span>নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা</span></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0 m-0">
                                    <div class="card-news">
                                        <div class="card-img law-court">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/320-356x220.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" class="law-court-overlay" title="নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা" rel="bookmark"><span>নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা</span></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0 m-0">
                                    <div class="card-news">
                                        <div class="card-img law-court">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/320-356x220.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" class="law-court-overlay" title="নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা" rel="bookmark"><span>নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা</span></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0 m-0">
                                    <div class="card-news">
                                        <div class="card-img law-court">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/320-356x220.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" class="law-court-overlay" title="নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা" rel="bookmark"><span>নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা</span></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 p-0 m-0">
                                    <div class="card-news">
                                        <div class="card-img law-court">
                                            <div class="card-img">
                                                <img src="{{asset('frontend/images/320-356x220.jpg')}}" alt="" class="img-fluid w-100">
                                            </div>
                                            <div class="card-text">
                                                <div class="card-news-heading">
                                                    <h3>
                                                        <a href="#" class="law-court-overlay" title="নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা" rel="bookmark"><span>নারী আইনজীবীদের বর্ষবিদায় ও বরণে মিলনমেলা</span></a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pagination">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start">
                                                <li class="page-item disabled mr-2">
                                                    <a class="page-link" href="#" tabindex="-1"><i class="fa fa-chevron-right"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#"><i class="fa fa-chevron-left"></i></a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                    Law and court news end--}}
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('frontend/img/newspaper-rec300c.jpg') }}" class="img-fluid w-100" alt="">
                    <nav class="mt-3">
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                role="tab" aria-controls="nav-home" aria-selected="true">সর্বশেষ</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                role="tab" aria-controls="nav-profile" aria-selected="false">জনপ্রিয়</a>
                        </div>
                    </nav>
                    <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <ul>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <ul>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                                <li class="mb-3">
                                    <a href="#" class="d-flex">
                                        <div>
                                            <img class="ml-2 img-fluid" src="{{ asset('frontend/img/339-100x70.jpg') }}"
                                                alt="">
                                        </div>
                                        <p class="ml-3 mr-2">দুদকের মামলায় বিএনপি নেতা মীর নাসিরকে জামিন</p>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Main Section End --}}
@endsection

@section('script')
    <script>

    </script>
@endsection
