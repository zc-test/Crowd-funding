<?php
/**
 * Created by PhpStorm.
 * Author: pengtao
 * Time: 2017/9/4 17:35
 * Coutent:
 */


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddInterfaceController extends Controller
{
    public function index(){
        return view('Admin.third.addInterface');
    }
}