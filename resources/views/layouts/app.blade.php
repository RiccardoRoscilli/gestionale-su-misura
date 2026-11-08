<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Gestionale Su Misura'))</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="@yield('description', 'Software gestionale personalizzato per PMI. Sviluppo rapido con AI.')">
    <meta name="keywords" content="@yield('keywords', 'gestionale, software personalizzato, PMI, AI, automazione, Excel')">
    <meta name="author" content="Gestionale Su Misura">
    @php($canonical = rtrim(config('app.url'), '/') . (request()->path() === '/' ? '/' : '/' . request()->path()))
    <link rel="canonical" href="{{ $canonical }}">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Gestionale Su Misura: il tuo gestionale in 2–8 settimane')">
    <meta property="og:description" content="@yield('og_description', 'Software gestionale su misura per PMI: prezzo fisso, prototipo in 48 ore, nel cloud con backup e sicurezza gestiti.')">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Gestionale Su Misura">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="it_IT">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="@yield('og_image', asset('images/og-image.jpg'))">
    
    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Gestionale Su Misura: il tuo gestionale in 2–8 settimane')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Software gestionale su misura per PMI: prezzo fisso, prototipo in 48 ore, nel cloud con backup e sicurezza gestiti.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('images/og-image.jpg'))">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <!-- Additional Styles -->
    @stack('styles')
</head>
<body>
    <!-- Navigation -->
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Cookie Consent -->
    @include('components.cookie-consent')

    <!-- Provenienza della visita, inviata col modulo -->
    @include('components.attribution')

    <!-- Scripts -->
    @stack('scripts')
    
    <!-- Analytics -->
    @include('components.analytics')
</body>
</html>