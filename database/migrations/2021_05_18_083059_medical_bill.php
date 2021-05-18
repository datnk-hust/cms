<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MedicalBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('medical_bills', function (Blueprint $table) {
            $table->id();
            $table->string('MeAccessionNumber')->unique();
            $table->string('MeOrderNumber');
            $table->string('MeStudyId');
            $table->string('MeProviderId')->null_able();
            $table->string('MeConsultId')->null_able();
            $table->integer('MeScheduleDate');
            $table->integer('MeResultDate')->null_able();
            $table->longText('MeDescription')->null_able();
            $table->longText('MeConsult')->null_able();
            $table->string('MeAmount')->null_able();
            $table->string('MeUrlImage')->null_able();
            $table->integer('MeStatus')->null_able();
            $table->string('MeCollectorTime')->null_able();
            $table->string('MeCollectorId')->null_able();
            $table->string('MeIsEdited')->null_able();
            $table->string('MeIsPaymented')->null_able();
            $table->string('MeFilmNumber')->null_able();
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
        Schema::dropIfExists('medical_bills');
    }
}
