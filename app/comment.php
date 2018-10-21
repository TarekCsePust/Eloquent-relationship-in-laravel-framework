<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use App\audio;
use App\video;
Relation::morphMap(
[
	'audio'=>Audio::class,
	'video'=>Video::class,

]


);

class comment extends Model
{
   public function commentable()
   {
   	 return $this->morphTo();
   }
}
