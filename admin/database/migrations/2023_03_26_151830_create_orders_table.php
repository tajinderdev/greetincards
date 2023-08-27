<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->unsignedBigInteger('user_id');
            $table->string('payment_method');
            $table->string('payment_status');
            $table->string('shipping_method');
            $table->text('shipping_address');
            $table->text('billing_address')->nullable();
            $table->decimal('subtotal', 8, 2);
            $table->decimal('tax', 8, 2);
            $table->decimal('shipping_cost', 8, 2);
            $table->decimal('total', 8, 2);
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
