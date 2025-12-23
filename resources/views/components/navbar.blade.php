<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}">
            <i class="fas fa-cogs me-2"></i>
            Gestionale Su Misura
        </a>

        <!-- Mobile Toggle Button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#problema">Il Problema</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#soluzione">La Soluzione</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#prezzi">Prezzi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}#demo">Demo Gratuite</a>
                </li>
                <li class="nav-item ms-2">
                    <a class="btn btn-primary btn-sm" href="{{ route('home') }}#preventivo">
                        <i class="fas fa-rocket me-1"></i>
                        Inizia Ora
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>