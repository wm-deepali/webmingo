<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadNote extends Model
{
    protected $fillable = ['lead_id', 'user_id', 'note', 'next_followup_date'];

    protected $casts = ['next_followup_date' => 'date'];

    public function lead()
    {
        return $this->belongsTo(Lead::class);
    }
}
