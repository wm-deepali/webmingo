<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('career_applications', function (Blueprint $t) {
            $t->foreignId('stage_id')->nullable()->constrained('candidate_stages')->nullOnDelete();
            $t->foreignId('reason_id')->nullable()->constrained('candidate_reasons')->nullOnDelete();
            $t->text('reason_remarks')->nullable();
            $t->string('source', 30)->default('website');
            $t->text('recruiter_remarks')->nullable();
            $t->string('work_mode', 20)->nullable();
            $t->date('available_from')->nullable();
            $t->decimal('total_experience', 4, 1)->nullable();
            $t->decimal('relevant_experience', 4, 1)->nullable();
            $t->decimal('current_ctc', 8, 2)->nullable();   // LPA
            $t->decimal('expected_ctc', 8, 2)->nullable();  // LPA
            $t->decimal('offered_ctc', 8, 2)->nullable();   // LPA (company budget / offered)
            $t->string('candidate_interested', 10)->default('pending'); // yes | no | pending
            $t->string('resume_hash', 64)->nullable()->index();
            $t->unsignedBigInteger('duplicate_of_id')->nullable()->index();
            $t->unsignedBigInteger('created_by')->nullable();
            $t->timestamp('stage_changed_at')->nullable();
        });

        // Old status -> new stage
        $map = ['new' => 'New Application', 'shortlisted' => 'Shortlisted', 'rejected' => 'Closed', 'hired' => 'Joined'];
        foreach ($map as $status => $title) {
            $stageId = DB::table('candidate_stages')->where('title', $title)->value('id');
            DB::table('career_applications')->where('status', $status)->update(['stage_id' => $stageId]);
        }
        DB::table('career_applications')->whereNull('stage_id')
            ->update(['stage_id' => DB::table('candidate_stages')->orderBy('sort_order')->value('id')]);

        Schema::create('career_application_logs', function (Blueprint $t) {
            $t->id();
            $t->foreignId('career_application_id')->constrained('career_applications')->cascadeOnDelete();
            $t->unsignedBigInteger('user_id')->nullable();
            $t->string('type', 30);          // created | stage | shift | updated | duplicate
            $t->string('from_value')->nullable();
            $t->string('to_value')->nullable();
            $t->text('note')->nullable();
            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('career_application_logs');

        Schema::table('career_applications', function (Blueprint $t) {
            $t->dropConstrainedForeignId('stage_id');
            $t->dropConstrainedForeignId('reason_id');
            $t->dropColumn([
                'reason_remarks', 'source', 'recruiter_remarks', 'work_mode', 'available_from',
                'total_experience', 'relevant_experience', 'current_ctc', 'expected_ctc', 'offered_ctc',
                'candidate_interested', 'resume_hash', 'duplicate_of_id', 'created_by', 'stage_changed_at',
            ]);
        });
    }
};
