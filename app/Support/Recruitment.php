<?php

namespace App\Support;

use App\Models\Career;
use App\Models\CareerApplication;

class Recruitment
{
    public const SOURCES = [
        'website' => 'Website',
        'whatsapp' => 'WhatsApp',
        'email' => 'Email',
        'walk_in' => 'Walk-in',
        'referral' => 'Referral',
        'job_portal' => 'Job Portal / LinkedIn',
        'other' => 'Other',
    ];

    public const WORK_MODES = ['Office', 'Hybrid', 'Remote'];

    public const INTERESTED = ['pending' => 'Pending', 'yes' => 'Yes', 'no' => 'No'];

    public const NOTICE_PERIODS = [
        'immediate' => 'Immediate', '15' => '15 Days', '30' => '30 Days', '60' => '60 Days', '90' => '90 Days',
    ];

    public const EXPERIENCE = [
        'student' => 'Currently Studying', '0-1' => '0–1 Years', '1-3' => '1–3 Years',
        '3-5' => '3–5 Years', '5-8' => '5–8 Years', '8+' => '8+ Years',
    ];

    /** Opening summary order (same order Web Mingo asked for). */
    public const BUCKETS = [
        'new' => 'New / Pending Screening',
        'shortlisted' => 'Shortlisted',
        'interview' => 'Interview In Progress',
        'offered' => 'Selected / Offered',
        'joined' => 'Joined',
        'closed' => 'Rejected / Withdrawn',
    ];

    public static function experienceBucket(?float $years): ?string
    {
        if ($years === null) {
            return null;
        }

        return match (true) {
            $years < 1 => '0-1',
            $years < 3 => '1-3',
            $years < 5 => '3-5',
            $years < 8 => '5-8',
            default => '8+',
        };
    }

    /** Pipeline numbers for one opening. */
    public static function summary(Career|int $career): array
    {
        $id = $career instanceof Career ? $career->id : $career;

        $rows = CareerApplication::query()
            ->where('career_applications.career_id', $id)
            ->leftJoin('candidate_stages as s', 's.id', '=', 'career_applications.stage_id')
            ->selectRaw("coalesce(s.bucket, 'new') as bucket, count(*) as total")
            ->groupBy('bucket')
            ->pluck('total', 'bucket');

        $buckets = [];
        foreach (self::BUCKETS as $key => $label) {
            $buckets[$key] = ['label' => $label, 'count' => (int) ($rows[$key] ?? 0)];
        }

        return ['total' => (int) $rows->sum(), 'buckets' => $buckets];
    }
}
