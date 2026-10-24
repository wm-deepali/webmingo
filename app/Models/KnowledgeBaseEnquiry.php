<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KnowledgeBaseEnquiry extends Model
{
    public const NEEDS = [
        'website' => 'Website',
        'ecommerce' => 'E-Commerce',
        'web-application' => 'Web Application',
        'seo' => 'SEO',
        'digital-marketing' => 'Digital Marketing',
        'redesign' => 'Website Redesign',
        'security' => 'Security',
        'maintenance' => 'Maintenance',
        'other' => 'Other',
    ];

    public const STATUSES = [
        'new' => 'New',
        'contacted' => 'Contacted',
        'closed' => 'Closed',
    ];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'need',
        'message',
        'status',
        'ip_address',
        'mobile_verified',
        'mobile_verified_at',
        'admin_notified_at'
    ];

    public function getNeedLabelAttribute(): string
    {
        return self::NEEDS[$this->need] ?? ucfirst($this->need);
    }

    public function getStatusLabelAttribute(): string
    {
        return self::STATUSES[$this->status] ?? ucfirst($this->status);
    }
}