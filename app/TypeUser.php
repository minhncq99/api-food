<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeUser extends Model
{
    //
    protected $table = 'type_user';

    protected $primaryKey = 'typeUserId';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'typeUserId', 'name', 'note'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->hasMany('App\User');
    }

}
