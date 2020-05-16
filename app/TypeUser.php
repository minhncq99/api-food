<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    //
    protected $fillable = [
        'typeUser', 'name', 'note'
    ];

    public $timestamps = false;
}
