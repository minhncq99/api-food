<?php
namespace App\Http\Controllers\Api;

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
    Route::post('get-all', 'API\UserController@getAllUser');

    //Get by userName
    Route::post('get-by-user-name', 'API\UserController@getByUserName');

    //Update
    Route::post('update', 'API\UserController@update');

    //Create
    Route::post('create', 'API\UserController@create');

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
    Route::post('get-all', 'API\TypeUserController@getAll');

    //Get by userName
    Route::post('get-by-type-user-id', 'API\TypeUserController@getOne');

    //Update
    Route::post('update', 'API\TypeUserController@update');

    //Create
    Route::post('create', 'API\TypeUserController@create');

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
    Route::post('get-all', 'API\RestaurantController@getAll');

    //Get by userName
    Route::post('get-by-restaurant-id', 'API\RestaurantController@getOne');

    //Update
    Route::post('update', 'API\RestaurantController@update');

    //Create
    Route::post('create', 'API\RestaurantController@create');

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
    Route::post('get-all', 'API\DishController@getAll');

    //Get by userName
    Route::post('get-by-dish-id', 'API\DishController@getOne');

    //Update
    Route::post('update', 'API\DishController@update');

    //Create
    Route::post('create', 'API\DishController@create');

});

/**
 * Category
 * 
 */
Route::prefix('Category')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'API\CategoryController@getAll');

    //Get by userName
    Route::post('get-by-category-id', 'API\CategoryController@getOne');

    //Update
    Route::post('update', 'API\CategoryController@update');

    //Create
    Route::post('create', 'API\CategoryController@create');

});