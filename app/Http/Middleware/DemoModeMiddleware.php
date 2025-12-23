<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoModeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Only inject demo banner for HTML responses in demo mode
        if (config('demo.enabled') && 
            $response instanceof \Illuminate\Http\Response &&
            str_contains($response->headers->get('Content-Type', ''), 'text/html')) {
            
            $content = $response->getContent();
            
            // Inject demo banner after opening body tag
            if (str_contains($content, '<body')) {
                $demoBanner = view('components.demo-banner')->render();
                $content = preg_replace('/(<body[^>]*>)/', '$1' . $demoBanner, $content);
                $response->setContent($content);
            }
        }

        return $response;
    }
}
