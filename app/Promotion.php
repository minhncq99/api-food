<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $table = 'promotions';

    protected $primaryKey = 'promotionId';

    public $incrementing = false;

    protected $keyType = 'string';
    
    protected $fillable = [
        'promotionId', 'name', 'amount', 'openDate', 'closeDate', 'note', 'adminId'
    ];

    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany('App\User', 'adminId');
    }
}
