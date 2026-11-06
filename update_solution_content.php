<?php

/**
 * Aggiorna il testo della sezione "La Soluzione Personalizzata" (cloud + sicurezza).
 * Uso sul server, dopo il pull: php update_solution_content.php
 */

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

$newContent = 'Un gestionale su misura risolve i tuoi problemi specifici. Multiutente, con automazioni complete e niente funzioni inutili che paghi ma non usi. Gira nel cloud, accessibile ovunque, e la sicurezza dei tuoi dati è la nostra priorità.';

$block = \App\Models\ContentBlock::where('key', 'solution_content')->first();

if ($block) {
    echo "Valore attuale:\n  {$block->content}\n\n";
    $block->content = $newContent;
    $block->save();
} else {
    \App\Models\ContentBlock::create([
        'key' => 'solution_content',
        'title' => 'Contenuto Sezione Soluzione',
        'content' => $newContent,
        'is_active' => true,
    ]);
}

\Illuminate\Support\Facades\Artisan::call('cache:clear');
echo "Aggiornato:\n  {$newContent}\n";
