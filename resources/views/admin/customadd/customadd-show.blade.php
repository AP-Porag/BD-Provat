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
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="{{ route('customadd.store') }}" method="POST"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="category">Upload Image</label>
                                                    <input type="file" name="customadd"
                                                           class="form-control @error('customadd') is-invalid @enderror"
                                                           id="category"
                                                           aria-describedby="emailHelp">
                                                    @error('customadd')
                                                    <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="place">Place</label>
                                                    <select
                                                        class="custom-select mr-sm-2 @error('place') is-invalid @enderror"
                                                        id="place"
                                                        name="place">
                                                        <option selected disabled>--Select Placement--</option>
                                                        <option value="top-right">Top Right</option>
                                                        <option value="right-side-one">Right Side One</option>
                                                        <option value="right-side-two">Right Side Two</option>
                                                        <option value="right-side-three">Right Side Three</option>
                                                        <option value="right-side-four">Right Side Four</option>
                                                    </select>
                                                    @error('place')
                                                    <span class="invalid-feedback" role="alert">
                                                {{ $message }}
                                            </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                </div>
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
                                    <th scope="col">Place</th>
                                    <th scope="col" class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (isset($customadds))
                                    @foreach($customadds as $customadd)
                                        <tr>
                                            <td>{{ $customadd->id ?? ' ' }}</td>
                                            <td><img src="{{ $customadd->customadd ?? '' }}"
                                                     alt="{{ $customadd->customadd ?? '' }}" class="w-25"></td>
                                            <td class="text-capitalize w-25">{{$customadd->place}}</td>
                                            <td class="text-right d-flex justify-content-between">
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary mr-2" data-toggle="modal"
                                                        data-target=".edit-modal-lg-{{$customadd->id}}">
                                                    Edit
                                                </button>
                                                <!-- Modal -->
                                                <!-- Modal -->
                                                <div class="modal fade edit-modal-lg-{{$customadd->id}}" id="addEditModal" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edit
                                                                    Add</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <form
                                                                            action="{{ route('customadd.update',$customadd->id) }}"
                                                                            method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @csrf
                                                                            @method('put')
                                                                            <div class="form-row">
                                                                                <div class="col-md-7">
                                                                                    <div class="form-group">
                                                                                        <label for="category">Upload
                                                                                            Image</label>
                                                                                        <input type="file"
                                                                                               name="customadd"
                                                                                               class="form-control @error('customadd') is-invalid @enderror"
                                                                                               id="category"
                                                                                               aria-describedby="emailHelp">
                                                                                        @error('customadd')
                                                                                        <span class="invalid-feedback"
                                                                                              role="alert">
                                                {{ $message }}
                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-5">
                                                                                    <div class="form-group">
                                                                                        <label for="place">Place</label>
                                                                                        <select
                                                                                            class="custom-select mr-sm-2 @error('place') is-invalid @enderror"
                                                                                            id="place"
                                                                                            name="place">
                                                                                            <option selected disabled>
                                                                                                --Select Placement--
                                                                                            </option>
                                                                                            <option value="top-right" {{$customadd->place == 'top-right' ? 'selected' : ''}}>
                                                                                                Top Right
                                                                                            </option>
                                                                                            <option value="right-side-one" {{$customadd->place == 'right-side-one' ? 'selected' : ''}}>
                                                                                                Right Side One
                                                                                            </option>
                                                                                            <option value="right-side-two" {{$customadd->place == 'right-side-two' ? 'selected' : ''}}>
                                                                                                Right Side Two
                                                                                            </option>
                                                                                            <option value="right-side-three" {{$customadd->place == 'right-side-three' ? 'selected' : ''}}>
                                                                                                Right Side Three
                                                                                            </option>
                                                                                            <option value="right-side-four" {{$customadd->place == 'right-side-four' ? 'selected' : ''}}>
                                                                                                Right Side Four
                                                                                            </option>
                                                                                        </select>
                                                                                        @error('place')
                                                                                        <span class="invalid-feedback"
                                                                                              role="alert">
                                                {{ $message }}
                                            </span>
                                                                                        @enderror
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                        class="btn btn-secondary"
                                                                                        data-dismiss="modal">Close
                                                                                </button>
                                                                                <button type="submit"
                                                                                        class="btn btn-primary">Submit
                                                                                </button>
                                                                            </div>
                                                                        </form>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <form action="{{ route('customadd.destroy', $customadd->id) }}"
                                                          method="POST">
                                                        @csrf
                                                        {{ method_field('DELETE') }}
                                                        <input class="btn btn-danger" type="submit" name="submit"
                                                               value="Trash">
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
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
