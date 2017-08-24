<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Eloquent  implements Authenticatable
{
	use AuthenticableTrait;
    protected $collection = 'users';
    protected $fillable = ['name', 'email', 'password'];
}
