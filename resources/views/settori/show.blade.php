@extends('layouts.app')

@section('title', $page['title'])
@section('description', $page['description'])

@section('content')
@php($isFree = $page['free'] ?? false)
<!-- Intestazione -->
<section class="py-5 bg-light border-bottom">
    <div class="container py-lg-4">
        <div class="row justify-content-center text-center">
            <div class="col-lg-9">
                <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-3">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $page['h1'] }}</li>
                    </ol>
                </nav>
                <i class="fas {{ $page['icon'] }} fa-3x text-{{ $page['color'] }} mb-3"></i>
                <h1 class="display-5 fw-bold mb-3">{{ $page['h1'] }}</h1>
                <p class="lead text-muted mb-4">{{ $page['lead'] }}</p>
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                    @if(isset($page['external']))
                        <a href="{{ $page['external']['url'] }}" target="_blank" rel="noopener" class="btn btn-{{ $page['color'] }} btn-lg">
                            <i class="fas fa-external-link-alt me-2"></i>{{ $page['external']['label'] }}
                        </a>
                    @endif
                    @if(isset($page['demo']))
                        <a href="{{ route($page['demo']['route']) }}" class="btn btn-{{ $page['color'] }} btn-lg">
                            <i class="fas fa-play me-2"></i>{{ $page['demo']['label'] }}
                        </a>
                    @endif
                    <a href="{{ route('home') }}#preventivo" class="btn btn-outline-secondary btn-lg">
                        <i class="fas fa-rocket me-2"></i>{{ $isFree ? 'Ti serve qualcosa su misura?' : 'Richiedi un preventivo' }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Problemi -->
<section class="py-5">
    <div class="container">
        <h2 class="h3 fw-bold text-center mb-4">Ti riconosci in una di queste situazioni?</h2>
        <div class="row justify-content-center">
            @foreach($page['problems'] as $problem)
                <div class="col-md-4 mb-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <i class="fas fa-exclamation-circle text-danger me-2"></i>{{ $problem }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Funzioni -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="h3 fw-bold text-center mb-2">Cosa fa</h2>
        <p class="text-center text-muted mb-5">
            {{ $isFree ? 'Tutto quello che serve per gestire la coda dal telefono.' : 'Le funzioni che trovi già nella demo, pronte da adattare al tuo modo di lavorare.' }}
        </p>
        <div class="row">
            @foreach($page['features'] as [$icon, $name, $text])
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex">
                        <i class="fas {{ $icon }} fa-2x text-{{ $page['color'] }} me-3 mt-1" style="width: 40px;"></i>
                        <div>
                            <h3 class="h6 fw-bold mb-1">{{ $name }}</h3>
                            <p class="text-muted mb-0">{{ $text }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Su misura -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="card border-{{ $page['color'] }} shadow-sm">
                    <div class="card-body p-4">
                        <h2 class="h4 fw-bold mb-3">
                            <i class="fas fa-magic text-{{ $page['color'] }} me-2"></i>{{ $isFree ? 'Gratis, e se serve di più' : 'Su misura per la tua azienda' }}
                        </h2>
                        <p class="mb-3">{{ $page['custom'] }}</p>
                        @unless($isFree)
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-bolt text-warning me-2"></i><strong>Prototipo gratuito in 48 ore</strong> con i tuoi dati di esempio</li>
                                <li class="mb-2"><i class="fas fa-calendar-check text-primary me-2"></i><strong>Prezzo fisso e data di consegna</strong> scritti nel contratto</li>
                                <li class="mb-0"><i class="fas fa-cloud text-info me-2"></i><strong>Nel cloud</strong> con backup giornalieri, sicurezza e aggiornamenti gestiti da noi</li>
                            </ul>
                        @endunless
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Domande frequenti -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h2 class="h3 fw-bold text-center mb-4">Domande frequenti</h2>
                <div class="accordion" id="faq">
                    @foreach($page['faqs'] as $i => [$question, $answer])
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button {{ $i ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq-{{ $i }}" aria-expanded="{{ $i ? 'false' : 'true' }}">
                                    {{ $question }}
                                </button>
                            </h3>
                            <div id="faq-{{ $i }}" class="accordion-collapse collapse {{ $i ? '' : 'show' }}" data-bs-parent="#faq">
                                <div class="accordion-body">{{ $answer }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chiamata all'azione -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="h3 fw-bold mb-3">{{ $isFree ? 'Ti serve un gestionale per il resto della tua attività?' : 'Vuoi un gestionale così, fatto sui tuoi processi?' }}</h2>
        <p class="text-muted mb-4">Raccontaci come lavori: entro 48 ore ricevi un prototipo gratuito.</p>
        <a href="{{ route('home') }}#preventivo" class="btn btn-primary btn-lg">
            <i class="fas fa-rocket me-2"></i>Richiedi il prototipo gratuito
        </a>
    </div>
</section>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(fn ($faq) => [
        '@type' => 'Question',
        'name' => $faq[0],
        'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq[1]],
    ], $page['faqs']),
], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endsection
