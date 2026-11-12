<?php

namespace App\Services\Leads;

use App\Models\ContactEnquiry;
use App\Models\KnowledgeBaseEnquiry;
use App\Models\Lead;
use App\Models\PackageEnquiry;
use App\Support\LeadOptions;
use Illuminate\Database\Eloquent\Model;

/** Copies an enquiry into the leads table. */
class LeadConverter
{
    public static function convert(Model $e): Lead
    {
        $data = match (true) {
            $e instanceof ContactEnquiry => self::fromContact($e),
            $e instanceof KnowledgeBaseEnquiry => self::fromKnowledgeBase($e),
            $e instanceof PackageEnquiry => self::fromPackage($e),
            default => throw new \InvalidArgumentException('Unsupported enquiry type.'),
        };

        return $e->lead()->create($data + [
            'status' => 'New Lead',
            'country_code' => '91',
            'mobile_verified' => (bool) $e->mobile_verified,
            'created_by' => auth()->id(),
        ]);
    }

    private static function fromContact(ContactEnquiry $e): array
    {
        $matched = in_array($e->service, LeadOptions::SERVICE_TYPES, true);

        return [
            'lead_source' => 'Contact Enquiry',
            'form_type' => 'contact_form',
            'full_name' => $e->full_name,
            'email' => $e->email,
            'business_name' => $e->company,
            'mobile' => self::mobile($e->phone),
            'service_type' => $matched ? $e->service : null,
            'details' => self::join([
                (!$matched && $e->service) ? 'Service: ' . $e->service : null,
                $e->message,
            ]),
        ];
    }

    private static function fromKnowledgeBase(KnowledgeBaseEnquiry $e): array
    {
        return [
            'lead_source' => 'Knowledge Base Enquiry',
            'form_type' => 'consultation',
            'full_name' => $e->name,
            'email' => $e->email,
            'mobile' => self::mobile($e->phone),
            'details' => self::join(['Needs help with: ' . $e->need_label, $e->message]),
        ];
    }

    private static function fromPackage(PackageEnquiry $e): array
    {
        $extra = [];
        foreach ((array) $e->extra as $key => $value) {
            if (filled($value)) {
                $extra[] = \Illuminate\Support\Str::headline((string) $key) . ': ' . $value;
            }
        }

        return [
            'lead_source' => 'Package Enquiry',
            'form_type' => 'package',
            'full_name' => $e->name,
            'email' => $e->email,
            'business_name' => $e->business_name,
            'mobile' => self::mobile($e->mobile),
            'details' => self::join(array_merge([
                'Package: ' . $e->page_label,
                $e->business_type ? 'Business type: ' . $e->business_type : null,
                $e->requirements,
            ], $extra)),
        ];
    }

    private static function mobile(?string $value): string
    {
        $digits = preg_replace('/\D/', '', (string) $value);

        return strlen($digits) > 10 ? substr($digits, -10) : $digits;
    }

    private static function join(array $parts): ?string
    {
        $text = trim(implode("\n", array_filter($parts, fn($p) => filled($p))));

        return $text !== '' ? $text : null;
    }
}
