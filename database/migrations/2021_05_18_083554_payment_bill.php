<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PaymentBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('payment_bills', function (Blueprint $table) {
            $table->id();
            $table->string('PaymentBillId')->unique();
            $table->string('PBVisitId');
            $table->string('PBTime')->null_able();
            $table->string('PBAccountantId')->null_able();
            $table->string('PBStatus')->null_able();
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
        Schema::dropIfExists('payment_bills');

    }
}
