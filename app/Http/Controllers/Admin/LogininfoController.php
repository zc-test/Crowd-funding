<?php
/**
 * Created by PhpStorm.
 * Author: pengtao
 * Time: 2017/9/4 17:16
 * Coutent:用户登录日志
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LogininfoController extends Controller
{
    public function index(){
        return view('Admin.sys.logininfo');
    }
}