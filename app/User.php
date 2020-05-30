<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    protected $primaryKey = 'userName';

    public $incrementing = false;

    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userName', 'password', 'firstName', 'lastName', 'birthDate', 'gender', 'email', 'typeUserId', 'status', 'createdDate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function typeUser()
    {
        return $this->belongsTo('App\TypeUser', 'typeUserId');
    }
    public function restaurants(){
      return $this->hasMany('App\Restaurant');
    }
    public function promotions(){
      return $this->hasMany('App\Promotion');
    }
    public function orders(){
      return $this->hasMany('App\Order');
    }
}
