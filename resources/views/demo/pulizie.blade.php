@extends('layouts.app')

@section('title', 'Demo Gestionale Pulizie')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-broom text-primary me-3"></i>
                    Demo Gestionale Pulizie
                </h1>
                <p class="lead text-muted">
                    Esplora tutte le funzionalità del sistema di gestione per aziende di pulizie
                </p>
            </div>

            <!-- Descrizione -->
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="h4 mb-3">
                        <i class="fas fa-info-circle text-primary me-2"></i>
                        Cosa puoi fare nella demo
                    </h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Gestione Clienti e Sedi:</strong> Visualizza e gestisci i clienti con le relative sedi operative
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Pianificazione Interventi:</strong> Programma e monitora gli interventi di pulizia
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Gestione Operatori:</strong> Assegna operatori agli interventi e monitora le attività
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Inventario Materiali:</strong> Controlla giacenze, attrezzature e macchinari
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Dashboard e Report:</strong> Visualizza statistiche e report operativi
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Credenziali di Accesso -->
            <div class="card shadow-sm border-primary mb-4">
                <div class="card-header bg-primary text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-key me-2"></i>
                        Credenziali di Accesso
                    </h3>
                </div>
                <div class="card-body p-4">
                    <p class="mb-3">Puoi accedere alla demo con uno dei seguenti account:</p>
                    
                    <!-- Admin -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h5 class="h6 text-primary mb-2">
                            <i class="fas fa-user-shield me-2"></i>
                            Amministratore
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">admin@pulizie.com</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">password</code>
                            </div>
                        </div>
                        <small class="text-muted">Accesso completo a tutte le funzionalità</small>
                    </div>

                    <!-- Coordinatore -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h5 class="h6 text-primary mb-2">
                            <i class="fas fa-user-tie me-2"></i>
                            Coordinatore
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">coordinatore@pulizie.com</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">password</code>
                            </div>
                        </div>
                        <small class="text-muted">Gestione interventi e operatori</small>
                    </div>

                    <!-- Operatore -->
                    <div class="p-3 bg-light rounded">
                        <h5 class="h6 text-primary mb-2">
                            <i class="fas fa-user me-2"></i>
                            Operatore
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">operatore@pulizie.com</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">password</code>
                            </div>
                        </div>
                        <small class="text-muted">Visualizzazione e gestione dei propri interventi</small>
                    </div>
                </div>
            </div>

            <!-- Pulsante Accesso Demo -->
            <div class="text-center">
                <a href="https://pulizie-demo.gestionale-su-misura.com" 
                   target="_blank" 
                   class="btn btn-primary btn-lg px-5 py-3">
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
