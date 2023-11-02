@extends('backend.master')
@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-sm-12">
                        <h1>Add Events</h1>
                    </div>
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Event</li>
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
                                <h3 class="card-title">Events</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('updateslider')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}"/>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputItemID">Image</label>
                                        <input type="file" class="form-control" name="image" value="{{$data->image}}"
                                            placeholder="image path">
                                            @error('image')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDescription">Text1</label>
                                        <input type="text" class="form-control"
                                            placeholder="enter text" name="text1" value="{{$data->text1}}">
                                            @error('text1')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputDescription">Text2</label>
                                        <input type="text" class="form-control"
                                            placeholder="enter text" name="text2" value="{{$data->text2}}">
                                            @error('text2')
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
