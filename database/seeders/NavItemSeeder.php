<?php

namespace Database\Seeders;

use App\Models\NavItem;
use Illuminate\Database\Seeder;

class NavItemSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            ['label' => 'Services',       'url' => '/services',       'target' => '_self', 'sort' => 1],
            ['label' => 'Pricing',        'url' => '/pricing',        'target' => '_self', 'sort' => 2],
            ['label' => 'Mentorship',     'url' => '/mentorship',     'target' => '_self', 'sort' => 3],
            ['label' => 'Business Setup', 'url' => '/business-setup', 'target' => '_self', 'sort' => 4],
            ['label' => 'Funding',        'url' => '/funding',        'target' => '_self', 'sort' => 5],
            ['label' => 'FAQ',            'url' => '/faq',            'target' => '_self', 'sort' => 6],
        ];

        foreach ($items as $item) {
            NavItem::updateOrCreate(
                ['label' => $item['label']],
                array_merge($item, ['is_active' => true])
            );
        }
    }
}
