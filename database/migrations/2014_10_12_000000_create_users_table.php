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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('other_name');
            $table->string('telephone');
            $table->string('program')->nullable();
            $table->string('institution_id')->nullable();
            $table->string('department')->nullable();
            $table->string('lab_name')->nullable();
            $table->string('residence')->nullable();
            $table->Date('date_of_birth')->nullable();
            $table->string('status')->nullable();
            $table->int('user_type')->nullable();
            $table->string('email')->unique();
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
