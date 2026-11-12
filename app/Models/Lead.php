<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    public const ID_PREFIX = 'WM'; // shows as WM00001 (old site used ECOMM00001)

    protected $fillable = [
        'lead_source', 'form_type', 'source_type', 'source_id', 'service_type', 'full_name', 'business_name',
        'entity_type', 'gst_number', 'cin_number', 'email', 'country_code', 'mobile', 'mobile_verified',
        'website', 'industry', 'address', 'state', 'city', 'pincode', 'details', 'status', 'lead_type',
        'not_converted_reason', 'created_by',
    ];

    protected $casts = ['mobile_verified' => 'boolean'];

    public function notes()
    {
        return $this->hasMany(LeadNote::class)->latest('id');
    }

    public function activities()
    {
        return $this->hasMany(LeadActivity::class)->latest('id');
    }

    /** Timeline entry (who did what, when). */
    public function logActivity(string $type, ?string $from = null, ?string $to = null, ?string $note = null): void
    {
        $this->activities()->create([
            'user_id' => auth()->id(),
            'type' => $type,
            'from_value' => $from,
            'to_value' => $to,
            'note' => $note,
        ]);
    }

    /** The enquiry (contact / knowledge base / package) this lead came from, if any. */
    public function source()
    {
        return $this->morphTo();
    }

    public function getLeadCodeAttribute(): string
    {
        return self::ID_PREFIX . str_pad((string) $this->id, 5, '0', STR_PAD_LEFT);
    }

    /** Latest follow-up date from the notes, selected as `next_followup_date`. */
    public function scopeWithNextFollowup($q)
    {
        return $q->addSelect([
            'leads.*',
            'next_followup_date' => LeadNote::select('next_followup_date')
                ->whereColumn('lead_notes.lead_id', 'leads.id')
                ->whereNotNull('next_followup_date')
                ->orderByDesc('id')
                ->limit(1),
        ]);
    }
}
