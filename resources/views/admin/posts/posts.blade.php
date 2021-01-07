@extends('layouts.admin')

@section('module')
    Post
@endsection

@section('before-path')
    Dashboard
@endsection

@section('title')
    Post-List
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
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <style>
        table.dataTable thead th, table.dataTable thead td, table.dataTable tbody tr {
            border-bottom: 0;
        }

        table.dataTable.no-footer {
            border-bottom: 0;
        }
        .dataTables_info{
            padding-top: 41px !important;
            color: #1d68a7 !important;
        }
        .dataTables_paginate {
            padding-top: 30px !important;
            padding-bottom: 30px;
        }
        .dropdown-menu li:hover{
            background: #999999;
            color: red;
        }
        .dropdown-menu i{
            line-height: 0;
        }
        .dropdown-menu p{
            margin-bottom: 0;
        }
    </style>
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">@yield('title')</h6>
            <div class="d-flex justify-content-between">
                <a href="{{route('post.create')}}" class="btn btn-sm btn-outline-primary text-capitalize mr-3"><i
                        class="fa fa-plus-circle"></i> Add new @yield('module')</a>
                <a href="{{route('post_inactive')}}" class="btn btn-sm btn-outline-danger text-capitalize"><i
                        class="fa fa-ban"></i> In-Active @yield('module')</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            {{--                            <table class="table table-bordered dataTable table-striped table-hover" id="datatable" width="100%" cellspacing="0"--}}
                            {{--                                   role="grid" aria-describedby="dataTable_info">--}}
                            {{--                                <thead>--}}
                            {{--                                <tr role="row">--}}
                            {{--                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"--}}
                            {{--                                        colspan="1" aria-sort="ascending"--}}
                            {{--                                        aria-label="Name: activate to sort column descending">Sl--}}
                            {{--                                    </th>--}}
                            {{--                                    <th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1"--}}
                            {{--                                        colspan="1" aria-sort="ascending"--}}
                            {{--                                        aria-label="Name: activate to sort column descending">Post ID--}}
                            {{--                                    </th>--}}
                            {{--                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"--}}
                            {{--                                        aria-label="Position: activate to sort column ascending">--}}
                            {{--                                        Name--}}
                            {{--                                    </th>--}}
                            {{--                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"--}}
                            {{--                                        aria-label="Office: activate to sort column ascending">--}}
                            {{--                                        Phone--}}
                            {{--                                    </th>--}}
                            {{--                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"--}}
                            {{--                                        aria-label="Age: activate to sort column ascending">Dew Balance--}}
                            {{--                                    </th>--}}
                            {{--                                    <th rowspan="1" colspan="1" class="text-center">Action--}}
                            {{--                                    </th>--}}
                            {{--                                </tr>--}}
                            {{--                                </thead>--}}
                            {{--                                <tbody>--}}

                            {{--                                @foreach($posts as $key=>$post)--}}
                            {{--                                <tr role="row" class="odd">--}}
                            {{--                                    <td class="sorting_1 text-center">{{$posts->firstItem() + $key}}</td>--}}
                            {{--                                    <td class="sorting_1 text-center">{{$post->id}}</td>--}}
                            {{--                                    <td class="sorting_1 text-center">{{$post->name}}</td>--}}
                            {{--                                    <td class="sorting_1 text-center">{{$post->phone}}</td>--}}
                            {{--                                    <td>--}}
                            {{--                                        <div class="btn-group d-flex justify-content-center">--}}
                            {{--                                            <a href="{{route('post.show',$post->id)}}" class="btn btn-sm btn-outline-info mr-3"><i class="fa fa-eye"></i></a>--}}
                            {{--                                            <a href="{{route('post.edit',$post->id)}}" class="btn btn-sm btn-outline-warning mr-3"><i class="fa fa-edit"></i></a>--}}
                            {{--                                            <a href="{{route('post_soft_delete',$post->id)}}" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></a>--}}
                            {{--                                        </div>--}}
                            {{--                                    </td>--}}
                            {{--                                </tr>--}}
                            {{--                                @endforeach--}}
                            {{--                                </tbody>--}}
                            {{--                            </table>--}}
                            <table class="table table-bordered dataTable table-striped table-hover" width="100%"
                                   id="datatable">
                                <thead>
                                <tr>
                                    <th class="text-capitalize">id</th>
                                    <th class="text-capitalize">Post Date</th>
                                    <th class="text-capitalize">Author</th>
                                    <th class="text-capitalize">title</th>
                                    <th class="text-capitalize">status</th>
                                    <th class="text-capitalize">Publishing Date</th>
                                    <th class="text-capitalize">views</th>
                                    <th class="text-capitalize">comment</th>
                                    <th class="text-capitalize">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let postUrl = '{{route('post.index')}}';
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                "ajax": {
                    "url": "/admin/post/get/posts",
                    "dataSrc": ""
                },
                "columns": [
                    {"data": "id"},
                    {"data": "created_at"},
                    {"data": "user.name"},
                    {"data": "title"},
                    {"data": "status"},
                    {"data": "publishing_date"},
                    {"data": "views"},
                    {"data": "comments_count"},
                    {
                        data: function (row) {
                            return '<div class="dropdown">'+
                            '<button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +
                            'Actions' +
                                '</button>'+
            '<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">'+
                '<div class="text-center">' +
                                '<a href="' + postUrl + '/' + row.id +'/edit" class="text-decoration-none text-info">' +
                                '<ul class="list-group">'+
                                '<li class="d-flex align-items-center pl-3 pt-2 pb-2">'+
                                '<i class="fa fa-eye mr-3"></i><p>View Post</p>'+
                                '</li>'+
                                '</ul>'+
                                '</a>'+
                                '</div>'+
                '<div class="text-center">' +
                                '<a href="' + postUrl + '/' + row.id +'/edit" class="text-decoration-none text-gray-900">' +
                                '<ul class="list-group">'+
                                '<li class="d-flex align-items-center pl-3 pt-2 pb-2">'+
                                '<i class="fa fa-edit mr-3"></i><p>Edit Post</p>'+
                                '</li>'+
                                '</ul>'+
                                '</a>'+
                                '</div>'+
                '<div class="text-center">' +
                                '<a href="' + postUrl + '/' + row.id +'/edit" class="text-decoration-none text-warning">' +
                                '<ul class="list-group">'+
                                '<li class="d-flex align-items-center pl-3 pt-2 pb-2">'+
                                '<i class="fa fa-trash mr-3"></i><p>Edit Post</p>'+
                                '</li>'+
                                '</ul>'+
                                '</a>'+
                                '</div>'+
            '</div>'
                        },
                        name: 'id'
                    },
                ],
                columnDefs:[{targets:[1,5], render:function(data){
                        return moment(data).format('Do , MMMM , YYYY');
                    }}]
            });
        });
    </script>
@endsection
