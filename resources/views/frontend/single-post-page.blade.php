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
            </div>
        </div>
    </div>
    {{-- Main news section end --}}

@endsection
@section('script')
    <script>
    </script>
@endsection



