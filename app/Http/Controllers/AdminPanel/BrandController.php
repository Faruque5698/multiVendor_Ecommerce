<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        $brands = Brand::orderBy('id','DESC')->get();
        return view('AdminPanel.brand.brand',[
            'brands'=>$brands
        ]);
    }
    public function add(){

        return view('AdminPanel.brand.add_brand');
    }
    public function store(Request $request){
        $request->validate([
           'name'=>'required',
           'description'=>'required',
           'photo'=>'required|image',
           'status'=>'required|in:active,inactive'
        ]);
        $brandImage = $request->file('photo');
        $imageName = $brandImage->getClientOriginalName();
        $directory = 'Admin/image/brand/';
        $imageUrl = $directory.$imageName;
        $brandImage -> move($directory,$imageName);

        $brand = new Brand();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $brand->logo = $imageUrl;
        $brand->status = $request->status;

        $brand->save();

        return back()->with('message','New Brand Added');
    }

    public function edit($id){
        $brand = Brand::find($id);
        return view('AdminPanel.brand.edit_brand',[
            'brand'=>$brand
        ]);
    }
    public function update(Request $request){
        $brand = Brand::find($request->id);
        $brandImage = $request->file('photo');
        if ($brandImage) {
            unlink($brand->logo);
            $imageName = $brandImage->getClientOriginalName();
            $directory = 'Admin/image/brand/';
            $imageUrl = $directory.$imageName;
            $brandImage->move($directory,$imageName);

            $brand->name = $request->name;
            $brand->description = $request->description;
            $brand->logo = $imageUrl;
            $brand->status = $request->status;
            $brand->save();

            return redirect('admins/Brand')->with('message','New Brand Added');
        } else{
            $brand->name = $request->name;
            $brand->description = $request->description;

            $brand->status = $request->status;
            $brand->save();
            return redirect('admins/Brand')->with('message','New Brand Added');

        }
    }
    public function unpublished($id){
        $brand = Brand::find($id);
        $brand->status = 'inactive';
        $brand->save();
        return back()->with('message','Brand unpublished');
    }
    public function published($id){
        $brand = Brand::find($id);
        $brand->status = 'active';
        $brand->save();
        return back()->with('message','Brand published');
    }
    public function destroy($id){
        $brand = Brand::find($id);
        unlink($brand->logo);
        $brand->delete();
        return back()->with('message','Brand Deleted');

    }
}
