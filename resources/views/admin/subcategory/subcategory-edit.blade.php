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
                        <li class="breadcrumb-item"><a href="{{ route('subcategory.index') }}">SubCategory List</a></li>
                        <li class="breadcrumb-item active text-capitalize">Edit Subcategory</li>
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
                                <h3 class="card-title">Edit Subcategory</strong></h3>
                                <a href="{{ route('category.index') }}" class="btn btn-outline-secondary">Category
                                    List</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6 mx-auto">
                                <form action="{{ route('subcategory.update', $subcategory->id) }}" method="POST">
                                    @csrf
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="category">Category</label>
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror"
                                            value="{{ $subcategory->name }}" id="category" aria-describedby="emailHelp">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="category">Category Name</label>
                                        <select class="custom-select mr-sm-2 @error('category') is-invalid @enderror"
                                            id="category" name="category">
                                            <option selected disabled>--Select Category--</option>
                                            @foreach ($categories as $category)
                                                <option @if ($category->id == $subcategory->category_id) selected @endif value="{{ $category->id }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>

                                        @error('category')
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
