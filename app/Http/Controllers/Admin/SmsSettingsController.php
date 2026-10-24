<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SmsSetting;
use App\Services\Sms\SmsService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SmsSettingsController extends Controller
{

    public function update(Request $request): RedirectResponse
    {
        // Checkboxes are absent when unchecked, so turn them into real booleans first
        $request->merge([
            'enabled' => $request->has('enabled'),
            'notify_otp' => $request->has('notify_otp'),
            'notify_admin_customer_detail' => $request->has('notify_admin_customer_detail'),
        ]);

        $data = $request->validate([
            // Provider
            'provider' => ['nullable', 'string', 'in:msg91,twilio,textlocal,kaleyra,vonage,aws_sns,fast2sms,sinch'],

            // MSG91
            'msg91_auth_key' => ['nullable', 'string'],
            'msg91_route' => ['nullable', 'integer', 'in:1,4'],
            'msg91_dlt_entity_id' => ['nullable', 'string', 'max:50'],

            // Twilio
            'twilio_account_sid' => ['nullable', 'string', 'max:50'],
            'twilio_auth_token' => ['nullable', 'string'],
            'twilio_from_number' => ['nullable', 'string', 'max:20'],

            // Textlocal
            'textlocal_api_key' => ['nullable', 'string'],
            'textlocal_username' => ['nullable', 'email'],

            // Kaleyra
            'kaleyra_sid' => ['nullable', 'string', 'max:50'],
            'kaleyra_api_key' => ['nullable', 'string'],
            'kaleyra_dlt_entity_id' => ['nullable', 'string', 'max:50'],
            'kaleyra_dlt_template_id' => ['nullable', 'string', 'max:50'],

            // Vonage
            'vonage_api_key' => ['nullable', 'string', 'max:20'],
            'vonage_api_secret' => ['nullable', 'string'],
            'vonage_from' => ['nullable', 'string', 'max:15'],

            // AWS SNS
            'aws_access_key_id' => ['nullable', 'string', 'max:50'],
            'aws_secret_access_key' => ['nullable', 'string'],
            'aws_region' => ['nullable', 'string', 'max:30'],
            'aws_sms_type' => ['nullable', 'string', 'in:Transactional,Promotional'],

            // Fast2SMS
            'fast2sms_api_key' => ['nullable', 'string'],
            'fast2sms_route' => ['nullable', 'string', 'in:dlt,v3'],
            'fast2sms_language' => ['nullable', 'string', 'in:english,unicode'],

            // Sinch
            'sinch_service_plan_id' => ['nullable', 'string', 'max:50'],
            'sinch_api_token' => ['nullable', 'string'],
            'sinch_from_number' => ['nullable', 'string', 'max:20'],

            // Global
            'sender_id' => ['nullable', 'string', 'max:11'],
            'default_country_code' => ['nullable', 'digits_between:1,4'],

            // Admin mobile — required only when the Customer Detail SMS is switched on
            'admin_mobile_number' => [
                Rule::requiredIf(fn () => $request->boolean('notify_admin_customer_detail')),
                'nullable',
                'string',
                'max:20',
                'regex:/^[0-9+\-\s]{10,20}$/',
            ],

            // Booleans
            'enabled' => ['nullable', 'boolean'],
            'notify_otp' => ['nullable', 'boolean'],
            'notify_admin_customer_detail' => ['nullable', 'boolean'],
        ], [
            'admin_mobile_number.required' => 'Admin mobile number is required to send the Customer Detail SMS.',
            'admin_mobile_number.regex' => 'Please enter a valid admin mobile number.',
        ]);

        // Normalise boolean fields
        $booleans = [
            'enabled',
            'notify_otp',
            'notify_admin_customer_detail',
        ];

        foreach ($booleans as $key) {
            $data[$key] = $request->boolean($key);
        }

        // Skip saving a secret field if it was left blank (preserve existing value)
        $secrets = [
            'msg91_auth_key',
            'twilio_auth_token',
            'textlocal_api_key',
            'kaleyra_api_key',
            'vonage_api_secret',
            'aws_secret_access_key',
            'fast2sms_api_key',
            'sinch_api_token',
        ];
        foreach ($secrets as $key) {
            if (empty($data[$key])) {
                unset($data[$key]);
            }
        }

        $settings = SmsSetting::getInstance();
        $settings->update($data);

        return redirect()
            ->route(
                'admin.admin-setting.index',
                ['tab' => 'sms']
            )
            ->with('success', 'SMS settings saved successfully.');
    }

    // ── Test SMS ─────────────────────────────────────────────────────────────

    public function test(Request $request)
    {
        $request->validate([
            'mobile' => ['required', 'string', 'max:20'],
        ]);

        try {
            $sms = SmsService::make();
            $mobile = $sms->normalise($request->mobile);
            $result = $sms->send($mobile, 'This is a test SMS from your website. If you received this, your SMS settings are working correctly.');

            if ($result['success']) {
                return response()->json(['success' => true, 'message' => 'Test SMS sent to ' . $mobile]);
            }

            return response()->json(['success' => false, 'message' => 'Failed to send SMS. Check your credentials and try again.'], 422);
        } catch (\Throwable $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}