@php
    $gaId = config('services.tracking.ga_measurement_id');
    $pixelId = config('services.tracking.meta_pixel_id');
@endphp
<script>
    // I tracker vengono caricati solo dopo il consenso cookie (vedi cookie-consent).
    window.trackingConfig = { gaId: @json($gaId), pixelId: @json($pixelId) };

    window.loadTracking = function () {
        if (window.trackingLoaded) return;
        window.trackingLoaded = true;
        var cfg = window.trackingConfig;

        // Google Analytics 4
        if (cfg.gaId) {
            var ga = document.createElement('script');
            ga.async = true;
            ga.src = 'https://www.googletagmanager.com/gtag/js?id=' + encodeURIComponent(cfg.gaId);
            document.head.appendChild(ga);
            window.dataLayer = window.dataLayer || [];
            window.gtag = function () { dataLayer.push(arguments); };
            gtag('js', new Date());
            gtag('config', cfg.gaId);
        }

        // Meta Pixel
        if (cfg.pixelId) {
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', cfg.pixelId);
            fbq('track', 'PageView');
        }
    };

    // Evento di conversione: richiesta demo inviata con successo
    window.trackLead = function () {
        if (typeof window.gtag === 'function') {
            gtag('event', 'generate_lead', { event_category: 'lead_generation', event_label: 'demo_request' });
        }
        if (typeof window.fbq === 'function') {
            fbq('track', 'Lead');
        }
    };

    // Click sulle demo
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('[data-demo-type]').forEach(function (link) {
            link.addEventListener('click', function () {
                var demoType = this.getAttribute('data-demo-type');
                if (typeof window.gtag === 'function') {
                    gtag('event', 'demo_click', { demo_type: demoType, event_category: 'engagement' });
                }
                if (typeof window.fbq === 'function') {
                    fbq('trackCustom', 'DemoClick', { demo_type: demoType });
                }
            });
        });
    });

    if (localStorage.getItem('cookieConsent') === 'accepted') {
        window.loadTracking();
    }
</script>
