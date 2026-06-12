<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'type', 'group', 'label', 'help', 'sort'];

    public const CACHE_KEY = 'settings.all';

    /**
     * Admin editor tabs: group-key => human label. Order here is the order
     * shown in the sidebar.
     */
    public const GROUPS = [
        'branding'       => 'Branding & Identity',
        'contact'        => 'Contact & Support',
        'home_hero'      => 'Home · Hero',
        'home_content'   => 'Home · Founder',
        'home_services'  => 'Home · Services',
        'home_mentorship'=> 'Home · Mentorship',
        'home_business'  => 'Home · Business Setup',
        'pricing'        => 'Home · Pricing',
        'home_reviews'   => 'Home · Reviews',
        'home_faq'       => 'Home · FAQ',
        'home_extra'     => 'Home · Other Sections',
        'media'          => 'Photos & Videos',
        'links'          => 'Links & Checkout',
        'footer'         => 'Footer',
        'funding'        => 'Funding Page',
        'intake'         => 'Intake Page',
        'onboarding'     => 'Onboarding Page',
        'theme'          => 'Theme & Colors',
    ];

    protected static function booted(): void
    {
        static::saved(fn () => static::flushCache());
        static::deleted(fn () => static::flushCache());
    }

    /**
     * All settings as a flat key => value map (cached).
     *
     * @return array<string, string|null>
     */
    public static function map(): array
    {
        return Cache::rememberForever(self::CACHE_KEY, function () {
            // Guard against being called before the table exists (e.g. during migrate).
            try {
                return static::query()->pluck('value', 'key')->all();
            } catch (\Throwable $e) {
                return [];
            }
        });
    }

    public static function flushCache(): void
    {
        Cache::forget(self::CACHE_KEY);
    }

    public static function get(string $key, mixed $default = null): mixed
    {
        $value = static::map()[$key] ?? null;

        return ($value === null || $value === '') ? $default : $value;
    }

    public static function put(string $key, mixed $value): void
    {
        $setting = static::firstOrNew(['key' => $key]);
        $setting->value = is_array($value) ? json_encode($value) : $value;
        $setting->save();
    }
}
