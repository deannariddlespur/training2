
@extends('layouts.default')

@section('content')
	<h1> All Users </h1>
	   
     <a href='/users/create'>Create New </a>
	{{ Form::open(['route' => 'users.store']) }}
  <div>
		  {{ Form::submit('Create') }}</div>
		
		{{ Form::close()}}
		
	
	@if ($users->count())
	
	@foreach ($users as $user)
	    	<li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
	    
	    @endforeach
	
	@else
		<p>Unfortunately, there are no users</p>
	@endif
	

@stop
	   