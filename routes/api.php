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
 * This route is config for API use table Users
 * 
 * I use route group prefix with name Users so URL is ../api/Users/...
 */
Route::prefix('Users')->group(function () {
    /**
     * This table has CRUD
     * 
     */

    //This is Read data use method GET
    Route::post('get-all', 'Api\UserController@getAllUser');

    //This is Show a user use method GET with parameter id user
    Route::post('get-by-user-name', 'Api\UserController@getByUserName');

    //This is Create data
    Route::post('/update', 'Api\UserController@update');

    //This is Update data
    Route::put('/put/{id}', 'Api\UsersController@update');

    //This is Delete data
    Route::delete('/delete/{id}', 'Api\UsersController@destroy');

});