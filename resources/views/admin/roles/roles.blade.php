@extends('layouts.admin')

@section('module')
    Role
@endsection

@section('before-path')
    Dashboard
@endsection

@section('title')
    Role-List
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

    </style>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            <div class="d-flex justify-content-between">
                <a href="{{route('role.create')}}" class="btn btn-sm btn-outline-primary text-capitalize mr-3"><i
                        class="fa fa-plus-circle"></i> Add new @yield('module')</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable table-striped table-hover" id="dataTable"
                                   width="100%" cellspacing="0"
                                   role="grid" aria-describedby="dataTable_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable"
                                        rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Sl
                                    </th>
                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable"
                                        rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Name
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                        colspan="1"
                                        aria-label="Position: activate to sort column ascending">
                                        Permissions
                                    </th>
                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                        colspan="1"
                                        aria-label="Office: activate to sort column ascending">
                                        User Count
                                    </th>
                                    <th rowspan="1" colspan="1" class="text-center">Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($roles as $key=>$role)
                                    <tr role="row" class="odd">
                                        <td class="sorting_1 text-center">{{$loop->index+1}}</td>
                                        <td class="sorting_1 text-capitalize">{{$role->name}}</td>
                                        <td>
                                            @foreach($role->permissions as $permission)
                                                <span
                                                    class="badge badge-info text-capitalize text-sm mr-2">{{$permission->name}}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            {{$role->users->count()}}
                                        </td>
                                        <td>
                                            <div class="btn-group d-flex justify-content-center">
                                                @if($role->name == 'supper-admin')
                                                    @role('supper-admin')
                                                    <a href="{{route('role.edit',$role->id)}}"
                                                       class="btn btn-sm btn-outline-warning mr-3"><i
                                                            class="fa fa-edit"></i></a>
                                                    <a href="{{route('role_soft_delete',$role->id)}}"
                                                       class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                                                    @endrole
                                                @else
                                                    @can('role-edit')
                                                        <a href="{{route('role.edit',$role->id)}}"
                                                           class="btn btn-sm btn-outline-warning mr-3"><i
                                                                class="fa fa-edit"></i></a>
                                                    @endcan
                                                @can('role-delete')
                                                    <a href="{{route('role_soft_delete',$role->id)}}"
                                                       class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>
                                                        @endcan
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            {{$roles->links()}}
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
