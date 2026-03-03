<?php

/**
 * Script per aggiornare il sottotitolo hero rimuovendo "Da 10€ per funzionalità"
 */

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->bootstrap();

echo "=== AGGIORNAMENTO HERO SUBTITLE ===\n\n";

// Trova il content block
$contentBlock = \App\Models\ContentBlock::where('key', 'hero_subtitle')->first();

if ($contentBlock) {
    echo "Valore attuale:\n";
    echo "  {$contentBlock->content}\n\n";
    
    // Aggiorna il contenuto
    $newContent = 'Software personalizzato per PMI. Sviluppo rapido con AI.';
    $contentBlock->content = $newContent;
    $contentBlock->save();
    
    echo "✅ Aggiornato con successo!\n\n";
    echo "Nuovo valore:\n";
    echo "  {$newContent}\n\n";
} else {
    echo "❌ Content block 'hero_subtitle' non trovato nel database.\n";
    echo "Creazione nuovo record...\n\n";
    
    \App\Models\ContentBlock::create([
        'key' => 'hero_subtitle',
        'title' => 'Sottotitolo Hero Section',
        'content' => 'Software personalizzato per PMI. Sviluppo rapido con AI.',
        'is_active' => true,
    ]);
    
    echo "✅ Record creato con successo!\n";
}

echo "\n=== FINE ===\n";
