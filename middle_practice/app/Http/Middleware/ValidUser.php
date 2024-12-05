<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ValidUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        echo "<h2 class='bg-primary'>We Are In Middleware ValidUser</h2>";
            return $next($request);


    }
    public function terminate(Request $request, Response  $respones): void
    {
        // echo "<h2 class='bg-danger'>I Come From Terminate Middleware</h2>";
    }
}
