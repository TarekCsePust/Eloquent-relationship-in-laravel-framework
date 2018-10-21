<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    public function passport()
    {
    	return $this->hasOne(Passport::class);
    }

    public function numbers()
    {
    	return $this->hasMany(Number::class);
    }

    public function roles()
    {
    	return $this->belongsToMany(Role::class);
    }
}
