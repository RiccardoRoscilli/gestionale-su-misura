@extends('layouts.app')

@section('title', 'Demo Gestione Task')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-tasks text-success me-3"></i>
                    Demo Gestione Task
                </h1>
                <p class="lead text-muted">
                    Esplora tutte le funzionalità del sistema di gestione interventi software
                </p>
            </div>

            <!-- Descrizione -->
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="h4 mb-3">
                        <i class="fas fa-info-circle text-success me-2"></i>
                        Cosa puoi fare nella demo
                    </h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Gestione Richieste:</strong> Crea e gestisci richieste di intervento (bug fix, nuove feature, applicazioni)
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Workflow Completo:</strong> Traccia lo stato delle richieste da "In Corso" a "Completato" con storico
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Assegnazione Sviluppatori:</strong> Assegna le richieste ai membri del team e monitora il carico di lavoro
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Time Tracking:</strong> Registra le ore lavorate su ogni richiesta con calcolo automatico dei costi
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Comunicazione Integrata:</strong> Chat interna per ogni richiesta con notifiche e allegati
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Integrazione Git:</strong> Collega repository e commit alle richieste per tracciare le modifiche
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Fatturazione Automatica:</strong> Genera fatture da richieste completate con integrazione Fattura24
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Dashboard e Report:</strong> Monitora richieste in corso, da fatturare e completate
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Credenziali di Accesso -->
            <div class="card shadow-sm border-success mb-4">
                <div class="card-header bg-success text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-key me-2"></i>
                        Credenziali di Accesso
                    </h3>
                </div>
                <div class="card-body p-4">
                    <p class="mb-3">Puoi accedere alla demo con uno dei seguenti account:</p>
                    
                    <!-- Admin -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h5 class="h6 text-success mb-2">
                            <i class="fas fa-user-shield me-2"></i>
                            Amministratore
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
                        <small class="text-muted">Accesso completo: gestione utenti, clienti, richieste e fatturazione</small>
                    </div>

                    <!-- Client Manager -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h5 class="h6 text-success mb-2">
                            <i class="fas fa-user-tie me-2"></i>
                            Client Manager
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">manager@demo.it</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">demo123</code>
                            </div>
                        </div>
                        <small class="text-muted">Gestione richieste clienti e comunicazione</small>
                    </div>

                    <!-- Developer -->
                    <div class="p-3 bg-light rounded">
                        <h5 class="h6 text-success mb-2">
                            <i class="fas fa-code me-2"></i>
                            Sviluppatore
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">developer@demo.it</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">demo123</code>
                            </div>
                        </div>
                        <small class="text-muted">Visualizzazione richieste assegnate, time tracking e comunicazione</small>
                    </div>
                </div>
            </div>

            <!-- Pulsante Accesso Demo -->
            <div class="text-center">
                <a href="https://task-demo.gestionale-su-misura.it" 
                   target="_blank" 
                   class="btn btn-success btn-lg px-5 py-3">
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
                    Questa è una demo con dati di esempio. Puoi esplorare liberamente tutte le funzionalità, 
                    creare nuove richieste, registrare ore lavorate, comunicare tramite chat e testare il workflow completo. 
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
