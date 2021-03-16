@extends('layouts.website')
@section('title')
    {{$post->title}}
@endsection
@section('meta_keywords')
    {{!empty($post->postMeta->meta_keywords) ? $post->postMeta->meta_keywords : 'BD-Provat'}}
@endsection
@section('meta_description')
    {{!empty($post->postMeta->meta_description) ? $post->postMeta->meta_description : 'BD-Provat'}}
@endsection
@section('image')
    {{$post->thumbnail != 'thumbnail' ? $post->thumbnail : asset('frontend/img/272px-90px-Logo.png')}}
@endsection
@section('style')
    <style>

    </style>
@endsection

@section('content')
    {{-- Main news section start --}}
    <div class="container" id="single_post_page">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="row">
                            <div class="col-md-12">
                                <h3><span>বিস্তারিত</span></h3>
                                <h4 class="lazy mt-3">{{ $post->title }}</h4>
                                <h6 style="color:#444"><i class="fa fa-clock-o pr-2" aria-hidden="true"></i> আপডেট টাইম
                                    :@php echo(' ') @endphp {{ $post->created_at->diffForhumans() }}
                                </h6>
                                <img src="{{asset('frontend/img/placeholder.jpg')}}" data-src="{{ $post->thumbnail }}" alt="{{$post->alter_tag}}" class="lazy img-fluid p-1 image_size_one" style="border: 1px solid #999">
                                <p style="text-align:justify;" class="lazy single_content pb-3">
                                    {!! $post->content !!}
                                </p>
                                <h4 class="pt-3">নিউজটি শেয়ার করুন</h4>
                                <div class="single_page_icon">
                                    <ul class="d-flex">
                                        <li class="">
                                            <a
                                                href="https://www.facebook.com/sharer/sharer.php?u={{ route('single-post-page',$post->slug) }}&display=popup" type="button" target="_blank" data-value="{{$post->id}}" class="shares">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="https://twitter.com/intent/tweet?text={{ route('single-post-page',$post->slug) }}" type="button" target="_blank" data-value="{{$post->id}}" class="shares"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li class="shares">
                                            <div class="share_div">
                                                <strong><span>মোট শেয়ার <i class="fa fa-share"></i> : </span></strong>
                                                <span id="share_counter">{{$post->shares}}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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
                            @if ($post->tags_count > 0)
                                <div class="col-md-12" id="tag_box">
                                    <h3><span>খবর সম্পর্কিত ট্যাগ..</span></h3>
                                    @foreach ($post->tags as $tag)
                                        <a class="tags" href="{{ route('tag-page', $tag->slug) }}">
                                            {{ $tag->name }}
                                        </a>
                                    @endforeach
                                </div>
                            @endif
                            <div class="col-md-12 google_horizontal_add_one mb-2">
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
                            <div class="col-md-12">
                                <h3><span>এ জাতীয় আরো খবর..</span></h3>
                                <div class="row">
                                    @foreach ($related_news as $r_news)
                                        <div class="col-md-4 pl-3">
                                            <a class="" href="{{ route('single-post-page', $r_news->slug) }}">
                                                <div class="small_image_box related_post_image_box">
                                                    <img src="{{asset('frontend/img/placeholder.jpg')}}" class="lazy img-fluid image_size_one" alt="{{ $r_news->alter_tag }}"
                                                         data-src="{{ $r_news->thumbnail }}">
                                                    <div class="small_image_overlay related_post_overlay">
                                                        <h5 class="lazy">
                                                            {{ $r_news->title }}
                                                        </h5>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @if ($comments->count() > 0)
                                <div class="col-md-12" id="comment_showing_box">
                                    <h3><span>মন্তব্য..</span></h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            @foreach ($comments as $comment)
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="lazy card single_comment">
                                                            <div class="card-body">
                                                                <div class="card-text d-flex justify-content-between">
                                                                    <p class="comment_message">{{ $comment->message }}</p>
                                                                    <p class="commenter align-self-end font-italic">
                                                                        {{ $comment->user->name }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if ($comment->replies->count() > 0)
                                                        @foreach ($comment->replies as $reply)
                                                            <div class="col-md-10 offset-2">
                                                                <div class="card lazy single_reply">
                                                                    <div class="card-body">
                                                                        <div class="card-text">
                                                                            <p class="replier align-self-end font-italic">
                                                                                BD-Provat</p>
                                                                            <p class="comment_message">{{ $reply->message }}</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
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
                            <div class="col-md-12" id="commenting_box">
                                <div class="card">
                                    <div class="card-header">
                                        <span>মন্তব্য দিন</span>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('commenting') }}" method="post">
                                            @csrf
                                            @method('post')
                                            <div class="form-group">
                                                <label for="comment">Your Comment</label>
                                                <textarea id="comment" name="comment" class="form-control" rows="10"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" id="name">
                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email address</label>
                                                <input type="email" name="email" class="form-control" id="email"
                                                       aria-describedby="email">
                                                <input type="text" name="password" class="form-control" id="password"
                                                       aria-describedby="password" placeholder="Password Automatically" hidden>
                                                <input type="text" name="post_id" class="form-control" id="post_id"
                                                       aria-describedby="post_id" placeholder="Post ID" value="{{ $post->id }}"
                                                       hidden>
                                                <small id="email" class="form-text text-muted">
                                                    We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="btn-group">
                                                <button type="submit" class="btn btn-outline-danger">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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
        </div>
    </div>
    {{-- Main news section end --}}

@endsection
@section('script')
    <script>
        $('#email').change(function () {
            $('#password').val($(this).val());
        });

        //count share
        $(function(){
            $('.shares').click(function(){
                var post_id = $(this).data('value');

                $.ajax({
                    type: "GET",

                    url: '/single-post/get/shareCounter',
                    data: {'post_id': post_id},
                    success: function (data) {
                        $('#share_counter').text(data.shares)
                    }
                });
            });
        });
    </script>
@endsection
