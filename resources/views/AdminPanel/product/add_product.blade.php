

@extends('AdminPanel.master')

@section('title')

    Add New Products

@endsection

@section('content')


    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><strong>Add New Products</strong></h1>
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
                <h3 class="card-title">Add New Products</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('store_products')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-row">
                        <select class="form-control @error('brand_id') is-invalid @enderror" id="brand_id" name="brand_id">
                            <option>Select Brand</option>
                            @foreach($brands as $brand)

                                <option value="{{$brand->id}}">{{$brand->name}}</option>

                            @endforeach


                        </select>

                    </div>
                    @error('brand_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <div class="form-row">
                        <select class="form-control productCategory @error('cat_id') is-invalid @enderror" id="cat_id" name="cat_id">
                            <option>Select Category</option>
                            @foreach($categories as $category)

                                <option value="{{$category->id}}">{{$category->title}}</option>

                            @endforeach


                        </select>

                    </div>
                    @error('cat_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <div class="form-row">
                        <select class="form-control subCategory" name="sub_cat_id" id="sub_cat_id">
                            <option disabled="true" selected="true">---Select Sub category---</option>

                        </select>

                    </div>
                    @error('sub_cat_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <div class="form-row">
                        <select class="form-control subsubCategory" name="child_cat_id">
                            <option disabled="true" selected="true">---Select Child Category---</option>

                        </select>

                    </div>
                    @error('subcategory_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
                    <div class="form-row">
                        <div class="col-12">
                            <input type="text" class="form-control @error('product_name') is-invalid @enderror" name="product_name"  placeholder="Product Name">
                        </div>
                        @error('product_name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-12">
                            <textarea class="form-control @error('product_description') is-invalid @enderror" rows="6" cols="6" name="product_description"></textarea>
                        </div>
                        @error('product_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <select class="form-control @error('color_id') is-invalid @enderror" id="" name="color_id">
                            <option>Select Color</option>
                            @foreach($colors as $color)

                                <option value="{{$color->id}}">{{$color->color_name}}></option>

                            @endforeach


                        </select>

                    </div>
                    @error('color_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <hr>
{{--                    <div class="form-row">--}}
{{--                        <div class="col-12">--}}
{{--                            <input type="text" class="form-control @error('product_discount') is-invalid @enderror" name="product_name"  placeholder="Product Name">--}}
{{--                        </div>--}}
{{--                        @error('product_name')--}}
{{--                        <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <hr>--}}

                    <div class="form-row">
                        <div class="col-1">
                            <input type="text" class="form-control @error('large') is-invalid @enderror" name="large" value="Size : L"  readonly>

                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control @error('large_product_price') is-invalid @enderror" name="large_product_price"  placeholder="Large Product Price">
                            @error('large_product_price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('large_product_discount') is-invalid @enderror" name="large_product_discount"  placeholder="Large Product Discount">

                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('large_product_discount') is-invalid @enderror" name="large_product_discount_price"  placeholder="Large Product After Discount Price">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('large_product_quantity') is-invalid @enderror" name="large_product_quantity"  placeholder="Large Product After quantity">
                        </div>
                    </div>
                    <hr>

                    <div class="form-row">
                        <div class="col-1">
                            <input type="text" class="form-control @error('large') is-invalid @enderror" name="medium" value="Size : M"  readonly>

                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control @error('medium_product_price') is-invalid @enderror" name="medium_product_price"  placeholder="Medium Product Price">
                            @error('medium_product_price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('product_discount') is-invalid @enderror" name="medium_product_discount"  placeholder="Medium Product Discount">

                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('product_discount') is-invalid @enderror" name="medium_product_discount_price"  placeholder="Medium Product After Discount Price">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('medium_product_quantity') is-invalid @enderror" name="medium_product_quantity"  placeholder="Large Product After quantity">
                        </div>
                    </div>
                    <hr>
                    <div class="form-row">
                        <div class="col-1">
                            <input type="text" class="form-control @error('small') is-invalid @enderror" name="small" value="Size : S"  readonly>

                        </div>
                        <div class="col-2">
                            <input type="text" class="form-control @error('small_product_price') is-invalid @enderror" name="small_product_price"  placeholder="Small Product Price">
                            @error('large_product_price')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('product_discount') is-invalid @enderror" name="small_product_discount"  placeholder="Small Product Discount">

                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('product_discount') is-invalid @enderror" name="small_product_discount_price"  placeholder="Small Product After Discount Price">
                        </div>
                        <div class="col-3">
                            <input type="text" class="form-control @error('small_product_quantity') is-invalid @enderror" name="small_product_quantity"  placeholder="small Product After quantity">
                        </div>
                    </div>
{{--                    <hr>--}}
{{--                    <div class="form-row">--}}
{{--                        <div class="col-3">--}}
{{--                            <input type="text" class="form-control @error('large') is-invalid @enderror" name="large" value="Size : L"  disabled>--}}

{{--                        </div>--}}
{{--                        <div class="col-3">--}}
{{--                            <input type="text" class="form-control @error('large_product_price') is-invalid @enderror" name="large_product_price"  placeholder="Large Product Price">--}}
{{--                            @error('large_product_price')--}}
{{--                            <div class="alert alert-danger">{{ $message }}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <div class="col-3">--}}
{{--                            <input type="text" class="form-control @error('product_discount') is-invalid @enderror" name="large_product_discount"  placeholder="Large Product Discount">--}}

{{--                        </div>--}}
{{--                        <div class="col-3">--}}
{{--                            <input type="text" class="form-control @error('product_discount') is-invalid @enderror" name="large_product_discount_price"  placeholder="Large Product After Discount Price">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <hr>
                    <div class="form-row">
                        <div class="col-12">
                            <input type="file" class="form-control @error('product_image') is-invalid @enderror" name="product_image">
                        </div>
                        @error('product_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>

                    <div class="form-row">
                        <div class="col-2">
                            <label for="">Gallery Images:</label>
                        </div>
                        <div class="col-8">
                            <input type="file" class="form-control @error('gallery_image[]') is-invalid @enderror" name="gallery_image[]" multiple>
                        </div>
                        @error('gallery_image[]')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <hr>
                    <div class="form-row">
                        <select class="form-control @error('best_sell') is-invalid @enderror" id="" name="best_sell">
                            <option selected>Best sell</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>

                        </select>

                    </div>
                    @error('best_sell')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror




                    {{--                        <hr>--}}
                    {{--                        <div class=" ml-5">--}}
                    {{--                            <img style="width: 50%;border: 1px solid; border-radius: 10px;" id="viewer" src="{{asset('admin')}}/image/image.jpg" alt="banner image">--}}
                    {{--                        </div>--}}
                    <hr>
                    <div class="form-row">
                        <select class="form-control @error('new') is-invalid @enderror" id="" name="new">
                            <option selected>New Arrivals</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>

                        </select>

                    </div>
                    @error('new')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror




                    {{--                        <hr>--}}
                    {{--                        <div class=" ml-5">--}}
                    {{--                            <img style="width: 50%;border: 1px solid; border-radius: 10px;" id="viewer" src="{{asset('admin')}}/image/image.jpg" alt="banner image">--}}
                    {{--                        </div>--}}
                    <hr>

                    <div class="form-row">
                        <select class="form-control @error('status') is-invalid @enderror" id="" name="status">
                            <option selected>Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>

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
                        <input type="submit" class="form-control btn btn-primary" name="btn" id="btn" value="Add New Product">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('change','.productCategory',function () {
                console.log('hmm its change')
                var sub_cat=$('select[name="sub_cat_id"]')
                var category_id=$(this).val();
                // console.log(category_id);
                var div=$(this).parent();
                // var op=" ";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findsubcategory')!!}',
                    data:{'id':category_id},
                    success:function (data) {
                        // console.log('success');
                        //
                        // console.log(data);
                        // console.log(data.length);
                        var op= `<option disabled="true" selected="true">---Select Sub category---</option>`;
                        for (var i=0;i<data.length;i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].title + '</option>';
                        }
                        sub_cat.html(op);
                    },
                    error:function () {
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(document).on('change','.subCategory',function () {
                // console.log('hmm its change')
                var sub_sub_cat=$('select[name="child_cat_id"]')
                var subcategory_id=$(this).val();
                // console.log(subcategory_id);
                var div=$(this).parent();
                // var op=" ";
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('findsubsubcategory')!!}',
                    data:{'id':subcategory_id},
                    success:function (data) {
                        console.log('success');
                                //
                        console.log(data);
                        console.log(data.length);
                        var op= `<option disabled="true" selected="true">---Select Child Category---</option>`;
                        for (var i=0;i<data.length;i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].title + '</option>';
                        }
                        sub_sub_cat.html(op);
                    },
                    error:function () {
                    }
                });
            });
        });
    </script>

@endsection

