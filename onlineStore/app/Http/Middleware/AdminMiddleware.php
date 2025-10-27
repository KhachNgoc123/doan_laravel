<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('admin')){
            //neeus chuwa dangw nhap chuyen ve trang login
            return redirect()->route('admin.login')->with('error', 'vui long dang nhap');

        }
        //neu da dang nhap thi tiep
        return $next($request);
    }
}
