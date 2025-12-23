<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'description',
        'status',
        'estimated_credits',
        'source',
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'task_manager_request_id',
        'task_manager_customer_id',
    ];

    protected $casts = [
        'estimated_credits' => 'integer',
    ];

    // Validation rules
    public static function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'company' => 'nullable|string|max:255',
            'description' => 'required|string|max:2000',
            'status' => 'in:new,evaluating,quoted,accepted,rejected,ticket_created,ticket_failed',
            'estimated_credits' => 'nullable|integer|min:0',
            'source' => 'nullable|string|max:100',
            'utm_source' => 'nullable|string|max:100',
            'utm_medium' => 'nullable|string|max:100',
            'utm_campaign' => 'nullable|string|max:100',
            'task_manager_request_id' => 'nullable|integer',
            'task_manager_customer_id' => 'nullable|integer',
        ];
    }

    // Relationships
    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

    // Scopes
    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeAccepted($query)
    {
        return $query->where('status', 'accepted');
    }

    // Accessors
    public function getStatusLabelAttribute()
    {
        $labels = [
            'new' => 'Nuovo',
            'evaluating' => 'In Valutazione',
            'quoted' => 'Preventivato',
            'accepted' => 'Accettato',
            'rejected' => 'Rifiutato',
            'ticket_created' => 'Ticket Creato',
            'ticket_failed' => 'Errore Ticket',
        ];

        return $labels[$this->status] ?? $this->status;
    }

    // Check if lead has associated ticket
    public function hasTicket()
    {
        return !is_null($this->task_manager_request_id);
    }

    // Get ticket URL if available
    public function getTicketUrlAttribute()
    {
        if (!$this->hasTicket()) {
            return null;
        }

        $baseUrl = config('services.task_manager.url');
        return $baseUrl . '/requests/' . $this->task_manager_request_id;
    }
}
