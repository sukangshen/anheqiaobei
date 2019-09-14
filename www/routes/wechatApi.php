
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

    //发表帖子
    Route::post('profileCreate', 'ProfileController@profileCreate');

    //校验发布权限
    Route::get('profileCreateCheck', 'ProfileController@profileCreateCheck');

});

//微信授权
Route::any('auth', 'UserController@auth');
Route::any('callback', 'UserController@callback');


//获取城市列表
Route::get('getAddressList', 'AddressController@getAddressList');
//获取帖子列表
Route::get('profileSearch', 'ProfileController@profileSearch');
//七牛云图片上传
Route::post('img', 'UploadController@img');