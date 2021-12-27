<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BackEndController extends Controller
{
    public function admin(){
        return view('AdminPanel.Dahboard.dashboard');
    }

    public function redirects(){
        $role = Auth::user()->role->active;
    }
}
