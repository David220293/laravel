<?php

namespace app\Http\Middleware;

use Closure;

class VerifyAge
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
        $edad = $request->route('edad');
        if ($edad > 0) {
           return $next($request);
        }else{
            return redirect()->to('error');
        }



    }
}
