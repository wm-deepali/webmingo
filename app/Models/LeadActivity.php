<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadActivity extends Model
{
    protected $fillable = ['lead_id', 'user_id', 'type', 'from_value', 'to_value', 'note'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /** Shape used by admin.partials.timeline */
    public function toTimeline(): array
    {
        $item = [
            'type' => $this->type,
            'title' => match ($this->type) {
                'created' => 'Lead created',
                'status' => 'Status changed',
                'lead_type' => 'Lead type changed',
                'note' => 'Note added',
                default => 'Updated',
            },
            'from' => $this->from_value,
            'to' => $this->to_value,
            'note' => $this->note,
            'meta' => null,
            'by' => $this->user?->name,
            'at' => $this->created_at,
        ];

        if ($this->type === 'note') {
            $item['from'] = $item['to'] = null;
            if ($this->to_value) {
                $item['meta'] = 'Next followup: ' . \Illuminate\Support\Carbon::parse($this->to_value)->format('d M Y');
            }
        }

        return $item;
    }
}
