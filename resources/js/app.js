import './bootstrap';
import Alpine from 'alpinejs';

// Make Alpine available globally
window.Alpine = Alpine;

// Alpine.js components
Alpine.data('leadForm', () => ({
    loading: false,
    success: false,
    error: null,
    
    async submitForm(event) {
        event.preventDefault();
        this.loading = true;
        this.error = null;
        
        const formData = new FormData(event.target);
        
        try {
            const response = await fetch('/lead', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                }
            });
            
            const data = await response.json();
            
            if (response.ok) {
                this.success = true;
                event.target.reset();
                
                // Track conversion event
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'lead_form_submit', {
                        'event_category': 'engagement',
                        'event_label': 'contact_form'
                    });
                }
            } else {
                this.error = data.message || 'Si è verificato un errore. Riprova.';
            }
        } catch (error) {
            this.error = 'Errore di connessione. Riprova più tardi.';
        } finally {
            this.loading = false;
        }
    }
}));

Alpine.data('demoTracking', () => ({
    trackDemo(demoName) {
        // Track demo access
        fetch('/demo/track', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({ demo_name: demoName })
        });
        
        // Track analytics event
        if (typeof gtag !== 'undefined') {
            gtag('event', 'demo_access', {
                'event_category': 'engagement',
                'event_label': demoName,
                'custom_parameters': {
                    'demo_type': demoName
                }
            });
        }
    }
}));

Alpine.data('navbar', () => ({
    mobileMenuOpen: false,
    
    toggleMobileMenu() {
        this.mobileMenuOpen = !this.mobileMenuOpen;
    }
}));

// Scorrimento alle sezioni della homepage: funziona sia con "#id" sia con "/#id",
// tiene conto della navbar fissa e chiude il menu mobile dopo il click.
function scrollToSection(id, smooth = true) {
    const target = id && document.getElementById(id);
    if (!target) return false;
    const nav = document.querySelector('.navbar.sticky-top, .navbar.fixed-top');
    const offset = (nav ? nav.offsetHeight : 0) + 8;
    const top = target.getBoundingClientRect().top + window.scrollY - offset;
    window.scrollTo({ top, behavior: smooth ? 'smooth' : 'instant' });
    return true;
}

document.addEventListener('click', function (e) {
    const link = e.target.closest('a[href*="#"]');
    if (!link || link.target === '_blank') return;

    const url = new URL(link.href, window.location.href);
    const samePage = url.origin === window.location.origin && url.pathname === window.location.pathname;
    const id = decodeURIComponent(url.hash.slice(1));
    if (!samePage || !id || !document.getElementById(id)) return;

    e.preventDefault();

    const menu = document.getElementById('navbarNav');
    const wasOpen = menu && menu.classList.contains('show');
    if (wasOpen && window.bootstrap) {
        window.bootstrap.Collapse.getOrCreateInstance(menu).hide();
    }
    // Se il menu mobile era aperto aspetta che si chiuda, altrimenti la posizione cambia mentre scorre
    setTimeout(() => scrollToSection(id), wasOpen ? 350 : 0);
    history.pushState(null, '', '#' + id);
});

// Arrivando da un'altra pagina su /#sezione corregge la posizione per la navbar
window.addEventListener('load', function () {
    if (window.location.hash) {
        setTimeout(() => scrollToSection(decodeURIComponent(window.location.hash.slice(1)), false), 50);
    }
});

// Intersection Observer for animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in-up');
        }
    });
}, observerOptions);

// Observe elements with animation class
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach(el => observer.observe(el));
});

// Form validation enhancement
document.addEventListener('DOMContentLoaded', function() {
    const forms = document.querySelectorAll('.needs-validation');
    
    forms.forEach(form => {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            form.classList.add('was-validated');
        });
        
        // Real-time validation
        const inputs = form.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.checkValidity()) {
                    this.classList.remove('is-invalid');
                    this.classList.add('is-valid');
                } else {
                    this.classList.remove('is-valid');
                    this.classList.add('is-invalid');
                }
            });
        });
    });
});

// Start Alpine
Alpine.start();