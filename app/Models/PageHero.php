<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageHero extends Model
{
    protected $fillable = [
        'page_key',
        'eyebrow',
        'heading',
        'description',
        'primary_text',
        'primary_url',
        'secondary_text',
        'secondary_url',
    ];

    /** Per-request memo so a page never runs the same query twice. */
    private static array $memo = [];

    /** Hero row for a page (route name), or null if the admin never customised it. */
    public static function forRoute(?string $key): ?self
    {
        if (! $key) {
            return null;
        }

        if (! array_key_exists($key, self::$memo)) {
            self::$memo[$key] = static::where('page_key', $key)->first();
        }

        return self::$memo[$key];
    }

    /**
     * All pages that have a hero, grouped for the admin list:
     * ['General' => [route => label], 'Services' => [...], 'Industries' => [...]]
     */
    public static function pages(): array
    {
        $services = [];

        foreach (config('faq_pages.services', []) as $key => $service) {
            $services[$key] = $service['name'];

            foreach ($service['subs'] as $subKey => $subName) {
                $services[$subKey] = $service['name'] . ' › ' . $subName;
            }
        }

        return [
            'General'    => config('hero_pages.general', []),
            'Services'   => $services,
            'Industries' => config('faq_pages.industries', []),
        ];
    }

    /** Display name for a page key, or null if the key is not a known page. */
    public static function labelFor(string $key): ?string
    {
        foreach (static::pages() as $group) {
            if (isset($group[$key])) {
                return $group[$key];
            }
        }

        return null;
    }
}