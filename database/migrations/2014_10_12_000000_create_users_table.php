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
            $table->string('userName', 30)->primary();
            $table->string('password');
            $table->string('fitstName');
            $table->string('lastName');
            $table->date('birthDate')->nullable();;
            $table->boolean('sex')->nullable();;
            $table->string('address')->nullable();;
            $table->string('email')->unique();
            $table->integer('level');
            $table->boolean('status')->nullable();
            
            $table->timestamp('email_verified_at')->nullable();
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
