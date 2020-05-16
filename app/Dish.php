<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    //
    protected $fillable = [
        'dishId', 'name', 'createdDate', 'unit', 'note', 'categoryId', 'restaurantId'
    ];

    public $timestamps = false;
}
