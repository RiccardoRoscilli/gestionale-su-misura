# 🏢 Gestionale Su Misura - Custom Business Management Platform

[![Laravel](https://img.shields.io/badge/Laravel-11.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-purple.svg)](https://getbootstrap.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](https://opensource.org/licenses/MIT)

Una piattaforma completa per la creazione di gestionali personalizzati per aziende italiane. Sviluppo rapido con AI, prezzi trasparenti e hosting incluso.

## ✨ Caratteristiche Principali

### 🎯 Per le Aziende
- **Gestionali Su Misura**: Solo le funzioni che servono davvero
- **Sviluppo Rapido**: Prototipo in 48h con intelligenza artificiale
- **Prezzi Trasparenti**: €10 per credito, nessun costo nascosto
- **Demo Gratuite**: 4 applicazioni demo sempre disponibili
- **Hosting Incluso**: Piani da €20/mese con tutto incluso

### 🛠️ Tecnologie
- **Backend**: Laravel 11 con architettura moderna
- **Frontend**: Bootstrap 5 responsive
- **Database**: MySQL con migrazioni automatiche
- **Integrazione**: API REST per sistemi esterni
- **Sicurezza**: GDPR compliant, SSL incluso

### 📱 Demo Applications
1. **Gestionale Pulizie** - Sistema completo per aziende di pulizie
2. **Gestionale E-commerce** - Integrazione Magento/Shopify
3. **Gestionale Cantieri** - Gestione cantieri edili
4. **Gestionale Bandi** - Sistema per bandi pubblici

## 🚀 Installazione Rapida

### Prerequisiti
- PHP 8.2+
- Composer
- MySQL/MariaDB
- Node.js & NPM

### Setup
```bash
# Clona il repository
git clone git@github.com:RiccardoRoscilli/gestionale-su-misura.git
cd gestionale-su-misura

# Installa dipendenze
composer install
npm install

# Configura environment
cp .env.example .env
php artisan key:generate

# Setup database
php artisan migrate
php artisan db:seed

# Compila assets
npm run build

# Avvia il server
php artisan serve
```

Visita `http://localhost:8000` per iniziare!

## 💰 Modello di Business

### Sviluppo (Una Tantum)
- **Sistema Base**: 62 crediti × €10 = **€620**
- **Personalizzazioni**: Crediti aggiuntivi in base alle esigenze
- **Prototipo**: 48 ore per la prima versione funzionante

### Hosting (Mensile)
| Piano | Prezzo | Utenti | Caratteristiche |
|-------|--------|--------|-----------------|
| **Base** | €20/mese | Fino a 5 | Database MySQL, SSL, Backup giornalieri |
| **Professionale** | €35/mese | Fino a 20 | Storage avanzato, Performance ottimizzate |
| **Enterprise** | €50/mese | Illimitati | Server dedicato, Supporto 24/7 |

### Confronto TCO (3 anni)
- **Gestionale Su Misura**: €1.340-2.420 (tutto incluso)
- **Software Standard**: €3.600-14.400 (2 utenti)
- **Sviluppo Tradizionale**: €18.000+ (solo per iniziare)

## 🎨 Funzionalità Website

### Landing Page Professionale
- **Design Moderno**: Bootstrap 5 con animazioni CSS
- **Responsive**: Ottimizzato per tutti i dispositivi
- **SEO Optimized**: Meta tags e struttura ottimizzata
- **Performance**: Caricamento veloce e ottimizzato

### Sistema Lead Management
- **Form Contatti**: Raccolta lead automatica
- **Integrazione CRM**: Connessione con sistema task management
- **Email Automatiche**: Conferme e notifiche
- **Tracking**: UTM e analytics integrati

### Compliance GDPR
- **Cookie Consent**: Banner intelligente con scelte utente
- **Privacy Policy**: Completa e aggiornata
- **Cookie Policy**: Dettagliata con istruzioni browser
- **Terms of Service**: Condizioni complete del servizio

### Demo System
- **4 Applicazioni Demo**: Sempre disponibili per test
- **Reset Automatico**: Database pulito ogni notte
- **Credenziali Facilitate**: Login automatico per demo
- **Banda Demo**: Sempre visibile durante i test

## 🔧 Architettura Tecnica

### Backend Structure
```
app/
├── Http/Controllers/
│   ├── LeadController.php          # Gestione lead e form contatti
│   └── LegalController.php         # Pagine legali (privacy, terms)
├── Services/
│   └── TaskManagerService.php     # Integrazione sistema task
├── Console/Commands/
│   └── ResetDemoDatabase.php      # Reset automatico demo
└── Models/
    └── Lead.php                   # Modello lead con tracking
```

### Frontend Structure
```
resources/views/
├── homepage.blade.php             # Landing page principale
├── components/
│   ├── cookie-consent.blade.php   # Banner cookie GDPR
│   ├── demo-login-info.blade.php  # Info login demo
│   ├── seo-meta.blade.php         # Meta tags SEO
│   └── analytics.blade.php        # Google Analytics
├── privacy.blade.php              # Privacy policy
├── cookies.blade.php              # Cookie policy
└── terms.blade.php                # Terms of service
```

### Integrations
- **Task Manager API**: Creazione automatica ticket da lead
- **Google Analytics**: Tracking con consenso cookie
- **WhatsApp Business**: Integrazione chat diretta
- **Email System**: Notifiche automatiche

## 📊 Analytics & Tracking

### Lead Tracking
- **Sorgenti**: Website, social, referral
- **UTM Parameters**: Campaign, medium, source
- **Conversioni**: Form submission to ticket creation
- **Performance**: Response times e success rates

### Demo Usage
- **Accessi**: Tracking utilizzo demo applications
- **Funzionalità**: Most used features
- **Feedback**: User behavior analysis
- **Conversioni**: Demo to lead conversion

## 🛡️ Sicurezza

### Data Protection
- **GDPR Compliance**: Completa conformità europea
- **SSL Encryption**: Certificati inclusi in tutti i piani
- **Database Security**: Backup crittografati
- **Access Control**: Autenticazione multi-livello

### Privacy Features
- **Cookie Management**: Controllo granulare utente
- **Data Minimization**: Solo dati necessari
- **Right to Erasure**: Cancellazione su richiesta
- **Transparency**: Informazioni chiare su uso dati

## 🚀 Deployment

### Production Setup
```bash
# Ottimizzazioni produzione
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Setup cron per demo reset
./setup-demo-cron.sh

# SSL e sicurezza
# Configurare SSL certificate
# Impostare firewall rules
# Configurare backup automatici
```

### Environment Variables
```env
APP_NAME="Gestionale Su Misura"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://gestionale-su-misura.it

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_DATABASE=gestionale_su_misura
DB_USERNAME=your_username
DB_PASSWORD=your_password

# Task Manager Integration
TASK_MANAGER_URL=https://task-manager.example.com
TASK_MANAGER_API_KEY=your_secure_api_key

# Analytics
GOOGLE_ANALYTICS_ID=GA_MEASUREMENT_ID
```

## 📈 Business Metrics

### Key Performance Indicators
- **Lead Generation**: Form submissions per month
- **Conversion Rate**: Lead to customer conversion
- **Demo Usage**: Active demo sessions
- **Customer Satisfaction**: Support ticket resolution time

### Revenue Tracking
- **Development Revenue**: Credits sold per month
- **Hosting Revenue**: Monthly recurring revenue
- **Customer Lifetime Value**: Average customer value
- **Churn Rate**: Customer retention metrics

## 🤝 Integrazione Task Manager

### API Integration
- **Endpoint**: `POST /api/leads/create`
- **Authentication**: API key based
- **Data Flow**: Lead → Customer → Request
- **Error Handling**: Graceful degradation

### Workflow Automation
1. **Lead Submission**: User compila form website
2. **Data Validation**: Controllo dati e spam protection
3. **Ticket Creation**: Creazione automatica ticket
4. **Customer Management**: Gestione anagrafica cliente
5. **Follow-up**: Email automatiche e tracking

## 📞 Contatti Business

### PromoWeb Studio
- **Ragione Sociale**: PromoWeb Studio di R. Roscilli
- **Indirizzo**: Via Molfetta 24, 00171 Roma
- **P.IVA**: 10587780585
- **WhatsApp**: +39 328 291 4852
- **Email**: info@gestionale-su-misura.it

### Canali di Supporto
- **WhatsApp Business**: Chat diretta per supporto immediato
- **Email**: Supporto formale e documentazione
- **Demo**: Test gratuito delle funzionalità
- **Consulenza**: Analisi esigenze personalizzata

## 📄 Licenza

Questo progetto è rilasciato sotto licenza MIT. Vedi il file `LICENSE` per i dettagli.

## 🎉 Ringraziamenti

- Laravel Framework per l'eccellente architettura
- Bootstrap per il framework CSS responsive
- Comunità open source per i contributi
- Clienti che hanno testato e migliorato il sistema

---

**Gestionale Su Misura** - Trasforma le tue esigenze in software personalizzato! 🚀

Made with ❤️ in Italy
