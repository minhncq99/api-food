<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Type Restaurant
        Schema::create('type_restaurants', function (Blueprint $table) {
            $table->string('typeRestaurantId', 50)->primary();
            $table->string('name', 50)->nullable();
            $table->text('note')->nulable();

            $table->timestamps();
        });

        // Restaurant
        Schema::create('restaurants', function (Blueprint $table) {
            $table->string('restaurantId', 50)->primary();
            $table->string('name', 100)->nullable();
            $table->date('createdDate');
            $table->string('status', 50)->nullable();
            $table->string('openTime', 20)->nullable();
            $table->string('closeTime', 20)->nullable();
            $table->string('managerId', 30);
            $table->string('typeRestaurantId', 50);
            $table->text('note')->nullable();
            $table->string('address');
            $table->text('img')->nullable();

            $table->foreign('managerId')->references('userName')->on('users');
            $table->foreign('typeRestaurantId')->references('typeRestaurantId')->on('type_restaurants');

            $table->timestamps();
        });

        // Category
        Schema::create('categories', function (Blueprint $table) {
            $table->string('categoryId', 50)->primary();
            $table->string('name', 50)->nullable();
            $table->text('description')->nullable();
            $table->date('createdDate');
            $table->text('note')->nullable();
            $table->text('img')->nullable();

            $table->timestamps();
        });

        // Dish
        Schema::create('dishes', function (Blueprint $table) {
            $table->string('dishId', 50)->primary();
            $table->string('name', 100);
            $table->date('createdDate');
            $table->string('unit', 20)->nullable();
            $table->text('note')->nullable();
            $table->string('status', 50);
            $table->bigInteger('price');
            $table->string('categoryId', 50);
            $table->string('restaurantId', 50);
            $table->text('img')->nullable();

            $table->foreign('categoryId')->references('categoryId')->on('categories');
            $table->foreign('restaurantId')->references('restaurantId')->on('restaurants');

            $table->timestamps();
        });

        // Promotion
        Schema::create('promotions', function (Blueprint $table) {
            $table->string('promotionId', 50)->primary();
            $table->string('name', 100)->nullable();
            $table->integer('amount');
            $table->date('openDate');
            $table->date('closeDate');
            $table->text('note');
            $table->string('adminId', 30);

            $table->foreign('adminId')->references('userName')->on('users');

            $table->timestamps();
        });

        // Promotion Detail
        Schema::create('promotion_details', function (Blueprint $table) {
            $table->string('promotionId', 50);
            $table->string('restaurantId', 50);
            $table->string('status', 50)->nullable();
            $table->text('note')->nullable();
            $table->date('createdDate');

            $table->primary(['promotionId', 'restaurantId']);

            $table->foreign('promotionId')->references('promotionId')->on('promotions');
            $table->foreign('restaurantId')->references('restaurantId')->on('restaurants');

            $table->timestamps();
        });

        // Order
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('orderId');
            $table->string('name', 100)->nullable();
            $table->date('createdDate');
            $table->string('phoneNumber', 15)->nullable();
            $table->string('status', 50)->nullable();
            $table->text('note')->nullable();
            $table->string('promotionId', 30)->nullable();
            $table->string('customerId', 30);
            $table->string('shipperId', 30);
            $table->string('adminId', 30);
            $table->string('pickUpAddress');
            $table->string('shipAddress');
            $table->bigInteger('shippingCost');

            $table->foreign('promotionId')->references('promotionId')->on('promotions');
            $table->foreign('customerId')->references('userName')->on('users');
            $table->foreign('shipperId')->references('userName')->on('users');
            $table->foreign('adminId')->references('userName')->on('users');

            $table->timestamps();
        });

        //Order Detail
        Schema::create('order_details', function (Blueprint $table) {
            $table->unsignedBigInteger('orderId');
            $table->string('dishId', 50);
            $table->integer('amount');
            $table->date('createdDate');

            $table->foreign('orderId')->references('orderId')->on('orders');
            $table->foreign('dishId')->references('dishId')->on('dishes');

            $table->timestamps();
        });
        /*
        Schema::create('db', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('promotion_details');
        Schema::dropIfExists('promotions');
        Schema::dropIfExists('dishes');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('restaurants');
        Schema::dropIfExists('type_restaurants');
    }
}
