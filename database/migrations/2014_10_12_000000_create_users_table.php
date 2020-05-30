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
        Schema::create('type_user', function (Blueprint $table) {
           $table->string('typeUserId', 5)->primary();
           $table->string('name', 10);
           $table->text('note')->nullable();
           $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->string('userName', 30)->primary();
            $table->string('password', 20);
            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->date('birthDate')->nullable();
            $table->string('gender', 10)->nullable();
            $table->string('address', 150);
            $table->string('email', 150)->unique();
            $table->string('typeUserId', 5);
            $table->string('status', 50)->nullable();
            $table->date("createdDate");
            $table->text("img")->nullable();

            $table->foreign('typeUserId')->references('typeUserId')->on('type_user');

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
        Schema::dropIfExists('typeUser');
    }
}
