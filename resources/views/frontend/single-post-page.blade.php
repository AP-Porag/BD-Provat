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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3><span>বিস্তারিত</span></h3>
                <div class="row">
                    <div class="col-md-8 mx-auto">

                        <h6 style="color:#444"><i class="fa fa-clock-o pr-2" aria-hidden="true"></i> আপডেট টাইম
                            :@php echo(' ') @endphp {{ $post->created_at->diffForhumans() }}
                        </h6>
                        <img src="{{ $post->thumbnail }}" class="img-fluid p-1" style="border: 1px solid #999">
                        <h4 class="mt-3">{{ $post->title }}</h4>
                        <p style="text-align:justify" class="pb-3">
                            {!! $post->content !!}
                        </p>
                        <h5>নিউজটি শেয়ার করুন</h5>
                        <div class="single_page_icon">
                            <ul class="d-flex">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @include('frontend.popular_last_news')
                    </div>
                    <div class="col-md-8">
                        <h3><span>এ জাতীয় আরো খবর..</span></h3>
                        <div class="row">
                            @foreach($related_news as $r_news)
                                <div class="col-md-4 pl-3">
                                    <a class="" href="{{route('single-post-page',$r_news->slug)}}">
                                        <div class="small_image_box related_post_image_box">
                                            <img class="img-fluid" alt="{{$r_news->slug}}"
                                                 src="{{ $r_news->thumbnail }}">
                                            <div class="small_image_overlay related_post_overlay">
                                                <h5 class="">
                                                    {{ $r_news->title }}
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @if($comments->count() > 0)
                        <div class="col-md-8" id="comment_showing_box">
                            <h3><span>মন্তব্য..</span></h3>
                            <div class="row">
                                <div class="col-md-12">
                                    @foreach($comments as $comment)
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="card single_comment">
                                                    <div class="card-body">
                                                        <div class="card-text d-flex justify-content-between">
                                                            <p class="comment_message">{{$comment->message}}</p>
                                                            <p class="commenter align-self-end font-italic">{{$comment->user->name}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if($comment->replies->count() > 0)
                                                @foreach($comment->replies as $reply)
                                                    <div class="col-md-10 offset-2">
                                                        <div class="card single_reply">
                                                            <div class="card-body">
                                                                <div class="card-text">
                                                                    <p class="replier align-self-end font-italic">BD-Provat</p>
                                                                    <p class="comment_message">{{$reply->message}}</p>
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
                    <div class="col-md-8" id="commenting_box">
                        <div class="card">
                            <div class="card-header">
                                <span>মন্তব্য দিন</span>
                            </div>
                            <div class="card-body">
                                <form action="{{route('commenting')}}" method="post">
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
                                               aria-describedby="post_id" placeholder="Post ID" value="{{$post->id}}" hidden>
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
        </div>
    </div>
    {{-- Main news section end --}}

@endsection
@section('script')
    <script>
        $('#email').change(function() {
            $('#password').val($(this).val());
        });
    </script>
@endsection



