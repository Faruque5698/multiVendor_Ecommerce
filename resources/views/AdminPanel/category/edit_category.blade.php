
@extends('AdminPanel.master')

@section('title')

Edit Category

@endsection

@section('content')


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><strong>Add Category</strong></h1>
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
            <h3 class="card-title">Edit Category</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="{{route('category_update')}}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="form-row">
                    <div class="col-12">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{$category->title}}" name="title"  placeholder="Category Title">
                        <input type="hidden" class="form-control @error('title') is-invalid @enderror" value="{{$category->id}}" name="id"  placeholder="Category Title">
                    </div>
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr>
                <div class="form-row">
                    <div class="col-12">
                        <textarea id="editor" class="form-control @error('description') is-invalid @enderror" name="summary"  placeholder="Category Summary">{{$category->summary}}</textarea>
                    </div>
                    @error('summary')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr>

                <div class="form-row">
                    <input type="file" name="photo" id="" class="@error('photo') is-invalid @enderror" placeholder="">
                </div>
                <img src="{{asset($category->photo)}}" width="100px" height="100px" >
                @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <hr>

                <div class="form-row">
                    <select class="form-control @error('status') is-invalid @enderror" id="" name="status">
                        <option selected>Status</option>
                        <option value="active" {{$category->status == 'active' ? 'Selected':''}}>Active</option>
                        <option value="inactive"{{$category->status == 'inactive' ? 'Selected':''}}>Inactive</option>

                    </select>

                </div>
                @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror




<!--                {{--                        <hr>--}}-->
<!--                {{--                        <div class=" ml-5">--}}-->
<!--                    {{--                            <img style="width: 50%;border: 1px solid; border-radius: 10px;" id="viewer" src="{{asset('admin')}}/image/image.jpg" alt="banner image">--}}-->
<!--                    {{--                        </div>--}}-->
                <hr>
                <div class="col-2">
                    <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Edit Category">
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
