<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;
class role extends Model
{
     public function users()
    {
    	return $this->belongsToMany(User::class);
    	//return $this->belongsToMany(User::class)->withPivot('created_at','updated_at');
    }
}
