<?php

namespace App\Http\Middleware;

use Closure;

class VerifySelfLogin
{
    public function handle($request, Closure $next)
    {
        if (! session('name')) {
            return redirect('/admin/login')->with('errMsg','请先登录');
        }
        return $next($request);
    }
}
