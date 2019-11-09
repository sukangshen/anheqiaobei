<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'wechat', 'namespace' => 'Api'], function () {
    require base_path('routes/wechatApi.php');
});


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    require base_path('routes/adminApi.php');
});


