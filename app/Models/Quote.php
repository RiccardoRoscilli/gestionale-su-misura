<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'lead_id',
        'credits',
        'total_amount',
        'description',
        'valid_until',
        'status',
        'sent_at',
        'accepted_at',
    ];

    protected $casts = [
        'credits' => 'integer',
        'total_amount' => 'decimal:2',
        'valid_until' => 'date',
        'sent_at' => 'datetime',
        'accepted_at' => 'datetime',
    ];

    // Validation rules
    public static function rules()
    {
        return [
            'lead_id' => 'required|exists:leads,id',
            'credits' => 'required|integer|min:1',
            'total_amount' => 'required|numeric|min:0',
            'description' => 'nullable|string|max:2000',
            'valid_until' => 'nullable|date|after:today',
            'status' => 'in:draft,sent,accepted,rejected',
        ];
    }

    // Relationships
    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->whereIn('status', ['sent', 'accepted']);
    }

    public function scopeExpired($query)
    {
        return $query->where('valid_until', '<', now())
                    ->where('status', 'sent');
    }

    // Accessors
    public function getStatusLabelAttribute()
    {
        $labels = [
            'draft' => 'Bozza',
            'sent' => 'Inviato',
            'accepted' => 'Accettato',
            'rejected' => 'Rifiutato',
        ];

        return $labels[$this->status] ?? $this->status;
    }

    public function getIsExpiredAttribute()
    {
        return $this->valid_until && $this->valid_until < now() && $this->status === 'sent';
    }
}
