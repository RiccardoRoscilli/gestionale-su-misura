<!-- Cookie Consent Banner -->
<div id="cookie-consent" class="cookie-consent" style="display: none;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-7">
                <div class="cookie-content">
                    <h6 class="mb-2">
                        <i class="fas fa-cookie-bite me-2"></i>
                        Utilizziamo i Cookie
                    </h6>
                    <p class="mb-0">
                        Questo sito utilizza cookie tecnici e di analisi per migliorare la tua esperienza di navigazione. 
                        Continuando la navigazione accetti l'utilizzo dei cookie.
                        <a href="{{ route('privacy') }}" class="text-white text-decoration-underline">Leggi la Privacy Policy</a> | 
                        <a href="{{ route('cookies') }}" class="text-white text-decoration-underline">Cookie Policy</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 text-end">
                <div class="cookie-buttons">
                    <button type="button" class="btn btn-outline-light btn-sm me-2" onclick="acceptCookies()">
                        <i class="fas fa-check me-1"></i>
                        Accetta
                    </button>
                    <button type="button" class="btn btn-light btn-sm" onclick="rejectCookies()">
                        <i class="fas fa-times me-1"></i>
                        Rifiuta
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

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
    } else if (cookieConsent === 'accepted') {
        // Load analytics if cookies were accepted
        loadAnalytics();
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
    // Load Google Analytics or other tracking scripts here
    if (typeof gtag !== 'undefined') {
        gtag('consent', 'update', {
            'analytics_storage': 'granted'
        });
    }
}
</script>