<?php
/**
 * Created by PhpStorm.
 * Author: pengtao
 * Time: 2017/9/4 16:43
 * Coutent:网站信息设置
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebinfoController extends Controller
{
    public function index(){
        return view('Admin.sys.webinfo');
    }
}