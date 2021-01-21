<!doctype html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Site Metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('frontend/images/fevicon.ico.png') }}" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <!-- Fonts -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
</head>
<body class="clinic_version">
<!-- header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-box">
                    <div class="social-icon-content d-flex justify-content-between">
                        <p class="date ml-3 mt-3">
                            @php
                                echo date('D - d , M-Y');
                            @endphp
                        </p>
                        <ul class="d-flex social-icon mr-3 mt-3">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube"></i></a></li>
                            @guest
                                <li class="ml-3"><a href="{{ route('login') }}" class="text-white login btn btn-sm">Login</a>
                                </li>
                                <li class="ml-3"><a href="{{ route('register') }}" class="text-white login btn btn-sm">Subscribe
                                        Us</a></li>
                            @endguest
                            @auth
                                @cannot('subscriber')
                                    <li class="ml-3"><a href="{{ route('home') }}" class="text-white login btn btn-sm">My
                                            Account</a></li>
                                @endcannot
                            @endauth
                        </ul>
                    </div>
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

            <div class="collapse navbar-collapse d-flex justify-content-between navigation-bar"
                 id="navbarSupportedContent">
                <div class="right-side">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{(\Illuminate\Support\Facades\Route::current()->getName() == 'website') ? 'active' : '' }}"
                               href="{{route('website')}}">প্রচ্ছদ</a>
                        </li>
                        @foreach($categories as $category)
                            <li class="nav-item dropdown">
                                <a class="nav-link {{((request()->segment(2) == $category->slug ) ? 'active' : '')}}"
                                   href="{{route('category-page',$category->slug)}}">
                                    <span>{{$category->name}}</span>
                                    @if(($category->subcategories)->count() > 0)
                                        <span class="fa fa-caret-down"></span>
                                    @endif
                                </a>
                                @if(($category->subcategories)->count() > 0)
                                    <div class="dropdown-menu">
                                        <ul class="list-group">
                                            @foreach($category->subcategories as $subcategory)
                                                <li class="dropdown-item {{(request()->segment(2) == $subcategory->slug ) ? 'active' : '' }}">
                                                    <a class="{{(request()->segment(2) == $subcategory->slug ) ? 'active' : '' }}"
                                                       href="{{route('subcategory-page',$subcategory->slug)}}">{{$subcategory->name}}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link {{(\Illuminate\Support\Facades\Route::current()->getName() == 'about-page') ? 'active' : ''}}"
                               href="{{route('about-page')}}">আমাদের কথা</a>
                        </li>

                    </ul>
                </div>

                <div class="left-side">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-search"></i></a>
                        </li>
                    </ul>
                </div>

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
                <marquee scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
                    <ul class="d-flex">
                        @foreach($breaking_news as $news)
                            <li>
                                <span>বিডি</span>
                                <a href="{{route('single-post-page',$news->slug)}}">{{$news->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </marquee>
            </div>
        </div>
    </div>
    {{-- Braking News End --}}
</header>

{{--main content--}}
<div class="content">
    @yield('content')
</div>

{{-- Footer Section Start --}}
<footer id="footer" class="footer-area wow fadeIn">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="logo_play_store d-flex justify-content-between">
                    <a href="{{route('website')}}">
                        <img src="{{ asset('frontend/img/272px-90px-Logo.png') }}" alt="" width="200">
                    </a>
                    <a href="#">
                        <img src="{{ asset('frontend/images/google_play.png') }}" alt="" height="90" width="272">
                    </a>
                </div>

                <div class="editor d-flex justify-content-between">
                    <p>
                        ভারপ্রাপ্ত সম্পাদক, কাজী রফিক
                        <br>এম, কে, আর এন্টারপ্রাইজের একটি প্রতিষ্ঠান<br>
                        প্রধান কার্যালয়: আলফা টাওয়ার, আবদুল্লাহপুর, উত্তরা, ঢাকা-১২৩০।<br>
                        আমাদের মেইল: <a href="{{route('contact-us-page')}}">bdprovat.news@gmail.com</a> মোবাইল:
                        ০১৭১৪-০৩৬৬১২
                    </p>

                    <ul>
                        <li>
                            <a class="nav-link" href="{{route('about-page')}}">আমাদের কথা</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="root">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>All rights reserved © @php echo date('Y') @endphp<a href="{{route('website')}}">BD-Provat</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
{{-- Footer Section End --}}
<!-- all js files -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
{{-- Plugin Js --}}
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="https://www.jsdelivr.com/projects/jquery.slick"></script>
<!-- custom / main Js -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>
@yield('script')

</body>
</html>

