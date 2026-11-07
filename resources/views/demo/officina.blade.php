@extends('layouts.app')

@section('title', 'Demo Gestionale Officina')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="display-4 fw-bold mb-3">
                    <i class="fas fa-car text-danger me-3"></i>
                    Demo Gestionale Officina
                </h1>
                <p class="lead text-muted">
                    Veicoli, QR code e preventivi per officine, carrozzerie, gommisti e agenzie pratiche auto
                </p>
            </div>

            <!-- Descrizione -->
            <div class="card shadow-sm mb-4">
                <div class="card-body p-4">
                    <h3 class="h4 mb-3">
                        <i class="fas fa-info-circle text-danger me-2"></i>
                        Cosa puoi fare nella demo
                    </h3>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Registro Veicoli:</strong> Auto e moto con targa, proprietario e dati del mezzo, ricercabili in un attimo
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>QR Code per Veicolo:</strong> Ogni mezzo ha il suo QR code da stampare; scansionandolo si apre subito la scheda
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Storico Condiviso:</strong> La storia del veicolo resta in un unico posto, visibile alle attività della rete
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Preventivi:</strong> Voci di lavoro e ricambi, stati (bozza, inviato, accettato, rifiutato, scaduto) e PDF da inviare al cliente
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Più Attività:</strong> Officina auto, officina moto, carrozzeria, gommista e agenzia pratiche auto nello stesso gestionale
                        </li>
                        <li class="mb-2">
                            <i class="fas fa-check text-success me-2"></i>
                            <strong>Ruoli e Permessi:</strong> Amministratore, coordinatore e operatore vedono solo quello che serve al loro lavoro
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Credenziali di Accesso -->
            <div class="card shadow-sm border-danger mb-4">
                <div class="card-header bg-danger text-white">
                    <h3 class="h5 mb-0">
                        <i class="fas fa-key me-2"></i>
                        Credenziali di Accesso
                    </h3>
                </div>
                <div class="card-body p-4">
                    <p class="mb-3">Puoi accedere alla demo con uno dei seguenti account:</p>

                    <!-- Admin -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h5 class="h6 text-danger mb-2">
                            <i class="fas fa-user-shield me-2"></i>
                            Amministratore Officina
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">admin@officina1.com</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">password</code>
                            </div>
                        </div>
                        <small class="text-muted">Gestione completa di veicoli, preventivi e utenti dell'officina</small>
                    </div>

                    <!-- Coordinatore -->
                    <div class="mb-4 p-3 bg-light rounded">
                        <h5 class="h6 text-danger mb-2">
                            <i class="fas fa-user-tie me-2"></i>
                            Coordinatore Officina Moto
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">coordinator@officinamoto.com</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">password</code>
                            </div>
                        </div>
                        <small class="text-muted">Coordina veicoli e preventivi dell'officina moto</small>
                    </div>

                    <!-- Operatore -->
                    <div class="p-3 bg-light rounded">
                        <h5 class="h6 text-danger mb-2">
                            <i class="fas fa-user me-2"></i>
                            Operatore Agenzia Pratiche Auto
                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <strong>Email:</strong>
                                <code class="ms-2">operator@agenziapraticheauto.com</code>
                            </div>
                            <div class="col-md-6 mb-2">
                                <strong>Password:</strong>
                                <code class="ms-2">password</code>
                            </div>
                        </div>
                        <small class="text-muted">Registra veicoli e consulta le schede</small>
                    </div>
                </div>
            </div>

            <!-- Pulsante Accesso Demo -->
            <div class="text-center">
                <a href="https://demo-officina.gestionale-su-misura.com"
                   target="_blank"
                   class="btn btn-danger btn-lg px-5 py-3">
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
                    Questa è una demo con dati di esempio: targhe, proprietari e preventivi sono inventati.
                    Puoi registrare veicoli, generare QR code e creare preventivi liberamente.
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
