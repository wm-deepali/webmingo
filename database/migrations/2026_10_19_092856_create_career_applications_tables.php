<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('career_applications', function (Blueprint $table) {
            $table->id();

            // Opening applied to. Kept nullable so applications survive if the opening is deleted,
            // and so "Other" applications from the careers page can be stored.
            $table->foreignId('career_id')->nullable()->constrained('careers')->nullOnDelete();
            $table->string('position');
            $table->string('apply_type', 50)->default('Job'); // Job / Internship

            $table->string('name');
            $table->string('email');
            $table->string('phone', 30);
            $table->string('location')->nullable();
            $table->string('experience', 50)->nullable();
            $table->string('notice_period', 20)->nullable();
            $table->string('portfolio')->nullable();
            $table->string('linkedin')->nullable();

            $table->string('resume_path');
            $table->text('cover_letter')->nullable();

            $table->string('status', 20)->default('new'); // new, shortlisted, rejected, hired
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();

            $table->index('status');
            $table->index('career_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('career_applications');
    }
};