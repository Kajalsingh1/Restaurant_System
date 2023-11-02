
@extends('backend.master')
@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-sm-12">
                        <h1>Add Category</h1>
                    </div>
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Categories</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('updatecategory')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}"/>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputItemID">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$data->name}}"
                                            placeholder="name">
                                            @error('name')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDescription">Image</label>
                                        <input type="file" class="form-control"
                                            placeholder="img path" name="imgpath" value="{{$data->imgpath}}">
                                            @error('imgpath')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>


                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                        <div class="form-group">
                    </div>
                    </form>
                </div>
            </div>
    </div>
    </section>
    </div>
    <!-- /.card -->
@endsection

