<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = [
        'categoryId', 'name', 'description', 'createdDate', 'note'
    ];

    public $timestamps = false;
}
