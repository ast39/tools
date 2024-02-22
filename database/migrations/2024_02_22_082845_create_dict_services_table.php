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
        Schema::create('dict_services', function (Blueprint $table) {

            $table->id('service_id')
                ->comment('ID услуги');

            $table->unsignedBigInteger('category_id')
                ->comment('ID категории');

            $table->string('title')
                ->comment('Название услуги');

            $table->text('body')
                ->nullable()
                ->default(null)
                ->comment('Описание услуги');

            $table->unsignedTinyInteger('favorite')
                ->default(0)
                ->comment('Метка важности');

            $table->unsignedTinyInteger('active')
                ->default(1)
                ->comment('Доступность услуги');

            $table->timestamps();

            $table->comment('Перечень услуг');

            $table->foreign('category_id', 'category_id_service_id')
                ->references('category_id')
                ->on('dict_categories')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dict_services', function(Blueprint $table) {
            $table->dropForeign('category_id_service_id');
        });

        Schema::dropIfExists('dict_services');
    }
};
