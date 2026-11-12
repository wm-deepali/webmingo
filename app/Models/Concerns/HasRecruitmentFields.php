<?php

namespace App\Models\Concerns;

use App\Models\CandidateReason;
use App\Models\CandidateStage;
use App\Models\Career;
use App\Models\CareerApplication;
use App\Models\CareerApplicationLog;

/**
 * Add `use HasRecruitmentFields;` inside App\Models\CareerApplication.
 * Fillable + casts are merged automatically (no need to edit $fillable).
 */
trait HasRecruitmentFields
{
    public function initializeHasRecruitmentFields(): void
    {
        $this->mergeFillable([
            'stage_id', 'reason_id', 'reason_remarks', 'source', 'recruiter_remarks', 'work_mode',
            'available_from', 'total_experience', 'relevant_experience', 'current_ctc', 'expected_ctc',
            'offered_ctc', 'candidate_interested', 'resume_hash', 'duplicate_of_id', 'created_by',
            'stage_changed_at', 'career_id', 'position', 'apply_type', 'mobile_verified',
        ]);

        $this->mergeCasts([
            'available_from' => 'date',
            'stage_changed_at' => 'datetime',
            'total_experience' => 'float',
            'relevant_experience' => 'float',
            'current_ctc' => 'float',
            'expected_ctc' => 'float',
            'offered_ctc' => 'float',
        ]);
    }

    public function stage()
    {
        return $this->belongsTo(CandidateStage::class, 'stage_id');
    }

    public function reason()
    {
        return $this->belongsTo(CandidateReason::class, 'reason_id');
    }

    public function career()
    {
        return $this->belongsTo(Career::class, 'career_id');
    }

    public function duplicateOf()
    {
        return $this->belongsTo(CareerApplication::class, 'duplicate_of_id');
    }

    public function duplicates()
    {
        return $this->hasMany(CareerApplication::class, 'duplicate_of_id');
    }

    public function logs()
    {
        return $this->hasMany(CareerApplicationLog::class, 'career_application_id')->latest('id');
    }
}
