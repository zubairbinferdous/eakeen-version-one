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
            $table->id(); // Primary key
            $table->string('name'); // Name field
            $table->string('user_id'); // Name field
            $table->string('phone'); // Phone field
            $table->string('email')->nullable(); // Email field
            $table->string('payment_method')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('order_number')->nullable();
            $table->string('city'); // City field
            $table->string('post_code'); // Post code field
            $table->text('address'); // Address field
            $table->string('status');
            $table->decimal('sub_total', 10, 2); // Subtotal field
            $table->timestamps(); // Created_at and Updated_at fiel
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
