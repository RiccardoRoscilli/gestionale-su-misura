<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Porta gestionale-su-misura.com (senza www) su https://www.gestionale-su-misura.com.
 * Fatto a livello applicazione perché su Cloudways la regola in .htaccess non scatta.
 */
class RedirectToWww
{
    public function handle(Request $request, Closure $next): Response
    {
        if (strtolower($request->getHost()) === 'gestionale-su-misura.com') {
            return redirect()->away('https://www.gestionale-su-misura.com' . $request->getRequestUri(), 301);
        }

        return $next($request);
    }
}
