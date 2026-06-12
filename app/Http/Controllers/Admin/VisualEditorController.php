<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class VisualEditorController extends Controller
{
    /**
     * Each "section" maps to a group in the settings table.
     * icon, title, description, group, anchor (for preview scroll)
     */
    protected function sections(): array
    {
        return [
            'announce'    => ['icon' => '📢', 'title' => 'Announcement Bar',     'group' => 'home_hero',      'anchor' => '#top',            'desc' => 'The scrolling banner at the very top of your site'],
            'hero'        => ['icon' => '🦸', 'title' => 'Hero / Banner',        'group' => 'home_hero',      'anchor' => '#top',            'desc' => 'Headline, subtitle, and call-to-action buttons'],
            'services'    => ['icon' => '⭐', 'title' => 'Services',             'group' => 'home_services',  'anchor' => '#services',       'desc' => 'Your 6 service cards with descriptions'],
            'pricing'     => ['icon' => '💰', 'title' => 'Pricing',              'group' => 'pricing',        'anchor' => '#pricing',        'desc' => 'Package names and prices (Standard / Expedited / Premium)'],
            'founder'     => ['icon' => '👤', 'title' => 'Founder & Bio',        'group' => 'home_content',   'anchor' => '#results',        'desc' => 'Founder name, role, and biography text'],
            'reviews'     => ['icon' => '⭐', 'title' => 'Reviews & Results',    'group' => 'home_reviews',   'anchor' => '#results',        'desc' => 'Client result cards and before/after scores'],
            'mentorship'  => ['icon' => '🎓', 'title' => 'Mentorship Section',   'group' => 'home_mentorship','anchor' => '#mentorship',     'desc' => 'Mentorship offer and CTA'],
            'business'    => ['icon' => '🏢', 'title' => 'Business Setup',       'group' => 'home_business',  'anchor' => '#business-setup', 'desc' => 'Business structure and formation section'],
            'faq'         => ['icon' => '❓', 'title' => 'FAQ',                  'group' => 'home_faq',       'anchor' => '#faq',            'desc' => 'Frequently asked questions'],
            'videos'      => ['icon' => '🎬', 'title' => 'Video Testimonials',   'group' => 'home_reviews',   'anchor' => '#video-reviews',  'desc' => 'Client video reviews'],
            'extra'       => ['icon' => '🔗', 'title' => 'Extra Text & Labels',  'group' => 'home_extra',     'anchor' => '#top',            'desc' => 'Navigation labels, marquee text, and misc copy'],
            'branding'    => ['icon' => '🎨', 'title' => 'Logo & Branding',      'group' => 'branding',       'anchor' => '#top',            'desc' => 'Business name and logo image'],
            'contact'     => ['icon' => '📞', 'title' => 'Contact Info',         'group' => 'contact',        'anchor' => '#contact',        'desc' => 'Email address, phone, and business hours'],
            'links'       => ['icon' => '🔗', 'title' => 'Links & Checkout',     'group' => 'links',          'anchor' => '#pricing',        'desc' => 'Checkout URLs, booking links, community links'],
            'theme'       => ['icon' => '🎨', 'title' => 'Colors & Theme',       'group' => 'theme',          'anchor' => '#top',            'desc' => 'Brand colors (purple, gold)'],
            'media'       => ['icon' => '🖼',  'title' => 'Photos & Videos',      'group' => 'media',          'anchor' => '#top',            'desc' => 'Founder portrait, testimonial videos, review images'],
            'footer'      => ['icon' => '📝', 'title' => 'Footer',               'group' => 'footer',         'anchor' => '#contact',        'desc' => 'Footer tagline and closing text'],
        ];
    }

    public function index()
    {
        $sections = $this->sections();
        $sectionOrder = json_decode(Setting::get('visual_editor.section_order', '[]'), true) ?: array_keys($sections);

        // Re-order sections based on saved order (new sections go at end)
        $ordered = [];
        foreach ($sectionOrder as $key) {
            if (isset($sections[$key])) {
                $ordered[$key] = $sections[$key];
            }
        }
        foreach ($sections as $key => $s) {
            if (!isset($ordered[$key])) {
                $ordered[$key] = $s;
            }
        }

        // Merge visibility
        foreach ($ordered as $key => &$s) {
            $s['visible'] = (bool) Setting::get('section_visible.' . $key, '1');
        }

        return view('admin.visual_editor', [
            'sections'   => $ordered,
            'allSections'=> $sections,
            'groups'     => \App\Models\Setting::GROUPS,
        ]);
    }

    public function reorder(Request $request)
    {
        // postReorder() sends { ids: [...] }, keys are section identifiers (strings)
        $keys = $request->input('ids', $request->input('keys', []));
        Setting::put('visual_editor.section_order', json_encode($keys));
        return response()->json(['ok' => true]);
    }

    public function toggleVisible(Request $request)
    {
        $key     = $request->input('key');
        $visible = $request->boolean('visible');

        $allowedKeys = array_keys($this->sections());
        if (!in_array($key, $allowedKeys)) {
            return response()->json(['error' => 'Invalid key'], 422);
        }

        Setting::put('section_visible.' . $key, $visible ? '1' : '0');
        return response()->json(['visible' => $visible]);
    }
}
