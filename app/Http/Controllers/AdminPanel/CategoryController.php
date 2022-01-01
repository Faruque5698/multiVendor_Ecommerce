<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::orderBy('id','DESC')->get();
        $total_category = Category::count();
        return view('AdminPanel.category.category_list',[
            'categories'=>$categories,
            'total_category'=>$total_category
        ]);
    }

    public function create(){
        return view('AdminPanel.category.add_category');
    }
    public function store(Request $request){

    }



    public function unpublished($id){
        $category = Category::find($id);
        $category -> status = 'inactive';
        $category->save();
        return back()->with('message',' Category Inactive');
    }
    public function published($id){
        $category = Category::find($id);
        $category -> status = 'active';
        $category->save();
        return back()->with('message',' Category Active');
    }
    public function destroy($id){
        $category = Category::find($id);
//        $category_image = $category->photo;
//        if ($category_image) {
////            unlink($category->photo);
//            $category->delete();
//        }else{
            $category->delete();
//        }
        return back()->with('message',' Category Deleted');
    }
    public function edit($id){

    }
}
