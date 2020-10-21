<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('OrderID');
            $table->foreign('OrderID')->references('id')->on('orders');
            $table->unsignedBigInteger('ProductCode');
            $table->foreign('ProductCode')->references('Code')->on('products');
            $table->integer('Qty');
            $table->float('PriceEach', 19 , 0);
            $table->timestamps();
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order__products');
    }
}
