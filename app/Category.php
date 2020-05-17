<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'categories';

    protected $primaryKey = 'categoryId';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'categoryId', 'name', 'description', 'createdDate', 'note'
    ];

    public $timestamps = false;

    public function dishes()
    {
        return $this->hasMany('App\Dish');
    }
}
