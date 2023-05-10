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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->decimal('totalCost');
            $table->boolean('finance')->default(false);
            $table->integer('monthsFinanced')->nullable();
            $table->decimal('downPayment', 12, 2)->nullable();
            $table->decimal('monthlyCost', 12, 2)->nullable();
            $table->foreignId('car_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
