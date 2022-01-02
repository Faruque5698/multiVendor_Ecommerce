<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index(){
        $subcats = SubCategory::orderBy('id','DESC')->with('category')->get();
//        return $subcats;
        return view('AdminPanel.sub_category.sub_category',[
            'subcats'=>$subcats
        ]);
    }

    public function add(){
        $categories = Category::where('status','=','active')->get();
        return view('AdminPanel.sub_category.add_subCategory',[
            'categories'=>$categories
        ]);
    }
    public function  store(Request $request){
        $request->validate([
            'title' => 'required',
            'category_id'=>'required|integer',
            'summary' => 'required',
            'status' => 'required|in:active,inactive'
        ]);

        $sub_cat = new SubCategory();
        $sub_cat->title = $request->title;
        $sub_cat->category_id = $request->category_id;
        $sub_cat->summary = $request->summary;
        $sub_cat->status = $request->status;
        $sub_cat->save();

        return back()->with('message','New Sub Category added');
    }

    public function unpublished($id){
        $subcat = SubCategory::find($id);
        $subcat->status='inactive';
        $subcat->save();

        return back()->with('message','Subcategory Unpublished');
    }
    public function published($id){
        $subcat = SubCategory::find($id);
        $subcat->status='active';
        $subcat->save();

        return back()->with('message','Subcategory Published');
    }
    public function  destroy($id){
        $subcat = SubCategory::find($id);
        $subcat->delete();
        return back()->with('message','Subcategory Deleted');
    }

    public function edit($id){
        $subcat = SubCategory::find($id);
        $categories = Category::where('status','=','active')->get();

        return view('AdminPanel.sub_category.edit_subcategory',[
            'subcat' => $subcat,
            'categories' => $categories
        ]);

    }
}
