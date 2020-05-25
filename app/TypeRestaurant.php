<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeRestaurant extends Model
{
    //
    protected $table = 'type_restaurants';

    protected $primaryKey = 'typeRestaurantId';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'typeRestaurantId', 'name', 'note'
    ];

    public function restaurants(){
      return $this->hasMany('App\Restaurant');
    }

    public $timestamps = false;
}
