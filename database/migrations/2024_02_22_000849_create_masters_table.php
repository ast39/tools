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
        Schema::create('masters', function (Blueprint $table) {

            $table->id()
                ->comment('ID мастера');

            $table->string('title')
                ->comment('Специальность мастера');

            $table->text('body')
                ->nullable()
                ->default(null)
                ->comment('Описание мастера');

            $table->unsignedTinyInteger('active')
                ->default(1)
                ->comment('Доступность мастера');

            $table->timestamps();

            $table->comment('Мастера');
        });
    }

    /**
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('masters');
    }
};
