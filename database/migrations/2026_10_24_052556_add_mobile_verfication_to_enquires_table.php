<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Tables that take part in the OTP flow.
     */
    private array $tables = [
        'contact_enquiries',
        'package_enquiries',
        'career_applications',
        'knowledge_base_enquiries',
    ];

    public function up(): void
    {
        foreach ($this->tables as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->boolean('mobile_verified')->default(false);
                $table->timestamp('mobile_verified_at')->nullable();
                $table->timestamp('admin_notified_at')->nullable()
                      ->comment('Set once the admin email / SMS has been sent');
            });

            // Existing rows were handled before OTP existed — mark them as already
            // notified so the pending-enquiries command never re-sends them.
            DB::table($tableName)
                ->whereNull('admin_notified_at')
                ->update(['admin_notified_at' => now()]);
        }
    }

    public function down(): void
    {
        foreach ($this->tables as $tableName) {
            Schema::table($tableName, function (Blueprint $table) {
                $table->dropColumn(['mobile_verified', 'mobile_verified_at', 'admin_notified_at']);
            });
        }
    }
};