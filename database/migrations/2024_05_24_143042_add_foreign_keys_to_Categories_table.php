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
        Schema::table('categories', function (Blueprint $table) {
            $table->foreign(['category_type_id'], 'categories_category_type_id_fkey')->references(['id'])->on('category_types')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['parent_id'], 'categories_parent_id_fkey')->references(['id'])->on('categories')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropForeign('categories_category_type_id_fkey');
            $table->dropForeign('categories_parent_id_fkey');
        });
    }
};
