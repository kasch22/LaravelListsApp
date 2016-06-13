<?php

namespace Lists;

use Illuminate\Database\Eloquent\Model;

class UserList extends Model
{

	protected $fillable = array('list_name', 'user_id');

	protected $table = 'user_lists';


	public function user()
	{
		return $this->belongsTo('Lists\User');
	}    

	public function listItems()
	{
		return $this->hasMany('Lists\ListItems', 'list_id');
		// the Param 'list_id' has been added to tell the function to use the column list_id as primary key for UserList references
	}    
}
