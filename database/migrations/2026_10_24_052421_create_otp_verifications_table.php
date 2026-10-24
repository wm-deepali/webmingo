<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('otp_verifications', function (Blueprint $table) {
            $table->id();

            // Public handle the browser uses to verify / resend / skip
            $table->string('token', 64)->unique();

            // The enquiry / application this OTP belongs to
            $table->string('verifiable_type');
            $table->unsignedBigInteger('verifiable_id');

            $table->string('mobile', 20)->index();

            // HMAC of the OTP — the plain OTP is never stored
            $table->string('otp_hash', 64);

            $table->timestamp('expires_at');
            $table->unsignedTinyInteger('attempts')->default(0)
                  ->comment('Wrong OTP entries since the last (re)send');
            $table->unsignedTinyInteger('resend_count')->default(0);
            $table->timestamp('last_sent_at')->nullable();
            $table->timestamp('verified_at')->nullable();

            $table->string('ip_address', 45)->nullable();

            $table->timestamps();

            $table->index(['verifiable_type', 'verifiable_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('otp_verifications');
    }
};