@if(config('app.env') === 'production')
<!-- Google Analytics 4 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'GA_MEASUREMENT_ID');
</script>

<!-- Google Tag Manager -->
<script>
    (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-XXXXXXX');
</script>

<!-- Hotjar Tracking Code -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:HOTJAR_ID,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
@endif

<!-- Custom Analytics Events -->
<script>
    // Track demo clicks
    document.addEventListener('DOMContentLoaded', function() {
        const demoLinks = document.querySelectorAll('[data-demo-type]');
        demoLinks.forEach(link => {
            link.addEventListener('click', function() {
                const demoType = this.getAttribute('data-demo-type');
                
                // Google Analytics event
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'demo_click', {
                        'demo_type': demoType,
                        'event_category': 'engagement',
                        'event_label': demoType
                    });
                }
                
                // Send to our tracking endpoint
                fetch('/api/track-demo', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    },
                    body: JSON.stringify({
                        demo_type: demoType,
                        referrer: document.referrer,
                        user_agent: navigator.userAgent
                    })
                });
            });
        });

        // Track form submissions
        const leadForm = document.getElementById('lead-form');
        if (leadForm) {
            leadForm.addEventListener('submit', function() {
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'form_submit', {
                        'event_category': 'lead_generation',
                        'event_label': 'quote_request'
                    });
                }
            });
        }
    });
</script>