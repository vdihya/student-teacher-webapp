<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class teacherMiddleware
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
if ($request->user() && $request->user()->role != 'teacher')
{
return new Response(view('unauthorized')->with('role', 'TEACHERS'));
}
return $next($request);
}
}
