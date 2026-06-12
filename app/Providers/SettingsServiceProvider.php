<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Map of setting-key => config-key. When the owner edits a setting in
        // the admin panel, the matching config value is overridden at runtime,
        // so existing views that call config('site.*')/config('app.name')
        // automatically reflect the change — no view edits required.
        $bindings = [
            'app.name'                              => 'app.name',
            'site.contact_email'                    => 'site.contact_email',
            'site.business_hours'                   => 'site.business_hours',
            'site.support.phone'                    => 'site.support.phone',
            'site.media.founder_image_url'          => 'site.media.founder_image_url',
            'site.media.testimonial_video_1_url'    => 'site.media.testimonial_video_1_url',
            'site.media.testimonial_video_2_url'    => 'site.media.testimonial_video_2_url',
            'site.links.skool'                      => 'site.links.skool',
            'site.links.booking'                    => 'site.links.booking',
            'site.links.checkout_standard'          => 'site.links.checkout_standard',
            'site.links.checkout_expedited'         => 'site.links.checkout_expedited',
            'site.links.checkout_premium'           => 'site.links.checkout_premium',
            'site.links.checkout_mentorship_credit' => 'site.links.checkout_mentorship_credit',
            'site.links.checkout_mentorship_business' => 'site.links.checkout_mentorship_business',
            'site.links.checkout_business_blueprint' => 'site.links.checkout_business_blueprint',
            'site.links.credit_monitoring'          => 'site.links.credit_monitoring',
            'site.links.client_portal'              => 'site.links.client_portal',
        ];

        try {
            $map = Setting::map();
        } catch (\Throwable $e) {
            return; // table not migrated yet
        }

        if (empty($map)) {
            return;
        }

        foreach ($bindings as $settingKey => $configKey) {
            if (array_key_exists($settingKey, $map) && $map[$settingKey] !== null && $map[$settingKey] !== '') {
                config([$configKey => $map[$settingKey]]);
            }
        }
    }
}
