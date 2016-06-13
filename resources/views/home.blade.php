@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        <div class="account-panel">
            <h4>Welome to Simple Lists</h4>
            <p id="blue">Its time to make a list, visit <a href="{{route('list.index', ['id' => Auth::user()->id])}}">My Lists</a></p>
        </div>     
        

        </div>
    </div>
</div>
@endsection
