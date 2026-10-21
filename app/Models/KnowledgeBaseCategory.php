<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBaseCategory extends Model
{
    protected $fillable = ['name', 'slug', 'sort_order', 'status'];

    protected $casts = ['status' => 'boolean'];

    public function articles()
    {
        return $this->hasMany(KnowledgeBaseArticle::class, 'category_id');
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