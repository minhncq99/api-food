<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionDetail extends Model
{
    //
    protected $table = 'promotion_details';

    protected $primaryKey = ['promotionId', 'retaurantId'];

    public $incrementing = false;

    protected $keyType = 'string';
    //
    protected $fillable = [
        'promotionId', 'retaurantId', 'status', 'note'
    ];

    public function promotions()
    {
        return $this->belongsToMany('App\Promotion', 'promotionId');
    }
    public function restaurants()
    {
        return $this->belongsToMany('App\Restaurant', 'retaurantId');
    }
}