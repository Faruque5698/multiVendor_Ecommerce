<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminPanel\BackEndController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admins','middleware'=>'auth'],function(){
    Route::get('/',[BackEndController::class,'admin'])->name('admin');
});
