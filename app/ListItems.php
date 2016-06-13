<?php

namespace Lists;

use Illuminate\Database\Eloquent\Model;

class ListItems extends Model
{

	public function list()
	{
		// The 'list_id' param tells the relationship the list_id column is the UserList class's forign key 
		$this->belongsTo('Lists\UserList', 'list_id');
	}
	

    protected $fillable =  ['item_body', 'list_id', 'created_at', 'updated_at'];

    protected $table = 'list_items';
}
