<?php

namespace App\Http\Middleware;
use  Illuminate\App\Http\Middleware\Session;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class Localization
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
        if ($request->has('locale')) {
            session()->put('locale', $request->locale);
        }

        app()->setLocale(session('locale'));

        return $next($request);
    }
}
