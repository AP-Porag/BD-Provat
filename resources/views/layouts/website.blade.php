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
    <title>@yield('title','BD-Provat')</title>
    <meta name="keywords" content="@yield('meta_keywords','BD-Provat')">
    <meta name="description" content="@yield('meta_description','BD-Provat')">
    <link rel="canonical" href="{{ url()->current() }}"/>
    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/272px-90px-Logo.png') }}" type="image/x-icon"/>
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
                        <h2 class="date ml-3 mt-4">
                            @php
                                echo date('D - d , M-Y');
                            @endphp
                        </h2>
                        <ul class="d-flex social-icon mr-3 mt-4">
                            <li><a href="https://www.facebook.com/Bdprovat" target="_blank"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.instagram.com/bdprovat" target="_blank"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li>
                                <a href="https://www.youtube.com/channel/UCH-diWvfcvZtHVKwCBbcVHw/featured?fbclid=IwAR1koVXNchXY4_h38vJxL_jVDjjzTCmLR5mRKyOvkt04_IJwsYoHNp-xy4g"
                                   target="_blank"><i class="fa fa-youtube"></i></a></li>

                        </ul>
                        <ul class="d-flex mr-3 mt-4">
                            @guest
                                <li class="ml-3 first-login"><a href="{{ route('login') }}"
                                                                class="text-white login btn btn-sm">Login</a>
                                </li>
                                <li class="ml-3"><a href="{{ route('register') }}"
                                                    class="text-white login btn btn-sm">Subscribe
                                        Us</a></li>
                            @endguest
                            @auth
                                @unlessrole('subscriber')
                                <li class="mr-3"><a href="{{ route('home') }}" class="text-white login btn btn-sm">My
                                        Account</a></li>
                                @endunlessrole

                                    <div class="">
                                        <a class="text-white login btn btn-sm" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                                                     document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2"></i>Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
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
                <img src="{{ $author->thumbnail }}" alt="{{ $author->thumbnail }}" class="img-fluid">
            </div>
            <div class="col-md-8">
                <img src="https://demo.tagdiv.com/newspaper_pro/wp-content/uploads/2019/08/newspaper-rec728.jpg"
                     alt="" width="728" height="90" class="img-fluid mt-4">
            </div>
        </div>
    </div>
    {{-- Logo and Add Place Ends --}}
    <nav class="navbar px-0 navbar-expand-lg navbar-light" id="navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between navigation-bar"
                 id="navbarSupportedContent">
                <div class="right-side">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ \Illuminate\Support\Facades\Route::current()->getName() == 'website' ? 'active' : '' }}"
                               href="{{ route('website') }}">প্রচ্ছদ</a>
                        </li>
                        @foreach ($categories as $category)
                            <li class="nav-item dropdown">
                                <a class="nav-link {{ request()->segment(2) == $category->slug ? 'active' : '' }}"
                                   href="{{ route('category-page', $category->slug) }}">
                                    <span>{{ $category->name }}</span>
                                    @if ($category->subcategories->count() > 0)
                                        <span class="fa fa-caret-down"></span>
                                    @endif
                                </a>
                                @if ($category->subcategories->count() > 0)
                                    <div class="dropdown-menu">
                                        <ul class="list-group">
                                            @foreach ($category->subcategories as $subcategory)
                                                <li
                                                    class="dropdown-item {{ request()->segment(2) == $subcategory->slug ? 'active' : '' }}">
                                                    <a class="{{ request()->segment(2) == $subcategory->slug ? 'active' : '' }}"
                                                       href="{{ route('subcategory-page', $subcategory->slug) }}">{{ $subcategory->name }}</a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                        <li class="nav-item">
                            <a class="nav-link {{ \Illuminate\Support\Facades\Route::current()->getName() == 'about-page' ? 'active' : '' }}"
                               href="{{ route('about-page') }}">আমাদের কথা</a>
                        </li>
                    </ul>
                </div>

                <div class="left-side">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <!-- Large modal -->
                            <a type="button" class="btn btn-sm nav-link" data-toggle="modal"
                               data-target=".bd-search-modal-lg"><i class="fa fa-search"></i></a>

                            <div class="modal fade bd-search-modal-lg" tabindex="-1" role="dialog"
                                 aria-labelledby="mySearchModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header border-0">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="search-form">
                                                <form action="{{route('search-page')}}" method="post">
                                                    @csrf
                                                    @method('post')
                                                    <div class="form-row">
                                                        <div class="col-md-12 align-self-end">
                                                            <div class="form-group">
                                                                <div class="input-group">
                                                                    <div class="custom-file ml-5">
                                                                        <input type="text" name="search"
                                                                               class="form-control @error('search') is-invalid @enderror"
                                                                               id="search"
                                                                               placeholder="এখানে লিখুন..">
                                                                    </div>
                                                                    <div class="input-group-append mr-5">
                                                                        <button type="submit"
                                                                                class="border-0 search-btn"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </div>
                                                                </div>
                                                                @error('search')
                                                                <div class="invalid-feedback">
                                                                    <strong>Warning! </strong>{{$message}}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{-- Navbar End --}}
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <p class="breaking-news-title">ব্রেকিং নিউজ</p>
            </div>
            <div class="col-md-10">
                <marquee scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
                    <ul class="d-flex">
                        @foreach ($breaking_news as $news)
                            <li>
                                <span>বিডি</span>
                                <a href="{{ route('single-post-page', $news->slug) }}">{{ $news->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                </marquee>
            </div>
        </div>
    </div>
        {{-- Braking News End --}}
    </header>
    {{-- main content --}}
    <div class="content">
        @yield('content')

    </div>
    {{-- Braking News End --}}

    {{-- Footer Section Start --}}
    <footer id="footer" class="footer-area wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <a href="{{ route('website') }}">
                            <img src="{{ $author->thumbnail }}" alt="{{ $author->thumbnail }}" width="200">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <span> {{ $author->authorname }}</span>
                    <div class="copyright">
                        <p>©All rights reserved by BD-Provat - @php echo date('Y') @endphp<a href="{{ route('website') }}"></a>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="editor">
                        <p class="pb-3">
                            {{ $author->enterprisename }}<br>
                            {{ $author->enterpriseheadquarter }}।<br>
                            আমাদের মেইল: <a href="{{ $author->email }}">bdprovat.news@gmail.com</a>
                            <br>মোবাইল:
                            {{ $author->mobilenumber }}
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    <section id="headline">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <p class="breaking-news-title">শিরোনাম</p>
                </div>
                <div class="col-md-10">
                    <marquee scrollamount="4" onmouseover="this.stop();" onmouseout="this.start();">
                        <ul class="d-flex">
                            <li>
                                <span>বিডি</span>
                                <a href="">চাল সংগ্রহে বারবার ব্যর্থতা ঝুঁকিতে ফেলছে খাদ্য নিরাপত্তাকে</a>
                            </li>
                            <li>
                                <span>বিডি</span>
                                <a href="">চাল সংগ্রহে বারবার ব্যর্থতা ঝুঁকিতে ফেলছে খাদ্য নিরাপত্তাকে</a>
                            </li>
                            <li>
                                <span>বিডি</span>
                                <a href="">চাল সংগ্রহে বারবার ব্যর্থতা ঝুঁকিতে ফেলছে খাদ্য নিরাপত্তাকে</a>
                            </li>
                            <li>
                                <span>বিডি</span>
                                <a href="">চাল সংগ্রহে বারবার ব্যর্থতা ঝুঁকিতে ফেলছে খাদ্য নিরাপত্তাকে</a>
                            </li>
                        </ul>
                    </marquee>
                </div>
            </div>
        </div>
    </section>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
<script>
    $(document).ready(function () {
        $navOffset = $('#navbar').offset().top;
        $(window).scroll(function () {
            $scrolling = $(this).scrollTop();
            if ($scrolling > $navOffset) {
                $('#navbar').addClass('navFixed');
            } else {
                $('#navbar').removeClass('navFixed');
            }
        });
    });

    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: "smooth",
        })
    }

</script>
