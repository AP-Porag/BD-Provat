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
                        <li class="breadcrumb-item"><a href="{{ route('tag.index') }}">Tag List</a></li>
                        <li class="breadcrumb-item active text-capitalize">Edit Tag</li>
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
                                <h3 class="card-title">Edit Tag</strong></h3>
                                <a href="{{ route('tag.index') }}" class="btn btn-outline-secondary">Tag
                                    List</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6 mx-auto">
                                <form action="{{ route('tag.update', $tag->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="tag">Tag Edit</label>
                                        <input type="text" name="name"
                                            class="form-control  @error('name') is-invalid @enderror"
                                            value="{{ $tag->name }}" id="tag" aria-describedby="emailHelp">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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
