@extends('layouts.app')

@section('title', 'Cookie Policy - Gestionale Su Misura')
@section('description', 'Cookie Policy di Gestionale Su Misura - Come utilizziamo i cookie')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-warning text-dark">
                    <h1 class="h3 mb-0">
                        <i class="fas fa-cookie-bite me-2"></i>
                        Cookie Policy
                    </h1>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        <strong>Ultimo aggiornamento:</strong> {{ date('d/m/Y') }}
                    </p>

                    <h2 class="h4 mb-3">Cosa sono i Cookie</h2>
                    <p>
                        I cookie sono piccoli file di testo che vengono memorizzati sul tuo dispositivo 
                        quando visiti un sito web. Ci aiutano a migliorare la tua esperienza di navigazione 
                        e a fornire servizi personalizzati.
                    </p>

                    <h2 class="h4 mb-3 mt-4">Tipi di Cookie Utilizzati</h2>
                    
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card border-success">
                                <div class="card-header bg-success text-white">
                                    <h5 class="mb-0">
                                        <i class="fas fa-cog me-2"></i>
                                        Cookie Tecnici
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <p><strong>Necessari per il funzionamento del sito</strong></p>
                                    <ul class="small">
                                        <li>Gestione della sessione</li>
                                        <li>Sicurezza del sito</li>
                                        <li>Preferenze di navigazione</li>
                                        <li>Consenso cookie</li>
                                    </ul>
                                    <span class="badge bg-success">Non richiedono consenso</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 mb-4">
                            <div class="card border-info">
                                <div class="card-header bg-info text-white">
                                    <h5 class="mb-0">
                                        <i class="fas fa-chart-bar me-2"></i>
                                        Cookie di Analisi
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <p><strong>Per migliorare l'esperienza utente</strong></p>
                                    <ul class="small">
                                        <li>Google Analytics</li>
                                        <li>Statistiche di utilizzo</li>
                                        <li>Comportamento degli utenti</li>
                                        <li>Performance del sito</li>
                                    </ul>
                                    <span class="badge bg-info">Richiedono consenso</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="h4 mb-3 mt-4">Cookie di Terze Parti</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Servizio</th>
                                    <th>Finalità</th>
                                    <th>Durata</th>
                                    <th>Privacy Policy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Google Analytics</strong></td>
                                    <td>Analisi del traffico</td>
                                    <td>26 mesi</td>
                                    <td><a href="https://policies.google.com/privacy" target="_blank">Google Privacy</a></td>
                                </tr>
                                <tr>
                                    <td><strong>Google Fonts</strong></td>
                                    <td>Caricamento font</td>
                                    <td>1 giorno</td>
                                    <td><a href="https://policies.google.com/privacy" target="_blank">Google Privacy</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 class="h4 mb-3 mt-4">Gestione dei Cookie</h2>
                    <p>Puoi gestire le tue preferenze sui cookie in diversi modi:</p>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Dal nostro sito</h5>
                            <ul>
                                <li>Banner di consenso alla prima visita</li>
                                <li>Possibilità di revocare il consenso</li>
                                <li>Scelta selettiva per tipo di cookie</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Dal tuo browser</h5>
                            <ul>
                                <li>Impostazioni privacy del browser</li>
                                <li>Blocco di tutti i cookie</li>
                                <li>Cancellazione cookie esistenti</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="h4 mb-3 mt-4">Come Disabilitare i Cookie</h2>
                    <div class="accordion" id="browserAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chrome">
                                    <i class="fab fa-chrome me-2"></i> Google Chrome
                                </button>
                            </h2>
                            <div id="chrome" class="accordion-collapse collapse" data-bs-parent="#browserAccordion">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Clicca sui tre puntini in alto a destra</li>
                                        <li>Vai su "Impostazioni" > "Privacy e sicurezza"</li>
                                        <li>Clicca su "Cookie e altri dati dei siti"</li>
                                        <li>Scegli le tue preferenze</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#firefox">
                                    <i class="fab fa-firefox me-2"></i> Mozilla Firefox
                                </button>
                            </h2>
                            <div id="firefox" class="accordion-collapse collapse" data-bs-parent="#browserAccordion">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Clicca sul menu hamburger</li>
                                        <li>Vai su "Impostazioni" > "Privacy e sicurezza"</li>
                                        <li>Nella sezione "Cookie e dati dei siti web"</li>
                                        <li>Personalizza le impostazioni</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#safari">
                                    <i class="fab fa-safari me-2"></i> Safari
                                </button>
                            </h2>
                            <div id="safari" class="accordion-collapse collapse" data-bs-parent="#browserAccordion">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Vai su "Safari" > "Preferenze"</li>
                                        <li>Clicca sulla scheda "Privacy"</li>
                                        <li>Nella sezione "Cookie e dati dei siti web"</li>
                                        <li>Scegli le tue impostazioni</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="alert alert-warning mt-4">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        <strong>Attenzione:</strong> Disabilitare tutti i cookie potrebbe compromettere 
                        il corretto funzionamento del sito web.
                    </div>

                    <h2 class="h4 mb-3 mt-4">Contatti</h2>
                    <p>
                        Per domande sui cookie o per esercitare i tuoi diritti, contattaci:
                    </p>
                    <ul>
                        <li><strong>Email:</strong> <a href="mailto:info@gestionale-su-misura.it">info@gestionale-su-misura.it</a></li>
                        <li><strong>WhatsApp:</strong> <a href="https://wa.me/393282914852" target="_blank">+39 328 291 4852</a></li>
                        <li><strong>Indirizzo:</strong> Via Molfetta 24, 00171 Roma</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection