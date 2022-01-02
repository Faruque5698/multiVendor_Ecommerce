<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminPanel\BackEndController;
use App\Http\Controllers\AdminPanel\BannerController;
use App\Http\Controllers\AdminPanel\CategoryController;
use App\Http\Controllers\AdminPanel\SubCategoryController;

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

    //category Route

    Route::get('/category_list',[CategoryController::class,'index'])->name('category_list');
    Route::get('/category/add',[CategoryController::class,'create'])->name('add_category');
    Route::post('category/store/',[CategoryController::class,'store'])->name('category_store');
    Route::get('category/unpublished/{id}',[CategoryController::class,'unpublished'])->name('category_unpublished');
    Route::get('category/published/{id}',[CategoryController::class,'published'])->name('category_published');
    Route::get('category/destroy/{id}',[CategoryController::class,'destroy'])->name('category_destroy');
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category_edit');
    Route::get('category/store/',[CategoryController::class,'store'])->name('category_store');
    Route::post('category/update/',[CategoryController::class,'update'])->name('category_update');

    //Sub category

    Route::get('/subcategory',[SubCategoryController::class,'index'])->name('subcategory');
    Route::get('/subcategory/add',[SubCategoryController::class,'add'])->name('add_subcategory');
    Route::post('/subcategory/store/',[SubCategoryController::class,'store'])->name('subcategory_store');
    Route::get('subcategory/unpublished/{id}',[SubCategoryController::class,'unpublished'])->name('subcategory_unpublished');
    Route::get('subcategory/published/{id}',[SubCategoryController::class,'published'])->name('subcategory_published');
    Route::get('subcategory/destroy/{id}',[SubCategoryController::class,'destroy'])->name('subcategory_destroy');
    Route::get('subcategory/edit/{id}',[SubCategoryController::class,'edit'])->name('subcategory_edit');
//    Route::get('category/store/',[CategoryController::class,'store'])->name('category_store');
//    Route::post('category/update/',[CategoryController::class,'update'])->name('category_update');



});
