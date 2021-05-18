<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('order_managements', function (Blueprint $table) {
            $table->id();
            $table->string('OrderId')->unique();
            $table->string('OVisitId');
            $table->string('OStartTime')->null_able();
            $table->string('OEndTime')->null_able();
            $table->string('OStatus')->null_able();
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
        //
        Schema::dropIfExists('orders');
    }
}
