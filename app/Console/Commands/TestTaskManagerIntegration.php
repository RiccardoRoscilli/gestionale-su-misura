<?php

namespace App\Console\Commands;

use App\Services\TaskManagerService;
use Illuminate\Console\Command;

class TestTaskManagerIntegration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'task-manager:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Test the connection to the task management system';

    /**
     * Execute the console command.
     */
    public function handle(TaskManagerService $taskManagerService)
    {
        $this->info('Testing Task Manager integration...');
        
        $result = $taskManagerService->testConnection();
        
        if ($result['success']) {
            $this->info('✅ Connection successful!');
            $this->line('Status: ' . $result['status']);
            $this->line('Message: ' . $result['message']);
            
            if (isset($result['response'])) {
                $this->line('Response: ' . json_encode($result['response'], JSON_PRETTY_PRINT));
            }
        } else {
            $this->error('❌ Connection failed!');
            $this->line('Message: ' . $result['message']);
            
            if (isset($result['status'])) {
                $this->line('Status: ' . $result['status']);
            }
        }
        
        return $result['success'] ? 0 : 1;
    }
}