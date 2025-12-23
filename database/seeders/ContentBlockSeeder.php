<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentBlockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contentBlocks = [
            [
                'key' => 'hero_title',
                'title' => 'Titolo Hero Section',
                'content' => 'Sostituisci Excel con un Gestionale Su Misura',
                'is_active' => true,
            ],
            [
                'key' => 'hero_subtitle',
                'title' => 'Sottotitolo Hero Section',
                'content' => 'Software personalizzato per PMI. Sviluppo rapido con AI. Da 10€ per funzionalità.',
                'is_active' => true,
            ],
            [
                'key' => 'problem_title',
                'title' => 'Titolo Sezione Problema',
                'content' => 'Il Problema di Excel',
                'is_active' => true,
            ],
            [
                'key' => 'problem_content',
                'title' => 'Contenuto Sezione Problema',
                'content' => 'Excel va bene per iniziare, ma quando l\'azienda cresce servono strumenti professionali. Non è multiutente, si corrompe facilmente e non permette automazioni avanzate.',
                'is_active' => true,
            ],
            [
                'key' => 'solution_title',
                'title' => 'Titolo Sezione Soluzione',
                'content' => 'La Soluzione Personalizzata',
                'is_active' => true,
            ],
            [
                'key' => 'solution_content',
                'title' => 'Contenuto Sezione Soluzione',
                'content' => 'Un gestionale su misura risolve i tuoi problemi specifici. Multiutente, sicuro, con automazioni complete. Niente funzioni inutili che paghi ma non usi.',
                'is_active' => true,
            ],
            [
                'key' => 'ai_title',
                'title' => 'Titolo Sezione AI',
                'content' => 'Innovazione AI Agentica',
                'is_active' => true,
            ],
            [
                'key' => 'ai_content',
                'title' => 'Contenuto Sezione AI',
                'content' => 'Grazie all\'AI Agentica, quello che prima costava decine di migliaia di euro e mesi di sviluppo, ora è accessibile a tutte le PMI. MVP<sup class="mvp-tooltip" data-bs-toggle="tooltip" data-bs-placement="top" title="Minimum Viable Product - Versione base funzionante del software con le caratteristiche essenziali">*</sup> funzionante in ore, non mesi.',
                'is_active' => true,
            ],
            [
                'key' => 'form_title',
                'title' => 'Titolo Form Lead',
                'content' => 'Richiedi la Tua Demo in Poche Ore',
                'is_active' => true,
            ],
            [
                'key' => 'form_subtitle',
                'title' => 'Sottotitolo Form Lead',
                'content' => 'Descrivi le tue esigenze, riceverai una demo personalizzata in 24h',
                'is_active' => true,
            ],
        ];

        foreach ($contentBlocks as $block) {
            \DB::table('content_blocks')->updateOrInsert(
                ['key' => $block['key']],
                array_merge($block, ['updated_at' => now()])
            );
        }
    }
}
