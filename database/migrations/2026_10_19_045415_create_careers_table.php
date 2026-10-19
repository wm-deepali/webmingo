<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();

            // Basic info
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('department');                          // Development, Design, Marketing...
            $table->string('type')->default('Job');                // Job | Internship
            $table->string('employment_type')->default('Full-time'); // Full-time | Part-time | Contract
            $table->string('work_mode')->nullable();               // Onsite | Remote | Hybrid
            $table->string('location')->nullable();
            $table->string('experience')->nullable();              // e.g. 3–5 Years
            $table->string('salary')->nullable();                  // e.g. ₹4 LPA – ₹8 LPA

            // Content
            $table->text('short_description')->nullable();         // shown on the career card
            $table->longText('description')->nullable();           // "The Role" intro (HTML)
            $table->text('responsibilities')->nullable();          // one item per line
            $table->text('requirements')->nullable();              // one item per line
            $table->text('nice_to_have')->nullable();              // one item per line

            // SEO
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Settings
            $table->boolean('status')->default(true);
            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};