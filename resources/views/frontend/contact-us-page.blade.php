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
    {{$slug}}
</div>
    {{-- Main news section end --}}

@endsection
@section('script')
    <script>
    </script>
@endsection
