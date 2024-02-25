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
        Schema::table('spheres', function (Blueprint $table) {
            $table->tinyInteger('position')
                ->after('active')
                ->default(-1)
                ->comment('Позиционирование списка');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('spheres', function (Blueprint $table) {
            $table->dropColumn('position');
        });
    }
};
