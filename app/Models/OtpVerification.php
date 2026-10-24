<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class OtpVerification extends Model
{
    protected $fillable = [
        'token',
        'verifiable_type',
        'verifiable_id',
        'mobile',
        'otp_hash',
        'expires_at',
        'attempts',
        'resend_count',
        'last_sent_at',
        'verified_at',
        'ip_address',
    ];

    protected $hidden = [
        'otp_hash',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'last_sent_at' => 'datetime',
        'verified_at' => 'datetime',
    ];

    /**
     * The enquiry / application this OTP belongs to.
     */
    public function verifiable(): MorphTo
    {
        return $this->morphTo();
    }
}