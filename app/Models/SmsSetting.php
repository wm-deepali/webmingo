<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SmsSetting extends Model
{
    protected $table = 'sms_settings';

    protected $fillable = [
        // Provider
        'provider',

        // MSG91
        'msg91_auth_key',
        'msg91_route',
        'msg91_dlt_entity_id',

        // Twilio
        'twilio_account_sid',
        'twilio_auth_token',
        'twilio_from_number',

        // Textlocal
        'textlocal_api_key',
        'textlocal_username',

        // Kaleyra
        'kaleyra_sid',
        'kaleyra_api_key',
        'kaleyra_dlt_entity_id',
        'kaleyra_dlt_template_id',

        // Vonage
        'vonage_api_key',
        'vonage_api_secret',
        'vonage_from',

        // AWS SNS
        'aws_access_key_id',
        'aws_secret_access_key',
        'aws_region',
        'aws_sms_type',

        // Fast2SMS
        'fast2sms_api_key',
        'fast2sms_route',
        'fast2sms_language',

        // Sinch
        'sinch_service_plan_id',
        'sinch_api_token',
        'sinch_from_number',

        // Global
        'sender_id',
        'default_country_code',
        'admin_mobile_number',
        'enabled',

        // Notification toggles
        'notify_otp',
        'notify_admin_customer_detail',
    ];

    /**
     * Encrypt sensitive credential fields at rest.
     * Requires APP_KEY to be set (uses Laravel's built-in AES-256 encryption).
     */
    protected $casts = [
        // Secrets — stored encrypted
        'msg91_auth_key' => 'encrypted',
        'twilio_auth_token' => 'encrypted',
        'textlocal_api_key' => 'encrypted',
        'kaleyra_api_key' => 'encrypted',
        'vonage_api_secret' => 'encrypted',
        'aws_secret_access_key' => 'encrypted',
        'fast2sms_api_key' => 'encrypted',
        'sinch_api_token' => 'encrypted',

        // Booleans
        'enabled' => 'boolean',
        'notify_otp' => 'boolean',
        'notify_admin_customer_detail' => 'boolean',
    ];

    /**
     * Always return the single settings row.
     *
     * Takes the first row whatever its id is. firstOrCreate(['id' => 1]) cannot work:
     * id is not mass assignable, so whenever the existing row's id is not 1 a brand
     * new row would be created on every call instead of updating the existing one.
     */
    public static function getInstance(): self
    {
        return static::query()->orderBy('id')->first() ?? static::create([]);
    }

    /**
     * Is a given notification event enabled here?
     * Master switch AND the event toggle must both be on.
     * The matching SmsTemplate must also be enabled (see SmsTemplate::active()).
     *
     * Events: 'otp', 'admin_customer_detail'
     */
    public function shouldNotify(string $event): bool
    {
        return $this->enabled && (bool) ($this->{"notify_{$event}"} ?? false);
    }
}