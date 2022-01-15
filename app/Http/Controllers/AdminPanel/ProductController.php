<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\Size;
use App\Models\SizeBasedProduct;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = Product::with('category','subcategory','childcategory','brand','gallery','sizeBasedProduct')->get();

//        return $products;

        return view('AdminPanel.product.product',[
            'products'=>$products
        ]);
    }
    public function add(){
        $brands = Brand::where('status','=','active')->get();
        $categories = Category::where('status','=','active')->get();
        $colors = Color::where('status','=','active')->get();
        $sizes = Size::where('status','=','active')->get();

        return view('AdminPanel.product.add_product',[
            'brands'=>$brands,
            'categories' => $categories,
            'colors'=>$colors,
            'sizes'=>$sizes

        ]);
    }

    public function product_details($id){
        $product = Product::with('category','subcategory','childcategory','brand','gallery','sizeBasedProduct')->find($id);

//        return $product;

        return view('AdminPanel.product.product_details',[
            'product'=>$product
        ]);
    }

    public function getSubCat(Request $request){
        $data = SubCategory::select('title','id')->where('category_id',$request->id)->get();
        return $data;
//        return response()->json($data);
    }
    public function getsubSubCat(Request $request){
        $data = ChildCategory::select('title','id')->where('subcategory_id',$request->id)->get();
        return $data;
//        return response()->json($data);
    }


    public function store(Request $request){

//        return $request;
        $request->validate([
            'brand_id'=>'required',
            'cat_id'=>'required',
            'child_cat_id'=>'required',
            'product_name'=>'required',
            'product_image'=>'required|image',
            'best_sell'=>'required|in:active,inactive',
            'new'=>'required|in:active,inactive',
            'status'=>'required|in:active,inactive',
//            'gallery_image[]'=>'required|image'

        ]);

        $large_product_quantity = $request->large_product_quantity;
        $small_product_quantity = $request->small_product_quantity;
        $medium_product_quantity = $request->medium_product_quantity;

        $total_quantity = $large_product_quantity+$small_product_quantity+$medium_product_quantity;

//        return $total;

        $pro_image = $request->file('product_image');
        $image_name = $pro_image->getClientOriginalName();
        $directory = 'Admin/image/product/';
        $imageUrl = $directory.$image_name;
        $pro_image ->move($directory,$image_name);

        $product =new Product();

        $product->cat_id = $request->cat_id;
        $product->brand_id = $request->brand_id;
        $product->sub_cat_id = $request->sub_cat_id;
        $product->child_cat_id = $request->child_cat_id;
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->product_image = $imageUrl;
        $product->product_quantity = $total_quantity;
        $product->new = $request->new;
        $product->best_sell = $request->best_sell;
        $product->status = $request->status;

        $product->save();



        $sizeBasedProduct = new SizeBasedProduct();

        $sizeBasedProduct->product_id = $product->id;
        $sizeBasedProduct->large = $request->large;
        $sizeBasedProduct->small = $request->small;
        $sizeBasedProduct->medium = $request->medium;
        $sizeBasedProduct->large_product_price = $request->large_product_price;
        $sizeBasedProduct->small_product_price = $request->small_product_price;
        $sizeBasedProduct->medium_product_price = $request->medium_product_price;
        $sizeBasedProduct->large_product_discount = $request->large_product_discount;
        $sizeBasedProduct->large_product_discount_type = $request->large_product_discount_type;
        $sizeBasedProduct->large_product_discount_price = $request->large_product_discount_price;
        $sizeBasedProduct->small_product_discount = $request->small_product_discount;
        $sizeBasedProduct->small_product_discount_type = $request->small_product_discount_type;
        $sizeBasedProduct->small_product_discount_price = $request->small_product_discount_price;
        $sizeBasedProduct->medium_product_discount = $request->medium_product_discount;
        $sizeBasedProduct->medium_product_discount_type = $request->medium_product_discount_type;
        $sizeBasedProduct->medium_product_discount_price = $request->medium_product_discount_price;
        $sizeBasedProduct->large_product_quantity = $request->large_product_quantity;
        $sizeBasedProduct->small_product_quantity = $request->small_product_quantity;
        $sizeBasedProduct->medium_product_quantity = $request->medium_product_quantity;

        $sizeBasedProduct->save();

        $gallary_image = $request->file('gallery_image');

        foreach ($gallary_image as $gallary){
            $image_name = $gallary->getClientOriginalName();
            $directory = 'Admin/image/product/gallery/';
            $imageURl = $directory.$image_name;
            $gallary ->move($directory,$image_name);

            $productGallery = new ProductGallery();

            $productGallery->product_id = $product->id;
            $productGallery->gallary_image = $imageURl;

            $productGallery->save();
        }



        return "Success";


    }
}
