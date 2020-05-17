<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $table = 'restaurants';

    protected $primaryKey = 'restaurantId';

    public $incrementing = false;

    protected $keyType = 'string';
    //
    protected $fillable = [
        'restaurantId', 'name', 'createdDate', 'status', 'openTime', 'closeTime', 'managerId', 'typeRestaurantId', 'note'
    ];

    public $timestamps = false;

    public function manager()
    {
        return $this->belongsToMany('App\User', 'managerId');
    }

    public function typeRestaurant()
    {
        return $this->belongsToMany('App\TypeRestaurant', 'typeRestaurantId');
    }

    public function dishes()
    {
        return $this->hasMany('App\Dish');
    }

    public function promotionDetail()
    {
        return $this->hasMany('App\OrderDetail');
    }
}
