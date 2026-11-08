<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->prepend(\App\Http\Middleware\RedirectToWww::class);
        // Statistica dei clic sulle demo: le pagine possono arrivare dalla cache
        // con un token CSRF vecchio, e qui non c'è niente da proteggere.
        $middleware->validateCsrfTokens(except: ['demo/track']);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
