<?php

namespace Lists\Http\Controllers;

use Illuminate\Http\Request;

use Lists\Http\Requests;
use Lists\ListItems as ListItems;


class ListItemsController extends Controller
{
    
	public function store(Request $req)
	{
		//dd($req);
		$inputs = $req->all();

		ListItems::create($inputs);

		return redirect()->route('list.show', $req->list_id);

	}

	public function destroy($itemId)
	{
		//echo "Destroy ".$itemId;
		ListItems::find($itemId)->delete();
		//echo $itemId. "Item destoryed";
		return back();
	}

}
