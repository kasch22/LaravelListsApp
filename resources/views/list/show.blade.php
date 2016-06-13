@extends('layouts.app')

@section('content')

<?
// Work out how to access Data from controller
?>
	<div class="container">
	    <div class="row show-items">
	        <div class="col-md-10 col-md-offset-1">
	            <h1>{{$userLists->list_name}}</h1>
	            	
	           			
	       		<form method="post" action="{{route('item.store')}}">
	       			<input type="text" name="item_body" placeholder="Add item here">
	       			<button type="submit">Add item</button>
	       			<input type="hidden" name="_token" value="{{csrf_token()}}">
	       			<input type="hidden" name="list_id" value="{{$userLists->id}}">
	       		</form>
	        </div>
	    </div>

	    <div class="row show-items">
	    	<div class="col-md-10 col-md-offset-1">
		    	<form method="delete" >
					<table id="" class="table list-table">
						<tr>
							<th>Item</th>
						    <th>Done?</th>
						    <th></th>
						</tr>
						@foreach($items as $item)
						<tr>
						    <td>
						    	{{$item->item_body}}
					    	</td>
						    <td>
						    	<input type="checkbox" name="done">
					    	</td>
						    <td>
						    	<button type="submit" name="delete" formaction="{{route('item.destroy', ['itemId' => $item->id])}}">
						    	Delete
						    	</button>
					    	</td>
						</tr>
						@endforeach
					</table> 
				</form>
			</div>
	    	
		</div>		
	</div>
@endsection