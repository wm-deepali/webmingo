<?php

namespace App\Services\Enquiry;

use App\Models\CareerApplication;
use App\Models\ContactEnquiry;
use App\Models\KnowledgeBaseEnquiry;
use App\Models\PackageEnquiry;
use App\Models\SmsSetting;
use App\Services\Email\EmailDispatcher;
use App\Services\Otp\OtpService;
use App\Services\Sms\SmsDispatcher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Sends everything that follows a form submission, once the OTP step is settled.
 *
 *  - Admin gets the detail email (and SMS for business enquiries) exactly once,
 *    with "Mobile Verified: Yes/No", whether the visitor verified or not.
 *  - The customer / candidate gets the thank-you email only when verified.
 */
class EnquiryNotifier
{
    /**
     * @param  Model  $record    ContactEnquiry | PackageEnquiry | KnowledgeBaseEnquiry | CareerApplication
     * @param  bool   $verified  true only at the moment the OTP is verified
     */
    public static function resolve(Model $record, bool $verified): void
    {
        if ($verified && !$record->mobile_verified) {
            $record->forceFill([
                'mobile_verified' => true,
                'mobile_verified_at' => now(),
            ])->save();
        }

        self::notifyAdmin($record);

        if ($verified) {
            self::sendThankYou($record);
        }
    }

    // ── Admin ────────────────────────────────────────────────────────────────

    private static function notifyAdmin(Model $record): void
    {
        // Atomic claim so the admin is never notified twice
        $claimed = $record->newQuery()
            ->whereKey($record->getKey())
            ->whereNull('admin_notified_at')
            ->update(['admin_notified_at' => now()]);

        if (!$claimed) {
            return;
        }

        $verified = (bool) $record->mobile_verified;

        try {
            if ($record instanceof ContactEnquiry) {
                self::adminContact($record, $verified);
            } elseif ($record instanceof PackageEnquiry) {
                self::adminPackage($record, $verified);
            } elseif ($record instanceof KnowledgeBaseEnquiry) {
                self::adminKnowledgeBase($record, $verified);
            } elseif ($record instanceof CareerApplication) {
                self::adminCareer($record, $verified);
            }
        } catch (\Throwable $e) {
            Log::error('EnquiryNotifier: admin notification failed.', [
                'record' => get_class($record) . '#' . $record->getKey(),
                'error' => $e->getMessage(),
            ]);
        }
    }

    private static function adminContact(ContactEnquiry $r, bool $verified): void
    {
        EmailDispatcher::sendAdmin(
            'customer-detail',
            "New Enquiry: {$r->full_name} — {$r->service}",
            [
                'Name' => $r->full_name,
                'Email' => $r->email,
                'Mobile' => $r->phone,
                'Company / Brand' => $r->company,
                'Service' => $r->service,
                'Message' => $r->message,
                'Submitted' => self::when($r),
                'IP Address' => $r->ip_address,
            ],
            $verified,
            ['reference' => 'CE-' . $r->id, 'reply_to' => $r->email, 'reply_to_name' => $r->full_name]
        );

        self::smsAdmin($r->full_name, $r->phone, $r->service);
    }

    private static function adminPackage(PackageEnquiry $r, bool $verified): void
    {
        $service = Str::headline((string) $r->page);

        EmailDispatcher::sendAdmin(
            'customer-detail',
            "New Package Enquiry: {$r->name} — {$service}",
            [
                'Name' => $r->name,
                'Mobile' => $r->mobile,
                'Email' => $r->email,
                'Business Name' => $r->business_name,
                'Business Type' => $r->business_type,
                'Requirements' => $r->requirements,
                'Package / Page' => $service,
                'Details' => self::formatExtra($r->extra),
                'Page URL' => $r->page_url,
                'Submitted' => self::when($r),
                'IP Address' => $r->ip_address,
            ],
            $verified,
            ['reference' => 'PE-' . $r->id, 'reply_to' => $r->email, 'reply_to_name' => $r->name]
        );

        self::smsAdmin($r->name, $r->mobile, $service);
    }

    private static function adminKnowledgeBase(KnowledgeBaseEnquiry $r, bool $verified): void
    {
        $service = self::needLabel($r);

        EmailDispatcher::sendAdmin(
            'customer-detail',
            "New Consultation Request: {$r->name} — {$service}",
            [
                'Name' => $r->name,
                'Email' => $r->email,
                'Mobile' => $r->phone,
                'Needs Help With' => $service,
                'Message' => $r->message,
                'Source' => 'Knowledge Base',
                'Submitted' => self::when($r),
                'IP Address' => $r->ip_address,
            ],
            $verified,
            ['reference' => 'KB-' . $r->id, 'reply_to' => $r->email, 'reply_to_name' => $r->name]
        );

        self::smsAdmin($r->name, $r->phone, $service);
    }

    private static function adminCareer(CareerApplication $r, bool $verified): void
    {
        $options = [
            'reference' => 'CA-' . $r->id,
            'reply_to' => $r->email,
            'reply_to_name' => $r->name,
        ];

        if (!empty($r->resume_path) && Storage::exists($r->resume_path)) {
            $options['attachment_path'] = Storage::path($r->resume_path);
            $options['attachment_name'] = Str::slug($r->name ?: 'candidate')
                . '-resume.' . pathinfo($r->resume_path, PATHINFO_EXTENSION);
        }

        EmailDispatcher::sendAdmin(
            'candidate-detail',
            "New Application: {$r->position} — {$r->name}",
            [
                'Name' => $r->name,
                'Email' => $r->email,
                'Mobile' => $r->phone,
                'Position' => $r->position,
                'Apply Type' => $r->apply_type,
                'Location' => $r->location,
                'Experience' => $r->experience,
                'Notice Period' => $r->notice_period,
                'Portfolio' => $r->portfolio,
                'LinkedIn' => $r->linkedin,
                'Cover Letter' => $r->cover_letter,
                'Submitted' => self::when($r),
                'IP Address' => $r->ip_address,
            ],
            $verified,
            $options
        );
    }

    /**
     * Customer Detail SMS to the admin mobile: Name, Mobile Number and Service only.
     */
    private static function smsAdmin(?string $name, ?string $mobile, ?string $service): void
    {
        $adminMobile = SmsSetting::getInstance()->admin_mobile_number;

        if (blank($adminMobile)) {
            return;
        }

        $to = OtpService::normaliseMobile($adminMobile) ?? preg_replace('/\D/', '', $adminMobile);

        SmsDispatcher::send('admin-customer-detail', $to, [
            '{customer_name}' => self::smsValue($name),
            '{customer_mobile}' => self::smsValue($mobile),
            '{service}' => self::smsValue($service),
        ]);
    }

    // ── Customer / candidate ─────────────────────────────────────────────────

    private static function sendThankYou(Model $record): void
    {
        try {
            if ($record instanceof ContactEnquiry && filled($record->email)) {
                EmailDispatcher::send('customer-thank-you', $record->email, [
                    '{customer_name}' => $record->full_name,
                    '{customer_email}' => $record->email,
                    '{customer_mobile}' => $record->phone,
                    '{service}' => $record->service,
                    '{message}' => $record->message,
                    '{reference}' => 'CE-' . $record->id,
                ], $record->full_name);
            } elseif ($record instanceof PackageEnquiry && filled($record->email)) {
                EmailDispatcher::send('customer-thank-you', $record->email, [
                    '{customer_name}' => $record->name,
                    '{customer_email}' => $record->email,
                    '{customer_mobile}' => $record->mobile,
                    '{service}' => Str::headline((string) $record->page),
                    '{message}' => $record->requirements,
                    '{reference}' => 'PE-' . $record->id,
                ], $record->name);
            } elseif ($record instanceof KnowledgeBaseEnquiry && filled($record->email)) {
                EmailDispatcher::send('customer-thank-you', $record->email, [
                    '{customer_name}' => $record->name,
                    '{customer_email}' => $record->email,
                    '{customer_mobile}' => $record->phone,
                    '{service}' => self::needLabel($record),
                    '{message}' => $record->message,
                    '{reference}' => 'KB-' . $record->id,
                ], $record->name);
            } elseif ($record instanceof CareerApplication && filled($record->email)) {
                EmailDispatcher::send('candidate-thank-you', $record->email, [
                    '{candidate_name}' => $record->name,
                    '{candidate_email}' => $record->email,
                    '{candidate_mobile}' => $record->phone,
                    '{position}' => $record->position,
                    '{apply_type}' => $record->apply_type,
                    '{reference}' => 'CA-' . $record->id,
                ], $record->name);
            }
        } catch (\Throwable $e) {
            Log::error('EnquiryNotifier: thank-you email failed.', [
                'record' => get_class($record) . '#' . $record->getKey(),
                'error' => $e->getMessage(),
            ]);
        }
    }

    // ── Helpers ──────────────────────────────────────────────────────────────

    private static function when(Model $record): ?string
    {
        return $record->created_at?->format('d M Y, h:i A');
    }

    /**
     * Readable label for the "What do you need help with?" choice.
     */
    private static function needLabel(KnowledgeBaseEnquiry $r): string
    {
        $label = KnowledgeBaseEnquiry::NEEDS[$r->need] ?? null;

        return is_string($label) && $label !== '' ? $label : Str::headline((string) $r->need);
    }

    /**
     * Single line, short — DLT variables are length limited and must not carry line breaks.
     */
    private static function smsValue(?string $value): string
    {
        return Str::limit(trim((string) preg_replace('/\s+/', ' ', (string) $value)), 30, '');
    }

    private static function formatExtra(mixed $extra): ?string
    {
        if (is_string($extra)) {
            $decoded = json_decode($extra, true);
            $extra = is_array($decoded) ? $decoded : $extra;
        }

        if (!is_array($extra)) {
            return filled($extra) ? (string) $extra : null;
        }

        $lines = collect($extra)
            ->filter(fn ($value) => filled($value) && !is_array($value))
            ->map(fn ($value, $key) => Str::headline((string) $key) . ': ' . $value)
            ->implode("\n");

        return $lines !== '' ? $lines : null;
    }
}