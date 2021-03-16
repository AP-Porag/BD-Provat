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
    <div class="container mt-3" id="category_sub_category_tag_list">
        <div class="row">
            <div class="col-md-8">
                @if($categories_post_count < 1)
                    <div class="error-box">
                        <div class="error-text mt-5">
                            <h4 class="text-danger text-center">দুঃখিত  " {{ $category->name }} "  সম্পর্কে কিছুই খুঁজে পাওয়া যায় নাই !!!!</h4>
                        </div>
                        <div class="error-image mt-5 mb-5">
                            <img src="{{asset('frontend/img/placeholder.jpg')}}" data-src="{{asset('frontend/img/undraw_searching_p5ux.svg')}}" alt="" class="lazy img-fluid">
                        </div>
                    </div>
                @else
                <h3><span>{{ $category->name }}</span></h3>
                <div class="row" id="dataContainer">
                    @foreach ($posts as $key => $post)
                        <a href="{{route('single-post-page',$post->slug)}}">
                            <div class="col-md-12 d-flex p-2 mb-3" style="background: #EDF3F5">
                                <div class="img">
                                    <img src="{{asset('frontend/img/placeholder.jpg')}}" alt="{{$post->alter_tag}}" data-src="{{ $post->thumbnail }}" class="lazy img-fluid p-1 image_size_three"
                                         style="border: 1px solid #fff">
                                </div>
                                <div class="title_details pl-2">
                                    <h4 class="lazy mt-1">{{ $post->title }}</h4>
                                    <p style="text-align:justify" class="lazy">
                                        {!! Illuminate\Support\Str::of($post->content)->words(30) !!}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                        <div class="" id="demo">
                            {{ $posts->links() }}
                        </div>
                </div>
                @endif
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
