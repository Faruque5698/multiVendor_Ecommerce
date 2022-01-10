


@extends('AdminPanel.master')

@section('title')

    Edit Color

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Edit Color</strong></h1>
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
                <h3 class="card-title">Edit Size</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('update_color')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('color_name') is-invalid @enderror" name="color_name" value="{{$color->color_name}}"  placeholder="Color Name">
                            <input type="hidden" class="form-control @error('color_name') is-invalid @enderror" name="id" value="{{$color->id}}"  placeholder="Color Name">
                        </div>
                        @error('color_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('color_code') is-invalid @enderror" name="color_code"  value="{{$color->color_code}}" placeholder="Color Code">
                        </div>
                        @error('color_code')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <div style="background-color: {{$color->color_code}}; width: 100px ; height: 100px"></div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <select class="form-control @error('status') is-invalid @enderror" id="" name="status">
                            <option selected>Status</option>
                            <option value="active" {{$color->status == 'active'?'Selected':''}}>Active</option>
                            <option value="inactive"{{$color->status == 'inactive'?'Selected':''}}>Inactive</option>

                        </select>

                    </div>
                    <hr>
                    <div class="col-6">
                        <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Add New Color">
                    </div>
                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </section>


@endsection

@section('js')
    {{--    <script>--}}
    {{--        // CKEDITOR.replace( 'description' );--}}

    {{--    </script>--}}

@endsection

