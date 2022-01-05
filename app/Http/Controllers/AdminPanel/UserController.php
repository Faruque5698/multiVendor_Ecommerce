<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('AdminPanel.Users.user_list',[
            'users' => $users
        ]);
    }
    public function roleManage($id){

    }

    public function user_details($id){

    }

    public function user_edit($id){
        $user = User::find($id);
        return view('AdminPanel.Users.edit_user',[
            'user'=>$user
        ]);
    }

    public function user_update(Request $request){
        $request->validate([
            'full_name' => 'required',
            'photo'=>'image',
            'role'=>'required|in:admin,customer',
            'status'=>'required|in:active,inactive'
        ]);

        $user = User::find($request->id);
        $userImage = $request->file('photo');
        $imageName = $userImage->getClientOriginalName();
        $directory = 'Admin/image/user/';
        $imageUrl = $directory.$imageName;
        $userImage->move($directory,$imageName);

        $user->full_name = $request->full_name;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->photo = $imageUrl;
        $user->role = $request->role;
        $user->status = $request->status;

        $user->save();

        return back()->with('message','Profile Updated');

    }
}
