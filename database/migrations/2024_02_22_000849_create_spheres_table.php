<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * @return void
     */
    public function up(): void
    {
        Schema::create('spheres', function (Blueprint $table) {

            $table->id()
                ->comment('ID сферы');

            $table->string('title')
                ->comment('Название сферы');

            $table->text('body')
                ->nullable()
                ->default(null)
                ->comment('Описание сферы');

            $table->unsignedTinyInteger('active')
                ->default(1)
                ->comment('Доступность сферы');

            $table->timestamps();

            $table->comment('Сферы');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('spheres');
    }
};
