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
            <div class="col-md-12">
                <h3>{{$post->title}}</h3>
            </div>
    </div>
</div>
    {{-- Main news section end --}}

@endsection
@section('script')
    <script>
    </script>
@endsection
