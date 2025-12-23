<!-- SEO Meta Tags -->
<meta name="description" content="{{ $description ?? 'Software gestionale personalizzato per PMI. Sviluppo rapido con AI. Da 10€ per funzionalità.' }}">
<meta name="keywords" content="{{ $keywords ?? 'gestionale, software personalizzato, PMI, AI, automazione, Excel' }}">
<meta name="author" content="Gestionale Su Misura">
<meta name="robots" content="index, follow">
<link rel="canonical" href="{{ url()->current() }}">

<!-- Open Graph Meta Tags -->
<meta property="og:title" content="{{ $title ?? config('app.name') }}">
<meta property="og:description" content="{{ $description ?? 'Software gestionale personalizzato per PMI' }}">
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ $image ?? asset('images/og-image.jpg') }}">
<meta property="og:site_name" content="{{ config('app.name') }}">
<meta property="og:locale" content="it_IT">

<!-- Twitter Card Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title ?? config('app.name') }}">
<meta name="twitter:description" content="{{ $description ?? 'Software gestionale personalizzato per PMI' }}">
<meta name="twitter:image" content="{{ $image ?? asset('images/og-image.jpg') }}">

<!-- Schema.org Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Gestionale Su Misura",
  "url": "{{ config('app.url') }}",
  "logo": "{{ asset('images/logo.png') }}",
  "description": "{{ $description ?? 'Software gestionale personalizzato per PMI. Sviluppo rapido con AI.' }}",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+39-340-123-4567",
    "contactType": "customer service",
    "email": "info@gestionale-su-misura.it"
  },
  "sameAs": [
    "https://www.linkedin.com/company/gestionale-su-misura",
    "https://twitter.com/gestionalesumisura"
  ]
}
</script>