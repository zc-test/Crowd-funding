<?php
/**
 * Created by PhpStorm.
 * Author: pengtao
 * Time: 2017/9/4 17:46
 * Coutent:
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class R_accessController extends Controller
{
    public function index(){
        return view('Admin.sys.r_access');
    }
}