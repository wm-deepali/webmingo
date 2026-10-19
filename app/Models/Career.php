<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Career extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'department',
        'type',
        'employment_type',
        'work_mode',
        'location',
        'experience',
        'salary',
        'short_description',
        'description',
        'responsibilities',
        'requirements',
        'nice_to_have',
        'meta_title',
        'meta_description',
        'status',
        'sort_order',
    ];

    protected $casts = [
        'status' => 'boolean',
        'sort_order' => 'integer',
    ];

    protected static function booted(): void
    {
        static::saving(function (Career $career) {
            if (empty($career->slug)) {
                $career->slug = static::uniqueSlug($career->title, $career->id);
            }
        });
    }

    public static function uniqueSlug(string $title, $ignoreId = null): string
    {
        $base = Str::slug($title) ?: 'career';
        $slug = $base;
        $i = 2;

        while (
            static::where('slug', $slug)
                ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }

    /* ── Scopes ── */

    public function scopeActive($query)
    {
        return $query->where('status', 1);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderByDesc('id');
    }

    /* ── One-item-per-line fields as arrays (for @foreach on the frontend) ── */

    public function getResponsibilitiesListAttribute(): array
    {
        return static::lines($this->responsibilities);
    }

    public function getRequirementsListAttribute(): array
    {
        return static::lines($this->requirements);
    }

    public function getNiceToHaveListAttribute(): array
    {
        return static::lines($this->nice_to_have);
    }

    protected static function lines(?string $text): array
    {
        if (!$text) {
            return [];
        }

        return array_values(array_filter(array_map('trim', preg_split('/\R/', $text))));
    }

    public function jobPostingSchema(): array
    {
        $html = $this->description ?: '';

        foreach ([
            'Responsibilities' => $this->responsibilities_list,
            'Requirements' => $this->requirements_list,
            'Nice to have' => $this->nice_to_have_list,
        ] as $heading => $items) {
            if ($items) {
                $html .= '<p><strong>' . e($heading) . '</strong></p><ul>'
                    . implode('', array_map(fn($i) => '<li>' . e($i) . '</li>', $items))
                    . '</ul>';
            }
        }

        if (trim(strip_tags($html)) === '') {
            $html = '<p>' . e($this->short_description ?: $this->title) . '</p>';
        }

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'JobPosting',
            'title' => $this->title,
            'description' => $html,
            'identifier' => ['@type' => 'PropertyValue', 'name' => 'Web Mingo', 'value' => (string) $this->id],
            'datePosted' => $this->created_at->toDateString(),
            'employmentType' => $this->type === 'Internship'
                ? 'INTERN'
                : match ($this->employment_type) {
                    'Part-time' => 'PART_TIME',
                    'Contract' => 'CONTRACTOR',
                    default => 'FULL_TIME',
                },
            'hiringOrganization' => [
                '@type' => 'Organization',
                'name' => 'Web Mingo IT Solutions Pvt. Ltd.',
                'sameAs' => url('/'),
                'logo' => asset('assets/images/logo.png'),
            ],
        ];

        if ($this->work_mode === 'Remote') {
            $schema['jobLocationType'] = 'TELECOMMUTE';
            $schema['applicantLocationRequirements'] = ['@type' => 'Country', 'name' => 'India'];
        } else {
            $schema['jobLocation'] = [
                '@type' => 'Place',
                'address' => [
                    '@type' => 'PostalAddress',
                    'addressLocality' => $this->location ?: 'Noida',
                    'addressCountry' => 'IN',
                ],
            ];
        }

        return $schema;
    }
}