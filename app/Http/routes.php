<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function(){
	echo "welcome";
});

Route::auth();

Route::get('/home', 'HomeController@index');


// List Routes
Route::get('list/{id}', ['as' => 'list.index', 'uses' => 'UserListController@index']);
Route::get('list/show/{listId}', ['as' => 'list.show', 'uses' => 'UserListController@show']);
Route::get('list/create/{userId}', ['as' => 'list.create', 'uses' => 'UserListController@create']);
Route::get('test', 'UserListController@create');
Route::get('list/destroy/{listId}', ['as' => 'list.destroy', 'uses' => 'UserListController@destroy']);

Route::resource('list', 'UserListController'  , ['except' => ['index', 'show', 'create', 'destroy']]);

// Items Routes
Route::get('item/destroy/{listId}', [ 'as' => 'item.destroy', 'uses' => 'ListItemsController@destroy']);
Route::resource('item', 'ListItemsController', ['except' => 'destroy']);




// Test route
Route::post('test', function(){
	echo 'Test Route, This needs to use the Items Controller to add a new item to the DB, one item is added the controller method for creating must redirect ->back() or to the Show List Page.';
})->name('test');
