<?php

namespace Lists\Http\Controllers;

use Illuminate\Http\Request;
use Lists\Http\Requests;
use Lists\UserList as UserList;
use Lists\ListItems as ListItems;
// Use the Auth Support Facade to access use information
use Illuminate\Support\Facades\Auth;

class UserListController extends Controller
{
    
    // Used to Middle auth to the List controller
	public function __construct()
    {
        $this->middleware('auth');
    }


	public function index($id)
	{

		$userId = $id;
		$lists = UserList::where('user_id', $id)->get();

		//dd($lists);

		return view('list/index', ['listsData' =>  $lists, 'userId' => $userId]);
		
	}


	public function create($userId)
	{
		//print_r($id);
		return view('list/create')->with('id', $userId);
	}


	public function store(Request $req)
	{

		$inputs = $req->all();

		$lastId = UserList::create($inputs)->id;

		return redirect()->route('list.show', $lastId);

	}


	public function show($listId)
	{
		//echo "show function";
		$userLists = UserList::find($listId);
		//This uses ORM relation ships to get the listitems
		$items = $userLists->listItems;
		
		return view('list/show', array('userLists' => $userLists, 'items' => $items));

	}


	public function destroy($listId)
	{

		// Find Items associated with the List
		$listItems = ListItems::where('list_id', '=', $listId)->get();

			//dd($listItems);

		// Delete List Items associated with List
		foreach ($listItems as $listitem) {

			ListItems::find($listitem->id)->delete();
			echo "item Deleted <br>";
		}
	
		// Delet the List
		UserList::where('id', '=', $listId)->delete();

		return back();
	}
} // end class

