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

            $table->unsignedBigInteger('master_id')
                ->comment('ID мастера');

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

            $table->foreign('master_id', 'master_id_category_id')
                ->references('id')
                ->on('masters')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function(Blueprint $table) {
            $table->dropForeign('master_id_category_id');
        });

        Schema::dropIfExists('categories');
    }
};
