<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\ChildCategory;
use App\Models\Color;
use App\Models\Size;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('AdminPanel.product.product');
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
}
