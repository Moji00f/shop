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
            $table->string('title');
            $table->string('en_title');
            $table->string('slug');
            $table->text('content');
            $table->string('image')->nullable();
            $table->smallInteger('status')->default(0);
            $table->text('description')->nullable(); //for seo
            $table->integer('view')->nullable(0);
            $table->string('fake', 10)->default('no');
            $table->integer('product_count')->default(0);
            $table->integer('lowest_price')->default(0);
            $table->softDeletes();
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
