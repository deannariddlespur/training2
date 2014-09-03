<?php

Route::get('users', 'UsersController@index');


Route::get('users/{username}', function($username)
{
   $user = User::whereUsername($username)->first();
   return View::make('users.show', ['user' => $user]);

  
});




