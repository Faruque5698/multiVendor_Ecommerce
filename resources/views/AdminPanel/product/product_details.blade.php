


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
                                <tr>
                                    <th class="col-3">Product Name</th>
                                    <td colspan="12">{{$product->product_name}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Product Brand</th>
                                    <td colspan="12">{{$product->brand->name}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Product Category</th>
                                    <td colspan="12">{{$product->category->title}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Product Subcategory</th>
                                    <td colspan="12">{{$product->subcategory->title}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Product Child Category</th>
                                    <td colspan="12">{{$product->childcategory->title}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Product Description</th>
                                    <td colspan="12">{{$product->product_description}}</td>
                                </tr>
                                <tr>
                                    <th class="col-3">Product Quantity</th>
                                    <td colspan="12">{{$product->product_quantity}}</td>
                                </tr>
                                <tr>
                                    <th class="col-1">Size</th>
                                    <th class="col-2">Product Price</th>
                                    <th class="col-3">Product Discount</th>
                                    <th class="col-1">Product Discount Type</th>
                                    <th class="col-1">Product Discount Price</th>
                                    <th class="col-1">Quantity</th>
                                </tr>
{{--                                {{dd($product)}}--}}
                                <tr>
                                    <td class="col-1">{{$product->sizeBasedProduct->large}}</td>
                                    <td class="col-2">{{$product->sizeBasedProduct->large_product_price}} </td>
                                    <td class="col-2">{{$product->sizeBasedProduct->large_product_discount}} </td>
                                    <td class="col-1">{{$product->sizeBasedProduct->large_product_discount_type}} </td>
                                    <td class="col-3">{{$product->sizeBasedProduct->large_product_discount_price}} </td>
                                    <td class="col-3"> {{$product->sizeBasedProduct->large_product_quantity}}</td>
                                </tr>
                                <tr>
                                    <td class="col-1">{{$product->sizeBasedProduct->medium}}</td>
                                    <td class="col-2">{{$product->sizeBasedProduct->medium_product_price}} </td>
                                    <td class="col-2">{{$product->sizeBasedProduct->medium_product_discount}} </td>
                                    <td class="col-1">{{$product->sizeBasedProduct->medium_product_discount_type}} </td>
                                    <td class="col-3">{{$product->sizeBasedProduct->medium_product_discount_price}} </td>
                                    <td class="col-3"> {{$product->sizeBasedProduct->medium_product_quantity}}</td>
                                </tr>
                                <tr>
                                    <td class="col-1">{{$product->sizeBasedProduct->small}}</td>
                                    <td class="col-2">{{$product->sizeBasedProduct->small_product_price}} </td>
                                    <td class="col-2">{{$product->sizeBasedProduct->small_product_discount}} </td>
                                    <td class="col-1">{{$product->sizeBasedProduct->small_product_discount_type}} </td>
                                    <td class="col-3">{{$product->sizeBasedProduct->small_product_discount_price}} </td>
                                    <td class="col-3"> {{$product->sizeBasedProduct->small_product_quantity}}</td>
                                </tr>

                                <tr>
                                    <th class="col-3">Product Image</th>
                                    <td colspan="12"><img src="{{asset($product->product_image)}}" alt="{{$product->product_name}}" width="200px" height="200px"></td>
                                </tr>
                                <tr>
                                    <th class="col-3">Product gallery</th>
                                    <td colspan="12">
                                    @foreach($product->gallery as $gallery)
                                            <img src="{{asset($gallery->gallary_image)}}" alt="{{$product->product_name}}" width="100px" height="100px">
                                        @endforeach
                                    </td>

                                </tr>


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

