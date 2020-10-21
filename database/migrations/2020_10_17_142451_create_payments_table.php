<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->string('CheckNum')->primary();
            $table->unsignedBigInteger('CustomerID');
            $table->foreign('CustomerID')->references('id')->on('customers');
            $table->dateTime('PaymentDate');
            $table->float('Amount', 19 , 0);
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
        Schema::dropIfExists('payments');
    }
}
