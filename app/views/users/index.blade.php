
		<h1>Users </h1>
	    @foreach ($users as $user)
	    <li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
	    
	    @endforeach
		
