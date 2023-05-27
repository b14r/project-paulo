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
        Schema::create('make_sales', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('client_sale_id');
            $table->unsignedBigInteger('product_sale_id');
            $table->unsignedBigInteger('payment_id');
            $table->unsignedBigInteger('payment_status_id');
            $table->unsignedBigInteger('sale_status_id');
            $table->double('total')->nullable();

            $table->foreign('client_sale_id')->references('id')->on('client_sales');
            $table->foreign('product_sale_id')->references('id')->on('product_sales');
            $table->foreign('payment_id')->references('id')->on('payments');
            $table->foreign('payment_status_id')->references('id')->on('statuses');
            $table->foreign('sale_status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('make_sales');
    }
};
