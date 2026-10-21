<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBaseArticle extends Model
{
    protected $fillable = [
        'category_id', 'title', 'slug', 'short_description', 'content',
        'cta_text', 'cta_button_text', 'sort_order', 'status',
    ];

    protected $casts = ['status' => 'boolean'];

    public function category()
    {
        return $this->belongsTo(KnowledgeBaseCategory::class, 'category_id');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('id');
    }
}