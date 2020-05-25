<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'orders';

    protected $primaryKey = 'orderId';

    protected $fillable = [
        'orderId', 'name', 'createdDate', 'phoneNumber', 'status','note'
        , 'promotionId', 'customerId', 'ShipperId', 'adminId', 'pickUpAddress'
        , 'shipAddresss', 'shippingCost'
    ];

    public $timestamps = false;

    public function order_details(){
      return $this->hasMany('App\OrderDetail');
    }

    public function promotions(){
      return $this->belongsTo('App\Promotion', 'promotionId');
    }

    public function customer()
    {
        return $this->belongsTo('App\User', 'customerId');
    }

    public function shipper()
    {
      return $this->belongsTo('App\User', 'ShipperId');
    }

    public function admin()
    {
      return $this->belongsTo('App\User', 'adminId');
    }
}
