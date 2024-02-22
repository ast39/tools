<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dict_categories', function (Blueprint $table) {

            $table->id('category_id')
                ->comment('ID категории');

            $table->string('title')
                ->comment('Название категории');

            $table->text('body')
                ->nullable()
                ->default(null)
                ->comment('Описание категории');

            $table->unsignedTinyInteger('active')
                ->default(1)
                ->comment('Доступность категории');

            $table->timestamps();

            $table->comment('Категории услуг');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dict_categories');
    }
};
