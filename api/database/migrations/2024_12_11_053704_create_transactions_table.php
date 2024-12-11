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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('type_id')->constrained();
            $table->boolean('invoice')->default(false);
            $table->string('invoice_number')->nullable();
            $table->decimal('amount', 8, 2);
            $table->integer('quantity')->default(1);
            $table->string('payment_terminal')->nullable();
            $table->foreignId('cash_register_id')->constrained('cash_registers');
            $table->timestamps();
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
