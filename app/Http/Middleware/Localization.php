<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah session 'locale' ada?
        if ($request->session()->has('locale')) {
            // Jika ada, maka set App Locale sesuai nilai yang ada di session 'locale'.
            App::setLocale($request->session()->get('locale'));
        }

        // Lanjutkan request.
        return $next($request);
    }
}
