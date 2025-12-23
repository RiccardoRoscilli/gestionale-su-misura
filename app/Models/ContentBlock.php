<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentBlock extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'title',
        'content',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Validation rules
    public static function rules()
    {
        return [
            'key' => 'required|string|max:100|unique:content_blocks,key',
            'title' => 'required|string|max:255',
            'content' => 'required|string|max:5000',
            'is_active' => 'boolean',
        ];
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeByKey($query, $key)
    {
        return $query->where('key', $key);
    }

    // Static helper methods
    public static function getContent($key, $default = '')
    {
        $block = static::active()->byKey($key)->first();
        return $block ? $block->content : $default;
    }

    public static function getTitle($key, $default = '')
    {
        $block = static::active()->byKey($key)->first();
        return $block ? $block->title : $default;
    }

    // Accessors
    public function getPreviewAttribute()
    {
        return \Str::limit($this->content, 100);
    }
}
