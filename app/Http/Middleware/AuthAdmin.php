<?php

namespace App\Http\Middleware;

use Closure;
use Route, URL, Auth;
class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(auth()->guard('admin')->guest()){
            if($request->ajax()){
                return response()->json([
                    'status' => 1,
                    'msg'    => '您的登录已失效，请重新登录',
                ]);
            }else{
                return redirect('/');
            }
        }
        return $next($request);
    }
}
