<?php

namespace App\Services\Recruitment;

use App\Models\CareerApplication;

class DuplicateChecker
{
    /**
     * Existing candidate profile that matches by email, mobile or the same CV file.
     * Only "original" profiles are matched (flagged duplicates are skipped).
     */
    public static function find(?string $email, ?string $phone, ?string $resumeHash = null, ?int $ignoreId = null): ?CareerApplication
    {
        if (!$email && !$phone && !$resumeHash) {
            return null;
        }

        return CareerApplication::query()
            ->whereNull('duplicate_of_id')
            ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
            ->where(function ($q) use ($email, $phone, $resumeHash) {
                if ($email) {
                    $q->orWhere('email', strtolower(trim($email)));
                }
                if ($phone) {
                    $q->orWhere('phone', $phone);
                }
                if ($resumeHash) {
                    $q->orWhere('resume_hash', $resumeHash);
                }
            })
            ->orderBy('id')
            ->first();
    }
}
