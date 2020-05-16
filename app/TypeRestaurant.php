<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeRestaurant extends Model
{
    //
    protected $fillable = [
        'typeRestaurantId', 'name', 'note'
    ];

    public $timestamps = false;
}
