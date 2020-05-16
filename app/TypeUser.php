<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    //
    protected $table = 'users';

    protected $primaryKey = 'userName';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'typeUser', 'name', 'note'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->hasMany('App\User', 'typeUserId');
    }

}
