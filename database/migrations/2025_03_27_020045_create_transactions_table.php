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
        if (!Schema::hasTable('payees')) {
            throw new \Exception('The payees table must be created before the transactions table.');
        }

        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('account_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('payee_id')->nullable()->constrained('payees')->onDelete('set null');
            $table->decimal('amount', 12, 2);
            $table->enum('type', ['income', 'expense', 'transfer']);
            $table->date('date');
            $table->date('due_date')->nullable();
            $table->string('description');
            $table->text('notes')->nullable();
            $table->boolean('is_recurring')->default(false);
            $table->enum('recurring_period', ['daily', 'weekly', 'monthly', 'quarterly', 'yearly'])->nullable();
            $table->boolean('is_paid')->default(false);
            $table->enum('payment_method', ['cash', 'credit_card', 'debit_card', 'bank_transfer', 'check', 'other'])->nullable();
            $table->timestamps();

            $table->index(['user_id', 'type', 'date']);
            $table->index(['due_date', 'is_paid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
