@extends('layouts.admin')

@section('module')
    User profile
@endsection

@section('title')
    Edit Profile
@endsection

@section('breadcumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection
@section('style')
    <style>
        .card_info_box .img-thumbnail{
            margin-top: 20px;
            border-radius: 50%;
            background: rgba(1,10,78,1);
        }
        .card_heading_bg {
            background: url("{{asset('admin/img/bg5.jpg')}}") center no-repeat;
            background-size: cover;
            height: 120px;
        }

        .thumbnail_submit_btn {
            padding-bottom: 7px;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 7px;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('user.update',$user->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-5 pr-1">
                                <div class="form-group">
                                    <label>Company</label>
                                    <input type="text" class="form-control" disabled="" placeholder="Company"
                                           value="BD-Provat">
                                </div>
                            </div>
                            <div class="col-md-3 px-1">
                                <div class="form-group">
                                    <label for="name">Username</label>
                                    <input type="text" class="form-control" name="name" placeholder="Username"
                                           value="{{$user->name}}" id="name">
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" placeholder="Email"
                                           value="{{$user->email}}" id="email" disabled>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="text" class="form-control" name="firstname" placeholder="First Name"
                                           value="{{$user->profile->firstName,old('firstname')}}" id="firstname">
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="lastname">Last Name</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="Last Name"
                                           value="{{$user->profile->lastName,old('lastname')}}" id="lastname">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label for="dob">Date Of Birth</label>
                                    <input type="date" class="form-control" name="dob" placeholder="Date of birth"
                                           value="{{$user->profile->dateOfBirth,old('dob')}}" id="dob">
                                </div>
                            </div>
                            <div class="col-md-6 px-1">
                                <div class="form-group">
                                    <label for="jod">Joining Date</label>
                                    <input type="date" class="form-control" name="jod" placeholder="Joining Date"
                                           value="{{$user->profile->joiningDate,old('jod')}}" id="jod">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Home Address"
                                           value="{{$user->profile->address,old('address')}}" id="address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact">Contact Number</label>
                                    <input type="text" class="form-control" name="contact"
                                           placeholder="Personal Contact Number"
                                           value="{{$user->profile->contact,old('contact')}}" id="contact">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-right mt-1">
                                <button type="submit"
                                        class="btn btn-primary btn-sm text-capitalize">
                                    Save Profile
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body p-0">
                    <div class="card-user">
                        <div class="card_heading_bg"></div>
                        <div class="card_info_box">
                            <div class="profile_picture_form">
                                <form action="{{route('updateProfile')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('post')
                                    <div class="form-row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6 offset-3">
                                                        <div class="img-thumbnail border-0 mb-3">
                                                            <img src="" alt="preview" class="img-fluid"
                                                                 id="preview" style="border-radius: 50%;">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 align-self-end">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="custom-file ml-5">
                                                                    <input type="text" name="user_id"
                                                                           value="{{$user->id}}" hidden readonly>
                                                                    <input type="file" name="thumbnail"
                                                                           class="form-control @error('thumbnail') is-invalid @enderror"
                                                                           id="thumbnail"
                                                                           placeholder="Enter Post photo"
                                                                           @change="fileChange">
                                                                    @error('thumbnail')
                                                                    <div class="invalid-feedback">
                                                                        <strong>Warning! </strong>{{$message}}
                                                                    </div>
                                                                    @enderror

                                                                </div>
                                                                <div class="input-group-append mr-5">
                                                    <span class="input-group-text text-light p-0"
                                                          id=""><button type="submit"
                                                                        class="border-0 text-white thumbnail_submit_btn">Change Picture</button></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="user_box text-center w-100">
                                <div class="author">
                                    <h5 class="title text-primary text-capitalize">
                                        @if($user->profile->firstName != null && $user->profile->lastName != null)
                                            {{$user->profile->firstName}} {{$user->profile->lastName}}
                                        @else
                                            {{$user->name}}
                                        @endif
                                    </h5>
                                    <p class="description">
                                        {{$user->name}}
                                    </p>
                                    <p class="description text-center">
                                            <span>
                                                @foreach($user->roles as $role)
                                                    {{$role->name}}
                                                @endforeach
                                            </span> <br>
                                        <span class="text-primary">
                                                Joining Date :
                                            @if($user->profile->joiningDate != null)
                                                {{$user->profile->joiningDate}}
                                            @else
                                                <span class="text-warning">Give your joining date please !</span>
                                            @endif
    </span> <br>
                                        <span class="text-warning">
                                            @if($user->profile->joiningDate != null)
                                                Servicing Age
                                                :   {{\Carbon\Carbon::parse($user->profile->joiningDate)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}
                                            @endif
    </span> <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#preview').attr('src', '{{$user->profile->profilePicture}}');
        $('.thumbnail_submit_btn').attr('disabled', true).removeClass('bg-gradient-primary');

        function readURL(input) {
            if (input.files && input.files[0]) {
                $('.thumbnail_submit_btn').attr('disabled', false).addClass('bg-gradient-primary');
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#thumbnail").change(function () {
            readURL(this);
        });
    </script>
@endsection
