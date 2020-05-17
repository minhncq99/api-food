<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * User
 * 
 */
Route::prefix('Users')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'Api\UserController@getAllUser');

    //Get by userName
    Route::post('get-by-user-name', 'Api\UserController@getByUserName');

    //Update
    Route::post('update', 'Api\UserController@update');

    //Create
    Route::post('create', 'Api\UserController@create');

});


/**
 * TypeUser
 * 
 */
Route::prefix('TypeUser')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'Api\TypeUserController@getAll');

    //Get by userName
    Route::post('get-by-type-user-id', 'Api\TypeUserController@getOne');

    //Update
    Route::post('update', 'Api\TypeUserController@update');

    //Create
    Route::post('create', 'Api\TypeUserController@create');

});

/**
 * Restaurant
 * 
 */
Route::prefix('Restaurant')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'Api\RestaurantController@getAll');

    //Get by userName
    Route::post('get-by-restaurant-id', 'Api\RestaurantController@getOne');

    //Update
    Route::post('update', 'Api\RestaurantController@update');

    //Create
    Route::post('create', 'Api\RestaurantController@create');

});


/**
 * Dish
 * 
 */
Route::prefix('Dish')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'Api\DishController@getAll');

    //Get by userName
    Route::post('get-by-dish-id', 'Api\DishController@getOne');

    //Update
    Route::post('update', 'Api\DishController@update');

    //Create
    Route::post('create', 'Api\DishController@create');

});