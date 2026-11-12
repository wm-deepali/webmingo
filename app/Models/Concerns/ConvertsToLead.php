<?php

namespace App\Models\Concerns;

use App\Models\Lead;

/** Add `use ConvertsToLead;` to ContactEnquiry, KnowledgeBaseEnquiry and PackageEnquiry. */
trait ConvertsToLead
{
    public function lead()
    {
        return $this->morphOne(Lead::class, 'source');
    }
}
