<?php
/**
 * Created by PhpStorm.
 * Author: pengtao
 * Time: 2017/9/4 17:24
 * Coutent:用户列表
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserlistController extends Controller
{
    public function index(){
        return view('Admin.user.userlist');
    }
}