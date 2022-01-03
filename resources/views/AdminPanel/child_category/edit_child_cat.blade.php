


@extends('AdminPanel.master')

@section('title')

    Edit Child category

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Edit Child category</strong></h1>
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
                <h3 class="card-title">Edit Child category</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('child_category_update')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$child->title}}"  placeholder="Subcategory Title">
                            <input type="hidden" class="form-control @error('title') is-invalid @enderror" name="id" value="{{$child->id}}" placeholder="Subcategory Title">
                        </div>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <select class="form-control @error('subcategory_id') is-invalid @enderror" id="" name="subcategory_id">
                            <option>Select Category</option>
                            @foreach($subcategories as $subcategory)

                                <option value="{{$subcategory->id}}"{{$child->subcategory_id == $subcategory->id ?'Selected':''}}>{{$subcategory->title}}</option>

                            @endforeach


                        </select>

                    </div>
                    @error('subcategory_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <div class="form-row">
                        <div class="col-12">
                            <textarea id="editor" class="form-control @error('summary') is-invalid @enderror" rows="5" cols="5" name="summary"  placeholder="Subcategory Summary">{{$child->summary}}</textarea>
                        </div>
                        @error('summary')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>

                    <div class="form-row">
                        <select class="form-control @error('status') is-invalid @enderror" id="" name="status">
                            <option selected>Status</option>
                            <option value="active"{{$child->status == 'active'?'Selected':''}}>Active</option>
                            <option value="inactive"{{$child->status == 'inactive'?'Selected':''}}>Inactive</option>

                        </select>

                    </div>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror




                    {{--                        <hr>--}}
                    {{--                        <div class=" ml-5">--}}
                    {{--                            <img style="width: 50%;border: 1px solid; border-radius: 10px;" id="viewer" src="{{asset('admin')}}/image/image.jpg" alt="banner image">--}}
                    {{--                        </div>--}}
                    <hr>
                    <div class="col-2">
                        <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Add Child category">
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
