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
    <div class="container" id="category_sub_category_tag_list">
        <div class="row">
            <div class="col-md-8">
                <h3><span>{{ $category->name }}</span></h3>
                <div class="row">
                    <div class="col-md-8">
                        <a href="{{route('single-post-page',$main_post->slug)}}">
                            <img alt="{{$main_post->slug}}" src="{{ $main_post->thumbnail }}" class="w-100 p-1" style="border: 1px solid #999">
                            <h4 class="mt-3">{{ $main_post->title }}</h4>
                            <p style="text-align:justify">
                                {!! Illuminate\Support\Str::of($main_post->content)->words(30) !!}
                            </p>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            @foreach ($right_side_posts as $key => $right_side_post)
                                <a href="{{route('single-post-page',$right_side_post->slug)}}">
                                    <div class="col-md-12">
                                        <img alt="{{$right_side_post->slug}}" src="{{ $right_side_post->thumbnail }}" class="w-100 p-1"
                                             style="border: 1px solid #EBEBE9">
                                        <h6 class="mt-1">{{ $right_side_post->title }}</h6>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="row my-3">

                    @foreach ($bottom_side_posts as $key => $bottom_side_post)
                        <div class="col-md-4">
                            <a href="{{route('single-post-page',$bottom_side_post->slug)}}">
                                <img alt="{{$bottom_side_post->slug}}" src="{{ $bottom_side_post->thumbnail }}" class="w-100 p-1"
                                     style="border: 1px solid #EBEBE9">
                                <h6 class="mt-1">{{ $bottom_side_post->title }}</h6>
                            </a>
                        </div>
                    @endforeach
                </div>
                <div class="row" id="dataContainer">
                    @foreach ($posts as $key => $post)
                        <a href="{{route('single-post-page',$post->slug)}}">
                            <div class="col-md-12 d-flex p-2 mb-3" style="background: #EDF3F5">
                                <div class="img">
                                    <img alt="{{$post->slug}}" src="{{ $post->thumbnail }}" class="img-fluid p-1"
                                         style="border: 1px solid #fff">
                                </div>
                                <div class="title_details p-4">
                                    <h4 class="mt-1">{{ $post->title }}</h4>
                                    <p style="text-align:justify">
                                        {!! Illuminate\Support\Str::of($post->content)->words(30) !!}
                                    </p>
                                </div>
                            </div>

                        </a>
                    @endforeach
                </div>
                <div class="" id="demo">
                    {{ $posts->links() }}
                </div>
            </div>
            <div class="col-md-4">
                @include('frontend.popular_last_news')
            </div>
        </div>
    </div>
    {{-- Main news section end --}}

@endsection
@section('script')
@endsection
