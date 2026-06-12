<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    public function run(): void
    {
        $defaults = [

            // ============== BRANDING ==============
            ['app.name', 'AQ Wealth University', 'text', 'branding', 'Website / Business name', 'Shown in the browser tab, footer and admin.'],
            ['branding.logo', 'images/logo.jpeg', 'image', 'branding', 'Logo', 'Appears in the header and footer of every page.'],

            // ============== CONTACT ==============
            ['site.contact_email', 'hello@aqwealthuniversity.com', 'email', 'contact', 'Contact email', 'Shown in the footer and onboarding agreement.'],
            ['site.support.phone', '(843) 609-7462', 'text', 'contact', 'Support phone'],
            ['site.business_hours', 'Mon–Fri, 9am–6pm', 'text', 'contact', 'Business hours'],

            // ============== HOME · HERO ==============
            ['home.announce.line1', '<strong>Now Enrolling</strong> · Free credit assessment with every consultation', 'html', 'home_hero', 'Announcement bar — line 1'],
            ['home.announce.line2', 'Limited spots for this intake', 'text', 'home_hero', 'Announcement bar — line 2'],
            ['home.hero.badge', 'Now Enrolling', 'text', 'home_hero', 'Hero badge text'],
            ['home.hero.title', 'From <span class="gold-text">Knowledge</span> to Wisdom.<br/>From Wisdom to <span class="gold-text">Wealth</span>.', 'html', 'home_hero', 'Hero headline', 'You can use HTML. Wrap words in <span class="gold-text">…</span> to make them gold.'],
            ['home.hero.subtitle', 'Repair your credit, build business credit, set up your company the right way, and open the door to real personal and business funding. One school. One plan. Real results.', 'textarea', 'home_hero', 'Hero subtitle'],
            ['home.hero.cta_primary', 'Start Building Wealth →', 'text', 'home_hero', 'Hero button 1 (primary)'],
            ['home.hero.cta_secondary', 'Explore Services', 'text', 'home_hero', 'Hero button 2 (secondary)'],
            ['home.hero.bullet1', 'Results in as fast as 14–30 days', 'text', 'home_hero', 'Hero trust point 1'],
            ['home.hero.bullet2', 'Single & Duo packages', 'text', 'home_hero', 'Hero trust point 2'],
            ['home.hero.bullet3', 'Mentorship from people who do this work', 'text', 'home_hero', 'Hero trust point 3'],
            ['home.hero.cta_community', 'Join the Community', 'text', 'home_hero', 'Header "Join the Community" button label'],

            // ============== HOME · SECTIONS ==============
            ['home.founder.name', 'Danielle Todd', 'text', 'home_content', 'Founder name'],
            ['home.founder.role', 'Founder · AQ Wealth University', 'text', 'home_content', 'Founder role'],
            ['home.founder.bio', 'Danielle built AQ Wealth University around a simple idea: people deserve real education, not just a service. She has helped hundreds of clients clean up their credit, structure their businesses correctly, and unlock funding the right way. Now she leads a team that does the same, every single day.', 'textarea', 'home_content', 'Founder bio'],

            // ============== PRICING ==============
            ['home.price.standard.title', '3-Round Credit Repair', 'text', 'pricing', 'Standard — package title'],
            ['home.price.standard.single', '599', 'text', 'pricing', 'Standard — Single price'],
            ['home.price.standard.duo', '799', 'text', 'pricing', 'Standard — Duo price'],
            ['home.price.expedited.title', '3-Round Expedited', 'text', 'pricing', 'Expedited — package title'],
            ['home.price.expedited.single', '999', 'text', 'pricing', 'Expedited — Single price'],
            ['home.price.expedited.duo', '1,199', 'text', 'pricing', 'Expedited — Duo price'],
            ['home.price.premium.title', 'Full Credit Repair', 'text', 'pricing', 'Premium — package title'],
            ['home.price.premium.single', '1,399', 'text', 'pricing', 'Premium — Single price'],
            ['home.price.premium.duo', '1,599', 'text', 'pricing', 'Premium — Duo price'],

            // ============== MEDIA ==============
            ['media.owner_image', 'images/owner.jpeg', 'image', 'media', 'Hero portrait (owner photo)'],
            ['site.media.founder_image_url', 'https://res.cloudinary.com/dirti0apj/image/upload/v1777314649/623226937_122234475242175735_2717491804550294949_n_k1fxae.jpg', 'image', 'media', 'Founder section photo'],
            ['site.media.testimonial_video_1_url', 'https://res.cloudinary.com/dirti0apj/video/upload/v1777401546/WhatsApp_Video_2026-04-28_at_9.36.56_AM_1_qvvfw9.mp4', 'video', 'media', 'Testimonial video 1'],
            ['site.media.testimonial_video_2_url', 'https://res.cloudinary.com/dirti0apj/video/upload/v1777401545/WhatsApp_Video_2026-04-28_at_9.36.56_AM_ekg2yd.mp4', 'video', 'media', 'Testimonial video 2'],
            ['media.tes_1', 'images/tes.jpeg', 'image', 'media', 'Review screenshot 1'],
            ['media.tes_2', 'images/tes2.jpeg', 'image', 'media', 'Review screenshot 2'],
            ['media.tes_3', 'images/tes3.jpeg', 'image', 'media', 'Review screenshot 3'],
            ['media.tes_4', 'images/tes4.jpeg', 'image', 'media', 'Review screenshot 4'],
            ['media.tes_5', 'images/tes5.jpeg', 'image', 'media', 'Review screenshot 5'],
            ['media.tes_6', 'images/tes6.jpeg', 'image', 'media', 'Review screenshot 6'],

            // ============== LINKS ==============
            ['site.links.skool', 'https://www.skool.com/credit-wisdom-academy-9711/about', 'url', 'links', 'Skool community URL'],
            ['site.links.booking', '', 'url', 'links', 'Booking / calendar URL'],
            ['site.links.checkout_standard', 'https://www.fanbasis.com/agency-checkout/aqwealthuniversity/Z625v', 'url', 'links', 'Checkout — Standard'],
            ['site.links.checkout_expedited', 'https://www.fanbasis.com/agency-checkout/aqwealthuniversity/J61lJ', 'url', 'links', 'Checkout — Expedited'],
            ['site.links.checkout_premium', 'https://www.fanbasis.com/agency-checkout/aqwealthuniversity/zB9Rq', 'url', 'links', 'Checkout — Premium'],
            ['site.links.checkout_mentorship_credit', 'https://www.fanbasis.com/agency-checkout/aqwealthuniversity/wp6OR', 'url', 'links', 'Checkout — Credit Mentorship'],
            ['site.links.checkout_mentorship_business', '', 'url', 'links', 'Checkout — Business Mentorship'],
            ['site.links.checkout_business_blueprint', '', 'url', 'links', 'Checkout — Business Blueprint'],
            ['site.links.credit_monitoring', '', 'url', 'links', 'Credit monitoring signup (onboarding step 1)'],
            ['site.links.client_portal', '', 'url', 'links', 'Client portal (onboarding step 3)'],

            // ============== FOOTER ==============
            ['home.footer.tagline', 'From knowledge to wisdom, from wisdom to wealth. Credit repair, business credit, and funding done right.', 'textarea', 'footer', 'Footer tagline'],

            // ============== THEME ==============
            ['theme.color_primary', '#4c1980', 'color', 'theme', 'Primary brand color (royal)'],
            ['theme.color_accent', '#b8860b', 'color', 'theme', 'Accent color (gold)'],
        ];

        foreach ($defaults as $i => $row) {
            [$key, $value, $type, $group, $label] = $row;
            $help = $row[5] ?? null;

            $setting = Setting::firstOrNew(['key' => $key]);

            // Only set the value when the row is new — never clobber an owner's
            // saved edits on a re-seed. Metadata (type/group/label) always syncs.
            if (! $setting->exists) {
                $setting->value = $value;
            }

            $setting->type  = $type;
            $setting->group = $group;
            $setting->label = $label;
            $setting->help  = $help;
            $setting->sort  = $i;
            $setting->save();
        }

        Setting::flushCache();
    }
}
