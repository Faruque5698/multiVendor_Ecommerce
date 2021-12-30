<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminPanel\BackEndController;
use App\Http\Controllers\AdminPanel\BannerController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admins','middleware'=>'auth'],function(){
    Route::get('/',[BackEndController::class,'admin'])->name('admin');

    //banner routes

    Route::resource('/banner',BannerController::class);
    Route::get('banner/unpublished/{id}',[BannerController::class,'unpublished'])->name('banner_unpublished');
    Route::get('banner/published/{id}',[BannerController::class,'published'])->name('banner_published');
    Route::get('banner/destroy/{id}',[BannerController::class,'destroy'])->name('banner_destroy');
    Route::get('banner/edit/{id}',[BannerController::class,'edit'])->name('banner_edit');
    Route::post('banner/update/',[BannerController::class,'update'])->name('banner_update');

});
