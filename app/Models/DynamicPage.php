<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DynamicPage extends Model
{
    protected $fillable = [
        'page_name',
        'heading',
        'content',
        'meta_title',
        'meta_description',
        'status'
    ];

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    // "Terms & Conditions" => "terms-conditions"
    public function getSlugAttribute(): string
    {
        return Str::slug($this->page_name);
    }

    public function getUrlAttribute(): string
    {
        return route('dynamic-page', $this->slug);
    }
}