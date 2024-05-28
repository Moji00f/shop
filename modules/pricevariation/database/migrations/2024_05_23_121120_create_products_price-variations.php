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
        Schema::create('products__price-variations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('price1');
            $table->integer('price2');
            $table->smallInteger('preparation_time')->default(0);
            $table->integer('product_count')->nullable();
            $table->smallInteger('max_product_cart')->nullable();
            $table->morphs('param1');
            $table->morphs('param2');
            $table->string('sender')->default('self');
            $table->string('selected_buy_box')->default('no');
            $table->smallInteger('status')->default(1);
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product__price-variations');
    }
};
