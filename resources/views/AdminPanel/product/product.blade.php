


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
                            <a href="{{route('add_products')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i></a>
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
                                @php($i=1)
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->category->title}}</td>
                                        <td>{{$product->brand->name}}</td>
                                        <td><img src="{{asset($product->product_image)}}" alt="{{$product->product_name}}"width="100px" height="100px"></td>


                                        <td>{{$product->status == 'active' ? 'Published':'Unpublished'}}</td>
                                        <td>

                                            <a href="{{route('product_details',['id'=>$product->id])}}" class="btn btn-sm btn-dark"><i class="fa fa-search-plus" aria-hidden="true"></i></a>

{{--                                            @if($color->status == 'active')--}}
{{--                                                <a href="{{route('color_unpublished',['id'=>$color->id])}}" class="btn btn-sm btn-info"--}}
{{--                                                ><i class="fa fa-arrow-circle-up"></i></a>--}}
{{--                                            @else--}}
{{--                                                <a href="{{route('color_published',['id'=>$color->id])}}" class="btn btn-sm btn-warning"--}}
{{--                                                ><i class="fa fa-arrow-circle-down"></i></a>--}}
{{--                                            @endif--}}

{{--                                            <a href="{{route('color_edit',['id'=>$color->id])}}" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>--}}

{{--                                            <a href="{{route('color_destroy',['id'=>$color->id])}}" class="btn btn-sm btn-danger" ><i class="fa fa-trash"></i></a>--}}
                                        </td>

                                    </tr>

                                @endforeach


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
