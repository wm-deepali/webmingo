<?php

namespace App\Services\Otp;

use App\Models\OtpVerification;
use App\Models\Setting;
use App\Models\SmsSetting;
use App\Models\SmsTemplate;
use App\Services\Sms\SmsDispatcher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class OtpService
{
    /** Seconds the user must wait before asking for another OTP. */
    public const RESEND_COOLDOWN = 30;

    /** Extra OTPs allowed per form submission. */
    public const MAX_RESENDS = 3;

    /** New OTP sessions allowed per mobile number per hour (SMS-bombing guard). */
    public const MAX_STARTS_PER_MOBILE_PER_HOUR = 3;

    /**
     * Normalise to a 10-digit Indian mobile number, or null when invalid.
     * Accepts: 9876543210, 09876543210, 919876543210, +91 98765 43210
     */
    public static function normaliseMobile(?string $raw): ?string
    {
        $digits = preg_replace('/\D/', '', (string) $raw);

        if (strlen($digits) === 12 && str_starts_with($digits, '91')) {
            $digits = substr($digits, 2);
        } elseif (strlen($digits) === 11 && str_starts_with($digits, '0')) {
            $digits = substr($digits, 1);
        }

        return preg_match('/^[6-9]\d{9}$/', $digits) ? $digits : null;
    }

    public static function maskMobile(string $mobile): string
    {
        return substr($mobile, 0, 2) . str_repeat('X', max(0, strlen($mobile) - 4)) . substr($mobile, -2);
    }

    /**
     * OTP can run only when SMS is on, the OTP event is on and the OTP template is enabled.
     */
    public static function isAvailable(): bool
    {
        return SmsSetting::getInstance()->shouldNotify('otp')
            && SmsTemplate::active('otp') !== null;
    }

    /**
     * Create an OTP session for a saved enquiry and send the SMS.
     *
     * Returns the data the browser needs to show the OTP step, or null when no OTP
     * could be sent (SMS off, bad number, rate limited, gateway failure). On null the
     * caller must NOT block the enquiry — it is simply treated as unverified.
     */
    public function start(Model $record, string $mobile, ?string $ip = null): ?array
    {
        $settings = SmsSetting::getInstance();
        $template = SmsTemplate::active('otp');

        if (!$settings->enabled || !$settings->notify_otp || !$template) {
            Log::info('OtpService: OTP step skipped, SMS settings are not ready.', [
                'sms_master_enabled' => (bool) $settings->enabled,
                'otp_event_enabled' => (bool) $settings->notify_otp,
                'otp_template_enabled' => (bool) $template,
                'provider' => $settings->provider,
            ]);

            return null;
        }

        $mobile = self::normaliseMobile($mobile);

        if (!$mobile) {
            Log::info('OtpService: OTP step skipped, mobile number is not a valid Indian number.');

            return null;
        }

        $recentStarts = OtpVerification::where('mobile', $mobile)
            ->where('created_at', '>=', now()->subHour())
            ->count();

        if ($recentStarts >= self::MAX_STARTS_PER_MOBILE_PER_HOUR) {
            Log::warning('OtpService: OTP rate limit hit for a mobile number.', ['mobile' => self::maskMobile($mobile)]);

            return null;
        }

        $cfg = $this->otpConfig();
        $otp = $this->generateOtp($cfg['length']);

        $row = OtpVerification::create([
            'token' => Str::random(48),
            'verifiable_type' => $record->getMorphClass(),
            'verifiable_id' => $record->getKey(),
            'mobile' => $mobile,
            'otp_hash' => $this->hash($otp),
            'expires_at' => now()->addMinutes($cfg['expiry']),
            'last_sent_at' => now(),
            'ip_address' => $ip,
        ]);

        if (!$this->sendSms($mobile, $otp, $cfg['expiry'])) {
            Log::warning('OtpService: OTP step skipped, the OTP SMS could not be sent (see SmsDispatcher / MSG91 log lines).', [
                'mobile' => self::maskMobile($mobile),
            ]);

            $row->delete();

            return null;
        }

        return $this->payload($row, $cfg);
    }

    /**
     * Check the OTP typed by the visitor.
     *
     * status: verified | invalid | locked | expired | not_found
     * 'record' (the enquiry) is returned only to the single request that completes the
     * verification, so notifications can never fire twice.
     */
    public function verify(string $token, string $otp): array
    {
        $row = OtpVerification::where('token', $token)->first();

        if (!$row) {
            return [
                'status' => 'not_found',
                'message' => 'This verification session has ended. Please submit the form again.',
            ];
        }

        if ($row->verified_at) {
            return ['status' => 'verified', 'message' => 'Your mobile number is already verified.'];
        }

        $cfg = $this->otpConfig();

        if ($row->expires_at->isPast()) {
            return [
                'status' => 'expired',
                'message' => 'This OTP has expired. Please request a new one.',
            ];
        }

        if ($row->attempts >= $cfg['max_attempts']) {
            return [
                'status' => 'locked',
                'message' => 'Too many incorrect attempts. Please request a new OTP.',
            ];
        }

        if (!hash_equals($row->otp_hash, $this->hash(trim($otp)))) {
            $row->increment('attempts');
            $remaining = max(0, $cfg['max_attempts'] - $row->attempts);

            if ($remaining === 0) {
                return [
                    'status' => 'locked',
                    'message' => 'Too many incorrect attempts. Please request a new OTP.',
                ];
            }

            return [
                'status' => 'invalid',
                'message' => "Incorrect OTP. {$remaining} attempt" . ($remaining === 1 ? '' : 's') . ' left.',
                'remaining_attempts' => $remaining,
            ];
        }

        // Atomic claim: only one request can flip verified_at from null
        $claimed = OtpVerification::whereKey($row->id)
            ->whereNull('verified_at')
            ->update(['verified_at' => now()]);

        if (!$claimed) {
            return ['status' => 'verified', 'message' => 'Your mobile number is already verified.'];
        }

        return [
            'status' => 'verified',
            'message' => "Mobile number verified. Thank you — we've received your details and will get back to you shortly.",
            'record' => $row->verifiable,
        ];
    }

    /**
     * Send a fresh OTP for an existing session.
     *
     * status: resent | wait | limit | send_failed | already_verified | not_found
     */
    public function resend(string $token): array
    {
        $row = OtpVerification::where('token', $token)->first();

        if (!$row) {
            return [
                'status' => 'not_found',
                'message' => 'This verification session has ended. Please submit the form again.',
            ];
        }

        if ($row->verified_at) {
            return ['status' => 'already_verified', 'message' => 'Your mobile number is already verified.'];
        }

        if ($row->last_sent_at) {
            $elapsed = now()->timestamp - $row->last_sent_at->timestamp;

            if ($elapsed < self::RESEND_COOLDOWN) {
                $wait = self::RESEND_COOLDOWN - $elapsed;

                return [
                    'status' => 'wait',
                    'message' => "Please wait {$wait} seconds before requesting another OTP.",
                    'resend_in' => $wait,
                ];
            }
        }

        if ($row->resend_count >= self::MAX_RESENDS) {
            return [
                'status' => 'limit',
                'message' => 'Resend limit reached. You can skip verification or submit the form again.',
            ];
        }

        $cfg = $this->otpConfig();
        $otp = $this->generateOtp($cfg['length']);

        if (!$this->sendSms($row->mobile, $otp, $cfg['expiry'])) {
            return [
                'status' => 'send_failed',
                'message' => 'We could not send the OTP right now. Please try again in a moment.',
            ];
        }

        $row->forceFill([
            'otp_hash' => $this->hash($otp),
            'expires_at' => now()->addMinutes($cfg['expiry']),
            'attempts' => 0,
            'resend_count' => $row->resend_count + 1,
            'last_sent_at' => now(),
        ])->save();

        return [
            'status' => 'resent',
            'message' => 'A new OTP has been sent to your mobile number.',
            'resend_in' => self::RESEND_COOLDOWN,
            'expires_in' => $cfg['expiry'] * 60,
        ];
    }

    /**
     * Visitor chose to continue without verifying: end the session so the OTP can't be used later.
     */
    public function expire(string $token): ?OtpVerification
    {
        $row = OtpVerification::where('token', $token)->first();

        if ($row && !$row->verified_at) {
            $row->forceFill(['expires_at' => now()->subSecond()])->save();
        }

        return $row;
    }

    // ── Internals ────────────────────────────────────────────────────────────

    /**
     * OTP length / expiry / max wrong attempts come from the OTP SMS template (admin panel).
     */
    private function otpConfig(): array
    {
        $extra = SmsTemplate::where('event_key', 'otp')->first()?->extra_settings ?? [];

        return [
            'length' => (int) ($extra['otp_length'] ?? 6),
            'expiry' => (int) ($extra['otp_expiry'] ?? 10),
            'max_attempts' => (int) ($extra['max_retries'] ?? 3),
        ];
    }

    private function payload(OtpVerification $row, array $cfg): array
    {
        return [
            'token' => $row->token,
            'mobile_masked' => self::maskMobile($row->mobile),
            'otp_length' => $cfg['length'],
            'expires_in' => $cfg['expiry'] * 60,
            'resend_in' => self::RESEND_COOLDOWN,
        ];
    }

    private function generateOtp(int $length): string
    {
        return str_pad((string) random_int(0, (10 ** $length) - 1), $length, '0', STR_PAD_LEFT);
    }

    private function hash(string $otp): string
    {
        return hash_hmac('sha256', $otp, (string) config('app.key'));
    }

    private function sendSms(string $mobile, string $otp, int $expiryMinutes): bool
    {
        $result = SmsDispatcher::send('otp', $mobile, [
            '{otp}' => $otp,
            '{otp_expiry}' => (string) $expiryMinutes,
            '{brand_name}' => Setting::first()?->site_name ?? config('app.name'),
        ]);

        return (bool) ($result['success'] ?? false);
    }
}