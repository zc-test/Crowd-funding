<?php
/**
 * Created by PhpStorm.
 * Author: pengtao
 * Time: 2017/8/22 10:55
 * Coutent:前端首页控制器
 */
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class IndexController extends  Controller{
    public function index(){
        echo "this is larvael home";
    }
}