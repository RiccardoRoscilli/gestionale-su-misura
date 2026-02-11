<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Demo Mode
    |--------------------------------------------------------------------------
    |
    | This value determines if the application is running in demo mode.
    | When enabled, it shows demo banners and allows database resets.
    |
    */
    'enabled' => env('DEMO_MODE', false),

    /*
    |--------------------------------------------------------------------------
    | Demo Reset Time
    |--------------------------------------------------------------------------
    |
    | The time when the demo database should be reset daily (24-hour format).
    |
    */
    'reset_time' => env('DEMO_RESET_TIME', '01:00'),

    /*
    |--------------------------------------------------------------------------
    | Demo Credentials
    |--------------------------------------------------------------------------
    |
    | Default credentials for demo access.
    |
    */
    'credentials' => [
        'email' => env('DEMO_EMAIL', 'admin@demo.it'),
        'password' => env('DEMO_PASSWORD', 'demo123'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Demo Applications
    |--------------------------------------------------------------------------
    |
    | Configuration for different demo applications.
    |
    */
    'apps' => [
        'pulizie' => [
            'name' => 'Gestionale Pulizie',
            'description' => 'Sistema completo per la gestione di aziende di pulizie',
            'url' => 'https://pulizie-demo.gestionale-su-misura.com',
            'features' => [
                'Gestione clienti e sedi',
                'Pianificazione interventi',
                'Gestione operatori',
                'Inventario materiali',
                'Reportistica avanzata'
            ]
        ],
        'ordini' => [
            'name' => 'Gestionale E-commerce',
            'description' => 'Integrazione con Magento/Shopify per gestione ordini',
            'url' => 'https://ordini-demo.gestionale-su-misura.it',
            'features' => [
                'Sincronizzazione ordini',
                'Gestione magazzino',
                'Tracking spedizioni',
                'Gestione fornitori',
                'Analytics vendite'
            ]
        ],
        'cantieri' => [
            'name' => 'Gestionale Cantieri',
            'description' => 'Sistema per la gestione di cantieri e progetti edili',
            'url' => 'https://cantieri-demo.gestionale-su-misura.it',
            'features' => [
                'Gestione progetti',
                'Pianificazione risorse',
                'Controllo costi',
                'Gestione fornitori',
                'Documentazione cantiere'
            ]
        ],
        'bandi' => [
            'name' => 'Gestionale Bandi',
            'description' => 'Sistema per la gestione di bandi e gare pubbliche',
            'url' => 'https://bandi-demo.gestionale-su-misura.com',
            'features' => [
                'Ricerca bandi',
                'Gestione scadenze',
                'Documentazione',
                'Tracking partecipazioni',
                'Reportistica'
            ]
        ]
    ]
];