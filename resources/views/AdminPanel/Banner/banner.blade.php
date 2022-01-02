@extends('AdminPanel.master')
@section('title')
Banner
@endsection

@section('content')


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><strong>Brand List</strong></h1>
                    </div>

                    @if(Session::get('message'))

                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{Session::get('message')}}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Banner List</h3>
                                <a href="{{route('banner.create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i></a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Banner Title</th>

                                        <th>Banner Description</th>
                                        <th>Banner Image</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @php($i=1)
                                    @foreach($banners as $banner)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$banner->title}}</td>
                                            <td>{{$banner->description}}</td>
                                            <td><img src="{{asset($banner->photo)}}" alt="{{$banner->title}}" width="100px" height="100px"></td>
                                            <td>{{$banner->status == 'active' ? 'Active':'Inactive'}}</td>
                                            <td>

                                                @if($banner->status == 'active')
                                                    <a href="{{route('banner_unpublished',['id'=>$banner->id])}}" class="btn btn-sm btn-info"
                                                       ><i class="fa fa-arrow-circle-up"></i></a>
                                                @else
                                                    <a href="{{route('banner_published',['id'=>$banner->id])}}" class="btn btn-sm btn-warning"
                                                        ><i class="fa fa-arrow-circle-down"></i></a>
                                                @endif

                                                <a href="{{route('banner_edit',['id'=>$banner->id])}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>

                                                <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-danger" ><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="modal-danger">
                                            <div class="modal-dialog">
                                                <div class="modal-content bg-danger">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" style="text-align: center;"><img src="{{asset('Admin/image/Danger.png')}}" width="100px" height="100px" alt=""></h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Are you want to delete it..</p>
                                                    </div>
                                                    <div class="modal-footer justify-content-between">
                                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                        <a href="{{route('banner_destroy',['id'=>$banner->id])}}" class="btn btn-outline-light">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>

                                    @endforeach

                                    </tbody>

                                    <tfoot>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Banner Title</th>

                                        <th>Banner Description</th>
                                        <th>Banner Image</th>
                                        <th>Publication Status</th>
                                        <th>Action</th>

                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- /.content -->


        <!-- /.modal -->


@endsection
