<?php
/**
 * Created by PhpStorm.
 * Author: pengtao
 * Time: 2017/8/22 10:49
 * Coutent:后台首页
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
class IndexController extends  Controller{
    public function index(){
        return view('Admin.index');

    }
}

