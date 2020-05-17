<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    //
    protected $table = 'dishes';

    protected $primaryKey = 'dishId';

    public $incrementing = false;

    protected $keyType = 'string';
    protected $fillable = [
        'dishId', 'name', 'createdDate', 'unit', 'note', 'categoryId', 'restaurantId'
    ];

    public function restaurant()
    {
        return $this->belongsToMany('App\Restaurant', 'restaurantId');
    }

    public function category()
    {
        return $this->belongsToMany('App\Cregory', 'categoryId');
    }

    public function orderDetails()
    {
        return $this->hasMany('App\OrderDetail');
    }
    

    public $timestamps = false;
}
