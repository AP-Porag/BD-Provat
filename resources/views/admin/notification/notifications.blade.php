@extends('layouts.admin')

@section('module')
    Notifications
@endsection

@section('before-path')
    Dashboard
@endsection

@section('title')
    Notification-List
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
                            <table class="table table-striped table-hover" id=""
                                width="100%" cellspacing="0" User="grid" aria-describedby="dataTable_info" style="border: 1px solid #e3e6f0">
                                <thead>
                                    <tr User="row">
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Sl
                                        </th>
                                        <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable"
                                            rowspan="1" colspan="1" aria-sort="ascending"
                                            aria-label="Name: activate to sort column descending">Commenter Name
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Position: activate to sort column ascending">
                                            Post Title
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending">
                                            comment
                                        </th>
                                        <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1"
                                            colspan="1" aria-label="Office: activate to sort column ascending">
                                            Status
                                        </th>
                                        <th rowspan="1" colspan="1" class="text-center">Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($notifications as $notification)
                                        <tr User="row" class="text-center {{$notification->status == 'unseen' ? 'text-danger border border-danger' : ''}}">
                                            <td class="sorting_1 text-center">{{ $loop->index + 1 }}</td>
                                            <td class="text-capitalize">{{ $notification->commenter->name }}</td>
                                            <td class="text-capitalize">{{ $notification->post->title }}</td>
                                            <td class="text-capitalize">{{ $notification->comment->message }}</td>
                                            <td class="text-capitalize">{{ $notification->status }}</td>

                                            <td>
                                                <div class="btn-group d-flex justify-content-center">
                                                    <a href="{{ route('notification-view', $notification->id) }}"
                                                       class="btn btn-sm btn-outline-info mr-3"><i
                                                            class="fa fa-eye"></i></a>
                                                    <a href="{{ route('notification-delete', $notification->id) }}"
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
                            {{ $notifications->links() }}
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
