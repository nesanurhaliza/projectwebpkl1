<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // database/migrations/xxxx_xx_xx_create_orders_table.php
// database/migrations/xxxx_xx_xx_create_order_items_table.php
public function up()
{
    Schema::create('orders', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('address');
        $table->string('payment_type');
        $table->decimal('total_amount', 8, 2);
        $table->timestamps();
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
