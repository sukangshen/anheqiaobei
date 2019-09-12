
<?php
/**
 * Desc:
 * User: kangshensu@gmail.com
 * Date: 2019-09-12
 */

/**
 * 引入Auth中间件 验证是否授权
 */
Route::group(['middleware' => 'api.jwt.auth'], function (){
    //Token
    Route::post('logout', 'UserController@logout');
    Route::post('me', 'UserController@me');
    Route::post('refresh', 'UserController@refresh');
    //微信
    Route::any('auth', 'UserController@auth');
    Route::any('callback', 'UserController@callback');

    //微信授权相关
    Route::any('auth', 'UserController@auth');
    Route::any('callback', 'UserController@callback');

    //七牛云图片上传
    Route::post('img', 'UploadController@img');

});

//获取城市列表
Route::get('getAddressList', 'AddressController@getAddressList');