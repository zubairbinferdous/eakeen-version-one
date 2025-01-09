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
        Schema::create('affiliate_lists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Foreign key
            $table->string('paymentAmount');
            $table->string('Group');
            $table->date('Birth');
            $table->enum('Gender', ['male', 'female']);
            $table->string('WhatsAppNumber');
            $table->string('NidNumber')->unique();
            $table->string('ImageFront')->nullable();
            $table->string('ImageBack')->nullable();
            $table->string('District');
            $table->string('Thana');
            $table->enum('PaymentType', ['Bkash', 'Nagad', 'Rocket']);
            $table->string('PaymentNumber');
            $table->string('TransationNumber')->unique();
            $table->string('status')->default('affiliate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        Schema::dropIfExists('affiliate_lists');
    }
};
