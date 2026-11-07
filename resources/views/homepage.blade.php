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
                        {{ \App\Models\ContentBlock::getContent('solution_content', 'Un gestionale su misura risolve i tuoi problemi specifici. Multiutente, con automazioni complete e niente funzioni inutili che paghi ma non usi. Gira nel cloud, accessibile ovunque, e la sicurezza dei tuoi dati è la nostra priorità.') }}
                    </p>
                    <ul class="list-unstyled text-start d-inline-block small mb-0">
                        <li class="mb-1"><i class="fas fa-cloud text-success me-2"></i>Server cloud sempre disponibili</li>
                        <li class="mb-1"><i class="fas fa-database text-success me-2"></i>Backup automatici giornalieri</li>
                        <li class="mb-1"><i class="fas fa-shield-alt text-success me-2"></i>Firewall e protezione antivirus/antimalware</li>
                        <li class="mb-1"><i class="fas fa-lock text-success me-2"></i>Connessione cifrata SSL</li>
                        <li class="mb-1"><i class="fas fa-sync-alt text-success me-2"></i>Aggiornamenti di sicurezza costanti</li>
                        <li class="mb-1"><i class="fas fa-user-shield text-success me-2"></i>Accessi con utenti, ruoli e permessi</li>
                    </ul>
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
                <h2 class="fw-bold mb-3">Prova le Nostre Demo</h2>
                <p class="text-muted fs-5">Vedi in azione i nostri gestionali personalizzati</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <!-- Demo Pulizie -->
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4">
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
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card demo-card h-100">
                    <div class="demo-image" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            <i class="fas fa-gavel me-2 text-info"></i>
                            Gestionale Bandi
                        </h5>
                        <p class="card-text">
                            Per enti e consulenti: bandi, beneficiari, piano finanziario e stanziamenti.
                        </p>
                        <ul class="list-unstyled small text-muted mb-3">
                            <li><i class="fas fa-check text-success me-1"></i> Bandi e beneficiari</li>
                            <li><i class="fas fa-check text-success me-1"></i> Misure e voci di spesa</li>
                            <li><i class="fas fa-check text-success me-1"></i> Report in PDF</li>
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
            <!-- Demo Officina -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card demo-card h-100">
                    <div class="demo-image" style="background: linear-gradient(135deg, #cb2d3e 0%, #ef473a 100%);"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            <i class="fas fa-car me-2 text-danger"></i>
                            Gestionale Officina
                        </h5>
                        <p class="card-text">
                            Per officine, carrozzerie e gommisti: veicoli con QR code, storico e preventivi.
                        </p>
                        <ul class="list-unstyled small text-muted mb-3">
                            <li><i class="fas fa-check text-success me-1"></i> Registro veicoli</li>
                            <li><i class="fas fa-check text-success me-1"></i> QR code per ogni mezzo</li>
                            <li><i class="fas fa-check text-success me-1"></i> Preventivi in PDF</li>
                        </ul>
                        <a href="{{ route('demo.officina') }}" 
                           class="btn btn-danger w-100"
                           data-demo-type="officina">
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
                                Tutte le demo usano le stesse credenziali per un accesso rapido.
                                Nella pagina "Scopri la Demo" trovi anche gli account per gli altri ruoli.
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
                        <p class="mb-0 mt-2">Separato dallo sviluppo: paghi solo le risorse che servono al tuo gestionale. Ogni piano include tutto quello del precedente.</p>
                    </div>
                    <div class="card-body">
                        <!-- Incluso in tutti i piani -->
                        <div class="rounded-3 border border-info bg-info-subtle p-3 p-md-4 mb-4">
                            <h5 class="fw-bold text-center mb-3">
                                <i class="fas fa-shield-alt text-info me-2"></i>Incluso in tutti i piani: cloud sicuro e gestito da noi
                            </h5>
                            <div class="row g-3 text-center">
                                <div class="col-6 col-md">
                                    <i class="fas fa-cloud fa-2x text-info mb-2"></i>
                                    <div class="fw-semibold">Cloud</div>
                                    <small class="text-muted">Sempre online, accessibile ovunque</small>
                                </div>
                                <div class="col-6 col-md">
                                    <i class="fas fa-database fa-2x text-info mb-2"></i>
                                    <div class="fw-semibold">Backup giornalieri</div>
                                    <small class="text-muted">Dati salvati ogni giorno e ripristinabili</small>
                                </div>
                                <div class="col-6 col-md">
                                    <i class="fas fa-user-shield fa-2x text-info mb-2"></i>
                                    <div class="fw-semibold">Sicurezza gestita</div>
                                    <small class="text-muted">Firewall, antivirus e SSL configurati da noi</small>
                                </div>
                                <div class="col-6 col-md">
                                    <i class="fas fa-sync-alt fa-2x text-info mb-2"></i>
                                    <div class="fw-semibold">Aggiornamenti continui</div>
                                    <small class="text-muted">Patch di sicurezza applicate senza che tu debba pensarci</small>
                                </div>
                                <div class="col-12 col-md">
                                    <i class="fas fa-robot fa-2x text-info mb-2"></i>
                                    <div class="fw-semibold">Audit di sicurezza con IA</div>
                                    <small class="text-muted">Controlli periodici del codice e del server con l'intelligenza artificiale</small>
                                </div>
                            </div>
                        </div>

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
                                    <li class="fw-semibold text-info-emphasis mb-1"><i class="fas fa-layer-group me-2"></i>Tutto il piano Base, più:</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Fino a 30 utenti</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Storage documenti esteso</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Backup multipli</li>
                                </ul>
                            </div>
                            <div class="col-md-4 mb-3">
                                <h5 class="fw-bold">Dedicato</h5>
                                <div class="price-tag fs-4 fw-bold text-primary">€100/mese</div>
                                <ul class="list-unstyled mt-3">
                                    <li class="fw-semibold text-info-emphasis mb-1"><i class="fas fa-layer-group me-2"></i>Tutto il Professionale, più:</li>
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
                <div class="card border-warning shadow-custom mb-5">
                    <div class="card-header bg-warning text-dark text-center">
                        <h4 class="mb-0"><i class="fas fa-balance-scale me-2"></i>Confronto: Noi vs le Alternative</h4>
                        <p class="mb-0 mt-1">Quanto tempo ti serve per partire, e quanto ti costa?</p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive d-none d-md-block">
                            <table class="table table-bordered align-middle text-center mb-0 small">
                                <thead>
                                    <tr>
                                        <th scope="col" style="min-width:150px"></th>
                                        <th scope="col" class="text-danger" style="min-width:180px"><i class="fas fa-box me-1"></i>Software Standard</th>
                                        <th scope="col" class="text-warning" style="min-width:180px"><i class="fas fa-hourglass-half me-1"></i>Sviluppo Tradizionale</th>
                                        <th scope="col" class="bg-success text-white" style="min-width:180px"><i class="fas fa-rocket me-1"></i>Gestionale Su Misura</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-start">Tempo per essere operativi</th>
                                        <td><i class="fas fa-times-circle text-danger me-1"></i>Mesi per adattare l'azienda al software</td>
                                        <td><i class="fas fa-times-circle text-danger me-1"></i>3–6 mesi</td>
                                        <td class="bg-success-subtle fw-semibold"><i class="fas fa-check-circle text-success me-1"></i>2–8 settimane</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-start">Quando vedi il risultato</th>
                                        <td><i class="fas fa-minus-circle text-warning me-1"></i>Subito, ma è uguale per tutti</td>
                                        <td><i class="fas fa-times-circle text-danger me-1"></i>Solo a fine progetto</td>
                                        <td class="bg-success-subtle fw-semibold"><i class="fas fa-check-circle text-success me-1"></i>Prototipo gratis in 48 ore</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-start">Funzioni</th>
                                        <td><i class="fas fa-times-circle text-danger me-1"></i>Generiche: paghi anche quelle che non usi</td>
                                        <td><i class="fas fa-minus-circle text-warning me-1"></i>Su misura</td>
                                        <td class="bg-success-subtle fw-semibold"><i class="fas fa-check-circle text-success me-1"></i>Su misura, solo quelle che usi</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-start">Costo di sviluppo</th>
                                        <td><i class="fas fa-minus-circle text-warning me-1"></i>Nessuno</td>
                                        <td><i class="fas fa-times-circle text-danger me-1"></i>€15.000–50.000, spesso a consuntivo</td>
                                        <td class="bg-success-subtle fw-semibold"><i class="fas fa-check-circle text-success me-1"></i>Da €2.900, prezzo fisso</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-start">Costi ricorrenti</th>
                                        <td><i class="fas fa-times-circle text-danger me-1"></i>Licenze per utente, per sempre</td>
                                        <td><i class="fas fa-minus-circle text-warning me-1"></i>Manutenzione a parte</td>
                                        <td class="bg-success-subtle fw-semibold"><i class="fas fa-check-circle text-success me-1"></i>Solo hosting, da €50/mese</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-start">Data di consegna</th>
                                        <td><i class="fas fa-minus-circle text-warning me-1"></i>—</td>
                                        <td><i class="fas fa-times-circle text-danger me-1"></i>Spesso slitta</td>
                                        <td class="bg-success-subtle fw-semibold"><i class="fas fa-check-circle text-success me-1"></i>Garantita nel contratto</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Mobile: un blocco per criterio -->
                        <div class="d-md-none">
                            <div class="border-bottom px-3 py-3">
                                <div class="fw-bold mb-2">Tempo per essere operativi</div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Software standard</span><span class="text-end"><i class="fas fa-times-circle text-danger me-1"></i>Mesi per adattare l'azienda al software</span></div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Sviluppo tradizionale</span><span class="text-end"><i class="fas fa-times-circle text-danger me-1"></i>3–6 mesi</span></div>
                                <div class="d-flex justify-content-between gap-2 small rounded bg-success-subtle px-2 py-1 fw-semibold"><span class="text-success text-nowrap">Noi</span><span class="text-end"><i class="fas fa-check-circle text-success me-1"></i>2–8 settimane</span></div>
                            </div>
                            <div class="border-bottom px-3 py-3">
                                <div class="fw-bold mb-2">Quando vedi il risultato</div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Software standard</span><span class="text-end"><i class="fas fa-minus-circle text-warning me-1"></i>Subito, ma è uguale per tutti</span></div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Sviluppo tradizionale</span><span class="text-end"><i class="fas fa-times-circle text-danger me-1"></i>Solo a fine progetto</span></div>
                                <div class="d-flex justify-content-between gap-2 small rounded bg-success-subtle px-2 py-1 fw-semibold"><span class="text-success text-nowrap">Noi</span><span class="text-end"><i class="fas fa-check-circle text-success me-1"></i>Prototipo gratis in 48 ore</span></div>
                            </div>
                            <div class="border-bottom px-3 py-3">
                                <div class="fw-bold mb-2">Funzioni</div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Software standard</span><span class="text-end"><i class="fas fa-times-circle text-danger me-1"></i>Generiche: paghi anche quelle che non usi</span></div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Sviluppo tradizionale</span><span class="text-end"><i class="fas fa-minus-circle text-warning me-1"></i>Su misura</span></div>
                                <div class="d-flex justify-content-between gap-2 small rounded bg-success-subtle px-2 py-1 fw-semibold"><span class="text-success text-nowrap">Noi</span><span class="text-end"><i class="fas fa-check-circle text-success me-1"></i>Su misura, solo quelle che usi</span></div>
                            </div>
                            <div class="border-bottom px-3 py-3">
                                <div class="fw-bold mb-2">Costo di sviluppo</div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Software standard</span><span class="text-end"><i class="fas fa-minus-circle text-warning me-1"></i>Nessuno</span></div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Sviluppo tradizionale</span><span class="text-end"><i class="fas fa-times-circle text-danger me-1"></i>€15.000–50.000, spesso a consuntivo</span></div>
                                <div class="d-flex justify-content-between gap-2 small rounded bg-success-subtle px-2 py-1 fw-semibold"><span class="text-success text-nowrap">Noi</span><span class="text-end"><i class="fas fa-check-circle text-success me-1"></i>Da €2.900, prezzo fisso</span></div>
                            </div>
                            <div class="border-bottom px-3 py-3">
                                <div class="fw-bold mb-2">Costi ricorrenti</div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Software standard</span><span class="text-end"><i class="fas fa-times-circle text-danger me-1"></i>Licenze per utente, per sempre</span></div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Sviluppo tradizionale</span><span class="text-end"><i class="fas fa-minus-circle text-warning me-1"></i>Manutenzione a parte</span></div>
                                <div class="d-flex justify-content-between gap-2 small rounded bg-success-subtle px-2 py-1 fw-semibold"><span class="text-success text-nowrap">Noi</span><span class="text-end"><i class="fas fa-check-circle text-success me-1"></i>Solo hosting, da €50/mese</span></div>
                            </div>
                            <div class="border-bottom px-3 py-3">
                                <div class="fw-bold mb-2">Data di consegna</div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Software standard</span><span class="text-end"><i class="fas fa-minus-circle text-warning me-1"></i>—</span></div>
                                <div class="d-flex justify-content-between gap-2 small mb-1"><span class="text-muted text-nowrap">Sviluppo tradizionale</span><span class="text-end"><i class="fas fa-times-circle text-danger me-1"></i>Spesso slitta</span></div>
                                <div class="d-flex justify-content-between gap-2 small rounded bg-success-subtle px-2 py-1 fw-semibold"><span class="text-success text-nowrap">Noi</span><span class="text-end"><i class="fas fa-check-circle text-success me-1"></i>Garantita nel contratto</span></div>
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
                if (typeof window.trackLead === 'function') {
                    window.trackLead();
                }
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