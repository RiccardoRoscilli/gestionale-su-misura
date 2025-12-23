<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \DB::table('users')->updateOrInsert(
            ['email' => 'admin@gestionale-su-misura.it'],
            [
                'name' => 'Admin',
                'email' => 'admin@gestionale-su-misura.it',
                'email_verified_at' => now(),
                'password' => \Hash::make('admin123!'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
}
