@extends('layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Admin</a></li>
                        <li class="breadcrumb-item active text-capitalize"><a href="{{ route('category.index') }}">Author
                                Details</a></li>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header border-2 bg-gradient-indigo">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Author Details</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Thumbnail</th>
                                        <th scope="col">Author Name</th>
                                        <th scope="col">Enterprise Name</th>
                                        <th scope="col">HeadQuarter</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $author->id }}</td>
                                        <td><img src="{{ $author->thumbnail }}" width="75" </td>
                                        <td>{{ $author->authorname }}</td>
                                        <td>{{ $author->enterprisename }}</td>
                                        <td>{{ $author->enterpriseheadquarter }}</td>
                                        <td>{{ $author->email }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('author.edit', $author->id) }}"
                                                    class="btn btn-warning">Edit</a>
                                                {{-- @role('supper-admin')
                                                <form action="{{ route('author.destroy', $author->id) }}" method="POST">
                                                    @csrf
                                                    {{ method_field('DELETE') }}
                                                    <input class="btn btn-danger" type="submit" name="submit"
                                                        value="Delete">
                                                </form>
                                                @endrole --}}
                                            </div>
                                        </td>
                                    </tr>
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
