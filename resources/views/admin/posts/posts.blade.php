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
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
          rel="stylesheet">
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
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered dataTable table-striped table-hover" width="100%"
                                   id="datatable">
                                <thead>
                                <tr>
                                    <th class="text-capitalize">id</th>
                                    <th class="text-capitalize">Post Date</th>
                                    <th class="text-capitalize">Author</th>
                                    <th class="text-capitalize">title</th>
                                    <th class="text-capitalize">status</th>
                                    <th class="text-capitalize">Change Status</th>
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
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
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
                    {
                        data: function (row) {
                            return'<span id="status_id-'+ row.id +'" class="status_text text-capitalize">'+ row.status +'</span>'
                        },
                        name: 'id'
                    },
                    //{"data": "status"},
                    {
                        data: function (row) {
                            return'<input id="changeStatus" data-id="'+ row.id +'" class="form-check" type="checkbox" '+ (row.status == "published" ? 'checked' : '') +'>'
                        },
                        name: 'id'
                    },
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
                                '<a href="' + postUrl + '/' + row.id +'" class="text-decoration-none text-info">' +
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
                                '<a href="' + postUrl + '/soft-delete/' + row.id +'" class="text-decoration-none text-warning">' +
                                '<ul class="list-group">'+
                                '<li class="d-flex align-items-center pl-3 pt-2 pb-2">'+
                                '<i class="fa fa-trash mr-3"></i><p>Trash Post</p>'+
                                '</li>'+
                                '</ul>'+
                                '</a>'+
                                '</div>'+
            '</div>'
                        },
                        name: 'id'
                    },
                ],
                columnDefs:[{targets:[1,6], render:function(data){
                        return moment(data).format('Do , MMMM , YYYY');
                    }}]
            });
        });

        $(document).on('change','#changeStatus',function () {
            var status = $(this).prop('checked') == true ? 'published' : 'unpublished';
            var post_id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: '/admin/post/get/updateStatus',
                data: {'status': status, 'post_id': post_id},
                success: function(data){
                    $('#status_id-'+data.id).text(data.status)
                }
            });
        })

    </script>
@endsection
