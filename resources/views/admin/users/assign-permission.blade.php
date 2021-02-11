@extends('layouts.admin')

@section('module')
    User
@endsection

@section('before-path')
    User-List
@endsection

@section('title')
    Assign Permission
@endsection

@section('breadcumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize"><a href="{{route('home')}}">Dashboard</a></li>
            <li class="breadcrumb-item text-capitalize"><a href="{{route('role.index')}}">@yield('before-path')</a></li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection
@section('style')
    <style>

    </style>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-end">
            <a href="{{route('user.index')}}" class="btn btn-sm btn-outline-primary"><i
                    class="fa fa-list"></i>@yield('before-path')</a>
        </div>
        <div class="card-body">
            <div class="form">
                <form action="{{route('assignPermission',$user_id->id)}}" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <h5 class="text-capitalize"><span class="text-capitalize text-primary">Name : </span>{{$user_id->name}}</h5>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <div class="d-flex">
                                    <label for="permissions" class="text-capitalize">Permissions</label>
                                    <div class="form-check ml-5">
                                        <input type="checkbox" class="form-check-input" id="permissionAll" value=""}}>
                                        <label for="permissionAll" class="text-capitalize form-check-label">All</label>
                                    </div>
                                </div>
                                <div class="card p-3" id="permissions">
                                    @foreach($permissions as $permission)
                                        <div class="form-check">
                                            <input type="checkbox" name="roles[]"
                                                   class="form-check-input singlePermission"
                                                   id="role-{{$permission->id}}"
                                                   value="{{$permission->id,old('roles[]')}}" {{$user_id->hasPermissionTo($permission->name) ? 'checked' : ''}}>
                                            <label for="role-{{$permission->id}}"
                                                   class="text-capitalize form-check-label">{{$permission->name}}</label>
                                        </div>
                                    @endforeach
                                </div>
                                @error('permissions')
                                <div class="invalid-feedback">
                                    <strong>Warning! </strong>
                                    <p>{{$message}}</p>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary text-capitalize">Save user Permission</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>

        $('#permissionAll').click(function () {
            if ($(this).is(':checked')) {
                //Checked all the permission checkbox
                $('input[type=checkbox]').prop('checked', true)
            } else {
                //Un-Checked all the permission checkbox
                $('input[type=checkbox]').prop('checked', false)
            }
        });
        $('.singlePermission').change(function () {
            const countTotalRole = {{$permissions_count}};
            const checkedCheckbox = $('.singlePermission:checked').length;

            if (checkedCheckbox >= countTotalRole ){
                $('#permissionAll').prop('checked',true);
            }else {
                $('#permissionAll').prop('checked',false);
            }
        });

    </script>
@endsection
