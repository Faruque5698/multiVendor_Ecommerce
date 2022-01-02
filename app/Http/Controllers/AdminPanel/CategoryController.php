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
        $request->validate([
           'title' => 'required',
            'summary' => 'required',
            'photo' => ' image|nullable',
            'status' => 'required|in:active,inactive'
        ]);

        $category_image = $request->file('photo');
        if ($category_image){
            $imageName = $category_image->getClientOriginalName();
            $directory = 'Admin/image/category/';
            $imageUrl = $directory.$imageName;
            $category_image -> move($directory,$imageName);

            $category = new Category();
            $category->title = $request->title;
            $category->summary = $request->summary;
            $category->status = $request->status;
            $category->photo = $imageUrl ;
            $category->save();
        }else{
            $category = new Category();
            $category->title = $request->title;
            $category->summary = $request->summary;
            $category->status = $request->status;
//            $category->title = $imageUrl ;
            $category->save();
        }

        return back()->with('message','New Category added');
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
            unlink($category->photo);
            $category->delete();

        return back()->with('message',' Category Deleted');
    }
    public function edit($id){
        $category = Category::find($id);
        return view('AdminPanel.category.edit_category',[
            'category'=>$category
        ]);
    }
    public function update(Request $request){
        $category = Category::find($request->id);
        $category_image = $request->file('photo');
        if ($category_image){
            $imageName = $category_image->getClientOriginalName();
            $directory = 'Admin/image/category/';
            $imageUrl = $directory.$imageName;
            $category_image -> move($directory,$imageName);

//            $category = new Category();
            $category->title = $request->title;
            $category->summary = $request->summary;
            $category->status = $request->status;
            $category->photo = $imageUrl ;
            $category->save();
        }else{
//            $category = new Category();
            $category->title = $request->title;
            $category->summary = $request->summary;
            $category->status = $request->status;
//            $category->title = $imageUrl ;
            $category->save();
        }

        return redirect('admins/category_list')->with('message','New Category added');
    }
}
