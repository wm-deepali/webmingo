<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmsTemplate extends Model
{
    protected $fillable = [
        'event_key',
        'enabled',
        'dlt_template_id',
        'template_type',
        'body',
        'extra_settings',
    ];

    protected $casts = [
        'enabled'        => 'boolean',
        'extra_settings' => 'array',
    ];

    /**
     * All valid event keys, in sidebar display order.
     * Changing this list is the only thing needed to add/remove events.
     */
    public static array $eventKeys = [
        'otp',
        'admin-customer-detail',
    ];

    /**
     * Human-readable metadata for each event key.
     * Used in the blade to render nav labels, icons, descriptions.
     */
    public static function eventMeta(): array
    {
        return [
            'otp' => [
                'label'       => 'OTP MSG',
                'icon'        => 'fa fa-key',
                'desc'        => 'Sent to the customer / candidate on form submit to verify their mobile number.',
                'default_type'=> 'transactional',
                'default_body'=> '{otp} is the One Time Password(OTP) to verify your MOB number at Web Mingo, This OTP is Usable only once and is valid for 10 min,PLS DO NOT SHARE THE OTP WITH ANYONE',
                'vars'        => [
                    '{otp}'        => 'OTP Code',
                    '{otp_expiry}' => 'Expiry (min)',
                    '{brand_name}' => 'Brand Name',
                ],
                'extras' => 'otp',
            ],
            'admin-customer-detail' => [
                'label'       => 'Customer Detail to Admin',
                'icon'        => 'fa fa-user',
                'desc'        => 'Sent to the admin mobile number with the customer\'s Name, Mobile Number and Service.',
                'default_type'=> 'transactional',
                // Placeholder — final DLT-approved text will be provided by the client
                'default_body'=> 'New enquiry. Name: {customer_name}, Mobile: {customer_mobile}, Service: {service}',
                'vars'        => [
                    '{customer_name}'   => 'Customer Name',
                    '{customer_mobile}' => 'Customer Mobile',
                    '{service}'         => 'Service',
                ],
                'extras' => null,
            ],
        ];
    }

    /**
     * Returns the template only when it exists AND is enabled, else null.
     * Use this as the template-level gate before sending.
     */
    public static function active(string $eventKey): ?self
    {
        return static::where('event_key', $eventKey)->where('enabled', true)->first();
    }

    /**
     * Get badge class and label for the nav sidebar.
     * Returns ['class' => 'active-badge|draft-badge|off-badge', 'label' => 'On|Draft|Off']
     */
    public function navBadge(): array
    {
        if ($this->enabled) {
            return ['class' => 'active-badge', 'label' => 'On'];
        }

        // Has a body saved but not enabled → Draft
        if (!empty($this->body)) {
            return ['class' => 'draft-badge', 'label' => 'Draft'];
        }

        return ['class' => 'off-badge', 'label' => 'Off'];
    }

    /**
     * Returns the status badge HTML shown in the panel header.
     */
    public function statusBadgeHtml(): string
    {
        if ($this->enabled) {
            return '<span style="font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;background:var(--green-bg);color:var(--green);border:1px solid var(--green-border)">
                        <i class="fa fa-circle" style="font-size:7px;margin-right:4px"></i>Active
                    </span>';
        }

        if (!empty($this->body)) {
            return '<span style="font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;background:var(--amber-bg);color:var(--amber);border:1px solid var(--amber-border)">Draft</span>';
        }

        return '<span style="font-size:11px;font-weight:700;padding:3px 10px;border-radius:20px;background:var(--bg);color:var(--text-hint);border:1px solid var(--border)">Off</span>';
    }
}