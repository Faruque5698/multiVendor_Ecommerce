<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderBy('id','DESC')->get();
//        return $banners;
        return view('AdminPanel.Banner.banner',[
            'banners' => $banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.Banner.add_banner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:banners',
//            'slug' => 'required',
            'description' => 'required',
            'photo' => 'required|image',
            'status' => 'required|in:active,inactive',
            'condition' => 'required|in:banner,promo'
        ]);

        $banner_image = $request->file('photo');
        $imageName = $banner_image->getClientOriginalName();
        $directory = 'Admin/image/banner/';
        $imageUrl = $directory.$imageName;
        $banner_image -> move($directory,$imageName);

//        $slug = Str::slug($request->input('title'));
//        $slug_count = Banner::where($slug,'slug')->count();
//        if ($slug_count > 0){
//            $slug .= time().'-'.$slug;
//        }
//        $data['slug']=$slug;

        $banner = new Banner();
        $banner->title = $request->title;

        $banner->description = $request->description;
        $banner->photo=$imageUrl;
        $banner->status = $request->status;
        $banner->condition = $request->condition;
        $banner->save();

        return back()->with('message','New Banner Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('AdminPanel.Banner.edit_banner',[
            'banner'=>$banner
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $banner = Banner::find($request->id);
        $banner_image = $request->file('photo');

        if ($banner_image){

            unlink($banner->photo);
            $imageName = $banner_image->getClientOriginalName();
            $directory = 'Admin/image/banner/';
            $imageUrl = $directory.$imageName;
            $banner_image -> move($directory,$imageName);

            $banner->title = $request->title;
            $banner->description = $request->description;
            $banner->photo=$imageUrl;
            $banner->status = $request->status;
            $banner->condition = $request->condition;
            $banner->save();



        }else{
            $banner->title = $request->title;
            $banner->description = $request->description;
            $banner->status = $request->status;
            $banner->condition = $request->condition;
            $banner->save();



        }

        return redirect('admins/banner')->with('message','Banner Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        unlink($banner->photo);
        $banner->delete();
        return back()->with('message',' Banner Deleted');
    }

    public function unpublished($id){
        $banner = Banner::find($id);
        $banner -> status = 'inactive';
        $banner->save();
        return back()->with('message',' Banner Inactive');
    }

    public function published($id){
        $banner = Banner::find($id);
        $banner -> status = 'active';
        $banner->save();
        return back()->with('message',' Banner Active');
    }
}
