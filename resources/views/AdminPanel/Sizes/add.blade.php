

@extends('AdminPanel.master')

@section('title')

    Add New Size

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Add New Size</strong></h1>
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
                <form action="{{route('store_sizes')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('sizes') is-invalid @enderror" name="sizes"  placeholder="Sizes">
                        </div>
                        @error('sizes')
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
                        <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Add New Sizes">
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
