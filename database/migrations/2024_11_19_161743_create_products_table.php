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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_title');
            $table->string('product_id')->unique();
            $table->text('description');
            $table->string('product_seo')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('status');
            $table->string('visibility');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->string('brand')->nullable();
            $table->decimal('actual_price', 10, 2);
            $table->decimal('discount_price', 10, 2)->nullable();
            $table->decimal('dealer_price', 10, 2)->nullable();
            $table->integer('stock');
            $table->integer('coin')->nullable();
            $table->boolean('availability');
            $table->string('ProductImages')->nullable();
            $table->json('tags')->nullable();
            $table->boolean('hot_deals')->default(false);
            $table->boolean('featured')->default(false);
            $table->boolean('today_deal')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
