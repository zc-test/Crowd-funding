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
        Route::get('home', 'IndexController@index');//首页-9
        Route::resource('user','AdminController');//管理员设置-9
        Route::resource('webinfo','WebinfoController');//网站信息-9
        Route::resource('logininfo','LogininfoController');//登录日志-9
        Route::resource('userlist','UserlistController');//用户列表-9
        Route::resource('useradd','UseraddController');//增加用户-9
        Route::resource('r_access','R_accessController');//注册以及访问控制-9
        Route::resource('node','NodeController');//节点管理-9
        Route::resource('zctype','ZctypeController');//众筹类别-9
        Route::resource('zclist','ZclistController');//众筹商品列表-9
        Route::resource('zcadd','ZcaddController');//增加众筹商品-9
        Route::resource('orderlist','OrderlistController');//订单列表-9
        Route::resource('Interface','InterfaceController');//接口列表
        Route::resource('addInterface','AddInterfaceController');//增加接口-9
        Route::resource('link','LinkController');//友情链接-9
        Route::resource('img','ImgController');//图片管理
//    });
});
