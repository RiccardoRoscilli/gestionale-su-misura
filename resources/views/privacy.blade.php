@extends('layouts.app')

@section('title', 'Privacy Policy - Gestionale Su Misura')
@section('description', 'Privacy Policy di Gestionale Su Misura - Come trattiamo i tuoi dati personali')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h1 class="h3 mb-0">
                        <i class="fas fa-shield-alt me-2"></i>
                        Privacy Policy
                    </h1>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        <strong>Ultimo aggiornamento:</strong> {{ date('d/m/Y') }}
                    </p>

                    <h2 class="h4 mb-3">1. Titolare del Trattamento</h2>
                    <p>
                        Il Titolare del trattamento dei dati è <strong>PromoWeb Studio di R. Roscilli</strong>, 
                        con sede in Via Molfetta 24, 00171 Roma, P.I. 10587780585.
                    </p>
                    <p>
                        Per contattarci: <a href="mailto:info@gestionale-su-misura.it">info@gestionale-su-misura.it</a> 
                        o <a href="https://wa.me/393282914852" target="_blank">WhatsApp +39 328 291 4852</a>
                    </p>

                    <h2 class="h4 mb-3 mt-4">2. Dati Raccolti</h2>
                    <p>Raccogliamo i seguenti tipi di dati:</p>
                    <ul>
                        <li><strong>Dati di contatto:</strong> nome, email, telefono, azienda</li>
                        <li><strong>Dati di navigazione:</strong> indirizzo IP, browser, pagine visitate</li>
                        <li><strong>Cookie tecnici:</strong> per il funzionamento del sito</li>
                        <li><strong>Cookie di analisi:</strong> per migliorare l'esperienza utente (solo con consenso)</li>
                    </ul>

                    <h2 class="h4 mb-3 mt-4">3. Finalità del Trattamento</h2>
                    <p>I tuoi dati vengono utilizzati per:</p>
                    <ul>
                        <li>Rispondere alle tue richieste di preventivo e demo</li>
                        <li>Fornire supporto tecnico e commerciale</li>
                        <li>Migliorare i nostri servizi</li>
                        <li>Adempiere agli obblighi di legge</li>
                    </ul>

                    <h2 class="h4 mb-3 mt-4">4. Base Giuridica</h2>
                    <p>Il trattamento è basato su:</p>
                    <ul>
                        <li><strong>Consenso:</strong> per cookie di analisi e marketing</li>
                        <li><strong>Interesse legittimo:</strong> per migliorare i servizi</li>
                        <li><strong>Esecuzione contrattuale:</strong> per fornire i servizi richiesti</li>
                    </ul>

                    <h2 class="h4 mb-3 mt-4">5. Conservazione dei Dati</h2>
                    <p>
                        I dati vengono conservati per il tempo necessario alle finalità per cui sono stati raccolti:
                    </p>
                    <ul>
                        <li><strong>Dati di contatto:</strong> fino a revoca del consenso o 2 anni dall'ultimo contatto</li>
                        <li><strong>Dati di navigazione:</strong> massimo 26 mesi</li>
                        <li><strong>Cookie tecnici:</strong> durata della sessione</li>
                    </ul>

                    <h2 class="h4 mb-3 mt-4">6. I Tuoi Diritti</h2>
                    <p>Hai diritto a:</p>
                    <ul>
                        <li>Accedere ai tuoi dati personali</li>
                        <li>Rettificare dati inesatti</li>
                        <li>Cancellare i tuoi dati</li>
                        <li>Limitare il trattamento</li>
                        <li>Portabilità dei dati</li>
                        <li>Opporti al trattamento</li>
                        <li>Revocare il consenso</li>
                    </ul>
                    <p>
                        Per esercitare i tuoi diritti, contattaci a: 
                        <a href="mailto:info@gestionale-su-misura.it">info@gestionale-su-misura.it</a>
                    </p>

                    <h2 class="h4 mb-3 mt-4">7. Sicurezza</h2>
                    <p>
                        Adottiamo misure tecniche e organizzative appropriate per proteggere i tuoi dati 
                        da accessi non autorizzati, perdita o distruzione.
                    </p>

                    <h2 class="h4 mb-3 mt-4">8. Modifiche</h2>
                    <p>
                        Ci riserviamo il diritto di modificare questa Privacy Policy. 
                        Le modifiche saranno pubblicate su questa pagina con la data di aggiornamento.
                    </p>

                    <div class="alert alert-info mt-4">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Hai domande?</strong> Contattaci per qualsiasi chiarimento sulla gestione dei tuoi dati personali.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection