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
                    <p class="date">Sunday, January 3, 2021</p>
                    <ul class="d-flex social-icon">
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
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">প্রচ্ছদ</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            বাংলাদেশ
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
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
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    {{-- Navbar End --}}
    {{-- Braking News End --}}
    <section id="main-section">
        <div class="container">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>
    {{-- Main Section End --}}
@endsection

@section('script')
    <script>

    </script>
@endsection
