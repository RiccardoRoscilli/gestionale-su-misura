<footer class="bg-dark text-light py-5 mt-5">
    <div class="container">
        <div class="row">
            <!-- Company Info -->
            <div class="col-lg-4 mb-4">
                <h5 class="fw-bold mb-3">
                    <i class="fas fa-cogs me-2"></i>
                    Gestionale Su Misura
                </h5>
                <p class="text-light-emphasis">
                    Software personalizzato per PMI. Sviluppo rapido con AI. 
                    Sostituisci Excel con un gestionale su misura per la tua azienda.
                </p>
                <div class="d-flex gap-3">
                    <a href="https://wa.me/393282914852" target="_blank" class="text-light-emphasis" title="WhatsApp">
                        <i class="fab fa-whatsapp fa-lg"></i>
                    </a>
                    <a href="mailto:info@gestionale-su-misura.it" class="text-light-emphasis" title="Email">
                        <i class="fas fa-envelope fa-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="fw-bold mb-3">Servizi</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}#prezzi" class="text-light-emphasis text-decoration-none">Prezzi</a></li>
                    <li><a href="{{ route('home') }}#demo" class="text-light-emphasis text-decoration-none">Demo Gratuite</a></li>
                    <li><a href="{{ route('home') }}#preventivo" class="text-light-emphasis text-decoration-none">Richiedi Demo</a></li>
                </ul>
            </div>

            <!-- Legal -->
            <div class="col-lg-2 col-md-6 mb-4">
                <h6 class="fw-bold mb-3">Legale</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('privacy') }}" class="text-light-emphasis text-decoration-none">Privacy Policy</a></li>
                    <li><a href="{{ route('cookies') }}" class="text-light-emphasis text-decoration-none">Cookie Policy</a></li>
                    <li><a href="{{ route('terms') }}" class="text-light-emphasis text-decoration-none">Termini di Servizio</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4 mb-4">
                <h6 class="fw-bold mb-3">Contatti</h6>
                <div class="contact-info">
                    <p class="mb-2 text-light-emphasis">
                        <i class="fas fa-building me-2"></i>
                        <strong>PromoWeb Studio di R. Roscilli</strong>
                    </p>
                    <p class="mb-2 text-light-emphasis">
                        <i class="fas fa-map-marker-alt me-2"></i>
                        Via Molfetta 24, 00171 Roma
                    </p>
                    <p class="mb-2 text-light-emphasis">
                        <i class="fas fa-id-card me-2"></i>
                        P.I. 10587780585
                    </p>
                    <p class="mb-2">
                        <i class="fab fa-whatsapp me-2"></i>
                        <a href="https://wa.me/393282914852" target="_blank" class="text-light-emphasis text-decoration-none whatsapp-link">
                            +39 328 291 4852
                        </a>
                    </p>
                    <p class="mb-0">
                        <i class="fas fa-envelope me-2"></i>
                        <a href="mailto:info@gestionale-su-misura.it" class="text-light-emphasis text-decoration-none">
                            info@gestionale-su-misura.it
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <hr class="my-4 border-secondary">

        <!-- Bottom Footer -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <p class="mb-0 text-light-emphasis">
                    &copy; {{ date('Y') }} PromoWeb Studio di R. Roscilli. Tutti i diritti riservati.
                </p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="{{ route('privacy') }}" class="text-light-emphasis text-decoration-none me-3">Privacy Policy</a>
                <a href="{{ route('cookies') }}" class="text-light-emphasis text-decoration-none me-3">Cookie Policy</a>
                <a href="{{ route('terms') }}" class="text-light-emphasis text-decoration-none">Termini di Servizio</a>
            </div>
        </div>
    </div>
</footer>