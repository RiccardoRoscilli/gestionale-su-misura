# Setup Demo Applications

## Panoramica

Questo documento descrive come configurare le applicazioni demo per gestionale-su-misura.it con:
- Banda demo sempre visibile
- Credenziali di accesso facilitate
- Reset automatico notturno del database

## Componenti Creati

### 1. Banda Demo (`resources/views/components/demo-banner.blade.php`)
- Banda fissa in alto con avviso demo
- Mostra prossimo reset automatico
- Responsive design

### 2. Info Login Demo (`resources/views/components/demo-login-info.blade.php`)
- Card con credenziali visibili
- Pulsanti copia credenziali
- Auto-login automatico

### 3. Comando Reset Database (`app/Console/Commands/ResetDemoDatabase.php`)
- Reset completo database demo
- Esecuzione sicura con conferme
- Logging delle operazioni

### 4. Configurazione Demo (`config/demo.php`)
- Configurazione centralizzata
- Definizione delle 4 demo apps
- Credenziali e URL

## Demo Applications

1. **Gestionale Pulizie** - Sistema per aziende di pulizie
2. **Gestionale E-commerce** - Integrazione Magento/Shopify  
3. **Gestionale Cantieri** - Sistema per cantieri edili
4. **Gestionale Bandi** - Sistema per bandi pubblici

## Setup Cron Job

Eseguire lo script per configurare il reset notturno:

```bash
./setup-demo-cron.sh
```

## Credenziali Demo Standard

- **Email**: admin@demo.it
- **Password**: demo123

## Reset Manuale

```bash
php artisan demo:reset
```