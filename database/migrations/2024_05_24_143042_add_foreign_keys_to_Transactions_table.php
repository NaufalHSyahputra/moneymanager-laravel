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
        Schema::table('transactions', function (Blueprint $table) {
            $table->foreign(['account_id'], 'transactions_account_id_fkey')->references(['id'])->on('accounts')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['to_account_id'], 'transactions_to_account_id_fkey')->references(['id'])->on('accounts')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['category_id'], 'transactions_category_id_fkey')->references(['id'])->on('categories')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['loan_id'], 'transactions_loan_id_fkey')->references(['id'])->on('loans')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['location_id'], 'transactions_location_id_fkey')->references(['id'])->on('locations')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['payee_id'], 'transactions_payee_id_fkey')->references(['id'])->on('payees')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->dropForeign('transactions_account_id_fkey');
            $table->dropForeign('transactions_to_account_id_fkey');
            $table->dropForeign('transactions_category_id_fkey');
            $table->dropForeign('transactions_loan_id_fkey');
            $table->dropForeign('transactions_location_id_fkey');
            $table->dropForeign('transactions_payee_id_fkey');
        });
    }
};
