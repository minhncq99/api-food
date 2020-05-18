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
 * Type Restaurant
 * 
 */
Route::prefix('TypeRestaurant')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'API\TypeRestaurantController@getAll');

    //Get by userName
    Route::post('get-by-type-restaurant-id', 'API\TypeRestaurantController@getOne');

    //Update
    Route::post('update', 'API\TypeRestaurantController@update');

    //Create
    Route::post('create', 'API\TypeRestaurantController@create');

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

/**
 * Promotion
 * 
 */
Route::prefix('Promotion')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'API\PromotionController@getAll');

    //Get by userName
    Route::post('get-by-promotion-id', 'API\PromotionController@getOne');

    //Update
    Route::post('update', 'API\PromotionController@update');

    //Create
    Route::post('create', 'API\PromotionController@create');

});

/**
 * Promotion Detail
 * 
 */
Route::prefix('PromotionDetail')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'API\PromotionDetailController@getAll');

    //Get by Promotion Id
    Route::post('get-by-promotion-id', 'API\PromotionDetailController@getOneByPromotion');

    //Get by Restaurant Id
    Route::post('get-by-restaurant-id', 'API\PromotionDetailController@getOneByRestaurant');

    //Update
    Route::post('update', 'API\PromotionDetailController@update');

    //Create
    Route::post('create', 'API\PromotionDetailController@create');

});

/**
 * Order
 * 
 */
Route::prefix('Order')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'API\OrdersController@getAll');

    //Get by Promotion Id
    Route::post('get-by-order-id', 'API\OrdersController@getOne');

    //Update
    Route::post('update', 'API\OrdersController@update');

    //Create
    Route::post('create', 'API\OrdersController@create');

});


/**
 * Order
 * 
 */
Route::prefix('OrderDetail')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //Get all
    Route::post('get-all', 'API\OrderDetailController@getAll');

    //Get by Promotion Id
    Route::post('get-by-dish-id', 'API\OrderDetailController@getOneByDish');

    //Get by Order Id
    Route::post('get-by-order-id', 'API\OrderDetailController@getOneByOrder');

    //Create
    Route::post('create', 'API\OrderDetailController@create');

});