@extends('layouts.default')

@section('content')

		<h1>Create New </h1>
		{{ Form::open(['route' => 'users.store']) }}
		<div>
		  {{ Form::label('username', 'Username:') }}
		  {{ Form::text('username') }}
		  </div>
		   <div>
		   {{ Form::label('password', 'Password:') }}
		  {{ Form::password('password') }}
		  </div>
		  <div>
		  {{ Form::submit('Create') }}</div>
		
		{{ Form::close()}}

@stop
	   
	