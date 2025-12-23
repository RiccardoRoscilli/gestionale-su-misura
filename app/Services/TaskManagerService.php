<?php

namespace App\Services;

use App\Models\Lead;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class TaskManagerService
{
    protected $baseUrl;
    protected $apiKey;
    protected $timeout;

    public function __construct()
    {
        $this->baseUrl = config('services.task_manager.url');
        $this->apiKey = config('services.task_manager.api_key');
        $this->timeout = config('services.task_manager.timeout', 30);
    }

    /**
     * Create a ticket in the task management system from a lead
     */
    public function createTicketFromLead(Lead $lead): array
    {
        try {
            if (!$this->baseUrl || !$this->apiKey) {
                Log::warning('Task Manager service not configured');
                return [
                    'success' => false,
                    'message' => 'Task Manager service not configured'
                ];
            }

            $response = Http::timeout($this->timeout)
                ->post($this->baseUrl . '/api/leads/create', [
                    'name' => $lead->name,
                    'email' => $lead->email,
                    'phone' => $lead->phone,
                    'company' => $lead->company,
                    'description' => $lead->description,
                    'source' => $lead->source,
                    'api_key' => $this->apiKey
                ]);

            if ($response->successful()) {
                $data = $response->json();
                
                Log::info('Successfully created ticket from lead', [
                    'lead_id' => $lead->id,
                    'response' => $data
                ]);

                return [
                    'success' => true,
                    'message' => $data['message'] ?? 'Ticket created successfully',
                    'data' => $data['data'] ?? []
                ];
            } else {
                $errorData = $response->json();
                
                Log::error('Failed to create ticket from lead', [
                    'lead_id' => $lead->id,
                    'status' => $response->status(),
                    'response' => $errorData
                ]);

                return [
                    'success' => false,
                    'message' => $errorData['message'] ?? 'Failed to create ticket',
                    'errors' => $errorData['errors'] ?? []
                ];
            }

        } catch (\Exception $e) {
            Log::error('Exception while creating ticket from lead', [
                'lead_id' => $lead->id,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return [
                'success' => false,
                'message' => 'Connection error: ' . $e->getMessage()
            ];
        }
    }

    /**
     * Test the connection to the task management system
     */
    public function testConnection(): array
    {
        try {
            if (!$this->baseUrl || !$this->apiKey) {
                return [
                    'success' => false,
                    'message' => 'Task Manager service not configured'
                ];
            }

            // Create a test request
            $response = Http::timeout(10)
                ->post($this->baseUrl . '/api/leads/create', [
                    'name' => 'Test Connection',
                    'email' => 'test@example.com',
                    'description' => 'Test connection from website',
                    'source' => 'test',
                    'api_key' => $this->apiKey
                ]);

            return [
                'success' => $response->successful(),
                'status' => $response->status(),
                'message' => $response->successful() ? 'Connection successful' : 'Connection failed',
                'response' => $response->json()
            ];

        } catch (\Exception $e) {
            return [
                'success' => false,
                'message' => 'Connection error: ' . $e->getMessage()
            ];
        }
    }
}