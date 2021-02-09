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
    <div class="row about-row pt-5">
        @if($users->count() > 0)
            @foreach($users as $user)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-img">
                                <img src="{{$user->profile->profilePicture}}" alt="{{$user->name}}" class="img-fluid">
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="card-text text-center">
                                <p class="name">{{$user->profile->firstName == null || $user->profile->lastName == null ? $user->name : $user->profile->firstName . $user->profile->lastName}}</p>
                                <p class="role">
                                    @foreach($user->roles as $role)
                                        {{$role->name}}
                                    @endforeach
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>
    {{-- Main news section end --}}

@endsection
@section('script')
    <script>
    </script>
@endsection
