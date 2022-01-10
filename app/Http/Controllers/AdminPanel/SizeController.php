<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function index(){
        $sizes = Size::all();
        return view('AdminPanel.Sizes.size',[
            "sizes" => $sizes
        ]);
    }

    public function add(){
        return view('AdminPanel.Sizes.add');
    }

    public function store(Request $request){

        $request->validate([
           'sizes'=>'required',
            'status'=>"required|in:active,inactive"
        ]);

        $size = new Size();
        $size->sizes = $request->sizes;
        $size->status = $request->status;
        $size->save();

        return back()->with('message',"New Size Added");
    }

    public function edit($id){

        $size = Size::find($id);

        return view('AdminPanel.Sizes.edit',[
            'size'=>$size
        ]);
    }

    public function update(Request $request){
        $size = Size::find($request->id);

        $size->sizes = $request->sizes;
        $size->status = $request->status;
        $size->save();

        return redirect('admins/sizes')->with('message',"Size Updated");
    }

    public function published($id){
        $size = Size::find($id);
        $size->status = 'active';
        $size->save();
        return back()->with('message',"Size Published");

    }
    public function unpublished($id){
        $size = Size::find($id);
        $size->status = 'inactive';
        $size->save();
        return back()->with('message',"Size Unpublished");

    }
    public function destroy($id){
        $size = Size::find($id);

        $size->delete();
        return back()->with('message',"Size Deleted");


    }
}
