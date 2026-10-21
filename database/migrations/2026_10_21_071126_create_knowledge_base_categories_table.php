<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('knowledge_base_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');                    // Websites, E-Commerce, SEO...
            $table->string('slug')->unique();          // data-tab value: websites, ecommerce...
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('status')->default(1);     // 1 = active, 0 = inactive
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_base_categories');
    }
};