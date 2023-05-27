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
        Schema::create('register_products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('bar_code');
            $table->string('name');
            $table->unsignedBigInteger('category_id');
            $table->string('manufacturer');
            $table->integer('quantity');
            $table->float('price', 8,2);
            $table->unsignedBigInteger('platform_id')->nullable();
            $table->unsignedBigInteger('warranty_id')->nullable();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->foreign('warranty_id')->references('id')->on('warranties');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_products');
    }
};
