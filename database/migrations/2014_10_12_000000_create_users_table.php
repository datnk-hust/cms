<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('UserId')->unique();
            $table->string('UserName');
            $table->string('UserEmail')->unique();
            $table->string('UserPhone')->null_able();
            $table->string('UserAddress')->null_able();
            $table->integer('UserRule');
            $table->integer('UserStatus')->null_able();
            $table->string('UserNote')->null_able();
            $table->string('UserPassword')->null_able();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
