@extends('layouts.app')

@section('title', 'Termini di Servizio - Gestionale Su Misura')
@section('description', 'Termini di Servizio di Gestionale Su Misura - Condizioni di utilizzo dei nostri servizi')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header bg-info text-white">
                    <h1 class="h3 mb-0">
                        <i class="fas fa-file-contract me-2"></i>
                        Termini di Servizio
                    </h1>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-4">
                        <strong>Ultimo aggiornamento:</strong> {{ date('d/m/Y') }}
                    </p>

                    <h2 class="h4 mb-3">1. Informazioni Generali</h2>
                    <p>
                        I presenti Termini di Servizio regolano l'utilizzo del sito web e dei servizi 
                        offerti da <strong>PromoWeb Studio di R. Roscilli</strong>, con sede in 
                        Via Molfetta 24, 00171 Roma, P.I. 10587780585.
                    </p>

                    <h2 class="h4 mb-3 mt-4">2. Accettazione dei Termini</h2>
                    <p>
                        Utilizzando il nostro sito web e i nostri servizi, accetti automaticamente 
                        questi Termini di Servizio. Se non accetti questi termini, ti preghiamo 
                        di non utilizzare i nostri servizi.
                    </p>

                    <h2 class="h4 mb-3 mt-4">3. Servizi Offerti</h2>
                    <p>Offriamo i seguenti servizi:</p>
                    <ul>
                        <li><strong>Sviluppo Software Personalizzato:</strong> Creazione di gestionali su misura</li>
                        <li><strong>Consulenza Tecnica:</strong> Analisi delle esigenze aziendali</li>
                        <li><strong>Demo Gratuite:</strong> Presentazione di soluzioni esistenti</li>
                        <li><strong>Hosting e Manutenzione:</strong> Servizi di hosting e supporto tecnico</li>
                    </ul>

                    <h2 class="h4 mb-3 mt-4">4. Processo di Sviluppo</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Fase 1: Analisi</h5>
                            <ul>
                                <li>Raccolta requisiti</li>
                                <li>Stima crediti necessari</li>
                                <li>Proposta commerciale</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5>Fase 2: Sviluppo</h5>
                            <ul>
                                <li>Sviluppo con AI</li>
                                <li>Test e validazione</li>
                                <li>Consegna demo</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="h4 mb-3 mt-4">5. Prezzi e Pagamenti</h2>
                    <div class="alert alert-info">
                        <h5><i class="fas fa-euro-sign me-2"></i>Sistema a Crediti</h5>
                        <ul class="mb-0">
                            <li><strong>1 Credito = €10</strong></li>
                            <li>Pagamento anticipato del 50% all'accettazione</li>
                            <li>Saldo alla consegna della demo funzionante</li>
                            <li>Hosting fatturato mensilmente</li>
                        </ul>
                    </div>

                    <h2 class="h4 mb-3 mt-4">6. Hosting e Manutenzione</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Piano</th>
                                    <th>Prezzo Mensile</th>
                                    <th>Caratteristiche</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Base</strong></td>
                                    <td>€20/mese</td>
                                    <td>Fino a 5 utenti, backup giornalieri</td>
                                </tr>
                                <tr>
                                    <td><strong>Professionale</strong></td>
                                    <td>€35/mese</td>
                                    <td>Fino a 20 utenti, storage avanzato</td>
                                </tr>
                                <tr>
                                    <td><strong>Enterprise</strong></td>
                                    <td>€50/mese</td>
                                    <td>Utenti illimitati, server dedicato</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <h2 class="h4 mb-3 mt-4">7. Proprietà Intellettuale</h2>
                    <p>
                        Il software sviluppato su misura diventa di proprietà del cliente una volta 
                        completato il pagamento. Ci riserviamo il diritto di utilizzare le competenze 
                        e metodologie sviluppate per progetti futuri.
                    </p>

                    <h2 class="h4 mb-3 mt-4">8. Garanzie e Limitazioni</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-success">Garanzie</h5>
                            <ul>
                                <li>Software funzionante come specificato</li>
                                <li>Supporto tecnico per 30 giorni</li>
                                <li>Correzione bug gratuita per 90 giorni</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-warning">Limitazioni</h5>
                            <ul>
                                <li>Non garantiamo tempi di sviluppo fissi</li>
                                <li>Modifiche ai requisiti possono comportare costi aggiuntivi</li>
                                <li>Responsabilità limitata al valore del contratto</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="h4 mb-3 mt-4">9. Cancellazione e Rimborsi</h2>
                    <ul>
                        <li><strong>Prima dell'inizio sviluppo:</strong> Rimborso completo</li>
                        <li><strong>Durante lo sviluppo:</strong> Rimborso proporzionale al lavoro non svolto</li>
                        <li><strong>Dopo la consegna:</strong> Nessun rimborso, solo supporto tecnico</li>
                        <li><strong>Hosting:</strong> Cancellabile con preavviso di 30 giorni</li>
                    </ul>

                    <h2 class="h4 mb-3 mt-4">10. Responsabilità del Cliente</h2>
                    <p>Il cliente si impegna a:</p>
                    <ul>
                        <li>Fornire informazioni accurate e complete</li>
                        <li>Collaborare attivamente durante lo sviluppo</li>
                        <li>Testare tempestivamente le demo fornite</li>
                        <li>Rispettare i termini di pagamento</li>
                        <li>Utilizzare il software in modo legale</li>
                    </ul>

                    <h2 class="h4 mb-3 mt-4">11. Modifiche ai Termini</h2>
                    <p>
                        Ci riserviamo il diritto di modificare questi Termini di Servizio in qualsiasi momento. 
                        Le modifiche saranno pubblicate su questa pagina e entreranno in vigore immediatamente.
                    </p>

                    <h2 class="h4 mb-3 mt-4">12. Legge Applicabile</h2>
                    <p>
                        Questi Termini di Servizio sono regolati dalla legge italiana. 
                        Per qualsiasi controversia sarà competente il Foro di Roma.
                    </p>

                    <h2 class="h4 mb-3 mt-4">13. Contatti</h2>
                    <div class="alert alert-primary">
                        <h5><i class="fas fa-phone me-2"></i>Hai domande?</h5>
                        <p class="mb-2">Contattaci per qualsiasi chiarimento sui nostri Termini di Servizio:</p>
                        <ul class="mb-0">
                            <li><strong>Email:</strong> <a href="mailto:info@gestionale-su-misura.it">info@gestionale-su-misura.it</a></li>
                            <li><strong>WhatsApp:</strong> <a href="https://wa.me/393282914852" target="_blank">+39 328 291 4852</a></li>
                            <li><strong>Indirizzo:</strong> Via Molfetta 24, 00171 Roma</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection