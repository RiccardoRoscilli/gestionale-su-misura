<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Services\TaskManagerService;
use App\Mail\LeadSubmittedMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    protected $taskManagerService;

    public function __construct(TaskManagerService $taskManagerService)
    {
        $this->taskManagerService = $taskManagerService;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Lead::rules());

        if ($validator->fails()) {
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Dati non validi',
                    'errors' => $validator->errors()
                ], 422);
            }
            
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            // Create lead in local database
            $lead = Lead::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company' => $request->company,
                'description' => $request->description,
                'status' => 'new',
                'source' => 'website',
                'utm_source' => $request->get('utm_source'),
                'utm_medium' => $request->get('utm_medium'),
                'utm_campaign' => $request->get('utm_campaign'),
            ]);

            // Send confirmation email to the lead
            try {
                Mail::to($lead->email)->send(new LeadSubmittedMail($lead));
                Log::info('Confirmation email sent to lead', ['lead_id' => $lead->id, 'email' => $lead->email]);
            } catch (\Exception $e) {
                Log::error('Failed to send confirmation email to lead', [
                    'lead_id' => $lead->id,
                    'email' => $lead->email,
                    'error' => $e->getMessage()
                ]);
            }

            // Create ticket in task management system
            $ticketResult = $this->taskManagerService->createTicketFromLead($lead);
            
            if ($ticketResult['success']) {
                // Update lead with ticket information
                $lead->update([
                    'task_manager_request_id' => $ticketResult['data']['request_id'] ?? null,
                    'task_manager_customer_id' => $ticketResult['data']['customer_id'] ?? null,
                    'status' => 'ticket_created'
                ]);

                Log::info('Lead successfully converted to ticket', [
                    'lead_id' => $lead->id,
                    'request_id' => $ticketResult['data']['request_id'] ?? null
                ]);
            } else {
                Log::warning('Failed to create ticket from lead', [
                    'lead_id' => $lead->id,
                    'error' => $ticketResult['message'] ?? 'Unknown error'
                ]);
                
                // Lead is still saved locally even if ticket creation fails
                $lead->update(['status' => 'ticket_failed']);
            }

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Richiesta inviata con successo! Ti contatteremo entro 24 ore con la tua demo personalizzata.',
                    'lead_id' => $lead->id,
                    'ticket_created' => $ticketResult['success'] ?? false
                ]);
            }

            return redirect()->route('home')
                ->with('success', 'Richiesta inviata con successo! Ti contatteremo entro 24 ore con la tua demo personalizzata.');

        } catch (\Exception $e) {
            Log::error('Error processing lead', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString(),
                'request_data' => $request->all()
            ]);

            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Errore durante l\'invio della richiesta. Riprova più tardi.'
                ], 500);
            }

            return redirect()->back()
                ->with('error', 'Errore durante l\'invio della richiesta. Riprova più tardi.')
                ->withInput();
        }
    }
}
