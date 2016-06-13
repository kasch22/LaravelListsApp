@extends('layouts.app')

@section('content')

<?
// Work out how to access Data from controller
?>
	<div class="container">
	    <div class="row">
	        <div class="col-md-10 col-md-offset-1">
	            <h1>Create New List</h1>
	            <form method="post" action="{{route('list.store')}}">
	            	<input type="text" name="list_name" placeholder="Enter List Title">
	            	<input type="hidden" name="user_id" value="{{$id}}">
	            	<input type="hidden" name="_token" value="{{csrf_token()}}">
	            	<input type="submit" name="submit" value="Create List">
	            </form>            
	           
	        </div>
	    </div>
	</div>
@endsection