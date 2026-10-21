<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('package_enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('mobile', 20);
             $table->string('email', 150)->nullable();
            $table->string('business_name', 150)->nullable();
            $table->string('business_type', 100);   // selected option value
            $table->text('requirements')->nullable();
            $table->json('extra')->nullable();
            $table->string('page', 100)->index();   // route name e.g. education-coaching
            $table->string('page_url')->nullable();
            $table->string('status', 20)->default('new')->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('package_enquiries');
    }
};