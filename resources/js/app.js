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

// Smooth scrolling for anchor links
document.addEventListener('DOMContentLoaded', function() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
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