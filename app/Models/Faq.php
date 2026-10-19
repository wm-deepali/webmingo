<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['question', 'answer', 'sort_order', 'show_home', 'status'];

    protected $casts = [
        'show_home' => 'boolean',
        'status'    => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1)->orderBy('sort_order')->orderBy('id');
    }
}