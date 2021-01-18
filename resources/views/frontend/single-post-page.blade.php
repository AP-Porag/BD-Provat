@extends('layouts.website')
@section('title')
    BD-Provat-{{$slug}}
@endsection

@section('style')
    <style>

    </style>
@endsection

@section('content')
    {{-- Main news section start --}}
<div class="container">
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-3">
                <h3>{{$post->title}}</h3>
            </div>
        @endforeach
    </div>
</div>
    {{-- Main news section end --}}

@endsection
@section('script')
    <script>
    </script>
@endsection
