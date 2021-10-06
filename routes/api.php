<?php

use App\Http\Controllers\API\V1\CategoryController;
use App\Http\Controllers\API\V1\LoginController;
use App\Http\Controllers\API\V1\ProductController;
use App\Http\Controllers\API\V1\SaleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['prefix'=>'v1'],
    function(){
    Route::post('/register',[LoginController::class,'register']);
    Route::post('/login',[LoginController::class,'login']);

    Route::group(['middleware'=>'auth:api'],
    function(){
        Route::post('/logout',[LoginController::class,'logout']);

        //Route for admin
    Route::group(['middleware'=> 'is_admin','as' => 'admin'],

    function(){
    Route::get('/users',[
        App\http\Controllers\API\v1\admin\UserController::class
        ,
        'index'
    ]);

    Route::apiResource('/sale', SaleController::class);

    Route::post('/registers',[
        App\http\Controllers\API\v1\admin\UserController::class,'registers']);

    Route::post('/products/store',[ProductController::class,'store']);
});
    Route::group([
    'as' => 'user'
    ],function(){

});

Route::apiResource('/category', CategoryController::class);


});
    });

