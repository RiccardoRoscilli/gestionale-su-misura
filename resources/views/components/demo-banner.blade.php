<!-- Demo Banner - Always visible on demo sites -->
<div class="demo-banner bg-warning text-dark py-2 position-fixed w-100" style="top: 0; z-index: 9999; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="d-flex align-items-center">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>VERSIONE DEMO</strong>
                    <span class="ms-2">Questo software è in versione demo, i dati inseriti vengono cancellati ogni notte alle ore 01:00</span>
                </div>
            </div>
            <div class="col-md-4 text-md-end">
                <small class="text-muted">
                    <i class="fas fa-clock me-1"></i>
                    Prossimo reset: {{ \Carbon\Carbon::tomorrow()->setHour(1)->setMinute(0)->format('d/m/Y H:i') }}
                </small>
            </div>
        </div>
    </div>
</div>

<!-- Spacer to push content below the fixed banner -->
<div class="demo-banner-spacer" style="height: 60px;"></div>

<style>
.demo-banner {
    font-size: 0.9rem;
    border-bottom: 2px solid #f0ad4e;
}

@media (max-width: 768px) {
    .demo-banner {
        font-size: 0.8rem;
        padding: 0.5rem 0;
    }
    
    .demo-banner-spacer {
        height: 80px !important;
    }
    
    .demo-banner .col-md-4 {
        margin-top: 0.5rem;
    }
}

/* Ensure the banner is always on top */
.demo-banner {
    backdrop-filter: blur(10px);
    background-color: rgba(255, 193, 7, 0.95) !important;
}
</style>