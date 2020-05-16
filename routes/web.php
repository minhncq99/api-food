<?php

use Illuminate\Support\Facades\Route;
use App\User;
use App\Category;
use App\Dish;
use App\Order;
use App\OrderDetail;
use App\Promotion;
use App\Restaurant;
use App\TypeRestaurant;
use App\TypeUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});