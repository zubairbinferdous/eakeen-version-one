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
        Schema::create('work_places', function (Blueprint $table) {
            $table->id();
            $table->string('packages_name');
            $table->decimal('packages_amount', 10, 2);
            $table->string('payment_type');
            $table->string('number');
            $table->enum('status', ['Publish', 'Unpublish']);
            $table->text('task_one')->nullable();
            $table->text('task_two')->nullable();
            $table->text('task_three')->nullable();
            $table->text('task_four')->nullable();
            $table->text('task_five')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_places');
    }
};
