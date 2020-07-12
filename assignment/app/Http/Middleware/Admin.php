<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        if(Auth::check() && auth()->user()->vaitro == 1){
            return $next($request);
        }else{
            return redirect()->back()->with('success','Tài khoản hoặc mật khẩu không đúng');
        }
    }
}
