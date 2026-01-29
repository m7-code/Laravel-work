<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public $timestamps = false;

    protected $fillable = ['name', 'email', 'city'];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
}
