<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username',100)->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
       });
       Schema::create('teacher', function (Blueprint $table) {
           $table->increments('id');
           $table->string('first_name');
           $table->string('last_name');
           $table->string('username',100)->unique();
           $table->string('password');
           $table->rememberToken();
           $table->timestamps();
       });
       Schema::create('student', function (Blueprint $table) {
           $table->increments('id');
           $table->string('first_name');
           $table->string('last_name');
           $table->string('username',100)->unique();
           $table->string('password');
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
