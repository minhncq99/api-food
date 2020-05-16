<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'orderId', 'name', 'createdDate', 'phoneNumber', 'status','note', 'promotionId', 'customerId', 'ShipperId', 'adminId'
    ];

    public $timestamps = false;
}
