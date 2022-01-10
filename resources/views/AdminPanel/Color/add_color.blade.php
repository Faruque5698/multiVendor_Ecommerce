


@extends('AdminPanel.master')

@section('title')

    Add New Color

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Add New Color</strong></h1>
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
                <h3 class="card-title">Add New Size</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('store_color')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('color_name') is-invalid @enderror" name="color_name"  placeholder="Color Name">
                        </div>
                        @error('color_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('color_code') is-invalid @enderror" name="color_code"  placeholder="Color Code">
                        </div>
                        @error('color_code')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <select class="form-control @error('status') is-invalid @enderror" id="" name="status">
                            <option selected>Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>

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
