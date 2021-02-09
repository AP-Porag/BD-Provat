@extends('layouts.admin')

@section('module')
    Subscribers
@endsection

@section('before-path')
    Dashboard
@endsection

@section('title')
    Subscriber-List
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
                                            Created At
                                        </th>
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($subscribers as $key => $user)
                                        <tr User="row" class="odd text-center">
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
                                            <td class="d-flex justify-content-between">
                                                <p>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',  $user->created_at)->format('F j, Y') }}</p>
                                                <p>{{ $user->created_at->diffForHumans() }}</p>
                                            </td>
                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    <a href="{{ route('subscriber-delete', $user->id) }}"
                                                        class="btn btn-sm btn-outline-danger mr-3"><i
                                                            class="fa fa-trash"></i></a>
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
                            {{ $subscribers->links() }}
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
