@extends('layouts.app')

@section('content')

<?
// Work out how to access Data from controller
?>
	<div class="container ">
	    <div class="row show-lists">
	        <div class="col-lg-10 col-md-10 col-md-offset-1">
	            <h1>See your Lists</h1>
	           
	           
	            <form method="delete">
		            <table id="" class="table list-table">
		            	<tr>
		            		<th>List</th>
		            		<th><a class="show-lists-a" href="{{route('list.create', ['id' => $userId])}}">Add a List</a></th>
		            	</tr>
		            	@foreach($listsData as $listItem)
			            	<tr>
			            		<td class="table-td">
			            			<a href="{{route('list.show', ['listId' => $listItem->id])}}">
					            			{{$listItem->list_name}}
					            		</a>
			            		</td>
			            		<td>
			            			<input class="btn btn-danger del-btn" type="submit" name="delete" value="Delete" 
					            			formaction="{{route('list.destroy', ['listId' => $listItem->id])}}">
		            			</td>
			            	</tr>
	            		@endforeach	
	            	</table>	
	            </form>	
	           

	        </div>
	    </div>
	</div>
@endsection