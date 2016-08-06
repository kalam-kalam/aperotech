<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'username', 'password',
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function aperos()
    {
        return $this->hasMany('App\Apero');
    }
    
    public function isVistor()
    {
        return in_array($this->role, 'visitor', 'admin');
    }

}
