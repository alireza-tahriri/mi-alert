<?php

namespace AlirezaTahriri\MiAlert\Middleware;

use Closure;

class MiAlertMiddleware 
{
    public function handle($request, Closure $next) {

        dd("some text");

        return $next($request);
    }
}