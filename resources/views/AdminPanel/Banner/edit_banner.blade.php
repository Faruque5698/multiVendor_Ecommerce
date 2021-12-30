@extends('AdminPanel.master')

@section('title')

   Edit Banner

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Add Banner</strong></h1>
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
                <h3 class="card-title">Edit Banner</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('banner_update')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$banner->title}}"  placeholder="Banner Title">
                            <input type="hidden" class="form-control @error('id') is-invalid @enderror" name="id" value="{{$banner->id}}"  placeholder="Banner Title">
                        </div>
                        @error('title')
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
                            <textarea id="editor" class="form-control @error('description') is-invalid @enderror" name="description"  placeholder="Banner Description">{{$banner->description}}</textarea>
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
                    <div class="form-row">
                        <img src="{{asset($banner->photo)}}" alt="{{$banner->title}}" style="margin-top: 5px;" width="100px" height="100px">
                    </div>
                    <hr>
                    <div class="form-row">

                        <select class="form-control @error('status') is-invalid @enderror" id="" name="status">
                            <option >Publication Status</option>
                            <option value="active" {{$banner->status == 'active' ? "Selected" : ""}}>Published</option>
                            <option value="inactive" {{$banner->status == 'inactive' ? "Selected" : ""}}>Unpublished</option>

                        </select>
                        {{--                                <img src="#" alt="" width="100%">--}}
                    </div>
                    @error('status')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <div class="form-row">

                        <select class="form-control @error('condition') is-invalid @enderror" id="" name="condition">
                            <option selected>Condition</option>
                            <option value="banner"{{$banner->condition == 'banner' ? "Selected" : ""}}>Banner</option>
                            <option value="promo"{{$banner->condition == 'promo' ? "Selected" : ""}}>Promo</option>

                        </select>
                        {{--                                <img src="#" alt="" width="100%">--}}
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
                        <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Add Banner">
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
