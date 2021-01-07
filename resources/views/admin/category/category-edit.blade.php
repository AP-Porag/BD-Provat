@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Admin</a></li>
                        <li class="breadcrumb-item"><a href="{{route('category.index')}}">Category List</a></li>
                        <li class="breadcrumb-item active text-capitalize">Edit Category</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header border-2">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Edit Category - <strong>{{$category->name}}</strong></h3>
                                <a href="{{route('category.index')}}" class="btn btn-outline-secondary">Category
                                    List</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-12 col-lg-6 offset-lg-3 col-md-8 offset-md-2">
                                    <form action="{{route('category.update',[$category->id])}}" method="post">
                                        @csrf
                                        @method('put')
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="name">Category Name</label>
                                                <input type="text" name="name"
                                                       class="form-control @error('name') is-invalid @enderror"
                                                       value="{{$category->name, old('name') }}" id="name"
                                                       placeholder="Enter name">
                                                @error('name')
                                                <span class="invalid-feedback alert alert-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea type="text" name="description" class="form-control"
                                                          id="description" placeholder="Enter description"
                                                          rows="4">{{$category->description}}</textarea>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->

                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn bg-gradient-secondary">Update Category
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
