<?php

namespace App\Models;

use App\Models\Concerns\HasRecruitmentFields;
use Illuminate\Database\Eloquent\Model;

class CareerApplication extends Model
{
    use HasRecruitmentFields;

    protected $fillable = [
        'career_id', 'position', 'apply_type', 'name', 'email', 'phone', 'location',
        'experience', 'notice_period', 'portfolio', 'linkedin', 'resume_path',
        'cover_letter', 'status', 'ip_address', 'mobile_verified',
        'mobile_verified_at', 'admin_notified_at',
    ];

    public function career()
    {
        return $this->belongsTo(Career::class);
    }
}