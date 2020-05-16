<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    //
    protected $fillable = [
        'restaurantId', 'name', 'createdDate', 'status', 'openTime', 'closeTime', 'managerId', 'typeRestaurantId', 'note'
    ];

    public $timestamps = false;
}
