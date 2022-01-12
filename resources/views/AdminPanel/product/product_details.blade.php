


@extends('AdminPanel.master')
@section('title')
    Products
@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>product List</strong></h1>
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
                            <h3 class="card-title">Product List</h3>
                            {{--                            <p>total category : {{$total_category}}</p>--}}

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>product Image</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                    <tr>

                                    </tr>




                                </tbody>

                                <tfoot>
                                <tr>
                                    <th>Sl</th>
                                    <th>Product Name</th>
                                    <th>Category Name</th>
                                    <th>Brand Name</th>
                                    <th>Product Image</th>
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

