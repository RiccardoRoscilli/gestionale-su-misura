<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ResetDemoDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:reset {--force : Force reset without confirmation}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset demo database with fresh seed data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Check if we're in demo mode
        if (!config('app.demo_mode', false)) {
            $this->error('This command can only be run in demo mode!');
            return 1;
        }

        if (!$this->option('force')) {
            if (!$this->confirm('This will completely reset the database. Are you sure?')) {
                $this->info('Operation cancelled.');
                return 0;
            }
        }

        $this->info('Starting demo database reset...');

        try {
            // Disable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');

            // Get all tables except migrations
            $tables = DB::select('SHOW TABLES');
            $databaseName = DB::getDatabaseName();
            $tableKey = "Tables_in_{$databaseName}";

            $this->info('Truncating tables...');
            $bar = $this->output->createProgressBar(count($tables));

            foreach ($tables as $table) {
                $tableName = $table->$tableKey;
                
                // Skip migrations table
                if ($tableName === 'migrations') {
                    continue;
                }

                DB::table($tableName)->truncate();
                $bar->advance();
            }

            $bar->finish();
            $this->newLine();

            // Re-enable foreign key checks
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            // Run seeders
            $this->info('Running seeders...');
            Artisan::call('db:seed', ['--force' => true]);

            // Log the reset
            Log::info('Demo database reset completed', [
                'timestamp' => now(),
                'tables_reset' => count($tables) - 1, // Exclude migrations
            ]);

            $this->info('Demo database reset completed successfully!');
            $this->info('Fresh demo data has been seeded.');

            return 0;

        } catch (\Exception $e) {
            // Re-enable foreign key checks in case of error
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');

            Log::error('Demo database reset failed', [
                'error' => $e->getMessage(),
                'timestamp' => now(),
            ]);

            $this->error('Database reset failed: ' . $e->getMessage());
            return 1;
        }
    }
}
