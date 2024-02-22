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
        Schema::create('categories', function (Blueprint $table) {

            $table->id()
                ->comment('ID категории');

            $table->unsignedBigInteger('sphere_id')
                ->comment('ID сферы');

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

            $table->foreign('sphere_id', 'sphere_id_category_id')
                ->references('id')
                ->on('spheres')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function(Blueprint $table) {
            $table->dropForeign('sphere_id_category_id');
        });

        Schema::dropIfExists('categories');
    }
};
