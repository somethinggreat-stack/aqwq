<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key')->unique();          // e.g. site.links.skool, home.hero.title
            $table->longText('value')->nullable();    // current value
            $table->string('type')->default('text');  // text|textarea|html|url|image|video|color|boolean|email
            $table->string('group')->default('general'); // admin tab the field appears under
            $table->string('label')->nullable();      // human label in admin
            $table->text('help')->nullable();         // help text shown under the field
            $table->unsignedInteger('sort')->default(0);
            $table->timestamps();

            $table->index('group');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
