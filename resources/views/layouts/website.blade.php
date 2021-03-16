<!doctype html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
{{--google analytics script--}}
{{--<!-- Global site tag (gtag.js) - Google Analytics -->--}}
{{--    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174944185-1"></script>--}}
{{--    <script>--}}
{{--        window.dataLayer = window.dataLayer || [];--}}
{{--        function gtag(){dataLayer.push(arguments);}--}}
{{--        gtag('js', new Date());--}}

{{--        gtag('config', 'UA-174944185-1');--}}
{{--    </script>--}}

{{--google analytics script--}}

{{--    google add script --}}
{{--    <script data-ad-client="ca-pub-2285535747529435" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
    {{--    google add script --}}
    <!-- Site Metas -->
    <title>@yield('title','BD-Provat')</title>
    <meta name="keywords" content="@yield('meta_keywords','BD-Provat')">
    <meta name="description" content="@yield('meta_description','BD-Provat')">
    <link rel="canonical" href="{{ url()->current() }}"/>

    {{--    social sharing--}}
    <meta property="og:url"                content="{{ url()->current() }}" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="@yield('title','BD-Provat')" />
    <meta property="og:description"        content="@yield('meta_description','BD-Provat')" />
    <meta property="og:image"              content="@yield('image',asset('frontend/img/logo-square.jpg'))" />
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
{{--    social sharing--}}

    <!-- Site Icons -->
    <link rel="shortcut icon" href="{{ asset('frontend/img/272px-90px-Logo.png') }}" type="image/x-icon"/>
    <!-- Bootstrap CSS -->
    <!-- Fonts -->
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/slick-theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/slick.min.css')}}">
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
                    <div class="row social-icon-content">
                        <div class="col-md-4 d-none d-md-block"><h2 class="date ml-3 mt-3">
                                @php
                                    echo date('D - d , M-Y');
                                @endphp
                            </h2></div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6 col-6"><ul class="d-flex social-icon mr-3 mt-2 mb-2">
                                        <li><a href="https://www.facebook.com/Bdprovat" target="_blank"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://www.instagram.com/bdprovat" target="_blank"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li>
                                            <a href="https://www.youtube.com/channel/UCH-diWvfcvZtHVKwCBbcVHw/featured?fbclid=IwAR1koVXNchXY4_h38vJxL_jVDjjzTCmLR5mRKyOvkt04_IJwsYoHNp-xy4g"
                                               target="_blank"><i class="fa fa-youtube"></i></a></li>

                                    </ul></div>
                                <div class="col-md-6 col-6"><ul class="d-flex mr-3 mt-3">
                                        @guest
                                            <li class="ml-3 first-login d-none d-md-block"><a href="{{ route('login') }}"
                                                                            class="text-white login btn btn-sm">Login</a>
                                            </li>
                                            <li class="ml-3 "><a href="{{ route('register') }}"
                                                                class="text-white login btn btn-sm subscribe_us_btn">Subscribe
                                                    Us</a></li>
                                        @endguest
                                        @auth
                                            @unlessrole('subscriber')
                                            <li class="mr-3 d-none d-md-block"><a href="{{ route('home') }}" class="text-white login btn btn-sm">My
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
                                    </ul></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Date Social Icon End --}}
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-3">
                <a class="nav-link {{ \Illuminate\Support\Facades\Route::current()->getName() == 'website' ? 'active' : '' }}"
                   href="{{ route('website') }}">
                    <img src="{{asset('frontend/img/placeholder.jpg')}}" data-src="{{ $author->thumbnail }}" alt="{{ $author->thumbnail }}" class="lazy img-fluid logo_size">
                </a>
            </div>
            <div class="col-md-9 d-none d-md-block">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- header-banner add -->
                <ins class="adsbygoogle"
                     style="display:inline-block;width:728px;height:90px"
                     data-ad-client="ca-pub-2285535747529435"
                     data-ad-slot="1601002843"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
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
                            <li class="nav-item dropdown" id="dropdown">
                                <a class="nav-link {{ request()->segment(2) == $category->slug ? 'active' : '' }}"
                                   href="{{ route('category-page', $category->slug) }}">
                                    <span>{{ $category->name }}</span>
                                    @if ($category->subcategories->count() > 0)
                                        <span class="fa fa-caret-down"></span>
                                    @endif
                                </a>
                                @if ($category->subcategories->count() > 0)
                                    <div class="dropdown-menu" id="dropdown-menu">
                                        <ul class="list-group">
                                            @foreach ($category->subcategories as $subcategory)
                                                <li class="dropdown-submenu {{ request()->segment(2) == $subcategory->slug ? 'active' : '' }}"
                                                    id="dropdown-submenu">
                                                    <a class="dropdown-item {{ request()->segment(2) == $subcategory->slug ? 'active' : '' }} d-flex justify-content-between"
                                                       href="{{ route('subcategory-page', $subcategory->slug) }}">
                                                        <span>{{ $subcategory->name }}</span>
                                                        @if ($subcategory->submenus->count() > 0)
                                                            <span class="fa fa-caret-right"></span>
                                                        @endif
                                                    </a>
                                                    @if ($subcategory->submenus->count() > 0)
                                                        <div class="dropdown-menu" id="dropdown-submenu-dropdown">
                                                            <ul class="list-group">
                                                                @foreach ($subcategory->submenus as $submenu)
                                                                    <li class="dropdown-item {{ request()->segment(2) == $submenu->slug ? 'active' : '' }}">
                                                                        <a class="{{ request()->segment(2) == $submenu->slug ? 'active' : '' }}"
                                                                           href="{{ route('submenu-page', $submenu->slug) }}">{{ $submenu->name }}</a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        @endforeach
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{ \Illuminate\Support\Facades\Route::current()->getName() == 'about-page' ? 'active' : '' }}"--}}
{{--                               href="{{ route('about-page') }}">আমাদের কথা</a>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <div id="google_translate_element"></div>
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
    @if(isset($breaking_news))
        <div class="container">
            <div class="row mb-5">
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
    @endif
    {{-- Braking News End --}}
</header>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if (isset($custom_add_one))
                <div class="coustom_advertise">
                    <img src="{{asset('frontend/img/placeholder.jpg')}}" data-src="{{$custom_add_one->customadd}}" height="250" class="lazy img-fluid custom_add_size" alt="">
                </div>
            @else
                <div class="coustom_advertise">
                    <img src="{{asset('frontend/img/placeholder.jpg')}}" data-src="{{asset('frontend/img/custom-add-1200-250.webp')}}" height="250" class="lazy img-fluid custom_add_size" alt="">
                </div>
            @endif
        </div>
    </div>
</div>
{{-- main content --}}
<div class="content">
    @yield('content')
</div>
{{-- Braking News End --}}
<div class="container">
    <div class="row">
        <div class="col-md-12 google_horizontal_add_one mt-3">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
            <!-- banner add -->
            <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-2285535747529435"
                 data-ad-slot="4776463541"
                 data-ad-format="auto"
                 data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div>
</div>
{{-- Footer Section Start --}}
<footer id="footer" class="footer-area lazy">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div>
                    <a href="{{ route('website') }}">
                        <img src="{{asset('frontend/img/placeholder.jpg')}}" data-src="{{ $author->thumbnail }}" alt="{{ $author->thumbnail }}" width="200" class="lazy">
                    </a>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <span> {{ $author->authorname }}</span>
                <div class="copyright">
                    <p>©All rights reserved by BD-Provat - @php echo date('Y') @endphp<a
                            href="{{ route('website') }}"></a>
                    </p>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="editor">
                    <p class="pb-5">
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
                        @foreach($headlines as $headline)
                            <li>
                                <span>বিডি</span>
                                <a href="{{route('single-post-page',$headline->slug)}}">{{$headline->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </marquee>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'bn'}, 'google_translate_element');
    }
</script>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
{{-- Footer Section End --}}
<!-- all js files -->
<script src="{{asset('frontend/js/jquery.min.js')}}">
</script>
<script type="text/javascript" src="{{asset('frontend/js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}">
</script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}">
</script>
{{-- Plugin Js --}}
<script type="text/javascript" src="{{asset('frontend/js/f.js')}}"></script>
<!-- custom / main Js -->
<script src="{{ asset('frontend/js/custom.js') }}"></script>
<script src="{{ asset('frontend/js/slick.min.js') }}"></script>
@yield('script')

</body>

</html>
<script>
    $(function() {
        $('.lazy').Lazy();
    });
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
