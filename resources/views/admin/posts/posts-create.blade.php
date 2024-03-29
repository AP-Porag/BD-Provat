@extends('layouts.admin')

@section('module')
    Post
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <style>
        #loader {
            position: absolute;
            right: 18px;
            top: 38px;
            width: 25px;
        }
        #menu-loader {
            position: absolute;
            right: 18px;
            top: 38px;
            width: 25px;
        }
        #preview{
            min-width: 100%;
            max-width: 100%;
            max-height: 274px;
            min-height: 179px;
        }
        table.dataTable thead th, table.dataTable thead td, table.dataTable tbody tr {
            border-bottom: 0;
        }

        table.dataTable.no-footer {
            border-bottom: 0;
        }
        .dataTables_info{
            display: none;
        }
        .dataTables_paginate {
            padding-top: 30px !important;
            padding-bottom: 30px;
        }
        #datatable_filter{
            display: none;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-9">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-end">
                    <a href="{{ route('post.index') }}" class="btn btn-sm btn-outline-primary"><i
                            class="fa fa-list"></i>@yield('before-path')</a>
                </div>
                <div class="card-body">
                    <div class="form">
                        <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-heading">
                                                    <h5 class="card-header text-primary">Meta Tags</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="form-group">
                                                        <label for="meta_keywords"
                                                               class="text-capitalize">Post Meta Tag</label>
                                                        <input name="meta_keywords" class="form-control"
                                                               id="meta_keywords">
                                                        <input name="post_author" class="form-control"
                                                               id="post_author" value="{{Auth::user()->id}}" hidden>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="meta_description" class="text-capitalize">Post Meta Description</label>
                                                        <input name="meta_description" class="form-control"
                                                               id="meta_description">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="alter_tag" class="text-capitalize">Alter Tag</label>
                                                        <input name="alter_tag" class="form-control"
                                                               id="alter_tag">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="category" class="text-capitalize">Post
                                                                Category</label>
                                                            <select
                                                                class="custom-select mr-sm-2 @error('category') is-invalid @enderror"
                                                                id="category"
                                                                name="category">
                                                                <option selected disabled>--Select Category--</option>
                                                                @foreach($categories as $category)
                                                                    <option
                                                                        value="{{$category->id}}">{{$category->name}}</option>
                                                                @endforeach
                                                            </select>
                                                            @error('category')
                                                            <div class="invalid-feedback mt-1">
                                                                <strong>Warning! </strong> <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="subcategory" class="text-capitalize">Post
                                                                Sub-Category</label>
                                                            <select
                                                                class="custom-select mr-sm-2 @error('subcategory') is-invalid @enderror"
                                                                id="subcategory"
                                                                name="subcategory">
                                                            </select>
                                                            <img id="loader" src="{{asset('admin/img/loader.gif')}}"
                                                                 alt="loader">
                                                            @error('subcategory')
                                                            <div class="invalid-feedback mt-1">
                                                                <strong>Warning! </strong> <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="submenu" class="text-capitalize">Post
                                                                Sub-Menu/Dist.</label>
                                                            <select
                                                                class="custom-select mr-sm-2 @error('submenu') is-invalid @enderror"
                                                                id="submenu"
                                                                name="submenu">
                                                            </select>
                                                            <img id="menu-loader" src="{{asset('admin/img/loader.gif')}}"
                                                                 alt="loader">
                                                            @error('submenu')
                                                            <div class="invalid-feedback mt-1">
                                                                <strong>Warning! </strong> <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="title" class="text-capitalize">Post Title</label>
                                                            <input type="text" name="title"
                                                                   class="form-control @error('title') is-invalid @enderror"
                                                                   id="title"
                                                                   placeholder="Enter Post Title"
                                                                   value="{{ old('title') }}">
                                                            @error('title')
                                                            <div class="invalid-feedback mt-1">
                                                                <strong>Warning! </strong> <span>{{$message}}</span>
                                                            </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="post_tag">Select Tag</label>
                                                            <div class="form-group">
                                                                <select name="post_tag[]" id="post_tag"
                                                                        class="custom-select text-capitalize" multiple>
                                                                    @foreach($tags as $tag)
                                                                        <option value="{{$tag->id}}"
                                                                                class="form-control text-capitalize">{{$tag->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                                @error('tag')
                                                                <div class="invalid-feedback">
                                                                    <strong>Warning! </strong>
                                                                    <p>{{$message}}</p>
                                                                </div>
                                                                @enderror
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="preview" class="text-capitalize">Thumbnail</label>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="img-thumbnail">
                                                            <img src="" alt="preview" class="img-fluid" id="preview">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 align-self-end">
                                                        <div class="form-group">
                                                            <div class="input-group">
                                                                <div class="custom-file">
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
                                                                <div class="input-group-append">
                                                    <span class="input-group-text bg-gradient-primary text-light"
                                                          id="">Upload Thumbnail</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input id="status" name="status" type="checkbox" data-toggle="toggle"
                                                       data-on="Published" data-off="Unpublished" data-onstyle="primary"
                                                       data-offstyle="secondary" data-size="sm">
                                                <label for="status" class="text-capitalize ml-3">Publishing
                                                    Status</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="my-editor">Post Content</label>
                                            <div class="form-group">
                                            <textarea id="my-editor" name="post_content"
                                                      class="form-control @error('post_content') is-invalid @enderror">{!! old('post_content') !!}</textarea>
                                                @error('post_content')
                                                <div class="invalid-feedback">
                                                    <strong>Warning! </strong>
                                                    <p>{{$message}}</p>
                                                </div>
                                                @enderror
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save @yield('module')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-end">
                    <a href="{{ route('tag.index') }}" class="btn btn-sm btn-outline-primary"><i
                            class="fa fa-list mr-2"></i>Tag List</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered dataTable table-striped table-hover" width="100%"
                                   id="datatable">
                                <thead>
                                <tr>
                                    <th class="text-capitalize">id</th>
                                    <th class="text-capitalize">Tag</th>
                                    <th class="text-capitalize">Post Count</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h6 class="text-capitalize text-primary">Create new Tag</h6>
                                </div>
                                <div class="card-body">
                                    <div class="form">
                                        <form action="{{route('tag.store')}}" method="post">
                                            @csrf
                                            @method('post')
                                            <div class="form-row ">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" name="tag"
                                                               class="form-control @error('tag') is-invalid @enderror"
                                                               id="tag"
                                                               placeholder="Enter Tag name" value="{{ old('tag') }}">
                                                        @error('tag')
                                                        <div class="invalid-feedback mt-1">
                                                            <strong>Warning! </strong><span>{{$message}}</span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mt-1">
                                                    <button type="submit" class="btn btn-primary btn-sm text-capitalize">
                                                        save Tag
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script>
        var loader = $('#loader');
        var menuLoader = $('#menu-loader');
        var subcategory = $('#subcategory');
        var submenu = $('#submenu');
        loader.hide();
        menuLoader.hide();
        subcategory.attr('disabled','disabled');
        submenu.attr('disabled','disabled');

        $('#preview').attr('src', '{{asset('storage/no-image/upload-image.png')}}');

        function readURL(input) {
            if (input.files && input.files[0]) {
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

        //dependable subcategory dropdown
        $(document).on('change', '#category', function () {
            var category_id = $(this).val();

            console.log('Category ID - ' + category_id);

            if (category_id){
                loader.show();
                subcategory.attr('disabled','disabled');

                $.ajax({
                    type: 'get',
                    url: '/admin/post/get/subcategory',
                    data: {'category_id': category_id},
                    dataType: 'json',//return data will be json
                    success: function (data) {
                        console.log(data)
                        var select = '<option selected disabled>--Select Sub-Category--</option>';

                        data.forEach(function (row){
                            select += '<option value="'+row.id+'">'+row.name+'</option>';
                        });

                        if (!$.trim(data)){
                            subcategory.attr('disabled','disabled');
                            loader.hide();
                        }
                        else{
                            subcategory.removeAttr('disabled');
                            subcategory.html(select);
                            loader.hide();
                        }




                    },
                    error: function () {

                    }
                });
            }



        });
        //dependable subMenu dropdown
        $(document).on('change', '#category', function () {
            var category_id = $(this).val();

            console.log('Category ID - ' + category_id);

            if (category_id){
                menuLoader.show();
                submenu.attr('disabled','disabled');

                $.ajax({
                    type: 'get',
                    url: '/admin/post/get/findSubmenu',
                    data: {'category_id': category_id},
                    dataType: 'json',//return data will be json
                    success: function (data) {
                        console.log(data)
                        var select = '<option selected disabled>--Select Sub-Menu/Dist.--</option>';

                        data.forEach(function (row){
                            select += '<option value="'+row.id+'">'+row.name+'</option>';
                        });

                        if (!$.trim(data)){
                            submenu.attr('disabled','disabled');
                            menuLoader.hide();
                        }
                        else{
                            submenu.removeAttr('disabled');
                            submenu.html(select);
                            menuLoader.hide();
                        }




                    },
                    error: function () {

                    }
                });
            }



        });

        //Set select subcategory for selected sub menu
        $(document).on('change', '#submenu', function () {
            var submenu_id = $(this).val();

            console.log('Submenu ID - ' + submenu_id);

            if (submenu_id){
                subcategory.show();
                //subcategory.attr('disabled','disabled');

                $.ajax({
                    type: 'get',
                    url: '/admin/post/get/findSubmenuSubcategory',
                    data: {'submenu_id': submenu_id},
                    dataType: 'json',//return data will be json
                    success: function (data) {
                        console.log(data)
                        key = data[0].sub_category_id;
                        $( '#subcategory' ).find('option[value="' + key + '"]').attr('selected','selected')

                    },
                    error: function () {

                    }
                });
            }



        });

        //dependable submenu dropdown
        $(document).on('change', '#subcategory', function () {
            var sub_category_id = $(this).val();

            console.log('Sub Category ID - ' + sub_category_id);

            if (sub_category_id){
                menuLoader.show();
                submenu.attr('disabled','disabled');

                $.ajax({
                    type: 'get',
                    url: '/admin/post/get/getSubcategorySubmenu',
                    data: {'sub_category_id': sub_category_id},
                    dataType: 'json',//return data will be json
                    success: function (data) {
                        console.log(data)
                        var select = '<option selected disabled>--Select Sub-Menu--</option>';

                        data.forEach(function (row){
                            select += '<option value="'+row.id+'">'+row.name+'</option>';
                        });

                        if (!$.trim(data)){
                            submenu.attr('disabled','disabled');
                            menuLoader.hide();
                        }
                        else{
                            submenu.removeAttr('disabled');
                            submenu.html(select);
                            menuLoader.hide();
                        }




                    },
                    error: function () {

                    }
                });
            }



        });

    </script>
    <script>
        $(document).ready(function () {
            $('#post_tag').select2();
        });
    </script>
    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
        };
    </script>
    <script>
        CKEDITOR.replace('my-editor', options);
        CKEDITOR.addCss(".cke_editable{font-size: 18px;}");
        CKEDITOR.on('instanceReady', function (ev) {
            ev.editor.dataProcessor.htmlFilter.addRules( {
                elements : {
                    img: function( el ) {
                        // Add bootstrap "img-responsive" class to each inserted image
                        el.addClass('img-fluid');

                        // Remove inline "height" and "width" styles and
                        // replace them with their attribute counterparts.
                        // This ensures that the 'img-responsive' class works
                        var style = el.attributes.style;

                        if (style) {
                            // Get the width from the style.
                            var match = /(?:^|\s)width\s*:\s*(\d+)px/i.exec(style),
                                width = match && match[1];

                            // Get the height from the style.
                            match = /(?:^|\s)height\s*:\s*(\d+)px/i.exec(style);
                            var height = match && match[1];

                            // Replace the width
                            if (width) {
                                el.attributes.style = el.attributes.style.replace(/(?:^|\s)width\s*:\s*(\d+)px;?/i, '');

                            }

                            // Replace the height
                            if (height) {
                                el.attributes.style = el.attributes.style.replace(/(?:^|\s)height\s*:\s*(\d+)px;?/i, '');

                            }
                        }

                        // Remove the style tag if it is empty
                        if (!el.attributes.style)
                            delete el.attributes.style;
                    }
                }
            });
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#datatable').DataTable({
                "order": [[ 0, "desc" ]],
                "ajax": {
                    "url": "/admin/post/get/tags",
                    "dataSrc": ""
                },
                "columns": [
                    {"data": "id"},
                    {"data": "name"},
                    {"data": "posts_count"},
                ]
            });
        });
    </script>

@endsection
