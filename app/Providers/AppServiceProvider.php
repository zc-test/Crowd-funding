<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        view()->composer('Public.menu',function($view){
            $menuary =array(
                '系统管理'=>array('icon'=>'xe62d;','submenu'=>array('user'=>'管理员设置','webinfo'=>'网站信息','logininfo'=>'登录信息管理','r_access'=>'注册及访问控制','node'=>'节点管理')),
                '用户中心'=>array('icon'=>'xe62d;','submenu'=>array('userlist'=>'用户列表','useradd'=>'用户增加')),
                '众筹管理'=>array('icon'=>'xe62d;','submenu'=>array('zctype'=>'众筹类别','zclist'=>'众筹列表','zcadd'=>'增加众筹项目')),
                '订单管理'=>array('icon'=>'xe62d;','submenu'=>array('orderlist'=>'订单列表')),
                '第三方信息管理'=>array('icon'=>'xe62d;','submenu'=>array('Interface'=>'接口列表','addInterface'=>'增加接口')),
                '前端设置'=>array('icon'=>'xe62d;','submenu'=>array('link'=>'友情链接','img'=>'图片管理')),
            );
            $view->with('menu',$menuary);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
