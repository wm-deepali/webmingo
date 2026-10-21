<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_heroes', function (Blueprint $table) {
            $table->id();

            // Route name of the page, e.g. "blog", "digital-marketing", "real-state"
            $table->string('page_key')->unique();

            // Any field left empty falls back to the default text written in the page's Blade file
            $table->string('eyebrow')->nullable();
            $table->string('heading')->nullable();
            $table->text('description')->nullable();

            $table->string('primary_text')->nullable();
            $table->string('primary_url')->nullable();
            $table->string('secondary_text')->nullable();
            $table->string('secondary_url')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_heroes');
    }
};