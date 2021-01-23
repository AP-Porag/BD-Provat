@extends('layouts.admin')

@section('module')
    Post
@endsection

@section('before-path')
    Post-List
@endsection

@section('title')
    Post Details
@endsection

@section('breadcumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item text-capitalize"><a href="{{route('post.index')}}">@yield('before-path')</a>
            </li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection
@section('style')
    <style>
        /*Single post page css start*/
        .single_page_icon li {
            margin-right: 5px;
        }

        .single_page_icon li a {
            color: #fff;
            width: 50px;
            text-align: center;
            line-height: 50px;
            border-radius: 50%;
            background: red;
            display: block;
            font-size: 25px;
        }

        /* single page social icon end */
        .related_post_overlay{
            left: 15px;
        }
        .related_post_image_box{
            margin-bottom: 20px;
        }

        #comment_showing_box{
            margin-bottom: 30px;
            margin-top: 30px;
        }
        #comment_showing_box .single_comment{
            margin-top: 30px;
            margin-bottom: 30px;
            background: #EDF3F5;
            -webkit-box-shadow: 0px 12px 11px -1px rgba(0,0,0,0.17);
            -moz-box-shadow: 0px 12px 11px -1px rgba(0,0,0,0.17);
            box-shadow: 0px 12px 11px -1px rgba(0,0,0,0.17);

        }
        #comment_showing_box .single_comment .comment_message{
            margin-bottom: 80px;
            padding-right: 15px;
            padding-left: 15px;
            font-weight: 200;
        }
        #comment_showing_box .single_comment .commenter{
            font-size: 15px;
            font-weight: 200;
            color: darkgreen;
            padding-right: 15px;
            padding-left: 15px;
        }
        #comment_showing_box .single_reply{
            position: relative;
            margin-top: 30px;
            margin-bottom: 30px;
            background: #f5edee;
            -webkit-box-shadow: 0px 12px 11px -1px rgba(0,0,0,0.17);
            -moz-box-shadow: 0px 12px 11px -1px rgba(0,0,0,0.17);
            box-shadow: 0px 12px 11px -1px rgba(0,0,0,0.17);
        }
        #comment_showing_box .single_reply .replier{
            font-size: 15px;
            font-weight: 200;
            color: #8c0707;
            padding-right: 15px;
            padding-left: 15px;
        }
        #comment_showing_box .single_reply .comment_message{
            padding-right: 15px;
            padding-left: 15px;
            font-weight: 200;
        }
        #commenting_box{
            margin-top: 30px;
            margin-bottom: 60px;
            padding-left: 0;
            padding-right: 0;
            -webkit-box-shadow: 0px 12px 11px -1px rgba(0,0,0,0.17);
            -moz-box-shadow: 0px 12px 11px -1px rgba(0,0,0,0.17);
            box-shadow: 0px 12px 11px -1px rgba(0,0,0,0.17);
        }
        #commenting_box .card{
            border: 0;
        }
        #commenting_box .card .card-header{
            padding-left: 30px;
            padding-right: 30px;
            background: #f5edee;
        }

    </style>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <a href="{{route('post.edit',$post->id)}}" class="btn btn-sm btn-outline-primary text-capitalize"><i
                    class="fa fa-edit"></i> update @yield('module')</a>
            <a href="{{route('post.index')}}" class="btn btn-sm btn-outline-primary"><i
                    class="fa fa-list"></i>@yield('before-path')</a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h3><span>বিস্তারিত : {{ $post->title }}</span></h3>
                    <div class="row">
                        <div class="col-md-8">

                            <h6 style="color:#444"><i class="fa fa-clock-o pr-2" aria-hidden="true"></i> আপডেট টাইম
                                :@php echo(' ') @endphp {{ $post->created_at->diffForhumans() }}
                            </h6>
                            <img src="{{ $post->thumbnail }}" class="img-fluid p-1" style="border: 1px solid #999">
                            <p style="text-align:justify" class="pb-3 pt-3">
                                {!! $post->content !!}
                            </p>
                            {{--                            <h5>নিউজটি শেয়ার করুন</h5>--}}
                            {{--                            <div class="single_page_icon">--}}
                            {{--                                <ul class="d-flex">--}}
                            {{--                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>--}}
                            {{--                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>--}}
                            {{--                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </div>--}}
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
                                                        <div class="card-footer">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <a class="btn btn-sm btn-outline-info" href="{{route('reply.create')}}">Give Reply</a>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-row">
                                                                        <label class="col-sm-4 col-form-label"  for="status">Status</label>
                                                                        <input type="text" class="form-control col-sm-8 text-capitalize" id="status" value="{{$comment->status}}" disabled readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <form action="{{route('approvedComment')}}" method="post">
                                                                        @csrf
                                                                        @method('post')
                                                                        <div class="form-group">
                                                                            <input id="comment_id" type="text" name="comment_id" value="{{$comment->id}}" hidden>
                                                                            <input id="status" name="status" type="text" value="{{($comment->status == 'uncertain') ? 'approved': 'uncertain'}}" hidden>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-sm btn-outline-danger text-capitalize">{{($comment->status == 'uncertain') ? 'approved': 'make uncertain'}}</button>
                                                                    </form>
                                                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

    </script>
@endsection
