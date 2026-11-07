@extends('layouts.app')

@section('title', 'Demo Gestionale Bandi e Contributi | Gestionale Su Misura')
@section('description', 'Prova gratis il gestionale per bandi e contributi: bandi, beneficiari, risorse assegnate, piano finanziario e stanziamenti in un unico software.')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-file-contract text-info me-3"></i>
                    Demo Gestionale Bandi
                </h1>
                <p class="lead text-muted">
                    Esplora il sistema completo per la gestione di bandi e gare pubbliche
                </p>
            </div>

            <!-- Descrizione -->
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="h4 mb-3">
                        <i class="fas fa-info-circle text-info me-2"></i>
                        Cosa puoi fare nella demo
                    </h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Gestione Bandi:</strong> Bandi con codice, importo, date e stato (attivo, sospeso, chiuso)
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Beneficiari:</strong> Anagrafica completa con dati fiscali, PEC e codice SDI
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Risorse ai Beneficiari:</strong> Importi assegnati a ogni beneficiario per bando, con esportazione in PDF
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Piano Finanziario:</strong> Linee di finanziamento suddivise in misure e voci di spesa, con previsto e speso
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Stanziamenti:</strong> Stato di ogni stanziamento: richiesto, concesso, in avanzamento, residuo
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Ruoli e Permessi:</strong> Super amministratore, amministratore e utente in sola lettura
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Credenziali di Accesso -->
            <div class="card shadow-sm border-info mb-4">
                <div class="card-header bg-info text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-key me-2"></i>
                        Credenziali di Accesso
                    </h3>
                </div>
                <div class="card-body p-4">
                    <p class="mb-3">Puoi accedere alla demo con uno dei seguenti account:</p>
                    
                    <!-- Super Admin -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h5 class="h6 text-info mb-2">
                            <i class="fas fa-user-shield me-2"></i>
                            Super Amministratore
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
                        <small class="text-muted">Accesso completo: gestione utenti, bandi, beneficiari e configurazioni</small>
                    </div>

                    <!-- Admin -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h5 class="h6 text-info mb-2">
                            <i class="fas fa-user-tie me-2"></i>
                            Amministratore
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">operatore@demo.it</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">demo123</code>
                            </div>
                        </div>
                        <small class="text-muted">Gestione bandi, beneficiari e assegnazione risorse</small>
                    </div>

                    <!-- User -->
                    <div class="p-3 bg-light rounded">
                        <h5 class="h6 text-info mb-2">
                            <i class="fas fa-user me-2"></i>
                            Utente Standard
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">utente@demo.it</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">demo123</code>
                            </div>
                        </div>
                        <small class="text-muted">Visualizzazione bandi e beneficiari con permessi limitati</small>
                    </div>
                </div>
            </div>

            <!-- Pulsante Accesso Demo -->
            <div class="text-center">
                <a href="https://bandi-demo.gestionale-su-misura.com" 
                   target="_blank" 
                   class="btn btn-info btn-lg px-5 py-3">
                    <i class="fas fa-external-link-alt me-2"></i>
                    Accedi alla Demo
                </a>
                <p class="text-muted mt-3 small">
                    <i class="fas fa-info-circle me-1"></i>
                    La demo si aprirà in una nuova finestra
                </p>
            </div>

            <!-- Note -->
            <div class="alert alert-info mt-4">
                <h5 class="alert-heading">
                    <i class="fas fa-lightbulb me-2"></i>
                    Nota
                </h5>
                <p class="mb-0">
                    Questa è una demo con dati di esempio. Puoi esplorare liberamente tutte le funzionalità. 
                    I dati vengono resettati periodicamente.
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
