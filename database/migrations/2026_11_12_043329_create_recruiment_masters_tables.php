<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('candidate_stages', function (Blueprint $t) {
            $t->id();
            $t->string('title', 100);
            $t->text('remarks')->nullable();
            // new | shortlisted | interview | offered | joined | closed  (used for opening summary + colours)
            $t->string('bucket', 20)->default('new');
            $t->unsignedSmallInteger('sort_order')->default(0);
            $t->boolean('is_active')->default(true);
            $t->timestamps();
        });

        Schema::create('candidate_reasons', function (Blueprint $t) {
            $t->id();
            $t->string('title', 100);
            $t->text('remarks')->nullable();
            $t->unsignedSmallInteger('sort_order')->default(0);
            $t->boolean('is_active')->default(true);
            $t->timestamps();
        });

        $now = now();

        $stages = [
            ['New Application', 'Naya CV receive hua', 'new'],
            ['Screening', 'CV aur basic eligibility check ho rahi hai', 'new'],
            ['Shortlisted', 'Candidate initial screening pass kar chuka hai', 'shortlisted'],
            ['Interview', 'Interview schedule ya conduct ho raha hai', 'interview'],
            ['Selected', 'Company ne candidate select kiya', 'offered'],
            ['Offer', 'Offer issue hua; acceptance pending ho sakti hai', 'offered'],
            ['Pre-Joining', 'Offer accepted; joining pending hai', 'offered'],
            ['Joined', 'Candidate ne join kar liya', 'joined'],
            ['Closed', 'Application ka process band ho gaya', 'closed'],
        ];
        foreach ($stages as $i => [$title, $remarks, $bucket]) {
            DB::table('candidate_stages')->insert([
                'title' => $title, 'remarks' => $remarks, 'bucket' => $bucket,
                'sort_order' => $i + 1, 'is_active' => true, 'created_at' => $now, 'updated_at' => $now,
            ]);
        }

        $reasons = [
            ['Fresher', 'Experience required tha, candidate fresher hai'],
            ['Non-Relevant Experience', 'Experience hai, lekin relevant technology ya domain mein nahi'],
            ['Skill Mismatch', 'Required skills match nahi hui'],
            ['CTC Mismatch', 'Candidate ki expected salary budget se zyada hai'],
            ['Candidate Not Interested', 'Candidate khud job nahi karna chahta'],
            ['Company Not Interested', 'Company candidate ko aage proceed nahi karna chahti'],
            ['Location Mismatch', 'Candidate location ya work mode accept nahi karta'],
            ['Notice Period Mismatch', 'Candidate ki joining availability match nahi karti'],
            ['Duplicate Application', 'Candidate ka existing application mil gaya'],
            ['No Response', 'Follow-ups ke baad bhi response nahi mila'],
            ['Position On Hold', 'Opening filhaal rok di gayi'],
            ['Other', 'Koi doosra reason, saath mein remarks'],
        ];
        foreach ($reasons as $i => [$title, $remarks]) {
            DB::table('candidate_reasons')->insert([
                'title' => $title, 'remarks' => $remarks,
                'sort_order' => $i + 1, 'is_active' => true, 'created_at' => $now, 'updated_at' => $now,
            ]);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('candidate_reasons');
        Schema::dropIfExists('candidate_stages');
    }
};
