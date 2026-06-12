<?php

use App\Models\Setting;

if (! function_exists('cms')) {
    /**
     * Editable content value. Returns the owner-managed value from the
     * settings table, falling back to the supplied default (the original
     * hardcoded copy) when nothing has been set yet.
     */
    function cms(string $key, mixed $default = null): mixed
    {
        return Setting::get($key, $default);
    }
}

if (! function_exists('cms_image')) {
    /**
     * Editable image URL. $key points at an image-type setting whose value is
     * a stored path (e.g. "uploads/logo.png" or "images/logo.jpeg"). Falls back
     * to the original asset path when the owner hasn't replaced it.
     */
    function cms_image(string $key, string $defaultAsset): string
    {
        $value = Setting::get($key);

        if (! $value) {
            return asset($defaultAsset);
        }

        // Absolute URLs (e.g. Cloudinary) are returned as-is.
        if (str_starts_with($value, 'http://') || str_starts_with($value, 'https://')) {
            return $value;
        }

        return asset($value);
    }
}

if (! function_exists('cms_bool')) {
    /** Editable boolean (toggle) value. */
    function cms_bool(string $key, bool $default = false): bool
    {
        $value = Setting::get($key);

        if ($value === null) {
            return $default;
        }

        return in_array((string) $value, ['1', 'true', 'on', 'yes'], true);
    }
}
