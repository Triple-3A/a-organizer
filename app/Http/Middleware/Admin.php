<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
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
            case ('admin'):
                return $next($request);
                break;
            case ('student'):
                return redirect('student');
                break;
            case ('technician'):
                return redirect('technician');
                break;
            case ('standBy'):
                return redirect('standBy');
                break;
        }
    }
}
