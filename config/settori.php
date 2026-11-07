<?php

/*
|--------------------------------------------------------------------------
| Pagine per settore
|--------------------------------------------------------------------------
| Ogni voce genera una pagina pubblica /{slug} (vedi routes/web.php) ed è
| inclusa nella sitemap. I testi descrivono solo funzioni presenti nelle
| demo reali: se una demo cambia, aggiornare anche qui.
*/

return [

    'gestionale-imprese-di-pulizie' => [
        'title' => 'Gestionale per Imprese di Pulizie su Misura | Gestionale Su Misura',
        'description' => 'Gestionale per imprese di pulizie: clienti e sedi, pianificazione interventi, operatori e inventario materiali. Demo gratuita e sviluppo su misura a prezzo fisso.',
        'h1' => 'Gestionale per Imprese di Pulizie',
        'lead' => 'Clienti, sedi, interventi, operatori e materiali in un unico software nel cloud, al posto di fogli Excel, chat e agende di carta.',
        'icon' => 'fa-broom',
        'color' => 'primary',
        'problems' => [
            'Gli interventi sono pianificati su Excel o WhatsApp e ogni cambio di turno diventa un giro di telefonate.',
            'Non sai con certezza chi è andato dove, quando e per quanto tempo.',
            'Prodotti e attrezzature finiscono senza preavviso perché le giacenze non sono aggiornate.',
        ],
        'features' => [
            ['fa-building', 'Clienti e sedi', 'Anagrafica dei clienti con tutte le sedi operative da pulire, contatti e note.'],
            ['fa-calendar-alt', 'Pianificazione interventi', 'Programmi gli interventi per sede e li segui fino alla chiusura.'],
            ['fa-users', 'Operatori', 'Assegni gli operatori agli interventi e vedi il lavoro di ciascuno.'],
            ['fa-boxes', 'Inventario materiali', 'Giacenze di prodotti, attrezzature e macchinari sempre sotto controllo.'],
            ['fa-chart-bar', 'Dashboard e report', 'Statistiche e report operativi per decidere con i numeri.'],
            ['fa-user-shield', 'Ruoli e permessi', 'Amministratore, coordinatore e operatore vedono solo quello che serve.'],
        ],
        'custom' => 'Su questa base aggiungiamo quello che serve alla tua impresa: presenze con timbratura da telefono, checklist per ogni sede, foto prima/dopo, contratti e fatturazione, collegamento al tuo software di contabilità.',
        'demo' => ['route' => 'demo.pulizie', 'label' => 'Prova la demo Pulizie'],
        'faqs' => [
            ['Posso provarlo prima di decidere?', 'Sì: la demo è gratuita e senza registrazione, con dati di esempio. Inoltre, raccontandoci come lavori, entro 48 ore ricevi un prototipo con i tuoi dati di esempio.'],
            ['Gli operatori possono usarlo dal telefono?', 'Sì, il gestionale funziona nel browser di qualsiasi smartphone, senza installare nulla.'],
            ['Posso importare i miei clienti da Excel?', 'Sì, l\'importazione dei dati da Excel è inclusa in tutti i pacchetti.'],
            ['Quanto costa?', 'Lo sviluppo è a prezzo fisso, a partire da €2.900 con consegna in 2 settimane. L\'hosting nel cloud, con backup e sicurezza gestiti da noi, è un canone mensile separato.'],
        ],
    ],

    'gestionale-officina' => [
        'title' => 'Gestionale per Officina, Carrozzeria e Gommista | Gestionale Su Misura',
        'description' => 'Gestionale per officine, carrozzerie e gommisti: registro veicoli con QR code, storico condiviso e preventivi in PDF. Demo gratuita e sviluppo su misura.',
        'h1' => 'Gestionale per Officina, Carrozzeria e Gommista',
        'lead' => 'Veicoli, storico e preventivi in un unico posto: ogni mezzo ha il suo QR code e la sua scheda, consultabile in un attimo da tutta la rete.',
        'icon' => 'fa-car',
        'color' => 'danger',
        'problems' => [
            'Lo storico dei lavori di un veicolo è sparso tra fogli, gestionali diversi e la memoria di chi c\'era.',
            'Preparare un preventivo con voci di lavoro e ricambi richiede troppo tempo.',
            'Officina, carrozzeria e gommista non condividono le informazioni sullo stesso mezzo.',
        ],
        'features' => [
            ['fa-car-side', 'Registro veicoli', 'Auto e moto con targa, proprietario e dati del mezzo, ricercabili in un attimo.'],
            ['fa-qrcode', 'QR code per veicolo', 'Ogni mezzo ha il suo QR code da stampare: lo scansioni e si apre la scheda.'],
            ['fa-history', 'Storico condiviso', 'La storia del veicolo resta in un unico posto, visibile alle attività della rete.'],
            ['fa-file-invoice', 'Preventivi in PDF', 'Voci di lavoro e ricambi, stati del preventivo e PDF da inviare al cliente.'],
            ['fa-store', 'Più attività', 'Officina auto e moto, carrozzeria, gommista e agenzia pratiche nello stesso gestionale.'],
            ['fa-user-shield', 'Ruoli e permessi', 'Amministratore, coordinatore e operatore vedono solo quello che serve.'],
        ],
        'custom' => 'Possiamo aggiungere agenda appuntamenti, promemoria di tagliandi e revisioni, magazzino ricambi, ordini di lavoro e collegamento alla fatturazione elettronica.',
        'demo' => ['route' => 'demo.officina', 'label' => 'Prova la demo Officina'],
        'faqs' => [
            ['A cosa serve il QR code sul veicolo?', 'Lo attacchi al mezzo o alla chiave: scansionandolo con il telefono si apre subito la scheda del veicolo con tutto lo storico.'],
            ['Funziona anche per una sola officina?', 'Sì. La gestione multi-attività è utile alle reti, ma il gestionale funziona anche per una singola officina.'],
            ['Posso provarlo?', 'Sì, la demo è gratuita, con targhe e preventivi inventati che puoi modificare liberamente.'],
            ['Quanto costa?', 'Lo sviluppo è a prezzo fisso, a partire da €2.900 con consegna in 2 settimane. L\'hosting nel cloud è un canone mensile separato.'],
        ],
    ],

    'menu-digitale-qr-code' => [
        'title' => 'Menu Digitale con QR Code per Ristoranti e Pizzerie | Gestionale Su Misura',
        'description' => 'Menu digitale con QR code per ristoranti, pizzerie e bar: carichi il menu, stampi il QR per i tavoli e i clienti lo aprono dal telefono. Prova la demo.',
        'h1' => 'Menu Digitale con QR Code per Ristoranti',
        'lead' => 'Carichi il menu, stampi il QR code per i tavoli e i clienti lo leggono dal telefono. Cambi un piatto o un prezzo e il menu si aggiorna subito.',
        'icon' => 'fa-utensils',
        'color' => 'warning',
        'problems' => [
            'Ogni cambio di prezzo o di piatto significa ristampare i menu cartacei.',
            'I menu cartacei si rovinano e vanno sostituiti spesso.',
            'I clienti chiedono di vedere il menu prima di sedersi o di ordinare da asporto.',
        ],
        'features' => [
            ['fa-file-pdf', 'Carica il menu', 'Carichi il menu del locale e lo aggiorni quando vuoi.'],
            ['fa-qrcode', 'QR code automatico', 'Viene creato un QR code univoco per il tuo menu.'],
            ['fa-mobile-alt', 'Lettura da telefono', 'I clienti scansionano il QR e vedono il menu sullo smartphone.'],
            ['fa-sync', 'Aggiornamento istantaneo', 'Carichi la nuova versione e il menu si aggiorna automaticamente.'],
            ['fa-print', 'Stampa per i tavoli', 'Scarichi e stampi il QR code da mettere sui tavoli o in vetrina.'],
            ['fa-ban', 'Nessuna app', 'Il menu si apre nel browser: i clienti non devono installare nulla.'],
        ],
        'custom' => 'Su misura possiamo aggiungere ordini al tavolo, prenotazioni, menu in più lingue, allergeni per piatto e collegamento alla cassa.',
        'demo' => ['route' => 'demo.menu', 'label' => 'Prova la demo Menu QR'],
        'faqs' => [
            ['I clienti devono scaricare un\'app?', 'No, il menu si apre direttamente nel browser del telefono dopo aver scansionato il QR code.'],
            ['Posso cambiare il menu quando voglio?', 'Sì, carichi la nuova versione e il QR code resta lo stesso: non devi ristampare nulla.'],
            ['Posso vedere un esempio?', 'Sì, nella pagina della demo trovi il link a un menu di esempio e le credenziali per provare il pannello.'],
        ],
    ],

    'gestionale-bandi-contributi' => [
        'title' => 'Gestionale per Bandi e Contributi Pubblici | Gestionale Su Misura',
        'description' => 'Gestionale per bandi e contributi pubblici: bandi, beneficiari, risorse assegnate, piano finanziario e stanziamenti. Demo gratuita e sviluppo su misura.',
        'h1' => 'Gestionale per Bandi e Contributi',
        'lead' => 'Bandi, beneficiari, piano finanziario e stanziamenti in un unico software: sai sempre quanto è stato assegnato, speso e quanto resta.',
        'icon' => 'fa-file-contract',
        'color' => 'info',
        'problems' => [
            'Importi assegnati, spesi e residui sono tenuti su fogli Excel diversi e difficili da far tornare.',
            'Le anagrafiche dei beneficiari, con dati fiscali, PEC e codice SDI, sono incomplete o duplicate.',
            'Preparare un riepilogo per un controllo o una rendicontazione richiede giorni.',
        ],
        'features' => [
            ['fa-folder-open', 'Gestione bandi', 'Bandi con codice, importo, date e stato: attivo, sospeso, chiuso.'],
            ['fa-users', 'Beneficiari', 'Anagrafica completa con dati fiscali, PEC e codice SDI.'],
            ['fa-hand-holding-usd', 'Risorse assegnate', 'Importi per beneficiario e per bando, con esportazione in PDF.'],
            ['fa-sitemap', 'Piano finanziario', 'Linee di finanziamento in misure e voci di spesa, con previsto e speso.'],
            ['fa-coins', 'Stanziamenti', 'Stato di ogni stanziamento: richiesto, concesso, in avanzamento, residuo.'],
            ['fa-user-shield', 'Ruoli e permessi', 'Super amministratore, amministratore e utente in sola lettura.'],
        ],
        'custom' => 'Possiamo aggiungere scadenzari, gestione documentale, collegamento alle fatture elettroniche e report per la rendicontazione nel formato richiesto dall\'ente.',
        'demo' => ['route' => 'demo.bandi', 'label' => 'Prova la demo Bandi'],
        'faqs' => [
            ['È adatto a enti e consorzi?', 'Sì, è pensato per chi gestisce bandi e contributi per conto di più beneficiari e deve tenere traccia di assegnato, speso e residuo.'],
            ['Posso dare accesso in sola lettura?', 'Sì, il ruolo utente consulta i dati senza poterli modificare.'],
            ['Quanto costa?', 'Lo sviluppo è a prezzo fisso, a partire da €2.900 con consegna in 2 settimane. L\'hosting nel cloud è un canone mensile separato.'],
        ],
    ],

    'gestionale-richieste-clienti' => [
        'title' => 'Gestionale Richieste e Ticket Clienti con Ore e Fatturazione | Gestionale Su Misura',
        'description' => 'Gestionale per richieste e ticket dei clienti: workflow, assegnazione al team, ore lavorate, chat interna e fatturazione. Demo gratuita e sviluppo su misura.',
        'h1' => 'Gestionale per Richieste, Ticket e Ore Lavorate',
        'lead' => 'Ogni richiesta dei clienti diventa un ticket con stato, responsabile, ore lavorate e fattura: niente più email perse e ore non fatturate.',
        'icon' => 'fa-tasks',
        'color' => 'success',
        'problems' => [
            'Le richieste dei clienti arrivano da email, telefono e chat e qualcuna si perde.',
            'Non sai chi sta lavorando a cosa né a che punto è ogni richiesta.',
            'Le ore lavorate non vengono registrate e a fine mese una parte del lavoro non viene fatturata.',
        ],
        'features' => [
            ['fa-inbox', 'Gestione richieste', 'Crei e gestisci richieste di intervento, nuove funzioni e progetti.'],
            ['fa-stream', 'Workflow completo', 'Stato di ogni richiesta, da "in corso" a "completato", con storico.'],
            ['fa-user-check', 'Assegnazione al team', 'Assegni le richieste e controlli il carico di lavoro di ciascuno.'],
            ['fa-stopwatch', 'Ore lavorate', 'Registri le ore su ogni richiesta con calcolo automatico dei costi.'],
            ['fa-comments', 'Chat interna', 'Conversazione per ogni richiesta, con notifiche e allegati.'],
            ['fa-file-invoice-dollar', 'Fatturazione', 'Fatture generate dalle richieste completate, con integrazione Fattura24.'],
        ],
        'custom' => 'Lo usiamo noi stessi ogni giorno per gestire i clienti: le richieste dal nostro sito arrivano qui in automatico. Possiamo adattarlo a studi, agenzie e assistenza tecnica.',
        'demo' => ['route' => 'demo.task', 'label' => 'Prova la demo Richieste'],
        'faqs' => [
            ['Le richieste possono arrivare in automatico dal sito?', 'Sì, il modulo del sito può creare la richiesta direttamente nel gestionale, come facciamo noi.'],
            ['Funziona per un team piccolo?', 'Sì, è utile già da due o tre persone che lavorano sugli stessi clienti.'],
            ['Quanto costa?', 'Lo sviluppo è a prezzo fisso, a partire da €2.900 con consegna in 2 settimane. L\'hosting nel cloud è un canone mensile separato.'],
        ],
    ],

    'elimina-code-digitale' => [
        'title' => 'Elimina Code Digitale Gratuito con QR Code | Gestionale Su Misura',
        'description' => 'Elimina code digitale gratuito con QR code per farmacie, uffici, studi medici e negozi: i clienti prendono il numero dal telefono e ricevono una notifica.',
        'h1' => 'Elimina Code Digitale Gratuito',
        'lead' => 'I clienti scansionano un QR code, prendono il numero dal telefono e ricevono una notifica quando tocca a loro. Niente rotoli di biglietti, niente sala d\'attesa affollata. Gratis.',
        'icon' => 'fa-ticket-alt',
        'color' => 'primary',
        'free' => true,
        'problems' => [
            'La sala d\'attesa si riempie e i clienti non sanno quanto dovranno aspettare.',
            'I distributori di biglietti costano, si rompono e vanno riforniti.',
            'Chi aspetta non può allontanarsi senza perdere il turno.',
        ],
        'features' => [
            ['fa-qrcode', 'QR code automatico', 'Generi e stampi il QR code da esporre all\'ingresso.'],
            ['fa-ticket-alt', 'Numero dal telefono', 'Il cliente scansiona e riceve il suo numero, senza app da scaricare.'],
            ['fa-clock', 'Tempo di attesa stimato', 'Il cliente vede la sua posizione e quanto manca al suo turno.'],
            ['fa-bell', 'Notifiche', 'Avviso sul telefono quando è quasi il suo turno: può aspettare fuori.'],
            ['fa-layer-group', 'Più code', 'Code separate per servizi diversi della stessa attività.'],
            ['fa-sliders-h', 'Pannello esercente', 'Avanzi la coda con un clic, metti in pausa e consulti le statistiche.'],
        ],
        'custom' => 'Il servizio base è gratuito per sempre. Con i piani a pagamento hai app e colori con il tuo marchio, un indirizzo dedicato e, nel piano Enterprise, il tuo dominio, notifiche promozionali, sondaggio di soddisfazione e statistiche avanzate.',
        'external' => ['url' => 'https://www.elimina-code-digitale.com/business/register', 'label' => 'Attiva gratis Elimina Code'],
        'faqs' => [
            ['È davvero gratuito?', 'Sì, la gestione delle code è gratuita, senza scadenza. Sono a pagamento solo le funzioni extra, come il marchio personalizzato e il dominio dedicato.'],
            ['Per quali attività è adatto?', 'Farmacie, uffici, studi medici, parrucchieri, negozi, sportelli: ovunque i clienti aspettano il proprio turno.'],
            ['I clienti devono installare un\'app?', 'No, basta scansionare il QR code con la fotocamera. Chi vuole può installarlo come app per prendere il numero anche da casa.'],
            ['Serve un hardware dedicato?', 'No, basta un QR code stampato e un telefono, un tablet o un PC per chi gestisce la coda.'],
        ],
    ],

];
