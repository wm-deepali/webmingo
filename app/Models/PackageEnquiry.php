<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PackageEnquiry extends Model
{
    public const STATUSES = [
        'new' => 'New',
        'contacted' => 'Contacted',
        'closed' => 'Closed',
    ];

    protected $fillable = [
        'name',
        'mobile',
        'email',
        'business_name',
        'business_type',
        'requirements',
        'extra',
        'page',
        'page_url',
        'status',
        'ip_address',
        'user_agent',
        'mobile_verified',
        'mobile_verified_at',
        'admin_notified_at',
    ];

    protected $casts = [
        'extra' => 'array',
        'mobile_verified' => 'boolean',
        'mobile_verified_at' => 'datetime',
        'admin_notified_at' => 'datetime',
    ];

    // "wedding-package" => "Wedding Package"
    public function getPageLabelAttribute(): string
    {
        return Str::headline((string) $this->page);
    }
}