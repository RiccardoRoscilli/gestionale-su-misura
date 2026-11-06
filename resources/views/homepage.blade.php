@extends('layouts.app')

@section('title', 'Gestionale Su Misura - Software Personalizzato per PMI')
@section('description', 'Sostituisci Excel con un gestionale su misura. Software personalizzato per PMI con sviluppo rapido tramite AI.')
@section('keywords', 'gestionale personalizzato, software PMI, AI, automazione, Excel, gestionale aziendale')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-6">
                <div class="fade-in-up">
                    <h1 class="hero-title">
                        {{ \App\Models\ContentBlock::getContent('hero_title', 'Sostituisci Excel con un Gestionale Su Misura') }}
                    </h1>
                    <p class="hero-subtitle">
                        {{ \App\Models\ContentBlock::getContent('hero_subtitle', 'Software personalizzato per PMI. Sviluppo rapido con AI.') }}
                    </p>
                    <div class="d-flex flex-column flex-sm-row gap-3">
                        <a href="#preventivo" class="btn btn-primary btn-lg">
                            <i class="fas fa-rocket me-2"></i>
                            Richiedi la Tua Demo
                        </a>
                        <a href="#demo" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-play me-2"></i>
                            Vedi le Demo
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="text-center">
                    <div class="p-5 rounded shadow-custom" 
                         style="background: linear-gradient(135deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.2) 100%); backdrop-filter: blur(10px);">
                        <i class="fas fa-chart-line fa-5x text-white mb-3"></i>
                        <h4 class="text-white">Dashboard Gestionale</h4>
                        <p class="text-white-50">Visualizza i tuoi dati in tempo reale</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Problem/Solution Section -->
<section id="problema" class="problem-solution-section">
    <div class="container">
        <div class="row">
            <!-- Problem -->
            <div class="col-lg-4 mb-5">
                <div class="text-center">
                    <div class="section-icon problem-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3 class="fw-bold mb-3">
                        {{ \App\Models\ContentBlock::getContent('problem_title', 'Il Problema di Excel') }}
                    </h3>
                    <p class="text-muted">
                        {{ \App\Models\ContentBlock::getContent('problem_content', 'Excel va bene per iniziare, ma quando l\'azienda cresce servono strumenti professionali. Non è multiutente, si corrompe facilmente e non permette automazioni avanzate.') }}
                    </p>
                </div>
            </div>

            <!-- Solution -->
            <div class="col-lg-4 mb-5" id="soluzione">
                <div class="text-center">
                    <div class="section-icon solution-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3 class="fw-bold mb-3">
                        {{ \App\Models\ContentBlock::getContent('solution_title', 'La Soluzione Personalizzata') }}
                    </h3>
                    <p class="text-muted">
                        {{ \App\Models\ContentBlock::getContent('solution_content', 'Un gestionale su misura risolve i tuoi problemi specifici. Multiutente, sicuro, con automazioni complete. Niente funzioni inutili che paghi ma non usi.') }}
                    </p>
                </div>
            </div>

            <!-- AI Innovation -->
            <div class="col-lg-4 mb-5">
                <div class="text-center">
                    <div class="section-icon ai-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3 class="fw-bold mb-3">
                        {{ \App\Models\ContentBlock::getContent('ai_title', 'Innovazione AI Agentica') }}
                    </h3>
                    <p class="text-muted">
                        {!! \App\Models\ContentBlock::getContent('ai_content', 'Grazie all\'AI Agentica, quello che prima costava decine di migliaia di euro e mesi di sviluppo, ora è accessibile a tutte le PMI. <span class="text-decoration-underline" data-bs-toggle="tooltip" data-bs-placement="top" title="Minimum Viable Product - Versione base funzionante del software con le caratteristiche essenziali">MVP*</span> funzionante in ore, non mesi.') !!}
                    </p>
                    <small class="text-muted fst-italic">
                        * MVP = Minimum Viable Product (Versione base funzionante del software)
                    </small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Demo Section -->
<section id="demo" class="demo-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold mb-3">Prova le Nostre Demo Gratuite</h2>
                <p class="text-muted fs-5">Vedi in azione i nostri gestionali personalizzati</p>
            </div>
        </div>
        
        <div class="row">
            <!-- Demo Pulizie -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card demo-card h-100">
                    <div class="demo-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            <i class="fas fa-broom me-2 text-primary"></i>
                            Gestionale Pulizie
                        </h5>
                        <p class="card-text">
                            Sistema completo per aziende di pulizie: clienti, sedi, interventi e materiali.
                        </p>
                        <ul class="list-unstyled small text-muted mb-3">
                            <li><i class="fas fa-check text-success me-1"></i> Gestione clienti e sedi</li>
                            <li><i class="fas fa-check text-success me-1"></i> Pianificazione interventi</li>
                            <li><i class="fas fa-check text-success me-1"></i> Inventario materiali</li>
                        </ul>
                        <a href="{{ route('demo.pulizie') }}" 
                           class="btn btn-primary w-100"
                           data-demo-type="pulizie">
                            <i class="fas fa-info-circle me-2"></i>
                            Scopri la Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Demo Gestione Task -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card demo-card h-100">
                    <div class="demo-image" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            <i class="fas fa-tasks me-2 text-success"></i>
                            Gestione Task
                        </h5>
                        <p class="card-text">
                            Sistema completo per gestione progetti, task e collaborazione team.
                        </p>
                        <ul class="list-unstyled small text-muted mb-3">
                            <li><i class="fas fa-check text-success me-1"></i> Gestione progetti</li>
                            <li><i class="fas fa-check text-success me-1"></i> Assegnazione task</li>
                            <li><i class="fas fa-check text-success me-1"></i> Tracking avanzamento</li>
                        </ul>
                        <a href="{{ route('demo.task') }}" 
                           class="btn btn-success w-100"
                           data-demo-type="task">
                            <i class="fas fa-info-circle me-2"></i>
                            Scopri la Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Demo Menu Ristorante -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card demo-card h-100">
                    <div class="demo-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            <i class="fas fa-utensils me-2 text-warning"></i>
                            Menu Ristorante
                        </h5>
                        <p class="card-text">
                            Sistema per digitalizzare il menu: carica PDF, genera QR code, clienti visualizzano.
                        </p>
                        <ul class="list-unstyled small text-muted mb-3">
                            <li><i class="fas fa-check text-success me-1"></i> Carica menu PDF</li>
                            <li><i class="fas fa-check text-success me-1"></i> Genera QR code</li>
                            <li><i class="fas fa-check text-success me-1"></i> Visualizzazione mobile</li>
                        </ul>
                        <a href="{{ route('demo.menu') }}" 
                           class="btn btn-warning w-100"
                           data-demo-type="menu">
                            <i class="fas fa-info-circle me-2"></i>
                            Scopri la Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Demo Bandi -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card demo-card h-100">
                    <div class="demo-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            <i class="fas fa-gavel me-2 text-info"></i>
                            Gestionale Bandi
                        </h5>
                        <p class="card-text">
                            Sistema per gestione bandi e gare pubbliche con tracking scadenze.
                        </p>
                        <ul class="list-unstyled small text-muted mb-3">
                            <li><i class="fas fa-check text-success me-1"></i> Ricerca bandi</li>
                            <li><i class="fas fa-check text-success me-1"></i> Gestione scadenze</li>
                            <li><i class="fas fa-check text-success me-1"></i> Tracking partecipazioni</li>
                        </ul>
                        <a href="{{ route('demo.bandi') }}" 
                           class="btn btn-info w-100"
                           data-demo-type="bandi">
                            <i class="fas fa-info-circle me-2"></i>
                            Scopri la Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Demo Access Info -->
        <div class="row mt-4">
            <div class="col-12">
                <div class="alert alert-success">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h5 class="alert-heading mb-2">
                                <i class="fas fa-key me-2"></i>
                                Accesso Facilitato alle Demo
                            </h5>
                            <p class="mb-0">
                                Tutte le demo utilizzano le stesse credenziali per un accesso rapido. 
                                Le credenziali sono visibili direttamente nella pagina di login di ogni demo.
                            </p>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <div class="demo-credentials p-3 bg-white rounded">
                                <small class="text-muted d-block">Credenziali Demo:</small>
                                <strong>Email:</strong> admin@demo.it<br>
                                <strong>Password:</strong> demo123
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="prezzi" class="pricing-section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold mb-3">Il Tuo Gestionale in Settimane, Non in Mesi</h2>
                <p class="text-muted fs-5">Prezzo fisso, data di consegna garantita. Se sforiamo, paghiamo noi.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Timeline -->
                <div class="row mb-5 text-center">
                    <div class="col-md-4 mb-4">
                        <div class="pricing-icon mb-3">
                            <i class="fas fa-bolt fa-3x text-warning"></i>
                        </div>
                        <h4 class="fw-bold">48 ore</h4>
                        <p class="text-muted">Ci racconti come lavori: entro 48 ore hai un <strong>prototipo funzionante gratuito</strong> con i tuoi dati di esempio. Se non ti convince, non paghi nulla.</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="pricing-icon mb-3">
                            <i class="fas fa-calendar-check fa-3x text-primary"></i>
                        </div>
                        <h4 class="fw-bold">Data garantita</h4>
                        <p class="text-muted">Prezzo fisso e data di consegna scritta nel contratto. Vedi i progressi ogni settimana, non a fine progetto.</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="pricing-icon mb-3">
                            <i class="fas fa-rocket fa-3x text-success"></i>
                        </div>
                        <h4 class="fw-bold">2–8 settimane</h4>
                        <p class="text-muted">Grazie all'AI consegniamo in settimane quello che uno sviluppo tradizionale fa in 3–6 mesi.</p>
                    </div>
                </div>

                <!-- Packages -->
                <div class="row mb-4">
                    <div class="col-lg-4 mb-4">
                        <div class="hosting-tier basic h-100 text-center">
                            <i class="fas fa-seedling fa-3x text-primary mb-3"></i>
                            <h5 class="fw-bold">Start</h5>
                            <div class="price-tag">€2.900</div>
                            <p class="fw-bold text-primary mb-0"><i class="fas fa-clock me-1"></i>Consegna in 2 settimane</p>
                            <ul class="list-unstyled mt-3 text-start">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Fino a 3 moduli</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Es. anagrafiche, calendario, report</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Utenti con ruoli e permessi</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Mobile-friendly</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Importazione dati da Excel</li>
                            </ul>
                            <small class="text-muted">Per chi vuole uscire da Excel subito</small>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="hosting-tier professional h-100 text-center border border-2 border-warning">
                            <span class="badge bg-warning text-dark mb-2">Il più scelto</span><br>
                            <i class="fas fa-briefcase fa-3x text-warning mb-3"></i>
                            <h5 class="fw-bold">Business</h5>
                            <div class="price-tag">€5.900</div>
                            <p class="fw-bold text-warning mb-0"><i class="fas fa-clock me-1"></i>Consegna in 4 settimane</p>
                            <ul class="list-unstyled mt-3 text-start">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Fino a 8 moduli</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Integrazioni: fatturazione elettronica, e-commerce, corrieri</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Dashboard e report avanzati</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Documenti PDF automatici</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Formazione del personale</li>
                            </ul>
                            <small class="text-muted">Per PMI con processi strutturati</small>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="hosting-tier enterprise h-100 text-center">
                            <i class="fas fa-industry fa-3x text-danger mb-3"></i>
                            <h5 class="fw-bold">ERP</h5>
                            <div class="price-tag">da €9.900</div>
                            <p class="fw-bold text-danger mb-0"><i class="fas fa-clock me-1"></i>Consegna in 6–8 settimane</p>
                            <ul class="list-unstyled mt-3 text-start">
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Gestionale completo</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Magazzino, produzione, distinte base</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Terzisti, DDT, multi-sede</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Integrazioni con i tuoi sistemi</li>
                                <li class="mb-1"><i class="fas fa-check text-success me-2"></i>Migrazione dati completa</li>
                            </ul>
                            <small class="text-muted">Per aziende che vogliono un ERP su misura</small>
                        </div>
                    </div>
                </div>

                <!-- Speed Guarantee -->
                <div class="alert alert-success text-center shadow-custom mb-5 p-4">
                    <h4 class="fw-bold mb-2"><i class="fas fa-shield-alt me-2"></i>Garanzia Velocità</h4>
                    <p class="mb-0 fs-5">Se consegniamo in ritardo, per <strong>ogni settimana di ritardo hai un mese di hosting gratis</strong>. Una data, non una promessa.</p>
                </div>

                <!-- Hosting -->
                <div class="card shadow-custom mb-5">
                    <div class="card-header bg-info text-white text-center">
                        <h4 class="mb-0"><i class="fas fa-server me-2"></i>Hosting (Mensile)</h4>
                        <p class="mb-0 mt-2">Separato dallo sviluppo: paghi solo le risorse che servono al tuo gestionale</p>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-4 mb-3">
                                <h5 class="fw-bold">Base</h5>
                                <div class="price-tag fs-4 fw-bold text-primary">€50/mese</div>
                                <ul class="list-unstyled mt-3">
                                    <li><i class="fas fa-check text-success me-2"></i>Fino a 10 utenti</li>
                                    <li><i class="fas fa-check text-success me-2"></i>SSL e backup giornalieri</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Aggiornamenti di sicurezza</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h5 class="fw-bold">Professionale</h5>
                                <div class="price-tag fs-4 fw-bold text-primary">€75/mese</div>
                                <ul class="list-unstyled mt-3">
                                    <li><i class="fas fa-check text-success me-2"></i>Fino a 30 utenti</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Storage documenti esteso</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Backup multipli</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h5 class="fw-bold">Dedicato</h5>
                                <div class="price-tag fs-4 fw-bold text-primary">€100/mese</div>
                                <ul class="list-unstyled mt-3">
                                    <li><i class="fas fa-check text-success me-2"></i>Utenti illimitati</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Server dedicato</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Backup ridondanti</li>
                                </ul>
                            </div>
                        </div>
                        <p class="text-center text-muted mb-0 mt-2">
                            <i class="fas fa-info-circle me-1"></i>
                            Nuove funzionalità e modifiche non sono incluse nell'hosting: le preventiviamo sempre a parte, secondo specifiche, con prezzo fisso e data di consegna.
                        </p>
                    </div>
                </div>

                <!-- Comparison -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card border-warning">
                            <div class="card-header bg-warning text-dark text-center">
                                <h5 class="mb-0"><i class="fas fa-stopwatch me-2"></i>Quanto Tempo Ti Serve per Partire?</h5>
                            </div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-md-4 mb-3">
                                        <h6 class="fw-bold text-danger">Software Standard</h6>
                                        <p class="text-muted">Pronto subito, ma è la tua azienda<br>che deve adattarsi al software<br>Licenze per utente, per sempre</p>
                                        <div class="fw-bold text-danger fs-4">Mesi di adattamento</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <h6 class="fw-bold text-warning">Sviluppo Tradizionale</h6>
                                        <p class="text-muted">Analisi, specifiche, sviluppo, test<br>€15.000–50.000<br>Vedi il risultato solo alla fine</p>
                                        <div class="fw-bold text-warning fs-4">3–6 mesi</div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <h6 class="fw-bold text-success">Gestionale Su Misura</h6>
                                        <p class="text-muted">Prototipo gratis in 48 ore<br>Solo le funzioni che usi<br>Prezzo fisso, data garantita</p>
                                        <div class="fw-bold text-success fs-4">2–8 settimane</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lead Form Section -->
<section id="preventivo" class="lead-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-3">
                        {{ \App\Models\ContentBlock::getContent('form_title', 'Richiedi la Tua Demo in Poche Ore') }}
                    </h2>
                    <p class="text-muted fs-5">
                        {{ \App\Models\ContentBlock::getContent('form_subtitle', 'Descrivi le tue esigenze, riceverai una demo personalizzata in 24h') }}
                    </p>
                </div>

                <div class="card shadow-custom">
                    <div class="card-body p-5">
                        <form id="lead-form" action="{{ route('leads.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Nome e Cognome *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Telefono</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="company" class="form-label">Azienda</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="description" class="form-label">Descrivi le tue esigenze *</label>
                                <textarea class="form-control" id="description" name="description" rows="5" 
                                          placeholder="Raccontaci di cosa hai bisogno: che tipo di azienda hai, quali processi vuoi automatizzare, quanti utenti useranno il sistema, quali funzionalità sono prioritarie..." required></textarea>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-rocket me-2"></i>
                                    Richiedi la Tua Demo
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Initialize Bootstrap tooltips
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });

    // Form submission handling
    document.getElementById('lead-form').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        // Show loading state
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Invio in corso...';
        submitBtn.disabled = true;
        
        // Submit form via fetch
        fetch(this.action, {
            method: 'POST',
            body: new FormData(this),
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Show success message
                this.innerHTML = `
                    <div class="alert alert-success">
                        <i class="fas fa-check-circle me-2"></i>
                        Grazie! La tua richiesta è stata inviata. Ti contatteremo entro 24 ore con la tua demo personalizzata.
                    </div>
                `;
            } else {
                throw new Error(data.message || 'Errore durante l\'invio');
            }
        })
        .catch(error => {
            // Show error message
            alert('Errore durante l\'invio. Riprova più tardi.');
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
        });
    });
</script>
@endpush