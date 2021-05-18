<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('PID')->unique();
            $table->string('PName');
            $table->string('PDob')->null_able();
            $table->string('PSex')->null_able();
            $table->string('PAddress')->null_able();
            $table->string('PPhone')->null_able();
            $table->string('PEmail')->null_able();
            $table->string('PNational')->null_able();
            $table->string('PNok')->null_able();
            $table->string('PAllergy')->null_able();
            $table->string('PInsuranceNumber')->null_able();
            $table->string('PCINumber')->null_able();
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
        Schema::dropIfExists('patients');
    }
}
