<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('stays', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('category')->index(); // 'resort', 'villa', 'onsen', 'ocean', 'lounge'
            $table->string('category_label');
            $table->string('location');
            $table->string('image');
            $table->json('gallery')->nullable();
            $table->string('rating')->default('4.95 / 5.0');
            $table->string('views_count')->default('250K+');
            $table->json('highlights')->nullable();
            $table->text('description');
            $table->string('instagram_url')->default('https://www.instagram.com/bnb_chiao');
            $table->boolean('is_featured')->default(false);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stays');
    }
};
