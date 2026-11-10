{{-- Barra fissa in basso sul telefono: appare dopo la prima schermata e sparisce
     quando il modulo di contatto è già visibile. --}}
@php($ctaHref = request()->routeIs('home') ? '#preventivo' : route('home') . '#preventivo')
<div id="mobile-cta" class="mobile-cta d-lg-none" aria-hidden="true">
    <a href="{{ $ctaHref }}" class="btn btn-primary flex-grow-1">
        <i class="fas fa-rocket me-2"></i>Prototipo gratis
    </a>
    <a href="https://wa.me/393282914852" target="_blank" rel="noopener" class="btn btn-success" title="Scrivici su WhatsApp">
        <i class="fab fa-whatsapp me-1"></i>WhatsApp
    </a>
</div>
<style>
    .mobile-cta {
        position: fixed; left: 0; right: 0; bottom: 0; z-index: 1030;
        display: flex; gap: .5rem; padding: .6rem .75rem calc(.6rem + env(safe-area-inset-bottom));
        background: rgba(255, 255, 255, .97); box-shadow: 0 -2px 12px rgba(0, 0, 0, .12);
        transform: translateY(110%); transition: transform .25s ease;
    }
    .mobile-cta.visible { transform: translateY(0); }
    .mobile-cta .btn { font-weight: 600; }
    @media (max-width: 991.98px) { body.has-mobile-cta { padding-bottom: 72px; } }
</style>
<script>
    (function () {
        var bar = document.getElementById('mobile-cta');
        if (!bar || !('IntersectionObserver' in window)) {
            return;
        }
        document.body.classList.add('has-mobile-cta');
        var pastHero = false;
        var formVisible = false;
        function update() {
            var show = pastHero && !formVisible;
            bar.classList.toggle('visible', show);
            bar.setAttribute('aria-hidden', show ? 'false' : 'true');
        }
        var hero = document.querySelector('main section, section');
        if (hero) {
            new IntersectionObserver(function (entries) {
                pastHero = !entries[0].isIntersecting;
                update();
            }).observe(hero);
        }
        var form = document.getElementById('preventivo');
        if (form) {
            new IntersectionObserver(function (entries) {
                formVisible = entries[0].isIntersecting;
                update();
            }, { threshold: 0.15 }).observe(form);
        }
    })();
</script>
