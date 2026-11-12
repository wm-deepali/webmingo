<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

/** Every existing application gets a first timeline entry ("Application received"). */
return new class extends Migration {
    public function up(): void
    {
        $stages = DB::table('candidate_stages')->pluck('title', 'id');

        DB::table('career_applications')->orderBy('id')->each(function ($a) use ($stages) {
            $has = DB::table('career_application_logs')
                ->where('career_application_id', $a->id)->where('type', 'created')->exists();
            if ($has) {
                return;
            }

            DB::table('career_application_logs')->insert([
                'career_application_id' => $a->id,
                'user_id' => $a->created_by ?? null,
                'type' => 'created',
                'to_value' => 'New Application',
                'note' => 'Applied via ' . ($a->source ?? 'website'),
                'created_at' => $a->created_at,
                'updated_at' => $a->created_at,
            ]);

            // Already moved beyond the first stage before logging existed
            $title = $stages[$a->stage_id] ?? null;
            if ($title && $title !== 'New Application') {
                DB::table('career_application_logs')->insert([
                    'career_application_id' => $a->id,
                    'type' => 'stage',
                    'from_value' => 'New Application',
                    'to_value' => $title,
                    'created_at' => $a->stage_changed_at ?? $a->updated_at,
                    'updated_at' => $a->stage_changed_at ?? $a->updated_at,
                ]);
            }
        });
    }

    public function down(): void
    {
        // data-only migration
    }
};
