@extends('layouts.admin')

@section('module')
    Permission
@endsection

@section('before-path')
    Dashboard
@endsection

@section('title')
    Permission-List
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
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable table-striped table-hover" id="dataTable" width="100%" cellspacing="0"
                                   Permission="grid" aria-describedby="dataTable_info">
                                <thead>
                                <tr Permission="row">
                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Sl
                                    </th>
                                    <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending">
                                        Permissions group
                                    </th>
                                    <th class="sorting_asc text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Permission Name
                                    </th>
                                    <th class="sorting text-center text-capitalize" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending">
                                        Role Count
                                    </th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($permissions as $key=>$permission)
                                <tr Permission="row" class="odd">
                                    <td class="sorting_1 text-center">{{$loop->index+1}}</td>
                                    <td class="text-capitalize">
                                        {{$permission->group->name}}
                                    </td>
                                    <td class="sorting_1 text-capitalize">{{$permission->name}}</td>
                                    <td>
                                        {{$permission->roles->count()}}
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-7">
                            {{$permissions->links()}}
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
