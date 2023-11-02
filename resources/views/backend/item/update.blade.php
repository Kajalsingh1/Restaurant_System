@extends('backend.master')
@section('body')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-sm-12">
                        <h1>Update Item</h1>
                    </div>
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Item</li>
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
                                <h3 class="card-title">Items</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{route('updateitem')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data->id }}"/>
                                <div class="card-body">
                                    {{-- <div class="form-group">
                                        <label for="exampleInputItemID">ItemID</label>
                                        <input type="text" class="form-control" name="itemid" value="{{$data->itemid}}"
                                            placeholder="Enter Category Name" value="{{old('')}}">
                                        @error('itemid')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div> --}}
                                    <div class="form-group">
                                        <label for="exampleInputCategory">Category</label>
                                        <select name="category" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($items as $item)
                                                <option value="{{ $item->id }}" @if ($item->id==old('category')) selected
                                                @endif>{{ $item->name }}</option>
                                            @endforeach
                                            @foreach ($mainfoods as $mainfood)
                                            <option value="{{ $mainfood->id }}" @if ($mainfood->id==old('category')) selected
                                            @endif>{{ $mainfood->name }}</option>
                                        @endforeach
                                        </select>

                                            @error('category')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" class="form-control" name="name" value="{{$data->name}}"
                                            placeholder="name">
                                            @error('name')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputDescription">Description</label>
                                        <input type="text" class="form-control"
                                            placeholder="description" name="description" value="{{$data->description}}">
                                            @error('description')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPrice">Price</label>
                                        <input type="text" class="form-control"
                                            placeholder="price" name="price" value="{{$data->price}}">
                                            @error('price')
                                            <span style="color: red">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputImgpath">Image</label>
                                        <input type="file" class="form-control"
                                            placeholder="Imgage Path" name="imgpath" value="{{$data->imgpath}}">
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
