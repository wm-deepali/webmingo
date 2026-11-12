<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $t) {
            $t->id();
            $t->string('lead_source', 40)->default('Manual');   // Manual | Contact Enquiry | Knowledge Base Enquiry | Package Enquiry
            $t->string('form_type', 30)->nullable();            // whatsapp | call | email | contact_form | consultation | package
            $t->nullableMorphs('source');                       // the enquiry this lead was converted from
            $t->string('service_type', 100)->nullable();
            $t->string('full_name');
            $t->string('business_name')->nullable();
            $t->string('entity_type', 100)->nullable();
            $t->string('gst_number', 30)->nullable();
            $t->string('cin_number', 30)->nullable();
            $t->string('email')->nullable();
            $t->string('country_code', 5)->default('91');
            $t->string('mobile', 20)->index();
            $t->boolean('mobile_verified')->default(false);
            $t->string('website')->nullable();
            $t->string('industry', 100)->nullable();
            $t->string('address')->nullable();
            $t->unsignedBigInteger('state')->nullable();
            $t->unsignedBigInteger('city')->nullable();
            $t->string('pincode', 10)->nullable();
            $t->text('details')->nullable();
            $t->string('status', 30)->default('New Lead')->index();
            $t->string('lead_type', 20)->nullable();            // Hot | Warm | Cold | Invalid
            $t->text('not_converted_reason')->nullable();
            $t->unsignedBigInteger('created_by')->nullable();
            $t->timestamps();
        });

        Schema::create('lead_notes', function (Blueprint $t) {
            $t->id();
            $t->foreignId('lead_id')->constrained('leads')->cascadeOnDelete();
            $t->unsignedBigInteger('user_id')->nullable();
            $t->text('note');
            $t->date('next_followup_date')->nullable();
            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_notes');
        Schema::dropIfExists('leads');
    }
};
