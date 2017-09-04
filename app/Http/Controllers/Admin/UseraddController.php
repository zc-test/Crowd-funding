<?php
/**
 * Created by PhpStorm.
 * Author: pengtao
 * Time: 2017/9/4 17:45
 * Coutent:
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UseraddController extends Controller
{
    public function index(){

        return view('admin.user.useradd');
    }
}
