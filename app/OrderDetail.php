<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $table = 'order_details';

    protected $primaryKey = ['orderId', 'dishId'];

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'orderId', 'dishId', 'amount', 'createdDate'
    ];

    public $timestamps = false;

    public function orders(){
      return $this->belongsTo('App\Order');
    }

    public function dishes(){
      return $this->belongsTo('App\Dish');
    }
}
