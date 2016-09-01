<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('hours');
            $table->float('payrate');
            $table->boolean('mondaypm');
            $table->boolean('mondayam');
            $table->boolean('tuesdaypm');
            $table->boolean('tuesdayam');
            $table->boolean('wednesdaypm');
            $table->boolean('wednesdayam');
            $table->boolean('thursdaypm');
            $table->boolean('thursdayam');
            $table->boolean('fridaypm');
            $table->boolean('fridayam');
            $table->boolean('saturdaypm');
            $table->boolean('saturdayam');
            $table->boolean('sundaypm');
            $table->boolean('sundayam');
            $table->string('accounttype');
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
        Schema::drop('users');
    }
}
