<?php

use App\Models\Account;
use App\Models\Category;
use App\Models\Loan;
use App\Models\Location;
use App\Models\Payee;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Account::class);
            $table->foreignIdFor(Account::class, 'to_account_id')->nullable();
            $table->foreignIdFor(Category::class)->nullable();
            $table->foreignIdFor(Loan::class)->nullable();
            $table->foreignIdFor(Payee::class)->nullable();
            $table->decimal('amount', 10);
            $table->string('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Transactions');
    }
};
