<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerApplicationLog extends Model
{
    protected $fillable = ['career_application_id', 'user_id', 'type', 'from_value', 'to_value', 'note'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /** Shape used by admin.partials.timeline */
    public function toTimeline(): array
    {
        return [
            'type' => $this->type,
            'title' => match ($this->type) {
                'created' => 'Application received',
                'stage' => 'Stage changed',
                'shift' => 'Moved to another opening',
                default => 'Details updated',
            },
            'from' => in_array($this->type, ['stage', 'shift'], true) ? $this->from_value : null,
            'to' => in_array($this->type, ['created', 'stage', 'shift'], true) ? $this->to_value : null,
            'note' => $this->note,
            'meta' => null,
            'by' => $this->user?->name,
            'at' => $this->created_at,
        ];
    }
}
