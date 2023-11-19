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
            $table->unsignedBigInteger('product_request_id');
            $table->integer('external_id');
            $table->string('name');
            $table->string('brand');
            $table->integer('brand_id');
            $table->string('supplier');
            $table->integer('sale')->nullable()->comment('скидка');
            $table->integer('price');
            $table->integer('sale_price')->nullable();
            $table->integer('rating');
            $table->integer('review_rating');
            $table->integer('feedbacks');
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
