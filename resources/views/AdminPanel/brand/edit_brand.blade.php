
@extends('AdminPanel.master')

@section('title')

    Edit Brand

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Add Brand</strong></h1>
                </div>
                @if(Session::get('message'))

                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Successfully</h5>
                        {{Session::get('message')}}
                    </div>
                @endif
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Brand</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('brand_update')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$brand->name}}"  placeholder="Brand Name">

                            <input type="hidden" class="form-control @error('name') is-invalid @enderror" name="id" value="{{$brand->id}}" placeholder="Brand Name">
                        </div>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    {{--                    <div class="form-row">--}}
                    {{--                        <div class="col-12">--}}
                    {{--                            <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug"  placeholder="Banner Slug">--}}
                    {{--                        </div>--}}
                    {{--                        @error('slug')--}}
                    {{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
                    {{--                        @enderror--}}
                    {{--                    </div>--}}
                    {{--                    <hr>--}}
                    <div class="form-row">
                        <div class="col-12">
                            <textarea id="editor" rows="4"cols="6" class="form-control @error('description') is-invalid @enderror" name="description"  placeholder="Brand Description">{{$brand->description}}</textarea>
                        </div>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>

                    <div class="form-row">
                        <input type="file" name="photo" id="" class="@error('photo') is-invalid @enderror" placeholder="">
                    </div>
                    @error('photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <img src="{{asset($brand->logo)}}" alt="{{$brand->name}}" width="100px" height="100px">
                    <hr>
                    <div class="form-row">

                        <select class="form-control @error('status') is-invalid @enderror" id="" name="status">
                            <option >Publication Status</option>
                            <option value="active"{{$brand->status == 'active' ? 'Selected':''}}>Active</option>
                            <option value="inactive"{{$brand->status == 'inactive' ? 'Selected':''}}>Inactive</option>
                        </select>
                    </div>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <hr>
                    <div class="col-2">
                        <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Add Brand">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </section>


@endsection

@section('js')
    <script>
        // CKEDITOR.replace( 'description' );

    </script>

@endsection
