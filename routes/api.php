<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminPanel\UserController;
use App\Http\Controllers\Api\VerificationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register',[RegisterController::class,'registerApi']);
Route::post('login',[LoginController::class,'loginApi']);
//Route::get('/email/resend',[VerificationController::class,'resend'])->name('verification.resend');
//Route::get('email/verify/{id}/{hash}',[VerificationController::class,'verify'])->name('verification.verify');

Route::group(['middleware'=>['auth:api']],function (){
    Route::get('profile/{id}',[UserController::class,'profileApi']);
    Route::get('logout',[LoginController::class,'logoutApi']);
});


//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
