<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function index(){

        $colors = Color::all();

     return view('AdminPanel.Color.colors',[
         'colors'=>$colors
     ]);
    }
    public function add(){
        return view("AdminPanel.Color.add_color");
    }
    public function store(Request $request){
        $request->validate([
            'color_name'=>'required',
            'color_code'=>'required',
            'status'=>'required|in:active,inactive'
        ]);
        $color = new Color();

        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;
        $color->status = $request->status;
        $color->save();

        return back()->with('message','New Color added');

    }

    public function edit($id){
        $color = Color::find($id);
        return view('AdminPanel.Color.edit',[
           'color' => $color
        ]);
    }
    public function update(Request $request){
        $color = Color::find($request->id);
        $request->validate([
            'color_name'=>'required',
            'color_code'=>'required',
            'status'=>'required|in:active,inactive'
        ]);
//        $color = new Color();

        $color->color_name = $request->color_name;
        $color->color_code = $request->color_code;
        $color->status = $request->status;
        $color->save();

        return redirct('admins/colors')->with('message','New Color added');
    }

    public function unpublished($id){
        $color = Color::find($id);
        $color->status = 'inactive';
        $color->save();

        return back()->with('message','Unpublished color');
    }
    public function published($id){
        $color = Color::find($id);
        $color->status = 'active';
        $color->save();

        return back()->with('message','Published color');
    }
    public function destroy($id){
        $color = Color::find($id);
       $color->delete();

        return back()->with('message','Delete color');
    }
}
