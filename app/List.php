<?php

namespace Lists;

use Illuminate\Database\Eloquent\Model;

class List extends Model
{
    
    //Relationships

	public function users()
	{
		return $this->hasMany('Lists\User');
	}

}
