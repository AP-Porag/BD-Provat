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
                        <li class="breadcrumb-item active text-capitalize">Category Details</li>
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
                        <div class="card-header border-2 bg-gradient-indigo">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Details Category - <strong>{{$category->name}}</strong></h3>
                                <a href="{{route('category.index')}}" class="btn btn-outline-light">Category
                                    List</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="d-flex">
                                <p><strong class="text-primary">ID : </strong> {{$category->id}}</p>
                            </div>
                            <div class="d-flex">
                                <p><strong class="text-primary">Name : </strong> {{$category->name}}</p>
                            </div>
                            <div class="d-flex">
                                <p><strong class="text-primary">Slug : </strong> {{$category->slug}}</p>
                            </div>
                            <div class="d-flex">
                                <p><strong class="text-primary">Create Date : </strong> {{$category->created_at->diffForHumans()}}</p>
                            </div>
                            <div class="d-flex">
                                <p><strong class="text-primary">Description : </strong> {{$category->description}}</p>
                            </div>


                        </div>
                        <div class="card-footer bg-gradient-indigo">
                            <a href="{{route('category.edit',[$category->id])}}" class="btn btn-outline-warning">Edit Category</a>
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
