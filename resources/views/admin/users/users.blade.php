@extends('layouts.admin')

@section('module')
    User
@endsection

@section('before-path')
    Dashboard
@endsection

@section('title')
    User-List
@endsection

@section('breadcumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize"><a href="{{ route('home') }}">Dashboard</a></li>
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
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            <div class="d-flex justify-content-between">
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-outline-primary text-capitalize mr-3"><i
                        class="fa fa-plus-circle"></i> Add new @yield('module')</a>
                <a href="{{ route('inactive_users') }}" class="btn btn-sm btn-outline-danger text-capitalize mr-3"><i
                        class="fa fa-plus-circle"></i> inactive @yield('module')</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable table-striped table-hover" id="dataTable"
                                width="100%" cellspacing="0" User="grid" aria-describedby="dataTable_info">
                                <thead>
                                    <tr User="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Sl
                                        </th>
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Name
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending">
                                            Email
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending">
                                            User Role
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending">
                                            Contact Number
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending">
                                            Servicing Age
                                        </th>
                                        @can('user-edit','user-soft-delete','user-assign-role','user-assign-permission')
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($users as $key => $user)
                                        <tr User="row" class="odd">
                                            <td class="sorting_1 text-center">{{ $loop->index + 1 }}</td>
                                            <td class="sorting_1 text-capitalize">{{ $user->name }}</td>
                                            <td>
                                                {{ $user->email }}
                                            </td>
                                            <td class="text-capitalize">
                                                @foreach ($user->roles as $role)
                                                    {{ $role->name }}
                                                @endforeach
                                            </td>
                                            <td class="sorting_1 text-capitalize">
                                                {{$user->profile->contact}}
                                            </td>
                                            <td class="sorting_1 text-capitalize">
                                                @if($user->profile->joiningDate != null)
                                                {{\Carbon\Carbon::parse($user->profile->joiningDate)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}}
                                                @endif
                                            </td>
                                            @can('user-edit','user-soft-delete','user-assign-role','user-assign-permission')
                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    @can('user-edit')
                                                        <a href="{{ route('user.edit', $user->id) }}"
                                                           class="btn btn-sm btn-outline-warning mr-3"><i
                                                                class="fa fa-edit"></i></a>
                                                    @endcan
                                                    @can('user-soft-delete')
                                                    <a href="{{ route('user_soft_delete', $user->id) }}"
                                                        class="btn btn-sm btn-outline-danger mr-3"><i
                                                            class="fa fa-trash"></i></a>
                                                        @endcan
                                                        @can('user-assign-role')
                                                    <a href="{{ route('assignRolePageView', $user->id) }}"
                                                        class="btn btn-sm btn-outline-primary mr-3"><i
                                                            class="fa fa-user-lock"></i></a>
                                                        @endcan
                                                        @can('user-assign-permission')
                                                    <a href="{{ route('assignPermissionPageView', $user->id) }}"
                                                        class="btn btn-sm btn-outline-dark"><i
                                                            class="fa fa-lock-open"></i></a>
                                                        @endcan
                                                </div>
                                            </td>
                                            @endcan
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            {{ $users->links() }}
                        </div>
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
