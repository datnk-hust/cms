<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class StudyManagement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('study_managements', function (Blueprint $table) {
            $table->id();
            $table->string('StudyId')->unique();
            $table->string('StName');
            $table->string('StNote')->null_able();
            $table->string('StPrice')->null_able();
            $table->string('StUnit')->null_able();
            $table->string('StModality')->null_able();
            $table->string('StStatus')->null_able();
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
        Schema::dropIfExists('study_managements');
    }
}
