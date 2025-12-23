<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoAccess extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'demo_name',
        'ip_address',
        'user_agent',
        'session_id',
        'accessed_at',
    ];

    protected $casts = [
        'accessed_at' => 'datetime',
    ];

    // Validation rules
    public static function rules()
    {
        return [
            'demo_name' => 'required|string|max:100',
            'ip_address' => 'nullable|ip',
            'user_agent' => 'nullable|string|max:500',
            'session_id' => 'nullable|string|max:255',
            'accessed_at' => 'required|date',
        ];
    }

    // Scopes
    public function scopeByDemoName($query, $name)
    {
        return $query->where('demo_name', $name);
    }

    public function scopeToday($query)
    {
        return $query->whereDate('accessed_at', today());
    }

    public function scopeThisWeek($query)
    {
        return $query->whereBetween('accessed_at', [
            now()->startOfWeek(),
            now()->endOfWeek()
        ]);
    }

    public function scopeThisMonth($query)
    {
        return $query->whereMonth('accessed_at', now()->month)
                    ->whereYear('accessed_at', now()->year);
    }

    // Accessors
    public function getDemoNameLabelAttribute()
    {
        $labels = [
            'pulizie' => 'App Pulizie',
            'ordini' => 'Gestione Ordini',
            'inventario' => 'Inventario Magazzino',
        ];

        return $labels[$this->demo_name] ?? $this->demo_name;
    }
}
