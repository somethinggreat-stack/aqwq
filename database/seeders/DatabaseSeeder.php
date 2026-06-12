<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Editable site content.
        $this->call(SettingsSeeder::class);
        $this->call(PageContentSeeder::class);

        // Navigation menu items (seeded from existing cms() nav values).
        $this->call(NavItemSeeder::class);

        // Owner / administrator account for the admin panel.
        User::updateOrCreate(
            ['email' => 'admin@aqwealthuniversity.com'],
            [
                'name'     => 'Site Owner',
                'password' => Hash::make('ChangeMe!2026'),
                'is_admin' => true,
            ]
        );
    }
}
