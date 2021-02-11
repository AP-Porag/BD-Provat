@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Admin</a></li>
                        <li class="breadcrumb-item active text-capitalize"><a href="{{ route('customadd.index') }}">Custom
                                Add</a></li>
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
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header border-2 bg-gradient-indigo">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Create Custom Add</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="col-md-6">
                                <form action="{{ route('customadd.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="category">Upload Image</label>
                                        <input type="file" name="customadd"
                                            class="form-control @error('customadd') is-invalid @enderror" id="category"
                                            aria-describedby="emailHelp">
                                        @error('customadd')
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
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header border-2 bg-gradient-indigo">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Custom Add</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Custom Add Image</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (isset($customadd))
                                        <tr>
                                            <td>{{ $customadd->id ?? ' ' }}</td>
                                            <td><img src="{{ $customadd->customadd ?? '' }}"
                                                    alt="{{ $customadd->customadd ?? '' }}" class="w-25"> </td>
                                            <td class="text-right">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('customadd.edit', $customadd->id) }}"
                                                        class="btn btn-warning">Edit</a>

                                                    <form action="{{ route('customadd.destroy', $customadd->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <input class="btn btn-danger" type="submit" name="submit"
                                                            value="Delete">
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td class="text-center" colspan="3">No Data Found</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
