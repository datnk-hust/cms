<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class VisitManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('visit_managements', function (Blueprint $table) {
            $table->id();
            $table->string('VisitId')->unique();
            $table->string('VNPid');
            $table->string('VNAdmitTime')->null_able();
            $table->string('VNDischargeTime')->null_able();
            $table->string('VNReason')->null_able();
            $table->string('VNPregnant')->null_able();
            $table->string('VNWeight')->null_able();
            $table->string('VNHeight')->null_able();
            $table->string('VNBP')->null_able();
            $table->string('VNPulse')->null_able();
            $table->string('VNTemp')->null_able();
            $table->string('VNRR')->null_able();
            $table->string('VNStatus')->null_able();
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
        Schema::dropIfExists('visit_managements');
    }
}
