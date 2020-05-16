<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $fillable = [
        'promotionId', 'name', 'amount', 'openDate', 'closeDate', 'note', 'adminId'
    ];

    public $timestamps = false;
}
