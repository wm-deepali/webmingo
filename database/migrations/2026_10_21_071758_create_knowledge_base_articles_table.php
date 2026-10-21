<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('knowledge_base_articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')
                  ->constrained('knowledge_base_categories')
                  ->cascadeOnDelete();
            $table->string('title');                      // kb-article__title
            $table->string('slug')->unique();
            $table->text('short_description');            // kb-article__desc
            $table->longText('content');                  // editor HTML: all <h5>, <p>, <ul> answer sections
            $table->string('cta_text')->nullable();       // "Need help improving..." (null = no CTA block)
            $table->string('cta_button_text')->default('Talk To Us');
            $table->unsignedInteger('sort_order')->default(0);
            $table->boolean('status')->default(1);
            $table->timestamps();

            $table->index(['category_id', 'status', 'sort_order']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('knowledge_base_articles');
    }
};
