<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandidateStage extends Model
{
    protected $fillable = ['title', 'remarks', 'bucket', 'sort_order', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function scopeActive($q)
    {
        return $q->where('is_active', true);
    }

    public function scopeOrdered($q)
    {
        return $q->orderBy('sort_order')->orderBy('id');
    }

    /** Stage a fresh application starts in (first active stage). */
    public static function defaultId(): ?int
    {
        return static::active()->ordered()->value('id');
    }
}
