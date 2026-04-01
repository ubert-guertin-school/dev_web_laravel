<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $fillable = ['nom', 'email', 'password'];
    protected $hidden = ['password', 'remember_token'];

}
