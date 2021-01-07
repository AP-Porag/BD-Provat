@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tag</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Admin</a></li>
                        <li class="breadcrumb-item"><a href="{{route('tag.index')}}">Tag List</a></li>
                        <li class="breadcrumb-item active text-capitalize">Tag Details</li>
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
                                <h3 class="card-title">Details Tag - <strong>{{$tag->name}}</strong></h3>
                                <a href="{{route('tag.index')}}" class="btn btn-outline-light">Tag
                                    List</a>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="d-flex">
                                <p><strong class="text-primary">ID : </strong> {{$tag->id}}</p>
                            </div>
                            <div class="d-flex">
                                <p><strong class="text-primary">Name : </strong> {{$tag->name}}</p>
                            </div>
                            <div class="d-flex">
                                <p><strong class="text-primary">Slug : </strong> {{$tag->slug}}</p>
                            </div>
                            <div class="d-flex">
                                <p><strong class="text-primary">Create Date : </strong> {{$tag->created_at->diffForHumans()}}</p>
                            </div>
                            <div class="d-flex">
                                <p><strong class="text-primary">Description : </strong> {{$tag->description}}</p>
                            </div>


                        </div>
                        <div class="card-footer bg-gradient-indigo">
                            <a href="{{route('tag.edit',[$tag->id])}}" class="btn btn-outline-warning">Edit Tag</a>
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
