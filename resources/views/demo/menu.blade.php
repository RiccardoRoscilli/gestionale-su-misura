@extends('layouts.app')

@section('title', 'Demo Menu Ristorante')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-utensils text-warning me-3"></i>
                    Demo Menu Ristorante
                </h1>
                <p class="lead text-muted">
                    Sistema semplice ed efficace per digitalizzare il menu del tuo ristorante
                </p>
            </div>

            <!-- Descrizione -->
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="h4 mb-3">
                        <i class="fas fa-info-circle text-warning me-2"></i>
                        Cosa puoi fare nella demo
                    </h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Carica Menu PDF:</strong> Upload del menu del ristorante in formato PDF
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Genera QR Code:</strong> Creazione automatica di un QR code univoco per il tuo menu
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Visualizzazione Mobile:</strong> I clienti scansionano il QR e visualizzano il menu sul loro smartphone
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Aggiornamenti Istantanei:</strong> Carica un nuovo PDF e il menu si aggiorna automaticamente
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Stampa QR Code:</strong> Scarica e stampa il QR code per posizionarlo sui tavoli
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Nessuna App Richiesta:</strong> I clienti visualizzano il menu direttamente nel browser
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Credenziali di Accesso -->
            <div class="card shadow-sm border-warning mb-4">
                <div class="card-header bg-warning text-dark">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-key me-2"></i>
                        Credenziali di Accesso
                    </h3>
                </div>
                <div class="card-body p-4">
                    <p class="mb-3">Puoi accedere alla demo con i seguenti account:</p>
                    
                    <!-- Admin -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h5 class="h6 text-warning mb-2">
                            <i class="fas fa-user-shield me-2"></i>
                            Amministratore Ristorante
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">admin@demo.it</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">demo123</code>
                            </div>
                        </div>
                        <small class="text-muted">Accesso al pannello di gestione: carica PDF, genera QR code, scarica QR per stampa</small>
                    </div>

                    <!-- Cliente -->
                    <div class="p-3 bg-light rounded">
                        <h5 class="h6 text-warning mb-2">
                            <i class="fas fa-mobile-alt me-2"></i>
                            Cliente (Visualizzazione Menu)
                        </h5>
                        <p class="mb-2">
                            <strong>Accesso pubblico:</strong> Scansiona il QR code per visualizzare il menu
                        </p>
                        <small class="text-muted">Nessuna registrazione richiesta - basta scansionare il QR code con la fotocamera dello smartphone</small>
                    </div>
                </div>
            </div>

            <!-- Pulsante Accesso Demo -->
            <div class="text-center">
                <a href="https://menu-demo.gestionale-su-misura.it" 
                   target="_blank" 
                   class="btn btn-warning btn-lg px-5 py-3">
                    <i class="fas fa-external-link-alt me-2"></i>
                    Accedi alla Demo
                </a>
                <p class="text-muted mt-3 small">
                    <i class="fas fa-info-circle me-1"></i>
                    La demo si aprirà in una nuova finestra
                </p>
            </div>

            <!-- Funzionalità Aggiuntive -->
            <div class="alert alert-warning mt-4">
                <h5 class="alert-heading">
                    <i class="fas fa-star me-2"></i>
                    Vantaggi del Sistema
                </h5>
                <ul class="mb-0">
                    <li><strong>Semplicità:</strong> Carica il PDF del tuo menu e sei online in pochi secondi</li>
                    <li><strong>Igienico:</strong> Nessun menu cartaceo da toccare - tutto digitale</li>
                    <li><strong>Aggiornabile:</strong> Cambia prezzi o piatti? Carica un nuovo PDF e il menu si aggiorna istantaneamente</li>
                    <li><strong>Economico:</strong> Nessun costo di stampa, nessun menu da rifare</li>
                    <li><strong>Ecologico:</strong> Zero carta, zero sprechi</li>
                    <li><strong>Multilingua:</strong> Carica versioni del menu in diverse lingue</li>
                </ul>
            </div>

            <!-- Note -->
            <div class="alert alert-info mt-4">
                <h5 class="alert-heading">
                    <i class="fas fa-lightbulb me-2"></i>
                    Nota
                </h5>
                <p class="mb-0">
                    Questa è una demo funzionante. Puoi accedere come amministratore per caricare un PDF di prova, 
                    generare il QR code e testare la visualizzazione del menu. Scansiona il QR code con il tuo smartphone 
                    per vedere come i tuoi clienti visualizzeranno il menu. I dati vengono resettati periodicamente.
                </p>
            </div>

            <!-- Torna alla Home -->
            <div class="text-center mt-4">
                <a href="{{ route('home') }}" class="btn btn-outline-secondary">
                    <i class="fas fa-arrow-left me-2"></i>
                    Torna alla Home
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
