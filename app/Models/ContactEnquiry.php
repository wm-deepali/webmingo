<?php

namespace App\Models;

use App\Models\Concerns\ConvertsToLead;
use Illuminate\Database\Eloquent\Model;

class ContactEnquiry extends Model
{
    use ConvertsToLead;

    protected $fillable = [
        'full_name',
        'email',
        'company',
        'phone',
        'service',
        'message',
        'status',
        'ip_address',
        'user_agent',
        'mobile_verified',
        'mobile_verified_at',
        'admin_notified_at'
    ];
}