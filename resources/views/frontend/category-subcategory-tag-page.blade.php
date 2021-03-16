@extends('layouts.website')
@section('title')
    BD-Provat-{{ $slug }}
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')
    {{-- Main news section start --}}
    <div class="container mt-5" id="category_sub_category_tag_list">
        <div class="row">
            <div class="col-md-8">
                @if($categories_post_count <= 0)
                    <div class="error-box">
                        <div class="error-text mt-5">
                            <h4 class="text-danger text-center">দুঃখিত " {{ $category->name }} " সম্পর্কে কিছুই খুঁজে
                                পাওয়া যায় নাই !!!!</h4>
                        </div>
                        <div class="error-image mt-5 mb-5">
                            <img src="{{asset('frontend/img/placeholder.jpg')}}"
                                 data-src="{{asset('frontend/img/undraw_searching_p5ux.svg')}}" alt=""
                                 class="lazy img-fluid">
                        </div>
                    </div>
                @else
                    <h3><span>{{ $category->name }}</span></h3>
                    <div class="row">
                        <div class="col-md-8">
                            @if(isset($main_post))
                                <a href="{{route('single-post-page',$main_post->slug)}}">
                                    <img src="{{asset('frontend/img/placeholder.jpg')}}" alt="{{$main_post->alter_tag}}"
                                         data-src="{{ $main_post->thumbnail }}" class="lazy w-100 p-1 image_size_one"
                                         style="border: 1px solid #999">
                                    <h4 class="lazy mt-3">{{ $main_post->title }}</h4>
                                    <p style="text-align:justify;" class="lazy">
                                        {!! Illuminate\Support\Str::of($main_post->content)->words(20) !!}
                                    </p>
                                </a>
                            @endif
                        </div>
                        <div class="col-md-4">
                            @if($right_side_posts->count() > 0)
                                <div class="row">
                                    @foreach ($right_side_posts as $key => $right_side_post)

                                        <a href="{{route('single-post-page',$right_side_post->slug)}}">
                                            <div class="col-md-12">
                                                <img src="{{asset('frontend/img/placeholder.jpg')}}"
                                                     alt="{{$right_side_post->alter_tag}}"
                                                     data-src="{{ $right_side_post->thumbnail }}"
                                                     class="lazy w-100 p-1 image_size_one"
                                                     style="border: 1px solid #EBEBE9">
                                                <h6 class="lazy mt-1">{{ $right_side_post->title }}</h6>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 google_horizontal_add_one">
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
                    <div class="row my-3">
                        @if($bottom_side_posts->count() > 0)
                            @foreach ($bottom_side_posts as $key => $bottom_side_post)
                                <div class="col-md-4">

                                    <a href="{{route('single-post-page',$bottom_side_post->slug)}}">
                                        <img src="{{asset('frontend/img/placeholder.jpg')}}"
                                             alt="{{$bottom_side_post->alter_tag}}"
                                             data-src="{{ $bottom_side_post->thumbnail }}"
                                             class="lazy w-100 p-1 image_size_one"
                                             style="border: 1px solid #EBEBE9">
                                        <h6 class="lazy mt-1">{{ $bottom_side_post->title }}</h6>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-md-12 google_horizontal_add_one">
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
                    <div class="row" id="dataContainer">
                        @if($posts->count() > 0)
                            @foreach ($posts as $key => $post)
                                <a href="{{route('single-post-page',$post->slug)}}">
                                    <div class="col-md-12 d-flex p-2 mb-3" style="background: #EDF3F5">
                                        <div class="img">
                                            <img src="{{asset('frontend/img/placeholder.jpg')}}" alt="{{$post->alter_tag}}"
                                                 data-src="{{ $post->thumbnail }}" class="lazy img-fluid p-1 image_size_three"
                                                 style="border: 1px solid #fff">
                                        </div>
                                        <div class="title_details pl-4 pr-4">
                                            <h4 class="lazy mt-1">{{ $post->title }}</h4>
                                            <p style="text-align:justify" class="lazy">
                                                {!! Illuminate\Support\Str::of($post->content)->words(20) !!}
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                            <div class="" id="demo">
                                {{ $posts->links() }}
                            </div>
                        @endif
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                @include('frontend.popular_last_news')
                <div class="google_vertical_add">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- vertical add -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-2285535747529435"
                         data-ad-slot="4086839037"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>
        </div>
    </div>
    {{-- Main news section end --}}
@endsection
@section('script')

@endsection
