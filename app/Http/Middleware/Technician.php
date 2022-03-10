<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Technician
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        switch(Auth::user()->role){
            case ('technician'):
                return $next($request);
                break;
            case ('student'):
                return redirect('student');
                break;
            case ('admin'):
                return redirect('admin');
                break;
            case ('standBy'):
                return redirect('standBy');
                break;
        }
    }
}
