<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

use Illuminate\Support\Facades\Auth;
class Student
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
       
        if (Auth::user()->role == 'student') {
            return redirect()->route('studentdash');
        }
        if (!Auth::check()) {
            return redirect()->route('login');
        }
    }
}
