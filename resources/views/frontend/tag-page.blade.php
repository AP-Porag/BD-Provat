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
                        <div class="" id="demo">
                            {{ $posts->links() }}
                        </div>
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
