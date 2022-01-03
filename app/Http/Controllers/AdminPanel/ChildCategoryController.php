<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\ChildCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ChildCategoryController extends Controller
{
    public function index(){
        $childs=ChildCategory::with('subcategory')->get();
//        return $childs;
        return view('AdminPanel.child_category.child_cat',[
            'childs'=>$childs
        ]);
    }

    public function add(){
        $subcategories = SubCategory::where('status','=','active')->get();
        return view('AdminPanel.child_category.add_child_cat',[
            'subcategories' => $subcategories
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'subcategory_id'=>'required|integer',
            'summary' => 'required',
            'status' => 'required|in:active,inactive'
        ]);


        $child = new ChildCategory();
        $child->title = $request->title;
        $child->subcategory_id = $request->subcategory_id;
        $child->summary = $request->summary;
        $child->status = $request->status;
        $child->save();

        return back()->with('message','New Child Category added');
    }

    public function edit($id){
        $subcategories = SubCategory::where('status','=','active')->get();
        $child = ChildCategory::find($id);
        return view('AdminPanel.child_category.edit_child_cat',[
            'child'=>$child,
            'subcategories' => $subcategories
        ]);

    }

    public function update(Request $request){
        $child = ChildCategory::find($request->id);
        $child->title = $request->title;
        $child->subcategory_id = $request->subcategory_id;
        $child->summary = $request->summary;
        $child->status = $request->status;
        $child->save();

        return redirect('admins/childcategory')->with('message','New Child Category Updated');
    }
    public function unpublished($id){
        $child = ChildCategory::find($id);
        $child->status='inactive';
        $child->save();

        return back()->with('message','Child category Unpublished');
    }
    public function published($id){
        $child = ChildCategory::find($id);
        $child->status='active';
        $child->save();

        return back()->with('message','Child category published');
    }
    public function destroy($id){
        $child = ChildCategory::find($id);
//        $child->status='active';
        $child->delete();

        return back()->with('message','Child category Deleted');
    }
}
