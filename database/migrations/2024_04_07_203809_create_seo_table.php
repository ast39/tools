<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->id();

            $table->string('seo_title')
                ->comment('Заголовок для СЕО');

            $table->text('seo_desc')
                ->nullable()
                ->default(null)
                ->comment('Описание для СЕО');

            $table->text('seo_keys')
                ->nullable()
                ->default(null)
                ->comment('Ключевые слова для СЕО');

            $table->morphs('seoable');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seo');
    }
};
