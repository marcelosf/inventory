<?php

namespace Inventory\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject
{
    use Notifiable;

    protected $fillable = [

        'code', 'name', 'email', 'password',

    ];


    public function getJWTIdentifier()
    {

        return $this->getKey();

    }

    public function getJWTCustomClaims()
    {

        return [];

    }

}
