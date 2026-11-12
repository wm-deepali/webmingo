<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('lead_activities', function (Blueprint $t) {
            $t->id();
            $t->foreignId('lead_id')->constrained('leads')->cascadeOnDelete();
            $t->unsignedBigInteger('user_id')->nullable();
            $t->string('type', 30);               // created | status | lead_type | note
            $t->string('from_value')->nullable();
            $t->string('to_value')->nullable();
            $t->text('note')->nullable();
            $t->timestamps();
        });

        // Backfill for leads/notes that already exist
        DB::table('leads')->orderBy('id')->each(function ($l) {
            DB::table('lead_activities')->insert([
                'lead_id' => $l->id, 'user_id' => $l->created_by, 'type' => 'created',
                'to_value' => 'New Lead', 'note' => 'Lead created (' . $l->lead_source . ')',
                'created_at' => $l->created_at, 'updated_at' => $l->created_at,
            ]);
            if ($l->status && $l->status !== 'New Lead') {
                DB::table('lead_activities')->insert([
                    'lead_id' => $l->id, 'type' => 'status', 'from_value' => 'New Lead', 'to_value' => $l->status,
                    'created_at' => $l->updated_at, 'updated_at' => $l->updated_at,
                ]);
            }
        });
        DB::table('lead_notes')->orderBy('id')->each(function ($n) {
            DB::table('lead_activities')->insert([
                'lead_id' => $n->lead_id, 'user_id' => $n->user_id, 'type' => 'note',
                'to_value' => $n->next_followup_date, 'note' => $n->note,
                'created_at' => $n->created_at, 'updated_at' => $n->created_at,
            ]);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lead_activities');
    }
};
