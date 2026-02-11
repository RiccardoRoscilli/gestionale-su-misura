@extends('layouts.app')

@section('title', 'Gestionale Su Misura - Software Personalizzato per PMI')
@section('description', 'Sostituisci Excel con un gestionale su misura. Software personalizzato per PMI con sviluppo rapido tramite AI. Da 10€ per funzionalità.')
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
                        {{ \App\Models\ContentBlock::getContent('hero_subtitle', 'Software personalizzato per PMI. Sviluppo rapido con AI. Da 10€ per funzionalità.') }}
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
                        <a href="https://pulizie-demo.gestionale-su-misura.com" 
                           target="_blank" 
                           class="btn btn-primary w-100"
                           data-demo-type="pulizie">
                            <i class="fas fa-external-link-alt me-2"></i>
                            Prova la Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Demo E-commerce -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card demo-card h-100">
                    <div class="demo-image" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            <i class="fas fa-shopping-cart me-2 text-success"></i>
                            Gestionale E-commerce
                        </h5>
                        <p class="card-text">
                            Integrazione con Magento/Shopify per gestione ordini e magazzino.
                        </p>
                        <ul class="list-unstyled small text-muted mb-3">
                            <li><i class="fas fa-check text-success me-1"></i> Sincronizzazione ordini</li>
                            <li><i class="fas fa-check text-success me-1"></i> Gestione magazzino</li>
                            <li><i class="fas fa-check text-success me-1"></i> Tracking spedizioni</li>
                        </ul>
                        <a href="https://ordini-demo.gestionale-su-misura.it" 
                           target="_blank" 
                           class="btn btn-success w-100"
                           data-demo-type="ordini">
                            <i class="fas fa-external-link-alt me-2"></i>
                            Prova la Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Demo Cantieri -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card demo-card h-100">
                    <div class="demo-image" style="background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);"></div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">
                            <i class="fas fa-hard-hat me-2 text-warning"></i>
                            Gestionale Cantieri
                        </h5>
                        <p class="card-text">
                            Sistema per gestione cantieri e progetti edili con controllo costi.
                        </p>
                        <ul class="list-unstyled small text-muted mb-3">
                            <li><i class="fas fa-check text-success me-1"></i> Gestione progetti</li>
                            <li><i class="fas fa-check text-success me-1"></i> Controllo costi</li>
                            <li><i class="fas fa-check text-success me-1"></i> Pianificazione risorse</li>
                        </ul>
                        <a href="https://cantieri-demo.gestionale-su-misura.it" 
                           target="_blank" 
                           class="btn btn-warning w-100"
                           data-demo-type="cantieri">
                            <i class="fas fa-external-link-alt me-2"></i>
                            Prova la Demo
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
                        <a href="https://bandi-demo.gestionale-su-misura.it" 
                           target="_blank" 
                           class="btn btn-info w-100"
                           data-demo-type="bandi">
                            <i class="fas fa-external-link-alt me-2"></i>
                            Prova la Demo
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
                <h2 class="fw-bold mb-3">Prezzi Trasparenti e Accessibili</h2>
                <p class="text-muted fs-5">Modello a crediti: paghi solo per le funzionalità che usi</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Pricing Model Explanation -->
                <div class="row mb-5">
                    <div class="col-lg-4 mb-4">
                        <div class="text-center">
                            <div class="pricing-icon mb-3">
                                <i class="fas fa-coins fa-3x text-primary"></i>
                            </div>
                            <h4 class="fw-bold">Sistema a Crediti</h4>
                            <p class="text-muted">Ogni credito costa <strong>10€</strong>. Paghi solo per le funzionalità sviluppate, niente costi fissi mensili.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="text-center">
                            <div class="pricing-icon mb-3">
                                <i class="fas fa-calculator fa-3x text-success"></i>
                            </div>
                            <h4 class="fw-bold">Stima Precisa</h4>
                            <p class="text-muted">Ricevi una stima dettagliata dei crediti necessari prima di iniziare. Nessuna sorpresa.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="text-center">
                            <div class="pricing-icon mb-3">
                                <i class="fas fa-rocket fa-3x text-warning"></i>
                            </div>
                            <h4 class="fw-bold">Sviluppo Rapido</h4>
                            <p class="text-muted">Grazie all'AI, sviluppiamo in ore quello che prima richiedeva settimane.</p>
                        </div>
                    </div>
                </div>

                <!-- Example Pricing -->
                <div class="card shadow-custom mb-5">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">
                            <i class="fas fa-broom me-2"></i>
                            Esempio: Gestionale Pulizie
                        </h4>
                        <p class="mb-0 mt-2">Stima crediti per un sistema completo come la nostra demo</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5 class="fw-bold mb-3">Funzionalità Incluse:</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Gestione Clienti</strong> - Anagrafica completa con referenti</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Gestione Sedi</strong> - Sedi multiple per cliente con dettagli</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Pianificazione Interventi</strong> - Calendario, assegnazioni, stati</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Gestione Operatori</strong> - Utenti con ruoli e permessi</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Inventario Materiali</strong> - Giacenze, costi, manutenzioni</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>Dashboard e Report</strong> - Statistiche e visualizzazioni</li>
                                    <li class="mb-2"><i class="fas fa-check text-success me-2"></i> <strong>App Mobile-Friendly</strong> - Responsive design</li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <div class="pricing-breakdown">
                                    <h5 class="fw-bold mb-3">Stima Crediti:</h5>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Setup iniziale e autenticazione</span>
                                        <span class="fw-bold">8 crediti</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Gestione clienti e sedi</span>
                                        <span class="fw-bold">12 crediti</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Sistema interventi completo</span>
                                        <span class="fw-bold">18 crediti</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Gestione materiali e inventario</span>
                                        <span class="fw-bold">10 crediti</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Dashboard e report</span>
                                        <span class="fw-bold">8 crediti</span>
                                    </div>
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>Design responsive e UX</span>
                                        <span class="fw-bold">6 crediti</span>
                                    </div>
                                    <hr>
                                    <div class="d-flex justify-content-between mb-3">
                                        <span class="fw-bold fs-5">Totale Crediti</span>
                                        <span class="fw-bold fs-5 text-primary">62 crediti</span>
                                    </div>
                                    <div class="text-center">
                                        <div class="alert alert-success">
                                            <h4 class="fw-bold mb-2">
                                                <i class="fas fa-euro-sign me-2"></i>
                                                Costo Sviluppo: 620€
                                            </h4>
                                            <p class="mb-0">Costo una tantum per lo sviluppo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Hosting Costs Section -->
                <div class="card shadow-custom mb-5">
                    <div class="card-header bg-info text-white text-center">
                        <h4 class="mb-0">
                            <i class="fas fa-server me-2"></i>
                            Costi di Hosting (Mensili)
                        </h4>
                        <p class="mb-0 mt-2">Costi ricorrenti per mantenere il gestionale online</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="text-center">
                                    <div class="hosting-tier basic">
                                        <i class="fas fa-cloud fa-3x text-primary mb-3"></i>
                                        <h5 class="fw-bold">Hosting Base</h5>
                                        <div class="price-tag">€20/mese</div>
                                        <ul class="list-unstyled mt-3">
                                            <li><i class="fas fa-check text-success me-2"></i>Fino a 5 utenti</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Database MySQL</li>
                                            <li><i class="fas fa-check text-success me-2"></i>SSL incluso</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Backup giornalieri</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Supporto email</li>
                                        </ul>
                                        <small class="text-muted">Ideale per piccole aziende</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="text-center">
                                    <div class="hosting-tier professional">
                                        <i class="fas fa-server fa-3x text-warning mb-3"></i>
                                        <h5 class="fw-bold">Hosting Professionale</h5>
                                        <div class="price-tag">€35/mese</div>
                                        <ul class="list-unstyled mt-3">
                                            <li><i class="fas fa-check text-success me-2"></i>Fino a 20 utenti</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Storage file avanzato</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Performance ottimizzate</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Backup multipli</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Supporto prioritario</li>
                                        </ul>
                                        <small class="text-muted">Per aziende in crescita</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="text-center">
                                    <div class="hosting-tier enterprise">
                                        <i class="fas fa-database fa-3x text-danger mb-3"></i>
                                        <h5 class="fw-bold">Hosting Enterprise</h5>
                                        <div class="price-tag">€50/mese</div>
                                        <ul class="list-unstyled mt-3">
                                            <li><i class="fas fa-check text-success me-2"></i>Utenti illimitati</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Archivio PDF/documenti</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Server dedicato</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Backup ridondanti</li>
                                            <li><i class="fas fa-check text-success me-2"></i>Supporto 24/7</li>
                                        </ul>
                                        <small class="text-muted">Per aziende strutturate</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Cost of Ownership -->
                <div class="card border-primary mb-5">
                    <div class="card-header bg-primary text-white text-center">
                        <h4 class="mb-0">
                            <i class="fas fa-calculator me-2"></i>
                            Costo Totale di Proprietà (3 anni)
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-4 mb-3">
                                <div class="tco-card">
                                    <h6 class="fw-bold text-primary">Configurazione Base</h6>
                                    <div class="tco-breakdown">
                                        <div class="d-flex justify-content-between">
                                            <span>Sviluppo (una tantum)</span>
                                            <span>€620</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Hosting (€20 × 36 mesi)</span>
                                            <span>€720</span>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between fw-bold">
                                            <span>Totale 3 anni</span>
                                            <span class="text-primary">€1.340</span>
                                        </div>
                                        <small class="text-muted">€37/mese in media</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="tco-card">
                                    <h6 class="fw-bold text-warning">Configurazione Professionale</h6>
                                    <div class="tco-breakdown">
                                        <div class="d-flex justify-content-between">
                                            <span>Sviluppo (una tantum)</span>
                                            <span>€620</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Hosting (€35 × 36 mesi)</span>
                                            <span>€1.260</span>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between fw-bold">
                                            <span>Totale 3 anni</span>
                                            <span class="text-warning">€1.880</span>
                                        </div>
                                        <small class="text-muted">€52/mese in media</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="tco-card">
                                    <h6 class="fw-bold text-danger">Configurazione Enterprise</h6>
                                    <div class="tco-breakdown">
                                        <div class="d-flex justify-content-between">
                                            <span>Sviluppo (una tantum)</span>
                                            <span>€620</span>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <span>Hosting (€50 × 36 mesi)</span>
                                            <span>€1.800</span>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-between fw-bold">
                                            <span>Totale 3 anni</span>
                                            <span class="text-danger">€2.420</span>
                                        </div>
                                        <small class="text-muted">€67/mese in media</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Comparison -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="card border-warning">
                            <div class="card-header bg-warning text-dark text-center">
                                <h5 class="mb-0">
                                    <i class="fas fa-balance-scale me-2"></i>
                                    Confronto Costi Totali (3 anni)
                                </h5>
                            </div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-md-4">
                                        <h6 class="fw-bold text-danger">Software Standard</h6>
                                        <p class="text-muted">€50-200/mese per utente<br>Funzioni che non usi<br>Personalizzazioni costose</p>
                                        <div class="fw-bold text-danger fs-4">€3.600-14.400</div>
                                        <small class="text-muted">3 anni, 2 utenti</small>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="fw-bold text-warning">Sviluppo Tradizionale</h6>
                                        <p class="text-muted">€15.000-50.000 sviluppo<br>+ hosting + manutenzione<br>Tempi lunghi</p>
                                        <div class="fw-bold text-warning fs-4">€18.000+</div>
                                        <small class="text-muted">Solo sviluppo + hosting</small>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="fw-bold text-success">Gestionale Su Misura</h6>
                                        <p class="text-muted">Solo le funzioni che usi<br>Sviluppo rapido<br>Hosting incluso</p>
                                        <div class="fw-bold text-success fs-4">€1.340-2.420</div>
                                        <small class="text-muted">Tutto incluso, 3 anni</small>
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