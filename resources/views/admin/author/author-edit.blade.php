@extends('layouts.admin')

@section('module')
    Author
@endsection

@section('before-path')
    Post-List
@endsection

@section('title')
    Add new Post
@endsection

@section('breadcumb')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item text-capitalize"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item text-capitalize"><a href="{{ route('post.index') }}">@yield('before-path')</a>
            </li>
            <li class="breadcrumb-item active text-capitalize" aria-current="page">@yield('title')</li>
        </ol>
    </nav>
@endsection
@section('style')
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <style>
        #loader {
            position: absolute;
            right: 18px;
            top: 38px;
            width: 25px;
        }

        #preview {
            min-width: 100%;
            max-width: 100%;
            max-height: 274px;
            min-height: 179px;
        }

        table.dataTable thead th,
        table.dataTable thead td,
        table.dataTable tbody tr {
            border-bottom: 0;
        }

        table.dataTable.no-footer {
            border-bottom: 0;
        }

        .dataTables_info {
            display: none;
        }

        .dataTables_paginate {
            padding-top: 30px !important;
            padding-bottom: 30px;
        }

        #datatable_filter {
            display: none;
        }

    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-end">
                    <a href="{{ route('post.index') }}" class="btn btn-sm btn-outline-primary"><i
                            class="fa fa-list"></i>@yield('before-path')</a>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="{{ route('author.update', $author->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-row">
                                <div class="col-md-3">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="preview" class="text-capitalize">Logo</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="img-thumbnail">
                                                            <img src="{{ $author->thumbnail }}" alt="preview"
                                                                class="img-fluid" id="preview">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 align-self-end">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="custom-file">
                                                                    <input type="file" name="thumbnail"
                                                                        class="form-control @error('thumbnail') is-invalid @enderror"
                                                                        id="thumbnail" placeholder="Enter Post photo"
                                                                        @change="fileChange">
                                                                    @error('thumbnail')
                                                                        <div class="invalid-feedback">
                                                                            <strong>Warning! </strong>{{ $message }}
                                                                        </div>
                                                                    @enderror

                                                                </div>
                                                                <div class="input-group-append">
                                                                    <span
                                                                        class="input-group-text bg-gradient-primary text-light"
                                                                        id="">Upload Thumbnail</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <form>
                                        <div class="form-group">
                                            <label for="authorName">Author Name</label>
                                            <input type="text" name="authorname" value="{{ $author->authorname }}"
                                                class="form-control @error('authorname') is-invalid @enderror"
                                                id="authorName" aria-describedby="emailHelp"
                                                placeholder="Enter Author Name">
                                            @error('authorname')
                                                <div class="invalid-feedback">
                                                    <strong>Warning! </strong>{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="enterpriseName">Enterprise Name</label>
                                            <input type="text" name="enterprisename" value="{{ $author->enterprisename }}"
                                                class="form-control  @error('enterprisename') is-invalid @enderror"
                                                id="enterpriseName" aria-describedby="emailHelp"
                                                placeholder="Enter Enterprise Name">
                                            @error('enterprisename')
                                                <div class="invalid-feedback">
                                                    <strong>Warning! </strong>{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="enterpriseHeadquarter">Enterprise Headquarter</label>
                                            <input type="text" name="enterpriseheadquarter"
                                                value="{{ $author->enterpriseheadquarter }}"
                                                class="form-control  @error('enterpriseheadquarter') is-invalid @enderror"
                                                id="enterpriseHeadquarter" aria-describedby="emailHelp"
                                                placeholder="Enter Enterprise Headquarter Name">
                                            @error('enterpriseheadquarter')
                                                <div class="invalid-feedback">
                                                    <strong>Warning! </strong>{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                value="{{ $author->email }}" id="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email">
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    <strong>Warning! </strong>{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="mobilenumber">Mobile</label>
                                            <input type="text" name="mobilenumber"
                                                class="form-control @error('mobilenumber') is-invalid @enderror"
                                                id="mobilenumber" aria-describedby="emailHelp"
                                                value="{{ $author->mobilenumber }}" placeholder="Enter Mobile Number">
                                            @error('mobilenumber')
                                                <div class="invalid-feedback">
                                                    <strong>Warning! </strong>{{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save @yield('module')</button>
                                    </form>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        var loader = $('#loader');
        var subcategory = $('#subcategory');
        loader.hide();
        subcategory.attr('disabled', 'disabled');

        $('#preview').attr('src', '{{ $author->thumbnail }}');

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#thumbnail").change(function() {
            readURL(this);
        });

        //doctor fees load according selected doctor
        $(document).on('change', '#category', function() {
            var category_id = $(this).val();

            console.log('Category ID - ' + category_id);

            if (category_id) {
                loader.show();
                subcategory.attr('disabled', 'disabled');

                $.ajax({
                    type: 'get',
                    url: '/admin/post/get/subcategory',
                    data: {
                        'category_id': category_id
                    },
                    dataType: 'json', //return data will be json
                    success: function(data) {
                        console.log(data)
                        var select = '<option selected disabled>--Select Sub-Category--</option>';

                        data.forEach(function(row) {
                            select += '<option value="' + row.id + '">' + row.name +
                                '</option>';
                        });

                        if (!$.trim(data)) {
                            subcategory.attr('disabled', 'disabled');
                            loader.hide();
                        } else {
                            subcategory.removeAttr('disabled');
                            subcategory.html(select);
                            loader.hide();
                        }




                    },
                    error: function() {

                    }
                });
            }



        });

    </script>
    <script>
        $(document).ready(function() {
            $('#post_tag').select2();
        });

    </script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };

    </script>
    <script>
        CKEDITOR.replace('my-editor', options);

    </script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "ajax": {
                    "url": "/admin/post/get/tags",
                    "dataSrc": ""
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "name"
                    },
                    {
                        "data": "posts_count"
                    },
                ]
            });
        });

    </script>

@endsection
