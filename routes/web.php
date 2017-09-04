<?php

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

//前台路由组
Route::group(['namespace' => 'Home'], function(){
    // 控制器在 "App\Http\Controllers\Home" 命名空间下
    Route::get('/', 'IndexController@index');
});

//后台路由组
Route::group(['namespace' => 'Admin','as'=>'admin.','prefix'=>'admin'], function(){
    Route::get('login','LoginController@index');
    Route::post('logindo',['as'=>'login.login','uses'=>'LoginController@login']);
//    Route::group(['middleware'=>'auth.admin'],function(){
        Route::get('home', 'IndexController@index');
        Route::resource('user','AdminController');
//    });
});
