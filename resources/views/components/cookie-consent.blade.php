<!-- Cookie Consent Banner (compatto: su telefono occupa poco più di una riga) -->
<div id="cookie-consent" class="cookie-consent cookie-compact" style="display: none;">
    <div class="container d-flex flex-column flex-md-row align-items-md-center gap-2 gap-md-3">
        <p class="mb-0 small flex-grow-1">
            <i class="fas fa-cookie-bite me-1"></i>
            Usiamo cookie tecnici e, con il tuo consenso, di analisi e marketing (Google Analytics, Meta Pixel, ChatGPT Ads).
            <a href="{{ route('cookies') }}" class="text-white text-decoration-underline">Cookie Policy</a> ·
            <a href="{{ route('privacy') }}" class="text-white text-decoration-underline">Privacy</a>
        </p>
        <div class="d-flex gap-2 flex-shrink-0">
            <button type="button" class="btn btn-light btn-sm flex-fill" onclick="acceptCookies()">Accetta</button>
            <button type="button" class="btn btn-outline-light btn-sm flex-fill" onclick="rejectCookies()">Rifiuta</button>
        </div>
    </div>
</div>
<style>
    .cookie-consent.cookie-compact { padding: 10px 0 calc(10px + env(safe-area-inset-bottom)); }
    .cookie-compact p { font-size: .8rem; line-height: 1.35; }
    .cookie-compact .btn { border-radius: 20px; min-width: 96px; font-weight: 500; }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Check if user has already made a choice
    const cookieConsent = localStorage.getItem('cookieConsent');
    
    if (!cookieConsent) {
        // Show banner after 1 second
        setTimeout(function() {
            document.getElementById('cookie-consent').style.display = 'block';
            document.getElementById('cookie-consent').classList.add('show');
        }, 1000);
    }
});

function acceptCookies() {
    localStorage.setItem('cookieConsent', 'accepted');
    hideCookieBanner();
    loadAnalytics();
}

function rejectCookies() {
    localStorage.setItem('cookieConsent', 'rejected');
    hideCookieBanner();
}

function hideCookieBanner() {
    const banner = document.getElementById('cookie-consent');
    banner.classList.add('fade-out');
    setTimeout(function() {
        banner.style.display = 'none';
    }, 300);
}

function loadAnalytics() {
    if (typeof window.loadTracking === 'function') {
        window.loadTracking();
    }
}
</script>